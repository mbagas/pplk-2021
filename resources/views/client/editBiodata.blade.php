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
        <link rel="stylesheet" href="../css/biodata.css"></link>
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="../css/edit-biodata.css"></link>
    </head>
    <body>
        <div class="main-wrapper">
            <!--NavBar-->
                <div class="head-menu d-flex justify-content-between">
                    <a class="head-custom" href="../html/biodata.html">
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
                <div class="bio-profile">
                    <div class="icon-photo">
                        <img src="../assets/images/logo photo.png">
                    </div>
                    <img src="../assets/images/jhonnysins.png" alt="photo-profile" >                                                            
                    <p class="edit-profile">Edit Profile Photo</p>
                    <svg width="23" height="3" viewBox="0 0 23 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="23" height="3" rx="1.5" fill="#3991C9"/>
                    </svg>                        
                </div>
                <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST">
                        
                        <div class="row bio-input">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" placeholder="Email" enabled>
                        </div>
                        
                        <div class="row bio-input">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" placeholder="Nama" enabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" placeholder="Nomor Induk Mahasiswa" enabled>
                        </div>                        

                        <div class="row bio-input">
                            <label class="form-label" for="prodi">Prodi</label>                                                
                            <div class="icon-dropdown">
                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4173 0.791504L8.00065 7.20817L1.58398 0.791504" stroke="#4A4A4A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <select>
                                <option selected class="selected">Program Studi</option>
                                <option value="1">IF</option>
                                <option value="2">Elektro</option>
                                <option value="3">PWK</option>
                            </select>                                                                                                  
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="golongan darah">Golongan Darah</label>
                            <div class="icon-dropdown">
                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4173 0.791504L8.00065 7.20817L1.58398 0.791504" stroke="#4A4A4A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <select>
                                <option selected class="selected">Golongan Darah</option>
                                <option value="1">A</option>
                                <option value="2">AB</option>
                                <option value="3">B</option>
                                <option value="4">O</option>
                            </select> 
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="alamat">Alamat</label>
                            <input type="text" placeholder="Alamat" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nama">Riwayat Penyakit</label>
                            <input type="text" placeholder="Riwayat Penyakit" disabled>
                        </div>                
                </form>
            </div>
        </div>

         <!-- Required JS -->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="../js/bootstrap.bundle.js"></script>
         <script src="../js/custom.js"></script>
    </body>
</html>