<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//include file koneksi
	$master = createConnection("localhost", "root", "", "_bpms_master");
	$vendor = createConnection("localhost", "root", "", "_bpms_vendor");

	//include privilege checker
	include "../controller/check_priv.php";

	//search processing
	//bikin array buat nampung tambahan string
	$arrStrs = array();
	//string tambahan
	$addition1 = "";
	$and = "";

	//cek parameter
	if(isset($_GET["keyword"]) && $_GET["keyword"] == "" && (isset($_GET["country"]) || isset($_GET["province"]))){
		$and = " and";
	}
	if(isset($_GET["keyword"]) && isset($_GET["country"]) || isset($_GET["province"])){
		$and = " and";
	}
	if(isset($_GET["keyword"]) && $_GET["keyword"] != ""){
		$and = " and";
	}

	//keyword
	if(isset($_GET["keyword"]) && $_GET["keyword"] != ""){
		array_push($arrStrs, " (data.Notes LIKE '%" . $_GET["keyword"] . "%' or user.nama_perusahaan LIKE '%" . $_GET["keyword"] . "%') ");
	}

	//negara
	if(isset($_GET["country"]) && $_GET["country"] != ""){
		array_push($arrStrs, " id_negara = '" . $_GET["country"] . "'");
	}

	//provinsi
	if(isset($_GET["province"]) && $_GET["province"] != ""){
		array_push($arrStrs, " id_propinsi = '" . $_GET["province"] . "'");		
	}

	$addition1 = implode(" and ", $arrStrs);

	//ambil max user id
	$result1 = getResults("SELECT MAX(id) as id FROM tbl_user", $vendor)->fetch_assoc();
	$maxId = $result1["id"];

	//ambil nilai max data id dari masing2 user id
	$arrMaxIds = array();
	for($i = 0; $i <= $maxId; $i++){
		$result2 = getResults("SELECT MAX(id_pengajuan) as id FROM data_pengajuan WHERE id_user='$i'", $vendor)->fetch_assoc();
		$maxDataId = $result2["id"];
		if($maxDataId != "" || $maxDataId != 0){
			array_push($arrMaxIds, $maxDataId);
		}
	}

	//default sql command
	$sql = $sqlCommand;

	//ambil data terkait nilai data id diatas
	for($i = 0; $i < sizeof($arrMaxIds); $i++){
		if($i == 0){
			$addition = " and (data.No = '$arrMaxIds[$i]'";
		}
		else{
			$addition = " or data.No = '$arrMaxIds[$i]'";	
		}		
		$sql .= $addition;
	}
	$sql .= ")" . $and . $addition1;

	//ambil nama field
	$fieldNames = getResults("SELECT column_name FROM `information_schema`.`columns` WHERE `table_schema` = '_bpms_vendor' AND `table_name` IN ('tbl_user', 'pengajuan') AND (column_name = 'No' OR column_name = 'nama_perusahaan' OR column_name = 'Date' OR column_name = 'Registration_Status' OR column_name = 'Notes')", $master);

	//ambil isi field
	$fieldValues = getResults($sql, $vendor);

	//push isi field ke array
	$allValues = pushArray($fieldValues);
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
			createNavbar(setActiveNav($NAVBAR, "proposals.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Status Pengajuan</h3><hr>
				<form action="proposals.php">
					<?php
						echo createInputFieldB("text", "Kata kunci:", "keyword", "keyword", "", "col-sm-12", false, "");
						echo createSelectOptionById("Negara:", "country", "country", "---- Pilih Negara ----", $master, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", false, "", "col-sm-6", false, "", "onchange = \"getProvince('country', 'province', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id as _id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._id = ', ' ORDER BY _province._order ASC', '../controller/combobox2.php')\"");
						echo createSelectOptionById("Provinsi:", "province", "province", "---- Pilih Negara Terlebih Dahulu ----", $master, "", false, "", "col-sm-6", false, "", "");
					?>
					<center><input type="submit" value="Search"></center>
					<br>
				</form>
				<?php
					//echo $sql;
					echo "
						<table class='table table-bordered'>
							<thead>
								<tr>
						";
								while ($colNames = $fieldNames->fetch_assoc()){
									if($colNames['column_name']!="hidden_id"){
										echo "
										<th>$colNames[column_name]</th>
										";
									}
								}
						echo "
								</tr>
							</thead>
							<tbody>
						";
						while($colValues = $fieldValues->fetch_assoc()){
							echo "<tr>";
							foreach($allValues as $item){
								if($item != "hidden_id"){
									echo "<td>$colValues[$item]</td>";
								}								
							}
							echo "
								<td><a href=\"../forms/proposals.php?No=$colValues[_id]&NP=$colValues[nama_perusahaan]\">respond</a></td>
								<td><a href=\"../dataperusahaanadmin/dataperusahaan.php?uid=$colValues[hidden_id]\">info</td>
							";
							echo "</tr>";
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