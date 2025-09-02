<?php
include_once("koneksi.php");

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM jenis_barang WHERE id_jenis=$id");

if ($query) {
    echo "Data berhasil dihapus. <a href='index.php'>Kembali ke halaman utama</a>";
}
?>
