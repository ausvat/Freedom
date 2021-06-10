<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$to = "andrewusvat7@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Phone = ". $phone . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@freedomestate.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
