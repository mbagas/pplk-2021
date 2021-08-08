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
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />
        

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/jurusan-page.css"></link>
    </head>

    <body>
        <div class="main-wrapper">
            <!-- Navbar -->
            <nav class="navbar p-0">
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
            </nav>

            <!--Content-->
            <div class="page-content container">
                <div class="first-custom">
                    <!--Title Pertama-->
                    <div class="main-text">
                        <h2 class="jurusan-title-text">Kuliah di ITERA</h2>
                        <p>
                            Jurusan di ITERA setara dengan fakultas. Masing-masing jurusan memiliki program studi yang berbeda-beda. Semua program studi di ITERA merupakan kelompok Saintek (IPA) dimana ITERA hanya menerima siswa dari jurusan IPA pada SNMPTN. Meskipun demikian, siswa dari jurusan IPS masih dapat mendaftar ke ITERA melalui jalur SBMTPN dan memilih UTBK golongan Saintek.
                        </p>
                    </div>
                    <!--Title Kedua-->                    
                    <h2 class="jurusan-title-text"> 3 Jurusan yang terdapat di ITERA</h2>

                    <!-- Small Menu -->
                    <ul class="small-jurusan-menu nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#sains" class="nav-link active button-jurusan" aria-selected="true" role="tab">
                                Jurusan Sains
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#jtpi" class="nav-link button-jurusan" aria-selected="false" role="tab">
                                Jurusan JTPI
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#jtik" class="nav-link button-jurusan" aria-selected="false" role="tab">
                                Jurusan JTIK
                            </button> 
                        </li>                  
                    </ul>
                </div>
                

                <div class="tab-content" id="pills-tabContent">
                    <!--Content 1-->                
                    <div class="tab-pane active custom-card-jurusan justify-content-center info-jurusan"  role="tabpanel" id="sains">
                        <div class="card w-100">
                            <img src="{{ asset('assets') }}/images/jurusan-poster1.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.
                                </p>
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.
                                </p>
                            </div>
                        </div>                                               
                    </div>
                    <!--Content 2-->
                    <div class="tab-pane custom-card-jurusan justify-content-center info-jurusan"  role="tabpanel" id="jtpi">
                        <div class="card w-100">
                            <img src="{{ asset('assets') }}/images/jurusan-poster2.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.
                                </p>
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.
                                </p>
                            </div>
                        </div>                                               
                    </div>
                    <!--Content 3-->
                    <div class="tab-pane custom-card-jurusan justify-content-center info-jurusan"  role="tabpanel" id="jtik">
                        <div class="card w-100">
                            <img src="{{ asset('assets') }}/images/jhonnysins.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.
                                </p>
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.
                                </p>
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