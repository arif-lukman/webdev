<?php
	include "koneksi.php";
	//just a counter, a normal counter
	$count = 1;
	//query buat ngambil semua isi tabel
	$query = "SELECT * FROM news";
	//hasil query
	$result = mysql_query($query);

	//fungsi nampilin cuplikan konten
	function cutContent($string){
		$enterPos = strpos($string, "\n");
		if(strlen($string) > 100){
			$end = " . . .";
			if($enterPos <= 100){
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
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SPR Langgak</title>

		<!--CSS overriding-->
		<style type="text/css">
			ul.main{
			    list-style-type: none;
				position: fixed;
				top: 0;
				left: 0;
			    margin: 0;
			    padding: 0;
				overflow: auto;
			}
			li{
				margin: 10px;
			}
			.bold{
				font-weight: bold;
			}
			div.bold{
				margin: 0;
				padding: 0;
				border: 0;
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
		<br>
		<ul class="main">
			<li><a href="add.php" data-toggle="tooltip" data-placement="right" title="Add News"><img src="../assets/images/icons/add.png" height="64" width="64"></a></li>
			<li><a href="index.php" data-toggle="tooltip" data-placement="right" title="Logout"><img src="../assets/images/icons/logout.png" height="64" width="64"></a></li>
		</ul>
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
									echo "<td class='bold'>" . $count . "</td>";
									//kolom 2 tampilin judul dan isi
									echo "<td>";
									echo "<div class='bold'>";
									echo $field['title'];
									echo "</div>";
									echo cutContent($field['content']) . "</td>";
									//kolom 3 tampilin tombol edit
									echo "<td><a href='edit.php?id=$field[id]' data-toggle='tooltip' data-placement='bottom' title='Edit News'><img src='../assets/images/icons/edit.png' height='32' width='32'></a></td>";
									//kolom 4 tampilin tombol hapus
									echo "<td><a href='delete.php?id=$field[id]' data-toggle='tooltip' data-placement='bottom' title='Delete News'><img src='../assets/images/icons/delete.png' height='32' width='32'></a></td>";
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
</html>