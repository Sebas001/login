<?php
if(!isset($_SESSION)) { session_start(); }


echo'
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Login - Success</title>

<link type="text/css" rel="stylesheet" href="technik/main.login.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="technik/functions.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">


</head>

<body style="background: url(&quot;images/1IbpmF2.jpg&quot;) no-repeat fixed center top rgb(100, 102, 102); background-size: 100%; background-position:50% 0px; min-height:100%; margin:0px; padding:0px;">

<div id="container">
<div id="Message" style="font-family: Trebuchet MS; font-size:18pt; top:150px; left: 50%; left: 275px; position:absolute; text-align:center">
Registrierung erfolgreich!<br><br>

Vielen Dank für deine Registrierung '; echo $_SESSION['username']; echo' !
</div><!--Message-->



</div><!--container-->


</body>

</html>';


?>