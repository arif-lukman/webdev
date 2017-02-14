<?php
	//include library
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//bikin array default
	$default = array(0, 0, 0, 0, 0);

	//ambil parameter
	$admin = $_POST['Admin'] + $default;
	$daten = $_POST['DataEntry'] + $default;
	$viewer = $_POST['Viewer'] + $default;
	$editor = $_POST['Editor'] + $default;
	$proc = $_POST['Procurement'] + $default;

	//push parameter ke satu array
	$input = array();
	array_push($input, $admin, $daten, $viewer, $editor, $proc);

	print_r($input);
	//print_r($admin);
	//print_r($daten);
	//print_r($viewer);
	//print_r($editor);
	//print_r($proc);
	//$sql = "UPDATE _group_priv SET WHERE";

	//update tabel
	for($i = 0; $i<sizeof($default); $i++){
		$sql = "update _group_priv set _view=" . $input[$i][0] . ", _add=" . $input[$i][1] . ", _edit=" . $input[$i][2] . ", _delete=" . $input[$i][3] . ", _setting=" . $input[$i][4] . " where _id=" . ($i+1);
		execCud($sql, $conn, "../groups.php");
	}
?>