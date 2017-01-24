<?php
	include "koneksi.php";

	$filename = "datatableSPRL.xls";

	//Download file
	header("Content-Disposition: attachment; filename=\"$filename\"");
	header("Content-Type: application/vnd.ms-excel");
	$query = mysql_query("SELECT * FROM sot_sprl");

	//Write data to file
	$flag = false;
	while($row = mysql_fetch_assoc($query)){
		if(!$flag){
			//display field/column names as first row
			echo implode("\t", array_keys($row)) . "\r\n";
			$flag = true;
		}
		echo implode("\t", array_values($row)) . "\r\n";
	}
?>