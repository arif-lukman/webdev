<?php
	include "koneksiDB.php";
	include "../libraryproc.php";

	session_start();
	$id = $_SESSION["uid"];

	//query buat ngambil nama field
	$colQuery = "SHOW columns FROM alamat_kantor WHERE FIELD = 'No' or FIELD = 'Office_Type' or FIELD = 'Office_Address' or FIELD = 'Office_Phone_Number' or FIELD = 'Office_Email' ";

	$colExec = mysql_query($colQuery);
	
	//ambil isi field
	$conQuery = "SELECT No, Office_Type, Office_Address, Office_Phone_Number, Office_Email FROM alamat_kantor ORDER BY No ASC";

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
  <title>Status - Lokasi</title>
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

<div class="container">
  <div class="row">
    <nav class="col-sm-3">
<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
	<li class="active"><a href="step2.php?NIK=<?php echo $NIK;?>">Alamat Kantor (Office Address)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Susunan Pengurus / Struktur Organisasi (BOC,BOD)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Daftar Pemilik (Shareholders)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Dokumen Administrasi (Administration Document)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Surat Keagenan / Dealer / Distributor (Agency / Distributor Appointmen Letter)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Daftar Rekening Bank (Bank Account)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Perusahaan Induk dan Rekanan (Holding Company and Partner)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Pengalaman Perusahaan (Company Experience)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Perusahaan Pembuat Barang (Good Manufacturer)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Klasifikasi Perusahaan (Company Classification)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Keadaan Perusahaan (Company Subject)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">Surat dan Dokumen Pelengkap (Supporting Document)</a></li>
	<li><a href="step1.php?NIK=<?php echo $NIK;?>">History Dokumen Pelengkap (Supporting Document)</a></li>
	<li><a href="main_menu.php">Home</a></li>
  </ul>
</nav>


<div class="col-sm-9">
				<h1>Alamat KAntor (Company Address)</h1>
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
							echo "
							<td><a href=\"../editstep3.php?No=$conNames[No]\">edit</a></td>
							<td><a href=\"delete.php?No=$conNames[No]\" onclick='return hapusBarang(\"Seluruh isi data field ini akan dihapus. Anda Yakin? \")'>delete</a></td> </tr>
							";
							echo "</tr>";
						}
					?>
				</tbody>
			</table><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>				
<center><a href="../vendor.php"><img src="../../assets/images/icons/back.png" height="30"></img></a>
<button type="submit" class="btn btn-primary">Save</button></center>
<hr>
</div>
</div>
</div>
</div>
</body>
</html>