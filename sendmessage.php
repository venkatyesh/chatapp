<?php
include("connection.php");
	session_start();
if(!isset($_SESSION['loguser']) || !isset($_POST['to']) || !isset($_POST["message"])) 
{
	header("Location: logout.php");
	die();
}
	$loguserid=$_SESSION['loguser'];
	$toid=$_POST['to'];
	$message=$_POST["message"];
	$sql="INSERT INTO `messages` (`id`, `senderid`, `receiverid`, `message`) VALUES (NULL, '$loguserid', '$toid', '$message');";
	$result=mysqli_query($con,$sql);
	if ($result) {
		header("Location: chatpage.php?to=$toid");
	}
?>