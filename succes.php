<?php include('database.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			font-size: 120%;
		}

		.content{
			width: 30%;
			height: auto;
			vertical-align: middle;
			margin: 30px auto;
			padding: 20px;
			border: 1px solid #b0c4de;
			background: #fff;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="content">
		<?php if(isset($_SESSION['name']) && isset($_SESSION['room'])): ?>
			<h1><?php echo $_SESSION['name']; ?>, you have successfully registered!!!</h1>
			<p>Your room is <span style="text-transform: uppercase;"><?php echo $_SESSION['room']; ?></span></p>
		<?php endif ?>
	</div>
</body>
</html>