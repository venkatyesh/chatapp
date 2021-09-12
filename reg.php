<?php
	session_start();
	if(isset($_SESSION["loguser"]))
	{

		header("Location:home.php");
		die();
	}
?>
<html>
	<head>
		<title> register  page </title>
	</head>
	<body>
	 	<form action="register_action.php" method="post">
	 	<input type="text" name="Email" placeholder="Email">
	 	<br>
		<input type="password" name="Password" placeholder="password">
		<br>
		<button tyep="submit">
			Submit
		</button> 
	 	</form>
	</body>	
</html>