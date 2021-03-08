<?php include('server.php');?>
<?php include('../../navbarwWthoutSearch.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register for Doctor</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Contact No.</label>
			<input type="text" name="contact" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<!-- <div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" >
		</div> -->
		<div class="input-group">
			<label>BMDC Number</label>
			<input type="text" name="nmdc" >
		</div>
		<div class="input-group">
			<label>Gender</label>
			<input type="text" name="gender" >
		</div>
		<div class="input-group">
			<label>Department</label>
			<input type="text" name="dept" >
		</div>



		<div class="input-group" align="center">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
			<a href="http://localhost/ajkerbazar/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">HOME PAGE</a>
		</p>
	</form>
</body>
</html>
