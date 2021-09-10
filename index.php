<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/sweetalert2/dist/sweetalert2.min.css">
    <script src="plugin/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="plugin/bs5/dist/css/bootstrap.min.css">
    <link href="plugin/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/body.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

    <title>Makhen Studio</title>
</head>

<body>
    <div class="card">
        <!-- Begin Card Header -->
        <div class="card-header p-0" style="background-color: black;">
            <?php include_once 'template/header.php' ?>
            <!-- Begin Navbar -->
            <?php include_once 'template/navbar.php' ?>
            <!-- End Navbar -->
        </div>
        <!-- End Card Header -->
        <div class="card-body p-0">
            <!-- Begin Content -->
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if (isset($_SESSION['level_user'])) {
                    $lev_user = $_SESSION['level_user'];
                    if ($lev_user == "User") {
                        if ($page == "home") {
                            include_once 'content/home.php';
                        } elseif ($page == "paketwedding") {
                            include_once 'content/paketwedding.php';
                        } elseif ($page == "pemesanan") {
                            include_once 'content/pemesanan.php';
                        } elseif ($page == "about") {
                            include_once 'content/about.php';
                        } elseif ($page == "login") {
                            include_once 'content/login.php';
                        } elseif ($page == "registrasi") {
                            include_once 'content/regist.php';
                        } else {
                            include_once 'content/home.php';
                        }
                    } elseif ($lev_user == "Admin") {
                        if ($page == "home") {
                            include_once 'content/home.php';
                        } elseif ($page == "datatim") {
                            include_once 'content/admin/datatim.php';
                        } elseif ($page == "datapemesanan") {
                            include_once 'content/admin/datapesanan.php';
                        } elseif ($page == "datalaporan") {
                            include_once 'content/admin/datalaporan.php';
                        } else {
                            include_once 'content/home.php';
                        }
                    }
                } else {
                    if ($page == "home") {
                        include_once 'content/home.php';
                    } elseif ($page == "paketwedding") {
                        include_once 'content/paketwedding.php';
                    } elseif ($page == "pemesanan") {
                        include_once 'content/pemesanan.php';
                    } elseif ($page == "about") {
                        include_once 'content/about.php';
                    } elseif ($page == "login") {
                        include_once 'content/login.php';
                    } elseif ($page == "registrasi") {
                        include_once 'content/regist.php';
                    }
                }
            } else {
                include_once 'content/home.php';
            }
            ?>
            <!-- End Content -->
        </div>
        <div class="card-footer text-muted">
            <!-- Begin Footer -->
            <?php include_once 'template/footer.php' ?>
            <!-- End Footer -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="strukbayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Struk Pembayaran</h5>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <h4>Total Pembayaran</h4>
                        <p id="totalbill"></p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Kode Paket</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="kodepaketshow" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Nama Paket</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="namapaketshow" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="alamatshow" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="namapelangganshow" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="hargashow" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Pemesanan</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="tanggalpesananshow" value="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                          <p>Silahkan membayar terlebih dahulu agar pesanan anda dapat diproses.</p>
                          <p>Pembayaran dilakukan melalui transfer ke Nomor Rekening :</p>
                          <p><b>BRI A.n Makhen Studio, No Account : 1030-555-3232-50-1</b></p>
                          <p>
                            Setelah melakukan pembayaran, silahkan melakukan konfirmasi ke No. HP/WA
                            A.n Tigor Purba (081360745775). Admin kami akan membalas pesan anda dalam waktu
                            1x24 jam.
                          </p>
                          <p>Terima Kasih</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modalprosesbtn">Proses</button>
                </div>
            </div>
        </div>
    </div>
    <script src="plugin/bs5/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/logandregist.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tabledatatim').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tabledatapesananadmin').DataTable();
        });
    </script>
    <script src="js/datatim.js"></script>
    <script src="js/datapesanan.js"></script>
    <script src="js/print.js"></script>
    <script src="js/pemesanan.js"></script>
</body>

</html>
