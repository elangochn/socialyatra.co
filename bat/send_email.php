<?php
require 'PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'info.hariprasath@gmail.com';
$mail->Password = 'elangochn@gmail.com';

$mail->setFrom($email, $name);
$mail->addAddress('destination-email@example.com');
$mail->Subject = $subject;
$mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

$mail->isHTML(true);

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>
