<?php
	//ambil user id
	$uid = $_SESSION["uid"];

	//ambil privilege dari user id
	$sql = "SELECT _group_priv._id FROM _admin, _group_priv WHERE _admin._group_id = _group_priv._id and _admin._id = '$uid'";
	$data = getResults($sql, $conn)->fetch_assoc();

	if($data["_id"] == 5){
		$NAVBAR = NAVBAR2;
	}
	else{
		$NAVBAR = NAVBAR;
	}
?>