<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//create connection
	$conn1 = createConnection("localhost","root","","_bpms_vendor");
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
			createNavbar(setActiveNav(NAVBAR, "expiry.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Dokumen Kadaluarsa</h3><hr>
				<form action="search_stat.php">
					<?php
						echo createInputField("text", "Kata kunci:", "keyword", "keyword", "", "", false, "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", false, "", "", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Propinsi---", $conn, "SELECT _id, _nama as _name FROM _province", false, "", "", false, "");
					?>
					<input type="submit" value="Search">
				</form>
				<?php
					//ambil jumlah user
					$result1 = getResults("SELECT id, nama_perusahaan FROM tbl_user", $conn1);
					$count = 0;
					echo "
						<table class='table table-bordered'>
							<thead>
								<td>Perusahaan</td>
								<td>Expired Date</td>
								<td>Expiration Days</td>
								<td>Document Type</td>
							</thead>
							<tbody>
								";
					while($data = $result1->fetch_assoc()){
						$result2 = getResults("SELECT dokumen_administrasi.Expired_Date, dokumen_administrasi.Document_Type FROM dokumen_administrasi, tbl_user, data_dokumen_administrasi WHERE tbl_user.id = data_dokumen_administrasi.id_user and dokumen_administrasi.No = data_dokumen_administrasi.id_dokumen_administrasi and tbl_user.id = '$data[id]'", $conn1);
						$rowspan = $result2->num_rows;
						if(!$rowspan){
							echo "
								<tr>
									<td rowspan='" . $rowspan . "'>" . $data['nama_perusahaan'] . "</td>
									<td>" . $data2['Expired_Date'] . "</td>
									<td></td>
									<td>" . $data2['Document_Type'] . "</td>
								</tr>
							";
						}
						while($data2 = $result2->fetch_assoc()){
							if($count == 0){
								echo "
									<tr>
										<td rowspan='" . $rowspan . "'>" . $data['nama_perusahaan'] . "</td>
										<td>" . $data2['Expired_Date'] . "</td>
										<td></td>
										<td>" . $data2['Document_Type'] . "</td>
									</tr>
								";
								$count++;
							}
							else{
								echo "
									<tr>
										<td>" . $data2['Expired_Date'] . "</td>
										<td></td>
										<td>" . $data2['Document_Type'] . "</td>
									</tr>
								";
							}
						}
						$count = 0;
					}
					echo "
							</tbody>
						</table>
					";
				?>
			</div>
		</div>
	</body>
</html>