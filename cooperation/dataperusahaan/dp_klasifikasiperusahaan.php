<?php
	include "koneksiDB.php";
	include "../libraryproc.php";

	session_start();
	$id = $_SESSION["uid"];

	//query buat ngambil nama field
	$colQuery = "SHOW columns FROM klasifikasi_perusahaan WHERE FIELD = 'No' or FIELD = 'Classification' or FIELD = 'Description' or FIELD = 'Attachment'";

	$colExec = mysql_query($colQuery);
	
	//ambil isi field
	$conQuery = "SELECT data.No, data.Classification , data.Description, attachment.filename, attachment.id FROM tbl_user as user, klasifikasi_perusahaan as data, data_klasifikasi_perusahaan as conn, attachment_klasifikasi_perusahaan as attachment WHERE user.id = conn.id_user and data.No = conn.id_klasifikasi_perusahaan and data.Attachment = attachment.id and user.id = '$id'";

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
				<h1>Klasifikasi Perusahaan (Company Classification)</h1>
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
								if($item == "filename")
									echo "<td><a href=\"download.php?id=$conNames[id]&tn=attachment_klasifikasi_perusahaan\">$conNames[$item]</a></td>";
								else
								if($item != "id")
									echo "<td>$conNames[$item]</td>";
							}
						}
					?>
				</tbody>
			</table><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>				
<center><a href="dataperusahaan.php?uid=<?php echo $id;?>"><img src="../../assets/images/icons/back.png" height="30"></img></a>
<button type="submit" class="btn btn-primary">Save</button></center>
<hr>
</div>

</div>
</div>
</body>
</html>