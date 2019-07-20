<?php 
$query="select uid from login where username='$uname'";
				//echo $query;
				$result=$con->query($query);
				
			$row=mysqli_fetch_object($result);
			$userid=$row->uid;

			?>