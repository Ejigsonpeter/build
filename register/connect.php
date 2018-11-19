<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "build";

$conn = mysqli_connect($host,$user,$pass);

if($conn){
	//echo "connected";
}
else{
	echo "connection failed";
}

mysqli_select_db($conn,$db);

 ?>