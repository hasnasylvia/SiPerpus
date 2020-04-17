<?php 	

include '../koneksi.php';
include 'proses-edit.php';
include '../asset/header.php';

$id_anggota = $_GET["id_anggota"];

$query = mysqli_query($koneksi, "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota = $id_anggota");

$anggota = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Edit Data Anggota </h2>
  </div>

	<center>
		<br/>

		<h3> EDIT DATA ANGGOTA PERPUSTAKAAN</h3>

		<form action="" method="post">
			<table>
				<input type="hidden" name="id_anggota" value="<?= $anggota['id_level']; ?>">
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="nama">Nama</label>
	    					<input type="text" class="form-control" name="nama" value="<?= $anggota['nama']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="kelas">Kelas</label>
	    					<input type="text" class="form-control" name="kelas"  value="<?= $anggota['kelas']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="telp">Telepon</label>
	    					<input type="text" class="form-control" name="telp"  value="<?= $anggota['telp']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="username">Username</label>
	    					<input type="text" class="form-control" name="username"  value="<?= $anggota['username']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="password">Password</label>
	    					<input type="password" class="form-control" name="password"  value="<?= $anggota['password']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<br>

				<tr>
					<td> <button type="submit" class="btn btn-primary" name="simpan"> EDIT </button> </td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<br>

	</center>



<?php 	

include '../asset/footer.php';

?>