<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('pwa.head')

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
        <!-- Title -->
        <title>Login Web PPLK 2021</title>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <script>
            $(document).ready(function(){
                setTimeout(()=>{
                    $("#install-app").css('display', 'block');
                }, 2600);
            });
        </script>
    </head>
<body>
     <!-- Splash Screen -->
     <div class="launch-logo">
        <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="launch-logo-image fade"/>
    </div>
    
    <div class="login-page">
        @include('pwa.popup')
            <!-- bakcground -->
            <div class="bg-container d-none d-xl-block d-xxl-block">
                <img src="{{ asset('assets') }}/images/wavey-bg.png" alt="wavey-bg" class="wavey-bg">
            </div>
            <div class="pplk-logo">
                <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
            </div>

            <div class="wrap-login justify-content-between">
                    <div class="m-sm-auto image-container">
                        <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" alt="reading-image" class="login-image">
                    </div>
    
                    <div class="login-welcome-info">
                        <h1 class="silahkan-masuk">Silahkan Masuk</h1>
                        <p>Mulai perjalananmu sekarang!</p>
                    </div>

                    <form class="login-form m-sm-auto" method="POST" action="{{ route('loginPost') }}">
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

                        <div class="col-md-12 input-field-group">
                            <label class="form-label mb-1">Email</label>
                            <div class="input-field">
                                <i class="input-logo">
                                    <img src="{{ asset('assets') }}/images/email-logo.png" alt="" class="">
                                </i>
                                <input class="input-control form-control" type="text" name="email" placeholder="Email">
                            </div>
    
                            <label class="form-label mb-1">Password</label>
                            <div class="input-field">
                                <i class="input-logo">
                                    <img src="{{ asset('assets') }}/images/password-logo.png" alt="" class="">
                                </i>
                                <input class="input-control form-control" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
    
                        <div class="col-md-12 mb-1">
                            <button type="submit" class="btn btn-primary rounded custom-login-btn">
                                Masuk
                            </button>
                        </div>
                    </form>
                    
                    <div class="col-md-12 forget-password flex-column">
                        <a href="{{ route('guest') }}" style="text-decoration: none;"><p>Masuk sebagai <strong>Guest</strong></p></a>
                        <p>Lupa Password? <strong>Lapor Daplok!</strong></p>
                    </div>
                </div>
        </div>

    <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('assets') }}/js/custom.js"></script>
        @include('pwa.setup')
</body>

</html>