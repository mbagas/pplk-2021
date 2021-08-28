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
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" ></link>

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/answer.css"></link>
</head>
<body>
    <div class="main-wrapper">
        <!-- Desktop Navabar top -->
        @include('client.menu')
        <div class="page-content desktop col-xl-6">
            <a href="{{ route('tebakGedung')}}" class="back-btn">
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
            <div class="result">
                <div class="bg-c c1"></div>
                <div class="bg-c c2"></div>
                <p class="result-tag bodytext">Quiz Selesai</p>
                <!-- Jawaban Benar/Salah pake js kecuali kalo mau dirubah -->
                <!-- Jawab Benar -->

                <div id="result-benar" class="result-info">
                    <span class="title selamat0">Selamat</span>
                    <span class="bodytext selamat1">Kamu menjawab dengan benar</span>
                </div>

                    <!-- Jawab Salah -->
                <div id="result-salah" class="result-info d-none">
                    <span class="title selamat0 selamat2">Yahhh</span>
                    <span class="bodytext selamat1">Kamu menjawab dengan salah</span>
                </div>

                
                
                <p class="result-text title">Kamu mendapatkan nilai</p>
                <div class="result-points-wrapper">
                    <canvas id="result-canvas" height="144" width="144" class="result-canvas"></canvas>
                    <div class="result-canvas-text">
                        <!-- Progress Circle auto ke id="canvas-percent" -->
                        <span id="canvas-percent" class="canvas-percent title">{{$score->skor ?? "Anda submit lebih dari 1 kali"}}</span>
                        <span class="canvas-text bodytext">Points</span>
                    </div>
                </div>
            </div>
            <div class="result-buttons">
                <a href="{{route('tebakGedung')}}" class="result-buttons-btn bodytext blue">Selesai</a>
                <a href="{{route('leaderboard')}}" class="result-buttons-btn bodytext">Leaderboard</a>
            </div>
            
        </div>
    </div>
    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script>

        // Draw Circle Progress
        const pi = Math.PI
        var cnv = document.getElementById('result-canvas')
        var cnvPercent = document.getElementById('canvas-percent')
        var c = cnv.getContext('2d')
        var posX = cnv.width/2
        var posY = cnv.height/2
        var percent = cnvPercent.innerHTML
        var radPercent = 360/50 // Persentase per 360
        var res = radPercent * 64

        c.lineCap = "round"
        arcMove()

        function arcMove(){
            var deg = 0
            c.clearRect(0,0,cnv.width,cnv.height)
                deg = percent*radPercent

                // Draw Rail
                c.beginPath()
                c.arc(posX,posY,69,(pi/180)*270,(pi/180)*(270+360))
                c.strokeStyle = '#63BCF4'
                c.lineWidth = '2'
                c.stroke()

                // Draw Progress
                c.beginPath()
                c.arc(posX,posY,69,(pi/180)*270,(pi/180)*(270+deg))
                c.strokeStyle = '#479FD7'
                c.lineWidth = '5'
                c.stroke()
        }

        // Set Selamat
        var resBenar = document.getElementById("result-benar")
        var resSalah = document.getElementById("result-salah")
        if(percent <= 0){
            resBenar.classList.add("d-none")
            resSalah.classList.remove("d-none")
        }


    </script>
</body>
</html>