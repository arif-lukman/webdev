<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ganti Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2>Ganti Password</h2>
  <div class="well well-lg">
  <div class="container">
  <h2>Silahkan isi data dibawah ini</h2>
  <p>Pastikan anda mengingat password lama dan password baru yang telah anda ubah</p>
  <form class="form-inline">
    <div class="form-group">
      <label for="email">Password Lama:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password Lama">
    </div>
    <div class="form-group">
      <label for="pwd">Password Baru:</label>
      <input type="password" class="form-control" id="pwdbaru" placeholder="Masukkan Password Baru">
    </div>
	    <div class="form-group">
      <label for="pwd">Ulangi Password Baru:</label>
      <input type="password" class="form-control" id="pwdbaru" placeholder="Ulangi Password Baru">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<br><br>
<div class="col-sm-2">
  <div class="list-group">
    <center><a href="indexuser.php" class="list-group-item">Batal</a></center>
  </div>
</div>
  </div>
</div>

</body>
</html>
