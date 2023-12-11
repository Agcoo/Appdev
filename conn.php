<?php
//connection string
$username="root";
$password="";
$database="solemateph";

$conn=mysqli_connect("localhost",$username,$password)
or die("Connection Failed!");
mysqli_select_db($conn,$database);



?>