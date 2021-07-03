<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dompet.dexignlab.com/xhtml/empty-page.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 09 Jun 2021 07:12:44 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>PPLK 2021 - @yield('title')</title>
	
    <link href="{{ asset('assets') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/nouislider/nouislider.min.css">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('login') }}" class="brand-logo">
                <img src="{{ asset('assets') }}/images/Logopplk-clearbg.png" width="50" height="50" viewBox="0 0 50 50">
                <h3 class="brand-title">PPLK 2021</h3>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                @yield('title')
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="ai-icon logout-menu">
                                <i class="fa fa-sign-out logout-icon" aria-hidden="true"></i>
                                <span class="ms-2 logout-text">Keluar </span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                    @csrf
                                </form>
                            </a>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.menu')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
                    @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
			


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('assets') }}/js/dashboard/dashboard-1.js"></script>
	<script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets') }}/js/custom.min.js"></script>
	<script src="{{ asset('assets') }}/js/dlabnav-init.js"></script>
    <script src="{{ asset('assets') }}/js/demo.js"></script>
    <!-- Datatable -->
    <script src="{{ asset('assets') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins-init/datatables.init.js"></script>
    @yield('script')
</body>
</html>