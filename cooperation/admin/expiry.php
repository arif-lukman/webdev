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
	$conn2 = createConnection("localhost", "root", "", "_bpms_master");

	//search processing
	//bikin array buat nampung tambahan string
	$arrStrs = array();
	//string tambahan
	$addition = "";
	$where = "";

	if($_GET["keyword"] == "" && (isset($_GET["country"]) || isset($_GET["province"]))){
		$where = " WHERE";
	}
	if(isset($_GET["keyword"]) && isset($_GET["country"]) || isset($_GET["province"])){
		$where = " WHERE";
	}
	if(isset($_GET["keyword"]) && $_GET["keyword"] != ""){
		$where = " WHERE";
	}

	//search processing
	if(isset($_GET["keyword"]) && $_GET["keyword"] != ""){
		array_push($arrStrs, " nama_perusahaan LIKE '%" . $_GET["keyword"] . "%'");
	}

	//negara
	if(isset($_GET["country"]) && $_GET["country"] != ""){
		array_push($arrStrs, " id_negara = '" . $_GET["country"] . "'");
	}

	//provinsi
	if(isset($_GET["province"]) && $_GET["province"] != ""){
		array_push($arrStrs, " id_propinsi = '" . $_GET["province"] . "'");		
	}

	$addition = implode(" and ", $arrStrs);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			//inisialisasi head
			initHead();
		?>
		<script src="../../assets/js/functions.js"></script>
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "expiry.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Dokumen Kadaluarsa</h3><hr>
				<form action="expiry.php">
					<?php
						echo createInputFieldB("text", "Kata kunci(Nama Perusahaan):", "keyword", "keyword", "", "col-sm-12", false, "");
						echo createSelectOptionById("Negara:", "country", "country", "---- Pilih Negara ----", $conn2, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", false, "", "col-sm-6", false, "", "onchange = \"getProvince('country', 'province', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id as _id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._id = ', ' ORDER BY _province._order ASC', '../controller/combobox2.php')\"");
						echo createSelectOptionById("Provinsi:", "province", "province", "---- Pilih Negara Terlebih Dahulu ----", $conn2, "", false, "", "col-sm-6", false, "", "");
					?>
					<center><input type="submit" value="Search"></center>
					<br>
				</form>
				<?php					
					//ambil jumlah user
					$sql = "SELECT id, nama_perusahaan FROM tbl_user";
					$sql .= $where . $addition;
					//echo $sql;
					$result1 = getResults($sql, $conn1);
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
					//echo $sql;
					while($data = $result1->fetch_assoc()){
						$sql2 = "SELECT dokumen_administrasi.Expired_Date, dokumen_administrasi.Document_Type FROM dokumen_administrasi, tbl_user, data_dokumen_administrasi WHERE tbl_user.id = data_dokumen_administrasi.id_user and dokumen_administrasi.No = data_dokumen_administrasi.id_dokumen_administrasi and tbl_user.id = '$data[id]'";
						$result2 = getResults($sql2, $conn1);
						$rowspan = $result2->num_rows;
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