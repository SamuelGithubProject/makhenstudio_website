<?php
require_once('../koneksi.php');

$task = $_POST['task'];

if ($task === "selectDataTransaksi") {

    $idTransaksi = $_POST['idTransaksi'];
    $dataTransaksi = [];

    $sql = "SELECT * FROM transaksi WHERE id_transaksi='$idTransaksi'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dataTransaksi[] = $row;
        }
    } else {
        $dataTransaksi[] = null;
    }

    echo json_encode($dataTransaksi);
} elseif ($task === "selectDataTim") {

    $idTimpro = $_POST['idTimpro'];
    $dataTim = [];

    $sql = "SELECT * FROM datatim WHERE id_timpro='$idTimpro'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dataTim[] = $row;
        }
    } else {
        $dataTim[] = null;
    }

    echo json_encode($dataTim);
} elseif ($task === "insertData") {
    $idTrx = $_POST['idTrx'];
    $idTim = $_POST['idTim'];

    $sql = "INSERT INTO dataproject VALUES ('','$idTrx','$idTim')";

    if ($conn->query($sql) == TRUE) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
} elseif ($task === "selectAllData") {

    $allDataTrx = [];
    $allDataTim = [];

    $sql = "SELECT * FROM transaksi";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($allDataTrx, "<option value='$row[id_transaksi]'>$row[id_transaksi]</option>");
        }
    } else {
        array_push($allDataTrx, "<option value=''>No Data</option>");
    }

    $sql = "SELECT * FROM datatim";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($allDataTim, "<option value='$row[id_timpro]'>$row[id_timpro]</option>");
        }
    } else {
        array_push($allDataTim, "<option value=''>No Data</option>");
    }

    $allData = json_encode($allDataTrx) . "+" . json_encode($allDataTim);
    echo $allData;
} else if ($task === "selectDataProject") {
    $sql = "SELECT b.Tanggal_pemesanan,b.Nama_paket,b.Nama_cust,c.Nama_pimpro,c.Nama_admin,c.Nama_photografer,c.Nama_editor FROM dataproject as a
            LEFT JOIN transaksi as b
            ON a.id_transaksi = b.id_transaksi
            RIGHT JOIN datatim as c
            ON a.id_timpro = c.id_timpro
            WHERE a.id_transaksi = b.id_transaksi AND a.id_timpro = c.id_timpro";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $nomor = 1;
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$nomor</td>
                <td>$row[Tanggal_pemesanan]</td>
                <td>$row[Nama_paket]</td>
                <td>$row[Nama_cust]</td>
                <td>$row[Nama_pimpro]</td>
                <td>$row[Nama_admin]</td>
                <td>$row[Nama_photografer]</td>
                <td>$row[Nama_editor]</td>
            </tr>
            ";
            $nomor++;
        }
    } else {
        echo "
            <tr align='center'>
                <td colspan='8'>No Data</td>
            </tr>
            ";
    }
} elseif ($task === "selectLaporanPesanan") {
    $dataTransaksi = [];


    $sql = "SELECT * FROM transaksi";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dataTransaksi[] = $row;
        }
    } else {
        $dataTransaksi[] = null;
    }

    echo json_encode($dataTransaksi);
}
