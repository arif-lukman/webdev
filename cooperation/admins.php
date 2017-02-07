<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "controller/koneksi.php";

	//query buat ngambil nama field
	$colQuery = "SHOW columns FROM _admin";

	//eksekusi query colQuery
	$colExec = $conn->query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT _admin._id as _id, _admin._username, _admin._fullname, _admin._email, _admin._password, _group_priv._name, _status._nama, _admin._desc FROM _admin, _group_priv, _status WHERE _admin._group_id = _group_priv._id and _admin._status = _status._id";

	//eksekusi query conQuery
	$conExec = $conn->query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysqli_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}

	//konversi tampilan boolean ke text
	function convert($bool){
		if($bool)
			echo "Active";
		else
			echo "Inactive";
	}
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
				<div class="panel-group lp" id="accordion">
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
				    <div id="collapse2" class="panel-collapse collapse in">
				      <div class="panel-body">
				      	<ul>
				      		<li class="dis">User</li>
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
				<h3>Users</h3><hr>
				<table class="table table-bordered">
					<thead>
						<tr>
						<?php
							while ($colNames = $colExec->fetch_assoc()){
								echo "
								<th>$colNames[Field]</th>
								";
							}
						?>
						</tr>
					</thead>
					<tbody>
						<?php
							while($conNames = $conExec->fetch_assoc()){
								echo "<tr>";
								foreach($all_prop as $item){
									echo "<td>$conNames[$item]</td>";
								}
								echo "
								<td><a href=\"forms/admins.php?op=update&id=$conNames[_id]\">edit</a></td>
								<td><a href=\"controller/admins.php?op=delete&id=$conNames[_id]\">delete</td>
								";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
				<br>
				<a href="forms/admins.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>