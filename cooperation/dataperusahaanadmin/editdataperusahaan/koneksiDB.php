<?php
//yo mamen

$host = "localhost";

$username = "root";

$password = "";

$database = "_bpms_vendor";

$koneksi = mysql_connect($host, $username, $password);

mysql_select_db($database, $koneksi) or die( "MySQL Gagal Koneksi" );

?>