<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//ambil parameter
	$nama = $_POST["nama"];
	$desc = $_POST["desc"];
	$email = $_POST["email"];
	$email2 = $_POST["email2"];
	$emailp = $_POST["emailp"];
	$ttd = $_POST["ttd"];
	$footer = $_POST["footer"];

	//image processor
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	$img_name = basename($_FILES["image"]["name"]);

	//cek tabel, kalo kosong create, kalau berisi update
	$cek = "SELECT * FROM _general_cfg";
	$result = $conn->query($cek);
	$count = $result->num_rows;
	if($count==0){
		$sql = "INSERT INTO _general_cfg (_nama_app, _desc, _email_1, _email_2, _email_proc, _ttd_skt, _footer_txt, _img) VALUES('$nama', '$desc', '$email', '$email2', '$emailp', '$ttd', '$footer', '$img_name')";
	}
	else{
		$sql = "UPDATE _general_cfg SET _nama_app='$nama', _desc='$desc', _email_1='$email', _email_2='$email2', _email_proc='$emailp', _ttd_skt='$ttd', _footer_txt='$footer', _img='$img_name' WHERE _id=1";
	}
	
	//proses commandnya
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='../cfg_gen.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}
?>