
<?php
include "connect.php";
$query="select username from login where uid='$userid'";
				
				$result=$con->query($query);
				
			$row1=mysqli_fetch_assoc($result);
			$username1=$row1['username'];

			?>
