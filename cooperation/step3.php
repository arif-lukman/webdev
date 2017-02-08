<?php
	include "koneksiDB.php";

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM alamat_kantor";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT * FROM alamat_kantor";

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
<html lang="en">
<head>
  <title>Step 3</title>
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
			<form class="col-sm-8" action="step3action.php" method="post">
				<h2>Step 3</h2>
				<h3>Alamat Kantor (Office Address)</h3>
				<hr>
					 <div class="well well-lg">

				<div class="col-xs-4">
				  <label for="kualifikasiperusahaan">Tipe Kantor:</label>
				  <select class="form-control" id="kualifikasiperusahaan" name="Office_Type">
				    <option>Pusat</option>
				    <option>Cabang</option>
					<option>Perwakilan</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-4">
				  <label for="kualifikasiperusahaan">Negara:</label>
				  <select class="form-control" id="kualifikasiperusahaan" name="K3S_Name">
				    <option>Indonesia</option>
				    <option>Malaysia</option>
					<option>Singapura</option>
					<option>Amerika</option>
					<option>China</option>
					<option>Inggris</option>
					<option>Rusia</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-4">
				  <label for="kualifikasiperusahaan">Provinsi:</label>
				  <select class="form-control" id="kualifikasiperusahaan">
				    <option>Aceh</option>
				    <option>Bali</option>
					<option>Banten</option>
					<option>Bengkulu</option>
					<option>Goranto</option>
					<option>DKI Jakarta</option>
					<option>Jambi</option>
					<option>Jawa Barat</option>
					<option>Jawa Tengah</option>
					<option>Jawa Timur</option>
					<option>Kalimantan Barat</option>
					<option>Kalimantan Selatan</option>
					<option>Kalimantan Tengah</option>
					<option>Kepulauan Bangka Belitung</option>
					<option>Kepulauan Riau</option>
					<option>Lampung</option>
					<option>Maluku</option>
					<option>Maluku Utara</option>
					<option>Nusa Tenggara Barat</option>
					<option>Papua</option>
					<option>Papua Barat</option>
					<option>Sulawesi Barat</option>
					<option>Sulawesi Selatan</option>
					<option>Sulawesi Tengah</option>
					<option>Sulawesi Tenggara</option>
					<option>Sulawesi Utara</option>
					<option>Sumatera Barat</option>
					<option>Sumatera Selatan</option>
					<option>Sumatera Utara</option>
					<option>Yogyakarta</option>
					<option>Yang Lain-Lain / Other</option>
					
				  </select><p class="text-warning">should not be empty</p>
				</div>
				
				<br><br><br><br>
				 <b>Kantor Utama?</b>
				 <div class="checkbox">
				<label><input type="checkbox" value=""> Yes (salah satu harus sebagai Pengurus Utama / one address must be set to Primary Person)</label>
				<br><br>
				</div>
				
				 <div class="form-group">
					<label for="comment">Alamat Kantor:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
		
				<div class="col-xs-4">
			  		<label for="name">Kota:</label>
				  	<input type="text" class="form-control" id="namaperusahaan">
				</div>
				
				<div class="col-xs-4">
					<label for="TGL">Kode Pos:</label>
					<input type="text" class="form-control" id="usr"><p class="text-warning">should not be empty</p>
					</div>

				<div class="col-xs-4">
			  		<label for="name">Nomor Telepon:</label>
				  	<input type="text" class="form-control" id="namaperusahaan"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-6">
			  		<label for="name">Nomor Fax:</label>
				  	<input type="text" class="form-control" id="namaperusahaan"><p class="text-warning">should not be empty</p>
				</div>	
				
				<div class="col-xs-6">
			  		<label for="name">website:</label>
				  	<input type="text" class="form-control" id="namaperusahaan">
					<br><br>
				</div>	
				
				<div class="form-group">
				<input type="file" name="pic" accept="image/*"><p class="text-warning">should not be empty</p>
				<br>
				</div>

<button type="button" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button>
<hr>
  <ul class="pager">
    <li><a href="step2.php">Previous Step</a></li>
    <li><a href="step4.php">Next Step</a></li>
  </ul>
  
			</form>
			<div class="well well-sm">Result (Table):</div>
		</div>

</body>
</html>		
