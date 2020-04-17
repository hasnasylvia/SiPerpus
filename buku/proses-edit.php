<?php
include'../koneksi.php';

if(isset($_POST['simpan'])){
	$id_buku		= $_POST['id_buku'];
	$judul			= $_POST['judul'];
	$penerbit		= $_POST['penerbit'];
	$pengarang		= $_POST['pengarang'];
	$ringkasan		= $_POST['ringkasan'];
	$stok			= $_POST['stok'];
	$id_kategori	= $_POST['id_kategori'];

	$sql = "UPDATE buku SET judul = '$judul', penerbit = '$penerbit', pengarang = '$pengarang', 
			ringkasan = '$ringkasan', cover = '', stok = '$stok', id_kategori = '$id_kategori'
			WHERE id_buku='$id_buku'";
	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($res > 0){
		echo "<script>alert('DATA BERHASIL DIGANTI'); document.location.href = 'index.php'; </script>";
	}
}

include '../asset/header.php';
?>


<!-- <?php
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

if(isset($_POST['simpan'])){
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $ringkasan = $_POST['ringkasan'];

    $stok = $_POST['stok'];
    $id_kategori = $_POST['id_kategori'];
    $sql = "UPDATE anggota SET judul = '$judul',
                               penerbit = '$penerbit',
                               pengarang = '$pengarang',
                               ringkasan = '$ringkasan',
                               cover = '',
                               stok = '$stok',
                               id_kategori = $id_kategori
                               WHERE id_buku = $id_buku";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);

    if($res > 0){
        header("location: index.php");
    }
    else{
        header("location: edit.php");
    }
}
?> -->