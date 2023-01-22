<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTER</title>
<link rel="stylesheet" type="text/css" href="../Css/login.css">
</head>
<body>
	<div class="main">
		<div class="form-page">
			<img src="../Images/avatar.jpg" class="logo" alt="">
			<h2>CREATE NEW ACCOUNT</h2>
			<form  method= "post" action="query.php" class="form">
				<div class="elements">
					<label for="email">Email Address:</label>
					<input type="email" name="email" id="email" placeholder="Email Address">
				</div>
				<div class="elements">
					<label for="firstname">First Name:</label>
					<input type="text" name="firstname" id="firstname" placeholder="First Name">
				</div>
				<div class="elements">
					<label for="lastname">Last Name:</label>
					<input type="text" name="lastname" id="lastname" placeholder="Last Name">
				</div>
				<div class="elements">
					<label for="gender">Gender:</label>
					<input type="gender" name="gender" id="gender" placeholder="Gender">
				</div>
				<div class="elements">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" placeholder="Password">
				</div>
				<div class="elements">
					<label for="password">Confirm Password:</label>
					<input type="password" id="password" name="Confirm Password" placeholder="Confirm Password">
				</div>
				<div class="elements">
					<button type="submit">Sign Up</button>
				</div>
				<div class="elements">
					<a href="login.php" class="register">Sign In</a>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
