<?php
	//Hapus session
	if(isset($_SESSION)){
		unset($_SESSION['uid']);
		session_unset();
		session_destroy();
	}
?>

<!doctype html>
<html>
	<head>
		<title>SPR Langgak</title>

		<!--override css-->
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<!--header-->
		<div class="container">
			<div class="col-sm-10">
				<left><a href="../index.php"><img src="../assets/images/logospr.png" height="100"></left></a>
			</div>
			<div class="col-sm-2">
				<center><img src="../assets/images/riau.jpg" width="100" height="100"></center>
			</div>
				<div class="col-sm-12 text-center motto">
				Please Login if you are really Administrator this Website
			</div>
		</div>

		<!--form login-->
		<div class="container">
			<hr>
			<div class="col-sm-2"></div>
			<form action="cek_login.php" method="post" class="col-sm-8">
				<h2>Login Admin SOT</h2>
				<hr>
				<div class="form-group">
					<label for="name">Username:</label>
					<input type="text" class="form-control" id="name" name="username">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password">
				</div>
				<input class="submit" type="submit" value="LOGIN">
				<br><br><br><br><br><br><br><br>
				<hr>
			</form>
			<hr>
		</div>
	</body>
</html>