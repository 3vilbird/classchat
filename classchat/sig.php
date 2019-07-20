<?php session_start();



?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="index.css"></head>
<body>
<div id="logo">
	<h1><i>...Sign-Up...</i></h1>
</div>
<section class="start-login">
	
<form action="signup.php" method="POST">
	<div class="fade-box">
		<input type="text" name="username" placeholder="username" required>
		<?php if ($_SESSION['ur']) { echo '<label style="color:darkred; font-size:20px;">username already exist...!</label>'; }
			        ?>


		<input type="text" name="fname" placeholder="Firstname"required>
		<input type="text" name="lname" placeholder="Lastname"required>
		<input type="password" name="password" placeholder="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
		<input type="text" name="email" placeholder="Email Id"required>
		<?php if ($_SESSION['devil']) { echo '<label style="color:darkred;font-size:20px; "  >invalid email</label>';
			# code...
		}             ?>
		<input type="text" name="mb" placeholder="Mobile Number"required>
			<?php if ($_SESSION['devil']) { echo '<labelstyle="color:darkred; font-size:20px;">invalid phone number</label>'; }
			        ?>
			        <input type="text" name="papi" placeholder="USN/EID"required  pattern="{10}" >

		<select class="s" name="p" placeholder="profession">
			<option class="s" value="0">Teacher</option>
			<option class="s" value="1">Student</option>
		</select>
		<button type="submit">Sign-Up</button>
	</div>
</form>
</section>
<div id="circle">
	<div id="inner-circle"></div>
</div>

<p style="color: #00a4a2;font-size: 50px;">Please Sign-Up</p>

</body>
</html>