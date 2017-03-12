<?php
	//include library
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//$sql = $_POST["command"];
	$pattern = $_POST["pattern"];
	$sql = "SELECT _id, CONCAT(_kode, ' - ', _judul) as _name FROM _class_type WHERE LENGTH(_kode) > 3 and _kode LIKE '%" . $pattern . "%' ORDER BY _order ASC";
	$default_text = $_POST["default_text"];
	$allowChecking = $_POST["allowChecking"];
	$param = $_POST["param"];

	$a = "biasa cuks";
	$options = "";
	$default = "<option disabled selected hidden>" . $default_text . "</option>";
	$options .= $default;
	if($sql != ""){
		$result1 = getResults($sql, $conn);
		while($data1 = $result1->fetch_assoc()){
			if($allowChecking && ($param == $data1["_name"] || $param == $data1["_id"])){
				$options = $options . "<option selected>" . $data1["_name"] . "</option>";
			}
			else{
				$options = $options . "<option>" . $data1["_name"] . "</option>";
			}
		}
	}

	echo $options;
?>