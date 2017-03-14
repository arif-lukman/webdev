<?php
	include "koneksiDB.php";
	include "../libraryproc.php";

	session_start();
	$id = $_GET["uid"];

	//query buat ngambil nama field
	$colQuery = "SHOW columns FROM surat_keagenan WHERE FIELD = 'No' or FIELD = 'Distributor' or FIELD = 'Document_Number' or FIELD = 'Issued_By' or FIELD = 'Issued_Date' or FIELD = 'Expired_Date' or FIELD = 'Attachment' ";

	$colExec = mysql_query($colQuery);
	
	//ambil isi field
	$conQuery = "SELECT data.No, data.Distributor, data.Document_Number, data.Issued_By, data.Issued_Date, data.Expired_Date, attachment.filename, attachment.id FROM tbl_user as user, surat_keagenan as data, data_surat_keagenan as conn, attachment_surat_keagenan as attachment WHERE user.id = conn.id_user and data.No = conn.id_surat_keagenan and data.Attachment = attachment.id and user.id = '$id'";

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
				<h1>Surat Keagenan / Dealer / Distributor (Agency / Distributor Appointment Letter))</h1>
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
									echo "<td><a href=\"download.php?id=$conNames[id]&tn=attachment_surat_keagenan\">$conNames[$item]</a></td>";
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