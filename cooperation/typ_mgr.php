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
				    <div id="collapse1" class="panel-collapse collapse">
				      <div class="panel-body">
				      	<ul>
				      		<li><a href="cfg_gen.php">Konfigurasi Umum</a></li>
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
				    <div id="collapse3" class="panel-collapse collapse in">
				      <div class="panel-body">
				      	<ul>
				      		<li><a href="typ_cpy.php">Tipe Perusahaan</a></li>
				      		<li><a href="typ_ofc.php">Tipe Kantor</a></li>
				      		<li class="dis">Tipe Pengurus</li>
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
			<div class="col-sm-9">
				
			</div>
		</div>
	</body>
</html>