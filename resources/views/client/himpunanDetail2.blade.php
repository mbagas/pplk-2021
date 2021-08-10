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
        <title>PPLK 2021 - {{ $dataHimpunan->ormawas->namaLengkap }}</title>

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
            <div class="navbar p-0 d-none d-xl-block d-xxl-block">
                <div class="container-fluid head-desktop head-bar">
                    <div class="navbar-brand">
                        <a class="pplk-logo " href="#">
                            <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                        </a>
                        <div class="search-bar w-100">
                            <div class="search-form"> 
                                <i class="fa fa-search"></i> 
                                <input type="text" class="form-control search-form-input" placeholder="Search">  
                            </div>
                        </div>
                    </div>
                    <div class="navbar main-nav-desktop">
                        <ul class="container-fluid footer-bar">
                                <li>
                                    <a href="{{ route('home')}}" class>
                                        <svg class="icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                d="M2.59961 14.8556C2.59961 8.75534 3.26478 9.18109 6.84519 5.86067C8.41169 4.59967 10.8492 2.1665 12.9541 2.1665C15.0579 2.1665 17.5442 4.58775 19.1248 5.86067C22.7052 9.18109 23.3693 8.75534 23.3693 14.8556C23.3693 23.8332 21.247 23.8332 12.9844 23.8332C4.72186 23.8332 2.59961 23.8332 2.59961 14.8556Z" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.83398 17.4797H16.1336" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Beranda
                                    </a>     
                                </li>                    
        
                                <li>
                                    <a href="{{ route('biodata')}}">
                                        <svg class="icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                d="M12.8309 23.4669C8.83147 23.4669 5.41602 22.8446 5.41602 20.352C5.41602 17.8595 8.8098 15.5586 12.8309 15.5586C16.8304 15.5586 20.2459 17.8372 20.2459 20.3297C20.2459 22.8212 16.8521 23.4669 12.8309 23.4669Z" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                d="M12.8232 12.1049C15.4478 12.1049 17.5751 9.9776 17.5751 7.35298C17.5751 4.72836 15.4478 2.6001 12.8232 2.6001C10.1986 2.6001 8.07034 4.72836 8.07034 7.35298C8.06148 9.96873 10.174 12.096 12.7897 12.1049C12.8016 12.1049 12.8124 12.1049 12.8232 12.1049Z" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                        Biodata                             
                                    </a>
                                </li>  
        
                                <li>
                                    <a href="{{ route('tugas')}}">
                                        <svg class="icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                d="M3.91016 13.0003C3.91016 20.5154 6.18299 23.0212 13.0004 23.0212C19.8189 23.0212 22.0907 20.5154 22.0907 13.0003C22.0907 5.48524 19.8189 2.97949 13.0004 2.97949C6.18299 2.97949 3.91016 5.48524 3.91016 13.0003Z" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.8939 17.0046H9.07227" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.8939 12.9313H9.07227" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.0588 8.85905H9.07422" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                        Tugas     
                                    </a>
                                </li>
        
                                <li>
                                    <a href="{{ route('games') }}">
                                        <svg class="icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path 
                                                d="M9.22461 2.40088C9.23185 3.17447 9.86582 3.795 10.6394 3.78776H11.7315C12.9261 3.77845 13.9034 4.73613 13.9199 5.93065V7.02175" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"   
                                                d="M23.6307 15.0532C23.6307 9.02993 21.0452 7.02148 13.2876 7.02148C5.52889 7.02148 2.94336 9.02993 2.94336 15.0532C2.94336 21.0775 5.52889 23.0849 13.2876 23.0849C21.0452 23.0849 23.6307 21.0775 23.6307 15.0532Z" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.0269 13.0679V16.941" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.0025 15.0039H8.05078" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.7677 13.1856H16.6571" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.6428 16.8819H18.5321" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Games                                   
                                    </a>
                                </li>
        
                                <li style="margin-left: 0;">
                                    <a href="{{ route('leaderboard') }}">
                                        <svg class="icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                d="M2.30078 12.0366C2.30078 4.73454 4.73552 2.2998 12.0376 2.2998C19.3397 2.2998 21.7745 4.73454 21.7745 12.0366C21.7745 19.3388 19.3397 21.7735 12.0376 21.7735C4.73552 21.7735 2.30078 19.3388 2.30078 12.0366Z" 
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.48335 10.2607V16.9544" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.038 7.05713V16.955" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.5166 13.7979V16.9547" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                            Leaderboard
                                    </a>
                                </li>
        
                        </ul>
                    </div>
                    <div class="head-menu row ">
                        <a class="head-menu-profile" href="profile">
                            <img src="{{ asset('assets') }}/images/jhonnysins.png" alt="notification-menu">  
                        </a>
                        <div class="username">
                            {{ auth()->user()->nama }}
                        </div> 
                        <a class="head-menu-icon" href="#">
                            <img src="{{ asset('assets') }}/images/notification.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-icon" href="#">
                            <img src="{{ asset('assets') }}/images/messages.png" alt="notification-menu">
                        </a>
                    </div>
                </div>
            </div>

            <div class="page-content container-fluid col-xl-6">
                <!--content-->
                <div class=" desktop">
                    <!--NavBar Desktop-->
                    <div class="navbar-cust-himp p-0 d-none d-xl-block d-xxl-block">
                        <div class="nav-back">
                            <a class="navback-home" href="{{ route('ukm') }}">
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
                            <a class="navback-home" href="{{ route('ukm') }}">
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
                            <h2>{{ $dataHimpunan->ormawas->namaSingkat }}</h2>
                            <h5>{{ $dataHimpunan->ormawas->namaLengkap }}</h5>
                            <div class="detail-headline">
                                <div class="pembina">
                                    <h6>Pembina</h6>
                                    <p>{{ $dataHimpunan->pembina }}</p>
                                </div>
                                <div class="ketua">
                                    <h6>Ketua Himpunan</h6>
                                    <p>{{ $dataHimpunan->ketuaHimpunan }}</p>
                                </div>
                                <div class="dies-natalis">
                                    <h6>Tahun Berdiri</h6>
                                    <p>{{ $dataHimpunan->tahunBerdiri }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="logo-himpunan">
                            <img src="{{ $dataHimpunan->logo }}" alt="poster">
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
                                        <h2>{{ $dataHimpunan->ormawas->namaLengkap }}</h2>
                                    </div>
                                    <p>{{ $dataArtikel->body }}</p>
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
                                <img src="{{ $dataHimpunan->logo }}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Filosofi Logo
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataHimpunan->filosofiLogo)) !!}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--Content 2-->
                        <div class="tab-pane justify-content-center"  role="tabpanel" id="visi">
                            <div class="card custom-himpunan w-100">
                                <img src="{{ $dataHimpunan->logo }}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Visi
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataVisiMisi->visi)) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Content 3-->
                        <div class="tab-pane justify-content-center"  role="tabpanel" id="misi">
                            <div class="card custom-himpunan w-100">
                                <img src="{{ $dataHimpunan->logo }}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Misi
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataVisiMisi->misi)) !!}
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
                <img src="{{ asset('assets') }}/images/logo-footer.png">
            </div>
            <div class="detail-info">
                <p>Copyright © 2016 UPT TIK -
                    Institut Teknologi Sumatera (ITERA)</p>
                <p>https://sap.itera.ac.id</p>
                <p>Telepon : 07218030188 – 07218030189</p>
            </div>
            <div class="icon-sosmed">
                <img src="{{ asset('assets') }}/images/twiter.png">
                <img src="{{ asset('assets') }}/images/yutub.png">
                <img src="{{ asset('assets') }}/images/ige.png">
            </div>
        </div>
    </body>

    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <!--script-->
</html>
