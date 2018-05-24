<?php

require_once ('technik/config.php');
$dbconnection = db_connect();
if(!$dbconnection) error_message(sql_error());

$results_per_page = 10; 

//$sqlquery01 = "SELECT * FROM benutzer ORDER BY pkid DESC LIMIT 10, 10";
$sqlquery01 = "SELECT * FROM benutzer ORDER BY pkid DESC";
$result01 = mysqli_query($dbconnection, $sqlquery01);

if (!isset ($_GET['results'])) { $_GET['results'] = '9'; }
$selectedNum = $_GET['results'];

$RowCt = 0; //Row Counter
$numRes = mysqli_num_rows($result01);
$page_rows = $selectedNum;
$pagenum = 1;
if(isset($_GET['page'])){ $page = $_GET['page']; } else { $page = 1;}	



echo '
<div style="">

<table border="1" style=" margin-right: auto; margin-left: auto; ">
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Alterjahre</th>
<th>Newsletter</th>
<th>Edit</th>
</tr>';

while(($row = mysqli_fetch_array($result01))){
    
    if($row['newsletter'] == 0) { $newsl ='nein'; } else if ($row['newsletter'] == 1) { $newsl ='ja'; }
    
    if ($RowCt >= (($page-1) * $page_rows) && $RowCt < ($page * $page_rows)) {
    
    
    
        echo '<tr>';
        echo '<td>' . $row['vorname'] . '</td>';
        echo '<td>' . $row['nachname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['alterjahre'] . '</td>';
        echo '<td>' . $newsl . '</td>';
        echo '<td> <img style="" src="images/index.png"  /> </td>';
        echo '</tr>';
    
   
	}
	$RowCt = $RowCt + 1;
    
}//while
echo "</table></div>";



$numPages = $numRes/$page_rows;
$numPages = ceil($numPages);

echo '<div id="resultsnavigation" style="margin-top:10px; margin-left:565px; font-family:Calibri; font-size:14px; color:#1E1D1B;">';

if ($page > 1){
    $prevpage=$page-1;
} else if ($page >= 1){
    $prevpage = $page;
}

echo '<input type="button" name="gotonextpage" id="gotofirstpage" style="border: 1px solid transparent; background-color:#bababa; cursor:pointer;"
value="|<" onclick="location.href=\'main.php?tab=tabClick1&results='.$_GET['results'].'&page=1\'">&nbsp;';

echo '<input type="button" name="gotolastpage" id="gotolastpage" style="border: 1px solid transparent; background-color:#bababa; cursor:pointer;"
value="<" onclick="location.href=\'main.php?tab=tabClick1&results='.$_GET['results'].'&page='.$prevpage;
echo '\'">';

echo '  '.$page.'/'.$numPages.'&nbsp;';

if ($page < $numPages){
    $nextpage = $page+1;
} else if ($page <= $numPages){
    $nextpage = $page;
}

echo '<input type="button" name="gotonextpage" id="gotonextpage" style="border: 1px solid transparent; background-color:#bababa; cursor:pointer;"
value=">" onclick="location.href=\'main.php?tab=tabClick1&results='.$_GET['results'].'&page='.$nextpage;
echo '\'">&nbsp;';

echo '<input type="button" name="gotolastpage" id="gotolastpage" style="border: 1px solid transparent; background-color:#bababa; cursor:pointer;"
value=">|" onclick="location.href=\'main.php?tab=tabClick1&results='.$_GET['results'].'&page='.$numPages.'\'">';




/*
 $sqlquery02 = "SELECT COUNT(pkid) AS total FROM benutzer";
 $result02 = mysqli_query($dbconnection, $sqlquery02);
 $row02 = mysqli_fetch_array($result02);
 $total_pages = ceil($row02["total"] / $results_per_page); // calculate total pages with results
 
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
    echo "<a href='main.php?tab=tabClick1?page=".$i."'";
    if ($i==$page)  echo " class='curPage'";
    echo ">".$i."</a> ";
};

*/


//mysqli_close($con);


