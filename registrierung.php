<?php

echo'
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Login - Registrierung</title>

<link type="text/css" rel="stylesheet" href="technik/main.login.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="technik/functions.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
  <script>
  $( function() {
    var handle = $( "#custom-handle" );
    $( "#slider" ).slider({
      max: 125,
      create: function() {
        handle.text( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle.text( ui.value );
      }
    });
  } );
  </script>

</head>

<body style="background: url(&quot;images/1IbpmF2.jpg&quot;) no-repeat fixed center top rgb(100, 102, 102); background-size: 100%; background-position:50% 0px; min-height:100%; margin:0px; padding:0px;">

<div id="container">



<div id="Message" style="font-family: Trebuchet MS; font-size:18pt; height:40px; margin-top: 120px; margin-left: 123px;">
Registrierung
</div><!--Message-->



<div class="contentwrapper" style="font-family:Calibri; font-size:10pt; margin-top: 20px; left: 50%; margin-left: -275px; position:absolute">
<form id="neuerbenutzer" name="neuerbenutzer" action="" method="post" onsubmit="validatebenutzer(\'insert\'); return false;">

<p class="formrows" style="height:28px;  margin-top:0px">
<label for="anrede" style="display:inline-block; width:140px;" onclick="test()">Anrede</label>
<select name="anrede" id="anrede" class="registerinputs" style="width:280px;" >
  <option value="herr">Herr</option>
  <option value="frau">Frau</option>
</select>
</p>
<p class="formrows" style="height:28px;  margin-top:0px">
<label for="vorname" style="display:inline-block; width:140px;" onclick="test()">Vorname</label>
<input type="text" name="vorname" id="vorname" class="registerinputs" placeholder="Dieter" style="width:280px">
<span id="red_vorname">*</span></p>

<p class="formrows" style="height:28px;  margin-top:0px">
<label for="nachname" style="display:inline-block; width:140px;" onclick="test()">Nachname</label>
<input type="text" name="nachname" id="nachname" class="registerinputs" placeholder="Colberg" style="width:280px">
<span id="red_nachname">*</span></p>

<p class="formrows" style="height:28px;">
<label for="email" style="display:inline-block; width:140px; ">Email</label>
<input type="text" name="email" id="email" class="registerinputs" placeholder="dieter@colberg.de" style="width:280px;">
<span id="red_email">*</span></p>

<p class="formrows" style="height:28px;">
<label for="username" style="display:inline-block; width:140px;">Benutzername</label>
<input type="text" name="username" id="username" class="registerinputs" placeholder="DieterC" style="width:255px;">

<div id="checkuser" style="background-image:url(\'images/user1.png\'); background-repeat: no-repeat; width:60px; margin-left:407px; margin-top:-24px; height:20px; padding-left:6px; float:left; cursor: pointer;"
onclick="checkuser()"></div>

<span id="red_username" style="margin-left: 426px; margin-top: -21px; float:left">*</span>

<p class="formrows" style="height:28px;">

<label for="passwort" style="display:inline-block; width:140px;">Passwort</label>


<input type="password" name="passwort" id="passwort" class="registerinputs" placeholder="************" style="width:255px;">
<div id="showpw" style="background-image:url(\'images/Eye-Blind-icon.png\'); background-repeat: no-repeat; width:60px; margin-left:407px; margin-top:-24px; height:20px; padding-left:6px; float:left; cursor: pointer;"
onclick="showpw()"></div>

<span id="red_passwort" style="margin-left: 426px; margin-top: -21px; float:left">*</span>

</p>

<p class="formrows" style="height:28px;">
<label for="pw2" style="display:inline-block; width:140px;">Passwort wiederholen</label>
<input type="password" name="pw2" id="pw2" class="registerinputs" placeholder="************" style="width:280px">
<span id="red_pw2">*</span></p>


<p class="formrows" style="height:28px;">
<label for="slider" style="display:inline-block; width:140px;">Alter</label>

<div id="slider" style="width:280px; margin-bottom:6px; margin-left:143px; margin-top:-22px;">
  <div id="custom-handle" class="ui-slider-handle"></div>
</div>

<p class="formrows" style="height:28px;">
<label for="newsletter" style="display:inline-block; width:140px;">Newsletter-Abo</label>
<input type="checkbox" name="newsletter" id="newsletter" style="border-radius: 5px;"> 




<div id="submitwrapper" style="width:430px; padding-left:0px; height:24px; margin-top:14px; margin-left:0px;  ">

	<button type="button" name="return_button" id="return_button1" class="return-button" style="width:150px; height:26px"
        onclick="window.location=\'index.php\';">
		<span class="return_button" style="font-size:20px; float:left; margin-top:-1px"></span>
		<span class="button-caption" style="margin-top:1px; float:right">Anmeldung</span>
	</button>

	<button type="submit" name="save_button" id="save_button2" class="save-button" style="width:150px; height:26px; float:right">
		<span class="save_button" style="font-size:20px; float:left; margin-top:-1px"></span>
		<span class="button-caption" style="margin-top:1px; float:right">Registrieren</span>
	</button>
</div>






<div id="msg_container" style="height:85px; margin-top: 60px; width:700px">
<div id="success_msg" style="display:none;">
<div id="msg_container" style="height:48px; background-color:white; broder: 2px solid #f06343; margin-top:0px;">
	<span class="checkmark" style="font-size:20px; float:left; margin-top:14px; margin-right:8px; margin-left:28px;"></span>
	<span id="inner_success" style="font-size:16px; float:left; margin-top:15px;">Benutzer hinzugefügt</span>
	<span id="redirect" style="font-size:12px; float:right; margin-top:18px; margin-right:18px;">Redirecting in <span id="countdown">8</span></span>
</div>
</div>

<div id="error_msg" style="display:none;">
<div id="msg_container" style="height:48px; background-color:white; broder: 2px solid #f06343; margin-top:0px;">
	<span class="failmark" style="font-size:20px; float:left; margin-top:14px; margin-right:8px; margin-left:28px;"></span>
	<span id="server_error" style="font-size:16px; float:left; margin-top:15px;">Benutzer konnte nicht eingetragen werden (Email-Benutzername existiert bereits)</span>	
</div>
</div>

<div id="user_success_msg" style="display:none;">
<div id="msg_container" style="height:48px; background-color:white; broder: 2px solid #f06343; margin-top:0px;">
	<span class="checkmark" style="font-size:20px; float:left; margin-top:14px; margin-right:8px; margin-left:28px;"></span>
	<span id="inner_success" style="font-size:16px; float:left; margin-top:15px;">Benutzername existiert noch nicht</span>	
</div>
</div>

<div id="user_error_msg" style="display:none;">
<div id="msg_container" style="height:48px; background-color:white; broder: 2px solid #f06343; margin-top:0px;">
	<span class="failmark" style="font-size:20px; float:left; margin-top:14px; margin-right:8px; margin-left:28px;"></span>
	<span id="server_error" style="font-size:16px; float:left; margin-top:15px;">Benutzername existiert bereits</span>	
</div>
</div>

<div id="validate_msg" style="display:none;">
<div id="msg_container" style="height:48px; background-color:white; broder: 2px solid #f06343; margin-top:0px;">
	<span class="failmark" style="font-size:20px; float:left; margin-top:13px; margin-right:8px; margin-left:28px;"></span>
	<span id="inner_error" style="font-size:14px; float:left; margin-top:17px;">*</span>
</div>
</div>

</div><!--msg_container-->








</form>


</div><!--container-->


</body>

</html>';


?>