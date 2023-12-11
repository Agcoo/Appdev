<!DOCTYPE html>
<html>
<head>
	<title>Sole MatePH</title>
	<link rel="stylesheet" type="text/css" href="csss.css">
	<meta name="viewport" content="width=device-width, initial-sclae=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<img src="bg.jpg" class="bgjpg" />

	<div class="logoclass">
			<img src="logo.png" class="logojpg"> 
	</div>

	<form action="login.php" method="post">
		<input type="text" name="username" class="username" placeholder="Username">
		<input type="password" name="pword" class="password" placeholder="Password">

		<div class="logindiv">
			<a href="index.php">
				<div class="logincolor">
					Back
				</div>
			</a>
		</div>

		<input type="submit" value="LOGIN" class="loginbtn">
	</form>
</body>


</html>