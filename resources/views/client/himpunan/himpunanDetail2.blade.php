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
        <title>PPLK 2021 - {{ $dataHimpunan->namaLengkap }}</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/himpunan.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!--Per Page Styling-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/himpunanDetail2.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')
            <div class="page-content container-fluid col-xl-6">
                <!--content-->
                <div class=" desktop">
                    <!--NavBar Desktop-->
                    <div class="navbar-cust-himp p-0 d-none d-xl-block d-xxl-block">
                        <div class="nav-back">
                            <a class="navback-home" href="{{ route('himpunan') }}">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="50" height="50" rx="10" fill="white"/>
                                    <path d="M28.7285 35.5C28.7285 35.5 20.2702 29.284 20.2702 25C20.2702 20.7175 28.7285 14.5 28.7285 14.5" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                        
                            </a>
                        </div>
                        <div class="navback-custom">            
                            <img src="{{ asset('assets') }}/images/ukm-poster-1.png">
                        </div>
                    </div>

                    <!--NavBack Mobile-->
                    <div class="navbar-cust-himp p-0 d-lg-block d-xl-none">
                        <div class="nav-back">
                            <a class="navback-home" href="{{ route('himpunan') }}">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="36" height="36" rx="10" fill="white"/>
                                    <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                            
                            </a>
                        </div>
                        <div class="navback-custom">            
                            <img src="{{ asset('assets') }}/images/ukm-poster-1.png">
                        </div>
                    </div>
                    <!--first headline-->
                    <div class="first-headline card d-flex justify-content-between ">
                        <div class="name-himpunan">
                            <h2>{{ $dataHimpunan->namaSingkat }}</h2>
                            <h5>{{ $dataHimpunan->namaLengkap }}</h5>
                            <div class="detail-headline">
                                <div class="pembina">
                                    <h6>Pembina</h6>
                                    <p>{{ $dataHimpunan->himpunans->pembina }}</p>
                                </div>
                                <div class="ketua">
                                    <h6>Ketua Himpunan</h6>
                                    <p>{{ $dataHimpunan->himpunans->ketuaHimpunan }}</p>
                                </div>
                                <div class="dies-natalis">
                                    <h6>Tahun Berdiri</h6>
                                    <p>{{ $dataHimpunan->himpunans->tahunBerdiri }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="logo-himpunan">
                            <img src="{{ $dataHimpunan->himpunans->logo }}" alt="poster">
                        </div>
                    </div>
                    <!--second headline-->
                    <div class="second-headline">
                        <div class="artikel-himpunan">
                            <div class="artikel-image">
                                <img src="{{ asset('assets') }}/images/jurusan-poster1.png">
                            </div>
                            <div class="d-flex justify-content-between artikel-custom">
                                <div class="artikel-1">
                                    <div class="artikel-title">
                                        <h2>{{ $dataHimpunan->namaLengkap }}</h2>
                                    </div>
                                    <p>{{ $dataHimpunan->artikels->body }}</p>
                                </div>
                            </div>
                        </div>
                        <!--small menu-->
                        <ul class="small-himpunan-menu nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#filosofi" class="nav-link active button-himpunan" aria-selected="true" role="tab">
                                    Filosofi Logo
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#visi" class="nav-link button-ukm" aria-selected="false" role="tab">
                                    Visi
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#misi" class="nav-link button-ukm" aria-selected="false" role="tab">
                                    Misi
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <!--Content 1-->
                        <div class="tab-pane active justify-content-center"  role="tabpanel" id="filosofi">
                            <div class="card custom-himpunan w-100">
                                <img src="{{ $dataHimpunan->himpunans->logo }}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Filosofi Logo
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataHimpunan->himpunans->filosofiLogo)) !!}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--Content 2-->
                        <div class="tab-pane justify-content-center"  role="tabpanel" id="visi">
                            <div class="card custom-himpunan w-100">
                                <img src="{{ $dataHimpunan->himpunans->logo }}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Visi
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataHimpunan->visimisis->visi)) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Content 3-->
                        <div class="tab-pane justify-content-center"  role="tabpanel" id="misi">
                            <div class="card custom-himpunan w-100">
                                <img src="{{ $dataHimpunan->himpunans->logo }}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Misi
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataHimpunan->visimisis->misi)) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="footer-blue justify-content-around">
            <div class="footer-blue-logo">
                <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" >
            </div>
            <div class="detail-info">
                <p>Copyright © 2021 PPLK -
                    Institut Teknologi Sumatera (ITERA)</p>
                <p>{{$dataHimpunan->socialmedias->website}}</p>

            </div>
            <div class="icon-sosmed">
                <a href="{{$dataHimpunan->socialmedias->instagram}}"><img src="{{ asset('assets') }}/images/ige.png"></a>
                <a href="{{$dataHimpunan->socialmedias->youtube}}"><img src="{{ asset('assets') }}/images/yutub.png"></a>
                
            </div>
        </div>
    </body>

    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <!--script-->
</html>
