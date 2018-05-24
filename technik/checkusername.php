<?php
require_once ('../technik/config.php');
$dbconnection = db_connect();
if(!$dbconnection) error_message(sql_error());

//$username  	  = $_GET['user'];
$username  	  = $_POST['user'];

//check for existing useername

$sqlquery01 = "SELECT * FROM benutzer WHERE username = '$username'";
$result01 = mysqli_query($dbconnection, $sqlquery01);

//$row01 = mysqli_fetch_array($result01,MYSQLI_ASSOC);
$rowcount = mysqli_num_rows($result01);

/*
 $time = date("H-i-s");
 $file = fopen('debug.txt', 'w');
 fwrite($file, "stelle 1: ".$time." : ".$sqlquery01."\r\n");
 fwrite($file, "stelle 2: ".$time." : ".$rowcount."\r\n");
 

*/


if( $rowcount == 0 ) {
    //fwrite($file, "stelle 31: ".$time." : ".$rowcount."\r\n");
    //$userexists = 'newuser';
    //echo $userexists;
    echo 0;

} else {
    //fwrite($file, "stelle 32: ".$time." : ".$rowcount."\r\n");
    $userexists = 'userexists';
    //echo $userexists;
    echo 1;
}


//fclose($file);

