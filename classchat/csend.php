
<?php
session_start();
include 'connect.php';
$uname=$_SESSION['name'];
include "extra.php";

$msg=$_POST['ms'];
if($msg!=null){


$sql ='CALL chat("'.$uname.'","'.$msg.'"   ) ';  
echo $sql;                      //"insert into newsfeed(sender,message) values('$userid','$msg')";
$result=$con->query($sql);if(!$result){die("canot send message");} }
        // $ga=$_POST['upfile'];

//}

header("location:classchat.php");
?>