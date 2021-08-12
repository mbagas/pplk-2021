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
        <title>WEB PPLK 2021 - Unit Kegiatan Mahasiswa</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!--Per Page Styling-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/ukm.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')
            <!--NavBar-->
            <nav class="navbar p-0 d-lg-block d-xl-none">
                <div class="container-fluid nav-back">
                    <a class="navback-home" href="{{ route('home')}}">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="10" fill="white"/>
                            <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets') }}/images/jurusan-poster3.png" alt="POSTER" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets') }}/images/jurusan-poster2.png" alt="POSTER" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets') }}/images/jurusan-poster1.png" alt="POSTER" class="d-block w-100">
                        </div>
                    </div>
                </div>
            </nav>
            <!--Content-->
            <div class="page-content container col-xl-6">
                <!-- Navbar Back Desktop-->
                <div class="navbar d-none d-xl-block d-xxl-block">
                    <div class="nav-back">
                        <a class="navback-home" href="{{ route('home')}}">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="50" height="50" rx="10" fill="white"/>
                            <path d="M28.7285 35.5C28.7285 35.5 20.2702 29.284 20.2702 25C20.2702 20.7175 28.7285 14.5 28.7285 14.5" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        </a>
                    </div>
                </div>

                <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-xl-block d-xxl-block" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets') }}/images/jurusan-poster1.png" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets') }}/images/jurusan-poster2.png" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets') }}/images/jurusan-poster3.png" class="d-block w-100" >
                        </div>
                    </div>
                </div>

                <div class="first-custom">
                    <!--First Title-->
                    <div class="main-text">
                        <h2 class="ukm-title-text">Unit Kegiatan Mahasiswa Institut Teknologi Sumatera</h2>
                        <p>
                        UKM merupakan singkatan dari Unit Kegiatan Mahasiswa yang berfungsi sebagai wadah mahasiswa ITERA untuk mengekspresikan minat dan bakat masing masing mahasiswa. Terhitung ITERA memiliki kurang lebih 41 UKM aktif
                        </p>
                    </div>
                    <!--Search Bar-->
                    <div class="row search-bar d-lg-flex d-xl-none">
                        <div class="col-10">
                            <div class="search-form">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control search-form-input" placeholder="Search">
                            </div>
                        </div>
                        <!--Filter Search Button-->
                        <div class="col-2 justify-content-center p-0">
                            <a class="btn filter-search-button">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.46902 15.21H3.69336" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.0449 6.3252H17.8206" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99845 6.27573C7.99845 5.08805 7.02847 4.125 5.83223 4.125C4.636 4.125 3.66602 5.08805 3.66602 6.27573C3.66602 7.46342 4.636 8.42647 5.83223 8.42647C7.02847 8.42647 7.99845 7.46342 7.99845 6.27573Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3324 15.1742C18.3324 13.9865 17.3632 13.0234 16.167 13.0234C14.97 13.0234 14 13.9865 14 15.1742C14 16.3619 14.97 17.3249 16.167 17.3249C17.3632 17.3249 18.3324 16.3619 18.3324 15.1742Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="row row-cols-3 g-3" style="padding-top: 10px;">
                        @foreach ($ukms as $ukm)
                        <div class="col custom-mini-ukm-col">
                            <div class="card">
                                <div class="image">
                                    <img src="{{$ukm->logo ?? asset('assets/images/LogoItera.png')}} " alt="poster">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{$ukm->ormawas->namaSingkat}}</h6>
                                </div>
                                <a href="../ukmDetail/{{$ukm->ormawas->id}}" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="col custom-mini-ukm-col">
                            <div class="card">
                                
                                <img src="{{ asset('assets') }}/images/logo-box.png" alt="poster">
                                <div class="card-body">
                                    <h6 class="card-title">UKM PENCAK SILAT</h6>
                                </div>
                                <a href="../ukmDetail" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col custom-mini-ukm-col">
                            <div class="card">
                                <img src="{{ asset('assets') }}/images/logo-box.png" alt="poster">
                                <div class="card-body">
                                    <h6 class="card-title">UKM C</h6>
                                </div>
                                <a href="../ukmDetail" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col custom-mini-ukm-col">
                            <div class="card">
                                <img src="{{ asset('assets') }}/images/logo-box.png" alt="poster">
                                <div class="card-body">
                                    <h6 class="card-title">UKM D</h6>
                                </div>
                                <a href="../ukmDetail" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col custom-mini-ukm-col">
                            <div class="card">
                                <img src="{{ asset('assets') }}/images/logo-box.png" alt="poster">
                                <div class="card-body">
                                    <h6 class="card-title">UKM E</h6>
                                </div>
                                <a href="../ukmDetail" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col custom-mini-ukm-col">
                            <div class="card">
                                <img src="{{ asset('assets') }}/images/logo-box.png" alt="poster">
                                <div class="card-body">
                                    <h6 class="card-title">UKM F</h6>
                                </div>
                                <a href="../ukmDetail" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <!--script-->
</html>
