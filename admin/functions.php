<?php
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/smart_landlord');
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);
function url_for($script)
{

    if ($script[0] != '/') {
        $script = "/" . $script;
    }
    return WWW_ROOT . $script;
}


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
trait GetCaretaker
{
    public function getCaretaker($id)
    {
        $this->connection = $this->connect();
        $query = "SELECT `names` FROM `caretakers` WHERE `caretaker_id` = '$id'";
        $result = mysqli_query($this->connection, $query);

        // Check if query succeeded
        if (!$result) {
            die('Error: ' . mysqli_error($this->connection));
        }

        // Fetch all caretakers data as an associative array
        $caretakers = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $caretakers[] = $row;
        }

        return $caretakers;
    }
}
class Caretakers extends Database
{
    public $connection;
    use GenerateId;
    public function getCaretakers($employer)
    {
        $this->connection = $this->connect();
        $query = "SELECT * FROM `caretakers` WHERE `employer` = '$employer'";
        $result = mysqli_query($this->connection, $query);

        // Check if query succeeded
        if (!$result) {
            die('Error: ' . mysqli_error($this->connection));
        }

        // Fetch all caretakers data as an associative array
        $caretakers = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $caretakers[] = $row;
        }

        return $caretakers;
    }

    public function addCaretaker($owner, $names, $phone, $id_number)
    {
        $this->connection = $this->connect();
        $id = $this->generateId(25);
        $add_apart = "INSERT INTO `caretakers`(`caretaker_id`, `names`, `id_number`, `phone`, `employer`) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($this->connection, $add_apart);
        mysqli_stmt_bind_param($stmt, "sssss", $id, $names, $id_number, $phone, $owner);

        if (mysqli_connect_errno($this->connection)) {
            return mysqli_errno($this->connection);
        }

        if (mysqli_stmt_execute($stmt)) {
            header("Location: /admin/caretakers");
            exit;
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }
    public function deleteCaretaker($caretaker_id, $owner)
    {
        $this->connection = $this->connect();
        $sql = "DELETE FROM caretakers WHERE `caretaker_id`=? AND `employer`=?";
        $stmt = mysqli_prepare($this->connection, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $caretaker_id, $owner);
        if (mysqli_stmt_execute($stmt)) {
            $caretaker = null;
            $sql = "UPDATE apartments SET caretaker = ? WHERE landlord = ?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $caretaker, $owner);
            if (mysqli_stmt_execute($stmt)) {
                header("Location: /admin/caretakers");
                exit;
            }
        }
    }
    public function updateCaretaker()
    {
        $this->connection = $this->connect();
    }
}



class Apartments extends Database
{
    public $connection;
    use GenerateId;
    use GetCaretaker;
    // Fetch apartments from the database
    public function getAparts($owner)
    {
        $this->connection = $this->connect();
        $query = "SELECT `apart_id` as id, `name` as `apart_name`,`names` as caretaker,location,rooms,vacant FROM apartments a LEFT JOIN caretakers c on a.caretaker = c.caretaker_id WHERE landlord = '$owner'";
        $result = mysqli_query($this->connection, $query);

        // Check if query succeeded
        if (!$result) {
            die('Error: ' . mysqli_error($this->connection));
        }

        // Fetch all apartments data as an associative array
        $apartments = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $apartments[] = $row;
        }

        return $apartments;
    }

    // Add a new apartment
    public function addApart($name = null, $location = null, $caretaker = null, $owner, $rooms, $vacant)
    {

        $this->connection = $this->connect();
        $id = $this->generateId(25);
        $add_apart = "INSERT INTO `apartments`(`apart_id`, `name`, `location`, `caretaker`, `landlord`, `rooms`, `vacant`) VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->connection, $add_apart);
        mysqli_stmt_bind_param($stmt, "sssssss", $id, $name, $location, $caretaker, $owner, $rooms, $vacant);

        if (mysqli_connect_errno($this->connection)) {
            return mysqli_errno($this->connection);
        }

        if (mysqli_stmt_execute($stmt)) {
            header("Location: /admin/apartments");
            exit;
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }

    public function deleteApart($apart_id, $owner)
    {
        $this->connection = $this->connect();
        $sql = "DELETE FROM apartments WHERE `apart_id`=? AND `landlord`=?";
        $stmt = mysqli_prepare($this->connection, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $apart_id, $owner);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: /admin/apartments");
            exit;
        }
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
    public function getTenants($landlord_id)
    {
        $this->connection = $this->connect();
        $sql =  "SELECT * FROM tenants t LEFT JOIN apartments a on t.apartment=a.apart_id WHERE `landlord_id`=?";
        $stmt = mysqli_prepare($this->connection, $sql);
        mysqli_stmt_bind_param($stmt, "s", $landlord_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return $result;
    }
    public function getTenant($tenant_id, $landlord_id)
    {
        $this->connection = $this->connect();
        $sql =  "SELECT * FROM tenants t LEFT JOIN apartments a on t.apartment=a.apart_id WHERE t.tenant_id=? AND t.landlord_id=?";
        $stmt = mysqli_prepare($this->connection, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $tenant_id, $landlord_id);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);
        $result = mysqli_fetch_assoc($results);
        return $result;
    }
    public function addTenant($id_number, $names, $phone, $apartment, $landlord_id)
    {
        try {
            $id = $this->generateId(25);
            $this->connection = $this->connect();
            $sql =  "INSERT INTO `tenants`(`tenant_id`, `id_number`, `names`,`phone`, `apartment`,`landlord_id`) 
        VALUES (?,?,?,?,?,?)";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "ssssss", $id, $id_number, $names, $phone, $apartment, $landlord_id);
            if (mysqli_stmt_execute($stmt)) {
                header("Location: /admin/tenants");
                exit;
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
    public function deleteTenant($tenant_id, $landlord_id)
    {
        try {
            $this->connection = $this->connect();
            $sql =  "DELETE FROM `tenants` WHERE tenant_id = ? AND landlord_id=?";
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $tenant_id, $landlord_id);
            if (mysqli_stmt_execute($stmt)) {
                header("Location: /admin/tenants");
                exit;
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
                header("Location: /admin/tenants");
                exit;
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
                $_SESSION["id"] = $user_data['owner_id'];
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


class Message extends Database
{
    use generateId;
    public $connection;
    public function sendMessage($names = null, $email = null, $message = null)
    {
        $id = $this->generateId(20);
        $this->connection = $this->connect();
        $sql = "INSERT INTO `messages`(`message_id`, `sender_names`, `email`,`message`) 
        VALUES (?,?,?,?)";
        if ($names !== null && $email !== null && $message !== null) {
            $stmt = mysqli_prepare($this->connection, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $id, $names, $email, $message);
            if (mysqli_stmt_execute($stmt)) {
                echo "success";
                exit;
            } else {
                if (mysqli_errno($this->connection) == 1062) {
                    $status = "Users exists with this id!";
                    return $status;
                }
            }
        } else {
            return "invalid data";
        }
    }
    public function getMessages(){
        $this->connection = $this->connect();

        // Prepare the SQL query
        $get_messages = "SELECT * FROM `messages`";
        $stmt = mysqli_prepare($this->connection, $get_messages);

        // Check if preparation was successful
        if ($stmt === false) {
            die('Error preparing SQL: ' . mysqli_error($this->connection)); // Debugging purpose
        }

        // Bind the email parameter to the prepared statement
        // mysqli_stmt_bind_param($stmt, 's', $email);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);
        return $result;
    }
}
$getOwners = new Owners;
$getApartments = new Apartments;
$getTenants = new Tenants;
$getCaretakers = new Caretakers;
$addMessage = new Message;
$getMessages = new Message;
