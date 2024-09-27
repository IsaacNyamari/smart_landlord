<?php
// Load Composer's autoloader
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Database
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "landlord";

    protected function connect()
    {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database) or die(mysqli_connect_error());
        if ($conn) {
            return $conn;
        }
    }
}
trait GenerateId
{
    public function generateId($length = 60)
    {
        return substr(md5(uniqid(mt_rand(), true)), 0, $length);
    }
}
trait GenerateCode
{
    public function generateCode($length = 6)
    {
        return strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, $length));
    }
}
class Caretakers extends Database
{
    public $connection;

    public function getAparts() {}
    public function addApart()
    {
        $this->connection = $this->connect();
    }
    public function deleteApart()
    {
        $this->connection = $this->connect();
    }
    public function updateApart()
    {
        $this->connection = $this->connect();
    }
}
class Apartments extends Database
{
    public $connection;
    use GenerateId;
    public function getAparts()
    {
        $this->connection = $this->connect();
        $query = "SELECT * FROM apartments";
        $result = mysqli_query($this->connect(), $query);
        return $result;
    }
    public function addApart()
    {
        $this->connection = $this->connect();
    }
    public function deleteApart()
    {
        $this->connection = $this->connect();
    }
    public function updateApart()
    {
        $this->connection = $this->connect();
    }
}
class Tenants extends Database
{
    public $connection;
    use GenerateId;
    public function getTenants()
    {
        $this->connection = $this->connect();
        $sql =  "SELECT * FROM tenants";
        $stmt = mysqli_prepare($this->connection, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return $result;
    }
    public function addTenant($id_number = null, $names = null, $apartment = null)
    {
        try {
            $id = $this->generateId(25);
            $this->connection = $this->connect();
            $sql =  "INSERT INTO `tenants`(`tenant_id`, `id_number`, `names`, `apartment`) 
        VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $id, $id_number, $names, $apartment);
            if (mysqli_stmt_execute($stmt)) {
                $status = "Successfully added!";
                return $status;
            } else {
                if (mysqli_errno($this->connection) == 1062) {
                    $status = "Users exists with this id!";
                    return $status;
                }
            }
        } catch (\Throwable $err) {
            throw $err;
        }
    }
    public function deleteTenant($id = null)
    {
        try {
            $this->connection = $this->connect();
            $sql =  "DELETE FROM `tenants` WHERE tenant_id = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "s", $id);
            if (mysqli_stmt_execute($stmt)) {
                $status = "success";
                return $status;
            }
        } catch (\Error $err) {
            throw $err;
        }
    }
    public function updateTenant($id_number = null, $names = null, $apartment = null)
    {
        try {
            $this->connection = $this->connect();
            $sql =  "UPDATE `tenants` SET `names` = ? `apartment`= ?  WHERE id_number = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "s", $names, $apartment, $id_number);
            if (mysqli_stmt_execute($stmt)) {
                $status = "success";
                return $status;
            }
        } catch (\Error $err) {
            throw $err;
        }
    }
}

class Owners extends Database
{
    public $connection;
    use GenerateId;
    use GenerateCode;
    public function addOwner(
        $fname = null,
        $lname = null,
        $email = null,
        $password = null
    ) {
        $this->connection = $this->connect();
        // Function to generate a random code
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $code = $this->GenerateCode();
        $user_id = $this->generateId();
        $mail = new PHPMailer(true);
        $query = "INSERT INTO `owners`(`owner_id`, `fname`, `lname`, `email`, `password`) 
    VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, 'sssss', $user_id, $fname, $lname, $email, $password);
        if (mysqli_stmt_execute($stmt)) {
            try {
                $get_activation = "SELECT * FROM `activation` WHERE email = ?";
                $stmt = mysqli_prepare($this->connection, $get_activation);
                mysqli_stmt_bind_param($stmt, 's', $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if (mysqli_num_rows($result) < 1) {
                    $query = "INSERT INTO `activation`(`email`, `code`) 
                VALUES (?,?)";
                    $stmt = mysqli_prepare($this->connection, $query);
                    mysqli_stmt_bind_param($stmt, 'ss', $email, $code);
                    mysqli_stmt_execute($stmt);
                } else {
                    $query = "UPDATE `activation` SET `code`= ? WHERE email =?";
                    $stmt = mysqli_prepare($this->connection, $query);
                    mysqli_stmt_bind_param($stmt, 'ss', $code, $email);
                    mysqli_stmt_execute($stmt);
                }
                // Server settings
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host       = 'mail.evansgasinstallation.co.ke'; // Specify main SMTP server
                $mail->SMTPAuth   = true;                             // Enable SMTP authentication
                $mail->Username   = 'smartlandlord@evansgasinstallation.co.ke'; // SMTP username
                $mail->Password   = 'smartlandlord@1';                // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 587;                              // TCP port to connect to

                // Recipients
                $recipientName = 'Isaac Nyamari'; // This can be dynamic or fetched from your database
                $mail->setFrom('smartlandlord@evansgasinstallation.co.ke', 'Smart Landlord');
                $mail->addAddress('jablessions76@gmail.com', $recipientName); // Add a recipient
                $mail->addReplyTo('smartlandlord@evansgasinstallation.co.ke', 'Reply Here');

                // Load the HTML template
                $htmlTemplate = file_get_contents('mailtemplate.html');

                // Generate random code
                $randomCode = $code;

                // Replace placeholders in the HTML template
                $htmlContent = str_replace('{{names}}', $recipientName, $htmlTemplate);
                $htmlContent = str_replace('{{activation code}}', $randomCode, $htmlContent);

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Activation code';
                $mail->Body    = $htmlContent;                        // Use the modified HTML template as the email body
                $mail->AltBody = 'This is the plain text version for non-HTML mail clients. Your code is: ' . $randomCode;

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
    public function getOwner($email)
    {
        // Ensure connection is established
        $this->connection = $this->connect();

        // Prepare the SQL query
        $get_owner = "SELECT * FROM `owners` WHERE email = ?";
        $stmt = mysqli_prepare($this->connection, $get_owner);

        // Check if preparation was successful
        if ($stmt === false) {
            die('Error preparing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        // Bind the email parameter to the prepared statement
        mysqli_stmt_bind_param($stmt, 's', $email);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        // Check if a result was returned
        if ($result === false) {
            die('Error executing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        // Now check the number of rows
        if (mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        } else {
            // Handle case when no user is found
            echo 'No user found with that email.';
        }
    }
    public function getOwners()
    {
        // Ensure connection is established
        $this->connection = $this->connect();

        // Prepare the SQL query
        $get_owner = "SELECT * FROM `owners`";
        $stmt = mysqli_prepare($this->connection, $get_owner);

        // Check if preparation was successful
        if ($stmt === false) {
            die('Error preparing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        // Check if a result was returned
        if ($result === false) {
            die('Error executing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        // Now check the number of rows
        if (mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        } else {
            // Handle case when no user is found
            echo 'No user found with that email.';
        }
    }
    public function Login($email, $password)
    {
        // Ensure connection is established
        $this->connection = $this->connect();

        // Prepare the SQL query
        $get_owner = "SELECT * FROM `owners` WHERE email = ?";
        $stmt = mysqli_prepare($this->connection, $get_owner);

        // Check if preparation was successful
        if ($stmt === false) {
            die('Error preparing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        // Bind the email parameter to the prepared statement
        mysqli_stmt_bind_param($stmt, 's', $email);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        // Check if a result was returned
        if ($result === false) {
            die('Error executing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        // Now check the number of rows
        if (mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($password, $user_data['password'])) {
                session_start();
                $_SESSION["fname"] = $user_data['fname'];
                $_SESSION["lname"] = $user_data['lname'];
                $_SESSION["email"] = $user_data['email'];
                $_SESSION["owner"] = true;

                // Redirect to homepage
                header("location:/admin/");
                exit();
            }
        } else {
            // Handle case when no user is found
            echo 'No user found with that email.';
        }
    }
    public function activateOwner($email, $code)
    {
        $this->connection = $this->connect();
        $get_activation = "SELECT * FROM `activation` WHERE email = ?";
        $stmt = mysqli_prepare($this->connection, $get_activation);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $user_code = $user['code'];
            $status = 1;
            if ($code === $user_code) {
                $activate = "UPDATE `owners` SET `status` = ? WHERE email = ?";
                $stmt = mysqli_prepare($this->connection, $activate);
                mysqli_stmt_bind_param($stmt, 'ss', $status, $email);
                if (mysqli_stmt_execute($stmt)) {
                    header("location:admin/");
                }
            }
        }
    }
    public function deleteOwners()
    {
        try {
            $this->connection = $this->connect();
            $sql =  "DELETE FROM `tenants` WHERE tenant_id = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "s", $id);
            if (mysqli_stmt_execute($stmt)) {
                $status = "success";
                return $status;
            }
        } catch (\Error $err) {
            throw $err;
        }
    }
    public function updateOwners()
    {
        try {
            $this->connection = $this->connect();
            $sql =  "UPDATE `tenants` SET `names` = ? `apartment`= ?  WHERE id_number = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $names, $apartment, $id_number);
            if (mysqli_stmt_execute($stmt)) {
                $status = "success";
                return $status;
            }
        } catch (\Error $err) {
            throw $err;
        }
    }
    public function getSubscription($email = null)
    {
        $this->connection = $this->connect();
        $query = "SELECT subscription FROM owners";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
    public function updateSubscription($email)
    {
        try {
            $this->connection = $this->connect();
            $sql =  "UPDATE `owners` SET `subscription` = ?  WHERE email = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            if (mysqli_stmt_execute($stmt)) {
                $status = "success";
                return $status;
            }
        } catch (\Error $err) {
            throw $err;
        }
    }
    public function getTrialPeriod($email = null)
    {
        try {
            $this->connection = $this->connect();
            $sql =  "SELECT `date_joined`as registered, `subscription` FROM `owners` WHERE email = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            if ($stmt === false) {
                die('Error preparing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
            }

            // Bind the email parameter to the prepared statement
            mysqli_stmt_bind_param($stmt, 's', $email);

            // Execute the statement
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                $result = mysqli_fetch_assoc($result);
                $date_registered = $result['registered'];
                $subscription = $result['subscription'];
                if ($subscription == 1) {
                    // Set the trial start date (could be current date or fetched from the database)
                    $trial_start_date = new DateTime($date_registered); // current date

                    // Clone the start date and add 10 days to get the trial end date
                    $trial_end_date = clone $trial_start_date;
                    $trial_end_date->modify('+10 days');

                    // Get the current date (to calculate remaining days if needed)
                    $current_date = new DateTime();

                    // Calculate the difference between the trial end date and the current date
                    $remaining_days = $current_date->diff($trial_end_date)->days;

                    // Check if the trial is still active or has ended
                    if ($current_date > $trial_end_date) {
                        $trial =  0;
                        return $trial;
                    } else {
                        $trial = "Trial ends in $remaining_days days!.";
                        return $trial;
                    }
                }
            }
        } catch (\Error $err) {
            throw $err;
        }
    }
}

$getOwners = new Owners;
$getApartments = new Apartments;
$getTenants = new Tenants;
$getCaretakers = new Caretakers;
