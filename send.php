<?php

// -------------Including PHPMailer Files------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Function to Validate a 10digit phone number 
function validate_phone($ph)
{
    $res = false;
    if (strlen($ph) == 10 && is_numeric($ph))
    {
        $res = true;
    }

    return $res;
}

if ($_POST)
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Message Sent from Website Contact Form";
    $phone = $_POST['mobile'];
    $msg = $_POST['message'];
    $result = "";
    $errors = [];

    if ($_POST) $POST = 1;
    // Check if any errors
    if (!$name) $errors[count($errors) ] = 'Please enter your name.';
    if (!$email) $errors[count($errors) ] = 'Please enter your email.';
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[count($errors) ] = "Invalid email format";
    }
    if (!validate_phone($phone)) $errors[count($errors) ] = 'Please enter valid 10 digit phone number';
    if (!$msg) $errors[count($errors) ] = 'Please enter your message.';
    // Load Composer's autoloader
    

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    if (!$errors)
    {
        try
        {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'mail.sheranisevents.in'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'contact@sheranisgroup.in'; // SMTP username
            $mail->Password = 'CONTACT@mailsg'; // SMTP password
            $mail->Port = 465; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('contact@sheranisgroup.in', 'Sheranis Group'); // Add a recipient
            

            // Attachments
            

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = '
              	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
              	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
              	<html xmlns="http://www.w3.org/1999/xhtml">
              	<head></head>
              	<body>
              	<table>
              		<tr><td>Name</td><td>' . $name . '</td></tr>
              		<tr><td>Email</td><td>' . $email . '</td></tr>
                  <tr><td>Phone</td><td>' . $phone . '</td></tr>
              		<tr><td>Message</td><td>' . nl2br($msg) . '</td></tr>
              	</table>
              	</body>
              	</html>';

            $mail->send();
            
            echo "Message has been sent";
            $name = '';
            $email = '';
            $subject = '';
            $msg = '';
            $errors = [];
        }
        catch(Exception $e)
        {
            // $result = "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
            echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
            // for ($i=0; $i<count($mail->ErrorInfo); $i++) echo $mail->ErrorInfo[$i] . '<br/>';
            // echo '<a href="index.html">Back</a>';
            // exit;
            
        }
    }
    else
    {
        //display the errors message
        for ($i = 0;$i < count($errors);$i++) echo $errors[$i] . '<br/>';
        // echo '<a href="index.html">Back</a>';
        $errors = [];

    }
}

