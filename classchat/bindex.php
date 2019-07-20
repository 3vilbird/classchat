<?php
session_start();
include 'connect.php';
$uname=$_POST['username'];
$pass="Black".$_POST['password']."Devil";
$pass=md5($pass);
$sql="select * from login where username='$uname' and pass='$pass'";
$result=$con->query($sql);
$x=isset($_POST['Sign-Up']);
if((!$row=$result->fetch_assoc())&&(!$x)){
	header("Location:error.php");
}
elseif ($x) { $_SESSION['devil']=0;
 $_SESSION['phon']=0;
 $_SESSION['ur']=0;
	header("Location:sig.php");
}
else{
	$_SESSION['name']=$_POST['username'];
header("Location:classchat.php");
}

?>