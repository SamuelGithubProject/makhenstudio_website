$('#register-form').submit(function(event) {
    event.preventDefault();

    var username = $('#username').val();
    var password = $('#password').val();
    var nik = $('#nik').val();
    var nama = $('#nama').val();
    var alamat = $('#alamat').val();
    var nohp = $('#nohp').val();
    var email = $('#email').val();

    $.ajax({
            url:"php/registration.php",
            method:"POST",
            data:{
                username:username,
                password:password,
                nik:nik,
                nama:nama,
                alamat:alamat,
                nohp:nohp,
                email:email
            },
            success: function(response){
                if (response == "Sukses"){
                    Swal.fire(
                        'Registrasi Sukses!',
                        '',
                        'success'
                    ).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = 'index.php?page=login';
                                        }
                                        })
                } else if (response == "Error"){
                    Swal.fire(
                        'Registrasi Gagal!',
                        '',
                        'Error'
                    ).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                        })
                }
            }
        });
        
});

$('#login-form').submit(function(event) {
    event.preventDefault();

    var yourUsername = $('#your_name').val();
    var yourPassword = $('#your_pass').val();

    $.ajax({
            url:"php/login.php",
            method:"POST",
            data:{
                username:yourUsername,
                password:yourPassword,
            },
            success: function(response){
                if (response == "Sukses"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseleave', setTimeout(function(){ window.location.href = 'index.php'; }, 3000))
                        }
                    })

                    Toast.fire({
                                icon: 'success',
                                title: 'Signed in successfully'
                            })
                } else if (response == "Gagal"){
                    Swal.fire(
                        'Login Gagal!',
                        'Username/Password Salah',
                        'Error'
                    ).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                        })
                }
            }
        });
});