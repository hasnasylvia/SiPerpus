<?php
include '../asset/header.php';
include '../koneksi.php';

$query = mysqli_query($koneksi,("SELECT * FROM kategori"));
?>

<html>
<head>
<title>Siperpus</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h2>Tambah Buku</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses-tambah.php" method="post">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ringkasan">Ringkasan</label>
                                <br>
                                <textarea style="width:200px" name="ringkasan">
                                    
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <input type="file" name="cover" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="int" name="stok" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select  class="form-control" name="id_kategori">
                                    <option>Pilih</option>
                                    <?php while($kategori=mysqli_fetch_assoc($query)): ?>
                                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <button type="submit" name="simpan"  class="btn btn-primary mr-auto">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include '../asset/footer.php';
?>