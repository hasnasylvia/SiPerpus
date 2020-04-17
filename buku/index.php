<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";
$res = mysqli_query($koneksi,$sql);
$buku = array();
while($data=mysqli_fetch_assoc($res)){
    $buku[] =$data;
}
?>
<?php
include '../asset/header.php';
?>
<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i>Data Buku</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
            <a href="form-tambah.php">Tambah Buku</a>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($buku as $b){ ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $b['judul'] ?></th>
                        <td><?= $b['pengarang'] ?></td>
                        <td><?= $b['stok'] ?></td>
                        <td>
                            <a href="detail.php?id_buku=<?= $b['id_buku']; ?>" class="badge badge-success">Detail</a>
                            <a href="edit1.php?id_buku=<?= $b['id_buku']; ?>" class="badge badge-danger">Edit</a>
                            <a href="hapus.php?id_buku=<?php echo $b['id_buku']; ?>" class="badge badge-warning">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<?php
include '../asset/footer.php';
?>