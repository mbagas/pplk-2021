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
        <title>PPLK 2021 - Games</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/games.css"></link>
    </head>
    <body>
        <div class="main-wrapper">

            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!-- FootBar -->
            <div class="navbar p-0 d-lg-block d-xl-none">
                @include('client.footbar_mobile')
            </div>

            <!-- Content -->
            <div class="page-content container-fluid">
                <div class="col-xl-6 desktop-view">
                <!-- <div class="col-sm-12">
                    <div class="info-card card justify-content-between " style="height: 160px;" >
                            <div class="info-card-body" >

                                <h1 style="text-align: center">Coming Soon !</h1>


                            </div>
                        </div>
                    </div>-->
                    <div class="title-page">
                        <h1>
                            Games
                        </h1>
                    </div>
                    
                    <div class="player-info">
                        <div class="col-6">
                            <div class="card rank-info ">
                                <div class="profile-pic">
                                    <img src="{{Auth()->user()->img ?? asset('assets/images/user_default.png')}}" alt="profile-img" />
                                </div>
                                <div class="rank-text">
                                    <h5>
                                        Nama
                                    </h5>
                                    <h2>
                                        {{Auth()->user()->nama}}
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card point-info ">
                            <div class="poin-pic">
                                    <img src="{{ asset('assets') }}/images/poin.png" alt="poin-img" />
                                </div>
                                <div class="poin-text">
                                    <h5>
                                        Points
                                    </h5>
                                    <h2>
                                     {{$score}} Points
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="games-menu-container">
                        <div class="menu-list">
                            <a class="card find-code" href="{{ route('findCode')}}">
                                <div class="result-points-wrapper">
                                    <canvas id="result-canvas" class="result-canvas"></canvas>
                                    <div class="result-canvas-text">
                                        <!-- Progress Circle auto ke id="canvas-percent" tinggal kasih data di spannya-->
                                        <span id="canvas-percent" class="canvas-percent title">{{round((($totalFindCode-$gameFindCode)/$totalFindCode)*100)}}</span>
                                        <span class="canvas-text bodytext">%</span>
                                    </div>
                                </div>
                                <div class="menu-text">
                                    <h2>
                                        Find The Code
                                    </h2>
                                    <h3>
                                        Redeem code sesuai barang yang sudah kamu dapatkan pada game ITERA ADVENTURE disini.
                                    </h3>
                                </div>
                                <div class="arrow-next">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.90039 3.43317L11.4671 9.99984L4.90039 16.5665L6.66706 18.3332L15.0004 9.99984L6.66706 1.6665L4.90039 3.43317Z" fill="#4A4A4A"/>
                                    </svg>
                                </div>
                            </a>

                            <a class="card tebak-bangunan" href="{{route('tebakGedung')}}">
                                <div class="result-points-wrapper">
                                    <canvas id="result-canvas-2" class="result-canvas"></canvas>
                                    <div class="result-canvas-text">
                                        <!-- Progress Circle auto ke id="canvas-percent-2" tinggal kasih data di spannya-->
                                        <span id="canvas-percent-2" class="canvas-percent title">{{round((($totalTebakGedung-$gameTebakGedung)/$totalTebakGedung)*100)}}</span>
                                        <span class="canvas-text bodytext">%</span>
                                    </div>
                                </div>
                                <div class="menu-text">
                                    <h2>
                                        Tebak Bangunan
                                    </h2>
                                    <h3>
                                        Pilih nama gedung yang sesuai dengan gambar, berdasarkan informasi yang kamu dapat dari ITERA ADVENTURE.
                                    </h3>
                                </div>
                                <div class="arrow-next">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.90039 3.43317L11.4671 9.99984L4.90039 16.5665L6.66706 18.3332L15.0004 9.99984L6.66706 1.6665L4.90039 3.43317Z" fill="white"/>
                                    </svg>
                                </div>

                            </a>
                        </div>
                    </div>
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
        var radPercent = 360/100 // Persentase per 360
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
                c.lineWidth = '5'
                c.stroke()

                // Draw Progress
                c.beginPath()
                c.arc(posX,posY,69,(pi/180)*270,(pi/180)*(270+deg))
                c.strokeStyle = '#479FD7'
                c.lineWidth = '10'
                c.stroke()
        }
    </script>

    <script>

        // Draw Circle Progress
        const pie = Math.PI
        var canvas = document.getElementById('result-canvas-2')
        var canvasPercent = document.getElementById('canvas-percent-2')
        var circle = canvas.getContext('2d')
        var posiX = canvas.width/2
        var posiY = canvas.height/2
        var percents = canvasPercent.innerHTML
        var radiusPercent = 360/100 // Persentase per 360
        var result = radiusPercent * 64

        circle.lineCap = "round"
        arcMove2()

        function arcMove2(){
            var degree = 0
            circle.clearRect(0,0,canvas.width,canvas.height)
                degree = percents*radiusPercent

                // Draw Rail
                circle.beginPath()
                circle.arc(posiX,posiY,69,(pie/180)*270,(pie/180)*(270+360))
                circle.strokeStyle = '#63BCF4'
                circle.lineWidth = '5'
                circle.stroke()

                // Draw Progress
                circle.beginPath()
                circle.arc(posiX,posiY,69,(pie/180)*270,(pie/180)*(270+degree))
                circle.strokeStyle = '#479FD7'
                circle.lineWidth = '10'
                circle.stroke()
        }
        // var myFloat = (80/90)*100;
        // var value = Math.trunc( myFloat );
        
        // document.getElementById("canvas-percent-2").innerHTML=value;
    </script>
    </body>
</html>