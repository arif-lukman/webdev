<?php
	if(isset($_SESSION)){
		unset($_SESSION['uid']);
		session_unset();
		session_destroy();
	}
?>
<!doctype html>
<html>
	<head>
		<!--Override css-->
		<style>
			#map {
				height: 400px;
				width: 100%;
			}
			.motto{
				font-size: 30px;
				font-style: italic;
			}
			.grad{
				background-color: #FFDF00;
				border-color: transparent;
			}
			.white{
				background: white;
			}
			a{
				color: white;
			}
			.container{
				max-width: 805px;
				background: white;
			}
			body { 
			background: url(webbg.png) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			}
			.navbar-default {
				background-image: -webkit-linear-gradient(top, #ffffff 0%, #D4AF37 100%);
				background-image: linear-gradient(to bottom, #ffffff 0%, #D4AF37 100%);
				background-repeat: repeat-x;
				border-color: #D4AF37 !important;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdfdfdf', GradientType=0);
				color: white !important;
			}
			.navbar-nav>.active>a, .navbar-nav>.active>a:hover, .navbar-nav>.active>a:focus {
			  	background-color:#D4AF37 !important;
			}
			.navbar-default .navbar-nav > .open > a, 
			.navbar-default .navbar-nav > .open > a:hover, 
			.navbar-default .navbar-nav > .open > a:focus {
			  	background-color:#D4AF37 !important;
			}
			.navbar-default .navbar-nav > li > a:hover,
			.navbar-default .navbar-nav > li > a:focus {
			    text-decoration: underline;
			}
			.navbar-default .navbar-nav > li > a {
			    color: #2b2b2b !important;
			}
			.navbar-default .navbar-nav .open .dropdown-menu > li > a {
		        color: #2b2b2b !important;
		    }
		    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
		    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
		    	text-decoration: underline;
		    }
		    .footer{
		    	background-image: -webkit-linear-gradient(top, white 70%, #9b9b9b 100%);
				background-image: linear-gradient(to bottom, white 70%, #9b9b9b 100%);
				background-repeat: repeat-x;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdfdfdf', GradientType=0);
		    }
		    .submit{
		    	float: right;
		    }
		</style>
		<title>SPR Langgak</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="col-sm-10">
				<left><img src="logospr.png" height="100"></left>
			</div>
			<div class="col-sm-2">
				<center><img src="riau.jpg" width="100" height="100"></center>
			</div>
			<div class="col-sm-12 text-center motto">
				Providing world's energy. Today
			</div>
		</div>
		<div class="container">
			<hr>
			<div class="col-sm-2">
				
			</div>
			<form action="cek_login.php" method="post" class="col-sm-8">
				<h2>Login Admin</h2>
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
				<br>
				<br><br>
				<br><br>
				<br><br>
				<br>
				<hr>
			</form>
			<hr>
		</div>
	</body>

</html>