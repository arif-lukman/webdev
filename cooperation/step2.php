<!DOCTYPE html>
<html lang="en">
<head>
  <title>Step 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="col-sm-2"></div>
			<form class="col-sm-8">
				<h2>Step 1</h2>
				<hr>
					 <div class="well well-lg">
			
				<div class="form-group">
			  		<label for="name">Nama Perusahaan:</label>
				  	<input type="text" class="form-control" id="namaperusahaan">
				</div>
						
				<div class="form-group">
				  <label for="tipeperusahaan">Tipe Perusahaan:</label>
				  <select class="form-control" id="tipeperusahaan">
				    <option>Perseroan Terbatas</option>
				    <option>Persekutuan Komanditer</option>
					<option>Koperasi</option>
					<option>Lembaga</option>
				  </select>
				</div>

				<div class="form-group">
				  <label for="kualifikasiperusahaan">Kualifikasi Perusahaan:</label>
				  <select class="form-control" id="kualifikasiperusahaan">
				    <option>Besar</option>
				    <option>Menengah</option>
					<option>Kecil</option>
				  </select>
				</div>
				<a href="indexuser.php">Back</a>
				<input type="submit" value="Send">
				<input type="submit" value="Send and Next Step">
				<hr>
			</form>
		</div>

</body>
</html>		
