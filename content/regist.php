    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Icon -->
        <link rel="stylesheet" href="plugin/loginreg/fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="plugin/loginreg/css/style.css">
        <title>Makhen Studio</title>
    </head>

    <body>
        <div class="main">

            <!-- Sign up form -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Sign up</h2>
                            <form method="POST" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username" id="username" placeholder="Username" required />
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="Password" required />
                                </div>
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-accounts-list-alt"></i></label>
                                    <input type="text" name="nik" id="nik" placeholder="NIK" required />
                                </div>
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account-circle"></i></label>
                                    <input type="text" name="nama" id="nama" placeholder="Nama" required />
                                </div>
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-pin"></i></label>
                                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" required />
                                </div>
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-phone"></i></label>
                                    <input type="text" name="nohp" id="nohp" placeholder="Nomor HP/WA" required />
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="E-mail" required />
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure><img src="plugin/loginreg/images/signup-image.jpg" alt="sing up image"></figure>
                            <a href="?page=login" class="signup-image-link">I am already member</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- JS -->
        <script src="plugin/loginreg/vendor/jquery/jquery.min.js"></script>
        <script src="plugin/loginreg/js/main.js"></script>
    </body>

    </html>