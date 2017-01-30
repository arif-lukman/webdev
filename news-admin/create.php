<?php
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

	//ambil parameter
	$title = $_POST["title"];
	$content = $_POST["content"];
	$date = date('Y-m-d');
	$time = date('H:i:s');

	//define sql command
	$sql = "INSERT INTO news (title, content, date, time) VALUES ('$title', '$content', '$date', '$time')";

	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Saving Data Success');
		location='main_menu.php';
		</script>";
	}
	else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>