<div class="halfbackgroundone p-3">
    <h2 class="mb-3" align="center">Form Project</h2>
    <div class="row">
        <div class="col mx-3">
            <form action="" id="forminputdataproject">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ID Transaksi</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" id="selectidtransaksi">
                            <option selected disabled>Pilih ID Transaksi...</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">ID Tim Project</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" id="selectidtimpro">
                            <option selected disabled>Pilih ID Tim...</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <div class="col p-3 mx-3" style="background-color: whitesmoke;">
            <h5 class="mb-3" align="center">Detail Transaksi</h5>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Kode Paket</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="kodepaketshow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Paket</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="namapaketshow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="alamatshow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="namashow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="hargashow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Pesan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="tanggalpesanshow">
                </div>
            </div>
        </div>
        <div class="col p-3 mx-3" style="background-color: grey;">
            <h5 class="mb-3" align="center">Detail Tim Project</h5>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Pimpro</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="pimproshow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Admin</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="adminshow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Photografer</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="photografershow">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Editor</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="editorshow">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="halfbackgroundtwo">
    <div class="container">
        <table id="tabledatapesananadmin" class="table table-striped table-light" style="width:100%">
            <thead>
                <th>No.</th>
                <th>Tanggal Pesan</th>
                <th>Nama Paket</th>
                <th>Nama Customer</th>
                <th>Nama Pimpro</th>
                <th>Nama Admin</th>
                <th>Nama Photografer</th>
                <th>Nama Editor</th>
            </thead>
            <tbody id="tablebodydatapesananadmin"></tbody>
        </table>
    </div>
</div>