<?php
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)) {
		$sql = mysqli_query($connect, "SELECT * FROM user WHERE username = '$1' AND password = '$2'");
		$result = mysqli_num_rows($sql);
		if ($result) {
			echo "Anda berhasil masuk!";
			echo "Klik <a href='index.php'>disini</a> untuk melanjutkan";
		} else {
			echo "Username dan Password salah";
		}
	} else {
		echo "Email dan Password anda kosong, silahkan diisi.";
	}
?>