<?php
	$host="localhost";
	$username="root";
	$password="";
	$db="webdev";
	mysql_connect($host,$username,$password) or die ("Koneksi GAGAL");
	mysql_select_db($db) or die ("database tidak bisa dipilih");
?>