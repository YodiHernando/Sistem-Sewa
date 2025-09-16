<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"></td>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
    <?php
    session_start();
    if (isset($_POST["login"])) {
        include_once("koneksi.php");

        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
        $num = mysqli_num_rows($query);

        if ($num > 0) {
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit;
        } else {
            echo "Login gagal!";
        }
    }
    ?>
</body>
</html>
