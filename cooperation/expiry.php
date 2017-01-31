<!DOCTYPE html>
<html>
	<head>
		<title>SPR Langgak</title>

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
				<li class="active"><a href="expiry.php">Kadaluarsa</a></li>
				<li><a href="#">Admin</a></li>
				<li><a href="#">Bantuan</a></li>
				</ul>
			</div>
		</nav>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<form action="search_expi.php">
					<div class="form-group">
						<label for="keyword">Kata kunci:</label>
						<input type="text" class="form-control" id="keyword" name="keyword">
					</div>
					<div class="form-group">
						<label for="status">Status Kadaluarsa:</label>
						<select class="form-control" id="status" name="status">
						    <option>Indonesia</option>
						    <option>Malaysia</option>
							<option>Singapura</option>
							<option>Amerika</option>
							<option>Cina</option>
							<option>Inggris</option>
							<option>Russia</option>
						</select>
					</div>
					<div class="form-group">
						<label for="type">Tipe Dokumen:</label>
						<select class="form-control" id="type" name="type">
						    <option>Indonesia</option>
						    <option>Malaysia</option>
							<option>Singapura</option>
							<option>Amerika</option>
							<option>Cina</option>
							<option>Inggris</option>
							<option>Russia</option>
						</select>
					</div>
					<input type="submit" value="search">
				</form>
			</div>
		</div>
	</body>
</html>