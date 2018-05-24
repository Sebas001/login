<?php
//Database Variables
$dbhost = "localhost";
$dbuser = "dbuser";
$dbpass = "dbpass";
$dbname = "dbname";
 

$MYSQL_ERRNO = "";
$MYSQL_ERROR = "";
 
//Connect To Database
function db_connect() {
  global $dbhost, $dbuser, $dbpass, $dbname;
  global $MYSQL_ERRNO, $MYSQL_ERROR;
 
  $dbconnection = mysqli_connect($dbhost, $dbuser, $dbpass);
      
	// Change character set to utf8
	mysqli_set_charset($dbconnection,"utf8");
  
	
  if (!$dbconnection) {
    $MYSQL_ERRNO = 0;
    $MYSQL_ERROR = "Connection failed to $dbhost.";
    return 0;
  } else if (!mysqli_select_db($dbconnection, $dbname)) {
    $MYSQL_ERRNO = mysqli_errno($dbconnection);
    $MYSQL_ERROR = mysqli_error($dbconnection);
    return 0;
  } else {  	
    return $dbconnection;
  }
}
 
//Handle Errors
function sql_error() {
  global $MYSQL_ERRNO, $MYSQL_ERROR;
 
  if(empty($MYSQL_ERROR)) {
    $MYSQL_ERRNO = mysqli_errno();
    $MYSQL_ERROR = mysqli_error();
  }
  return "$MYSQL_ERRNO: $MYSQL_ERROR";
}
 
// Print Error Message
function error_message($msg) {
  printf("Error: %s", $msg);
  exit;
}
 
// Connection String Example
# $dbconnection = db_connect();
# if(!$dbconnection) error_message(sql_error());
#
# $query = "SELECT * FROM test_table";
# $result = mysql_query($query);
#
# if(!$result) error_message(sql_error());
#
# $data = mysql_fetch_array($result); 


?>