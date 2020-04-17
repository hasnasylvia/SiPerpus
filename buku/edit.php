<?php
include'../koneksi.php';
include'../asset/header.php';

$id_buku = $_GET['id_buku'];
$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku= '$id_buku'");
$buku = mysqli_fetch_assoc($query);
?>
<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header">
					<h3><i class="fas fa-books-medical"></i>Edit Data</h3>
				</div>
				<div class="card-body">
					<form action="proses-edit.php" method="post">
                    <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku']; ?>" placeholder="Judul" required>
						<div class="form-group">
                    		<input type="text" class="form-control" name="judul" value="<?php echo $buku['judul']; ?>" placeholder="Judul" required>
                		</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="penerbit" value="<?php echo $buku['penerbit']; ?>" placeholder="Penerbit" required>
                        </div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="pengarang" value="<?php echo $buku['pengarang']; ?>" placeholder="Pengarang" required>
                		</div>
                        <div class="form-group">
                            <textarea class="form-control" name="ringkasan"
                            value="<?php echo $buku['ringkasan']; ?>" placeholder="Ringkasan">
                            
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="cover" value="<?php echo $buku['cover']; ?>" placeholder="Cover">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="stok" value="<?php echo $buku['stok']; ?>" placeholder="Stok" required>
                        </div>
                        <div class="form-group">
                            <select name="id_kategori" required>
                                <option>--Pilih Kategori</option>
                                <?php 
                                $query = mysqli_query($koneksi, "SELECT*FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku= id_buku");
                                while ($kategori = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                <?php
                            };
                            ?>
                            </select>

                        </div>
                		<button type="submit" class="btn btn-primary" name="simpan">Edit</button>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include '../asset/footer.php';
?>

<!-- <?php
include '../asset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];
$query = mysqli_query($koneksi,("SELECT * FROM FROM buku INNER JOIN kategori ON buku.id_kategori=kategori.id_kategori 
                                WHERE id_buku=$id_buku"));
$buku = mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Buku</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-edit.php">
                        <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku']; ?>" class="form-control">
                        <div class="form-group">
                            <label for=judul>Judul</label>
                            <input type="text" name="judul" value="<?php echo $buku['judul']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="kelas" value="<?php echo $buku['penerbit']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" value="<?php echo $buku['pengarang']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <br>
                                <textarea style="width:200px" name="ringkasan" value="<?php echo $buku['cover']; ?>" 
                                          type="textarea">
                                    <?php $buku['ringkasan']; ?>
                                </textarea>
                        </div><input type="hidden" name="cover" value="<?php echo $buku['cover']; ?>">
                        <div>
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" value="<?php echo $buku['stok']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select  class="form-control" name="id_kategori">
                                <option value="<?php echo $buku['kategori'] ?>">Pilih</option>
                                <?php 
                                    $query1 = mysqli_query($koneksi,("SELECT * FROM buku INNER JOIN kategori ON 
                                                           buku.id_kategori=kategori.id_kategori WHERE id_buku=$id_buku"));
                                    while($query_kategori=mysqli_fetch_assoc($query1)): 
                                ?>
                                <option value="<?php echo $query_kategori['id_kategori']; ?>">
                                               <?php echo $query_kategori['kategori']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary mr-auto">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../asset/footer.php';
?> -->