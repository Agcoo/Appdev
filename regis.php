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
	<div class="bgcolor">
		
		<div class="headerpic">
			<img src="head.png" class="headpng">
		</div>

	<form action="code.php" method="post">
		<div class="name">
			<input type="text" name="fname" class="fnamecl" placeholder="First Name" required>				
			<input type="text" name="lastname" class="lnamecl" placeholder="Last Name" required>
		</div>	

		<div>
			<input type="email" name="email" class="emailcl" placeholder="Email">
			<input type="text" name="number" class="numcl" placeholder="Mobile Number" > <br />
			<input type="text" name="username" class="usernamecl" placeholder="Username" > <br />					
			<input type="password" name="password" class="passcl" placeholder="Password" >
		</div>

		<div class="rerepic">
			<img src="rere.png" class="rerepng">
		</div>

		<div class="firstt">
			<input type="text" name="block" class="blkcl" placeholder="Block/House Number">	
			<input type="text" name="street" class="stcl" placeholder="Street" >
		</div>

		<div class="firstt">
			<input type="text" name="subdivison" class="subdcl" placeholder="Subdivision">	
			<input type="text" name="city" class="citycl" placeholder="City">
			<input type="text" name="region" class="regioncl" placeholder="Region" >
		</div>

		<input type="submit" value="REGISTER" class="regbtn">
	</form>
	</div>
</body>
</html>