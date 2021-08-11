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
        <title>PPLK 2021 - Jurusan</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />
        

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/jurusan-page.css"></link>
    </head>

    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')
            <!-- Navbar Back Mobile -->
            <nav class="navbar p-0 d-lg-block d-xl-none">
                <div class="container-fluid nav-back">
                    <a class="navback-home" href="{{ route('home')}}">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="10" fill="white"></rect>
                            <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                            
                    </a>                                     
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide pointer-event" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="../assets/images/jurusan-poster1.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/jurusan-poster2.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item active">
                            <img src="../assets/images/jurusan-poster3.png" class="d-block w-100">
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
                        <h2 class="jurusan-title-text">Kuliah di ITERA</h2>
                        <p>
                        Jurusan di ITERA setara dengan fakultas. Masing-masing jurusan memiliki program studi yang berbeda-beda. Semua program studi di ITERA merupakan kelompok Saintek (IPA) dimana ITERA hanya menerima siswa dari jurusan IPA pada SNMPTN. Meskipun demikian, siswa dari jurusan IPS masih dapat mendaftar ke ITERA melalui jalur SBMTPN dan memilih UTBK golongan Saintek.
                        ITERA memiliki 3 jurusan yaitu Jurusan Teknologi Infrastruktur dan Kewilayahan (JTIK), Jurusan Teknologi Produksi dan Industri (JTPI), dan Jurusan Sains.
                        </p>
                    </div>
                    <!--Title Kedua-->                    
                    <h2 class="jurusan-title-text"> 3 Jurusan yang terdapat di ITERA</h2>

                    <!-- Small Menu -->
                    <ul class="small-jurusan-menu nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#sains" class="nav-link active button-jurusan" aria-selected="true" role="tab">
                                Jurusan Sains
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#jtpi" class="nav-link button-jurusan" aria-selected="false" role="tab">
                                Jurusan JTPI
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button  data-bs-toggle="pill" data-bs-target="#jtik" class="nav-link button-jurusan" aria-selected="false" role="tab">
                                Jurusan JTIK
                            </button> 
                        </li>                  
                    </ul>
                </div>
                

                <div class="tab-content" id="pills-tabContent">
                    <!--Content 1-->                
                    <div class="tab-pane active custom-card-jurusan justify-content-center info-jurusan"  role="tabpanel" id="sains">
                        <div class="card w-100">
                            <img src="{{ asset('assets') }}/images/jurusan-poster1.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.    
                                </p>
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    1. Menyelenggarakan dan mengambangkan pendidikan tinggi sains yang mencakup pengembangan teknologi serta menjadi landasan pengembangan teknologi dalam upaya menghasilkan lulusan yang memahami, mengembangkan, menerapkan ilmu sains yang berkarakter.<br/>
                                    2. Menyelenggarakan dan mengembangkan kegiatan penelitian dan pengabdian masyarakat untuk mendorong peningkatan sains mencakup pengembangan teknologi serta menjadi landasan dalam pengembangan teknologi yang inovatif dan tanggap terhadap tantangan lokal maupun global.<br/>
                                    3. Pemberdayaan potensi wilayah sekitar Sumatera secara optimal melalui keunggulan dalam pendidikan, penelitian, dan pengabdian kepada masyarakat melalui kerjasama dengan stakeholder terkait.    
                                </p>
                            </div>
                        </div>                                               
                    </div>
                    <!--Content 2-->
                    <div class="tab-pane custom-card-jurusan justify-content-center info-jurusan"  role="tabpanel" id="jtpi">
                        <div class="card w-100">
                            <img src="{{ asset('assets') }}/images/jurusan-poster2.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Jurusan yang berkontribusi unggul pada pendidikan tinggi sumber daya manusia dan inovasi dalam teknologi produksi dan pengelolaan sumber daya alam di Sumatera secara khusus dan Indonesia secara umum untuk menajuan ekonomi dan kesejahteraan yang berkelanjutan di era Revolusi Industri 4.0    
                                </p>
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    1. Melaksanakan dan mengembangkan pendidikan tinggi terutama bidang teknologi produksi dan industri untuk menyiapkan lulusan yang siap menggunakan, mengembangkan, dan menerapkan ilmu teknologi yang berkarakter.<br/>
                                    2. Melakukan kegiatan penelitian dan pegabdian kepada masyarakat yang dapat menghasilkan pengembangan teknologi bidang produksi dan industri yang tanggap terhadap lokal maupun global.<br/>
                                    3. Pengelolaan dan pengembangan potensi wilayah sekitar Sumatera khususnya dan Indonesia secara umumnya dalam bidang produksi dan industri melalui kegiatan pendidikan, penelitian, dan pengabdian kepada masyarakat melalui kerja sama dengan pihak-pihak yang terkait.<br/>
                                    4. Menjalankan, menstimulasi, dan mengelola kerja sama pendidikan, penelitian, dan pengembangan kelompok penelitian yang menjangkarkan wilayah Sumatera sebagai pusat kemajuan Indonesia untuk menjangkau kontribusi di tingkat nasional, regional ASEAN, Asia, dan dunia di era Revolusi Industri 4.0<br/> 
                                </p>
                            </div>
                        </div>                                               
                    </div>
                    <!--Content 3-->
                    <div class="tab-pane custom-card-jurusan justify-content-center info-jurusan"  role="tabpanel" id="jtik">
                        <div class="card w-100">
                            <img src="{{ asset('assets') }}/images/jurusan-poster3.png" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Visi
                                </h2>
                                <p class="card-text">
                                    Menjadi Jurusan yang unggul dan berkualitas di bidang IPTEK dan berkontribusi pada pemberdayaan potensi yang ada di wilayah Sumatera khususnya dan Indonesia serta dunia umumnya    
                                </p>
                                <h2 class="card-title">
                                    Misi
                                </h2>
                                <p class="card-text">
                                    1. Berkontribusi pada penyelengaraan program akademik, vokasi, dan profesi dilandasi dengan program kegiatan Pendidikan, penelitian dan pengabdian pada masyarakat yang terpadu dan berbasis teknologi untuk pemberdayaan potensi sumber daya alam di Sumatera.<br/>
                                    2. Berkontribusi pada pengembangan SDM yang unggul, berkualitas menguasai IPTEK, disamping memiliki karakter kewirausahaan yang baik.       
                                </p>
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
        
    </body>
</html>