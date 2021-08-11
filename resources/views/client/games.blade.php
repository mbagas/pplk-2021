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
                                    <img src="{{ asset('assets') }}/images/jhonnysins.png" alt="profile-img" />
                                </div>
                                <div class="rank-text">
                                    <h5>
                                        Rank
                                    </h5>
                                    <h2>
                                        169
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card point-info ">

                            </div>
                        </div>
                    </div>

                    <div class="games-menu-container">
                        <div class="menu-list">
                            <div class="card find-code">

                            </div>

                            <div class="card tebak-bangunan">

                            </div>
                        </div>
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