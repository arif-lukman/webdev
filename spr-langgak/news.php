<?php
	include "koneksi.php";
	//ambil id news
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$list = false;
	}
	else{
		$list = true;
	}

	//fungsi nampilin cuplikan konten
	function cutContent($string){
		$enterPos = strpos($string, "\n");
		if(strlen($string) > 300){
			$end = " . . .";
			if($enterPos <= 300){
				$cutContent = substr($string, 0, $enterPos) . $end;
			}
			else{
				$cutContent = substr($string, 0, 100) . $end;
			}
		}
		else{
			$cutContent = $string;
		}
		return $cutContent;
	}

	function getDay($strDate){
		$timestamp = strtotime($strDate);
		$day = date('l, d F Y', $timestamp);
		return $day;
	}
?>
<!doctype html>
<html>
	<head>
		<title>SPR Langgak</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		
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
				<left><a href="index.php"><img src="../assets/images/logospr.png" height="100"></left></a>
			</div>
			<div class="col-sm-2">
				<center><img src="../assets/images/riau.jpg" width="100" height="100"></center>
			</div>
			<div class="col-sm-12 text-center motto">
				A Center of Riau Energy
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
					<li class="active"><a href="news.php">News & Events</a></li>
					<li><a href="procurement.php">Procurement</a></li>
					<li><a href="production.php">Production</a></li>
					<li><a href="reports.php">Reports</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>
			</nav>
			<?php
				if($list){
					//sql command yea *dab
					$sql = "SELECT * FROM news";
					$result = mysql_query($sql);
					while ($data=mysql_fetch_array($result)) {
						echo "<a href='news.php?id=$data[id]'>" . $data['title'] . "</a><br>";
						echo getDay($data['date']) . " " . $data['time'] . "<br><hr>";
					}
				}
				else{
					$sql = "SELECT * FROM news WHERE id = '$id'";
					$result = mysql_query($sql);
					$data = mysql_fetch_array($result);
					echo $data['title'] . "<hr>";
					echo $data['content'] . "<hr>";
					echo getDay($data['date']) . " " . $data['time'];
				}
			?>
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
			 	<img src="../assets/images/logohd/duaduanya.png" width="150" height="150" class="img-responsive center-block">
			</div>
		</div>
	</body>
</html>