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
			createNavbar(setActiveNav(NAVBAR, "companies.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Data Perusahaan</h3><hr>
				<form action="search_comp.php" method="post">
					<?php
						echo createInputField("text", "Kata kunci:", "keyword", "keyword", "", "", false, "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", false, "", "", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Propinsi---", $conn, "SELECT _id, _nama as _name FROM _province", false, "", "", false, "");
						echo createSelectOption("Klasifikasi:", "class", "class", "---Pilih Klasifikasi Perusahaan---", $conn, "SELECT _id, _judul as _name FROM _class_type", false, "", "", false, "");
						echo createSelectOption("Kualifikasi:", "qual", "qual", "---Pilih Kualifikasi Perusahaan---", $conn, "SELECT _id, _judul as _name FROM _qual_type", false, "", "", false, "");
					?>
					<input type="submit" value="Search">
				</form>
				<br>
				<?php
					//ambil jumlah user
					$result1 = getResults("SELECT id, nama_perusahaan FROM tbl_user", $conn1);
					$count = 0;
					echo "
						<table class='table table-bordered'>
							<thead>
								<td>Perusahaan</td>
								<td>Klasifikasi</td>
								<td>Pengalaman (dlm 7 tahun)</td>
								<td>Kualifikasi</td>
								<td>Status</td>
							</thead>
							<tbody>
								";
					while($data = $result1->fetch_assoc()){
						$result2 = getResults("SELECT pengalaman_perusahaan.Sub_Classification, klasifikasi_perusahaan.Description, pengalaman_perusahaan.Value, nama_dan_tipe_perusahaan.Company_Qualification FROM pengalaman_perusahaan, data_pengalaman_perusahaan, klasifikasi_perusahaan, data_klasifikasi_perusahaan, tbl_user, nama_dan_tipe_perusahaan, data_nama_dan_tipe_perusahaan WHERE pengalaman_perusahaan.No = data_pengalaman_perusahaan.id_pengalaman_perusahaan and klasifikasi_perusahaan.No = data_klasifikasi_perusahaan.id_klasifikasi_perusahaan and nama_dan_tipe_perusahaan.No = data_nama_dan_tipe_perusahaan.id_nama_dan_tipe_perusahaan and data_pengalaman_perusahaan.id_user = tbl_user.id and data_klasifikasi_perusahaan.id_user = tbl_user.id and data_nama_dan_tipe_perusahaan.id_user = tbl_user.id and klasifikasi_perusahaan.Sub_Classification = pengalaman_perusahaan.Sub_Classification and tbl_user.id = '$data[id]'", $conn1);
						$rowspan = $result2->num_rows;
						while($data2 = $result2->fetch_assoc()){
							if($count == 0){
								echo "
									<tr>
										<td rowspan='" . $rowspan . "'>" . $data['nama_perusahaan'] . "</td>
										<td>" . $data2['Sub_Classification'] . "</td>
										<td>" . $data2['Description'] . "</td>
										<td rowspan='" . $rowspan . "'>" . $data2['Company_Qualification'] . "</td>
									</tr>
								";
								$count++;
							}
							else{
								echo "
									<tr>
										<td>" . $data2['Sub_Classification'] . "</td>
										<td>" . $data2['Description'] . "</td>
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