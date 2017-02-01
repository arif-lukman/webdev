<!DOCTYPE html>
<html lang="en">
<head>
  <title>Step 8</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  a.home {
				position: fixed;
				top: 0;
				right: 0;
				width: 200px;
				color: white;
  }

  </style>
  
</head>

<body>
  <div class="dropdown">
    <button class="step btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Go to step
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
  
  <center><a class="home" href="vendor.php"><img src="../assets/images/icons/iconhome.png"></a> </center>
  
<div class="col-sm-2"></div>
			<form class="col-sm-8">
				<h2>Step 8</h2>
				<h3>Partner K3S</h3>
				<hr>
					 <div class="well well-lg">
			
				<div class="col-xs-6">
				  <label for="tipeperusahaan">Nama Bank:</label>
				  <select class="form-control" id="tipeperusahaan">
				    <option>Bank Negara Indonesia</option>
				    <option>Bank Rakyat Indonesia</option>
					<option>Bank Tabungan Negara</option>
					<option>Bank Mandiri</option>
					<option>Lain-lain</option>
				  </select><p class="text-warning">should not be empty</p>
				  <input type="text" class="form-control" id="namaperusahaan"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-6">
			  		<label for="name">Cabang:</label>
				  	<input type="text" class="form-control" id="namaperusahaan"><p class="text-warning">should not be empty</p>
				<br>
				</div>
				
				<div class="col-xs-6">
				  <label for="tipeperusahaan">Negara:</label>
				  <select class="form-control" id="tipeperusahaan">
				    <option>Indonesia</option>
				    <option>Malaysia</option>
					<option>Singapura</option>
					<option>Amerika</option>
					<option>China</option>
					<option>Inggris</option>
					<option>Rusia</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
			  		<label for="name">Pemilik Rekening:</label>
				  	<input type="text" class="form-control" id="namaperusahaan"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
			  		<label for="name">Nomor Rekening:</label>
				  	<input type="text" class="form-control" id="namaperusahaan"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
				  <label for="tipeperusahaan">Mata Uang:</label>
				  <select class="form-control" id="tipeperusahaan">
				    <option>USD-Dolar</option>
				    <option>MYR-Ringgit</option>
					<option>IDR-Rupiah</option>
					<option>SGD-Dolar</option>
					<option>CNY-Renminbi</option>
					<option>GBP-Poundsterling</option>
					<option>RUB-Rubel</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>	

<button type="button" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button>
<hr>
  <ul class="pager">
    <li><a href="step1.php">Previous Step</a></li>
    <li><a href="step3.php">Next Step</a></li>
  </ul>
  
			</form>
			<div class="well well-sm">Result (Table):</div>
		</div>

</body>
</html>		
