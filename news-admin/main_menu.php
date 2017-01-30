<?php
	include "koneksi.php";
	//just a counter, a normal counter
	$count = 1;
	//query buat ngambil semua isi tabel
	$query = "SELECT * FROM news";
	//hasil query
	$result = mysql_query($query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SPR Langgak</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br>
		<div class="container">
			<div class="jumbotron">
				<h1>SPRL News</h1>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">News List</div>
				<div class="panel-body">
					<table class="table table-hover">
						<?php
							while ($field = mysql_fetch_array($result)) {
								echo "<tr>";
									//kolom 1 tampilin nomor
									echo "<td>" . $count . "</td>";
									//kolom 2 tampilin judul dan isi
									echo "<td>" . $field['title'] . "<br>" . $field['content'] . "</td>";
									//kolom 3 tampilin tombol edit
									echo "<td>edit</td>";
									//kolom 4 tampilin tombol hapus
									echo "<td>delete</td>";
									//tambah counter
									$count++;
								echo "</tr>";
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>>