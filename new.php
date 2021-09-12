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
	<title> web </title>
</head>
<body>
	<style>
		body
		{
			background-color: grey;
			font-size: 15;
			text-align: center;
		}
	</style>
		<form action="login_action.php" method="post">
				<div style="background:green;color: white;margin: auto;margin-top:center;height: 30%;width: 40%;padding: 30px;border-radius:30px;"> 
			<h1> WELCOME TO NCHATS </h1>
			<div>
				<input type="text" name="Email" style="padding:8px" placeholder="Email">
			</div>
			<div>	
				<input type="password" name="rp" style="padding: 8px" placeholder="password">
			</div>
			<?php
				if(isset($_GET["error"])){
					echo "<div><span style=\"color: red;\">" . $_GET['error'] . "</span></div>";
				}
			?>
			<br>
			<div>
				<button style="background: red;color: white;">
					login
				</button>
			</div>
			<div>
				<a href="reg.php"> Dont have account yet?signup</a> 
			</div>

		</div>
		</form>
		
</body>
</html>