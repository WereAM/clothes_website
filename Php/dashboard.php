<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="../Css/dashboard.css">
</head>
<body>

	<div class="logo">
		<img src="../Images/retailtherapy.jpg">
	</div>

	<nav>
		<ul>
			<li class="active"><a href="">GALLERY</a></li>
			<li><a href="#">ORDER</a></li>
			<li><a href="../Html/index.html">HOME</a></li>
			<li><a href="#">LOG OUT</a></li>
			<li><img src="../Images/avatar.jpg" class="user" alt=""></li>
			<li><?php echo $_SESSION['User'];?></li>

		</ul>
	</nav>
</body>
</html>