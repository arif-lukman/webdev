<!DOCTYPE html>
<html lang="en">
<head>
		<!--Override css-->
		<style>
			#map {
				height: 400px;
				width: 100%;
			}
			.motto{
				font-size: 30px;
				font-style: italic;
			}
			.grad{
				background-color: #FFDF00;
				border-color: transparent;
			}
			.white{
				background: white;
			}
			a{
				color: white;
			}
			.container{
				max-width: 805px;
				background: white;
			}
			body { 
			background: url(webbg.png) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			}
			.navbar-default {
				background-image: -webkit-linear-gradient(top, #ffffff 0%, #D4AF37 100%);
				background-image: linear-gradient(to bottom, #ffffff 0%, #D4AF37 100%);
				background-repeat: repeat-x;
				border-color: #D4AF37 !important;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdfdfdf', GradientType=0);
				color: white !important;
			}
			.navbar-nav>.active>a, .navbar-nav>.active>a:hover, .navbar-nav>.active>a:focus {
			  	background-color:#D4AF37 !important;
			}
			.navbar-default .navbar-nav > .open > a, 
			.navbar-default .navbar-nav > .open > a:hover, 
			.navbar-default .navbar-nav > .open > a:focus {
			  	background-color:#D4AF37 !important;
			}
			.navbar-default .navbar-nav > li > a:hover,
			.navbar-default .navbar-nav > li > a:focus {
			    text-decoration: underline;
			}
			.navbar-default .navbar-nav > li > a {
			    color: #2b2b2b !important;
			}
			.navbar-default .navbar-nav .open .dropdown-menu > li > a {
		        color: #2b2b2b !important;
		    }
		    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
		    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
		    	text-decoration: underline;
		    }
	    	a{
	    		color: white !important;
	    	}
		    .tisleft{
		    	float: left;
		    }
		    .tisright{
		    	float: right;
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
				var count=0;
				for(i=1; i<x.length; i++){
					if(isNaN(x) || x.elements[i].value == "" || x.elements[i].value==null){
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
    <strong>Important!</strong> Fill the blank with number only, cannot with alphabet <br>
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
	      	<input type="text" class="form-control" id="pwd" name="GROSS_PROD">
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
      		<input type="text" class="form-control" id="pwd" name="ALLOCATED_PROD">
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
      		<input type="text" class="form-control" id="pwd" name="OPENING_FIELD">
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
      		<label for="ENDING_TERMINAL">ENDING_TERMINAL:</label>
      		<input type="text" class="form-control" id="pwd" name="ENDING_TERMINAL">
    	</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<label for="ENDING_DEAD_TERMINAL">ENDING_DEAD_TERMINAL:</label>
      		<input type="text" class="form-control" id="pwd" name="ENDING_DEAD_TERMINAL">
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
      		<label for="ENDING_DEAD_FIELD">ENDING_DEAD_FIELD:</label>
      		<input type="text" class="form-control" id="pwd" name="ENDING_DEAD_FIELD">
		</div>
	</div>
	
    <div class="form-group">
		<div class="col-sm-6">
      		<label for="DUMAI_LOSS_GAIN">DUMAI_LOSS_GAIN:</label>
      		<input type="text" class="form-control" id="pwd" name="DUMAI_LOSS_GAIN">
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