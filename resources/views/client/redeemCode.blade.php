<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>WEB PPLK 2021 - @yield('title')</title>

        <script src="../js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/redeemCode.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!--Navbar-->
            <nav class="navbar p-0">
                <div class="container-fluid nav-back">
                    <a class="navback-home" href="#">
                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.0587158" width="36" height="34.5131" rx="10" fill="url(#paint0_linear)"/>
                            <path d="M20.5625 24.5854C20.5625 24.5854 14.4375 20.2815 14.4375 17.3153C14.4375 14.3501 20.5625 10.0452 20.5625 10.0452" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                            <linearGradient id="paint0_linear" x1="26.9725" y1="67.5161" x2="-28.7342" y2="-13.9055" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0187499" stop-color="#63BCF4"/>
                            <stop offset="1" stop-color="#479FD7"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </a>
                </div>
            </nav>
            <!--Content-->
            <div class="page-content container">
                <div class="headline-text">
                    <h2>Find The Code</h2>
                </div>
                <div class="card-rc">
                    <img  class="rounded-rc" src="../assets/images/LOGO PPLK.png" alt="">
                    <div class="card-body-rc">
                        <div class="headline-text">
                            <h2>Sepeda</h2>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="row redeem-input justify-content-center">
                        <label for="">Redeem</label>
                        <input type="text">
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button name="submit" type="submit" class="btn btn-primary round custom-login-btn">
                        Kirim Laporan
                    </button>
                </div>
            </div>
        </div>
        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>