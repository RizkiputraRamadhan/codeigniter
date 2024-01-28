<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Mahasiswa</title>
</head>
<body style="text-align: center;">
	<h2>Data Mahasiswa</h2>
	<table border="2" style="margin: 0 auto;">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>kelas</th>
			<th>Program Studi</th>
			<th>Email</th>
			<th>Pilihan</th>
		</tr>
		<?php foreach ($mahasiswa as $i => $mhs) { ?>
		<tr>
			<td><?php echo $i+1 ?></td>
			<td> <?php echo $mhs['nim']; ?> </td>
			<td><?php echo $mhs['nama']; ?></td>
			<td><?php echo $mhs['kelas']; ?></td>
			<td><?php echo $mhs['prodi']; ?></td>
			<td><?php echo $mhs['email']; ?></td>
			<td> <a href="<?php echo site_url('mahasiswa/delete/'.$mhs['nim']) ?>">Hapus</a> </td>
		</tr>
		<?php }?>
	</table>
</body>
</html>
