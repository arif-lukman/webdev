<?php
	include "koneksiDB.php";
	include "lib/library.php";
	
	//parameter diambil sini woi
		$No = $_GET["No"];
	
		//ambil semua detail dengan id diatas
	$query = "SELECT * FROM pengalaman_perusahaan WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Step 10</title>
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
			<form class="col-sm-8" action="updatestep10.php?No=<?php echo $No;?>" method="post">
				<h2>Step 10</h2>
				<h3>Pengalaman Perusahaan</h3>
				<hr>
					 <div class="well well-lg">
				
				<div class="col-xs-6">
			  		<label for="name">Nama Pekerjaan:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Project_Name" value="<?php echo $data['Project_Name']?>">
				</div>
			
				<div class="col-xs-6">
				  <label for="tipeperusahaan">Bidang Pekerjaan:</label>
				  <select class="form-control" id="tipeperusahaan" name="Activities_Section" value="<?php echo $data['Activities_Section']?>">
				    <option>Pengadaan Barang</option>
				    <option>Jasa Pemborongan</option>
					<option>Jasa Konsultasi</option>
					<option>Jasa Lainnya</option>
				  </select>
				  <br>
				</div>
				
				<div class="col-xs-6">
				  <label for="tipeperusahaan">Klasifikasi:</label>
				  <select class="form-control" id="tipeperusahaan" name="Classification" value="<?php echo $data['Classification']?>">
				    <option>Pengadaan Barang</option>
				    <option>Jasa Pemborongan</option>
					<option>Jasa Konsultasi</option>
					<option>Jasa Lainnya</option>
				  </select>
				   <select class="form-control" id="tipeperusahaan" name="Sub_Classification" value="<?php echo $data['Sub_Classification']?>">
				    <option>Pengadaan Barang</option>
				    <option>Jasa Pemborongan</option>
					<option>Jasa Konsultasi</option>
					<option>Jasa Lainnya</option>
				  </select>
				</div>
				
				<div class="col-xs-6">
			  		<label for="name">Perusahaan:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="User_Company" value="<?php echo $data['User_Company']?>">
				<br><br><br>
				</div>
				
				 <div class="form-group">
			  		<label for="name">Nama Kontak:</label>
				  	<input type="text" class="form-control" id="namaperusahaan" name="Contact_Name" value="<?php echo $data['Contact_Name']?>">
				
				</div>
				
				<div class="form-group">
					<label for="comment">Alamat:</label>
					<textarea class="form-control" rows="5" id="comment" name="Address" value="<?php echo $data['Address']?>"><?php echo $data['Address']?></textarea>
				</div>
				
				<div class="form-group">
					<label for="comment">Nomor Telepon:</label>
					<input type="text" class="form-control" id="namaperusahaan" name="Phone_Number" value="<?php echo $data['Phone_Number']?>">
				</div>
				
				<div class="col-xs-6">
					<label for="TGL">Tanggal Kontrak:</label>
					<input type="date" class="form-control" id="usr" name="Contact_Date" value="<?php echo $data['Contact_Date']?>">
					</div>

				<div class="col-xs-6">
					<label for="TGL">Tanggal Kadaluarsa:</label>
					<input type="date" class="form-control" id="usr" name="Completion_Date" value="<?php echo $data['Completion_Date']?>">
				<br>	
					</div>
					
				<div class="col-xs-6">
					<label for="comment">Nomor Dokumen:</label>
					<input class="form-control" rows="5" id="comment" name="Document_Number" value="<?php echo $data['Document_Number']?>"> 
				</div>
				
				<div class="col-xs-6">
					<label for="comment">Progress Terakhir (%):</label>
					<input class="form-control" rows="5" id="comment" name="Last_Progress" value="<?php echo $data['Last_Progress']?>">
				<br>
				</div>
				
				<div class="col-xs-4">
					<label for="comment">Nilai:</label>
					<input class="form-control" rows="5" id="comment" name="Value" value="<?php echo $data['Value']?>">
				  <select class="form-control" id="tipeperusahaan" name="Sub_Value" value="<?php echo $data['Sub_Value']?>">
				    <option>Indonesia</option>
				    <option>Malaysia</option>
					<option>Singapura</option>
					<option>Amerika</option>
					<option>China</option>
					<option>Inggris</option>
					<option>Rusia</option>
				  </select>
				</div>
				
				<div class="col-xs-8">
				<br><br>
				<input type="file" name="pic" accept="image/*">
				<span class="label label-info">Format PDF max. 2Mb </span>
				<br><br><br>
				</div>

<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button>
<hr>
  <ul class="pager">
    <li><a href="step9.php">Previous Step</a></li>
    <li><a href="step11.php">Next Step</a></li>
  </ul>
  
			</form>
		</div>

</body>
</html>		