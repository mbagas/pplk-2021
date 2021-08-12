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

        <script src="../js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/bootstrap.css"></link>
        <link rel="stylesheet" href="../css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="../css/index.css"></link>
        <link rel="stylesheet" href="../css/tebak-gedung.css"></link>
</head>
<body>
    <div class="main-wrapper">
        <div class="page-content">
            <a href="index.html" class="back-btn">
                <svg height="36" width="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="10" fill="url(#paint0_linear)"/>
                    <path d="M20.5625 25.5832C20.5625 25.5832 14.4375 21.0938 14.4375 17.9998C14.4375 14.9069 20.5625 10.4165 20.5625 10.4165" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="26.9725" y1="70.3636" x2="-31.983" y2="-12.2474" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0187499" stop-color="#63BCF4"/>
                        <stop offset="1" stop-color="#479FD7"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
            <div class="container">
                <h1 class="title mx-auto text-center">Tebak Gambar</h1>
                <p class="bodytext mx-auto text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar morbi augue at sed montes, malesuada velit. Diam.</p>
            </div>
            <div class="menu">
                <div class="menu-row">
                    <div class="menu-btn col-4">
                        <a href="question-section.html" class="menu-btn-a">1</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">2</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">3</a>
                    </div>
                </div>
                <div class="menu-row">
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">4</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">5</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">6</a>
                    </div>
                </div>
                <div class="menu-row">
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">7</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">8</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">9</a>
                    </div>
                </div>
                <div class="menu-row">
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">10</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">11</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">12</a>
                    </div>
                </div>
                <div class="menu-row">
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">13</a>
                    </div>
                    <div class="menu-btn col-4">
                        <a class="menu-btn-a">14</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/custom.js"></script>
    <script>
        $( document ).ready(function() {
            var cw = $('.menu-btn').width();
            $('.menu-btn').css({'height':cw+'px'});
        });
        $( window ).resize(function() {
            var cw = $('.menu-btn').width();
            $('.menu-btn').css({'height':cw+'px'});
        })
    </script>
</body>
</html>