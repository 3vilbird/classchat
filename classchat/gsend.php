<?php
session_start();
include 'connect.php';
$msg=$_POST['ms'];
if ($msg!=null) {
	# code...


$uname=$_SESSION['name'];
include "extra.php";
$sql ="insert into grchat(sender,message) values('$userid','$msg')";
$result=$con->query($sql);
if (!$result) {
	die("hoge le machha");
	# code...
}


}
header("location:groupchat.php");
?>