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
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/detail-tugas.css"></link>
</head>
<body>
<div class="main-wrapper container-fluid">

    <!-- Desktop Navabar top -->
    <div class="navbar p-0 d-none d-xl-block d-xxl-block ">
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
                <a class="head-menu-icon" href="reportPage.blade.php">
                    <img src="{{ asset('assets') }}/images/messages.png" alt="notification-menu">
                </a>
                <a class="head-menu-icon" href="logoOut">
                    <img src="{{ asset('assets') }}/images/logout.png" alt="notification-menu">
                </a>
            </div>
        </div>

    </div>

    <div class="justify-content-center d-flex">
        <div class="col-xl-6 desktop-container">

            <div class="page-content dTugas-top">
                <div class="dTugas-top-bg">
                    <div class="topbg-circle c1"></div>
                    <div class="topbg-circle c2"></div>      
                </div>
                <a href="tugas.html" class="dTugas-back-btn btn">
                    <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5625 16.5832C7.5625 16.5832 1.4375 12.0938 1.4375 8.99984C1.4375 5.90692 7.5625 1.4165 7.5625 1.4165" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <h1 class="dTugas-top-title dTugas-title">
                    <!-- TUGAS Test buat link ke page detail-tugas.html -->
                    Tugas Membuat Laporan Pertanggung Jawaban
                </h1>
                <img src="../assets/images/laptop3d.png" class="dTugas-top-img">
                
            </div>

            <div class="page-content d-tTugas-mainContent">

                <div class="dTugas-head">
                    <h1 class="dTugas-main-title dTugas-title">Tugas Membuat Laporan Pertanggung Jawaban</h1>
                        <div class="dTugas-tags">
                            <div class="dTugas-tag">
                            <p class="bodytext text-small">Kategori</p>
                            <p class="dTugas-tag-block bodytext text-small">Individu</p>
                        </div>
                        <div class="dTugas-tag">
                            <p class="bodytext text-small">Dates</p>
                            <p class="dTugas-tag-block bodytext text-small">13 Jul - 20 Jul at 23:59 WIB</p>
                        </div>
                    </div>
                </div>

                <div class="dTugas-body">
                    <h2 class="dTugas-body-title dTugas-title subheadline">Deskripsi</h2>
                    <P class="dTugas-body-text bodytext">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        panjang bener itu si lorem
                    </P>
                </div>

                <div class="dTugas-materials-slider">

                    <div class="dTugas-material" onclick="alert('Opening Materi....')">
                        <img class="dTugas-material-img dTugas-img" src="../assets/images/jurusan-poster1.png">
                        <div class="dTugas-material-info">
                            <div class="dTugas-material-text">
                                <p class="subheadline dTugas-title text-small">Panduan Membuat html yg bener.pdf</p>
                                <p class="subheadline text-small">PDF</p>
                            </div>
                            <a href="#" onclick="alert('Downloading Materi....')">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.2" cx="14.2422" cy="14.2407" r="14" fill="#3991C9"/>
                                    <path d="M14.3229 16.5312L14.3229 8.50391" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.2676 14.5796L14.3236 16.5316L12.3796 14.5796" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.4122 11.6592H18.0342C19.3909 11.6592 20.4902 12.7585 20.4902 14.1158V17.3718C20.4902 18.7252 19.3936 19.8218 18.0402 19.8218H10.6136C9.2569 19.8218 8.1569 18.7218 8.1569 17.3652L8.1569 14.1085C8.1569 12.7558 9.25424 11.6592 10.6069 11.6592H11.2349" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="dTugas-material" onclick="alert('Opening Materi....')">
                        <img class="dTugas-material-img dTugas-img" src="../assets/images/ukm-poster-1.png">
                        <div class="dTugas-material-info">
                            <div class="dTugas-material-text">
                                <p class="subheadline dTugas-title text-small">Referensi Lapor Komandan.pdf</p>
                                <p class="subheadline text-small">PDF</p>
                            </div>
                            <a href="#" onclick="alert('Downloading Materi....')">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.2" cx="14.2422" cy="14.2407" r="14" fill="#3991C9"/>
                                    <path d="M14.3229 16.5312L14.3229 8.50391" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.2676 14.5796L14.3236 16.5316L12.3796 14.5796" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.4122 11.6592H18.0342C19.3909 11.6592 20.4902 12.7585 20.4902 14.1158V17.3718C20.4902 18.7252 19.3936 19.8218 18.0402 19.8218H10.6136C9.2569 19.8218 8.1569 18.7218 8.1569 17.3652L8.1569 14.1085C8.1569 12.7558 9.25424 11.6592 10.6069 11.6592H11.2349" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="dTugas-material" onclick="alert('Opening Materi....')">
                        <img class="dTugas-material-img dTugas-img" src="../assets/images/jhonnysins.png">
                        <div class="dTugas-material-info">
                            <div class="dTugas-material-text">
                                <p class="subheadline dTugas-title text-small">Cheat dapet pacar.pdf</p>
                                <p class="subheadline text-small">PDF</p>
                            </div>
                            <a href="#" onclick="alert('Downloading Materi....')">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.2" cx="14.2422" cy="14.2407" r="14" fill="#3991C9"/>
                                    <path d="M14.3229 16.5312L14.3229 8.50391" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.2676 14.5796L14.3236 16.5316L12.3796 14.5796" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.4122 11.6592H18.0342C19.3909 11.6592 20.4902 12.7585 20.4902 14.1158V17.3718C20.4902 18.7252 19.3936 19.8218 18.0402 19.8218H10.6136C9.2569 19.8218 8.1569 18.7218 8.1569 17.3652L8.1569 14.1085C8.1569 12.7558 9.25424 11.6592 10.6069 11.6592H11.2349" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="dTugas-submisions">
                    
                    <div class="dTugas-submisions-head">
                        <svg class="dTugas-submisions-head-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5231 2.54202H6.97897C5.24564 2.53535 3.82481 3.91702 3.78397 5.64952V14.577C3.74564 16.3378 5.14147 17.797 6.90231 17.8362C6.92814 17.8362 6.95314 17.837 6.97897 17.8362H13.6365C15.3815 17.7653 16.7565 16.3237 16.744 14.577V6.93868L12.5231 2.54202Z" stroke="#071D2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.3047 2.53223V4.95639C12.3047 6.13973 13.2614 7.09889 14.4447 7.10223H16.7405" stroke="#071D2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.1484 13.0392H7.64844" stroke="#071D2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.4451 9.91227H7.64844" stroke="#071D2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="dTugas-submisions-head-title subheadline dTugas-title">Attachments</h1>
                    </div>

                    <div class="dTugas-attachments">
                        <!-- TIAP ATTACHMENT HARUS PUNYA WRAPPER SENDIRI -->
                        <div class="dTugas-attachment-wrapper">
                            <div class="dTugas-attachment" onclick="alert('Opening file...')">
                                <img class="dTugas-img dTugas-attachment-img" src="../assets/images/jurusan-poster3.png">
                                <div class="dTugas-attachment-info">
                                    <p class="subheadline dTugas-title text-small">Keluh kesah kuliah onlen ospek jg onlen.pdf</p>
                                    <p class="bodytext text-small">PDF</p>
                                </div>
                                <div class="dTugas-attachment-icon">
                                    <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#E0E0E0"/>
                                        <circle cx="2" cy="8" r="2" fill="#E0E0E0"/>
                                        <circle cx="2" cy="14" r="2" fill="#E0E0E0"/>
                                    </svg>
                                    <div class="dTugas-attachment-options-wrapper">
                                        <div class="dTugas-attachment-options">
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.91624 4.08731L5.05452 6.97958L1.79972 4.94383C1.33338 4.65206 1.43038 3.94371 1.95786 3.78946L9.68561 1.52638C10.1686 1.38481 10.6163 1.83641 10.4728 2.321L8.18655 10.0434C8.02992 10.5716 7.3256 10.666 7.0366 10.1976L5.053 6.98009" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Share</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.05859 7.71803L6.05859 1.69751" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.51758 6.25415L6.05958 7.71816L4.60158 6.25415" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.37705 4.06396H8.84355C9.86105 4.06396 10.6855 4.88847 10.6855 5.90647V8.34848C10.6855 9.36349 9.86305 10.186 8.84805 10.186L3.27805 10.186C2.26055 10.186 1.43555 9.36099 1.43555 8.34348V5.90097C1.43555 4.88647 2.25855 4.06396 3.27305 4.06396L3.74405 4.06396" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Download</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.74405 1.39453H3.87455C2.33705 1.39453 1.37305 2.48303 1.37305 4.02403V8.18103C1.37305 9.72203 2.33255 10.8105 3.87455 10.8105H8.28655C9.82905 10.8105 10.7885 9.72203 10.7885 8.18103V6.16703" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41333 5.46049L8.14983 1.72399C8.61533 1.25899 9.36983 1.25899 9.83533 1.72399L10.4438 2.33249C10.9093 2.79799 10.9093 3.55299 10.4438 4.01799L6.68933 7.77249C6.48583 7.97599 6.20983 8.09049 5.92183 8.09049H4.04883L4.09583 6.20049C4.10283 5.92249 4.21633 5.65749 4.41333 5.46049Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.58203 2.30127L9.86503 4.58427" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Rename</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.66191 4.73438C8.66191 4.73438 8.39041 8.10188 8.23291 9.52038C8.15791 10.1979 7.73941 10.5949 7.05391 10.6074C5.74941 10.6309 4.44341 10.6324 3.13941 10.6049C2.47991 10.5914 2.06841 10.1894 1.99491 9.52388C1.83641 8.09288 1.56641 4.73438 1.56641 4.73438" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.354 3.12012H0.875" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.71931 3.11999C7.32681 3.11999 6.98881 2.84249 6.91181 2.45799L6.79031 1.84999C6.71531 1.56949 6.46131 1.37549 6.17181 1.37549H4.05531C3.76581 1.37549 3.51181 1.56949 3.43681 1.84999L3.31531 2.45799C3.23831 2.84249 2.90031 3.11999 2.50781 3.11999" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small delete">Delete</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dTugas-attachment-wrapper">
                            <div class="dTugas-attachment" onclick="alert('Opening file...')">
                                <img class="dTugas-img dTugas-attachment-img" src="">
                                <div class="dTugas-attachment-info">
                                    <p class="subheadline dTugas-title text-small">Hero hyper paling op se-Land of dawn.pdf</p>
                                    <p class="bodytext text-small">PDF</p>
                                </div>
                                <div class="dTugas-attachment-icon">
                                    <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#E0E0E0"/>
                                        <circle cx="2" cy="8" r="2" fill="#E0E0E0"/>
                                        <circle cx="2" cy="14" r="2" fill="#E0E0E0"/>
                                    </svg>
                                    <div class="dTugas-attachment-options-wrapper">
                                        <div class="dTugas-attachment-options">
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.91624 4.08731L5.05452 6.97958L1.79972 4.94383C1.33338 4.65206 1.43038 3.94371 1.95786 3.78946L9.68561 1.52638C10.1686 1.38481 10.6163 1.83641 10.4728 2.321L8.18655 10.0434C8.02992 10.5716 7.3256 10.666 7.0366 10.1976L5.053 6.98009" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Share</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.05859 7.71803L6.05859 1.69751" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.51758 6.25415L6.05958 7.71816L4.60158 6.25415" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.37705 4.06396H8.84355C9.86105 4.06396 10.6855 4.88847 10.6855 5.90647V8.34848C10.6855 9.36349 9.86305 10.186 8.84805 10.186L3.27805 10.186C2.26055 10.186 1.43555 9.36099 1.43555 8.34348V5.90097C1.43555 4.88647 2.25855 4.06396 3.27305 4.06396L3.74405 4.06396" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Download</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.74405 1.39453H3.87455C2.33705 1.39453 1.37305 2.48303 1.37305 4.02403V8.18103C1.37305 9.72203 2.33255 10.8105 3.87455 10.8105H8.28655C9.82905 10.8105 10.7885 9.72203 10.7885 8.18103V6.16703" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41333 5.46049L8.14983 1.72399C8.61533 1.25899 9.36983 1.25899 9.83533 1.72399L10.4438 2.33249C10.9093 2.79799 10.9093 3.55299 10.4438 4.01799L6.68933 7.77249C6.48583 7.97599 6.20983 8.09049 5.92183 8.09049H4.04883L4.09583 6.20049C4.10283 5.92249 4.21633 5.65749 4.41333 5.46049Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.58203 2.30127L9.86503 4.58427" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Rename</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.66191 4.73438C8.66191 4.73438 8.39041 8.10188 8.23291 9.52038C8.15791 10.1979 7.73941 10.5949 7.05391 10.6074C5.74941 10.6309 4.44341 10.6324 3.13941 10.6049C2.47991 10.5914 2.06841 10.1894 1.99491 9.52388C1.83641 8.09288 1.56641 4.73438 1.56641 4.73438" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.354 3.12012H0.875" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.71931 3.11999C7.32681 3.11999 6.98881 2.84249 6.91181 2.45799L6.79031 1.84999C6.71531 1.56949 6.46131 1.37549 6.17181 1.37549H4.05531C3.76581 1.37549 3.51181 1.56949 3.43681 1.84999L3.31531 2.45799C3.23831 2.84249 2.90031 3.11999 2.50781 3.11999" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small delete">Delete</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dTugas-attachment-wrapper">
                            <div class="dTugas-attachment" onclick="alert('Opening file...')">
                                <img class="dTugas-img dTugas-attachment-img" src="">
                                <div class="dTugas-attachment-info">
                                    <p class="subheadline dTugas-title text-small">List nama dosen cowo tapi cantik.pdf</p>
                                    <p class="bodytext text-small">PDF</p>
                                </div>
                                <div class="dTugas-attachment-icon">
                                    <svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#E0E0E0"/>
                                        <circle cx="2" cy="8" r="2" fill="#E0E0E0"/>
                                        <circle cx="2" cy="14" r="2" fill="#E0E0E0"/>
                                    </svg>
                                    <div class="dTugas-attachment-options-wrapper">
                                        <div class="dTugas-attachment-options">
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.91624 4.08731L5.05452 6.97958L1.79972 4.94383C1.33338 4.65206 1.43038 3.94371 1.95786 3.78946L9.68561 1.52638C10.1686 1.38481 10.6163 1.83641 10.4728 2.321L8.18655 10.0434C8.02992 10.5716 7.3256 10.666 7.0366 10.1976L5.053 6.98009" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Share</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.05859 7.71803L6.05859 1.69751" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.51758 6.25415L6.05958 7.71816L4.60158 6.25415" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.37705 4.06396H8.84355C9.86105 4.06396 10.6855 4.88847 10.6855 5.90647V8.34848C10.6855 9.36349 9.86305 10.186 8.84805 10.186L3.27805 10.186C2.26055 10.186 1.43555 9.36099 1.43555 8.34348V5.90097C1.43555 4.88647 2.25855 4.06396 3.27305 4.06396L3.74405 4.06396" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Download</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.74405 1.39453H3.87455C2.33705 1.39453 1.37305 2.48303 1.37305 4.02403V8.18103C1.37305 9.72203 2.33255 10.8105 3.87455 10.8105H8.28655C9.82905 10.8105 10.7885 9.72203 10.7885 8.18103V6.16703" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41333 5.46049L8.14983 1.72399C8.61533 1.25899 9.36983 1.25899 9.83533 1.72399L10.4438 2.33249C10.9093 2.79799 10.9093 3.55299 10.4438 4.01799L6.68933 7.77249C6.48583 7.97599 6.20983 8.09049 5.92183 8.09049H4.04883L4.09583 6.20049C4.10283 5.92249 4.21633 5.65749 4.41333 5.46049Z" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.58203 2.30127L9.86503 4.58427" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small subheadline">Rename</span>
                                                </div>
                                            </a>
                                            <a>
                                                <div class="dTugas-attachment-option">
                                                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.66191 4.73438C8.66191 4.73438 8.39041 8.10188 8.23291 9.52038C8.15791 10.1979 7.73941 10.5949 7.05391 10.6074C5.74941 10.6309 4.44341 10.6324 3.13941 10.6049C2.47991 10.5914 2.06841 10.1894 1.99491 9.52388C1.83641 8.09288 1.56641 4.73438 1.56641 4.73438" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.354 3.12012H0.875" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.71931 3.11999C7.32681 3.11999 6.98881 2.84249 6.91181 2.45799L6.79031 1.84999C6.71531 1.56949 6.46131 1.37549 6.17181 1.37549H4.05531C3.76581 1.37549 3.51181 1.56949 3.43681 1.84999L3.31531 2.45799C3.23831 2.84249 2.90031 3.11999 2.50781 3.11999" stroke="#130F26" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="text-small delete">Delete</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dTugas-submisions-turnIn">
                        <button id="turnInt" class="dTugas-turnIn-btn btn">Turn In</button>
                        <button id="unsubmit" class="dTugas-turnIn-btn btn unsubmit d-none">Unsubmit</button>
                    </div>

                </div>

            </div>

            <div class="dTugas-footer">

                <div class="dTugas-footer-contact">
                    <a onclick="alert('Ringing... Daplok kak robert')">
                        <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.8751 12.6757C28.1893 6.78559 23.9632 2.02843 18.1999 0.478117C15.4057 -0.257574 12.4556 -0.142106 9.72752 0.809719C6.99946 1.76154 4.61778 3.50636 2.88776 5.82052C1.15774 8.13469 0.158208 10.9128 0.0172724 13.7987C-0.123664 16.6846 0.60042 19.5468 2.09671 22.0186C2.25663 22.258 2.3629 22.5291 2.40825 22.8134C2.4536 23.0977 2.43695 23.3885 2.35945 23.6658C1.94578 25.4117 1.57125 27.1652 1.13895 29.0993C3.00231 28.5105 4.69237 28.0093 6.35635 27.4335C7.02344 27.2024 7.55822 27.2825 8.19922 27.5732C13.3738 29.9211 18.403 29.5763 22.998 26.2391C27.5707 22.9279 29.5365 18.2956 28.8751 12.6757ZM21.9079 24.4297C17.8216 27.4875 13.3458 27.754 8.75077 25.5179C8.13959 25.2198 7.63275 25.1453 7.00294 25.3633C5.92778 25.749 4.82467 26.0639 3.56318 26.4627C3.85945 25.1229 4.09796 23.9732 4.37001 22.831C4.44213 22.5823 4.45747 22.3205 4.4149 22.0651C4.37233 21.8097 4.27293 21.5671 4.12405 21.3552C1.3141 17.0378 1.37 11.6732 4.23399 7.50485C7.12778 3.28993 12.1234 1.32408 17.1992 2.40297C19.6002 2.91824 21.7905 4.14405 23.4854 5.92099C25.1802 7.69792 26.3011 9.94374 26.7024 12.3664C27.5092 17.2819 25.9198 21.4372 21.9154 24.4279L21.9079 24.4297Z" fill="url(#paint0_linear)"/>
                            <path d="M20.4803 18.1429C19.8803 17.8261 19.2132 17.6342 18.6169 17.3118C17.7952 16.8683 17.0964 17.0733 16.5188 17.6845C16.0007 18.2305 15.5629 18.1131 15.0747 17.7031C13.7134 16.5673 12.5179 15.2464 11.5231 13.7789C11.1653 13.2516 11.0964 12.8137 11.6777 12.3422C12.3597 11.7832 12.6299 11.0957 12.1753 10.2087C11.8809 9.63478 11.7225 8.99192 11.4933 8.3826C11.0461 7.19192 10.2262 6.97204 9.20693 7.79192C8.08892 8.68819 7.52991 9.84161 7.65103 11.2261C7.60373 12.2756 7.81758 13.3205 8.27339 14.2671C9.60137 17.135 11.83 19.4905 14.62 20.9752C15.7475 21.5786 17.0226 21.8512 18.2983 21.7615C19.3771 21.7038 20.2921 21.3087 20.9554 20.4385C21.6709 19.4994 21.5107 18.687 20.4803 18.1429Z" fill="url(#paint1_linear)"/>
                            <defs>
                            <linearGradient id="paint0_linear" x1="21.7278" y1="56.8759" x2="-25.9795" y2="-9.74547" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0187499" stop-color="#63BCF4"/>
                            <stop offset="1" stop-color="#479FD7"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear" x1="17.9439" y1="35.5958" x2="-6.1282" y2="3.53342" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0187499" stop-color="#63BCF4"/>
                            <stop offset="1" stop-color="#479FD7"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <div class="dTugas-footer-contact-text">
                        <p class="bodytext text-small">Bingung?</p>
                        <p class="bodytext text-small">Kontak Daplok!</p>
                    </div>
                </div>

                <div id="drop-bg" class="dTugas-hidden"> 
                    
                <!-- SEMI-BLACK BACKGROUND --> </div>
                <div class="dTugas-footer-submit">
                    <!-- footer-submit act as wrapper -->
                    <div class="dTugas-footer-option">
                        <button id="dTugas-footer-expand" class="dTugas-footer-btn btn">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.74104 1.38965V17.5687" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.839 9.4793H1.64453" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="dTugas-footer-option">
                        <button id="dTugas-footer-collapse" class="dTugas-footer-btn btn dTugas-hidden">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7487 3.89587L10.7487 17.6459" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.22657 9.44153L10.7486 3.89569L16.2715 9.44153" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <!-- DROPUP CONTENT -->
                    <div id="dTugas-footer-dropContentWrapper" class="dTugas-footer-dropContent-wrapper">
                        <div class="dTugas-footer-dropContent">
                            <div class="dTugas-footer-option">
                                <button class="dTugas-footer-btn btn" data-bs-toggle="modal" data-bs-target="#dTugas-modal-gallery">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4412 7.24104V14.7128C19.4412 17.4811 17.7087 19.4336 14.9404 19.4336H7.0112C4.24286 19.4336 2.51953 17.4811 2.51953 14.7128V7.24104C2.51953 4.4727 4.25203 2.52112 7.0112 2.52112H14.9404C17.7087 2.52112 19.4412 4.4727 19.4412 7.24104Z" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.83984 15.0617L6.24051 13.5832C6.72726 13.0671 7.53851 13.0423 8.05551 13.5282C8.07109 13.5437 8.91443 14.4008 8.91443 14.4008C9.42318 14.9187 10.2546 14.927 10.7725 14.4192C10.8064 14.3862 12.912 11.8323 12.912 11.8323C13.4547 11.1732 14.4291 11.0788 15.0891 11.6224C15.1331 11.6591 17.1223 13.7005 17.1223 13.7005" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45395 8.37212C9.45395 9.26037 8.73437 9.97995 7.84611 9.97995C6.95786 9.97995 6.23828 9.26037 6.23828 8.37212C6.23828 7.48387 6.95786 6.76428 7.84611 6.76428C8.73437 6.7652 9.45395 7.48387 9.45395 8.37212Z" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <span class="bodytext dTugas-footer-option-text">Foto & Video</span>
                            </div>
                            <div class="dTugas-footer-option">
                                <button class="dTugas-footer-btn btn" data-bs-toggle="modal" data-bs-target="#dTugas-modal-docs">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4054 14.8715H7.78711" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.4054 11.0339H7.78711" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.3125 7.20504H7.78711" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5823 2.52063C14.5823 2.52063 7.54508 2.5243 7.53408 2.5243C5.00408 2.53988 3.4375 4.20455 3.4375 6.74373V15.1734C3.4375 17.7254 5.016 19.3965 7.568 19.3965C7.568 19.3965 14.6043 19.3938 14.6163 19.3938C17.1463 19.3782 18.7138 17.7126 18.7138 15.1734V6.74373C18.7138 4.19172 17.1343 2.52063 14.5823 2.52063Z" stroke="white" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <span class="bodytext dTugas-footer-option-text">Dokument</span>
                            </div>
                            <div class="dTugas-footer-option">
                                <button class="dTugas-footer-btn btn" data-bs-toggle="modal" data-bs-target="#dTugas-modal-text">
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0V3H5.5V15H8.5V3H14V0H0Z" fill="white"/>
                                    </svg>
                                </button>
                                <span class="bodytext dTugas-footer-option-text">Text</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <!-- KUMPULAN MODAL -->
        <div class="dTugas-popup"> 
            <div class="modal dTugas-modal" id="dTugas-modal-gallery" data-bs-backdrop="static" aria-labelledby="dTugas-modal-gallery-ARIAlabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content dTugas-modal-content">
                        <div class="modal-header">
                            <span class="modal-title dTugas-modal-title subheadline" id="dTugas-modal-gallery-ARIAlabel">Tambah Foto/Video</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline dTugas-modal-form">
                                <div class="form-group">
                                    <label class="dTugas-modal-label subheadline" for="gallery-input">Pilih Foto/Video : </label>
                                    <input class="form-control" type="file" accept="image/*,video/*" id="gallery-input" multiple>
                                </div>
                                <button class="btn dTugas-modal-submit" type="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal dTugas-modal" id="dTugas-modal-docs" data-bs-backdrop="static" aria-labelledby="dTugas-modal-docs-ARIAlabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content dTugas-modal-content">
                        <div class="modal-header">
                            <span class="modal-title dTugas-modal-title subheadline" id="dTugas-modal-docs-ARIAlabel">Tambah Dokumen</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline dTugas-modal-form">
                                <div class="form-group">
                                    <label class="dTugas-modal-label subheadline" for="docs-input">Pilih File : </label>
                                    <input class="form-control" type="file" id="docs-input" multiple>
                                </div>
                                <button class="btn dTugas-modal-submit" type="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal dTugas-modal" id="dTugas-modal-text" data-bs-backdrop="static" aria-labelledby="dTugas-modal-text-ARIAlabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content dTugas-modal-content">
                        <div class="modal-header">
                            <span class="modal-title dTugas-modal-title subheadline" id="dTugas-modal-text-ARIAlabel">Tambah Text</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline dTugas-modal-form dTugas-modal-text-form">
                                <textarea class="form-control" id="text-bodytext-input" placeholder="Jawaban"></textarea>
                                <button class="btn dTugas-modal-submit" type="submit">Tambah</button>
                            </form>
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
    <script src="{{ asset('assets') }}/js/dTugas.js"></script>
</body>
</html>