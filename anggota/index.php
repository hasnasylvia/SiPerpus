<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";
$res = mysqli_query($koneksi,$sql);
$anggota = array();
while($data=mysqli_fetch_assoc($res)){
    $anggota[] =$data;
}
?>
<?php
include '../asset/header.php';
?>
<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="fas fa-users"></i>Data Anggota</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
            <a href="tambah.php">Tambah</a>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($anggota as $a){ ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $a['nama'] ?></th>
                        <td><?= $a['kelas'] ?></td>
                        <td>
                            <a href="detail.php?id_anggota=<?= $a['id_anggota']?>" class="badge badge-success">Detail</a>
                            <a href="form-edit.php?id_anggota=<?= $a['id_anggota']?>" class="badge badge-danger">Edit</a>
                            <a href="hapus.php?id_anggota=<?php echo $a['id_anggota']; ?>" class="badge badge-warning">Hapus</a>
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