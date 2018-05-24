<?php
session_start(); 

require_once ('technik/config.php');
$dbconnection = db_connect();
if(!$dbconnection) error_message(sql_error());


$benutzer = $_POST['benutzer'];
$passwort = md5($_POST['passwort']);

$sqlquery01 = "SELECT * FROM benutzer WHERE username = '$benutzer'";
$result01 = mysqli_query($dbconnection, $sqlquery01);

$row01 = mysqli_fetch_array($result01,MYSQLI_ASSOC);

$username   = $row01['benutzername'];
$vorname    = $row01['vorname'];
$password   = $row01['password'];
$usertype   = $row01['usertype'];

$_SESSION['username'] = $vorname;
$_SESSION['usertype'] = $usertype;


$file = fopen('debug01.txt', 'w');
fwrite($file, "stelle 1: ".$sqlquery01."\r\n");
fwrite($file, "username: ".$username."\r\n");
fwrite($file, "password: ".$password."\r\n");
fwrite($file, "passwort: ".$passwort."\r\n");
fclose($file);/**/


if ($password == $passwort){
	header('Location:main.php');
} else if ($passwort == 'd41d8cd98f00b204e9800998ecf8427e') {
	//header('Location:index.php?login=missinginput');
	return false;
} else if (($password != $passwort) && $passwort != '') {
	header('Location:index.php?login=wrongpassword');
	return false;
} 
	


?>