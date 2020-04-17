<?php
include '../koneksi.php';
$id =$_GET['id_buku'];
$query = "DELETE FROM buku WHERE id_buku = '$id'";
$buku = mysqli_query($koneksi,$query);

if(! $buku){
    die("Gagal menghapus date: " .mysqli_errno($koneksi). "-".mysqli_error($koneksi));
}
else{
    echo "<script>alert('Data berhasil dihapus.'); window.location='index.php'; </script>";
}
?>