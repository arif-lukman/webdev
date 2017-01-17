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
			<center><img src="logospr.png"></center>
			<div class="col-sm-12 text-center motto">
				Providing world's energy. Today
			</div>
		</div>
		<div class="container">
			<nav class="navbar navbar-default">
				<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">About SPR Langgak
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php">Profile</a></li>
						<li><a href="executivesummary.php">Executive Summary</a></li>
						<li><a href="visimisi.php">Vision & Mission</a></li>
						<li><a href="langgakfield.php">Langgak Field</a></li>
						<li><a href="msgdir.php">Message From Director</a></li>
						<li><a href="obmanager.php">Onboard Manager</a></li>
					</ul>
				</li>
				<li><a href="news.php">News & Events</a></li>
				<li><a href="procurement.php">Procurement</a></li>
				<li><a href="production.php">Production</a></li>
				<li><a href="reports.php">Reports</a></li>
				<li class="active"><a href="contactus.php">Contact Us</a></li>
				</ul>
			</nav>

			<div class="col-sm-2">
				
			</div>
			<form class="col-sm-8">
				<h2>Contact Us</h2>
				<hr>
				<div class="form-group">
					<label for="title">Title:</label>
					<br>
					<label class="radio-inline"><input type="radio" name="optradio" id="title">Mr</label>
					<label class="radio-inline"><input type="radio" name="optradio" id="title">Mrs</label>
					<label class="radio-inline"><input type="radio" name="optradio" id="title">Ms</label>
				</div>
				<div class="form-group">
			  		<label for="name">Name:</label>
				  	<input type="text" class="form-control" id="name">
				</div>
				<div class="form-group">
				  	<label for="city">City:</label>
				  	<input type="text" class="form-control" id="city">
				</div>
				<div class="form-group">
				  	<label for="email">Email:</label>
				  	<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				  <label for="sel1">Send to:</label>
				  <select class="form-control" id="sel1">
				    <option>Head Office</option>
				    <option>Langgak Site</option>
				  </select>
				</div>
				<div class="form-group">
				  	<label for="comment">Message:</label>
				  	<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
				<div class="form-group">
				  	<label for="phone">Phone:</label>
				  	<input type="text" class="form-control" id="phone">
				</div>
				<center><input type="submit"></center>
				<hr>
			</form>
		</div>
		<div class="container">
			<div class="col-sm-12 text-center">
				<h3>Our Office</h3>
				PT. SPR LANGGAK<br>
				<hr><br>
			</div>

			<div class="col-sm-6 text-center">
				<span class="glyphicon glyphicon-map-marker"></span><br>
				Head Office :<br>
				AD Premier Lt. 8<br>
				Jl. TB Simatupang No.5<br>
				Jakarta 12550<br>
			</div>

			<div class="col-sm-6 text-center">
				<span class="glyphicon glyphicon-map-marker"></span><br>
				Langgak Site :<br>
				Desa Langgak,<br>
				Kabupaten Rokan Hulu,<br>
				Riau 28559<br>
			</div>

			<div class="col-sm-12 text-center">
				<br>
				<br>
				<span class="glyphicon glyphicon-phone-alt"></span> 021-22708945<br>
				<span class="glyphicon glyphicon-print"></span> 021-22708946
				<br>
				<br>
			</div>
		</div>
	</body>

</html>