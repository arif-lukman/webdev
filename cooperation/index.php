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
	<div class="alert alert-info">
			<form action="signup.php" method="post" class="col-sm-8">
			<p>if you dont have any account, then <input type="submit" class="btn btn-primary" value="SIGN-UP"></input></p>
			</form>
			<br><br>
			</div>
	
	<br><br><br>
				<div class="col-sm-12 text-center motto">
				<img src="../assets/images/cooperation/bannerlogin.png">
			</div>

		<!--form login-->
		<div class="container">
			<hr>
			<div class="col-sm-2"></div>
			<form action="cek_login_p.php" method="post" class="col-sm-8">
				<h2>Login BPMS</h2>
				<hr>
				<div class="form-group">
					<label for="name">Username:</label>
					<input type="text" class="form-control" id="name" name="username">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password">
				</div>
				<br>
				
				<center><input type="submit" class="btn btn-primary" value="LOGIN"></input></center>
			</form>
			
			
		</div>
		<div class="container">
		
		<br>
					<center><a href="../index.php"><img src="../assets/images/cooperation/back.png" width="100"></a></center>
		</div>
		<div class="panel-footer"><center><strong>Gunakan username dan password yang telah diberikan pada Anda.<br></strong>
Tingkat akses terhadap aplikasi ini akan ditentukan oleh username Anda</center></div>
	</body>
	
</html>
