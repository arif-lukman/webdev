<!doctype html>
<html>

<head><title></title></head>
<html>
	<head>
		<title>Ganti Password</title>

		<!--override css-->
		<link rel="stylesheet" type="text/css" href="../assets/css/styleproc2.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<style>
					a.home {
				position: fixed;
				top: 0;
				right: 0;
				color: white;
			}
		</style>
	</head>
	
<body>

  <div class="alert alert-warning">
    <strong>Username dan Password</strong> Harus di isi dengan benar
  </div>
  
<div class="text-center motto">
<table border='2'>

<form action="changePassword.php" method="POST">
<tr><td>username:</td><td><input type="text" name="username" id="username" /></td></tr>

<tr><td>password <strong>lama</strong>:</td><td><input type="password" name="passwordlama" id="passwordlama" /></td></tr>

<tr><td>password <strong>baru</strong>:</td><td><input type="password" name="passwordbaru" id="passwordbaru" /></td></tr>

<tr><td>konfirmasi <strong>password baru</strong>:</td><td><input type="password" name="konfirmasipassword" id="konfirmasipassword" /></td></tr>

<tr><td></td><td><input type="submit" name="change" value="Ganti Password" /></td></tr>
</form>

</table>
</div>
<div class="col-xs-5">
<div class="panel-footer"><strong>Lupa Password?</strong> Email kami di scm_jkt@sprlanggak.co.id</div>
</div>

<a class="home" href="vendor.php"><img src="../assets/images/cooperation/back.png" height="50" width="100"></a>
</body>

</html>