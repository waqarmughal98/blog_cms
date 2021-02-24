<?php

// PHP Mailer Attachment
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Send Email Class
class SendEmail{
    public function send($userName, $email, $subject, $message, $sender, $password, $domain){

        // Load Composer's autoloader
        require '../cryptoinject/phpmailer/vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = gethostname();                   // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = "$sender";                     // SMTP username
            $mail->Password   = "$password";                            // SMTP password

            //Recipients
            $mail->setFrom("$sender", "$domain");
            $mail->addAddress($email, $userName);     // Add a recipient

            // Content
            $mail->isHTML(true);             // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();
            return(true);
        } catch (Exception $e) {
            return(false);
        }

    // END Send Function
    }
}

?>