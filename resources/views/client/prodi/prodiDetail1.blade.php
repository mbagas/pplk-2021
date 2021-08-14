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
        <title>PPLK 2021 - {{ $dataProdi->namaLengkap }}</title>

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
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png"></link>

        <!--Per Page Styling-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/detail-prodi.css"></link>
    </head>
    <body>
        <div class="main-wrapper container-fluid">
            <!-- Desktop Navabar top -->
            @include('client.menu')
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
                                <img src="{{asset('logoProdi/'.$dataProdi->namaSingkat.'.svg')}}" alt="poster">
                            </div>          

                            <div class="name-prodi">
                                <h5>Program Studi</h5>
                                <h2>{{ $dataProdi->namaLengkap }}</h2>
                                <div class="detail-headline">
                                    <div class="dies-natalis">
                                        <h6>Tahun Berdiri</h6>
                                        <p>{{ $dataProdi->prodis->tahunBerdiri }}</p>
                                    </div>
                                    <div class="lokasiprodi">
                                        <p><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.875 6.87538C8.875 5.83943 8.03557 5 7.00038 5C5.96443 5 5.125 5.83943 5.125 6.87538C5.125 7.91057 5.96443 8.75 7.00038 8.75C8.03557 8.75 8.875 7.91057 8.875 6.87538Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99963 14.75C6.10078 14.75 1.375 10.9238 1.375 6.92247C1.375 3.78998 3.89283 1.25 6.99963 1.25C10.1064 1.25 12.625 3.78998 12.625 6.92247C12.625 10.9238 7.89849 14.75 6.99963 14.75Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> {{ $dataProdi->prodis->ruangProdi }}</p>
                                    </div>    
                                </div>
                            </div>  
                        </div>
                        
                        <!--headline kedua-->
                        <div class="second-headline">
                            <h2>Tentang Kami</h2>
                        
                        <!--headline ketiga-->
                        <div class="third-headline">
                            <div class="visi-ukm">                    
                                <h2>Visi</h2>
                                <p>{{ $dataProdi->visimisis->visi }}</p>
                            </div>
                            <!--headline keempat-->
                            <div class="misi-ukm">
                                <h2>Misi</h2>
                                <p>{!! nl2br(e($dataProdi->visimisis->misi)) !!}</p>
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
                <p>{{ $dataProdi->socialmedias->website }}</p>
            </div>
            <div class="icon-sosmed">
                <a href="{{ $dataProdi->socialmedias->instagram }}"><img src="{{ asset('assets') }}/images/ige.png"></a>
                <a href="{{ $dataProdi->socialmedias->youtube }}"><img src="{{ asset('assets') }}/images/yutub.png"></a>
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