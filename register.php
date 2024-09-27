<?php
// Load Composer's autoloader
require 'vendor/autoload.php';
require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['register'])) {

    // Function to generate a random code
    function generateRandomCode($length = 6)
    {
        return strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, $length));
    }

    function generateId($length = 50)
    {
        return substr(md5(uniqid(mt_rand(), true)), 0, $length);
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $code = generateRandomCode();
    $user_id = generateId();
    $mail = new PHPMailer(true);
    $query = "INSERT INTO `owners`(`owner_id`, `fname`, `lname`, `email`, `password`) 
    VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssss', $user_id, $fname, $lname, $email, $password);
    if (mysqli_stmt_execute($stmt)) {
        try {
            $code_id =generateId(25);
            $get_activation = "SELECT * FROM `activation` WHERE email = ?";
            $stmt = mysqli_prepare($conn, $get_activation);
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) < 1) {
                $query = "INSERT INTO `activation`(`code_id`,`email`, `code`) 
                VALUES (?,?,?)";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, 'sss',$code_id, $email, $code);
                mysqli_stmt_execute($stmt);
                if (mysqli_errno($conn)) {
                    echo "error inserting activation";
                    echo mysqli_errno($conn);
                }
            } else {
                $query = "UPDATE `activation` SET `code`= ? WHERE email =?";
                $stmt = mysqli_prepare($conn, $query);
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
            $mail->addAddress($email, $recipientName); // Add a recipient
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
