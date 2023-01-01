<?php
//get data from form 

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject = $_POST['subject'];

$to = "ayushtiwari6061@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = ". $subject . "\r\n Message =" . $message;
$headers = "From: noreply@stream.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.php");
?>