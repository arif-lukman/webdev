<?php
	include "koneksiDB.php";
	include "lib/library.php";
	include "check_session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPR Langgak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Data Perusahaan</h1>      
  </div>
</div>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th><a href="dp_partnerk3s.php">Step 2. Partner K3S</a></th>
		<th><a href="dp_alamatkantor.php">Step 3. Alamat Kantor (Office Address)</a></th>
      </tr>
    </thead>
    <tbody>
    <tr>
		<th><a href="dp_susunanpengurus.php">Step 4 Susunan Pengurus / Struktur Organisasi (BOC,BOD)</a></th>
		<th><a href="dp_daftarpemilik.php">Step 5 Daftar Pemilik (Shareholders)</a></th>
    </tr>
    <tr>
		<th><a href="dp_dokumenadministrasi.php">Step 6 Dokumen Administrasi (Administration Document)</a></th>	  
		<th><a href="dp_suratkeagenan.php">Step 7 Surat Keagenan / Dealer / Distributor (Agency / Distributor Appointmen Letter)</a></th>
    </tr>
    <tr>
		<th><a href="dp_daftarrekeningbank.php">Step 8 Daftar Rekening Bank (Bank Account)</a></th>
		<th><a href="dp_perusahaaninduk.php">Step 9 Perusahaan Induk dan Rekanan (Holding Company and Partner)</a></th>
	</tr>
	  <tr>
		<th><a href="dp_pengalamanperusahaan.php">Step 10 Pengalaman Perusahaan (Company Experience)</a></th>
		<th><a href="dp_perusahaanpembuatbarang.php">Step 11 Perusahaan Pembuat Barang (Good Manufacturer)</a></th>
	</tr>
	<tr>
		<th><a href="dp_klasifikasiperusahaan.php">Step 12 Klasifikasi Perusahaan (Company Classification)</a></th>
		<th><a href="dp_keadaanperusahaan.php">Step 13 Keadaan Perusahaan (Company Subject)</a></th>		
	</tr>
	<tr>
		<th><a href="dp_suratdandokumenpelengkap.php">Step 14 Surat dan Dokumen Pelengkap (Supporting Document)</a></th>
		<th><a href="dp_historyskt.php">History SKT</a></th>
	</tr>
	
	</tbody>
  </table>
  <li><a href="../vendor.php">Home</a></li>
</div>

</body>
</html>
