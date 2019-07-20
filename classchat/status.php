<?php
include "connect.php";

session_start();

$uname= $_SESSION['name'];
include "extra.php";
$ll =$userid;

if($_POST['stat']!= NULL )
{ 
	echo  $_POST['stat'];
	$ss = $_POST['stat'] ;



	$sql="UPDATE profile SET status='$ss' WHERE uid ='$ll' ";
//$sql="insert into profile (user,status)  values('$ll','$ss')";
	$res = $con->query($sql);
	if($res){


		echo "inserted success";
	     }



else{

	//echo "try again later";

	die("hoge machha...");
}

}


else{

	 echo "status field is empty";
	header("refresh:2;url=profile.php");
	die("status field is empty");

}







header("location:profile.php");
?>