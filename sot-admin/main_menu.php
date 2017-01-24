<?php
	include "koneksi.php";
	include "check_session.php";

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
		<title>SPR Langgak</title>

		<!--override css-->
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

		<style type="text/css">
			body {
				background: url(../assets/images/administratoronly3.png) no-repeat center center fixed;
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
		</style>

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
				<center><a class="left" href="input.php">Add</a> </center>
				<center><a class="right" href="logout.php">Logout</a></center>
				<center><a class="center" href="download.php">Download Table</a></center>
			</div>
		</div>
	</body>
</html>