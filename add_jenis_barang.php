<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Barang</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Jenis Barang</td>
                <td><input type="text" name="jenis_barang"></td>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
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
        $query = mysqli_query($koneksi, "insert into jenis_barang (jenis_barang, keterangan) values ('$jenis_barang', '$keterangan')");
        echo "Jenis barang berhasil dibuat <a href='index.php'>Kembali ke halaman utama</a>";
    }
    ?>
</body>
</html>