<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>WEB PPLK 2021 - @yield('title')</title>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/bootstrap.css"></link>
        <link rel="stylesheet" href="../css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />
    </head>

    <body>
        <!-- Splash Screen -->
        <div class="launch-logo">
            <img src="../assets/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="launch-logo-image fade"/>
        </div>

        <!-- Login Page -->
        <div class="login-page w-100 m-auto">
            <div class="pplk-logo">
                <img src="../assets/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
            </div>
            
                <div class="wrap-login modal-content d-flex flex-wrap justify-content-between">
                    <div class="m-sm-auto image-container">
                        <img src="../assets/images/reading.png" alt="reading-image" class="login-image">
                    </div>
    
                    <div class="login-welcome-info">
                        <h1 class="silahkan-masuk">Silahkan Masuk</h1>
                        <p>Mulai perjalananmu sekarang!</p>
                    </div>
    
                    <form class="login-form m-sm-auto" method="POST">
                        <div class="col-sm-12 input-field-group">
                            <label class="form-label mb-1">Email</label>
                            <div class="input-field">
                                <i class="input-logo">
                                    <img src="../assets/images/email-logo.png" alt="" class="">
                                </i>
                                <input class="input-control form-control" type="text" name="email" placeholder="Email">
                            </div>
    
                            <label class="form-label mb-1">Password</label>
                            <div class="input-field">
                                <i class="input-logo">
                                    <img src="../assets/images/password-logo.png" alt="" class="">
                                </i>
                                <input class="input-control form-control" type="password" name="pass" placeholder="Password">
                            </div>
                        </div>
    
                        <div class="col-sm-9 mb-1">
                            <button name="submit" type="submit" onclick="window.location.href='/index.html';" class="btn btn-primary rounded custom-login-btn">
                                Masuk
                            </button>
                        </div>
                    </form>
                
                </div>
                <div class="col-sm-12 forget-password flex-column">
                    <p>Lupa Password? <strong>Lapor Daplok!</strong></p>
                </div>
        </div>
        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>