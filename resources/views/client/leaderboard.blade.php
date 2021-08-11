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
        <title>PPLK 2021 - Leaderboard</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/leaderboard.css"></link>
    </head>
    <body>
        <div class="main-wrapper">

            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!-- Navbar -->
            <div class="navbar p-0 d-lg-block d-xl-none">
                <div class="container-fluid head-bar">
                    <a class="pplk-logo navbar-brand" href="{{ route('home')}}">
                        <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                    </a>
                    <div class="head-menu row ">
                        <a class="head-menu-icon" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('assets') }}/images/logout.png" alt="notification-menu">
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                            @csrf
                        </form>
                        <a class="head-menu-icon" href="#">
                            <img src="{{ asset('assets') }}/images/notification.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-icon" href="report-page.blade.php">
                            <img src="{{ asset('assets') }}/images/messages.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-profile" href="{{ route('biodata.index') }}">
                            <img src="{{ asset('assets') }}/images/jhonnysins.png" alt="notification-menu">
                        </a>
                    </div>
                </div>
        </div>

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
                        </div>        
                    </div>-->
                    <div class="title-page">
                        <h1>
                            Leaderboard
                        </h1>
                    </div>

                    <div class="top-3-winner row row-cols-3">
                        <div class="winner-2 winner">
                            <div class="profile-winner">
                                <img src="{{ asset('assets') }}/images/jhonnysins.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                                <div class="winner-patch">
                                    <h1 class="winner-text">
                                        2
                                    </h1>
                                </div>
                            </div>
                            <div class="info-winner">
                                <div class="nama">
                                    <h2>
                                        Dhifaf Athiyah Z
                                    </h2>
                                </div>

                                <div class="prodi">
                                    <h3>
                                        Teknik Informatika
                                    </h3>
                                </div>

                                <div class="point">
                                    <h1>
                                        6969
                                    </h1>
                                </div>
                            </div>

                        </div>

                        <div class="winner-1 winner">
                            <div class="profile-winner">
                                <img src="{{ asset('assets') }}/images/jhonnysins.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                                <div class="winner-patch">
                                    <h1 class="winner-text">
                                        1
                                    </h1>
                                </div>
                            </div>
                            <div class="info-winner">
                                <div class="nama">
                                    <h2>
                                        Dhifaf Athiyah Z
                                    </h2>
                                </div>

                                <div class="prodi">
                                    <h3>
                                        Teknik Informatika
                                    </h3>
                                </div>

                                <div class="point">
                                    <h1>
                                        6969
                                    </h1>
                                </div>
                            </div>

                        </div>

                        <div class="winner-3 winner">
                            <div class="profile-winner">
                                <img src="{{ asset('assets') }}/images/jhonnysins.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                                <div class="winner-patch">
                                    <h1 class="winner-text">
                                        3
                                    </h1>
                                </div>
                            </div>
                            <div class="info-winner">
                                <div class="nama">
                                    <h2>
                                        Dhifaf Athiyah Z
                                    </h2>
                                </div>

                                <div class="prodi">
                                    <h3>
                                        Teknik Informatika
                                    </h3>
                                </div>

                                <div class="point">
                                    <h1>
                                        6969
                                    </h1>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="leaderboard-container">

                        <div class="leaderboard-list">

                            <div class="user-data">

                            </div>

                            <div class="others-data">

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