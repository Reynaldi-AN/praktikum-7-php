<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan 1</title>
</head>

<body>
	<h2>Menampilkan data mahasiswa</h2>
	<br/>
	<h4>Tambah Data Mahasiswa</h4>
	<form method="post"action="tambah_aksi2.php">
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
			
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
		<?php
		include'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select*from mahasiswa");
		while($d= mysqli_fetch_array($data)){ 
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $d['nim'];?></td>
			<td><?php echo $d['nama'];?></td>
			<td><?php echo $d['alamat'];?></td>
		</tr>
		<?php
		}
		?>
	
		</table>
	</form>
</body>
</html>