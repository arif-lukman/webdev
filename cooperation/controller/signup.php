<?php
	//includes
	include "../lib/library.php";
	require "../lib/PHPMailer/PHPMailerAutoload.php";

	//get parameters
	$nama = $_POST["nama"];
	$jabatan = $_POST["jabatan"];
	$nama_perusahaan = $_POST["nama_perusahaan"];
	$alamat = $_POST["alamat"];
	$negara = $_POST["negara"];
	$provinsi = $_POST["provinsi"];
	$email = $_POST["email"];
	$npwp = $_POST["npwp"];

	//process

	//debug doang kaga usah di perhatiin
	/*
	echo $nama;
	echo "<br>";
	echo $jabatan;
	echo "<br>";
	echo $nama_perusahaan;
	echo "<br>";
	echo $alamat;
	echo "<br>";
	echo $negara;
	echo "<br>";
	echo $provinsi;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $npwp;
	echo "<br>";
	*/

	//coba ngirim email

	//susun stringnya dulu
	$mailstr = "Nama = " . $nama . "<br>
	Jabatan = " . $jabatan . "<br>
	Nama Perusahaan = " . $nama_perusahaan . "<br>
	Alamat = " . $alamat . "<br>
	Negara = " . $negara . "<br>
	Provinsi = " . $provinsi . "<br>
	Email = " . $email . "<br>
	NPWP = " . $npwp;
	//echo $mailstr;

	//define parameternya
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';  									// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                        						// Enable SMTP authentication
    $mail->Username = 'mailer639@gmail.com';                 			// SMTP username
    $mail->Password = 'returnslash';                           			// SMTP password
    $mail->SMTPSecure = 'tls';                            				// Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    				// TCP port to connect to
    $mail->setFrom('mailer639@gmail.com', 'SPR Langgak Procurement');
    $mail->addAddress('yuraikitsuki@gmail.com');               			// Name is optional
    $mail->addReplyTo('yuraikitsuki@gmail.com', 'Information');
    $mail->isHTML(true);                                  				// Set email format to HTML
    $mail->Subject = 'SPR Langgak Procurement';
    $mail->Body    = $mailstr;
    $mail->AltBody = $mailstr;
    //$mail->Body    = 'Hola como estas!';
    //$mail->AltBody = 'Hola como estas!';
    //kirim mail
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

	//mail("goodgamerasep@gmail.com", "SPR Langgak", "halo");
?>