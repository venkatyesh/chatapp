<html>
	<body>
	<div style="text-align: center;color: blueviolet;font-size:150%;">	
<?php
	include("connection.php");
	$email = stripcslashes($_POST["Email"]);
	$pass = stripcslashes($_POST["rp"]);
	$email=mysqli_real_escape_string($con,$email);
	$pass=mysqli_real_escape_string($con,$pass);
	$sql="select * from users where Email='$email' and Password='$pass'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result); 
	if($count)
	{
		session_start();
		$user=mysqli_fetch_assoc($result);	
		$_SESSION["loguser"]=$user["id"];
		header("Location: home.php");
	}
	else
	{
		header("Location: new.php?error=Invalid Credentials!");
	}
?>
	</body>
</html>