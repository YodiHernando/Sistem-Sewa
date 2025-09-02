<?php
include_once("koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM jenis_barang ORDER BY jenis_barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Barang</title> 
</head>
<body>
    <a href="add_jenis_barang.php">Tambah Jenis Barang</a>
    <h2>Daftar Jenis Barang</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Jenis Barang</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            <th>Hapus</th>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>
            <td>$data[id_jenis]</td>
            <td>$data[jenis_barang]</td>
            <td>$data[keterangan]</td>
            <td><a href='edit_jenis_barang.php?id=$data[id_jenis]'>Edit</td>
            <td><a href='hapus.php?id=$data[id_jenis]'>Hapus</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>