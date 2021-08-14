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
        <title>PPLK 2021 - {{ $dataUkm->namaLengkap }}</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/ukm.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!--Per Page Styling-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/ukmDetail2.css">
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
                    <div class="navbar-cust-ukm p-0 d-lg-block d-xl-none">
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
                        <div class="name-ukm">
                            <h2>{{$dataUkm->namaSingkat}}</h2>
                            <h5>{{$dataUkm->namaLengkap}}</h5>
                            <div class="detail-headline">
                                <div class="pembina">
                                    <h6>Pembina</h6>
                                    <p>{{$dataUkm->ukms->pembina}}</p>
                                </div>
                                <div class="ketua">
                                    <h6>Ketua UKM</h6>
                                    <p>{{$dataUkm->ukms->ketuaUmum}}</p>
                                </div>
                                <div class="dies-natalis">
                                    <h6>Tahun Berdiri</h6>
                                    <p>{{$dataUkm->ukms->tahunBerdiri}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="right-side-card">
                            <div class="logo-ukm">
                                <img src="{{$dataUkm->ukms->logo ?? asset('assets/images/LogoItera.png')}}" alt="poster">
                            </div>
                            <!--qr code-->
                            <div class="qr-code">
                                <a class="qrCode" href="{{ route('ukmQR', $dataUkm->id)}}">
                                    <svg width=100% viewBox="0 0 122 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="122" height="32" rx="5" fill="url(#paint0_linear)"/>
                                        <path d="M60.2803 15.4209C60.2803 16.2868 60.1143 17.016 59.7822 17.6084C59.4535 18.2008 58.9733 18.6175 58.3418 18.8584L60.0508 20.6992H58.4785L57.1309 19.0977H56.9404C55.863 19.0977 55.0345 18.7786 54.4551 18.1406C53.8789 17.4993 53.5908 16.5895 53.5908 15.4111C53.5908 14.2327 53.8805 13.3278 54.46 12.6963C55.0426 12.0648 55.8727 11.749 56.9502 11.749C58.0114 11.749 58.8317 12.0697 59.4111 12.7109C59.9906 13.3522 60.2803 14.2555 60.2803 15.4209ZM54.8311 15.4209C54.8311 16.2998 55.0085 16.9671 55.3633 17.4229C55.7181 17.8753 56.2438 18.1016 56.9404 18.1016C57.6338 18.1016 58.1562 17.877 58.5078 17.4277C58.8626 16.9785 59.04 16.3096 59.04 15.4209C59.04 14.5452 58.8643 13.8812 58.5127 13.4287C58.1644 12.9762 57.6436 12.75 56.9502 12.75C56.2503 12.75 55.7214 12.9762 55.3633 13.4287C55.0085 13.8812 54.8311 14.5452 54.8311 15.4209ZM62.9805 15.1816H63.791C64.3346 15.1816 64.7285 15.0807 64.9727 14.8789C65.2168 14.6771 65.3389 14.3776 65.3389 13.9805C65.3389 13.5768 65.207 13.2871 64.9434 13.1113C64.6797 12.9355 64.2826 12.8477 63.752 12.8477H62.9805V15.1816ZM62.9805 16.1484V19H61.8135V11.8613H63.8301C64.7513 11.8613 65.4333 12.0339 65.876 12.3789C66.3187 12.724 66.54 13.2448 66.54 13.9414C66.54 14.8301 66.0778 15.4632 65.1533 15.8408L67.1699 19H65.8418L64.1328 16.1484H62.9805ZM73.8447 12.7598C73.1742 12.7598 72.6468 12.9974 72.2627 13.4727C71.8786 13.9479 71.6865 14.6038 71.6865 15.4404C71.6865 16.3161 71.8704 16.9785 72.2383 17.4277C72.6094 17.877 73.1449 18.1016 73.8447 18.1016C74.1475 18.1016 74.4404 18.0723 74.7236 18.0137C75.0068 17.9518 75.3014 17.8737 75.6074 17.7793V18.7803C75.0475 18.9919 74.4128 19.0977 73.7031 19.0977C72.6582 19.0977 71.8558 18.7819 71.2959 18.1504C70.736 17.5156 70.4561 16.609 70.4561 15.4307C70.4561 14.6885 70.5911 14.0391 70.8613 13.4824C71.1348 12.9258 71.5286 12.4993 72.043 12.2031C72.5573 11.9069 73.1611 11.7588 73.8545 11.7588C74.5837 11.7588 75.2575 11.9118 75.876 12.2178L75.4561 13.1895C75.2152 13.0755 74.9596 12.9762 74.6895 12.8916C74.4225 12.8037 74.141 12.7598 73.8447 12.7598ZM81.8135 16.29C81.8135 17.1722 81.5872 17.8607 81.1348 18.3555C80.6823 18.8503 80.0524 19.0977 79.2451 19.0977C78.7406 19.0977 78.2946 18.9837 77.9072 18.7559C77.5199 18.528 77.222 18.2008 77.0137 17.7744C76.8053 17.348 76.7012 16.8532 76.7012 16.29C76.7012 15.4144 76.9258 14.7308 77.375 14.2393C77.8242 13.7477 78.4574 13.502 79.2744 13.502C80.0557 13.502 80.6742 13.7542 81.1299 14.2588C81.5856 14.7601 81.8135 15.4372 81.8135 16.29ZM77.8828 16.29C77.8828 17.5368 78.3434 18.1602 79.2646 18.1602C80.1761 18.1602 80.6318 17.5368 80.6318 16.29C80.6318 15.0563 80.1729 14.4395 79.2549 14.4395C78.7731 14.4395 78.4232 14.599 78.2051 14.918C77.9902 15.237 77.8828 15.6943 77.8828 16.29ZM84.958 19.0977C84.2842 19.0977 83.7585 18.8535 83.3809 18.3652C83.0033 17.877 82.8145 17.1917 82.8145 16.3096C82.8145 15.4242 83.0049 14.7357 83.3857 14.2441C83.7699 13.7493 84.3005 13.502 84.9775 13.502C85.6872 13.502 86.2275 13.764 86.5986 14.2881H86.6572C86.6019 13.9007 86.5742 13.5947 86.5742 13.3701V11.4023H87.7266V19H86.8281L86.6279 18.292H86.5742C86.2064 18.8291 85.6676 19.0977 84.958 19.0977ZM85.2656 18.1699C85.7376 18.1699 86.0811 18.0381 86.2959 17.7744C86.5107 17.5075 86.6214 17.0762 86.6279 16.4805V16.3193C86.6279 15.639 86.5173 15.1556 86.2959 14.8691C86.0745 14.5827 85.7279 14.4395 85.2559 14.4395C84.8522 14.4395 84.5413 14.6038 84.3232 14.9326C84.1051 15.2581 83.9961 15.7236 83.9961 16.3291C83.9961 16.9281 84.1019 17.3854 84.3135 17.7012C84.5251 18.0137 84.8424 18.1699 85.2656 18.1699ZM91.7256 19.0977C90.8857 19.0977 90.2282 18.8535 89.7529 18.3652C89.2809 17.8737 89.0449 17.1982 89.0449 16.3389C89.0449 15.4567 89.2646 14.7633 89.7041 14.2588C90.1436 13.7542 90.7474 13.502 91.5156 13.502C92.2285 13.502 92.7917 13.7184 93.2051 14.1514C93.6185 14.5843 93.8252 15.18 93.8252 15.9385V16.5586H90.2266C90.2428 17.0827 90.3844 17.4863 90.6514 17.7695C90.9183 18.0495 91.2943 18.1895 91.7793 18.1895C92.0983 18.1895 92.3945 18.1602 92.668 18.1016C92.9447 18.0397 93.2409 17.9388 93.5566 17.7988V18.7314C93.2767 18.8649 92.9935 18.9593 92.707 19.0146C92.4206 19.07 92.0934 19.0977 91.7256 19.0977ZM91.5156 14.3711C91.151 14.3711 90.8581 14.4867 90.6367 14.7178C90.4186 14.9489 90.2884 15.2858 90.2461 15.7285H92.6973C92.6908 15.2826 92.5833 14.9456 92.375 14.7178C92.1667 14.4867 91.8802 14.3711 91.5156 14.3711Z" fill="white"/>
                                        <path d="M34.916 11.4167V13.9167H32.416V11.4167H34.916ZM36.166 10.1667H31.166V15.1667H36.166V10.1667ZM34.916 18.0834V20.5834H32.416V18.0834H34.916ZM36.166 16.8334H31.166V21.8334H36.166V16.8334ZM41.5827 11.4167V13.9167H39.0827V11.4167H41.5827ZM42.8327 10.1667H37.8327V15.1667H42.8327V10.1667ZM37.8327 16.8334H39.0827V18.0834H37.8327V16.8334ZM39.0827 18.0834H40.3327V19.3334H39.0827V18.0834ZM40.3327 16.8334H41.5827V18.0834H40.3327V16.8334ZM37.8327 19.3334H39.0827V20.5834H37.8327V19.3334ZM39.0827 20.5834H40.3327V21.8334H39.0827V20.5834ZM40.3327 19.3334H41.5827V20.5834H40.3327V19.3334ZM41.5827 18.0834H42.8327V19.3334H41.5827V18.0834ZM41.5827 20.5834H42.8327V21.8334H41.5827V20.5834ZM45.3327 11.8334H43.666V9.33335H41.166V7.66669H45.3327V11.8334ZM45.3327 24.3334V20.1667H43.666V22.6667H41.166V24.3334H45.3327ZM28.666 24.3334H32.8327V22.6667H30.3327V20.1667H28.666V24.3334ZM28.666 7.66669V11.8334H30.3327V9.33335H32.8327V7.66669H28.666Z" fill="white"/>
                                        <defs>
                                        <linearGradient id="paint0_linear" x1="91.4067" y1="62.5455" x2="71.3629" y2="-44.5334" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0187499" stop-color="#63BCF4"/>
                                        <stop offset="1" stop-color="#479FD7"/>
                                        </linearGradient>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--second headline-->
                    <div class="second-headline">
                        <div class="artikel-ukm">
                            <div class="artikel-image">
                                <img src="{{$dataUkm->ukms->logo}}">
                            </div>
                            <div class="d-flex justify-content-between artikel-custom">
                                <div class="artikel-1">
                                    <div class="artikel-title">
                                        {{$dataUkm->artikels->body}}
                                </div>
                            </div>
                        </div>
                        <!--small menu-->
                        <ul class="small-ukm-menu nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#filosofi" class="nav-link active button-ukm" aria-selected="true" role="tab">
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
                        <div class="tab-pane active custom-card-ukm justify-content-center info-jurusan"  role="tabpanel" id="filosofi">
                            <div class="card custom-ukm w-100">
                                <img src="{{$dataUkm->ukms->logo}}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Filosofi Logo
                                    </h2>
                                    <p class="card-text">
                                    {!! nl2br(e($dataUkm->ukms->filosofiLogo)) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Content 2-->
                        <div class="tab-pane custom-card-ukm justify-content-center info-jurusan"  role="tabpanel" id="visi">
                            <div class="card custom-ukm w-100">
                                <img src="{{$dataUkm->ukms->logo}}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Visi
                                    </h2>
                                    <p class="card-text">
                                        {{ $dataUkm->visimisis->visi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Content 3-->
                        <div class="tab-pane custom-card-ukmjustify-content-center info-jurusan"  role="tabpanel" id="misi">
                            <div class="card custom-ukm w-100">
                                <img src="{{$dataUkm->ukms->logo}}" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Misi
                                    </h2>
                                    <p class="card-text">
                                        {!! nl2br(e($dataUkm->visimisis->misi)) !!}
                                    </p>
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
                <p>Copyright © 2021 PPLK  -
                    Institut Teknologi Sumatera (ITERA)</p>
                <p>{{ $dataUkm->socialmedias->website }}</p>
            </div>
            <div class="icon-sosmed">
                <a href="{{ $dataUkm->socialmedias->instagram }}"><img src="{{ asset('assets') }}/images/ige.png"></a>
                <a href="{{ $dataUkm->socialmedias->youtube }}"><img src="{{ asset('assets') }}/images/yutub.png"></a>
            </div>
        </div>
    </body>

    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <!--script-->
</html>
