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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/logoPplk.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!--Content-->
            <div class="page-content container-fluid col-xl-6">
                <!--NavBar-->
                <nav class="navbar p-0">
                    <div class="container-fluid nav-back">
                        <a class="navback-home" href="{{ route('home') }}">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="36" height="36" rx="10" fill="white"/>
                                <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </nav>

                <div class="card">
                    <div class="main-content">
                        <div class="title-page">
                            <h2>Logo Divisi PPLK 2021</h2>
                        </div>

                            <div class="container-fluid">
                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Amerta Davendra</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-2.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Satyanitya</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-3.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Aradhana Wirasatya</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-4.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Garudha Atharya</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-5.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Sarasanitya</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-6.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Danapati Anargya</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-7.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Sagramantya</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-8.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Agaracilva</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-9.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Anantakara</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-10.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Agranta Maneka</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-11.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Abhinaksa</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-12.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Adichandra</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-13.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Argapana</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-14.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Rayapati</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-15.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Satyacala</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-16.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Drayanaka</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-divisi">
                                        <img class="rounded" src="{{ asset('assets') }}/images/LOGO DIVISI-17.png"
                                            alt="a snow-capped mountain range" />
                                        <div class="card-body">
                                            <h6 class="card-title">Gardapati</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Required JS -->
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('assets') }}/js/custom.js"></script>
    </body>
</html>
