<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "controller/koneksi.php";

	//ambil data dari db
	$sql = "SELECT * FROM _general_cfg";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SPR Langgak</title>
		<!-- CSS Overriding -->
		<style type="text/css">
			.dis{
				text-decoration: underline;
			}
		</style>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">SPRL BPMS</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="main_menu.php">Registrasi</a></li>
					<li><a href="companies.php">Data Perusahaan</a></li>
					<li><a href="proposals.php">Status Pengajuan</a></li>
					<li><a href="expiry.php">Kadaluarsa</a></li>
					<li class="active"><a href="admin_menu">Admin</a></li>
					<li><a href="#">Bantuan</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		<div class="container" style="margin-top: 80px">
			<!--menu panel-->
			<div class="col-sm-3">
				<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				        > Umum</a>
				      </h4>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse in">
				      <div class="panel-body">
				      	<ul>
				      		<li class="dis">Konfigurasi Umum</li>
				      		<li><a href="cfg_reg.php">Konfigurasi Pendaftaran</a></li>
				      		<li><a href="cfg_exp.php">Setting Kadaluarsa</a></li>
				      	</ul>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				        > Group Privileges</a>
				      </h4>
				    </div>
				    <div id="collapse2" class="panel-collapse collapse">
				      <div class="panel-body">
				      	<ul>
				      		<li><a href="admins.php">User</a></li>
				      		<li><a href="groups.php">Group Privileges</a></li>
				      	</ul>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
				        > Data Master</a>
				      </h4>
				    </div>
				    <div id="collapse3" class="panel-collapse collapse">
				      <div class="panel-body">
				      	<ul>
				      		<li><a href="typ_cpy.php">Tipe Perusahaan</a></li>
				      		<li><a href="typ_ofc.php">Tipe Kantor</a></li>
				      		<li><a href="typ_mgr.php">Tipe Pengurus</a></li>
				      		<li><a href="typ_doc.php">Tipe Dokumen</a></li>
				      		<li><a href="typ_doc+.php">Tipe Dokumen Tambahan</a></li>
				      		<li><a href="typ_afc.php">Tipe Afiliasi</a></li>
				      		<li><a href="typ_scp.php">Tipe Bidang Pekerjaan</a></li>
				      		<li><a href="typ_cls.php">Tipe Klasifikasi Perusahaan</a></li>
				      		<li><a href="typ_qual.php">Tipe Kualifikasi Perusahaan</a></li>
				      		<li><a href="country.php">Negara</a></li>
				      		<li><a href="province.php">Propinsi</a></li>
				      		<li><a href="bank.php">Bank</a></li>
				      		<li><a href="currency.php">Mata Uang</a></li>
				      		<li><a href="distributor.php">Distributor</a></li>
				      	</ul>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="well col-sm-9">
				<h3>Konfigurasi Umum</h3><hr>
				<form action="controller/general_config.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
				  		<label for="nama">Nama Aplikasi:</label>
					  	<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['_nama_app'];?>">
					</div>
					<div class="form-group">
				  		<label for="desc">Deskripsi:</label>
					  	<textarea class="form-control" rows="5" id="desc" name="desc"><?php echo $data['_desc'];?></textarea>
					</div>
					<div class="form-group">
				  		<label for="email">Kontak Email:</label>
					  	<input type="email" class="form-control" id="email" name="email" value="<?php echo $data['_email_1'];?>">
					</div>
					<div class="form-group">
				  		<label for="email2">Kontak Email2:</label>
					  	<input type="email" class="form-control" id="email2" name="email2" value="<?php echo $data['_email_2'];?>">
					</div>
					<div class="form-group">
				  		<label for="emailp">Email Procurement:</label>
					  	<input type="email" class="form-control" id="emailp" name="emailp" value="<?php echo $data['_email_proc'];?>">
					</div>
					<div class="form-group">
				  		<label for="ttd">Penanda Tangan SKT:</label>
					  	<input type="text" class="form-control" id="ttd" name="ttd" value="<?php echo $data['_ttd_skt'];?>">
					</div>
					<div class="form-group">
				  		<label for="footer">Teks Footer:</label>
					  	<input type="text" class="form-control" id="footer" name="footer" value="<?php echo $data['_footer_txt'];?>">
					</div>
					<div class="form-group">
				  		<label for="image">Favicon:</label>
					  	<input type="file" class="form-control" id="image" name="image" value="<?php echo $data['_img'];?>">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>