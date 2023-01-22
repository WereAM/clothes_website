<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="../Css/login.css">
</head>
<body>
	<div class="main">
		<div class="form-page">
			<img src="../Images/avatar.jpg" class="logo" alt="">
			<h2>CLIENT LOGIN</h2>
			<form action="process_login.php" method="post" class="form">
				<div class="elements">
					<label for="email">Email Address:</label>
					<input type="email" name="email" id="email" placeholder="Email Address">
				</div>
				<div class="elements">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" placeholder="Password">
				</div>
				<div class="elements">
					<button type="submit" value="Login" name="Login">Login</button>
				</div>
				<div class="elements">
					<a href="forgot_password.html">Forgotten Password?</a>
					<a href="register.php" class="register">Sign Up</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
