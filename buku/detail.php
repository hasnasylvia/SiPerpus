<?php 
include '../asset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];
$sql = mysqli_query($koneksi,"SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori=kategori.id_kategori WHERE id_buku='$id_buku'");
$detail = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col md-7">
            <h2>Detail Buku</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Judul</strong></td>
                        <td><?= $detail['judul'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Penerbit</strong></td>
                        <td><?= $detail['penerbit'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pengarang</strong></td>
                        <td><?= $detail['pengarang'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Ringkasan</strong></td>
                        <td><?= $detail['ringkasan'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Stok</strong></td>
                        <td><?= $detail['stok'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kategori </strong></td>
                        <td><?= $detail['id_kategori'] ?></td>
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