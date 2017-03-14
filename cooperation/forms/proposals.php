<?php
	//include
	include "../koneksiDB.php";
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//create connection
	$master = createConnection("localhost", "root", "", "_bpms_master");
	$vendor = createConnection("localhost", "root", "", "_bpms_vendor");

	//cek privilege
	include "../controller/check_priv.php";

	//ambil parameter
	$No = $_GET["No"];
	$NP = $_GET["NP"];

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM pengajuan";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT data.* FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan and user.nama_perusahaan = '$NP'";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}

	$date = date('Y-m-d');
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
								<?php echo $optionContent;?>
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

				<table class="table table-bordered">
					<!--nama field-->
					<thead>
					<tr style="font-size:9px">
						<?php
						while ($colNames = mysql_fetch_array($colExec)){
							echo "
							<th>$colNames[Field]</th>
							";
						}
						?>
					</tr>
					</thead>
						<tbody>
						<?php
							while($conNames = mysql_fetch_array($conExec)){
								echo "<tr>";
									foreach($all_prop as $item){
									echo "<td>$conNames[$item]</td>";
								}
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
		</div>
	</body>
</html>