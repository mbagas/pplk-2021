<!DOCTYPE html>
<html>
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
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/kabinet.css"></head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!--Content-->
            <div class="page-content container-fluid col-xl-6">
                <div class=" desktop">
                    <!--NavBack Desktop-->
                    <div class="navbar-cust-kab p-0 d-none d-xl-block d-xxl-block" style="margin-top:100px; margin-right:auto; margin-left:auto;">
                        <div class=" kab-navback">
                            <a class="navback-home" href="{{ route('home')}}">
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
                    <div class="navbar-cust-kab p-0 d-lg-block d-xl-none">
                        <div class="kab-navback">
                            <a class="navback-home" href="{{ route('home')}}">
                                <img src="{{ asset('assets') }}/images/back-button-biru-jingan-sekali.png" alt="tombol-sialan">
                            </svg>

                            </a>
                        </div>
                    </div>

                    <div class="first-headline">
                        <div class="logo-kabinet">
                            <img src="{{$dataKabinet->logo}}" alt="Kabinet-logo">
                        </div>
                        <div class="name-kabinet">
                            <h2>KM ITERA</h2>
                            <h5>KELUARGA MAHASISWA <br> ITERA 2020-2021 </h5>
                            <div class="detail-headline">
                                <div class="pembina">
                                    <h6>Pembina</h6>
                                    <p>Dr. Ir. Agus</p>
                                </div>
                                <div class="ketua">
                                    <h6>Ketua KM</h6>
                                    <p>{{$dataKabinet->presiden}}</p>
                                </div>
                                <div class="dies-natalis">
                                    <h6>Dies Natalis</h6>
                                    <p>10 Agustus 2010</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="container-fluid list-kabinet justify-content-between">
                        <li>
                            <a href="https://km.itera.ac.id">
                                <svg class="icon-list" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0214 11.2049C13.0928 10.6159 13.1464 10.0268 13.1464 9.41992C13.1464 8.81302 13.0928 8.22397 13.0214 7.63491H16.0381C16.1809 8.20612 16.2702 8.8041 16.2702 9.41992C16.2702 10.0358 16.1809 10.6337 16.0381 11.2049H13.0214ZM11.4417 16.1673C11.9772 15.1766 12.3878 14.1056 12.6734 12.9899H15.3063C14.4495 14.4626 13.0839 15.605 11.4417 16.1673ZM11.2186 11.2049H7.04167C6.95241 10.6159 6.89886 10.0268 6.89886 9.41992C6.89886 8.81302 6.95241 8.21504 7.04167 7.63491H11.2186C11.2989 8.21504 11.3614 8.81302 11.3614 9.41992C11.3614 10.0268 11.2989 10.6159 11.2186 11.2049ZM9.13013 16.5243C8.38935 15.4533 7.79137 14.2662 7.42544 12.9899H10.8348C10.4689 14.2662 9.87091 15.4533 9.13013 16.5243ZM5.56011 5.8499H2.95399C3.80187 4.36835 5.17633 3.22594 6.80961 2.67259C6.27411 3.66327 5.87248 4.73427 5.56011 5.8499ZM2.95399 12.9899H5.56011C5.87248 14.1056 6.27411 15.1766 6.80961 16.1673C5.17633 15.605 3.80187 14.4626 2.95399 12.9899ZM2.22214 11.2049C2.07934 10.6337 1.99009 10.0358 1.99009 9.41992C1.99009 8.8041 2.07934 8.20612 2.22214 7.63491H5.23881C5.16741 8.22397 5.11385 8.81302 5.11385 9.41992C5.11385 10.0268 5.16741 10.6159 5.23881 11.2049H2.22214ZM9.13013 2.30666C9.87091 3.37766 10.4689 4.57362 10.8348 5.8499H7.42544C7.79137 4.57362 8.38935 3.37766 9.13013 2.30666ZM15.3063 5.8499H12.6734C12.3878 4.73427 11.9772 3.66327 11.4417 2.67259C13.0839 3.23486 14.4495 4.36835 15.3063 5.8499ZM9.13013 0.494873C4.19457 0.494873 0.205078 4.51115 0.205078 9.41992C0.205078 11.787 1.14539 14.0571 2.81916 15.7309C3.64793 16.5597 4.63182 17.2171 5.71466 17.6656C6.79749 18.1141 7.95807 18.345 9.13013 18.345C11.4972 18.345 13.7673 17.4047 15.4411 15.7309C17.1149 14.0571 18.0552 11.787 18.0552 9.41992C18.0552 8.24787 17.8243 7.08729 17.3758 6.00445C16.9273 4.92162 16.2699 3.93773 15.4411 3.10896C14.6123 2.28019 13.6284 1.62278 12.5456 1.17425C11.4628 0.725726 10.3022 0.494873 9.13013 0.494873Z" fill="#3991C9"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="icon-list" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.1097 0.709961C4.80827 0.709961 0.470703 5.05528 0.470703 10.4071C0.470703 15.246 3.99859 19.2622 8.60605 19.9881V13.2136H6.15774V10.4071H8.60605V8.2683C8.60605 5.83918 10.0423 4.50364 12.2496 4.50364C13.3003 4.50364 14.3991 4.68752 14.3991 4.68752V7.07793H13.1846C11.9894 7.07793 11.6134 7.82312 11.6134 8.58766V10.4071H14.2931L13.8593 13.2136H11.6134V19.9881C13.8848 19.6279 15.9531 18.4643 17.445 16.7074C18.9368 14.9504 19.7539 12.7159 19.7488 10.4071C19.7488 5.05528 15.4112 0.709961 10.1097 0.709961Z" fill="#3991C9"/>
                                </svg>                                    
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="icon-list" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.62743 18.8218L7.92692 13.4299L16.1415 4.60923C16.5051 4.21408 16.0666 4.02288 15.5853 4.36704L5.44543 12.0023L1.06005 10.3452C0.118799 10.0266 0.108103 9.24902 1.27397 8.68816L18.3556 0.836216C19.1364 0.415576 19.8851 1.06566 19.5856 2.49328L16.6763 18.8218C16.4731 19.9817 15.8848 20.2621 15.0719 19.7268L10.6437 15.8263L8.5152 18.2864C8.26919 18.5796 8.06596 18.8218 7.62743 18.8218Z" fill="#3991C9"/>
                                </svg>                                    
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/km_itera/">
                                <svg class="icon-list" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.86995 0.709961H13.9668C17.0513 0.709961 19.5574 3.21611 19.5574 6.30061V14.3974C19.5574 15.8801 18.9684 17.3022 17.9199 18.3506C16.8715 19.3991 15.4495 19.9881 13.9668 19.9881H5.86995C2.78545 19.9881 0.279297 17.4819 0.279297 14.3974V6.30061C0.279297 4.81788 0.86831 3.39588 1.91676 2.34742C2.96521 1.29897 4.38722 0.709961 5.86995 0.709961ZM5.67717 2.63777C4.75685 2.63777 3.87423 3.00337 3.22346 3.65413C2.5727 4.30489 2.20711 5.18751 2.20711 6.10783V14.5902C2.20711 16.5084 3.759 18.0603 5.67717 18.0603H14.1595C15.0799 18.0603 15.9625 17.6947 16.6132 17.0439C17.264 16.3931 17.6296 15.5105 17.6296 14.5902V6.10783C17.6296 4.18966 16.0777 2.63777 14.1595 2.63777H5.67717ZM14.9789 4.08363C15.2984 4.08363 15.6049 4.21057 15.8308 4.43653C16.0568 4.66249 16.1837 4.96896 16.1837 5.28851C16.1837 5.60807 16.0568 5.91453 15.8308 6.14049C15.6049 6.36645 15.2984 6.49339 14.9789 6.49339C14.6593 6.49339 14.3528 6.36645 14.1269 6.14049C13.9009 5.91453 13.774 5.60807 13.774 5.28851C13.774 4.96896 13.9009 4.66249 14.1269 4.43653C14.3528 4.21057 14.6593 4.08363 14.9789 4.08363ZM9.91835 5.52949C11.1966 5.52949 12.4224 6.03726 13.3263 6.94109C14.2301 7.84493 14.7379 9.0708 14.7379 10.349C14.7379 11.6272 14.2301 12.8531 13.3263 13.7569C12.4224 14.6608 11.1966 15.1685 9.91835 15.1685C8.64013 15.1685 7.41427 14.6608 6.51043 13.7569C5.60659 12.8531 5.09882 11.6272 5.09882 10.349C5.09882 9.0708 5.60659 7.84493 6.51043 6.94109C7.41427 6.03726 8.64013 5.52949 9.91835 5.52949ZM9.91835 7.4573C9.15142 7.4573 8.4159 7.76196 7.8736 8.30426C7.3313 8.84656 7.02663 9.58208 7.02663 10.349C7.02663 11.1159 7.3313 11.8515 7.8736 12.3938C8.4159 12.9361 9.15142 13.2407 9.91835 13.2407C10.6853 13.2407 11.4208 12.9361 11.9631 12.3938C12.5054 11.8515 12.8101 11.1159 12.8101 10.349C12.8101 9.58208 12.5054 8.84656 11.9631 8.30426C11.4208 7.76196 10.6853 7.4573 9.91835 7.4573Z" fill="#3991C9"/>
                                </svg>                                    
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="icon-list" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.4637 2.97797C18.7541 3.37488 17.9892 3.6357 17.1967 3.76044C18.0077 3.15941 18.6343 2.20685 18.9292 1.0615C18.1643 1.62851 17.3165 2.02541 16.4227 2.25221C15.6947 1.27696 14.6718 0.709961 13.5107 0.709961C11.3451 0.709961 9.57579 2.88725 9.57579 5.57485C9.57579 5.96041 9.61265 6.33463 9.67716 6.68617C6.39656 6.48205 3.47536 4.5429 1.53096 1.60583C1.19 2.32025 0.996481 3.15941 0.996481 4.04394C0.996481 5.73361 1.68762 7.2305 2.75658 8.081C2.1023 8.081 1.4941 7.8542 0.95962 7.514C0.95962 7.514 0.95962 7.514 0.95962 7.54802C0.95962 9.90675 2.32346 11.8799 4.12963 12.3222C3.79789 12.4356 3.44771 12.4923 3.08832 12.4923C2.83951 12.4923 2.5907 12.4583 2.35111 12.4016C2.84873 14.318 4.29551 15.7469 6.03717 15.7809C4.69176 17.0964 2.98695 17.8675 1.12549 17.8675C0.812178 17.8675 0.498862 17.8448 0.185547 17.7994C1.93643 19.1829 4.01905 19.9881 6.24912 19.9881C13.5107 19.9881 17.5008 12.5717 17.5008 6.14185C17.5008 5.92639 17.5008 5.72227 17.4916 5.50681C18.2657 4.8264 18.9292 3.96456 19.4637 2.97797Z" fill="#3991C9"/>
                                </svg>                                    
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCrMfDoKjNJfiBdzueOtBFSQ">
                                <svg class="icon-list" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.65789 11.6332L14.2164 8.42014L8.65789 5.20712V11.6332ZM21.0387 3.24718C21.1779 3.75055 21.2743 4.42528 21.3386 5.28209C21.4136 6.13889 21.4457 6.87789 21.4457 7.52049L21.51 8.42014C21.51 10.7656 21.3386 12.49 21.0387 13.5931C20.771 14.557 20.1498 15.1782 19.1859 15.4459C18.6825 15.5852 17.7614 15.6816 16.3477 15.7458C14.9554 15.8208 13.6809 15.8529 12.5028 15.8529L10.7999 15.9172C6.31239 15.9172 3.51706 15.7458 2.41393 15.4459C1.45002 15.1782 0.828838 14.557 0.561086 13.5931C0.421856 13.0897 0.325465 12.415 0.261205 11.5582C0.186234 10.7014 0.154104 9.96239 0.154104 9.31978L0.0898438 8.42014C0.0898438 6.07463 0.261205 4.35031 0.561086 3.24718C0.828838 2.28327 1.45002 1.66209 2.41393 1.39434C2.9173 1.25511 3.83836 1.15872 5.25209 1.09446C6.6444 1.01949 7.9189 0.987356 9.097 0.987356L10.7999 0.923096C15.2874 0.923096 18.0827 1.09446 19.1859 1.39434C20.1498 1.66209 20.771 2.28327 21.0387 3.24718Z" fill="#3991C9"/>
                                </svg>                                    
                            </a>
                        </li>
                    </ul>

                    <div class="video-kabinet">
                        <iframe class="video" height="100%" src="https://www.youtube.com/embed/gaSN9kda7d4?autoplay=1&mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- Small Menu -->
                    <ul class="small-kabinet-menu nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#filosofiLogo" class="nav-link active button-kabinet" aria-selected="true" role="tab">
                                Filosofi logo
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#visiMisi" class="nav-link button-kabinet" aria-selected="false" role="tab">
                                Visi & Misi
                            </button>
                        </li>      
                        
                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#organigram" class="nav-link button-kabinet" aria-selected="false" role="tab">
                                Organigram
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!--Content-pills1-->
                        <div class="tab-pane active body-content justify-content-center" role="tabpanel" id="filosofiLogo">
                            <div id="carouselFilosofiLogo" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="content-kabinet">
                                            <div class="logo-filosofi">
                                                <img src="{{$dataKabinet->logo}}" alt="poster">
                                            </div>
                                            <div class="card-filosofi">
                                                <div class="filosofi-text">
                                                    <p>{{$dataKabinet->filosofiLogo}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Content-pills2-->
                        <div class="tab-pane body-content justify-content-center" role="tabpanel" id="visiMisi">
                            <div id="carouselVisiMisi" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="content-kabinet justify-content-center">
                                            <div class="card-kabinet">
                                                <div class="text">
                                                    <h2 class="card-title">
                                                        Visi
                                                    </h2>
                                                    <p class="card-text">
                                                        "Kabinet KM ITERA sebagai wadah kolaborasi reka cipta untuk ITERA dan Indonesia."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content-kabinet">
                                            <div class="card-kabinet">
                                                <h2 class="card-title">
                                                    Misi
                                                </h2>
                                                <p class="card-text">
                                                    1.	Membangun karakter serta resiliensi mahasiswa ITERA sebagai jawaban atas tantangan zaman. 
                                                </p>
                                                <p class="card-text">
                                                    2.	Membangun rekognisi dan stimulan mahasiswa terhadap bidang penelitian, karya, 
                                                        serta pengembangan inovasi teknologi yang diiringi oleh pembangunan fasilitas yang mendukung.
                                                </p>
                                                <p class="card-text">
                                                    3.	Membangun sinergi ekosistem ormawa KM-ITERA.
                                                </p>
                                                <p class="card-text">
                                                    4.	Membangun afeksi mahasiswa terhadap lingkungan baik di dalam kampus dan di luar kampus.
                                                </p>
                                                <p class="card-text">
                                                    5. Membangun kerja sama dengan pihak kuar kampus yang bersifat akademik maupun non-akademik guna menciptakan ekosistem reka cipta.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev kabinet-prev" type="button" data-bs-target="#carouselVisiMisi" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next kabinet-next" type="button" data-bs-target="#carouselVisiMisi" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        {{-- section organigram --}}
                        <div class="tab-pane body-content justify-content-center" role="tabpanel" id="organigram">
                            <div id="carouselFilosofiLogo" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="content-kabinet">
                                            <div class="logo-filosofi">
                                                <img src="{{$dataKabinet->organigram}}" alt="poster">
                                            </div>
                                            
                                        </div>
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
                        <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png">
                    </div>
                    <div class="detail-info">
                        <p>Copyright © 2021 PPLK -
                            Institut Teknologi Sumatera (ITERA)</p>
                        <p>https://km.itera.ac.id/</p>
                    </div>
                    <div class="icon-sosmed">
                        <a href="#" >
                            <img src="../assets/images/yutub.png">
                        </a>                                   
                        <a href="">
                            <img src="../assets/images/ige.png">  
                        </a>
                    </div>
                </div>
        </div>
        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('assets') }}/js/custom.js"></script>
    </body>
</html>