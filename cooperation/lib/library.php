<?php
	/*<=====================================================Function buat multiform===========================================================>*/

	//fungsi cek isi field
	function setField($value){
		if(!isset($value))
			return "";
		else
			return $value;
	}

	//fungsi cek yes/no
	function check($value){
		if($value){
			return "selected";
		}
	}

	//fungsi set teks tombol
	function setButtonText($op){
		if($op == "update"){
			return "Update";
		}
		else{
			return "Create";
		}
	}

	//fungsi set target form
	function setTarget($op, $id){
		if($op == "update")
			return "../controller/admins.php?op=update&id=" . $id;
		else
			return "../controller/admins.php?op=create";
	}

	//fungsi cek yes/no
	function checkBox($field){
		if($field){
			return "checked";
		}
	}
?>