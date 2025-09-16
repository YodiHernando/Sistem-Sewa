<?php
include_once("koneksi.php");

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin=$id");

header("Location: index.php");
?>
