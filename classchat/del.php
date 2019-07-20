<?php 
 include "connect.php";
 session_start();
$uname=$_SESSION['name'];

include"extra.php";
echo $userid;

$query="DELETE FROM registration WHERE  uid='$userid' ";
$res =$con->query($query);
if(!$res){die("hoooooooge machha");}
else
{header("location:index.php");}

 ?>