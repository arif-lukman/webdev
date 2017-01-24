<?php
	include "koneksi.php";
	include "check_session.php";

	//ambil param id
	$id = $_GET["id"];

	//ambil semua detail dengan id diatas
	$query = "SELECT * FROM sot_sprl WHERE ID='$id'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<title>SOT_SPRL</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
<body>

  <div class="alert alert-info">
    <strong>Important!</strong> Fill the blank with number only, cannot with alphabet <br>
  </div>
  
<div class="container">
<form action="update.php?id=<?php echo "$id";?>" method="post">
    <div class="form-group">
	<div class="col-xs-5">
      <label for="TGL">TGL:</label>
      <input type="date" class="form-control" id="usr" name="TGL" value="<?php echo $data['TGL'];?>">
    </div>
	</div>
	
    <div class="form-group">
	<div class="col-xs-5">
      <label for="GROSS_PROD">GROSS_PROD:</label>
      <input type="text" class="form-control" id="pwd" name="GROSS_PROD" value="<?php echo $data['GROSS_PROD'];?>">
    </div>
	</div>



	    <div class="form-group">
		<div class="col-xs-5">
      <label for="NETT_PROD">NETT_PROD:</label>
      <input type="text" class="form-control" id="pwd" name="NETT_PROD" value="<?php echo $data['NETT_PROD'];?>">
    </div>
	</div>
	
	    <div class="form-group">
      <div class="col-xs-5">
	  <label for="ALLOCATED_PROD">ALLOCATED_PROD:</label>
      <input type="text" class="form-control" id="pwd" name="ALLOCATED_PROD" value="<?php echo $data['ALLOCATED_PROD'];?>">
    </div>
	</div>



	

	    <div class="form-group">
		<div class="col-xs-5">
      <label for="EKSPOR_SPRL_DAILY">EKSPOR_SPRL_DAILY:</label>
      <input type="text" class="form-control" id="pwd" name="EKSPOR_SPRL_DAILY"  value="<?php echo $data['EKSPOR_SPRL_DAILY'];?>">
    </div>
	</div>

	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="EKSPOR_SPRL_CUM">EKSPOR_SPRL_CUM:</label>
      <input type="text" class="form-control" id="pwd" name="EKSPOR_SPRL_CUM" value="<?php echo $data['EKSPOR_SPRL_CUM'];?>">
    </div>
	</div>





	    <div class="form-group">
		<div class="col-xs-5">
      <label for="DOMESTIK_GOI_TANKER_DAILY	">DOMESTIK_GOI_TANKER_DAILY	:</label>
      <input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_TANKER_DAILY" value="<?php echo $data['DOMESTIK_GOI_TANKER_DAILY'];?>">
    </div>
	</div>
	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="DOMESTIK_GOI_TANKER_CUM">DOMESTIK_GOI_TANKER_CUM:</label>
      <input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_TANKER_CUM" value="<?php echo $data['DOMESTIK_GOI_TANKER_CUM'];?>">
    </div>
	</div>





	    <div class="form-group">
		<div class="col-xs-5">
      <label for="DOMESTIK_GOI_PIPA_DAILY">DOMESTIK_GOI_PIPA_DAILY:</label>
      <input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_PIPA_DAILY" value="<?php echo $data['DOMESTIK_GOI_PIPA_DAILY'];?>">
    </div>
	</div>
	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="DOMESTIK_GOI_PIPA_CUM">DOMESTIK_GOI_PIPA_CUM:</label>
      <input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_PIPA_CUM" value="<?php echo $data['DOMESTIK_GOI_PIPA_CUM'];?>">
    </div>
	</div>


	


	<div class="form-group">
		<div class="col-xs-5">
      <label for="OPENING_TERMINAL">OPENING_TERMINAL:</label>
      <input type="text" class="form-control" id="pwd" name="OPENING_TERMINAL" value="<?php echo $data['OPENING_TERMINAL'];?>">
    </div>
	</div>
	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="OPENING_FIELD">OPENING_FIELD:</label>
      <input type="text" class="form-control" id="pwd" name="OPENING_FIELD" value="<?php echo $data['OPENING_FIELD'];?>">
    </div>
	</div>




	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="OWN_USE">OWN_USE:</label>
	 <input type="text" class="form-control" id="pwd" name="OWN_USE" value="<?php echo $data['OWN_USE'];?>">
    </div>
	</div>
	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="ENDING_TERMINAL">ENDING_TERMINAL:</label>
      <input type="text" class="form-control" id="pwd" name="ENDING_TERMINAL" value="<?php echo $data['ENDING_TERMINAL'];?>">
    </div>
	</div>




	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="ENDING_DEAD_TERMINAL">ENDING_DEAD_TERMINAL:</label>
      <input type="text" class="form-control" id="pwd" name="ENDING_DEAD_TERMINAL" value="<?php echo $data['ENDING_DEAD_TERMINAL'];?>">
    </div>
	</div>
	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="ENDING_FIELD">ENDING_FIELD:</label>
      <input type="text" class="form-control" id="pwd" name="ENDING_FIELD" value="<?php echo $data['ENDING_FIELD'];?>">
    </div>   
	</div>




	
	<div class="form-group">
	<div class="col-xs-5">
      <label for="ENDING_DEAD_FIELD">ENDING_DEAD_FIELD:</label>
      <input type="text" class="form-control" id="pwd" name="ENDING_DEAD_FIELD" value="<?php echo $data['ENDING_DEAD_FIELD'];?>">
    </div>
	</div>
	
	    <div class="form-group">
		<div class="col-xs-5">
      <label for="DUMAI_LOSS_GAIN">DUMAI_LOSS_GAIN:</label>
      <input type="text" class="form-control" id="pwd" name="DUMAI_LOSS_GAIN" value="<?php echo $data['DUMAI_LOSS_GAIN'];?>">
    </div>    
	</div>




<br>

  <input type="submit" class="btn btn-primary" value="Confirm"></input>

</form>
</div>

</body>