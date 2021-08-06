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

    <script src="../js/jquery-3.6.0.min.js"></script>

    <!-- Styling and logo -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    </link>
    <link rel="stylesheet" href="../css/main-stylings.css">
    </link>
    <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

    <!-- Per Page Styling -->
    <link rel="stylesheet" href="../css/himpunan.css">
    </link>
</head>

<body>
    <div class="main-wrapper">
        <nav class="navbar p-0">
            <div class="container-fluid nav-back">
                <a class="navback-home" href="../html/index.html">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="36" rx="10" fill="white"/>
                        <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                            
                </a>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/images/jurusan-poster1.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/jurusan-poster2.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/jurusan-poster3.png" class="d-block w-100">
                    </div>
                </div>
            </div>
        </nav>

        <!--Content-->
        <div class="page-content container">
            <div class="first-custom">
                <!--Title Pertama-->
                <div class="main-text">
                    <h2 class="prodi-title-text">Himpunan Institut Teknologi Sumatera</h2>
                    <p>
                        Jurusan di ITERA setara dengan fakultas. Masing-masing jurusan memiliki program studi yang
                        berbeda-beda. Semua program studi di ITERA merupakan kelompok Saintek (IPA) dimana ITERA hanya
                        menerima siswa dari jurusan IPA pada SNMPTN. Meskipun demikian, siswa dari jurusan IPS masih
                        dapat mendaftar ke ITERA melalui jalur SBMTPN dan memilih UTBK golongan Saintek.
                    </p>
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


            </div>
           

                <div class="row row-cols-3 g-3" style="padding-top: 20px;">
                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 1</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 2</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title" >Himpunan 3</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 4</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 5</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 6</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 7</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 8</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="col custom-mini-himpunan-col">
                        <div class="card">
                            <img class="rounded" src="https://assets.codepen.io/6093409/mountains-1.jpg"
                                alt="a snow-capped mountain range" />
                            <div class="card-body">
                                <h6 class="card-title">Himpunan 9</h6>
                            </div>
                            <a href="../html/himpunanDetail2.html" class="btn btn-primary rounded custom-more-btn">Learn More</a>
                        </div>
                    </div>

                </div>
        </div>
    </div>

        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/custom.js"></script>
        <!-- <script>
            var header = document.getElementById("small-menu");
            var btns = header.getElementsByClassName("button-prodi");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {                   
                    // var sains = document.getElementsByClassName("sains");
                    // var jtpi = document.getElementsByClassName("jtpi");
                    // var jtik = document.getElementsByClassName("jtik");

                    // if (i === 0) {
                    //     sains.className += " show-card";
                    //     // document.getElementById("sains").className += " show-card";
                    // }
                    // else {
                    //     sains.className.replace(" show-card", "");
                    // }
                    
                    var current = document.getElementsByClassName("active-prodi");
                    current[0].className = current[0].className.replace(" active-prodi", "");
                    this.className += " active-prodi";
                });
            }
        </script> -->
</body>

</html>