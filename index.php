<?php
include "cek_login.php";
include_once("koneksi.php");

$query = mysqli_query($koneksi, "SELECT * FROM jenis_barang ORDER BY jenis_barang");
$query2 = mysqli_query($koneksi, "SELECT * FROM admin ORDER BY id_admin");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Barang & Admin</title> 
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
                <td>{$data['id_jenis']}</td>
                <td>{$data['jenis_barang']}</td>
                <td>{$data['keterangan']}</td>
                <td><a href='edit_jenis_barang.php?id={$data['id_jenis']}'>Edit</a></td>
                <td><a href='hapus.php?id={$data['id_jenis']}'>Hapus</a></td>
            </tr>";
        }
        ?>
    </table>

    <h2>Data Admin</h2>
    <a href="add_admin.php">Tambah Admin</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID Admin</th>
            <th>Username </th>
            <th>Password</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($query2)) {
            echo "<tr>
                <td>{$data['id_admin']}</td>
                <td>{$data['username']}</td>
                <td>{$data['password']}</td>
                <td>{$data['name']}</td>
                <td>{$data['alamat']}</td>
                <td>{$data['no_hp']}</td>
                <td>
                    <a href='edit_admin.php?id={$data['id_admin']}'>Edit</a> | 
                    <a href='hapus_admin.php?id={$data['id_admin']}' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
