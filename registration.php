<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION</title>
</head>
<body style="margin: 0; line-height: 2.1em;">
	<h1 style="padding: 30px; background: black; margin: 0;"></h1>
	<div style="text-align: center;">
		<h1 style="font-weight: bold; font-size: 60px; margin-top: 40px; font-family: cambria; color: lime;">REGISTRATION</h1>
		<hr>
		<form action="" method="POST">
		<div style="text-align: left; margin-left: 20%; font-size: 20px; font-weight: normal; font-family: impact;">
			<div>
				<label>Firstname:</label>
				<br>
				<input type="text" size="60" name="firstname">
			</div>
			<div>
				<label>Lastname:</label>
				<br>
				<input type="text" size="60" name="lastname">
			</div>
			<div>
				<label>Middle Initial:</label>
				<br>
				<input type="text" size="60" name="middle">
			</div>
			<div>
				<label>Address:</label>
				<br>
				<input type="text" size="60" name="address">
			</div>
			<div>
				<legend>Choose your gender:</legend>
				<label for="male">Male</label>
				<input type="radio" name="gender" id="Male" value="male">
				<label for="female">Female</label>
				<input type="radio" name="gender" id="female" value="female">
			</div>
			<div>
				<label>Course:</label>
				<br>
				<input type="text" size="60" name="course">
			</div>
			<div>
				<label>Year & Section:</label>
				<br>
				<input type="text" size="60" name="year">
			</div>
			<div>
				<button type="submit">Save</button>
				<button><a href="login.php">Cancel</a></button>
			</div>
		</div>	
		</form>
		<h1 style="padding: 30px; background: black; margin-top: 47px; margin-bottom: 0"></h1>
	</div>

</body>
</html>

<?php 

if (isset($_POST['firstname'])) {
		$firstname =$_POST['firstname'];
		$lastname =$_POST['lastname'];
		$middle =$_POST['middle'];
		$address =$_POST['address'];
		$gender =$_POST['gender'];
		$course =$_POST['course'];
		$year =$_POST['year'];
		echo "<p>$firstname</p>";
		echo "<p>$lastname</p>";
		echo "<p>$middle</p>";
		echo "<p>$address</p>";
		echo "<p>$gender</p>";
		echo "<p>$course</p>";
		echo "<p>$year</p>";
	}
?>	



