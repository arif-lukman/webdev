<?php
	include "/controller/koneksi.php";
	include "lib/library.php";
	include "/controller/check_session.php";
	
	//parameter diambil sini
	$NIK = $_GET["NIK"];

	//ambil semua detail dengan id diatas
	$query = "SELECT Status, Kelas_Upah, Golongan, Lokasi FROM datalengkap WHERE NIK='$NIK'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
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
 <form action="step2action.php?NIK=<?php echo $NIK;?>" method="post">
				<h1>Status - Lokasi</h1>
				<hr>
				<div class="well well-lg">
				
				<div class="form-group">
					<tr><td><strong>Status</strong></td><td> :
					<br>
					<input type="radio" name='Status' id='Status' value="Kontrak" <?php echo checkString($data['Status'],"Kontrak");?>>Kontrak<br>
					<input type="radio" name='Status' id='Status' value="Paruh Waktu" <?php echo checkString($data['Status'],"Paruh Waktu");?>>Paruh Waktu<br>
					<input type="radio" name='Status' id='Status' value="Tetap" <?php echo checkString($data['Status'],"Tetap");?>>Tetap</td></tr>
				</div>
				<?php
					echo createInputField("text", "Kelas Upah:", "Kelas_Upah", "Kelas_Upah", $data["Kelas_Upah"], "col-xs-6", false, "");
				?>
				<?php
					echo createInputField("text", "Golongan:", "Golongan", "Golongan", $data["Golongan"], "col-xs-6", false, "");
				?>
				<?php
					echo createInputField("text", "Lokasi:", "Lokasi", "Lokasi", $data["Lokasi"], "col-xs-6", false, "");
				?>'
				</div>
				
<br><br><br><br><br><br><br><br><br><br><br><br><br>				
<center><a href="operation.php"><img src="../assets/images/back.png" height="30"></img></a>
<button type="submit" class="btn btn-primary">Save</button></center>
<hr>

  
			</form>
</div>
</div>
</div>
</div>
</body>
</html>