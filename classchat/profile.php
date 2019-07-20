<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="classchat.css"> 

	<link rel="stylesheet" type="text/css" href="profile.css">
	<title>profile</title>




</head>
<body>
	<div class="nav" >
	<ul id="ff">

				<a href="classchat.php"><li>Back</li></a>
				<a id="gd" href="del.php"><li>delete my account</li></a>
	</ul></div>
	<div class="outbox">
		<div class="pro"><font face="Algerian" color="#03fb24" size="46">My profile</font></div>

		<?php
  include "connect.php";
              session_start();
                $uname= $_SESSION['name'];
include "extra.php";

              $sql = "select * from profile where uid='$userid'";
              $res = $con->query($sql);
              $rr = $res;
              if (!$res) {
              	# code...
              	die("gone");
              }
              else{
              	$ree= $res->fetch_array();
                   $place = $ree['profilepic']  ;
                   $us=$ree['status'];
                    //echo $place;

               }




		?>




		<div class="circle" style="
		background-image: url(<?php echo $place; ?>);">
			

     <div class="upload" >
			
            <form action="bprofile.php" method="POST" enctype="multipart/form-data">
      <input  id="dd" type="file" name="upfile"/>
      <input id="ss" type="submit" name="submit" value="uploade profile"  />



   </form>



		</div>



		</div>
		<div class="name"> <?php echo $_SESSION['name'];   ?>
		</div>
		
		<div >
			<form action="status.php" method="post">

			
			<input  class="status" type="text" name="stat" placeholder= '<?php   echo $us;  ?>'  >
			<button id="but">update</button></form>
		<form action="prodisp.php" method="POST">
			<button id="butt">view status..</button>
		    </form>
		</div>
		<div class="view">
			
			<!-- use for loop -->
			<?php 
			//session_start();
			if(isset($_SESSION['trump'])){
			//$us=$_SESSION['name'];


$sql = "select * from profile where uid <> '$userid' ";
$res = $con->query($sql);
if($res->num_rows > 0){
   
  
    while ($row=$res->fetch_assoc()) 
			{
				$userid = $row['uid'];
include "extra1.php";
				$user=$username1;
				$st = $row['status'];
                $pic = $row['profilepic'];
			




				

				echo' <div style="width: 98%;
height: 130px;
background: black;
margin: 10px;
border-radius: 20px;
position: relative;
">

				<div style="width: 100px;
 height: 100px;
position: relative;

 background-image: url(' .$pic.');
 background-size:cover;
 border:2px solid cyan;
float: left;
margin-left: 10px; 
margin-top: 15px; 
 
 border-radius:50%; "></div>






				<div style="width: 80%;
 height: 100px;
position: relative;
 background-image:url(dragon.jpg);
 background-size:cover;
 border:2px solid cyan;
float: right;
margin-right: 10px; 
margin-top: 15px; 
 
 border-radius:70px; 
 text-align: center;word-wrap: break-word;">';echo '<span style="color:darkred;">'.$user.'</span>'."<br><br>".'<span style="color:white;">'.$st.'</span>';


 echo'</div>

				</div>';
			}
    
	#while ($row=$res->fetch_assoc()) {
		# code...
		#echo $row['user'] ."<pre>     <pre>" .$row['status']   ."<br>" ; 
	}
	





else{ die("hogele");}


           

			}?>

		</div>
		
		


	</div>

</body>
</html>