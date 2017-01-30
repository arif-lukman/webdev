<?php
	$id = $_GET["id"];
	$title = $_POST["title"];
	$content = $_POST["content"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webdev";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE news
	SET title = '$title', content = '$content'
	WHERE ID = '$id'";

	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Update Data Success');
		</script>";
	} else {
	    echo "<script> alert('Update Data Gagal');
		</script>";
	}

	$conn->close();
	header("location:main_menu.php");
?>