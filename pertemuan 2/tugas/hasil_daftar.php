<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container text-center mt-5 mb-4">
		<h2>Data Pendaftar</h2>
		<table class="table table-striped table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
				 if (isset($_POST['proses'])) {
					 $proses = $_POST['proses'];
					 $nama_lengkap = $_POST['nama_lengkap'];
					 $email = $_POST['email'];
					 $alamat = $_POST['alamat'];
					 $telepon = $_POST['Telepon'];
					 
					 $jumlah_data = 2;
					 $nomor_urutan = $jumlah_data + 1;
				 
					 echo "<tr>";
					 echo "<td>$nomor_urutan</td>";
					 echo "<td>$nama_lengkap</td>";
					 echo "<td>$email</td>";
					 echo "<td>$alamat</td>";
					 echo "<td>$telepon</td>";
					 echo "</tr>";
				 }
				
				?>

			</tbody>
		</table>
	</div>
</body>
</html>