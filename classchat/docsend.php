<?php 
session_start();
include "connect.php";
$uname=$_SESSION['name'];
include "extra.php";

if($_FILES["upfile"]["name"]!=null)
{ 
	# code...

       $filename = $_FILES["upfile"]["name"];
       $tempname = $_FILES["upfile"]["tmp_name"];
       $folder="pictures/".$filename;
       move_uploaded_file($tempname, $folder);

       $sql ="insert into newsfeed(sender,message) values('$userid','$folder')";
$result=$con->query($sql); if(!$result){die("canot send message");}
}
header("location:classchat.php");



?>