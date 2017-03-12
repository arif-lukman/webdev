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

	$a = "salah cuks";
	$options = "";
	$default = "<option disabled selected hidden>" . $default_text . "</option>";
	if($sql != ""){
		$result1 = getResults($sql, $conn);
		while($data1 = $result1->fetch_assoc()){
			if($allowChecking && ($param == $data1["_name"] || $param == $data1["_id"])){
				$options = $options . "<option selected>" . $data1["_name"] . "</option>";
			}
			else{
				$options = $options . "<option>" . $data1["_name"] . "</option>";
			}
			$a = $data1["_name"];
		}
	}

	echo $a;
?>