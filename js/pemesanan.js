$(document).ready(function() {

    $('body .card').css("display", "block");

    $.ajax({
        type: "POST",
        url: "php/user/loadproducts.php",
        data: {
            task: "selectData"
        },
        success: function(response) {
            $('#tabelpemesananpelanggan').html(response);
        }
    });

    $.ajax({
        type: "POST",
        url: "php/user/loadproducts.php",
        data: {
            task: "loadProducts"
        },
        success: function(response) {
            $('#kodepaketprd').append(response);
        }
    });

    $('#kodepaketprd').on('change', function() {
        $.ajax({
            type: "POST",
            url: "php/user/loadproducts.php",
            data: {
                task: "searchProducts",
                idproduk: this.value
            },
            success: function(response) {
                var myarrData = response;
                var dataProduk = JSON.parse(myarrData);
                var dataPrd = dataProduk[0];
                $('#namapaketprd').val(dataPrd['Nama_paket']);
                $('#hargapaketprd').val(dataPrd['Harga']);
            }
        });
    });

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    $('#tanggalcust').val(today);

    $('#forminputpesanansaya').submit(function(e) {
        e.preventDefault();

        var kodePaket = $('#kodepaketprd').val();
        var namaPaket = $('#namapaketprd').val();
        var alamatCustomer = $('#alamatcust').val();
        var namaCustomer = $('#namacust').val();
        var hargaProduk = $('#hargapaketprd').val();
        var tanggalpemesanan = $('#tanggalcust').val();

        if (!kodePaket && !alamatCustomer) {
            alert("Anda belum mengisi pesanan");
        } else {
            $('#kodepaketshow').val(kodePaket);
            $('#namapaketshow').val(namaPaket);
            $('#alamatshow').val(alamatCustomer);
            $('#namapelangganshow').val(namaCustomer);
            $('#hargashow').val(hargaProduk);
            $('#tanggalpesananshow').val(tanggalpemesanan);
            $('#totalbill').html('Rp. ' + hargaProduk);
            $('#strukbayar').modal('show');
        }

        $('#modalprosesbtn').on('click', function() {
            $.ajax({
                type: "POST",
                url: "php/user/loadproducts.php",
                data: {
                    task: "insertData",
                    kodePaket: kodePaket,
                    namaPaket: namaPaket,
                    alamatCustomer: alamatCustomer,
                    namaCustomer: namaCustomer,
                    hargaProduk: hargaProduk,
                    tanggalpemesanan: tanggalpemesanan
                },
                success: function(response) {
                    if (response == "Overload") {
                        if (window.confirm('Akun anda telah melampaui batas pemesanan'))
                        {
                            location.reload();
                        }
                        else
                        {
                            location.reload();
                        }
                    } else if (response == "Filled") {
                        if (window.confirm('Data anda gagal dimasukkan, data pesanan sudah ada'))
                        {
                            location.reload();
                        }
                        else
                        {
                            location.reload();
                        }
                    } else if (response == "Sukses") {
                        $('body .card').css("display", "none");
                        window.print();
                        if (window.confirm('Data anda telah dimasukkan, silahkan klik yes untuk refresh'))
                        {
                            location.reload();
                        }
                        else
                        {
                            location.reload();
                        }
                    }
                }
            });
        })
    })
});
