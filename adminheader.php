<?php
if(isset($_GET['tab']))		{ $getVar = $_GET['tab']; } else { $getVar = 'tabClick0';}

echo'
<table style="text-align: left; margin-top:15px; margin-left:15px" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      	<td style="width: 220px;" rowspan="2">
			<form method="post" action="main.php?tab=tabClick1">';
if($getVar == 'tabClick1'){ echo '<button class="menu-button-active" type="submit">'; }
else {echo '<button class="menu-button" type="submit">'; }

echo'<span class="button-caption" style=" margin-top: 11px; float:left">Admin Start</span>
		 		<span class="navi-icon" style="font-size: 20pt; margin-top: 4px; float:right"></span>
			</button>
			</form>
      	</td>
    
  		<td style="width: 220px;" rowspan="2">
	 		<form method="post" action="main.php?tab=tabClick2">';
if($getVar == 'tabClick2' || $getVar == 'addtrip' || $getVar == 'tripdetails'){ echo '<button class="menu-button-active" type="submit">'; }
else {echo '<button class="menu-button" type="submit">'; }
echo'<span class="button-caption" style=" margin-top: 10px; float:left">Tab2</span>
	 			<span class="navi-icon" style="font-size: 20pt; margin-top: 3px; float:right"></span>
			</button>
			</form>
 		</td>
    
	  	<td style="width: 220px;" rowspan="2">
	  		<form method="post" action="main.php?tab=tabClick3">';
if($getVar == 'tabClick3' || $getVar == 'addcar' || $getVar == 'autodetails'){ echo '<button class="menu-button-active" type="submit">'; }
else {echo '<button class="menu-button" type="submit">'; }
echo'<span class="button-caption" style=" margin-top: 11px; float:left">Tab3</span>
	 			<span class="navi-icon" style="font-size: 20pt; margin-top: 4px; float:right"></span>
			</button>
			</form>
 		</td>
    
	  	<td style="width: 220px;" rowspan="2">
	  		<form method="post" action="main.php?tab=tabClick4">';
if($getVar == 'tabClick4' || $getVar == 'adddriver' || $getVar == 'driverdetails'){ echo '<button class="menu-button-active" type="submit">'; }
else {echo '<button class="menu-button" type="submit">'; }
echo'<span class="button-caption" style=" margin-top: 11px; float:left">Tab4</span>
	 			<span class="navi-icon" style="font-size: 20pt; margin-top: 4px; float:right"></span>
			</button>
			</form>
 		</td>
      
      <input type="hidden" id="getvar" name="getvar" value="'.$getVar.'">';
      
      echo'</form>';
      echo'</td>
    </tr>
  </tbody>
</table>';



