<?php 
 
session_start();
	       if(isset($_SESSION['name']))
	       {
	       $usr=$_SESSION['name'];
	     $l=$_SESSION['r'];

#to storesi
			if(isset($_POST['send'])){
			$m=$_POST['sm'];
			include "connect.php";
			$uname=$usr;
			include "extra.php";
$gan=$userid;
$uname=$l;
include "extra.php";
			$query="insert into indchat(message,send,recv) values('$m','$gan','$userid')";
			$result=$con->query($query);
			
			header("Location:single.php");
		//header("Location:ifm.php");
			}}

?>