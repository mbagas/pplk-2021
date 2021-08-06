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
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="../css/index.css"></link>

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
                        <h2 class="col-12 modal-title text-center" id="sponsorModalLabel">
                            Sponsored By
                        </h2>
                    </div>
                    <div class="modal-body">
                        <div id="carouselSponsor" class="carousel slide sponsor-carousel" data-bs-ride="carousel" data-bs-interval="3000">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="2" aria-label="Slide 3"></button>
							  </div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="card sponsor-card container">
										<div class="row row-cols-3">
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-3">
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-3">
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
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

            <!-- Navbar -->
            <nav class="navbar p-0">
                <div class="container-fluid head-bar">
                    <a class="pplk-logo navbar-brand" href="#">
                        <img src="../assets/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                    </a>
                    <div class="head-menu row ">
                        <a class="head-menu-icon" href="#">
                            <img src="../assets/images/notification.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-icon" href="#">
                            <img src="../assets/images/messages.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-profile" href="profile">
                            <img src="../assets/images/jhonnysins.png" alt="notification-menu">    
                        </a>
                    </div>
                </div>
            </nav>

            <!-- FootBar -->
            <div class="navbar p-0">
                <ul class="container-fluid footer-bar">
                        
                        <li>
                            <a href="../html/index.html">
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
                            <a href="../html/biodata.html">
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
                            <a href="../html/tugas.html">
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
                            <a href="../html/games.html">
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
                            <a href="../html/leaderboard.html">
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

            <!-- Content -->
            <div class="page-content container-fluid">

				<!-- Nama User -->
				<div class="greetings">
					<h1>
						Hi, @name
					</h1>
					<p>
						Mari kita kenal lebih dekat dengan PPLK ITERA
					</p>
				</div>

                <!-- Big Slide Menu -->
                <div class="scrolling-wrapper-flexbox">
                    <a href="../html/jurusan.html" class="card justify-content-between" style="width: 250px; height: 170px;">
                        <div class="card-body" >
                            <h5 class="card-title">Jurusan ITERA</h5>
                            <p class="card-text">Jurusan di ITERA setara dengan fakultas. Masing-masing jurusan memiliki program studi yang berbeda-beda</p>
                        </div>
                        <div class="card-img-container">
                            <img src="../assets/images/jurusan-main-menu-logo.png" class="card-img-right" alt="...">
                        </div>
                    </a>

                    <a href="../html/ukm.html" class="card justify-content-between" style="width: 250px; height: 170px;">
                        <div class="card-body" >
                            <h5 class="card-title">Unit Kegiatan Mahasiswa</h5>
                            <p class="card-text">Unit Kegiatan Mahasiswa (UKM) adalah lembaga kemahasiswaan tempat....</p>
                        </div>
                        <div class="card-img-container">
                            <img src="../assets/images/jurusan-main-menu-logo.png" class="card-img-right" alt="...">
                        </div>
                    </a>

                    <a href="../html/prodi.html" class="card justify-content-between" style="width: 250px; height: 170px;">
                        <div class="card-body" >
                            <h5 class="card-title">Prodi ITERA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat ligula sit amet lectus sollicitudin, eu placerat felis imperdiet. Pellentesque volutpat, eros fringilla rutrum imperdiet, mauris purus maximus augue, sit amet convallis erat eros ac nibh. Donec fermentum laoreet sem pulvinar suscipit. Aenean congue tellus eros, sed pharetra felis aliquet sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin consequat, arcu vel scelerisque hendrerit, massa neque mollis odio, a dictum nisl ipsum in metus. Nunc vel porttitor libero, ac interdum lacus.
                                Mauris ac enim eu tortor blandit sodales. </p>
                        </div>
                        <div class="card-img-container">
                            <img src="../assets/images/jurusan-main-menu-logo.png" class="card-img-right" alt="...">
                        </div>
                    </a>

                    <a href="../html/himpunan.html" class="card justify-content-between" style="width: 250px; height: 170px; margin-right: 60px;">
                        <div class="card-body" >
                            <h5 class="card-title">Himpunan ITERA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat ligula sit amet lectus sollicitudin, eu placerat felis imperdiet. Pellentesque volutpat, eros fringilla rutrum imperdiet, mauris purus maximus augue, sit amet convallis erat eros ac nibh. Donec fermentum laoreet sem pulvinar suscipit. Aenean congue tellus eros, sed pharetra felis aliquet sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin consequat, arcu vel scelerisque hendrerit, massa neque mollis odio, a dictum nisl ipsum in metus. Nunc vel porttitor libero, ac interdum lacus.

                                Mauris ac enim eu tortor blandit sodales. </p>
                        </div>
                        <div class="card-img-container">
                            <img src="../assets/images/jurusan-main-menu-logo.png" class="card-img-right" alt="...">
                        </div>
                    </a>
                </div>

                <!-- Small Slide Menu -->
                <div class="scrolling-wrapper-flexbox">
                    <a href="../html/kamusGaul.html" class="small-slide-menu-item justify-content-center">
                        Kamus Gaul
                    </a>

                    <a href="../html/uptItera.html" class="small-slide-menu-item justify-content-center">
                        UPT ITERA
                    </a>

                    <a href="../html/logoPplk.html" class="small-slide-menu-item justify-content-center" style="margin-right: 60px;">
                        Logo PPLK
                    </a>
                </div>

                <!-- Info Terbaru -->
                <div class="new-infos container">
                    <div class="rounded-line">                          
                    </div>
                    <h2 class="info-itera">Info Terbaru PPLK 2021</h2>
                    <div class="row search-bar">
                        <div class="col-12">
                            <div class="search-form"> 
                                <i class="fa fa-search"></i> 
                                <input type="text" class="form-control search-form-input" placeholder="Search">  
                            </div>
                        </div>
                    </div>

                    <!-- Info terbaru content card -->
                    <div class="col-sm-12">
                        <div class="info-card card justify-content-between " style="height: 160px;" >
                            <div class="info-card-img-container">
                                <img src="../assets/images/logo-rebahan.png" class="info-card-img-left" alt="...">
                            </div>
                            <div class="info-card-body" >

                                <h5 class="info-card-title">Guide PPLK</h5>

                                <p class="info-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit tellus varius sollicitudin ullamcorper tincidunt non magna venenatis. Est.</p>

								<a href="#" class="btn btn-primary custom-more-btn">
									Learn More
								</a>
                            </div>
                        </div>
                    </div>

					<div class="col-sm-12">
                        <div class="info-card card justify-content-between " style="height: 160px;" >
                            <div class="info-card-img-container">
                                <img src="../assets/images/logo-rebahan.png" class="info-card-img-left" alt="...">
                            </div>
                            <div class="info-card-body" >

                                <h5 class="info-card-title">Link Game</h5>

                                <p class="info-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit tellus varius sollicitudin ullamcorper tincidunt non magna venenatis. Est.</p>

								<a href="#" class="btn btn-primary custom-more-btn">
									Learn More
								</a>
                            </div>
                        </div>
                    </div>

					<div class="col-sm-12">
                        <div class="info-card card justify-content-between " style="height: 160px;" >
                            <div class="info-card-img-container">
                                <img src="../assets/images/logo-rebahan.png" class="info-card-img-left" alt="...">
                            </div>
                            <div class="info-card-body" >

                                <h5 class="info-card-title">Guide Game</h5>

                                <p class="info-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit tellus varius sollicitudin ullamcorper tincidunt non magna venenatis. Est.</p>

								<a href="#" class="btn btn-primary custom-more-btn">
									Learn More
								</a>
                            </div>
                        </div>
                    </div>

					<div class="col-sm-12">
                        <div class="info-card card justify-content-between " style="height: 160px;" >
                            <div class="info-card-img-container">
                                <img src="../assets/images/logo-rebahan.png" class="info-card-img-left" alt="...">
                            </div>
                            <div class="info-card-body" >

                                <h5 class="info-card-title">Link Jingle PPLK</h5>

                                <p class="info-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit tellus varius sollicitudin ullamcorper tincidunt non magna venenatis. Est.</p>

								<a href="#" class="btn btn-primary custom-more-btn">
									Learn More
								</a>
                            </div>
                        </div>
                    </div>

                    <div id="carouselFunFact" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                        <div class="carousel-inner">
							<div class="carousel-item active">
								<div class="card fun-fact-card">
									<div class="card-body">
										<h2 class="card-title">
											Fun Fact
										</h2>
										<p class="card-text">
											Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
										</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="card fun-fact-card">
									<div class="card-body">
										<h2 class="card-title">
											Fun Fact
										</h2>
										<p class="card-text">
											Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
										</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="card fun-fact-card">
									<div class="card-body">
										<h2 class="card-title">
											Fun Fact
										</h2>
										<p class="card-text">
											Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
										</p>
									</div>
								</div>
							</div>
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

					<div class="sponsor-container">
						<h2>
							Supported By
						</h2>

						<div id="carouselSponsor" class="carousel slide sponsor-carousel" data-bs-ride="carousel" data-bs-interval="3000">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselSponsor" data-bs-slide-to="2" aria-label="Slide 3"></button>
							  </div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="card sponsor-card container">
										<div class="row row-cols-3">
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
											<div class="col">
												<img src="../assets/images/pdip-red.png" alt="gambar-sponsor">
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-3">
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/owi.jpeg" alt="gambar-sponsor">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card sponsor-card">
										<div class="card sponsor-card container">
											<div class="row row-cols-3">
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
												</div>
												<div class="col">
													<img src="../assets/images/master.jpeg" alt="gambar-sponsor">
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
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>