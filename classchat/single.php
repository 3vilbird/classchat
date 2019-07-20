<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sin.css">
	<title>
	</title>
</head>
<body>
	<?php session_start();
	//header("refresh:30;");?>
	<div class="back" >
	<form action="back.php" method="POST">
	<button class="contact" name="back">BACK</button>
</form>

</div>
<div class="contact">
	<form action="singlerecv.php" method="POST">
		
		<select class="qq" name="recv" class="contact">
			<?php
			
				include "connect.php";
				$query="select username from login";
				$result=$con->query($query);
				$d=$_SESSION['name'];
				
				while ($row=mysqli_fetch_object($result)) {
					$rec=$row->username;
					if(!($rec==$d)){
			?>
				<option class="message" value=<?php echo $rec;?> > 
					<?php echo "chat with:".$rec; ?></option>
			<?php }}?>		
		</select>
		<?php if(isset($_SESSION['r'])){echo '<p class="a">'."connected with:".$_SESSION["r"].'</p>';}?>
		<button class="qq" name="cont" class="contact">select contact</button>
	</form>
</div>

<div class="qqq">
	<?php 
if(isset($_SESSION['r'])){
	$u=$_SESSION['name'];
	echo "<p><--#  ".$u."  #--></p><br>";









	$sql=" SELECT * FROM indchat";
$res = $con->query($sql);
if ($res->num_rows > 0) {

	# code...

	while ($row = $res->fetch_assoc()){
$userid=$row["send"];
include "extra1.php";
$send=$username1;
$messages=$row["message"];
$userid=$row["recv"];
include "extra1.php";
$receive=$username1;
		# code...
		if((($send==$u)&&($receive==$_SESSION['r']))||(($send==$_SESSION['r'])&&($receive==$u)))
		{echo "<p>".$send ." ->".$receive ."::<br>" .$messages."</p><br>";}


	}
}	else{echo "no messages found";}
	 
}
	
		
	
	


	?>
</div>
	<div class="contact">
		<form action="singlesend.php" method="POST">
		   <input class="qq" type="text" name="sm" placeholder="enter your message">
		   <button class="qq" type="submit" name="send">SEND</button>
		</form>
	</div>

</div>

</body>
</html>





