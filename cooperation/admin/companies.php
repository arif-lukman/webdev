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
					<li class="active"><a href="companies.php">Data Perusahaan</a></li>
					<li><a href="proposals.php">Status Pengajuan</a></li>
					<li><a href="expiry.php">Kadaluarsa</a></li>
					<li><a href="cfg_gen.php">Admin</a></li>
					<li><a href="#">Bantuan</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<form action="search_comp.php">
					<div class="form-group">
						<label for="keyword">Kata kunci:</label>
						<input type="text" class="form-control" id="keyword" name="keyword">
					</div>
					<div class="form-group">
						<label for="country">Negara:</label>
						<select class="form-control" id="country" name="country">
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
						<label for="province">Propinsi:</label>
						<select class="form-control" id="country" name="country">

						</select>
					</div>
					<div class="form-group">
						<label for="class">Klasifikasi:</label>
						<input type="text" class="form-control" id="class" name="class">
					</div>
					<div class="form-group">
						<label for="qualific">Kualifikasi Perusahaan:</label>
						<select class="form-control" id="qualific" name="qualific">
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