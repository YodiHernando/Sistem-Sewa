<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Barang</title>
    <?php
    $id = $_GET['id'];
    include_once("koneksi.php");
    $query = mysqli_query($koneksi, "SELECT * FROM jenis_barang WHERE id_jenis=$id");
    $data = mysqli_fetch_array($query);
    ?>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Jenis Barang</td>
                <td><input type="text" name="jenis_barang"value="<?php echo $data['jenis_barang']?>"></td>
                <td>Keterangan</td>
                <td><textarea name="keterangan"><?php echo $data['keterangan']?></textarea></td>
                <td></td>
                <td><input type="submit"name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST["submit"])){
        include_once("koneksi.php");
        $jenis_barang = $_POST["jenis_barang"];
        $keterangan = $_POST["keterangan"];
        $query = mysqli_query($koneksi, "UPDATE jenis_barang set jenis_barang='$jenis_barang', keterangan='$keterangan' WHERE id_jenis=$id");
        echo "Jenis barang berhasil diubah <a href='index.php'>Kembali ke halaman utama</a>";
    }
    ?>
</body>
</html>