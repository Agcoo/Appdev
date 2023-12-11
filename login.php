<?php
session_start();
//connection string
include('conn.php');

//get values from the form
$em=$_POST['username'];
$pw=$_POST['pword'];

//check email and password
$query="SELECT * FROM userlogin WHERE cusername='$em' AND cpassword='$pw'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0){
	while($row=mysqli_fetch_assoc($result)){
		
		//declare session variables
		$_SESSION['username']=$em;
		$_SESSION['pword']=$pw;
			
	}
	header('location:home.php'); 
	
}
else{
	
	header('location:userloginerror.php');
	
}

?>