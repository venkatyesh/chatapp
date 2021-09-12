<?php
include("connection.php");
$email=$_POST["Email"];
$password=$_POST["Password"];
$sql="INSERT INTO `users` (`id`, `Email`, `Password`) VALUES (NULL, '$email', '$password');";
$result=mysqli_query($con,$sql);
echo "registration successful";
?>
<a href="new.php">back to login </a>