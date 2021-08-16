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
        <title>PPLK 2021 - Home</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"/>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"/>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"/>

        <script>
            $(document).ready(function(){
                $("#sponsorModal").modal('show');
            });
        </script>
    </head>

    <body>
        <div class="main-wrapper">

            <!-- Modal sponsor -->
            <div class="modal" id="sponsorModal" tabindex="-1" aria-labelledby="sponsorModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-center" id="sponsorModalLabel">
                            Sponsored By
                        </h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselSponsor" class="carousel slide sponsor-carousel" data-bs-ride="carousel" data-bs-interval="1500">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="4" aria-label="Slide 5"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="card sponsor-card container">
										<div class="row row-cols-1">
											<div class="col">
                                                <div class="image-sponsor">
												    <img src="{{ asset('sponsor') }}/futino.jpg" alt="gambar-sponsor">
                                                </div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-1">
												<div class="col">
                                                    <div class="image-sponsor">
													    <img src="{{ asset('sponsor') }}/kimiafarma.jpeg" alt="gambar-sponsor">
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-1">
												<div class="col">
                                                    <div class="image-sponsor">
													    <img src="{{ asset('sponsor') }}/frisianflag.jpeg" alt="gambar-sponsor">
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
                                <div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-1">
												<div class="col">
                                                    <div class="image-sponsor">
													    <img src="{{ asset('sponsor') }}/batiqa.jpeg" alt="gambar-sponsor">
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-1">
												<div class="col">
                                                    <div class="image-sponsor">
													    <img src="{{ asset('sponsor') }}/hotelPelangi.jpeg" alt="gambar-sponsor">
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- Desktop Navabar top -->
            @include('client.menu')

            <!-- Navbar -->
            <div class="navbar p-0 d-lg-block d-xl-none">
                <div class="container-fluid head-bar">
                    <a class="pplk-logo navbar-brand" href="{{ route('home')}}">
                        <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                    </a>
                    <div class="head-menu row ">
                        <a class="head-menu-icon" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('assets') }}/images/logout.png" alt="notification-menu" >
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                            @csrf
                        </form>
                        <a class="head-menu-icon" href="#">
                            <img src="{{ asset('assets') }}/images/notification.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-icon" href="{{ route('report') }}">
                            <img src="{{ asset('assets') }}/images/messages.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-profile" href="{{ route('biodata.index') }}">
                            <img src="{{ auth()->user()->img ?? asset('assets/images/user_default.png') }}" alt="profile-pic" class="photo-profile">
                        </a>
                    </div>
                </div>
        </div>

            <!-- FootBar -->
            <div class="navbar p-0 d-lg-block d-xl-none">
                @include('client.footbar_mobile')
            </div>

            <!-- Content -->
            <div class="page-content container-fluid">
                <div class="col-xl-6 desktop-view">
                    <!-- Nama User -->
                    <div class="greetings">
                        <h1>
                            Hi, {{ auth()->user()->nama ?? 'guest' }}
                        </h1>
                        <p>
                            Mari kita kenal lebih dekat dengan PPLK ITERA
                        </p>
                    </div>

                    <!-- Big Slide Menu -->
                    <div class="scrolling-wrapper-flexbox">
                        <a href="{{ route('jurusan') }}" class="card justify-content-between big-menu-item" >
                            <div class="card-body" >
                                <h5 class="card-title">Jurusan ITERA</h5>
                                <p class="card-text">Jurusan di ITERA setara dengan fakultas. Masing-masing jurusan memiliki program studi yang berbeda-beda. Semua program studi di ITERA merupakan kelompok Saintek (IPA) dimana ITERA hanya menerima siswa dari jurusan IPA pada SNMPTN. Meskipun demikian, siswa dari jurusan IPS masih dapat mendaftar ke ITERA melalui jalur SBMTPN dan memilih UTBK golongan Saintek.
                                    ITERA memiliki 3 jurusan yaitu Jurusan Teknologi Infrastruktur dan Kewilayahan (JTIK), Jurusan Teknologi Produksi dan Industri (JTPI), dan Jurusan Sains.</p>
                            </div>
                            <div class="card-img-container">
                                <img src="{{ asset('assets') }}/images/jurusanlust.PNG" class="card-img-right" alt="...">
                            </div>
                        </a>

                        <a href="{{ route('ukm') }}" class="card justify-content-between big-menu-item" >
                            <div class="card-body" >
                                <h5 class="card-title">Unit Kegiatan Mahasiswa</h5>
                                <p class="card-text">UKM merupakan singkatan dari Unit Kegiatan Mahasiswa yang berfungsi sebagai wadah mahasiswa ITERA untuk mengekspresikan minat dan bakat masing masing mahasiswa. Terhitung ITERA memiliki kurang lebih 41 UKM aktif</p>
                            </div>
                            <div class="card-img-container">
                                <img src="{{ asset('assets') }}/images/ukmilust.png" class="card-img-right" alt="...">
                            </div>
                        </a>

                        <a href="{{ route('prodi') }}" class="card justify-content-between big-menu-item" >
                            <div class="card-body" >
                                <h5 class="card-title">Prodi ITERA</h5>
                                <p class="card-text">
                                    Prodi merupakan singkatan dari Program Studi bertujuan sebagai pedoman jalannya pendidikan akademik yang penyelenggaraannya berdasarkan suatu kurikulum. Di dalam jurusan yang ada di ITERA memiliki 35 program studi yang membawahi jurusan masing-masing.
                                </p>
                            </div>
                            <div class="card-img-container">
                                <img src="{{ asset('assets') }}/images/prodiilust.png" class="card-img-right" alt="...">
                            </div>
                        </a>

                        <a href="{{ route('himpunan') }}" class="card justify-content-between big-menu-item last-item" >
                            <div class="card-body" >
                                <h5 class="card-title">Himpunan ITERA</h5>
                                <p class="card-text">
                                    Himpunan Mahasiswa ITERA merupakan kumpulan dari masing-masing mahasiswa program studi yang mana memiliki VISI dan MISI yang sama. Himpunan Mahasiswa bertujuan sebagai wadah mahasiswa dalam bidang ke ilmuan dan menampung semua aspirasi mahasiswa yang ada. Sampai saat ini sudah terdaftar kurang lebih 35 Himpunan Mahasiswa.
                                </p>
                            </div>
                            <div class="card-img-container">
                                <img src="{{ asset('assets') }}/images/himpunanlust.PNG" class="card-img-right" alt="...">
                            </div>
                        </a>
                    </div>

                    <!-- Small Slide Menu -->
                    <div class="scrolling-wrapper-flexbox-mini">
                        <a href="{{ route('kamus') }}" class="small-slide-menu-item justify-content-center">
                            Kamus Gaul
                        </a>

                        <a href="{{ route('dataUpt') }}" class="small-slide-menu-item justify-content-center">
                            UPT ITERA
                        </a>

                        <a href="{{ route('logoPPLK') }}" class="small-slide-menu-item justify-content-center">
                            Logo PPLK
                        </a>

                        <a href="{{ route('kabinet') }}" class="small-slide-menu-item justify-content-center ">
                            Kabinet KM ITERA
                        </a>

                        <a href="{{ route('senat') }}" class="small-slide-menu-item justify-content-center last-item">
                            Senat KM ITERA
                        </a>
                    </div>

                    <!-- Info Terbaru -->
                    <div class="new-infos container">
                        <div class="rounded-line">
                        </div>
                        <h2 class="info-itera">Info Terbaru PPLK 2021</h2>
                        <div class="row search-bar d-lg-block d-xl-none">
                            <div class="col-12">
                                <div class="search-form">
                                    <i class="fa fa-search"></i>
                                    <input type="text" class="form-control search-form-input" placeholder="Search">
                                </div>
                            </div>
                        </div>

                         <!--Info terbaru content card -->
                        <div class="col-sm-12 col-xl-8">
                            <div class="info-card card justify-content-between " style="height: 160px;" >
                                <div class="info-card-img-container">
                                    <img src="{{ asset('assets') }}/images/booklet.png" class="info-card-img-left" alt="...">
                                </div>
                                <div class="info-card-body" >

                                    <h5 class="info-card-title">Buku panduan dan materi peserta</h5>


                                    <p class="info-card-text">
                                    Booklet ini merupakan pemandu bagi para mahasiswa/i baru, untuk mempermudah kalian dalam mengerjakan tugas.
                                    </p>

                                    <a href="https://drive.google.com/file/d/1wADIwZbNZaA9uUB1FeyQhJDl9Z4am1rP/view?usp=sharing" class="btn btn-primary custom-more-btn" target="_blank">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12  col-xl-8" hidden>
                            <div class="info-card card justify-content-between " style="height: 160px;" >
                                <div class="info-card-img-container">
                                    <img src="{{ asset('assets') }}/images/logo-rebahan.png" class="info-card-img-left" alt="...">
                                </div>
                                <div class="info-card-body" >

                                    <h5 class="info-card-title">Link Game</h5>

                                    <p class="info-card-text">
                                        Berikut merupakan aplikasi game buatan mahasiswa/i ITERA khusus untuk PPLK yang bisa kalian mainkan.
                                    </p>

                                    <a href="#" class="btn btn-primary custom-more-btn">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12  col-xl-8" hidden>
                            <div class="info-card card justify-content-between " style="height: 160px;" >
                                <div class="info-card-img-container">
                                    <img src="{{ asset('assets') }}/images/logo-rebahan.png" class="info-card-img-left" alt="...">
                                </div>
                                <div class="info-card-body" >

                                    <h5 class="info-card-title">Guide Game</h5>


                                    <p class="info-card-text">
                                    Guide Game merupakan pemandu game PPLK yang berguna dalam memandu, menemani, dan memberikan informasi kepada mahasiswa/i baru yang sedang bermain game PPLK.
                                    </p>


                                    <a href="#" class="btn btn-primary custom-more-btn">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12  col-xl-8">
                            <div class="info-card card justify-content-between " style="height: 160px;" >
                                <div class="info-card-img-container">
                                    <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" class="info-card-img-left" alt="...">
                                </div>
                                <div class="info-card-body" >

                                    <h5 class="info-card-title">Link Anthem PPLK</h5>


                                    <p class="info-card-text">
                                        Anthem PPLK merupakan Jingle khas PPLK ITERA berjudul Melodi Mimpi yang melambangkan dimulainya PPLK ITERA.
                                    </p>


                                    <a href="https://www.youtube.com/watch?v=RKr3EBT9v1I" target="_blank" class="btn btn-primary custom-more-btn">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-xl-8">
                            <div id="carouselFunFact" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    @foreach($funFact as $i=>$data)
                                    <div class="carousel-item @if($i == 0) active @endif ">
                                        <div class="card fun-fact-card">
                                            <div class="card-body">
                                                <h2 class="card-title">
                                                    Fun Fact
                                                </h2>
                                                <p class="card-text">
                                                    {{ $data->body }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <button class="carousel-control-prev fun-fact-prev" type="button" data-bs-target="#carouselFunFact" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="circle"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next fun-fact-next" type="button" data-bs-target="#carouselFunFact" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="circle"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>


                        <div class="sponsor-container">
                            <h2>
                                Supported By
                            </h2>

                            <div id="carouselSponsor" class="carousel slide sponsor-carousel" data-bs-ride="carousel" data-bs-interval="2000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card sponsor-card container">
                                            <div class="row row-cols-4">
                                                <div class="col">
                                                    <img src="{{ asset('assets') }}/mediapartner/1.png" alt="gambar-sponsor">
                                                </div>
                                                <div class="col">
                                                    <img src="{{ asset('assets') }}/mediapartner/2.png" alt="gambar-sponsor">
                                                </div>
                                                <div class="col">
                                                    <img src="{{ asset('assets') }}/mediapartner/3.png" alt="gambar-sponsor">
                                                </div>
                                                <div class="col">
                                                    <img src="{{ asset('assets') }}/mediapartner/4.png" alt="gambar-sponsor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card sponsor-card">
                                            <div class="card sponsor-card container">
                                                <div class="row row-cols-4">
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/5.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/6.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/7.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/8.png" alt="gambar-sponsor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card sponsor-card">
                                            <div class="card sponsor-card container">
                                                <div class="row row-cols-4">
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/9.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/10.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/11.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/12.png" alt="gambar-sponsor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card sponsor-card">
                                            <div class="card sponsor-card container">
                                                <div class="row row-cols-4">
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/13.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/14.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/15.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/16.png" alt="gambar-sponsor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card sponsor-card">
                                            <div class="card sponsor-card container">
                                                <div class="row row-cols-4">
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/17.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/18.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/19.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/20.png" alt="gambar-sponsor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card sponsor-card">
                                            <div class="card sponsor-card container">
                                                <div class="row row-cols-4">
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/21.png" alt="gambar-sponsor">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{ asset('assets') }}/mediapartner/22.png" alt="gambar-sponsor">
                                                    </div>
                                                    
                                                </div>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('assets') }}/js/custom.js"></script>
    </body>
</html>
