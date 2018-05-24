<?php
if(!isset($_SESSION)) { session_start(); }


require_once ('../technik/config.php');
$dbconnection = db_connect();
if(!$dbconnection) error_message(sql_error());


$vorname  	  = $_GET['vorn'];
$nachname  	  = $_GET['nach'];
$email 	  	  = $_GET['emai'];
$username  	  = $_GET['user'];
$password 	  = md5($_GET['pass']);
$alter 	      = $_GET['alter'];
$newsletter   = $_GET['news'];



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
 
 fclose($file);
*/


if( $rowcount == 0 ) {
    $insertquery="INSERT INTO benutzer
				  				(vorname,
                                 nachname,
				   				 email,
                                 username,
				   				 alterjahre,
                                 newsletter,
				   				 password
				   				)
	   		  VALUES
				  ('$vorname',
                   '$nachname',
				   '$email',
                   '$username',
				   '$alter',
                   '$newsletter',
				   '$password'
				   )";
    
    $_SESSION['username'] = $username;
    
    $userexists = 'newuser';
    
} else {
    
    $insertquery='';
    
    $userexists = 'userexists';
}










if (!mysqli_query($dbconnection, $insertquery)) { 
	//die('Error: ' . mysql_error());
    echo 'error';
} else {
	//echo 'success';
	
    /**/
    if ($userexists == 'newuser'){
        $query = "SELECT * FROM benutzer";
        $result =  mysqli_query($dbconnection, $query);
        $numRes = mysqli_num_rows($result);
        echo $numRes;
    } else {
        echo 'userexists';
    }
    
    

}















?>