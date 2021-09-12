<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "profile";
 $con = mysqli_connect($host,$user,$password,$db_name);
 if(mysqli_connect_errno())
 	{
 		die("failed to connect with mysql".mysql_connect_errno());
 
 	}
 ?>