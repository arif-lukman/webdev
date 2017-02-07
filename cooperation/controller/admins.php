<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//ambil parameter
	//parameter operasi: create/update/delete
	$op = $_GET["op"];
	echo $op;
	//parameter id
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		echo $id;
	}

	//cek operasi
	if($op == "create" || $op == "update"){
		//ambil parameter
		$uname = $_POST["uname"];
		$fname = $_POST["fname"];
		$email = $_POST["email"];
		$pswrd = $_POST["pswrd"];
		$grup = $_POST["grup"];
		$stat = $_POST["stat"];
		$desc = $_POST["desc"];

		if($op == "create"){
			//sql create
			$sql = "INSERT INTO _admin(_username, _fullname, _email, _password, _group_id, _status, _desc) VALUES ('$uname', '$fname', '$email', '$pswrd', '$grup', '$stat', '$desc')";
		}
		else if($op == "update"){
			//sql update
			$sql = "UPDATE _admin SET _username='$uname', _fullname='$fname', _email='$email', _password='$pswrd', _group_id='$grup', _status='$stat', _desc='$desc' WHERE _id='$id'";
		}
	}
	else if($op == "delete"){
		//sql delete
		$sql = "DELETE FROM _admin WHERE _id='$id'";
	}

	echo $sql;

	//eksekusi
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Saving Data Success');
		location='../admins.php';
		</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}
?>