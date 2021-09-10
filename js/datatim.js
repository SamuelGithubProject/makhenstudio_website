$(document).ready(function() {

    $.ajax({
            type: "POST",
            url: "php/admin/datatim.php",
            data: {
                task:"selectData",
            },
            success: function(response) {
                $('#tabelbodydatatim').html(response);
            }
    });

    $('#forminputdatatim').submit(function(e) {
        e.preventDefault();

        var namaPimpro = $('#namapimpro').val();
        var namaAdmin = $('#namaadmin').val();
        var namaPhotografer = $('#namaphotografer').val();
        var namaEditor = $('#namaeditor').val();

        $.ajax({
            type: "POST",
            url: "php/admin/datatim.php",
            data: {
                task:"insertData",
                namapimpro:namaPimpro,
                namaadmin:namaAdmin,
                namaphotografer:namaPhotografer,
                namaeditor:namaEditor
            },
            success: function(response) {
                if (response == "Sukses") {
                    location.reload();
                } else {
                    alert("Data masih ada yang kosong");
                }
            }
        });
    });
});