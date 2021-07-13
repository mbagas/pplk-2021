</html>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CMS - PPLK 2021" />
    <meta property="og:title" content="CMS - PPLK 2021" />
    <meta property="og:description" content="CMS - PPLK 2021" />
	
	<!-- PAGE TITLE HERE -->
	<title>PPLK 2021 - Not Found</title>
    
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/nouislider/nouislider.min.css">
</head>
<body>
    <div id="login" class="w-100 m-auto ">
        <div class="container-login  w-100 d-flex min-vh-100 flex-wrap justify-content-center align-content-center p-3">
            <div id="custom-login-bg">
                <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png">
            </div>
            <div class="wrap-login modal-content overflow-hidden d-flex flex-wrap justify-content-between p-5" style="width: 500px;">
                <div class="form-input-content text-center error-page">
                    <h1 class="error-text fw-bold">404</h1>
                    <h4><i class="fa fa-exclamation-triangle text-warning"></i></h4>
                    <p>Halaman yang kamu cari tidak ditemukan</p>
                    <div>
                        <a class="btn btn-primary" href="{{route('login')}}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('assets') }}/js/custom.min.js"></script>
    <script src="{{ asset('assets') }}/js/dlabnav-init.js"></script>
</body>

</html>