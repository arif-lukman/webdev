<?php
	//include library
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	$sql = $_POST["command"];
	$default_text = $_POST["default_text"];
	$allowChecking = $_POST["allowChecking"];
	$param = $_POST["param"];

	$options = "";
	$default = "<option disabled selected hidden>" . $default_text . "</option>";
	$options .= $default;
	if($sql != ""){
		$result1 = getResults($sql, $conn);
		while($data1 = $result1->fetch_assoc()){
			if($allowChecking && ($param == $data1["_name"] || $param == $data1["_id"])){
				$options = $options . "<option value='" . $data1["_id"] . "' selected>" . $data1["_name"] . "</option>";
			}
			else{
				$options = $options . "<option value='" . $data1["_id"] . "'>" . $data1["_name"] . "</option>";
			}
		}
	}

	echo $options;
?>