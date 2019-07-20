<?php
session_start();
$_SESSION['devil'] = 0;$_SESSION['phon']=0;
include 'connect.php';
$uname =$_POST['username'];
$email =$_POST['email'];
$pho =$_POST['mb'];
 $pd=$_POST['papi'];
$pass ="Black".$_POST['password']."Devil";
$pass =md5($pass);
$p=$_POST['p'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$check=0;

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){ 
	$_SESSION['devil'] = 1;
	header("location:sig.php");     }

elseif (Strlen($pho)!=10) {

	# code...
	$_SESSION['phon']=1;
	header("location:sig.php"); 
}


	else{

		include "connect.php";
		$query="select username from login";
		$result=$con->query($query);

		while ($row=mysqli_fetch_object($result)) {$userid=$row->username;
			if($userid==$uname)
			{
				$check=1;
			}}

			if(!$check)
			{
      
$sql = "insert into registration(fname,lname,p,email,phno) values('$fname','$lname','$p','$email','$pho')";
//"insert into login(username,pass) values('$uname','$pass')";
$res = $con->query($sql);
if(!$res)
	{echo "login";
header("Location:error.php");
}  
//include "extra.php";


        
$query="select uid from registration where fname='$fname' AND lname='$lname' AND email='$email'";

//"select uid from login where username=$uname";
 //echo $query;
$result=$con->query($query);

$row=mysqli_fetch_object($result);
$userid=$row->uid;
echo $userid;




    $sql1= "insert into login(uid,username,pass) values('$userid','$uname','$pass')";
            
//"insert into registration(uid,fname,lname,p,email,phno) values('$userid','$fname','$lname','$p','$email','$phno')";
$res1 = $con->query($sql1);
if(!$res1)
	{echo "register";
header("Location:error.php");
}
$st="I am using  class chat";
$rd ="nothing";
$que ="insert into profile(uid,pid,status,profilepic) values('$userid','$pd','$st','$rd')";
//echo $que;
$re = $con->query($que);
if(!$re)
{
	header("Location:error.php");
	echo "hoge ";
}


header("location:index.php");
}
else{
	$_SESSION['ur']=1;
	header("Location:sig.php");
}

}







?>