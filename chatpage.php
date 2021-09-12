<?php
	include("getchatuser.php");
?>
<html>
	<head>
		<style>
			#chatarea
			{
				border:1px solid #aaa;
				padding: 10px;
				height: 300px;
				overflow-y: auto;
			}
			#chatarea > div
			{
				background-color: #aaa;
				padding: 5px;
				margin: 5 0px;
				border-radius: 5px;
				color: blue;
			}
		</style>
		<title>	chatpage </title> 
	</head>
	<body>
		<h1> 	
			<?php
			echo $touser["Email"];
			?>
		</h1>
		<div id="chatarea">
			<?php
				while ($message=mysqli_fetch_assoc($messages)) {
					echo "<div> ". ($message["senderid"]==$loguserid ? "you" : $touser["Email"]) .":". $message["message"]." </div>";
				}
			?>
		</div>
		<form action="sendmessage.php" method="post">
			<div>
				<input type="hidden" name="to" value="<?php echo $toid;?>" />
				<textarea name="message" placeholder="Text message" rows="5"></textarea>
				<br>
				<button type="submit" style="background-color:blue;color:white">
					send
				</button>
				<br>
					<br>
					<a href="home.php">back to home page </a>
			</div>	
		</form>
	</body>	
</html>