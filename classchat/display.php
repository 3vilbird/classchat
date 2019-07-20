<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="display1.css?v=2">
	<title></title>
</head>
<body>
	<form action="bdisplay.php" method="post">
	<input  class="display" type="text" name="search" placeholder="ENTER USN">	
	<button type="submit" name="sb">Search</button>
	
	<?php 
//view "view"
		session_start();
$u=$_SESSION['name'];
include "connect.php";
$uname=$u;
include "extra.php";
$query="CREATE view data as select p from registration where uid='$userid'";
$result=$con->query($query);


$query="SELECT p from registration where uid='$userid'";
$result=$con->query($query);
$result=$result->fetch_assoc();
$result=$result["p"];
if(!$result){
echo '<button  type="submit" name="back1">BACK</button>';

}
else{
echo '<button class="display" type="submit" name="back2" >BACK</button>';
	}
			?>
	</form> 
	<div id="display1">
		
		<?php	if(isset($_SESSION['usn'])){
		include "connect.php";
	$usn=$_SESSION['usn'];
	for ($g=1; $g < 4; $g++) { //echo "For internal:".$g;
		# code...
	
	$sql=" SELECT * FROM academic where usn='$usn' AND internal='".$g."'";
$res = $con->query($sql);
if($res->num_rows == 0) {echo '<p style="color:cyan;font-size:20px;">internal:'.$g.'is not entered</p><br>'; }
elseif($res->num_rows > 0) {
$r=$res->fetch_assoc();	
$subj=array('cs51','cs52','cs53','cs54','cs55','cs56');
$marks=array();
$att=array();
for($q=0;$q<6;$q++)
{if($r[$subj[$q]]>0){
	$tot=$r[$subj[$q]];
	$att[$q]=intval($tot/1000);
	$marks[$q]=$tot-($att[$q]*1000);
	
}
	else{
		$marks[$q]=0;
	$att[$q]=0;
	}
}

	echo '<p style="color:cyan;font-size:20px;"> For internal:'.$g.'</p>'.'<table style="background:black;color:cyan;border-color:cyan;height:500px;width:1200px;	" border=20px >
<tr><td>Subjects</td>
';
#subject names
for($i=0;$i<6;$i++)
{
	echo '<td>'.$subj[$i].'</td>';
}
#marks
echo '</tr><tr><td>marks</td>';for($i=0;$i<6;$i++)
{
	echo '<td>'.$marks[$i].'</td>';
}echo '</tr>
<tr>
<td>attendance</td>';
for($i=0;$i<6;$i++)
{
	echo '<td>'.$att[$i].'</td>';
}
echo '

</tr></table><br>


';

	# code...
}}}?>


			
			

</body>
</html>