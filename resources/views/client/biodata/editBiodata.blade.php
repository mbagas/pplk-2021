<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .image-upload>input {
                display: none;
            }
        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>PPLK 2021 - Edit Biodata</title>

        <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

        <!-- Styling and logo -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-stylings.css"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/biodata.css"></link>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/Logopplk-clearbg.png"></link>
        <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css"></link>

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/edit-biodata.css"></link>
    </head>
    <body>
        <div class="main-wrapper container-fluid">
            <!-- Desktop Navabar top -->
            @include('client.menu')

            <div class="col-xl-6 page-content">
                <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" action="{{ route('biodata.update', $editBiodata->id)}}" method="POST" enctype="multipart/form-data">
                        <!--NavBar-->
                    @method('PUT')
                    @csrf
                    <div class="head-menu-editbio d-flex justify-content-between">
                        <a class="head-custom" href="{{ route('biodata.index') }}">
                            <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5625 16.5832C7.5625 16.5832 1.4375 12.0938 1.4375 8.99984C1.4375 5.90692 7.5625 1.4165 7.5625 1.4165" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <button class="save-bio" type="submit">
                            <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.63867 6.50014L6.88125 11.7405L17.362 1.25977" stroke="#4A4A4A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <!--Content-->
                    <div class="bio-content container-fluid justify-content-between">
                        <div class="bio-profile" onclick="">

                        <!-- tahan -->
                            <div class="image-upload icon-photo">
                                <label for="file-input">
                                    <img src="{{ asset('assets') }}/images/logo photo.png"/>
                                </label>
                                <input id="file-input" type="file" accept="image/*" name="img" id="img" value="{{$editBiodata->img}}" onchange="previewImg(this);"/>
                            </div>

                            <img id="imgUser" src="{{ $editBiodata->img ?? asset('assets/images/user_default.png')}}" alt="photo-profile" class="photo-profile">

                            <p class="edit-profile">Edit Profile Photo</p>
                            <!-- <input type="file" name="img" id="img" value="{{$editBiodata->img}}"/> -->
                            <svg width="23" height="3" viewBox="0 0 23 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="23" height="3" rx="1.5" fill="#3991C9"/>
                            </svg>
                        </div>
                        <!-- <button type="submit">submit </button> -->
                        <div class="row bio-input">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" placeholder="Email" value="{{$editBiodata->email}}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" placeholder="Nama" value="{{$editBiodata->nama}}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" placeholder="Nomor Induk Mahasiswa" value="{{$editBiodata->nim}}" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
         <!-- Required JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script>
        function previewImg(input){
            if(input.files && input.files[0]){
                var read = new FileReader();
                read.onload = function (e){
                    $('#imgUser').attr('src', e.target.result);
                    $('#file-input').attr('value', e.target.result);
                    id="file-input"
                };
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    </body>



</html>
