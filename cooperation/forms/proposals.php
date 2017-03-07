<?php
	include "../koneksiDB.php";
	include "../lib/library.php";

	//parameter diambil sini woi
	$No = $_GET["No"];
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			//inisialisasi head
			initHead();
		?>
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "proposals.php"));
			$date = date('Y-m-d');
		?>
		<div class="container well" style="margin-top: 80px">
				<form action="../controller/proposals.php?No=<?php echo $No;?>" method="post">
					<h2>Pengajuan (Submission)</h2>
					<hr>
						<div class="form-group col-sm-4">
							<label for="tipeperusahaan">Status Registrasi:</label>
							<select class="form-control" id="tipeperusahaan" name="Registration_Status">
								<option>Need Revision</option>
								<option>Approved</option>
								<option>Proposed</option>
							</select><p class="text-warning">should not be empty</p>
						</div>
						<div class="form-group col-sm-12">
							<label for="kualifikasiperusahaan">Catatan:</label>
							<textarea class="form-control" rows="5" id="comment" name="Notes"></textarea><p class="text-warning">should not be empty</p>
							<input type="hidden" name="date" value="<?php echo $date;?>">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-primary">Reset</button>
						<hr>
						</div>
				</form>
		</div>
	</body>
</html>