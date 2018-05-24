<?php

// Report all errors
//error_reporting(E_ALL);


if(!isset($_SESSION)) { session_start(); }

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 



//$start_from = ($page-1) * $results_per_page;

$user = $_SESSION['usertype'];


echo'
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Coretress Testaufgabe Login2</title>

<link type="text/css" rel="stylesheet" href="technik/main.login.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="technik/functions.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">


</head>

<body style="background: url(&quot;images/1IbpmF2.jpg&quot;) no-repeat fixed center top rgb(100, 102, 102); background-size: 100%; background-position:50% 0px; min-height:100%; margin:0px; padding:0px;">
<div id="mainwrapper" style="width:1400px; margin:auto; margin-top:15px; background-color:yellow;">
<div style="float:left; background-color:#ababab; min-height:600px">';

if($user == "admin") {
    //echo'super Admin';    
    include "adminheader.php";


    echo'<div id="innercontent" style="background-color:rgba(192, 192, 192, 0.8); width:1280px; min-height:800px;
								   margin-top:15px; margin-left:60px; padding:0px;">';
    
    if($getVar == 'tabClick1')	   { include('showallusers.php'); }
    if($getVar == 'tabClick2')	   { include('tabcontent2.php'); }
    if($getVar == 'tabClick3')	   { include('tabcontent3.php'); }
    if($getVar == 'tabClick4')	   { include('tabcontent4.php'); }

    
    echo'</div><!--innercontent-->';
    //echo'</div><!--offset-->';
    echo'</div><!--mainwrapper-->';

   
    
    
    
    
    
    echo'<div id="usertable" style="margin-top:20px">';
        
    //include "showallusers.php";
    
    echo'</div>';
    
} else {
    //echo'super nicht Admin';
    
    echo'<div id="innercontent" style="background-color:rgba(192, 192, 192, 0.8); width:1280px; min-height:800px;
								   margin-top:15px; margin-left:60px; padding:0px;">';
    
    echo 'Willkommen '.$user;
    
    echo'</div><!--innercontent-->';
    //echo'</div><!--offset-->';
    echo'</div><!--mainwrapper-->';
    
}
    




echo'
</div><!--container-->


</body>

</html>';


?>