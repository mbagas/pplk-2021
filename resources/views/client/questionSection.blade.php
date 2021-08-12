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
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/question-section.css"></link>
</head>
<body>
    <div class="main-wrapper">
        <!-- Desktop Navabar top -->
        @include('client.menu')
        <div class="page-content desktop col-xl-6">
            <div class="bg">
                <div class="bg1">
                    <div class="bg-circle c1"></div>
                    <div class="bg-circle c2"></div>
                </div>
                <div class="bg2"></div>
            </div>
            <a href="tebak-gedung.html" class="back-btn">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="10" fill="white"/>
                    <path d="M20.5625 25.5832C20.5625 25.5832 14.4375 21.0938 14.4375 17.9998C14.4375 14.9069 20.5625 10.4165 20.5625 10.4165" stroke="url(#paint0_linear)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="8.59091" y1="21.7799" x2="28.1777" y2="16.1349" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0187499" stop-color="#63BCF4"/>
                        <stop offset="1" stop-color="#479FD7"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
            <div class="question-content">
                <div class="question">
                    <div class="question-time">
                        <canvas id="question-canvas" height="70" width="70"></canvas>
                        <span id="canvas-time" class="question-time-span bodytext">16</span>
                    </div>
                    <img src="{{ asset('assets') }}/assets/images/jurusan-poster1.png" class="question-img">
                    <div class="question-tag">
                        <span class="bodytext">Quiz 1</span>
                    </div>
                    <div class="question-title">
                        <p class="title">Apa nama gedung dari gambar diatas?</p>
                    </div>
                </div>
                <div class="answer">

                    <!-- FORM BUAT JAWABAN (name harus sama semua <input/>) -->
                    <form>
                        <ul class="answer-options">
                            <li>
                                <input id="a" type="radio" name="ans" value="a">
                                <label for="a">
                                    <span class="option-name bodytext">GEDUNG A</span>
                                    <span class="checkmark checked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="11" fill="url(#paint0_linear)"/>
                                            <path d="M9.0001 13.7799L6.2201 10.9999L5.27344 11.9399L9.0001 15.6666L17.0001 7.66656L16.0601 6.72656L9.0001 13.7799Z" fill="white"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="checkmark unchecked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="10" stroke="url(#paint0_linear)" stroke-width="2"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>                                            
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input id="b" type="radio" name="ans" value="b">
                                <label for="b">
                                    <span class="option-name bodytext">GEDUNG B</span>
                                    <span class="checkmark checked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="11" fill="url(#paint0_linear)"/>
                                            <path d="M9.0001 13.7799L6.2201 10.9999L5.27344 11.9399L9.0001 15.6666L17.0001 7.66656L16.0601 6.72656L9.0001 13.7799Z" fill="white"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="checkmark unchecked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="10" stroke="url(#paint0_linear)" stroke-width="2"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>                                            
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input id="c" type="radio" name="ans" value="c">
                                <label for="c">
                                    <span class="option-name bodytext">GEDUNG C</span>
                                    <span class="checkmark checked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="11" fill="url(#paint0_linear)"/>
                                            <path d="M9.0001 13.7799L6.2201 10.9999L5.27344 11.9399L9.0001 15.6666L17.0001 7.66656L16.0601 6.72656L9.0001 13.7799Z" fill="white"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="checkmark unchecked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="10" stroke="url(#paint0_linear)" stroke-width="2"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>                                            
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input id="d" type="radio" name="ans" value="d">
                                <label for="d">
                                    <span class="option-name bodytext">GEDUNG D</span>
                                    <span class="checkmark checked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="11" fill="url(#paint0_linear)"/>
                                            <path d="M9.0001 13.7799L6.2201 10.9999L5.27344 11.9399L9.0001 15.6666L17.0001 7.66656L16.0601 6.72656L9.0001 13.7799Z" fill="white"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="checkmark unchecked">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="10" stroke="url(#paint0_linear)" stroke-width="2"/>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="16.4832" y1="43" x2="-19.5452" y2="-7.4845" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0187499" stop-color="#63BCF4"/>
                                                <stop offset="1" stop-color="#479FD7"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>                                            
                                    </span>
                                </label>
                            </li>
                        </ul>
                        <button class="answer-submit btn bodytext">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script src="{{ asset('assets') }}/js/circleProgress.js"></script>
</body>
</html>