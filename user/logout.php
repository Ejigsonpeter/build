<?php

include 'connect.php';
session_start();
if (isset($_SESSION['login'])){
	unset($_SESSION['login']);
	$_SESSION['login']=NULL;
	session_destroy();
	header('location:login.php');
}

?>