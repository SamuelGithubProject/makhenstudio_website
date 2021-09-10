<?php
session_start();
require_once('koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM pelanggan WHERE Username='$username' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $_SESSION['logged_stat'] = "login";
        $_SESSION['NoNik'] = $row['Nik'];
        $_SESSION['level_user'] = $row['level_user'];
    }
    echo "Sukses";
} else {
    echo "Gagal";
}
