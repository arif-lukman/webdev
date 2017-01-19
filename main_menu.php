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
		<title>BAAAA</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<h2>DATABASE SOT SPRL</h2>
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
			</table>
			<a href="sotsprl.php">Add</a><br>
			<a href="admin.php">Logout</a>
		</div>
	</body>
</html>