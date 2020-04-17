<?php
include '../koneksi.php';
$id =$_GET['id_anggota'];
$query = "DELETE FROM anggota WHERE id_anggota = '$id'";
$anggota = mysqli_query($koneksi,$query);

if(! $anggota){
    die("Gagal menghapus date: " .mysqli_errno($koneksi). "-".mysqli_error($koneksi));
}
else{
    echo "<script>alert('Data berhasil dihapus.'); window.location='index.php'; </script>";
}
?>