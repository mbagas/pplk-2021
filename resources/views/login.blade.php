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
	<title>Login CMS - PPLK 2021</title>
    
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
            <div class="wrap-login modal-content width400 overflow-hidden d-flex flex-wrap justify-content-between p-5">
                <div class="login-pic width250 m-sm-auto">
                    <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" class="w-100" alt="IMG">
                </div>

                <form class="login-form m-sm-auto text-center w-100" action="{{ route('login') }}" method="POST">
                @csrf    
                <span class="wrap-input-login d-block fs-24 pb-3 text-black op7">
                        Login
                    </span>

                    <div class="wrap-input-login my-2">
                        <input class="input-name form-control" type="text" name="email" placeholder="Email">
                    </div>
                    
                    <div class="wrap-input-login my-2">
                        <input class="input-password form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <div class="login-form-button">
                        <button type="submit" class="btn btn-primary rounded w-50" >
                        Login
                        </button>
                    </div>
                </form>
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