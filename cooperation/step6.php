<!DOCTYPE html>
<html lang="en">
<head>
  <title>Step 6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Go to step
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="step1.php">Step 1 : Nama dan Tipe Perusahaan</a></li>
      <li><a href="step2.php">Step 2 : Partner K3S</a></li>
      <li><a href="step3.php">Step 3 : Alamat Kantor / Office Address</a></li>
	  <li><a href="step4.php">Step 4 : Susunan pengurus / Struktur organisasi</a></li>
	  <li><a href="step5.php">Step 5 : Daftar Pemilik / Shareholders</a></li>
	  <li><a href="step6.php">Step 6 : Dokumen Administrasi / Administration Document</a></li>
	  <li><a href="step7.php">Step 7 : Surat Keagenan / Dealer / Distributor</a></li>
	  <li><a href="step8.php">Step 8 : Daftar Rekening Bank Perusahaan / Office Bank Accounts</a></li>
	  <li><a href="step9.php">Step 9 : Perusahaan Induk, Grup Perusahaan, Rekanan, Konsorsium, Afiliasi dan Aliansi</a></li>
	  <li><a href="step10.php">Step 10 : Pengalaman Perusahaan / Company Experience</a></li>
	  <li><a href="step11.php">Step 11 : Perusahaan Pembuat Barang / Good Manufacturer</a></li>
	  <li><a href="step12.php">Step 12 : Klasifikasi Perusahaan / Company Classification</a></li>
	  <li><a href="step13.php">Step 13 : Keadaan Perusahaan / Company Subject</a></li>
	  <li><a href="step14.php">Step 14 : Surat dan Dokumen Pelengkap / Supporting Documents</a></li>
	  <li><a href="step15.php">Step 15 : Pengajuan / Submission</a></li>
    </ul>
  </div>
  
<div class="col-sm-2"></div>
			<form class="col-sm-8">
				<h2>Step 6</h2>
				<h3>Dokumen Administrasi (Administration Document)</h3>
				<hr>
					 <div class="well well-lg">

				<div class="form-group">
				  <label for="tipeperusahaan">Pilih Tipe Dokumen:</label>
				  <select class="form-control" id="tipeperusahaan">
				    <option>Akte Pendirian Perusahaan (AKT)</option>
				    <option>SK Mentri Kehakiman dan HAM (SK-MKH)</option>
					<option>Surat Ijin Usaha Perusahaan (SIUP)</option>
					<option>Tanda Daftar Perusahaan (TDP)</option>
					<option>Surat Keterangan Domisili Perusahaan (SKDP)</option>
					<option>Surat Ijin Gangguan (HO)</option>
					<option>Surat Ijin Tempat Usaha (SITU)</option>
					<option>Nomor Pokok Wajib Pajak (NPWP)</option>
					<option>Penetapan Perusahaan Kena Pajak</option>
					<option>Bukti Bayar Pajak Tahunan</option>
					<option>Neraca Audit</option>
					<option>Lain-lain</option>
				  </select>
				</div>
				
				<div class="form-group">
			  		<label for="name">Nomor Dokumen:</label>
				  	<input type="text" class="form-control" id="namaperusahaan">
				</div>
				
				<div class="form-group">
			  		<label for="name">Dikeluarkan Oleh:</label>
				  	<input type="text" class="form-control" id="namaperusahaan">
				</div>
				
				 <div class="col-xs-6">
					<label for="TGL">Tanggal Dikeluarkan:</label>
					<input type="date" class="form-control" id="usr" name="TGL">
					</div>
	
				<div class="col-xs-6">
					<label for="TGL">Tanggal Kadaluarsa:</label>
					<input type="date" class="form-control" id="usr" name="TGL">
					<br>	
					</div>
					
				<div class="col-xs-12">
					<label for="TGL">Deskripsi:</label>
					<input type="text" class="form-control" id="usr">
					<br>
					</div>
				
				<div class="form-group">
				<input type="file" name="pic" accept="image/*">
				<span class="label label-info">Format PDF max. 8Mb*</span>
				<br>
				</div>
				
				
<button type="button" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button>
<hr>
  <ul class="pager">
    <li><a href="step4.php">Previous Step</a></li>
    <li><a href="step6.php">Next Step</a></li>
  </ul>
  
			</form>
			<div class="well well-sm">Result (Table):</div>
		</div>
		<hr>
				

</body>
</html>		