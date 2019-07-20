	<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="display1.css">
	<title></title>
</head >
<body>
	<?php
	session_start();
	?>
	<form  action="bentry.php" method="post">
		<div class="display1">
			<input style="color:white" type="text" name="usn" placeholder="ENTER USN">
		<select name="subjects" >
			<option value="0">SELECT SUBJECT</option>
			
			<option value="cs51">CS51</option>
			<option value="cs52">CS52</option>
			<option value="cs53">CS53</option>
			<option value="cs54">CS54</option>
			<option value="cs55">CS55</option>
			<option value="cs56">CS56</option>

		</select>
		<input  style="color:white" type="text" name="marks" placeholder="ENTER MARKS">
		<select name="internals">
			<option value="0">INTERNALS</option>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
		</select>
		<input style="color:white" type="text" name="attendence" placeholder="ENTER ATTENDENCE">
<?php 
if($_SESSION['check']){echo '<p style="color:darkred">All Fields Are Mandatory</p>';}
elseif ($_SESSION['insert']) {echo '<p style="color:darkred;font-size:25px;">Successfully saved</p>';
	# code...
}elseif ($_SESSION['bentry']) {echo '<p style="color:darkred;font-size:25px;">Attendance or Marks cannot be negative</p>';
	# code...
}
 ?>
	</div>
		
		<button type="submit" name="submit">SUBMIT</button>
		<button type="submit" name="display">DISPLAY</button>
		<button type="submit" name="alter">ALTER</button>
		<button type="submit" name="back">BACK</button>
	</form>

</body>
</html>