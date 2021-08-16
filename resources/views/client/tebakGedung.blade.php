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
        <title>WEB PPLK 2021 - Tebak Gedung</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/tebak-gedung.css"></link>
</head>
<body>
    <div class="main-wrapper">

        <!-- Desktop Navabar top -->
        @include('client.menu')
        <div class="page-content desktop col-xl-6">
            <a href="{{ route('games')}}" class="back-btn">
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
                <h1 class="title mx-auto text-center">Tebak Gedung</h1>
                <p class="bodytext mx-auto text-center">Pilih nama gedung yang sesuai dengan gambar, berdasarkan informasi yang kamu dapat dari ITERA ADVENTURE.</p>
            </div>
            <div class="menu row row-cols-3">
                <!-- for disini aja -->
                @foreach ($games as $game)
                    <div class="menu-btn col-4">
                        <a href="{{Route('playTebakGedung', $game->games_id)}}" class="menu-btn-a">{{$loop->iteration}}</a>
                    </div>
                @endforeach
                    
                    
            </div>
        </div>
    </div>
    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script>
        // width buttonnya pake bs, biar tetep kotak jadi dikasih jq
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