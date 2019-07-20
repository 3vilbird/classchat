<?php
session_start();
session_destroy();
echo '
		<h1 style="color:#00a4a2;font-size:50px;text-align:center;top:50%;left:50%;overflow-x:hidden;">Please try again after 3s</h1>
	
';
header("refresh:3;url=index.php");

?>