<?php
	include "koneksi.php";

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM sot_sprl";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT * FROM sot_sprl";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}
?>
<!DOCTYPE html>
<html>
<head>
<!--Override css-->
		<style type="text/css">
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
			background: url(administratoronly3.png) no-repeat center center fixed; 
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
		

tr,td,th{
		border-style: solid;
		border-color: black !important;
}

a.left { color:#000000; font-weight: bold; 
    position: fixed;
    bottom: 0;
    left: 0;
    width: 200px;
    border: 3px solid #000000;
	    background-color: #ff0000;
    color: white;
}
a.right { color:#000000; font-weight: bold; 
    position: fixed;
    bottom: 0;
    right: 0;
    width: 200px;
    border: 3px solid #000000;
	    background-color: #ff0000;
    color: white;
}

h2{ color:#000000; font-weight: bold; 
    position: fixed;
    center: 1;
	top: 0;
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
		<div class="container-fluid">
			<h2 class="container-fluid">DATABASE SOT SPRL</h2>
			<br><br><br><br>
			<table class="table table-bordered">
				<!--nama field-->
				<thead>
					<tr>
						<?php
							while ($colNames = mysql_fetch_array($colExec)){
								echo "
									<th>$colNames[Field]</th>
								";
							}
						?>
					</tr>
				</thead>
				<tbody>
					<?php
						while($conNames = mysql_fetch_array($conExec)){
							echo "<tr>";
							foreach($all_prop as $item){
								echo "<td>$conNames[$item]</td>";
							}
							echo "
								<td><a href=\"edit.php?id=$conNames[ID]\">edit</a></td>
								<td><a href=\"delete.php?id=$conNames[ID]\">delete</td>
							";
							echo "</tr>";
						}
					?>
				</tbody>
			</table><br>
			<div class="container-fluid">
			<center><a class="left" href="sotsprl.php">Add</a> </center>
			<center><a class="right" href="admin.php">Logout</a></center>
			</div>
		</div>
	</body>
</html>