<?php
session_start();
if(!isset($_SESSION['loguser']))
{
	header("Location: new.php");
	die();
}
include("getuser.php");
?>
<html>
	<body>
		<h1> chat user list </h1>
		<?php
			while($user=mysqli_fetch_assoc($userlist))
			{
				echo "<li> <a href='chatpage.php?to=". $user["id"] ."'>". $user["Email"]."</a></li>";
			}
		?>
		<a href="logout.php">logout</a>
	</body>
</html>