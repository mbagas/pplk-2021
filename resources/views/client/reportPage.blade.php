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
        <title>PPLK 2021 - Report</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>

        @if(session('sukses'))
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#reportModal').modal('show');
                });
            </script>
        @endif
        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/report.css">
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')
            <!--Content-->
            <div class="page-content container-fluid col-xl-6">
                <!--NavBar-->
                <nav class="navbar p-0">
                    <div class="container-fluid nav-back">
                        <a class="navback-home" href="{{ route('home') }}">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="36" height="36" rx="10" fill="white"/>
                                <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                    </div>
                </nav>
                <div class="card container-fluid">
                    <div class="main-content">
                            <!--Title-->
                        <div class="desc-text">
                            <h2>Report Page</h2>
                        </div>
                        <form class="col-sm-12 container-fluid m-sm-auto report-form fle" action="{{ route('reportPost') }}" method="POST">
                            @csrf
                            <div class="row report-input">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="inputs" name="nama">
                            </div>
                            <div class="row report-input">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="inputs" name="instagram">
                            </div>
                            <div class="row report-input">
                                <label for="noHp" class="form-label">No Telepon</label>
                                <input type="text" class="inputs" name="noHp">
                            </div>

                            <div class="row radio-input">
                                <label for="kondisi">Kondisi</label>
                                <p><input class="" type="radio" name="kondisi" value="sakit"> Sakit</p>
                                <p><input class="" type="radio" name="kondisi" value="tidakSakit"> Tidak Sakit</p>
                            </div>
                            <div class="row report-input">
                                <label for="sakit" class="form-label">Jika sakit, apa yang dikeluhkan?</label>
                                <input type="text" class="fill">
                            </div>
                            <div class="row report-input">
                                <label for="keluhan" class="form-label">Keluhan selain diatas</label>
                                <textarea id="keluhan" cols="30" rows="10" class="fill"></textarea>
                            </div>

                            <div class="row report-input">
                                <label for="keluhan" class="form-label">Kritik & Saran Platform PPLK</label>
                                <textarea name="kritikSaran" cols="30" rows="7" class="fill"></textarea>
                            </div>

                            <div class="col-sm-12 mt-4">
                                <button name="submit" type="submit" class="btn btn-primary rounded custom-login-btn">
                                    Kirim Laporan
                                </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        
            <div class="modal container-fluid" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{asset('assets')}}/images/thumbs-up.png" alt="thumbs-up" class="thumbs-up">
                            <h2>Terima Kasih!</h2>
                            <p>Laporan kamu telah 
                                kami simpan. Silahkan 
                                tunggu tanggapan dari kami. </p>
                        </div>
                        <div class="modal-back">
                            <a href="{{ route('home') }}"><button class="close-button">Home</button></a>
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