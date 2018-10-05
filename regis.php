<!DOCTYPE html>
<html>
<head>
	<title> REGISTRASI </title>
</head>
<body>
	<center>
		<br>
		<h1><b> REGISTRASI </b></h1>
	<form action="" method="POST">
		<table>
		<tr>
			<td>NIM</td>
			<td> : </td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> : </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td colspan="6"><br><br><center><input type="submit" name="submit" value=" kirim"></td></center>
		</tr>
	</table>
</form>
</center>
</body>
</html>

<?php
session_start();
$data = mysqli_connect('localhost','root','','d_modul5');
if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$_SESSION["nama"] = $nama;
	$_SESSION["nim"] = $nim;
	if($nim==is_numeric($nim)){
		if(strlen($nim)==10 && strlen($nama)<=20 && filter_var($email, FILTER_VALIDATE_){
			$cek="INSERT INTO t_jurnal1(NIM,Nama,Email)VALUES($nim,'$nama','$email')";
			if(mysqli_query($data,$cek)){
				echo "<script language = 'javascript'>alert)('Inputan Sukses!');document.Location('komen.php');</script>";
			}else{
				echo "<script language = 'javascript'>alert)('NIM HARUS ANGKA');document.Location('regis.php');</script>";
			}
		}else{
			echo "<script language = 'javascript'>alert)('Inputan Gagal');document.Location('regis.php');</script>";
	}else{
		echo "<script language = 'javascript'>alert)('NIM HARUS ANGKA');document.Location('regis.php');</script>";
	}
}
}
?>