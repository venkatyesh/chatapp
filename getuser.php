<?php
include("connection.php");
$loguser=$_SESSION["loguser"];
$sql="select * from users where id!='$loguser'";
$userlist=mysqli_query($con,$sql);
?>
