<?php
	include "koneksiDB.php";
	include "check_session.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BPMS</title>
		<!--override css-->
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<style type="text/css">
			body {
				background: url(../assets/images/cooperation/background2.png) no-repeat center center fixed;
			}
			h2{ color:#000000; font-weight: bold; 
				position: fixed;
				center: 1;
				top: 0;
			}
			a.left {
				color:#000000; font-weight: bold; 
				position: fixed;
				bottom: 0;
				left: 0;
				width: 200px;
				border: 3px solid #000000;
				background-color: #ff0000;
				color: white;
			}
			a.right {
				color:#000000; font-weight: bold; 
				position: fixed;
				bottom: 0;
				right: 0;
				width: 200px;
				border: 3px solid #000000;
				background-color: #ff0000;
				color: white;
			}
			a.center {
				color:#000000; font-weight: bold; 
				position: fixed;
				top: 0;
				right: 0;
				width: 200px;
				border: 3px solid #000000;
				background-color: #ff0000;
				color: white;
			}
			a.home {
				position: fixed;
				bottom: 0;
				right: 0;
				color: white;
			}
		</style>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">

			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="step1.php">Step 1</a></li>
				<li><a href="step2.php">Step 2</a></li>
				<li><a href="step3.php">Step 3</a></li>
				<li><a href="step4.php">Step 4</a></li>
				<li><a href="step5.php">Step 5</a></li>
				<li><a href="step6.php">Step 6</a></li>
				<li><a href="step7.php">Step 7</a></li>
				<li><a href="step8.php">Step 8</a></li>
				<li><a href="step9.php">Step 9</a></li>
				<li><a href="step10.php">Step 10</a></li>
				<li><a href="step11.php">Step 11</a></li>
				<li><a href="step12.php">Step 12</a></li>
				<li><a href="step13.php">Step 13</a></li>
				<li><a href="step14.php">Step 14</a></li>
				<li><a href="step15.php">Step 15</a></li>
			</ul>
		</div>
	</nav>

	<div class="col-sm-2">
		<div class="list-group">
			<a href="step1.php" class="list-group-item">Menuju ke Step 1</a>
			<a href="dataperusahaan.php" class="list-group-item">Data Perusahaan</a>
			<a href="formubahpassword.php" class="list-group-item">Ganti Password</a>
			<a href="download.php" class="list-group-item">Bantuan</a>
			<a href="logout.php" class="list-group-item">Logout</a>
		</div>
	</div>
	</body>
</html>