<?php
include_once("koneksi.php");

$query = mysqli_query($koneksi, "SELECT * FROM jenis_barang ORDER BY jenis_barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jenis Barang</title>
</head>
<body>
    <h2>Daftar Jenis Barang</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Jenis Barang</th>
            <th>Keterangan</th>g
        </tr>
        <?php
        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data['id_jenis']."</td>";   
            echo "<td>".$data['jenis_barang']."</td>";
            echo "<td>".$data['keterangan']."</td>"; 
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
