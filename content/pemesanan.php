<div class="halfbackgroundone">
    <div class="container mb-4">
        <h2 class="mb-4 mt-3" align="center">Form Pemesanan</h2>
        <form method="POST" id="forminputpesanansaya">
            <div class="row g-3">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Kode Paket</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id="kodepaketprd">
                                <option selected disabled>Pilih Kode Paket...</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Nama Paket</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" readonly id="namapaketprd">
                        </div>
                    </div>
                    <?php
                    require_once 'php/koneksi.php';
                    $sqlakun = "SELECT Nama,Alamat FROM `pelanggan` WHERE Nik = '$_SESSION[NoNik]'";
                    $resultakun = $conn->query($sqlakun);
                    if ($resultakun->num_rows > 0) :
                        // output data of each row
                        while ($row = $resultakun->fetch_assoc()) :
                    ?>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" readonly id="alamatcust" style="height: 100px"><?= $row['Alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" readonly id="namacust" value="<?= $row['Nama'] ?>">
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" readonly id="hargapaketprd">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Pemesanan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" readonly id="tanggalcust">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Pesan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="halfbackgroundtwo">
    <div class="container" align="center">
        <table id="example" class="table table-striped table-light" style="width:100%">
            <thead>
                <th>Kode Paket</th>
                <th>Nama Paket</th>
                <th>Alamat</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Tanggal Pemesanan</th>
            </thead>
            <tbody id="tabelpemesananpelanggan">
            </tbody>
        </table>
    </div>
</div>