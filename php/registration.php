<?php
require_once('koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$lev_user = "User";

$sql = "INSERT INTO pelanggan 
VALUES ('$username','$password','$nik','$nama','$alamat','$nohp','$email','$lev_user')";

if ($conn->query($sql) === TRUE) {
    echo "Sukses";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
