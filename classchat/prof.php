<?php
session_start();
$u=$_SESSION['name'];
include "connect.php";
$uname=$u;
include "extra.php";
$query="SELECT p from registration where uid='$userid'";
$result=$con->query($query);
$result=$result->fetch_assoc();
$result=$result["p"];

if($result){$_SESSION['insert']=0;
	$_SESSION['bentry']=0;
	$_SESSION['check']=0;$_SESSION['insert']=0;

	header("Location:display.php");
}
elseif(!$result){$_SESSION['check']=0;
	header("Location:entry.php");
	$_SESSION['insert']=0;
	$_SESSION['bentry']=0;
	$_SESSION['check']=0;$_SESSION['insert']=0;
}
?>
/* $uname=$u;
include "extra.php";
$query="SELECT P from registration where uid='$userid'";
$result=$con->query($query);
$result=$result->fetch_assoc();
$result=$result["P"];

$query="SELECT P from signup where username='$u'";
$result=$con->query($query);
$result=$result->fetch_assoc();
$result=$result["P"];