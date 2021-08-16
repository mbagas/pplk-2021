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
                                <img src="{{ $scores[1]->user->img ?? asset('assets/images/user_default.png')}}" alt="profile-img" />
                                <div class="winner-patch">
                                    <h1 class="winner-text">
                                        2
                                    </h1>
                                </div>
                            </div>
                            <div class="info-winner">
                                <div class="nama">
                                    <h2>
                                        {{ $scores[1]->user->nama ?? "???"}}
                                    </h2>
                                </div>

                                <div class="prodi">
                                    <h3>
                                        {{$scores[1]->user->prodis->ormawas->namaLengkap ?? "???"}}
                                    </h3>
                                </div>

                                <div class="point">
                                    <h1>
                                        {{$scores[1]->skor ?? "???"}} Points
                                    </h1>
                                </div>
                            </div>

                        </div>

                        <div class="winner-1 winner">
                            <div class="profile-winner">
                                <div class="crown">
                                    <img src="{{ asset('assets') }}/images/crown.png" alt="crown" class="crown-img"/>
                                </div>
                                <img src="{{ $scores[0]->user->img ?? asset('assets/images/user_default.png')}}" alt="profile-img" />
                                <div class="winner-patch">
                                    <h1 class="winner-text">
                                        1
                                    </h1>
                                </div>
                            </div>
                            <div class="info-winner">
                                <div class="nama">
                                    <h2>
                                        {{ $scores[0]->user->nama ?? "???"}}
                                    </h2>
                                </div>

                                <div class="prodi">
                                    <h3>
                                        {{$scores[0]->user->prodis->ormawas->namaLengkap ?? "???"}}
                                    </h3>
                                </div>

                                <div class="point">
                                    <h1>
                                        {{ $scores[0]->skor ?? "???"}} Points
                                    </h1>
                                </div>
                            </div>

                        </div>

                        <div class="winner-3 winner">
                            <div class="profile-winner">
                                <img src="{{ $scores[2]->user->img ?? asset('assets/images/user_default.png')}}" alt="profile-img" />
                                <div class="winner-patch">
                                    <h1 class="winner-text">
                                        3
                                    </h1>
                                </div>
                            </div>
                            <div class="info-winner">
                                <div class="nama">
                                    <h2>
                                        {{ $scores[2]->user->nama ?? "???"}}
                                    </h2>
                                </div>

                                <div class="prodi">
                                    <h3>
                                        {{$scores[2]->user->prodis->ormawas->namaLengkap ?? "???"}}
                                    </h3>
                                </div>

                                <div class="point">
                                    <h1>
                                        {{ $scores[2]->skor ?? "???"}} Points
                                    </h1>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="leaderboard-container">

                        <div class="leaderboard-list">
                            <!-- di isi punya si user jadi dia paling atas -->
                            <div class="card user-data card-leaderboard">
                                <div class="number-rank">
                                    <h2>
                                        
                                    </h2>
                                </div>
                                <div class="profile-pic">
                                    <img src="{{ $selfScore->user->img ?? asset('assets/images/user_default.png')}}" alt="profile-img" />
                                </div>
                                <div class="profile-info">
                                    <div class="nama">
                                        <h2>
                                            {{ $selfScore->user->nama ?? "???"}}
                                        </h2>
                                    </div>

                                    <div class="prodi">
                                        <h3>
                                            {{$selfScore->user->prodis->ormawas->namaLengkap ?? "???"}}
                                        </h3>
                                    </div>
                                </div>
                                <div class="point">
                                    <h1>
                                        {{ $selfScore->skor ?? "???"}} Points
                                    </h1>
                                </div>
                            </div>
                            <!-- nilai yang lain for dari sini -->
                            @foreach ($scores as $score)
                            <div class="card others-data card-leaderboard">
                                <div class="number-rank">
                                    <h2>
                                        {{$loop->iteration}}
                                    </h2>
                                </div>
                                <div class="profile-pic">
                                    <img src="{{ $score->user->img ?? asset('assets/images/user_default.png')}}" />
                                </div>
                                <div class="profile-info">
                                    <div class="nama">
                                        <h2>
                                            {{$score->user->nama}}
                                        </h2>
                                    </div>

                                    <div class="prodi">
                                        <h3>
                                            {{$score->user->prodis->ormawas->namaLengkap}}
                                        </h3>
                                    </div>
                                </div>
                                <div class="point">
                                    <h1>
                                        {{$score->skor}} Points
                                    </h1>
                                </div>
                            </div>
                            @endforeach
                            

                            

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