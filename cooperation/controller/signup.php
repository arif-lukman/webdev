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

	//coba ngirim email

	//susun stringnya dulu
	$mailstr = "
	<h2>.:Permohonan Registrasi Vendor</h2>
	<br>
	Kepada Yth.<br>
	Panitia Pengadaan<br>
	PT SPR Langgak<br>
	AD Primer, 8th floor<br>
	Jl. TB Simatupang No.5 – JAKARTA 12550<br><br>
	Dengan Hormat,<br>
	Saya yang bertandatangan di bawah ini:<br><br>
	Nama = " . $nama . "<br>
	Jabatan = " . $jabatan . "<br>
	Nama Perusahaan = " . $nama_perusahaan . "<br>
	Alamat = " . $alamat . "<br>
	Negara = " . $negara . "<br>
	Provinsi = " . $provinsi . "<br>
	Email = " . $email . "<br>
	NPWP = " . $npwp."<br><br><br>
	Menyatakan bahwa perusahaan kami berminat untuk menjadi rekanan PT SPR Langgak dan bersedia untuk mematuhi semua peraturan yang berlaku di PT SPR Langgak dan pasal-pasal yang terkait di dalam Pedoman Tata Kerja No. 007 yang dikeluarkan oleh BPMigas.<br><br>
	Atas perhatian dan kerjasamanya kami ucapkan terima kasih.";

	//define parameternya
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mailer639@gmail.com';
    $mail->Password = 'returnslash';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('mailer639@gmail.com', 'SPR Langgak Procurement');
    $mail->addAddress('mailertester98@gmail.com');
    $mail->addReplyTo('mailertester98@gmail.com', 'Information');
    $mail->isHTML(true);
    $mail->Subject = 'SPR Langgak Procurement';
    $mail->Body = $mailstr;
    $mail->AltBody = $mailstr;
    
    //kirim mail
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo "<script> alert('Registrasi Berhasil! Silahkan tunggu email dari administrator. Terima kasih telah mendaftar.');
		location='../';
		</script>";
    }
?>