<?php 	

include '../koneksi.php';
include 'proses-edit1.php';
include '../asset/header.php';

$id_buku = $_GET["id_buku"];

$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku");

$buku = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Edit Data Buku </h2>
  </div>

<center>
		<br/>

		<h3> EDIT DATA BUKU PERPUSTAKAAN</h3>

		<form action="" method="post">
			<table>
				<input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="judul">Judul</label>
	    					<input type="text" class="form-control" name="judul" value="<?= $buku['judul']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="penerbit">Penerbit</label>
	    					<input type="text" class="form-control" name="penerbit"  value="<?= $buku['penerbit']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="pengarang">Pengarang</label>
	    					<input type="text" class="form-control" name="pengarang"  value="<?= $buku['pengarang']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="ringkasan">Ringkasan</label>
	    					<textarea type="text" class="form-control" name="ringkasan" required>
	    						<?= $buku['ringkasan']; ?>
	    					</textarea>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="stok">Stok</label>
	    					<input type="int" class="form-control" name="stok"  value="<?= $buku['stok']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
    						<label for="kategori">Kategori</label>
						    <select class="form-control" name="id_kategori" required>
						    	option>

						      <?php 

						      	$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku");

						      ?>

						      	<?php while ($query_kategori = mysqli_fetch_assoc($query)):?>

						      <option value="<?php echo $query_kategori["id_kategori"]; ?>"> <?php echo $query_kategori['kategori']; ?> </option>

						      <?php endwhile; ?>
						    </select>
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

include '../aset/footer.php';

?>