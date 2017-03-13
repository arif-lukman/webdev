<?php
	include "koneksiDB.php";
	include "../libraryproc.php";

	session_start();
	$id = $_SESSION["uid"];

	//query buat ngambil nama field
	$colQuery = "SHOW columns FROM susunan_pengurus WHERE FIELD = 'No' or FIELD = 'Management_Type' or FIELD = 'Position' or FIELD = 'Name' or FIELD = 'Address' ";

	$colExec = mysql_query($colQuery);
	
	//ambil isi field
	$conQuery = "SELECT No, Management_Type, Position, Name, Address FROM susunan_pengurus ORDER BY No ASC";

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
</head>
<body>
<div class="container-fluid" style="height:1000px">
				<h1>Susunan Pengurus / Struktur Organisasi (BOC,BOD)</h1>
		<table class="table table-bordered">
				<!--nama field-->
				<thead>
					<tr style="font-size:9px">
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
						}
					?>
				</tbody>
			</table><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>				
<center><a href="dataperusahaan.php"><img src="../../assets/images/icons/back.png" height="30"></img></a>
<button type="submit" class="btn btn-primary">Save</button></center>
<hr>
</div>

</div>
</div>
</body>
</html>