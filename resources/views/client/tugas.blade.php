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
                <ul class="container-fluid footer-bar">
                        
                        <li>
                            <a href="{{ route('home')}}">
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
                            <a href="{{ route('games')}}">
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
            <!-- Search bar -->
            {{-- <div class="tugas-search">
                <a class="tugas-search-icon" href="#">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.7474" cy="12.7474" r="9.73761" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.5195 20.0259L23.3372 23.8337" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>           
                </a>
                <a  class="tugas-search-icon" href="#">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.9456 3.25C4.0095 3.25 3.25 4.02227 3.25 4.97294V5.98698C3.25 6.69118 3.51779 7.36838 3.9968 7.87775L9.24636 13.4597L9.24867 13.4562C10.2621 14.4937 10.8323 15.8962 10.8323 17.3586V22.3114C10.8323 22.6424 11.1786 22.8537 11.466 22.6976L14.4555 21.0685C14.9068 20.8221 15.1885 20.3432 15.1885 19.8233V17.3457C15.1885 15.8915 15.7506 14.4949 16.7548 13.4597L22.0044 7.87775C22.4822 7.36838 22.75 6.69118 22.75 5.98698V4.97294C22.75 4.02227 21.9917 3.25 21.0556 3.25H4.9456Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>   
                </a>
            </div> --}}
            <!-- Content -->
            <div class="tugas-content container-fluid">
                <div class="col-xl-6 desktop-view">
                    {{-- <div class="col-sm-12">
                        <div class="info-card card justify-content-between " style="height: 160px;" >
                            <div class="info-card-body" >

                                <h1 style="text-align: center">Coming Soon !</h1>


                            </div>
                        </div>
                    </div> --}}

                    <!-- Info Kelompok dan Daplok -->
                    <div class="tugas-kelompok-card mx-auto">
                        <img class="tugas-daplok-img" src="{{ asset('assets') }}/images/jhonnysins.png">
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
                            @if(!$data->status && ($data->tugas->end_time  >= date('d F')))
                            <a href="{{ route('detailTugas', $data->tugas_id) }}">
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
                            <a href="#">
                                <div class="tugas-list-card">
                                    <div class="tugas-list-score">
                                        <span class="tugas-main-text">{{ $data->nilai }}/100</span>
                                    </div>
                                    <img class="tugas-list-image" src="{{ asset('assets') }}/images/LOGO PPLK.png">
                                    <div class="tugas-list-content">
                                        <div class="tugas-list-date">
                                            <p class="tugas-main-text">Due Date</p>
                                            <p class="tugas-main-text">6 April</p>
                                        </div>
                                        <div class="tugas-list-content-left">
                                            <div>
                                                <p class="tugas-list-assigned tugas-main-text">
                                                    Assigned to You
                                                </p>
                                                <p class="tugas-list-title tugas-main-title">
                                                    Tugas Membuat Laporan Pertanggung Jawaban
                                                </p>
                                            </div>
                                            <div>
                                                <p class="tugas-list-status tugas-main-text late">
                                                    Turned In Late
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