<?php
session_start();
if(isset($_POST['back1'])){
	header("Location:entry.php");
}
if(isset($_POST['back2'])){
	header("Location:classchat.php");
}
if (isset($_POST['sb'])){
	$_SESSION['usn']=$_POST['search'];
	header("Location:display.php");
	}

?>