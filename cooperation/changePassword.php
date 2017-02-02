<?php

require_once "koneksiDB.php";

$passwordlama = $_POST['passwordlama'];

$passwordbaru = $_POST['passwordbaru'];

$konfirmasipassword = $_POST['konfirmasipassword'];

$username = $_POST['username'];

$cekuser = "select * from tbl_user where username = '$username' and password = '$passwordlama'";

$querycekuser = mysql_query($cekuser);

$count = mysql_num_rows($querycekuser);

if ($count >= 1){

$updatepassword = "update tbl_user set password = '$passwordbaru' where username = '$username'";

$updatequery = mysql_query($updatepassword);

if($updatequery === TRUE)
		echo "<script> alert('Change Password Success');
		</script>";
		
	} else {
	    echo "<script> alert('Change Password Gagal');
		</script>";

	}

?>
<script>
 window.location=history.go(-1);
 </script>