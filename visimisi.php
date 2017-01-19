<!DOCTYPE html>
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
				max-width: 851.57px;
				background: white;
			}
			.carousel-inner > .item > img,
		  	.carousel-inner > .item > a > img {
		    	width: 70%;
		    	margin: auto;
		  	}
		  	body { 
			font-family: Verdana !important;
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
			 /* Note: Try to remove the following lines to see the effect of CSS positioning */

			  body {
      position: relative; 
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

<body data-spy="scroll" data-target=".navbar" data-offset="50">

		<div class="container">
			<div class="col-sm-10">
				<left><img src="logospr.png" height="100"></left>
			</div>
			<div class="col-sm-2">
				<center><img src="riau.jpg" width="100" height="100"></center>
			</div>
			<div class="col-sm-12 text-center motto">
				A Center of Riau Energy
			</div>
		</div>
		<div class="container">
			<nav class="navbar navbar-default">
				<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">About SPR Langgak
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php">Profile</a></li>
						<li><a href="executivesummary.php">Executive Summary</a></li>
						<li class="active"><a href="visimisi.php">Vision & Mission</a></li>
						<li><a href="langgakfield.php">Langgak Field</a></li>
						<li><a href="msgdir.php">Message From Director</a></li>
						<li><a href="obmanager.php">Onboard Manager</a></li>
					</ul>
				</li>
				<li><a href="news.php">News & Events</a></li>
				<li><a href="procurement.php">Procurement</a></li>
				<li><a href="production.php">Production</a></li>
				<li><a href="reports.php">Reports</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				</ul>
			</nav>

			
    <div class="container">
		  <div class="row">
		    <div class="col-md-6">
		      <div class="thumbnail">
		        <a href="visionandmission/TOP TANK.jpg" target="_blank">
		          <img src="visionandmission/TOP TANK.jpg" alt="top tank" style="width:100%">
		        </a>
		      </div>
		    </div>
		  
		  
		    <div class="col-md-6">
		      <div class="thumbnail">
		        <a href="visionandmission/IN BETWEEN.jpg" target="_blank">
		          <img src="visionandmission/IN BETWEEN.jpg" alt="in between" style="width:100%">
		        </a>
		      </div>
		    </div>

		  </div>
		</div>

<div class="container">
    <h2>VISION and MISSION</h2> 
</div>
		
<div class="container">
  <h4>Vision</h4>
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Look</button>
  <div id="demo" class="collapse">
  Menjadi perusahaan minyak dan gas bumi kelas dunia yang disegani di tingkat nasional
  </div>
  
<hr>
  <h4>Mission</h4>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demi">Look</button>
  <div id="demi" class="collapse">
  Mengoperasikan kontrak kerjasama Lapangan Produksi Minyak Blok Langgak secara optimal dan profesional sesuai dengan ketetapan tahapan target produksi demi kepentingan masyarakat Riau dan Nasional
</div>
  </div>

		<div class="container footer">
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
			 	<img src="logohd/duaduanya.png" width="150" height="150" class="img-responsive center-block">
			</div>

</body>
</html>

