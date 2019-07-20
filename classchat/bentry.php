<?php
session_start();
$_SESSION['bentry']=0;
if(isset($_POST['display']))
{
	header("Location:display.php");
}
if(isset($_POST['back'])){
	header("Location:classchat.php");
}
if ((isset($_POST['submit']))||(isset($_POST['alter']))){
if(($_POST['subjects']=='0')||($_POST['internals']=='0')){
$_SESSION['check']=1;
	header("Location:entry.php");
}	

else{
	include "connect.php";
	//{$_SESSION['bentry']=1;}
	$calcvalue=($_POST['attendence']*1000)+$_POST['marks'];
	$subject=$_POST['subjects'];
	$intt=$_POST['internals'];$usn=$_POST['usn'];
	$sql=" SELECT * FROM academic where usn='$usn' and internal='$intt'";
$res = $con->query($sql);
if ($res->num_rows > 0) {$query="update academic set $subject='$calcvalue' where usn='$usn' AND internal='$intt'";

}
else{
	$query="insert into academic(internal,usn,$subject) values('$intt','$usn','$calcvalue')";}
	echo $query;
	if(($_POST['marks']>0)&&($_POST['attendence']>0)){$result=$con->query($query);}
	if($result){$_SESSION['insert']=1;
	header("Location:entry.php");
	}else{
		$_SESSION['bentry']=1;
	header("Location:entry.php");}
}

}


?>