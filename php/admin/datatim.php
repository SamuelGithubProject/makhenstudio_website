<?php
require_once('../koneksi.php');

$task = $_POST['task'];

if ($task == "insertData") {
    $namapimpro = $_POST['namapimpro'];
    $namaadmin = $_POST['namaadmin'];
    $namaphotografer = $_POST['namaphotografer'];
    $namaeditor = $_POST['namaeditor'];

    $sql = "INSERT INTO datatim VALUES ('','$namapimpro','$namaadmin','$namaphotografer','$namaeditor')";

    if ($conn->query($sql) == TRUE) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
} elseif ($task == "selectData") {

    $sql = "SELECT * FROM datatim";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[Nama_pimpro]</td>
                <td>$row[Nama_admin]</td>
                <td>$row[Nama_photografer]</td>
                <td>$row[Nama_editor]</td>
            </tr>
            ";
        }
    } else {
        echo "
            <tr>
                <td colspan='4'>No Data</td>
            </tr>
            ";
    }
}
