<?php
include 'includes/session.php';
require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
	$fname = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "Insert into register values(NULL,'$fname','$email','N/A','$subject','N/A','$message')";
    $res = mysqli_query($conn2,$sql);
    
    $mail = new PHPMailer(true);
	$query = $_REQUEST['query'];
	if ($query === "contact") 
	{
    try {
        $mail->setFrom('ceo@digitalsjourney.com', 'Digitals Journey');
        $mail->addAddress('ceo@digitalsjourney.com');
        $mail->addReplyTo('ceo@digitalsjourney.com');

        $email_message = "<style>.td_wsc {border: 1px solid;border-width: 1px 0px 0px 1px;padding: 5px;}.th_wsc {border: 1px solid;border-width: 1px 0px 0px 1px;}.table_wsc {border-spacing: 0;margin-top: 30px;border: 1px solid;border-width: 0px 1px 1px 0px;width: 100%;}</style>";
        
        $email_message .= "New Enquiry " . "\n <br/><br/>";
        $email_message .= "Name: " . $fname . "\n <br/>\n<br/>";
        $email_message .= "Email :" . $email . "\n <br/>\n<br/>";
        $email_message .= "Message :" . $message . "\n <br/>\n<br/>";

        $email_message .= "<br/>";
        $email_message .= "Regards,<br/>";
        $email_message .= "<br/>";
        $email_message .= "Team <b>Digitals Journey</b><br/>";
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $email_message;
        $mail->send();
        echo "<script> alert('Thank you!, Your request has been successfully sent. We will contact you very soon!'); </script>";
        echo '<script>location.replace("contact.php");</script>';
    } 
    catch (Exception $e) {
        echo "<script> alert('Thank you!, Your request has been successfully sent. We will contact you very soon!'); </script>";
        echo '<script>location.replace("contact.php");</script>';
    	}
	}
}
?>