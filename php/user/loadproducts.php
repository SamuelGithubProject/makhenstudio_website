<?php
session_start();

require_once('../koneksi.php');

$task = $_POST['task'];

if ($task === "loadProducts") {
    $sql = "SELECT * FROM produk";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<option value='$row[Kode_paket]'>$row[Kode_paket]</option>";
        }
    } else {
        echo "<option value=''>No Data</option>";
    }
} elseif ($task === "searchProducts") {
    $idproduk = $_POST['idproduk'];
    $data = [];

    $sql = "SELECT * FROM produk WHERE Kode_paket='$idproduk'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        $data[] = $row;
    }

    echo json_encode($data);
} elseif ($task === "insertData") {
    $kodePaket = $_POST['kodePaket'];
    $namaPaket = $_POST['namaPaket'];
    $alamatCustomer = $_POST['alamatCustomer'];
    $namaCustomer = $_POST['namaCustomer'];
    $hargaProduk = $_POST['hargaProduk'];
    $tanggalpemesanan = $_POST['tanggalpemesanan'];

    $sqlselect = "SELECT * FROM `transaksi` WHERE Nama_cust = '$namaCustomer' AND Kode_paket = '$kodePaket'";
    $resultselect = $conn->query($sqlselect);
    if ($resultselect->num_rows >= 4) {
        // output data of each row
        echo "Overload";
    } else if ($resultselect->num_rows > 0) {
        echo "Filled";
    } else if ($resultselect->num_rows == 0) {
        $sql = "INSERT INTO transaksi (Kode_paket,Nama_paket,Alamat_cust,Nama_cust,Harga,Tanggal_pemesanan)
            VALUES ('$kodePaket','$namaPaket','$alamatCustomer','$namaCustomer','$hargaProduk','$tanggalpemesanan')";

        if ($conn->query($sql) == true) {
            echo "Sukses";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} elseif ($task === "selectData") {
    $sql = "SELECT * FROM `transaksi` as a
            JOIN `pelanggan` as b
            ON b.Nama = a.Nama_cust
            WHERE b.Nik = '$_SESSION[NoNik]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[Kode_paket]</td>
                <td>$row[Nama_paket]</td>
                <td>$row[Alamat_cust]</td>
                <td>$row[Nama_cust]</td>
                <td>$row[Harga]</td>
                <td>$row[Tanggal_pemesanan]</td>
            </tr>
            ";
        }
    } else {
        echo "
        <tr align='center'>
            <td colspan='6'></td>
        </tr>
        ";
    }
}
