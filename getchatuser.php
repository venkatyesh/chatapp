<?php
session_start();
	if(!isset($_GET['to']))
	{
		header("Location:home.php");
		die();
	}
	include("connection.php");
	$toid=$_GET['to'];
	$sql="select * from users where id='$toid'";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		header("Location:home.php");
		die();
	}
	$touser=mysqli_fetch_assoc($result);
	$loguserid=$_SESSION["loguser"];
	$sql="select * from messages where (senderid='$loguserid' and receiverid='$toid') or (receiverid='$loguserid' and senderid='$toid')";
	$messages=mysqli_query($con,$sql);
	
?>
