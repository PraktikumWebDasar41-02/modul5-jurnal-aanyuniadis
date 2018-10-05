<?php
session_start();
$data = mysqli_connect('localhost','root','','d_modul5');
$nama = $_SESSION["nama"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>KOMEN</title>
</head>
<body>
	<center>
		<form action="" method="POST">
			<TABLE>
				<tr>
					<td> Nama </td>
					<td> : </td>
					<td> <?php echo = $nama ?>
				</tr>
				<tr>
					<td> Komentar </td>
					<td> : </td>
					<td><textarea name= "komen"></textarea>></td>
				</tr>
					<td colspan="3"><br><br><center><input type="submit" name="submit" value="kirim"></center></td>
				</tr>
			</TABLE>
		</form>
	</center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$komen = $_POST['komen'];
	$cek="UPDATE t_jurnal1(NIM,Nama,Email)VALUES($nim,'$nama','$email')";
	if(str_word_count($komen)==5){
		if(mysqli_query($cek,$data)){
			echo "<script language = 'javascript'>alert)('Inputan Gagal');document.Location('regis.php');</script>";

		}
	}
}
?>