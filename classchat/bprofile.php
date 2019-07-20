   <?php
  include "connect.php"; 
  session_start();



       $filename = $_FILES["upfile"]["name"];
       $tempname = $_FILES["upfile"]["tmp_name"];
       $folder="pictures/".$filename;
      // echo $folder;
      
       move_uploaded_file($tempname, $folder);
     //  echo "<img src= '$folder' height='100px'  width='100px'>";
$uname=$_SESSION['name'];
include "extra.php";

      // "update profile set propic='$folder' where user=zzz ";
      $sql   ="UPDATE `profile` SET `profilepic`='$folder'  WHERE `uid`='$userid' ";
     $result = $con->query($sql);

     if($result){echo "inserted";}
     else{die("hoge machha");}
     $_SESSION['refresh']=1;


// $sql="SELECT  `propic` FROM `profile` WHERE `user`= '$ee' " ;
    // $result = $con->query($sql);


     	   //if($result){ 
     	   //	$result = $result->fetch_assoc();
     	   	//$folder=$result['propic'];


 //$_SESSION['gg'] = $folder;
 //$_SESSION['devil']=;


     	   	//echo "<img src= '$folder' height='100px'  width='100px'>"; 
         //11111111 }
    // else{die("hoge machha");}



     
            
header("location:profile.php");



?>

	
