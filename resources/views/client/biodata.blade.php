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
                <ul class="container-fluid footer-bar">
                        
                        <li>
                            <a href="{{ route('home')}}">
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
                            <a href="{{route('biodata')}}">
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
                            <a href="{{ route('tugas')}}">
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
                            <a href="{{ route('games') }}">
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
                            <a href="{{ route('leaderboard') }}">
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
            <!--Content-->  
            <div class="bio-content container-fluid justify-content-between col-xl-6">
                <!--NavBar-->
                <div class="head-menu row">
                    <a class="hd-menu-bio-left" href="{{ route('home')}}">
                        <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5625 20.5832C13.5625 20.5832 7.4375 16.0938 7.4375 12.9998C7.4375 9.90692 13.5625 5.4165 13.5625 5.4165" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </a>
                    <a class="hd-menu-bio-right" href="{{route('editBiodata', $biodataUser->id)}}">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9993 10.292C14.4953 10.292 15.7077 11.5044 15.7077 13.0003C15.7077 14.4963 14.4953 15.7087 12.9993 15.7087C11.5034 15.7087 10.291 14.4963 10.291 13.0003C10.291 11.5044 11.5034 10.292 12.9993 10.292Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.848 7.8546V7.8546C21.1075 6.56299 19.4682 6.12104 18.1869 6.8669C17.0724 7.51431 15.6796 6.70424 15.6796 5.40835C15.6796 3.91771 14.479 2.7085 12.9991 2.7085V2.7085C11.5191 2.7085 10.3186 3.91771 10.3186 5.40835C10.3186 6.70424 8.92576 7.51431 7.81234 6.8669C6.53 6.12104 4.89068 6.56299 4.15017 7.8546C3.41072 9.1462 3.8495 10.7974 5.13185 11.5422C6.24527 12.1906 6.24527 13.8097 5.13185 14.4582C3.8495 15.204 3.41072 16.8552 4.15017 18.1457C4.89068 19.4373 6.53 19.8793 7.81128 19.1345H7.81234C8.92576 18.486 10.3186 19.2961 10.3186 20.592V20.592C10.3186 22.0826 11.5191 23.2918 12.9991 23.2918V23.2918C14.479 23.2918 15.6796 22.0826 15.6796 20.592V20.592C15.6796 19.2961 17.0724 18.486 18.1869 19.1345C19.4682 19.8793 21.1075 19.4373 21.848 18.1457C22.5885 16.8552 22.1487 15.204 20.8674 14.4582H20.8663C19.7529 13.8097 19.7529 12.1906 20.8674 11.5422C22.1487 10.7974 22.5885 9.1462 21.848 7.8546Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </a>
                </div>
                <div class="bio-profile">
                    <img src="{{ $biodataUser->img ?? asset('assets/images/jhonnysins.png') }}" alt="photo-profile" >
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
                            <input type="text" value="{{ $biodataUser->instagram ?? pplkitera}}" disabled>
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