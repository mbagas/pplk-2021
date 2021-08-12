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
        <title>PPLK 2021 - Biodata</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/biodata.css"></link>
    </head>
    <body>
        <div class="main-wrapper">
            <!-- Desktop Navabar top -->
            @include('client.menu')
            <!-- FootBar -->
            <div class="navbar p-0 d-lg-block d-xl-none">
                @include('client.footbar_mobile')
            </div>
            <!--Content-->
            <div class="bio-content container-fluid justify-content-between col-xl-6">
                <!--NavBar-->
                <div class="head-menu row">
                    <a class="hd-menu-bio-left" href="{{ route('home')}}">
                        <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5625 20.5832C13.5625 20.5832 7.4375 16.0938 7.4375 12.9998C7.4375 9.90692 13.5625 5.4165 13.5625 5.4165" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a class="hd-menu-bio-right" href="{{route('biodata.edit', $biodataUser->id)}}">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9993 10.292C14.4953 10.292 15.7077 11.5044 15.7077 13.0003C15.7077 14.4963 14.4953 15.7087 12.9993 15.7087C11.5034 15.7087 10.291 14.4963 10.291 13.0003C10.291 11.5044 11.5034 10.292 12.9993 10.292Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.848 7.8546V7.8546C21.1075 6.56299 19.4682 6.12104 18.1869 6.8669C17.0724 7.51431 15.6796 6.70424 15.6796 5.40835C15.6796 3.91771 14.479 2.7085 12.9991 2.7085V2.7085C11.5191 2.7085 10.3186 3.91771 10.3186 5.40835C10.3186 6.70424 8.92576 7.51431 7.81234 6.8669C6.53 6.12104 4.89068 6.56299 4.15017 7.8546C3.41072 9.1462 3.8495 10.7974 5.13185 11.5422C6.24527 12.1906 6.24527 13.8097 5.13185 14.4582C3.8495 15.204 3.41072 16.8552 4.15017 18.1457C4.89068 19.4373 6.53 19.8793 7.81128 19.1345H7.81234C8.92576 18.486 10.3186 19.2961 10.3186 20.592V20.592C10.3186 22.0826 11.5191 23.2918 12.9991 23.2918V23.2918C14.479 23.2918 15.6796 22.0826 15.6796 20.592V20.592C15.6796 19.2961 17.0724 18.486 18.1869 19.1345C19.4682 19.8793 21.1075 19.4373 21.848 18.1457C22.5885 16.8552 22.1487 15.204 20.8674 14.4582H20.8663C19.7529 13.8097 19.7529 12.1906 20.8674 11.5422C22.1487 10.7974 22.5885 9.1462 21.848 7.8546Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="bio-profile">
                    <img src="{{ $biodataUser->img ?? asset('assets/images/user_default.png') }}" alt="photo-profile" class="photo-profile">
                </div>
                <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST">

                        <div class="row bio-input">
                            <label class="form-label" for="Email">Email</label>
                            <input type="text" value="{{$biodataUser->email}}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="Nama">Nama</label>
                            <input type="text" value="{{$biodataUser->nama}}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="NIM">NIM</label>
                            <input type="text" value="{{ $biodataUser->nim}}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="Prodi">Prodi</label>
                            <input type="text" value="{{ $biodataUser->namaProdi }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="Prodi">Instagram</label>
                            <input type="text" value="{{ $biodataUser->instagram}}" disabled>
                        </div>


                </form>
            </div>
        </div>

         <!-- Required JS -->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
         <script src="{{ asset('assets') }}/js/custom.js"></script>
    </body>
</html>
