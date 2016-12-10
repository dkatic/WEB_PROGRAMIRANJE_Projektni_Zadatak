<?php
include "spoj.php";
$fname=$_POST["fname"];
$address=$_POST["address"];
$email=$_POST["email"];
$usrtel=$_POST["usrtel"];
$message=$_POST["message"];
mysql_query("INSERT INTO $tblname(fname,address,email,usrtel,message)
VALUES ('$fname','$address','$email','$usrtel','$message')");
header('Location: recenzija.php');
?>

