<?php
	session_start();
	unset($_SESSION["loguser"]);
	header("Location:new.php");
?>