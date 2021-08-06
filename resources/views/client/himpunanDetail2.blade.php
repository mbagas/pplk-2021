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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/bootstrap.css"></link>
        <link rel="stylesheet" href="../css/main-stylings.css"></link>     
        <link rel="stylesheet" href="../css/himpunan.css"></link>
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

        <!--Per Page Styling-->
        <link rel="stylesheet" href="../css/himpunanDetail2.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!--NavBar-->
            <nav class="navbar p-0">
                <div class="container-fluid nav-back">
                    <a class="navback-home" href="../html/himpunan.html">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="10" fill="white"/>
                            <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                            
                    </a>
                </div>
                <div class="navback-custom">            
                    <img src="../assets/images/ukm-poster-1.png">
                </div>
            </nav>
            <!--content-->
            <div class="page-content container">
                <!--first headline-->
                <div class="first-headline card d-flex justify-content-between ">
                    <div class="name-himpunan">
                        <h2>Muwaghei</h2>
                        <h5>Himpunan Mahasiswa Desain Komunikasi Visual</h5>
                        <div class="detail-headline">
                            <div class="pembina">
                                <h6>Pembina</h6>
                                <p>Dr. Ir. Agus</p>
                            </div>
                            <div class="ketua">
                                <h6>Ketua Himpunan</h6>
                                <p>Dr. Ir. Agus</p>
                            </div>
                            <div class="dies-natalis">
                                <h6>Dies Natalis</h6>
                                <p>10 Agustus 2010</p>
                            </div>
                        </div>
                    </div>
                    <div class="logo-himpunan">            
                        <img src="../assets/images/himpunan-logo.png" alt="poster">                        
                    </div>                    
                </div>
                <!--second headline-->
                <div class="second-headline">
                    <div class="artikel-himpunan">
                        <img src="../assets/images/jurusan-poster1.png">
                        <div class="d-flex justify-content-between artikel-custom">
                            <div class="artikel-1">
                                <div class="artikel-title">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                                    <p>2 Min read | 26 Oktober 2020</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis tempor tempor sollicitudin nunc euismod. Purus lobortis ut ornare lectus consectetur massa pellentesque tellus. Ac nisi, tincidunt cras tellus aliquam lectus aenean dui. Faucibus dictum odio hac montes, eget diam. Quisque lorem venenatis nunc eu tellus turpis. Leo nisl, adipiscing arcu lacus. Fringilla neque a lorem eget aliquet eget lectus morbi scelerisque. Quis pellentesque cras amet magna nibh in tortor diam mauris. At facilisis lorem a sagittis, egestas sit enim.
Placerat semper nisl turpis mattis pharetra. Mattis fames mollis lobortis nibh habitant nulla. Cras bibendum magna nec nulla scelerisque amet mollis. Donec scelerisque id non in. </p>
                            </div>                                                      
                        </div>
                    </div>
                    <!--small menu-->
                    <ul class="small-himpunan-menu nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#filosofi" class="nav-link active button-himpunan" aria-selected="true" role="tab">
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
                    <div class="tab-pane active justify-content-center"  role="tabpanel" id="filosofi">
                        <div class="card custom-himpunan w-100">
                            <img src="../assets/images/ukm-1.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Segi Empat
                                </h2>
                                <p class="card-text">
                                    Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
                                </p>
                                <h2 class="card-title">
                                    Simbol Gambar
                                </h2>
                                <p class="card-text">
                                    Sebagai simbol yang mempresentasikan bidang Desain Komunikasi Visual Institut Teknologi Sumatera.
                                </p>
                                <h2 class="card-title">
                                    Simbol Hati
                                </h2>
                                <p class="card-text">
                                    Menggambarkan perasaan bangga terhadap himpunan sekaligus menunjukkan kesatuan serta kekeluargaan yang didukung dengan lingkungan yang selalu mensupport.
                                </p>
                                <h2 class="card-title">
                                    Huruf "M"
                                </h2>
                                <p class="card-text">
                                    Sebagai simbol yang mempresentasikan bidang Desain Komunikasi Visual Institut Teknologi Sumatera.
                                </p>
                            </div>
                        </div>                                               
                    </div>
                    <!--Content 2-->
                    <div class="tab-pane justify-content-center"  role="tabpanel" id="visi">
                        <div class="card custom-himpunan w-100">
                            <img src="../assets/images/ukm-1.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Visi dari Muwaghei yaitu bisa mewadahi mahasiswa Desain Komunikasi Visual Institut Teknologi Sumatera dalam mengembangkan potensi dalam hal aspirasi, keilmuan, kreativitas, dan kebudayaan Sumatera serta memberikan semangat berkarya mahasiswa Desain Komunikasi Visual Institut Teknologi Sumatera untuk kebermanfaatan sosial.
                                </p>                            
                            </div>
                        </div>                                               
                    </div>
                    <!--Content 3-->
                    <div class="tab-pane justify-content-center"  role="tabpanel" id="misi">
                        <div class="card custom-himpunan w-100">
                            <img src="../assets/images/ukm-1.png" class="card-img-top">
                            <div class="card-body">                                
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    <p>1.	Mengembangkan potensi mahasiswa Desain Komunikasi Visual Institut Teknologi Sumatera dalam hal keilmuan, kreativitas, dan kebudayaan Sumatera untuk kebermanfaatan sosial.</p>
                                    <p>2.	Melaksanakan kegiatan kemahasiswaan dengan tujuan meningkatkan kreativitas mahasiswa Desain Komunikasi Visual Institut Teknologi Sumatera</p>
                                    <p>3.	Menampung dan mengolah aspirasi serta inspirasi mahasiswa Desain Komunikasi Visual Institut Teknologi Sumatera melalui kegiatan peningkatan wawasan Desain Komunikasi Visual.</p>
                                    <p>4.	Menjalin kerja sama kekeluargaan dengan Himpunan Program Studi Desain Komunikasi Visual yang ada di Institut Teknologi Sumatera yang selaras dengan pengembangan potensi budaya Sumatera. Untuk berkerja sama meningkatkan semangat berkarya, keahlian, dan memperluas ilmu pengetahuan dalam</p>
                                </p>
                            </div>
                        </div>                                               
                    </div>                    
                </div>
            </div>            
        </div>
        <!--footer-->
        <div class="footer justify-content-around">
            <div class="footer-logo">
                <img src="../assets/images/logo-footer.png">
            </div>
            <div class="detail-info">
                <p>Copyright © 2016 UPT TIK -
                    Institut Teknologi Sumatera (ITERA)</p>
                <p>https://sap.itera.ac.id</p>
                <p>Telepon : 07218030188 – 07218030189</p>
            </div>
            <div class="icon-sosmed">
                <img src="../assets/images/twiter.png">
                <img src="../assets/images/yutub.png">
                <img src="../assets/images/ige.png">                                     
            </div>
        </div>
    </body>

    <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/custom.js"></script>
    <!--script-->
</html>