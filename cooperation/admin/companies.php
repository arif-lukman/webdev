<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//create connection
	$master = createConnection("localhost", "root", "", "_bpms_master");
	$vendor = createConnection("localhost", "root", "", "_bpms_vendor");

	//include privilege checker
	include "../controller/check_priv.php";

	//search processing
	//bikin array buat nampung tambahan string
	$arrStrs1 = array();
	$arrStrs2 = array();
	//string tambahan
	$addition1 = "";
	$addition2 = "";
	$where = "";
	$and = "";

	if(isset($_GET["keyword"]) && $_GET["keyword"] == "" && (isset($_GET["country"]) || isset($_GET["province"]))){
		$where = " WHERE";
	}
	if(isset($_GET["keyword"]) && isset($_GET["country"]) || isset($_GET["province"])){
		$where = " WHERE";
	}
	if(isset($_GET["keyword"]) && $_GET["keyword"] != ""){
		$where = " WHERE";
	}

	if(isset($_GET["class"]) || isset($_GET["qual"])){
		$and = " and";
	}

	if(isset($_GET["keyword"]) && $_GET["keyword"] != ""){
		array_push($arrStrs1, " nama_perusahaan LIKE '%" . $_GET["keyword"] . "%'");
	}

	//negara
	if(isset($_GET["country"]) && $_GET["country"] != ""){
		array_push($arrStrs1, " id_negara = '" . $_GET["country"] . "'");
	}

	//provinsi
	if(isset($_GET["province"]) && $_GET["province"] != ""){
		array_push($arrStrs1, " id_propinsi = '" . $_GET["province"] . "'");		
	}

	if(isset($_GET["class"]) && $_GET["class"] != ""){
		array_push($arrStrs2, " pengalaman_perusahaan.Sub_Classification = '" . $_GET["class"] . "'");		
	}

	if(isset($_GET["qual"]) && $_GET["qual"] != ""){
		array_push($arrStrs2, " nama_dan_tipe_perusahaan.Company_Qualification = '" . $_GET["qual"] . "'");		
	}

	$addition1 = implode(" and ", $arrStrs1);
	$addition2 = implode(" and ", $arrStrs2);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			//inisialisasi head
			initHead();
		?>
		<script src="../../assets/js/functions.js"></script>
		<link rel="stylesheet" type="text/css" href="../../assets/css/style2.css">
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav($NAVBAR, "companies.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Data Perusahaan</h3><hr>
				<form action="companies.php">
					<?php
						echo createInputFieldB("text", "Kata kunci:", "keyword", "keyword", "", "col-sm-12", false, "");
						echo createSelectOptionById("Negara:", "country", "country", "---- Pilih Negara ----", $master, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", false, "", "col-sm-6", false, "", "onchange = \"getProvince('country', 'province', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id as _id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._id = ', ' ORDER BY _province._order ASC', '../controller/combobox2.php')\"");
						echo createSelectOptionById("Provinsi:", "province", "province", "---- Pilih Negara Terlebih Dahulu ----", $master, "", false, "", "col-sm-6", false, "", "");
						echo createSelectOptionByName("Klasifikasi:", "class", "class", "---Pilih Klasifikasi Perusahaan---", $master, "SELECT _id, CONCAT(_kode, ' - ', _judul) as _name FROM _class_type WHERE LENGTH(_kode) > 3", false, "", "col-sm-6", false, "", "");
						echo createSelectOptionByName("Kualifikasi:", "qual", "qual", "---Pilih Kualifikasi Perusahaan---", $master, "SELECT _id, _judul as _name FROM _qual_type", false, "", "col-sm-6", false, "", "");
					?>
					<center><input type="submit" value="Search"></center>
				</form>
				<br>
				<?php
					//ambil jumlah user
					$sql = "SELECT id, nama_perusahaan FROM tbl_user";
					$sql .= $where . $addition1;
					//echo $sql . "<br>";
					$result1 = getResults($sql, $vendor);
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
						$sql2 = "SELECT pengalaman_perusahaan.Sub_Classification, klasifikasi_perusahaan.Description, pengalaman_perusahaan.Value, nama_dan_tipe_perusahaan.Company_Qualification FROM pengalaman_perusahaan, data_pengalaman_perusahaan, klasifikasi_perusahaan, data_klasifikasi_perusahaan, tbl_user, nama_dan_tipe_perusahaan, data_nama_dan_tipe_perusahaan WHERE pengalaman_perusahaan.No = data_pengalaman_perusahaan.id_pengalaman_perusahaan and klasifikasi_perusahaan.No = data_klasifikasi_perusahaan.id_klasifikasi_perusahaan and nama_dan_tipe_perusahaan.No = data_nama_dan_tipe_perusahaan.id_nama_dan_tipe_perusahaan and data_pengalaman_perusahaan.id_user = tbl_user.id and data_klasifikasi_perusahaan.id_user = tbl_user.id and data_nama_dan_tipe_perusahaan.id_user = tbl_user.id and klasifikasi_perusahaan.Sub_Classification = pengalaman_perusahaan.Sub_Classification and tbl_user.id = '$data[id]'";
						$sql2 .= $and . $addition2;
						//echo $sql2;
						$result2 = getResults($sql2, $vendor);
						$rowspan = $result2->num_rows;
						while($data2 = $result2->fetch_assoc()){
							if($count == 0){
								echo "
									<tr>
										<td rowspan='" . $rowspan . "'>" . $data['nama_perusahaan'] . "</td>
										<td>" . $data2['Sub_Classification'] . "</td>
										<td>" . $data2['Description'] . "</td>
										<td rowspan='" . $rowspan . "'>" . $data2['Company_Qualification'] . "</td>
										<td rowspan='" . $rowspan . "'></td>
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