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
        <title>PPLK 2021 - Program Studi</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/prodi.css">
        </link>
    </head>

    <body>
        <div class="main-wrapper">
             <!-- Desktop Navabar top -->
             <div class="navbar p-0 d-none d-xl-block d-xxl-block">
                <div class="container-fluid head-bar head-desktop">
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
                    <!--Title Pertama-->
                    <div class="main-text">
                        <h2 class="prodi-title-text">Program Studi di Institut Teknologi Sumatera</h2>
                        <p>
                            Pembangunan Program Studi di Institut Teknologi Sumatera akan dilakukan secara bertahap dengan pertimbangan prioritas akan kebutuhan Sumber Daya Manusia di lingkungan lokal maupun nasional. Disamping itu pula yang menjadi pertimbangan adalah kesiapan akan infrastruktur dan sumber daya pendukung lainnya, untuk itu nantinya tidak akan dilaksanakan sekaligus. Prodi-prodi yang menjadi Sains Dasar serta Teknologi Dasar akan diprioritaskan terlebih dahulu.
                            <br/>
                            <br/>
                            Program akademik di Institut Teknologi Sumatera yang dikaji dan direncanakan akan didasarkan pada pertimbangan bahasan di atas. Hal ini mencakup Program Studi (Prodi) yang akan dibuka,  program riset dan inovasi yang direncanakan, termasuk pengembangan Innovation & Techno Park. Program Studi di ITERA akan dibuka secara bertahap dan direncanakan mempunyai sejumlah program studi.
                        </p>
                         <!--Title Kedua-->
                        <h2 class="prodi-title-text"> Program Studi di ITERA dibagi menjadi 3 cluster</h2>
                    </div>

                    <div class="row search-bar">
                        <div class="col-10">
                            <div class="search-form"> 
                                <i class="fa fa-search"></i> 
                                <input type="text" class="form-control search-form-input" placeholder="Search">  
                            </div>
                        </div>
        
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

                        <!-- Small Menu -->
                        <ul class="small-prodi-menu nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#sains" class="nav-link active button-prodi" aria-selected="true" role="tab">
                                    Jurusan Sains
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#jtpi" class="nav-link button-prodi" aria-selected="false" role="tab">
                                    Jurusan JTPI
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button  data-bs-toggle="pill" data-bs-target="#jtik" class="nav-link button-prodi" aria-selected="false" role="tab">
                                    Jurusan JTIK
                                </button> 
                            </li>                  
                        </ul>

                </div>

                <div class="tab-content" id="pills-tabContent">
                <!--Content 1-->                
                <div class="tab-pane active custom-card-prodi justify-content-center info-prodi"  role="tabpanel" id="sains">
                    <div class="row row-cols-3 g-3" style="padding-top: 10px;">
                        @foreach($prodis as $data)
                        @if($data->jurusans_id == 3)
                        <div class="col custosliderm-mini-prodi-col">
                            <div class="card">
                                <div class="image">
                                    <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                        alt="a snow-capped mountain range" />
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{ $data->ormawas->namaLengkap }}</h6>
                                </div>
                            <a href="../prodiDetail/{{$data->ormawas->id}}" class="btn btn-primary rounded custom-more-btn">
                                    Learn More
                            </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <!--Content 2-->
                <div class="tab-pane custom-card-prodi justify-content-center info-prodi"  role="tabpanel" id="jtpi">
                    <div class="row row-cols-3 g-3" style="padding-top: 10px;">
                        @foreach($prodis as $data)
                        @if($data->jurusans_id == 2)
                        <div class="col custom-mini-prodi-col">
                            <div class="card">
                                <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                    alt="a snow-capped mountain range" />
                                <div class="card-body">
                                    <h6 class="card-title">{{ $data->ormawas->namaLengkap }}</h6>
                                </div>
                            <a href="../prodiDetail/{{$data->ormawas->id}}" class="btn btn-primary rounded custom-more-btn">
                                    Learn More
                            </a>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>       
                </div>
                <!--Content 3-->
                <div class="tab-pane custom-card-prodi justify-content-center info-prodi"  role="tabpanel" id="jtik">
                    <div class="row row-cols-3 g-3" style="padding-top: 10px;">
                        @foreach($prodis as $data)
                        @if($data->jurusans_id == 1)
                        <div class="col custom-mini-prodi-col">
                            <div class="card">
                                <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                    alt="a snow-capped mountain range" />
                                <div class="card-body">
                                    <h6 class="card-title">{{ $data->ormawas->namaLengkap }}</h6>
                                </div>
                            <a href="../prodiDetail/{{$data->ormawas->id}}" class="btn btn-primary rounded custom-more-btn">
                                    Learn More
                            </a>
                            </div>
                        </div>
                        @endif
                        @endforeach

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