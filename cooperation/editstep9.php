<?php
	include "koneksiDB.php";
	include "lib/library.php";
	
	//parameter diambil sini woi
		$No = $_GET["No"];
	
		//ambil semua detail dengan id diatas
	$query = "SELECT * FROM perusahaan_induk_dan_rekanan WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Step 9</title>
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
			<form class="col-sm-8" action="updatestep9.php?No=<?php echo $No;?>" method="post">
				<h2>Step 9</h2>
				<h3>Perusahaan Induk, Grup Perusahaan, Rekanan, Konsorsium, Afiliasi dan Aliansi</h3>
				<hr>
					 <div class="well well-lg">
			
				<div class="col-xs-6">
				  <label for="tipeperusahaan">Tipe Affiliate / Perusahaan:</label>
				  <select class="form-control" id="tipeperusahaan" name="Affiliate_Type" value="<?php echo $data['Affiliate_Type']?>">
				    <option>Perusahaan Induk</option>
				    <option>Grup Perusahaan</option>
					<option>Rekanan</option>
					<option>Konsorsium</option>
					<option>Affiliasi dan Aliansi</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-6">
			  		<label for="name">Nama Perusahaan:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Company_Name" value="<?php echo $data['Company_Name']?>"><p class="text-warning">should not be empty</p>
				<br>
				</div>
				
				 <div class="form-group">
					<label for="comment">Alamat:</label>
					<textarea class="form-control" rows="5" id="comment" name="Address" value="<?php echo $data['Company_Name']?>"><?php echo $data['Address']?></textarea><p class="text-warning">should not be empty</p>	
				</div>
				
				<div class="col-xs-6">
				  <label for="tipeperusahaan">Negara:</label>
				  <select class="form-control" id="tipeperusahaan" name="Country">
				    <option>Indonesia</option>
				    <option>Malaysia</option>
					<option>Singapura</option>
					<option>Amerika</option>
					<option>China</option>
					<option>Inggris</option>
					<option>Rusia</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>

				<div class="col-xs-6">
				  <label for="tipeperusahaan">Provinsi:</label>
				  <select class="form-control" id="tipeperusahaan" name="Province" value="<?php echo $data['Province']?>">
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
			  		<label for="name">Nomor Telepon:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Phone_Number" value="<?php echo $data['Phone_Number']?>"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
			  		<label for="name">Email:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Email" value="<?php echo $data['Email']?>"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
					<label for="comment">Deskripsi:</label>
					<textarea class="form-control" rows="5" id="comment" name="Description" value="<?php echo $data['Description']?>"><?php echo $data['Description']?></textarea><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-6">
			  		<label for="name">Kota:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="City" value="<?php echo $data['City']?>"><p class="text-warning">should not be empty</p>
				<br>
				</div>
				
				<div class="col-xs-6">
					<label for="name">Kode Pos:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="ZIP_Code" value="<?php echo $data['ZIP_Code']?>"><p class="text-warning">should not be empty</p>
					<br>
				</div>
				
				<div class="col-xs-6">
					<label for="name">Kode Fax:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Fax_Number" value="<?php echo $data['Fax_Number']?>"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-6">
					<label for="name">Website:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Website" value="<?php echo $data['Website']?>">
				<br><br>
				</div>
				

<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button>
<hr>
  <ul class="pager">
    <li><a href="step8.php">Previous Step</a></li>
    <li><a href="step10.php">Next Step</a></li>
  </ul>
  
			</form>
			
		</div>

</body>
</html>		