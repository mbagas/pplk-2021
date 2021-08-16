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
        <title>PPLK 2021 - Tugas</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/tugas.css"></link>
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!-- FootBar -->
            <div class="navbar p-0 d-lg-block d-xl-none">
                @include('client.footbar_mobile')
            </div>  
            <!-- Search bar -->

            <!-- Content -->
            <div class="tugas-content container-fluid">
                <div class="col-xl-6 desktop-view">

                    <!-- Info Kelompok dan Daplok -->
                    <div class="tugas-kelompok-card mx-auto">
                        <img class="tugas-daplok-img photo-profile" src="{{ auth()->user()->img ?? asset('assets/images/user_default.png') }}" >
                        <div class="tugas-circle tugas-circle1">
                            <svg width="74" height="82" viewBox="0 0 74 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 82C40.8691 82 74 48.8691 74 8C74 5.29704 73.8551 2.62792 73.5726 0H15C6.71573 0 0 6.71572 0 15V82Z" fill="#58B1E9"/>
                            </svg>
                        </div>
                        <div class="tugas-circle tugas-circle2">
                            <svg width="152" height="127" viewBox="0 0 152 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M152 17.0892V112C152 120.284 145.284 127 137 127H4.72822C1.65891 117.553 0 107.47 0 97C0 43.4284 43.4284 0 97 0C117.422 0 136.37 6.31103 152 17.0892Z" fill="url(#paint0_linear)"/>
                                <defs>
                                <linearGradient id="paint0_linear" x1="76" y1="0" x2="76" y2="127" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3991C9"/>
                                <stop offset="1" stop-color="#63BCF4"/>
                                </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="d-flex flex-column" style="height: 100%; position: relative;">
                            <h3 class="tugas-kelompok-text tugas-main-title mb-auto">Kelompok {{ auth()->user()->kelompok }}</h3>
                            <div class="tugas-daplok d-flex justify-content-between">
                                <div class="tugas-daplok-text">
                                    {{-- <h6 class="tugas-main-text"></h6> --}}
                                    <p class="tugas-main-text">{{ auth()->user()->nama }}</p>
                                    <p class="tugas-main-text">{{ auth()->user()->nim }}</p>
                                </div>
                                {{-- <p class="tugas-daplok-text tugas-main-text mt-auto mb-0" style="text-align: right;">+62 821 7768 2346</p> --}}
                            </div>
                        </div>
                    </div>

                    <!-- small bar menu -->
                    <ul class="container-fluid tugas-menu px-0 nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item col" role="presentation">
                            <button class="tugas-menu-item active tugas-main-text" aria-selected="true" role="tab" data-bs-toggle="pill" data-bs-target="#new-task" >
                                New Task
                            </button>
                        </li>
                        <li class="nav-item col" role="presentation">
                            <button class="tugas-menu-item tugas-main-text" aria-selected="true" role="tab" data-bs-toggle="pill" data-bs-target="#completed">
                                Completed
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- card tugas -->
                        <div class="tab-pane active tugas-list" role="tabpanel" id="new-task">
                            <!-- cards start -->
                            @foreach($dataTugas as $data)
                            @if(!$data->status && ($data->tugas->start_time  <= date("Y-m-d H:i:s")) && ($data->tugas->end_time  >= date("Y-m-d H:i:s")))
                            <a href="{{ route('tugasMaba.show', $data) }}">
                                <div class="tugas-list-card">
                                    <div class="tugas-list-score">
                                        {{-- <span class="tugas-main-text">0/100</span> --}}
                                    </div>
                                    <img class="tugas-list-image" src="{{ asset('assets') }}/images/logo-rebahan.png">
                                    <div class="tugas-list-content">
                                        <div class="tugas-list-date">
                                            <p class="tugas-main-text">Deadline</p>
                                            <p class="tugas-main-text">{{date('d F', strtotime($data->tugas->end_time))}}</p>
                                        </div>
                                        <div class="tugas-list-content-left">
                                            <div>
                                                <p class="tugas-list-assigned tugas-main-text">
                                                    Assigned to You
                                                </p>
                                                <p class="tugas-list-title tugas-main-title">
                                                    {{ $data->tugas->judul }}
                                                </p>
                                            </div>
                                            <div>
                                                <p class="tugas-list-status tugas-main-text">
                                                    New Task
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach
                            <!-- cards end -->
                        </div>

                        <!-- card tugas -->
                        <div class="tab-pane tugas-list" role="tabpanel" id="completed">
                            <!-- cards start -->
                            @foreach($dataTugas as $data)
                            @if($data->status)
                            <a href="{{ route('tugasMaba.show', $data) }}">
                                <div class="tugas-list-card">
                                    <div class="tugas-list-score">
                                        <span class="tugas-main-text">{{ $data->nilai ?? '0'}}/100</span>
                                    </div>
                                    <img class="tugas-list-image" src="{{ asset('assets') }}/images/LOGO PPLK.png">
                                    <div class="tugas-list-content">
                                        <div class="tugas-list-date">
                                            <p class="tugas-main-text">Due Date</p>
                                            <p class="tugas-main-text">{{date('d F H:i:s', strtotime($data->tugas->end_time))}}</p>
                                        </div>
                                        <div class="tugas-list-content-left">
                                            <div>
                                                <p class="tugas-list-assigned tugas-main-text">
                                                    Assigned to You
                                                </p>
                                                <p class="tugas-list-title tugas-main-title">
                                                {{$data->tugas->judul}}
                                                </p>
                                            </div>
                                            <div>
                                                <p class="tugas-list-status tugas-main-text late">
                                                    Turned In
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach 
                            <!-- cards end -->
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('assets') }}/js/custom.js"></script>
        <script src="{{ asset('assets') }}/js/dTugas.js"></script>
    </body>

</html>