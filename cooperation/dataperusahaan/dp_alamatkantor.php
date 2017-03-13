<?php
	
	include "../lib/library.php";
	include "check_session.php";
	
	$conn = createConnection("localhost", "root", "", "_bpms_vendor");
	
	//data untuk select option negara
	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM alamat_kantor",$conn);

	//ambil isi field
	$fieldValues = getResults("SELECT * FROM alamat_kantor ORDER BY No ASC",$conn);

	//push isi field ke array
	$allValues = pushArray($fieldValues);
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
				<?php
				generateTable($fieldNames, $fieldValues, $allValues, "dp_alamatkantor.php", "false");
				?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>				
<center><a href="operation.php"><img src="../assets/images/back.png" height="30"></img></a>
<button type="submit" class="btn btn-primary">Save</button></center>
<hr>
</div>
</div>
</div>
</div>
</body>
</html>