<?php
	include "koneksiDB.php";
	include "lib/library.php";

	//parameter diambil sini woi
	$No = $_GET["No"];
	//ambil semua detail dengan id diatas
	$query = "SELECT * FROM partner_k3s WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
	$warning = "should not be empty";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 2</title>
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
			<a href="step2.php">BACK</a>
		</div>
		<center><a class="home" href="vendor.php"><img src="../assets/images/icons/iconhome.png"></a> </center>
		<div class="col-sm-2"></div>
		<form class="col-sm-8" action="updatestep2.php?No=<?php echo $No;?>" method="post">
			<h2>Step 2</h2>
			<h3>Partner K3S</h3>
			<hr>
			<div class="well well-lg">
				<?php
					echo createInputField("text", "Nama K3S:", "K3S_Name", "K3S_Name", $data['K3S_Name'], "", true, $warning);
					echo createInputField("text", "Nama Kontak:", "Contact_Name", "Contact_Name", $data['Contact_Name'], "", true, $warning);
					echo createInputField("text", "Tanggal Terbit:", "Expired_Date", "Expired_Date", $data['Expired_Date'], "col-sm-6", true, $warning);
					echo createInputField("text", "Tanggal Kadaluarsa:", "Expiration_Days", "Expiration_Days", $data['Expiration_Days'], "col-sm-6", true, $warning);
					echo createInputField("text", "Nomor Telepon:", "Phone_Number", "Phone_Number", $data['Phone_Number'], "", true, $warning);
					echo createInputField("text", "Nomor Fax", "Fax_Number", "Fax_Number", $data['Fax_Number'], "", true, $warning);
				?>
				<div class="form-group">
					<input type="file" name="pic" accept="image/*" name="Attachment" value="<?php echo $data['Attachment']?>">
					<span class="label label-info">Format PDF max. 2Mb </span><p class="text-warning">should not be empty</p>
					<br>
				</div>
				<input type="submit" class="btn btn-primary tisright" value="Confirm"></input>
				<button type="button" class="btn btn-primary">Reset</button>
				<hr>
				<ul class="pager">
					<li><a href="step1.php">Previous Step</a></li>
					<li><a href="step3.php">Next Step</a></li>
				</ul>
			</div>
		</form>
	</body>
</html>