<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="classchat.css">
	<title></title>
</head>
<body>
	<div class="container" >
		
		
		<div class="nav" >
			<p style="color: cyan;font-size:70px;text-align:center; ">welcome to group chat</p> 
			<ul id-"ff"><a href="classchat.php"><li>Back</li></a>
		</ul></div>
		<div class="chatbox" >
			<div class="bar">Chat for your queries!!!</div>
			<div class="chatlog">
				
				
				<div class="message">
					
					<!-- use php tag to display text -->


					<?php

					include "connect.php";


					$sql=" SELECT * FROM grchat";
					$res = $con->query($sql);
					if ($res->num_rows > 0) {



						while ($row = $res->fetch_assoc()){
$userid=$row['sender'];include "extra1.php"; $Q=$row['message']; 
                        if(strpos($Q, 'pictures/')!==false){echo"<div style=' margin:10px;padding:20px;position:relative;width:310px;height:410px;background:#fdeca6;padding:11px;border-radius:20px;'><p><span style='color: red;' >" .$username1."</span><br></p><br><div style='position:relative; width:300px;height:300px; background-image:url(" .$Q. ");background-size:cover; '    ></div></div>";}


						else {echo "<p><span style='color: red;' >" .$username1."</span><br> ".$Q."</p><br>";}


						}

    
					




					}

					else{

						echo "no messages yet!!";




					}







					$con->close(); 

					?> 



				</div>
			</div>
			


			<!-- this is for text area-->

			<div>
				<?php
				session_start();
$u=$_SESSION['name'];?>
<form action="gsend.php" method="post">
					<input class="gg" name="ms"placeholder="enter text"></input>
					
					<button  class="gs" type="submit" value="send" >send</button>
				</form>
				<form  action="gdoc.php" method="post"  enctype="multipart/form-data" >
					<input class="gg" type="file" name="upfile">
					<button  class="gs" type="submit" value="send" >send</button>
				</form>

			</div>
		</div>
	</div>
</body>
</html>