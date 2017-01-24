<?php
	include "check_session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!--Override css-->
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<style>
	    	a{
	    		color: white !important;
	    	}
		</style>

		<!--Some script addittions-->
		<script type="text/javascript">
			function validateNum(x,y){
				if(isNaN(x)||x==""||x==null){
					document.getElementById(y).innerHTML = "Input tidak valid";
					return false;
				}
				else{
					document.getElementById(y).innerHTML = "";
					return true;
				}
			}

			function validateForm(){
				var x = document.forms["form"];
				var i;
				var count=-1;
				for(i=1; i<x.length; i++){
					if(x.elements[i].value == "" || x.elements[i].value==null){
						count++;
					}
				}
				console.log(count);
				if(count==0){
					document.getElementById("submit").disabled = false;
					return true;
				}
				else{
					document.getElementById("submit").disabled = true;
					return false;
				}
			}

			function setEt(){
				var edt = parseFloat(document.getElementById("edt").value);
				var b = parseFloat(document.getElementById("b").value);
				if(isNaN(edt)){
					edt = 0;
				}
				if(isNaN(b)){
					b = 0;
				}
				document.getElementById("et").value = edt+b;
			}

			function noNan(){
				if(isNaN(document.getElementById("et").value)){
					document.getElementById("et").value = 0;
				}
			}

			function setEdf(){
				var ofi = document.getElementById("ofi").value;
				document.getElementById("edf").value = ofi;
			}

			function setDlg(){
				var ap = document.getElementById("ap").value;
				var gp = document.getElementById("gp").value;
				document.getElementById("dlg").value = ap-gp;
			}z

		</script>

		<title>SOT_SPRL</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
<body>

  <div class="alert alert-info">
    <strong>Important!</strong><pre>1. Fill the blank with number only, cannot with alphabet <br>2. use '.' for number's point <br>   Ex : "1.5" ("not 1,5")</pre>
  </div>
  
<div class="container">
<form name="form" action="a.php" method="post" oninput="validateForm();">

    <div class="form-group">
		<div class="col-sm-6">
	      <label for="TGL">TGL:</label>
	      <input type="date" class="form-control" id="usr" name="TGL">
	    </div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
	      	<label for="GROSS_PROD">GROSS_PROD:</label>
	      	<input type="text" class="form-control" id="gp" name="GROSS_PROD" oninput="setDlg();">
	    </div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
	      	<label for="NETT_PROD">NETT_PROD:</label>
	      	<input type="text" class="form-control" id="pwd" name="NETT_PROD">
	    </div>
	</div>
	
    <div class="form-group">
      	<div class="col-sm-6">
	  		<label for="ALLOCATED_PROD">ALLOCATED_PROD:</label>
      		<input type="text" class="form-control" id="ap" name="ALLOCATED_PROD" oninput="setDlg();">
    	</div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
      		<label for="EKSPOR_SPRL_DAILY">EKSPOR_SPRL_DAILY:</label>
      		<input type="text" class="form-control" id="pwd" name="EKSPOR_SPRL_DAILY">
    	</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<label for="EKSPOR_SPRL_CUM">EKSPOR_SPRL_CUM:</label>
      		<input type="text" class="form-control" id="pwd" name="EKSPOR_SPRL_CUM">
    	</div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
      		<label for="DOMESTIK_GOI_TANKER_DAILY	">DOMESTIK_GOI_TANKER_DAILY	:</label>
      		<input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_TANKER_DAILY">
    	</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
    	  	<label for="DOMESTIK_GOI_TANKER_CUM">DOMESTIK_GOI_TANKER_CUM:</label>
      		<input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_TANKER_CUM">
    	</div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
      		<label for="DOMESTIK_GOI_PIPA_DAILY">DOMESTIK_GOI_PIPA_DAILY:</label>
      		<input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_PIPA_DAILY">
    	</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<label for="DOMESTIK_GOI_PIPA_CUM">DOMESTIK_GOI_PIPA_CUM:</label>
      		<input type="text" class="form-control" id="pwd" name="DOMESTIK_GOI_PIPA_CUM">
    	</div>
	</div>

	<div class="form-group">
		<div class="col-sm-6">
      		<label for="OPENING_TERMINAL">OPENING_TERMINAL:</label>
      		<input type="text" class="form-control" id="pwd" name="OPENING_TERMINAL">
    	</div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
      		<label for="OPENING_FIELD">OPENING_FIELD:</label>
      		<input type="text" class="form-control" id="ofi" name="OPENING_FIELD" oninput="setEdf();">
		</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<label for="OWN_USE">OWN_USE:</label>
	 		<input type="text" class="form-control" id="pwd" name="OWN_USE">
    	</div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
      		<input type="hidden" class="form-control" id="et" name="ENDING_TERMINAL">
    	</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<label for="ENDING_DEAD_TERMINAL">ENDING_DEAD_TERMINAL:</label>
      		<input type="text" class="form-control" id="edt" name="ENDING_DEAD_TERMINAL" oninput="setEt();">
    	</div>
	</div>

    <div class="form-group">
		<div class="col-sm-6">
      		<label for="ENDING_FIELD">ENDING_FIELD:</label>
      		<input type="text" class="form-control" id="pwd" name="ENDING_FIELD">
    	</div>   
	</div>

	<div class="form-group">
		<div class="col-sm-6">
      		<input type="hidden" class="form-control" id="edf" name="ENDING_DEAD_FIELD">
		</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<input type="hidden" class="form-control" id="dlg" name="DUMAI_LOSS_GAIN">
    	</div>    
	</div>
	
	<div class="form-group">
		<div class="col-sm-6">
      		<label for="DUMAI_LOSS_GAIN">BLANK_FIELD:</label>
      		<input type="text" class="form-control" id="b" name="BLANK_FIELD" oninput="setEt();">
    	</div>    
	</div>

	<div class="container col-sm-12">
		<br>
  		<input type="submit" class="btn btn-primary tisright" value="Confirm" disabled id="submit"></input>
  		<button type="button" class="btn btn-primary tisleft"><a href="main_menu.php">Back</a></button>
  		<br><br>
	</div
  </form>
</div>
</div>

</div>

</body>