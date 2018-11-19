<?php

// connect to the database
include 'connect.php';

// confirm that the 'id' variable has been set
if (isset($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];
$a = "approved";

// delete record from database
$result = mysqli_query($conn,"UPDATE members SET approval = '$a'  WHERE id = '$id' ") or die(mysql_error());
//$result1 = mysql_query("DELETE FROM studentprofile WHERE studentId = $studentId") or die(mysql_error());

// redirect user after delete is successful
header("Location:database.php");

}
else {
// redirect user after delete is successful
	echo "zero";
//header("Location: index.php");

}

?>