<?php 
include "connect.php";
session_start();
$uname=$_SESSION['name'];
include "extra.php";
$q=$_POST['hisusn'];
$pp="update profile set usn='$q' where uid='$userid'";


$res=$con->query($pp);
if(!$res){
	die("gone");
header("Location:error.php");
}
header("Location:display.php");
?>