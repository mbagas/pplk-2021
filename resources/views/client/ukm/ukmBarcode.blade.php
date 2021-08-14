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

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png"></link>

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/ukmBarcode.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!--Content-->
            <div class="page-content container-fluid col-xl-6">
                <!--NavBar-->
                <nav class="navbar p-0">
                    <div class="container-fluid nav-back">
                        <a class="navback-home" href="{{ url()->previous() }}">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="36" height="36" rx="10" fill="white"/>
                                <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                    </div>
                </nav>
            
                <div class="card">
                    <div class="desc-text">
                        <h2>UKM QR BARCODE</h2>
                    </div>
                    <div class="code justify-content-center">
                        <img src="{{ $dataUkm->ukms->barcode}}" alt="BARCODE">
                    </div>
                    <div class="desc-text margin-code">
                        <h3 clas="subhead-text">Scan untuk bergabung !</h3>
                        <p class="body-text">{{$dataUkm->artikels->body}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('assets') }}/js/custom.js"></script>
    </body>
</html>