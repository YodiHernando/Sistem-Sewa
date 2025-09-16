<?php
include_once("koneksi.php");

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin=$id");
$data = mysqli_fetch_array($result);

if(isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    mysqli_query($koneksi, "UPDATE admin SET username='$username', password='$password', name='$name', alamat='$alamat', no_hp='$no_hp' WHERE id_admin=$id");

    header("Location: index.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
</head>
<body>
    <h2>Edit Data Admin</h2>
    <form method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $data['password']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
