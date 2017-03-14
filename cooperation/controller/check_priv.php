<?php
	//ambil user id
	$uid = $_SESSION["uid"];

	//ambil privilege dari user id
	$sql = "SELECT _group_priv._id FROM _admin, _group_priv WHERE _admin._group_id = _group_priv._id and _admin._id = '$uid'";
	$data = getResults($sql, $master)->fetch_assoc();

	if($data["_id"] == 5){
		$NAVBAR = NAVBAR2;
		$sqlCommand = "SELECT data.No as _id, data.Date, data.Registration_Status, data.Notes, user.nama_perusahaan, user.id as hidden_id FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan and (data.Registration_Status = 'Final Approved' or data.Registration_Status = 'Approved')";
		$optionContent = "<option>Need Revision</option>
								<option>Final Approved</option>";
	}
	else{
		$NAVBAR = NAVBAR;
		$sqlCommand = "SELECT data.No as _id, data.Date, data.Registration_Status, data.Notes, user.nama_perusahaan, user.id as hidden_id FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan";
		$optionContent = "<option>Need Revision</option>
								<option>Approved</option>";
	}
?>