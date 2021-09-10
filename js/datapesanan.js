$(document).ready(function() {

    var dataTable = ``;

    $.ajax({
        type: "POST",
        url: "php/admin/datapesanan.php",
        data: {
            task:"selectLaporanPesanan",
        },
        success: function(response) {
            var myTransaksi = JSON.parse(response);
            for (let index = 0; index < myTransaksi.length; index++) {
                var dataTrx = myTransaksi[index];
                dataTable += `<tr>
                <td>${dataTrx['Kode_paket']}</td>
                <td>${dataTrx['Nama_paket']}</td>
                <td>${dataTrx['Alamat_cust']}</td>
                <td>${dataTrx['Nama_cust']}</td>
                <td>${dataTrx['Harga']}</td>
                </tr>`;
                $('#tablebodylaporandatapesanan').html(dataTable);
            }
        }
        });

    $.ajax({
        type: "POST",
        url: "php/admin/datapesanan.php",
        data: {
            task:"selectDataProject"
        },
        success: function(response) {
            $('#tablebodydatapesananadmin').html(response);
        }
    });

    $.ajax({
        type: "POST",
        url: "php/admin/datapesanan.php",
        data: {
            task:"selectAllData",
        },
        success: function(response) {
            var splitData = response.split("+");
            var arrDataTrx = JSON.parse(splitData[0]);
            var arrDataTim = JSON.parse(splitData[1]);
            arrDataTrx.forEach(dataTrx => {
                $('#selectidtransaksi').append(dataTrx);
            });
            arrDataTim.forEach(dataTim => {
                $('#selectidtimpro').append(dataTim);
            });
        }
    });

    $('#selectidtransaksi').on('change', function() {
        $.ajax({
        type: "POST",
        url: "php/admin/datapesanan.php",
        data: {
            task:"selectDataTransaksi",
            idTransaksi: this.value
        },
        success: function(response) {
            var myarrData = response;
            var dataTransaction = JSON.parse(myarrData);
            var dataTrx = dataTransaction[0];
            $('#kodepaketshow').val(dataTrx['Kode_paket']);
            $('#namapaketshow').val(dataTrx['Nama_paket']);
            $('#alamatshow').val(dataTrx['Alamat_cust']);
            $('#namashow').val(dataTrx['Nama_cust']);
            $('#hargashow').val(dataTrx['Harga']);
            $('#tanggalpesanshow').val(dataTrx['Tanggal_pemesanan']);
        }
        });
    });

    $('#selectidtimpro').on('change', function() {
        $.ajax({
        type: "POST",
        url: "php/admin/datapesanan.php",
        data: {
            task:"selectDataTim",
            idTimpro: this.value
        },
        success: function(response) {
            var myarrData = response;
            var dataTimpro = JSON.parse(myarrData);
            var dataTim = dataTimpro[0];
            $('#pimproshow').val(dataTim['Nama_pimpro']);
            $('#adminshow').val(dataTim['Nama_admin']);
            $('#photografershow').val(dataTim['Nama_photografer']);
            $('#editorshow').val(dataTim['Nama_editor']);
        }
        });
    });

    $('#forminputdataproject').submit(function(e) {
        e.preventDefault();

        var idTrx = $('#selectidtransaksi').val();
        var idTim = $('#selectidtimpro').val();

        $.ajax({
            type: "POST",
            url: "php/admin/datapesanan.php",
            data: {
                task:"insertData",
                idTrx:idTrx,
                idTim:idTim
            },
            success: function(response) {
                if (response == "Sukses") {
                    location.reload();
                } else {
                    alert("Data Belum Lengkap");
                }
            }

        });
    })
});