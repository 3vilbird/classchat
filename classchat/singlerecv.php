<?php 
session_start();
echo $_POST['recv'];
$_SESSION['r']=$_POST['recv'];
header("Location:single.php");
?>