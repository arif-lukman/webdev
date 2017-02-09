<?php
	include "koneksiDB.php";
	include "lib/library.php";
	
	//parameter diambil sini woi
		$No = $_GET["No"];
	
		//ambil semua detail dengan id diatas
	$query = "SELECT * FROM alamat_kantor WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
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
			<form class="col-sm-8" action="updatestep3.php?No=<?php echo $No;?>" method="post">
				<h2>Step 3</h2>
				<h3>Alamat Kantor (Office Address)</h3>
				<hr>
					 <div class="well well-lg">

				<div class="col-xs-4">
				  <label for="kualifikasiperusahaan">Tipe Kantor:</label>
				  <select class="form-control" id="kualifikasiperusahaan" name="Office_Type" value="<?php echo $data['Office_Type']?>">
				    <option>Pusat</option>
				    <option>Cabang</option>
					<option>Perwakilan</option>
				  </select><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-xs-4">
				  <label for="kualifikasiperusahaan">Negara:</label>
				  <select class="form-control" id="kualifikasiperusahaan" name="Country" value="<?php echo $data['Country']?>">
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
				  <label for="provinsi">Provinsi:</label>
				  <select class="form-control" id="provinsi" name="Province" value="<?php echo $data['Province']?>">
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
				<label><input type="checkbox" value="Kantor Utama" name="Primary_Office" value="<?php echo $data['Primary_Office']?>"> Yes (salah satu harus sebagai Pengurus Utama / one address must be set to Primary Person)</label>
				<br><br>
				</div>
				
				<?php
				echo createTextArea(5, "Alamat Kantor", "Office_Address", "Office_Address", $data['Office_Address']);
				?>
				
				<div class="col-xs-4">
				<?php
				echo createInputField("text", "Kota", "City", "City", $data['City']); 
				?>
				</div>
				
				<div class="col-xs-4">
				<?php
				echo createInputField("text", "Kode Pos", "ZIP_Code", "ZIP_Code", $data['ZIP_Code']); 
				?>
				</div>

				<div class="col-xs-4">
				<?php
				echo createInputField("text", "Nomor Telepon Kantor", "Office_Phone_Number", "Office_Phone_Number", $data['Office_Phone_Number']); 
				?>
				</div>
				
				<div class="col-xs-4">
				<?php
				echo createInputField("text", "Nomor Fax Kantor", "Office_Fax_Number", "Office_Fax_Number", $data['Office_Fax_Number']); 
				?>
				</div>
				
				<div class="col-xs-4">
				<?php
				echo createInputField("text", "Email Kantor", "Office_Email", "Office_Email", $data['Office_Email']); 
				?>
				</div>
				
				<div class="col-xs-4">
				<?php
				echo createInputField("text", "Website", "Website", "Website", $data['Website']); 
				?>
				</div>


<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button>
<hr>
  <ul class="pager">
    <li><a href="step2.php">Previous Step</a></li>
    <li><a href="step4.php">Next Step</a></li>
  </ul>
  
			</form>
		</div>

</body>
</html>		
