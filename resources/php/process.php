<?php
$to1 = "info@unitec.org.uk";
$to2 = "ghimiresubodh143@gmail.com";
$Subject = "UNITEC WEBSITE: Email for Unitec from the website";

$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];
$number = $_POST['number'];
$body = " User Name: $name. \n User Email: $email. \n User number: $number. \n User message: $message. \n ";
$headers = "From:$email";
mail($to1,$subject,$body,$headers);
mail($to2,$subject,$body,$headers);
header("Location:index.php");
?>
