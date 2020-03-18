<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan 2</title>
</head>

<body>
	<h2>Menambahkan data mahasiswa</h2>
	<br/>
	<a href = "latihan1.php">kembali</a>
	<h3>Tambah Data Mahasiswa</h3>
	<form method="post"action="tambah_aksi.php">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>