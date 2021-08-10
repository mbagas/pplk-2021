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
        <title>PPLK 2021 - {{ $dataProdi->ormawas->namaLengkap }}</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"></link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/prodi.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" /></link>

        <!--Per Page Styling-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/detail-prodi.css"></link>
    </head>
    <body>
        <div class="main-wrapper container-fluid">
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
                            Nama User
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
            <!--Content-->
            <div class="page-content container-fluid col-xl-6">
                <div class=" desktop">
                    <!--NavBack Desktop-->
                    <div class="navbar-cust-prodi p-0 d-none d-xl-block d-xxl-block" style="margin-top:100px; margin-right:auto; margin-left:auto;">
                        <div class=" prodi-navback">
                            <a class="navback-home" href="{{ route('prodi')}}">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="10" fill="url(#paint0_linear)"/>
                                <path d="M28.7285 35.5C28.7285 35.5 20.2702 29.284 20.2702 25C20.2702 20.7175 28.7285 14.5 28.7285 14.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                <linearGradient id="paint0_linear" x1="37.4618" y1="97.7273" x2="-44.4208" y2="-17.0102" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                <stop offset="1" stop-color="#479FD7"/>
                                </linearGradient>
                                </defs>
                            </svg>                              
                            </a>
                        </div>
                    </div>
                    <!--NavBack Mobile-->
                    <div class="navbar-cust-prodi p-0 d-lg-block d-xl-none">
                        <div class="prodi-navback">
                            <a class="navback-home" href="{{ route('prodi')}}">
                                <img src="{{ asset('assets') }}/images/back-button-biru-jingan-sekali.png" alt="tombol-sialan">
                            </svg>

                            </a>
                        </div>
                    </div>

                    <div class="first-custom">        
                        <!--headline pertama-->
                        <div class="first-headline">
                            
                            <div class="logo-prodi">
                                <img src="{{ asset('assets') }}/images/LogoItera.png" alt="poster">
                            </div>          

                            <div class="name-prodi">
                                <h5>Program Studi</h5>
                                <h2>{{ $dataProdi->ormawas->namaLengkap }}</h2>
                                <div class="detail-headline">
                                    <div class="dies-natalis">
                                        <h6>Tahun Berdiri</h6>
                                        <p>{{ $dataProdi->tahunBerdiri }}</p>
                                    </div>
                                    <div class="lokasiprodi">
                                        <p><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.875 6.87538C8.875 5.83943 8.03557 5 7.00038 5C5.96443 5 5.125 5.83943 5.125 6.87538C5.125 7.91057 5.96443 8.75 7.00038 8.75C8.03557 8.75 8.875 7.91057 8.875 6.87538Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99963 14.75C6.10078 14.75 1.375 10.9238 1.375 6.92247C1.375 3.78998 3.89283 1.25 6.99963 1.25C10.1064 1.25 12.625 3.78998 12.625 6.92247C12.625 10.9238 7.89849 14.75 6.99963 14.75Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> {{ $dataProdi->ruangProdi }}</p>
                                    </div>    
                                </div>
                            </div>  
                        </div>
                        
                        <!--headline kedua-->
                        <div class="second-headline">
                            <h2>Tentang Kami</h2>                                
                            <p>{{ $dataProdi->ormawas->artikels->body }}</p>
                        </div>
                        
                        <!--headline ketiga-->
                        <div class="third-headline">
                            <div class="visi-ukm">                    
                                <h2>Visi</h2>
                                <p>{{ $dataProdi->ormawas->visimisis->visi }}</p>
                            </div>
                            <!--headline keempat-->
                            <div class="misi-ukm">
                                <h2>Misi</h2>
                                <p>{!! nl2br(e($dataProdi->ormawas->visimisis->misi)) !!}</p>
                            </div>
                        </div>
                    
                        <!--struktur-headline prodi-->
                        {{-- <div class="struktur-headline">
                            <h2>Stuktur Program Studi</h2>
                        </div>

                        <div class="last-headline">
                            <div class="logo-prodi">
                                <img src="{{ asset('assets') }}/images/jurusan-poster1.png" alt="poster">
                            </div>                   
                            <div class="name-prodi">
                                <h5>Dr. Moedji Raharto</h5>
                                <div class="detail-prodikiri">
                                    <div class="kepalabidang">
                                        <h6>Kepala Bidang Studi</h6>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div class="last-headline">
                            <div class="name-prodikanan">
                                <h5>Dr. Deni Okta Lestari, S.Si</h5>
                                <div class="detail-prodikanan">
                                    <div class="sekretaris">
                                        <h6>sekretaris</h6>
                                    </div>
                                </div>
                            </div> 
                            <div class="logo-prodi">
                                <img src="{{ asset('assets') }}/images/jurusan-poster1.png" alt="poster">
                            </div>                    
                        </div>

                        <!--headline slick-->
                        <div class="slick-headline">
                            <div class="container-fluid nav-link">                           
                            <a class="navlink-detail" href="../html/index.html">
                                Lihat Detail
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 2.5C0.223858 2.5 0 2.72386 0 3C0 3.27614 0.223858 3.5 0.5 3.5V2.5ZM7.5 3L7.85355 3.35355L8.20711 3L7.85355 2.64645L7.5 3ZM5.85355 0.646447C5.65829 0.451184 5.34171 0.451184 5.14645 0.646447C4.95118 0.841709 4.95118 1.15829 5.14645 1.35355L5.85355 0.646447ZM5.14645 4.64645C4.95118 4.84171 4.95118 5.15829 5.14645 5.35355C5.34171 5.54882 5.65829 5.54882 5.85355 5.35355L5.14645 4.64645ZM0.5 3.5H7.5V2.5H0.5V3.5ZM7.85355 2.64645L5.85355 0.646447L5.14645 1.35355L7.14645 3.35355L7.85355 2.64645ZM7.14645 2.64645L5.14645 4.64645L5.85355 5.35355L7.85355 3.35355L7.14645 2.64645Z" fill="#3991C9"/>
                                    </svg>                         
                            </a>
                        </div> 
                        </div>

                        <!--slick carousel-->
                        <div class="slick-wrapper">
                            <div class="carousel-3">
                                <img class="slide-image" src{{ asset('assets') }}/images/jurusan-poster1.png" />
                                <img class="slide-image" src="{{ asset('assets') }}/images/jurusan-poster2.png" />
                                <img class="slide-image" src="{{ asset('assets') }}/images/jurusan-poster3.png" />
                            </div>
                        </div> --}}
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
    <script>
        $(function () {
            $('.carousel-3').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '60px'
            });
        });
    </script>
    <!--script-->
</html>