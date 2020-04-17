<?php 
include '../asset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($koneksi,"SELECT * FROM anggota INNER JOIN level ON anggota.id_level=level.id_level WHERE id_anggota='$id_anggota'");
$detail = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col md-7">
            <h2>Detail Anggota</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td><?= $detail['nama'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kelas</strong></td>
                        <td><?= $detail['kelas'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Telepon</strong></td>
                        <td><?= $detail['telp'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Username</strong></td>
                        <td><?= $detail['username'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Password</strong></td>
                        <td><?= $detail['password'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Id Level</strong></td>
                        <td><?= $detail['id_level'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="2">
                            <a href="index.php" class="btn btn-success">
                                <i class=" fa fa-angle-double-left"></i>Kembali
                            </a>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>

<?php
include '../asset/footer.php';
?>