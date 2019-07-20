<?php
echo '<div style="height:1000px;width:2000px;background:white;">';
include "connect.php";$uu=$_POST['usernamecheck']; $uname =$uu;
include "extra.php";
//echo $uu;
$query='select * from login where username="'.$uu.'"';
//echo $query;
$r=$con->query($query);
if(!$r){echo "error dude";}
else{if($r->num_rows<0){echo '<p style=" color:cyan;font-size:60px;text-align:center;">u have entered wrong username</p>';}
else{while ($row = $r->fetch_assoc()){$uid=$row['uid'];
$query='select * from registration where uid=" '.$uid.'" AND email="'.$_POST['emailcheck'].'"';
//echo $query;
$l=$con->query($query);
if($l->num_rows<0){echo '<p style=" color:cyan;font-size:60px;text-align:center;">u have entered wrong email address</p>';}
else{if($_POST['p1']==$_POST['p2']){
	$sd = "Black".$_POST['p1']."Devil";
	$sd = md5($sd);


	$query='update login set pass="'.$sd.'" where username="'.$uu.'"';
	$p=$con->query($query);	
	if(!$p)
		{die("cannot change password");}					}
							//echo $roww; 
}
}					}}
echo '</div>';
header("location:index.php");


?>