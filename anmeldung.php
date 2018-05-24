<?php

if(isset($_GET['login']))		{ $getVar = $_GET['login']; } else { $getVar = 'start';}

echo'<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Login - Anmeldung</title>

<link type="text/css" rel="stylesheet" href="technik/main.login.css"/>
</head>

<body style="background: url(&quot;images/1IbpmF2.jpg&quot;) no-repeat fixed center top rgb(100, 102, 102); background-size: 100%; background-position:50% 0px; min-height:100%; margin:0px; padding:0px;">

<div id="container">

<div id="Message" style="font-family: Trebuchet MS; font-size:18pt; margin-top:190px;  margin-left:175px;">
Anmeldung
</div><!--Message-->';


echo'
<div id="content">

<div id="socialsignup" style="background-image:url(\'images/glogin.png\'); background-repeat: no-repeat; width:182px; height: 50px; margin-left:9px; margin-top:33px; float:left; cursor: pointer;"
onclick="socialsignup()"></div>


<div id="nativesignup" style="float: left; margin-top:26px; margin-left:50px">
<form action="loginsubmit.php" method="POST">
<table class="design">
<tr>
<td align="center">Benutzername:</td><td align="center"><input style="width:207px" name="benutzer"></td>
</tr>
<tr>
<td align="right">Passwort:</td><td align="center"><input type="password" style="width:207px" name="passwort"></td>
</tr>
<tr>
<td align="right"></td><td align="right"><input type="submit" value="Anmelden" name="l_button" ></td>
</tr>
</table>
</form>
</div><!--nativesignup-->

<div id="register" style="background-color:#76828E; width:100px; margin-left:452px; margin-top:9px; margin-bottom:10px;  height:20px; padding-left:10px; float:left; cursor: pointer;"
onclick="location.href=\'registrierung.php\';" >Registrierung
</div><!--register-->

</div><!--content-->';


if($getVar == 'wrongpassword')	   { 
    echo'
    <div id="error_msg" style="margin-top:30px;  margin-left:275px; width:500px; ">
    <div id="msg_container" style="height:48px; background-color:white; broder: 2px solid #f06343; margin-top:0px;">
    <span class="failmark" style="font-size:20px; float:left; margin-top:14px; margin-right:8px; margin-left:28px;"></span>
    <span id="server_error" style="font-size:16px; float:left; margin-top:15px;">Falsche Benutzername/Passwort Kombination</span>
    </div>
    </div>';

} else {
    
    
}


    echo'
</div><!--container-->


</body>

</html>';


?>