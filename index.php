<?php
	//include('server.php');
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Questions</h2>
	</div>
	<div class="content">



		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>

		<form method="post" action="submitted.php">

		

		<div class="input-group">
			<label>Question-1</label>
			<input type="text" name="q_one" >
		</div>
		<div class="input-group">
			<label>Question-2</label>
			<input type="text" name="q_two" >
		</div>
		<div class="input-group">
			<label>Question-3</label>
			<input type="text" name="q_three" >
		</div>
		<div class="input-group">
			<label>Question-4</label>
			<input type="text" name="q_four" >
		</div>
		<div class="input-group">
			<label>Question-5</label>
			<input type="text" name="q_five" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="ans_user">Submit</button>
		</div>
	
	</form>
	</div>
		
</body>
</html>