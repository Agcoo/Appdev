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
	<form action="login.php" method="post">
	<img src="bg.jpg" class="bgjpg" />

	<div class="logindiv">
		
		<div class="logincolor">

			<div>
				<div class="logopnglogindiv">
					<img src="logo.png" class="logopnglogin" />	
				</div>

				<div class="uname">
					<img src="user.png" class="userpng" />
					<input type="text" name="username" class="usernameerror" placeholder="Incorrect Username!">
				</div>

				<div class="pass">
					<img src="passw.png" class="passwpng" />
					<input type="password" name="pword" class="passworderror" placeholder="Incorrect Password!">
				</div>

				<div class="submit">
					<a href="index.php"><input  value="BACK" class="loginbtn"></a>
					<input type="submit" value="LOGIN" class="loginbtn">
				</div>

			</div>
			
		</div>

	</div>
	</form>

</body>


</html>