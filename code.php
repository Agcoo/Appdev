<?php
include('conn.php');

$fn=$_POST['fname'];
$ln=$_POST['lastname'];
$num=$_POST['number'];
$em=$_POST['email'];
$user=$_POST['username'];
$pass=$_POST['password'];
$blk=$_POST['block'];
$st=$_POST['street'];
$subd=$_POST['subdivison'];
$cty=$_POST['city'];
$reg=$_POST['region'];


$query="INSERT INTO userlogin VALUES('$fn', '$ln', '$num', '$em', '$user', '$pass', '$blk', '$st', '$subd', '$cty', '$reg')";
mysqli_query($conn, $query);
header("location:userloginn.php");
?>