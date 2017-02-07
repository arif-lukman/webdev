<?php
	include "koneksiDB.php";

	//parameter diambil sini woi
		$No = $_GET["No"];
		
	//query buat ngambil nama field
	$colQuery = "SHOW columns FROM partner_k3s";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT * FROM partner_k3s";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}
	
		//ambil semua detail dengan id diatas
	$query = "SELECT * FROM partner_k3s WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
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
			
				<div class="form-group">
			  		<label for="name">Nama K3S:</label>
				  <input type="text" class="form-control" id="gp" name="K3S_Name" value="<?php echo $data['K3S_Name']?>"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
			  		<label for="name">Nama Kontak:</label>
				  	<input type="text" class="form-control" id="gp" name="Contact_Name" value="<?php echo $data['Contact_Name']?>"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="col-sm-6">
					<label for="Expired_Date">Tanggal Terbit:</label>
					<input type="date" class="form-control" id="usr" name="Expired_Date" value="<?php echo $data['Expired_Date']?>"><p class="text-warning">should not be empty</p>
					</div>

				<div class="col-sm-6">
					<label for="Expiration_Days">Tanggal Kadaluarsa:</label>
					<input type="date" class="form-control" id="usr" name="Expiration_Days" value="<?php echo $data['Expiration_Days']?>"><p class="text-warning">should not be empty</p>
				<br>	
					</div>

				<div class="form-group">
			  		<label for="name">Nomor Telepon:</label>
				  	<input type="text" class="form-control" id="gp" name="Phone_Number" value="<?php echo $data['Phone_Number']?>"><p class="text-warning">should not be empty</p>
				</div>
				
				<div class="form-group">
			  		<label for="name">Nomor Fax:</label>
				  	<input type="text" class="form-control" id="gp" name="Fax_Number" value="<?php echo $data['Fax_Number']?>"><p class="text-warning">should not be empty</p>
				</div>	
				
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
  
			</form>

			
		</div>

</body>
</html>		
