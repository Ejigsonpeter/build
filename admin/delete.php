<?php

// connect to the database
include 'connect.php';

// confirm that the 'id' variable has been set
if (isset($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

// delete record from database
$result = mysqli_query($conn,"DELETE FROM admin WHERE id = $id") or die(mysql_error());
//$result1 = mysql_query("DELETE FROM studentprofile WHERE studentId = $studentId") or die(mysql_error());

// redirect user after delete is successful
header("Location: index.php");

}
else {
// redirect user after delete is successful
	echo "zero";
//header("Location: index.php");

}

?>