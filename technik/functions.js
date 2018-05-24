
//___________________________________________________________________________________________________________
//_________________________________________________________________________________________Redirect Countdown
var time_left = 8;
var cinterval;

function time_dec(){
	time_left--;
	document.getElementById('countdown').innerHTML = time_left;
	if(time_left == 0){
		clearInterval(cinterval);
	}
}


//___________________________________________________________________________________________________________
//____________________________________________________________________________________________Ajax-XML-Objekt
var ajaxantwort = '';

function XMLobject() {
	var req = false;
	if (window.XMLHttpRequest) {
		try {
			req = new XMLHttpRequest();
		} catch(e) {
			req = false;
		}
	} else if (window.ActiveXObject) {
		try {
			req = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
				req = false;
			}
		}
	}
	return req;
}


function validatebenutzer2(mode){
	alert(mode);
}


function showpw(){	
	var state		= document.getElementById('showpw').style.backgroundImage;	

	if (state =='url("images/Eye-Blind-icon.png")'){
		//alert(state);
		document.getElementById('showpw').style.backgroundImage = 'url("images/Eye-Visible-icon.png")';	
		document.getElementById('passwort').setAttribute('type', 'text');
		document.getElementById('pw2').setAttribute('type', 'text');
		
	} else if (state =='url("images/Eye-Visible-icon.png")'){
	
		document.getElementById('showpw').style.backgroundImage = 'url("images/Eye-Blind-icon.png';
		document.getElementById('passwort').setAttribute('type', 'password');
		document.getElementById('pw2').setAttribute('type', 'password');
	}
	
	/**/
}


function checkuser(){	

	var username	= document.getElementById('username').value;	
		
	//----------------------------------------------------------------------------der ajax call per jquuery: 
	
	$.ajax({
        type:"post",
        url:"technik/checkusername.php",
        data:"user=" + username,
        success:function(data){
        	
        	/**/
	        if(data==0){
	        	//$("#message").html("<img src='images/tick.png' /><span style='font-size:13px; color: black'> Username available</span>");
	            
				//successhandling
	        	
				hide_validate_msg();
				hide_user_error_msg();
				show_user_success_msg();
				
				//alert('checkuser if');
				
	        } else {
	            //$("#message").html("<img src='images/err.png' /><span style=font-size:13px; color: red'> Username already taken</span>");
	            
	            //errorhandling
	        	/**/
	        	hide_validate_msg();
				show_user_error_msg();
				hide_user_success_msg();
				
				//alert('checkuser else');
	        }
        }
     });
	
	/**/
	
	
	//----------------------------------------------------------------------------klassisches javascript-ajax:
	//-------(achtung: in der php datei muss dann auch jeweils das get oder das post array ausgelesen werden):
	
	/*
	var url = "technik/checkusername.php?user="+username;	
	
	req = XMLobject();
	if (req) {    
  		req.onreadystatechange = checkuserantwort;
   		req.open("GET", url, true);
   		req.send(null);
		return ajaxantwort;
	}
	*/
}



function checkuserantwort() {
	
	if (req.readyState == 4) {
		if (req.status == 200) {
			ajaxantwort = req.responseText;
			
			//alert(ajaxantwort);
			
			//je nachdem was man am server gamacht hat und davon abhaengig etwas zurueck gibt abfragen:
			//ajaxantwort = parseInt(ajaxantwort,10);
			
			if (ajaxantwort == 'userexists') {
				//errorhandling
				hide_validate_msg();
				show_user_error_msg();
				hide_user_success_msg();	
				//setTimeout('hide_error_msg()',3500);
			} else if (ajaxantwort == 'newuser') {
				//successhandling
				hide_validate_msg();
				hide_user_error_msg();
				show_user_success_msg();				
				//setTimeout('hide_success_msg',7000);
				
				//setTimeout('window.location = "registrierungsuccess.php?num="+ajaxantwort', 7000);
				
			}
		}
	}
}






//___________________________________________________________________________________________________________
//_______________________________________________________________________________________Benutzer hinzufuegen
function validatebenutzer(mode){
	
	var vorname		= document.getElementById('vorname').value;
	var nachname	= document.getElementById('nachname').value;
	
	
	
	//alert('here');
	
	var valid = true;
	var modus = mode;
	var valtype1 = '';
	var valtype2 = '';
	var valtype3 = '';
	var valtype4 = '';
	
	var vorname		= document.getElementById('vorname').value;
	var nachname	= document.getElementById('nachname').value;
	var email		= document.getElementById('email').value;
	var username	= document.getElementById('username').value;	
	var passwort	= document.getElementById('passwort').value;
	var passwort2	= document.getElementById('pw2').value;	
	var alter	 	= $("#slider").slider("value");
	var newsletter 	= document.getElementById('newsletter').checked; 

	//alert(alter);
	
	if (vorname == '') {
		document.getElementById('red_vorname').style.color = 'red';
		document.getElementById('red_vorname').style.fontSize = '13pt';
		document.getElementById('vorname').style.border = "1px solid red";
		document.getElementById('vorname').style.width = "281px";
		document.getElementById('vorname').style.height = "23px";
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_vorname').style.color = 'black';
		document.getElementById('red_vorname').style.fontSize = '10pt';
		document.getElementById('vorname').style.border = "";
		document.getElementById('vorname').style.width = "280px";
		document.getElementById('vorname').style.height = "23px";
	}
	
	if (nachname == '') {
		document.getElementById('red_nachname').style.color = 'red';
		document.getElementById('red_nachname').style.fontSize = '13pt';
		document.getElementById('nachname').style.border = "1px solid red";
		document.getElementById('nachname').style.width = "281px";
		document.getElementById('nachname').style.height = "23px";
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_nachname').style.color = 'black';
		document.getElementById('red_nachname').style.fontSize = '10pt';
		document.getElementById('nachname').style.border = "";
		document.getElementById('nachname').style.width = "280px";
		document.getElementById('nachname').style.height = "23px";
	}	
	
	if (email == '') {
		document.getElementById('red_email').style.color = 'red';
		document.getElementById('red_email').style.fontSize = '13pt';
		document.getElementById('email').style.border = "1px solid red";
		document.getElementById('email').style.width = "281px";
		document.getElementById('email').style.height = "23px";		
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_email').style.color = 'black';
		document.getElementById('red_email').style.fontSize = '10pt';
		document.getElementById('email').style.border = "";
		document.getElementById('email').style.width = "280px";
		document.getElementById('email').style.height = "23px";
	}
	
	if (username == '') {
		document.getElementById('red_username').style.color = 'red';
		document.getElementById('red_username').style.fontSize = '13pt';
		document.getElementById('username').style.border = "1px solid red";
		document.getElementById('username').style.width = "259px";
		document.getElementById('username').style.height = "23px";		
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_username').style.color = 'black';
		document.getElementById('red_username').style.fontSize = '10pt';
		document.getElementById('username').style.border = "";
		document.getElementById('username').style.width = "255px";
		document.getElementById('username').style.height = "23px";
	}		
	

	if (passwort == '') {
		document.getElementById('red_passwort').style.color = 'red';
		document.getElementById('red_passwort').style.fontSize = '13pt';
		document.getElementById('passwort').style.border = "1px solid red";
		document.getElementById('passwort').style.width = "259px";
		document.getElementById('passwort').style.height = "23px";		
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_passwort').style.color = 'black';
		document.getElementById('red_passwort').style.fontSize = '10pt';
		document.getElementById('passwort').style.border = "";
		document.getElementById('passwort').style.width = "255px";
		document.getElementById('passwort').style.height = "23px";
	}

	if (passwort2 == '') {
		document.getElementById('red_pw2').style.color = 'red';
		document.getElementById('red_pw2').style.fontSize = '13pt';
		document.getElementById('pw2').style.border = "1px solid red";
		document.getElementById('pw2').style.width = "281px";
		document.getElementById('pw2').style.height = "23px";		
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_pw2').style.color = 'black';
		document.getElementById('red_pw2').style.fontSize = '10pt';
		document.getElementById('pw2').style.border = "";
		document.getElementById('pw2').style.width = "280px";
		document.getElementById('pw2').style.height = "23px";
	}


	
	if (newsletter == true) {
		newsletter = '1';
	} else {
		newsletter = '0';
	}	
	
	
	
	
	/*
	if (alter == '') {
		document.getElementById('red_alter').style.color = 'red';
		document.getElementById('red_alter').style.fontSize = '13pt';
		document.getElementById('alter').style.border = "1px solid red";
		document.getElementById('alter').style.width = "64px";
		document.getElementById('alter').style.height = "23px";
		valid = false;
		valtype1 = 'emptyfield';
	} else {
		document.getElementById('red_alter').style.color = 'black';
		document.getElementById('red_alter').style.fontSize = '10pt';
		document.getElementById('alter').style.border = "";
		document.getElementById('alter').style.width = "60px";
		document.getElementById('alter').style.height = "23px";
	}*/

	

	/* */
	
	//______________________________________________andere validierungen
	/*var isnum = /^\d+$/.test(alter);	
	if (isnum == false) {
		document.getElementById('red_alter').style.color = 'red';
		document.getElementById('red_alter').style.fontSize = '13pt';
		document.getElementById('alter').style.border = "1px solid red";
		document.getElementById('alter').style.width = "64px";
		document.getElementById('alter').style.height = "23px";
		valid = false;
		valtype2 = 'notanumber';
	} else {
	}

	*/	
	
	
	var validemail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;	
	if (validemail.test(email) == false) {
		document.getElementById('red_email').style.color = 'red';
		document.getElementById('red_email').style.fontSize = '13pt';
		document.getElementById('email').style.border = "1px solid red";
		document.getElementById('email').style.width = "281px";
		document.getElementById('email').style.height = "23px";	
		valid = false;
		valtype3 = 'notavalidemail';
	} else {
	}
	

	if (passwort === passwort2) {
		var pwnichtgleich = 'gleich';
		//document.getElementById('test').innerHTML = valid;
	} else {
		var pwnichtgleich = 'ungleich';
		//document.getElementById('test').innerHTML = valid;
	}	

	/*alert(pwnichtgleich);*/

	 
	if (pwnichtgleich == 'ungleich') {	
		document.getElementById('red_passwort').style.color = 'red';
		document.getElementById('red_passwort').style.fontSize = '13pt';
		document.getElementById('passwort').style.border = "1px solid red";
		document.getElementById('passwort').style.width = "259px";
		document.getElementById('passwort').style.height = "23px";	
			
		document.getElementById('red_pw2').style.color = 'red';
		document.getElementById('red_pw2').style.fontSize = '13pt';
		document.getElementById('pw2').style.border = "1px solid red";
		document.getElementById('pw2').style.width = "281px";
		document.getElementById('pw2').style.height = "23px";
		
		valid = false;
		valtype4 = 'pwnichtgleich';	
	} else {
	
	}
	

	
	if (valid) {
		if (modus == 'insert') {
			var url = "create/newuser.php?vorn="+vorname+"&nach="+nachname+"&emai="+email+"&user="+username+"&pass="+passwort+"&alter="+alter+"&news="+newsletter;			
			req = XMLobject();
			if (req) {    
		  		req.onreadystatechange = adduserantwort;
		   		req.open("GET", url, true);
		   		req.send(null);
				return ajaxantwort;
			}
		} else if (modus == 'update') {
			
		}
	} else {//if (valid)
		show_user_validate_msg(valtype1, valtype2, valtype3, valtype4);
	}
}


function show_user_validate_msg(valtype1, valtype2, valtype3, valtype4){
	hide_user_error_msg();
	hide_user_success_msg();
	
	
	if (valtype1 == 'emptyfield'){
		document.getElementById('validate_msg').style.display = 'block';
		document.getElementById('inner_error').innerHTML = 'Bitte fülllen sie alle mit einem * markierten Felder aus';
	} else if (valtype1 == ''){
		if (valtype3 == 'notavalidemail'){
			document.getElementById('validate_msg').style.display = 'block';
			document.getElementById('inner_error').innerHTML = 'Bitte geben sie eine valide Email-Adresse ein';
		} else if (valtype3 == ''){
			if (valtype4 == 'pwnichtgleich'){
				document.getElementById('validate_msg').style.display = 'block';
				document.getElementById('inner_error').innerHTML = 'Bitte geben sie zweimal das gleiche Passwort ein';			
			} 
			
			/*
			else if (valtype4 == ''){
				if (valtype2 == 'notanumber'){
					document.getElementById('validate_msg').style.display = 'block';
					document.getElementById('inner_error').innerHTML = 'Bitte geben sie nur Zahlen für das Alter ein';
				}
			}//valtype4
			*/
			
		}//valtype3		
	}//valtype1
}


function adduserantwort() {
	if (req.readyState == 4) {
		if (req.status == 200) {
			ajaxantwort = req.responseText;
			//je nachdem was man am server gamacht hat und davon abhaengig etwas zurueck gibt abfragen:
			ajaxantwort = parseInt(ajaxantwort,10);
			
			if (isNaN(ajaxantwort)) {
				//errorhandling
				hide_validate_msg();
				show_error_msg();
				//setTimeout('hide_error_msg()',3500);
			} else {
				//successhandling
				hide_validate_msg();
				hide_error_msg();
				show_success_msg();
				setTimeout('hide_success_msg',7000);
				setTimeout('window.location = "registrierungsuccess.php?num="+ajaxantwort', 7000);
				
				
			}
		}
	}
}




function test(){
	document.getElementById('success_msg').style.display = 'block';
}


//___________________________________________________________________________________________________________
//_____________________________________________________________________________________success/error messages
function show_success_msg(){
	document.getElementById('success_msg').style.display = 'block';
	cinterval = setInterval('time_dec()', 1000);
}


function hide_success_msg(){
	document.getElementById('success_msg').style.display = 'none';
}


function show_error_msg(){
	document.getElementById('error_msg').style.display = 'block';
	document.getElementById('success_msg').style.display = 'none';
}


function hide_error_msg(){
	document.getElementById('error_msg').style.display = 'none';
	document.getElementById('success_msg').style.display = 'block';
}


function show_user_success_msg(){
	document.getElementById('user_success_msg').style.display = 'block';
	cinterval = setInterval('time_dec()', 1000);
}


function hide_user_success_msg(){
	document.getElementById('user_success_msg').style.display = 'none';
}


function show_user_error_msg(){
	document.getElementById('user_error_msg').style.display = 'block';
	document.getElementById('user_success_msg').style.display = 'none';
}


function hide_user_error_msg(){
	document.getElementById('user_error_msg').style.display = 'none';
	document.getElementById('user_success_msg').style.display = 'block';
}


function hide_validate_msg(){
	document.getElementById('validate_msg').style.display = 'none';
}




//___________________________________________________________________________________________________________
//___________________________________________________________________________________________________________
