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
                    @if($errors->any())
                        @foreach($errors->all() as $data)
                            <div class="alert alert-danger alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong> <br>{{$data}}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
								</div>
                        @endforeach
                    @endif

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