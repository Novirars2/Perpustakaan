<?php 
	//input teksfield dalam variabel
echo " Nama : Novira Ramadhani Safitri<br>";
echo " Rombel : X-RPL-1<br>";
echo "<br>";
	$angka1 = @$_POST['bangka1'];
	$angka2 = @$_POST['bangka2'];
	$Hasil	= @$_POST['hasil'];

	if (isset($_POST['nambah'])){
		$Hasil = $angka1 + $angka2;
	}
	if (isset($_POST['nkurang'])){
		$Hasil = $angka1 - $angka2;
	}
	if (isset($_POST['nkali'])){
		$Hasil = $angka1 * $angka2;
	}
	if (isset($_POST['nbagi'])){
		$Hasil = $angka1 / $angka2;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
		<form method="post">
			<table align="center" border="2">
			<tr>
				<td colspan="3" bgcolor="brown"> Kalkulator Sederhana Novira</td>
			</tr>
			<tr>
				<td colspan="3"></td>
			</tr>
			<tr>
				<td>Angka 1</td>
				<td>:</td>
				<td><input type="text" name="bangka1" value="<?=$angka1?>"></td>
			</tr>
			<tr>
				<td>Angka 2</td>
				<td>:</td>
				<td><input type="text" name="bangka2" value="<?=$angka2?>"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="nambah" value="+">
					<input type="submit" name="nngurang" value="-">
					<input type="submit" name="nkali" value="*">
					<input type="submit" name="nbagi" value="/">
				</td>
			</tr>
			<tr>
				<td>Hasil</td>
				<td>:</td>
				<td><input type="text" name="bhasil" value="<?=$Hasil?>"></td>
			</tr>
			<tr>
				<td colspan="3"></td>
			</tr>
		</table>
		</form>
</body>
</html>