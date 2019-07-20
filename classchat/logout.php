<?php
session_start();
session_destroy();

echo '<html>
<head>
	<link rel="stylesheet" type="text/css" href="logout.css">
</head>
<body>
	<div class="loader">
		<h1>_LogOut_</h1>
	</div>
	<div class="loader1">
		<h1 style="color:#00a4a2;font-size:50px;">You are about to logout in 5s</h1>
	</div>
	
</body>
</html>
';
header("refresh:5;url=index.php");



?>