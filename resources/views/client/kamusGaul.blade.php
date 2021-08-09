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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></link>
        <link rel="stylesheet" href="../css/bootstrap.css"></link>
        <link rel="stylesheet" href="../css/main-stylings.css"></link>        
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="../css/kamusGaul.css">
    </head>
    <body>
        <div class="main-wrapper">
            <nav class="navbar p-0">
                <div class="container-fluid nav-back">
                    <a class="navback-home" href="../html/index.html">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="10" fill="white"/>
                            <path d="M20.5625 25.5833C20.5625 25.5833 14.4375 21.094 14.4375 18C14.4375 14.907 20.5625 10.4166 20.5625 10.4166" stroke="#070A15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </a>
                </div>
            </nav>
            <!--Content-->
            <div class="page-content">
                <div class="card container-fluid justify-content-between">
                    
                    <!--Title-->                    
                    <h2>Kamus Gaul</h2>                                                                     
                    
                    <!--tabel-->
                    <table id="myTable" class="table table-striped" style="width:100%" data-order='[[1, "asc" ]]' data-page-length='10'>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gaul</th>
                                <th>Asli</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Aing</td>
                                <td>Aku</td>                                
                            </tr>   
                            <tr>
                                <td>2</td>
                                <td>Maneh</td>
                                <td>Kamu</td>                                
                            </tr> 
                            <tr>
                                <td>3</td>
                                <td>Basing</td>
                                <td>Terserah</td>                                
                            </tr> 
                            <tr>
                                <td>4</td>
                                <td>Geh</td>
                                <td>Dong</td>                                
                            </tr> 
                            <tr>
                                <td>5</td>
                                <td>Gupek</td>
                                <td>Panik</td>                                
                            </tr> 
                            <tr>
                                <td>6</td>
                                <td>Kulo</td>
                                <td>Saya</td>                                
                            </tr> 
                            <tr>
                                <td>7</td>
                                <td>Talingo</td>
                                <td>Kuping</td>                                
                            </tr> 
                            <tr>
                                <td>8</td>
                                <td>Jojong</td>
                                <td>Bebas</td>                                
                            </tr>                          
                            <tr>
                                <td>9</td>
                                <td>Kijang</td>
                                <td>Bohong</td>                                
                            </tr>   
                            <tr>
                                <td>10</td>
                                <td>Ligat</td>
                                <td>Cepat / Gesit</td>                                
                            </tr> 
                            <tr>
                                <td>11</td>
                                <td>Lu Orang</td>
                                <td>Kalian</td>                                
                            </tr> 
                            <tr>
                                <td>12</td>
                                <td>Kita Orang</td>
                                <td>Kami</td>                                
                            </tr> 
                            <tr>
                                <td>13</td>
                                <td>Mengkol</td>
                                <td>Belok</td>                                
                            </tr> 
                            <tr>
                                <td>14</td>
                                <td>Ngepek</td>
                                <td>Mencontek</td>                                
                            </tr> 
                            <tr>
                                <td>15</td>
                                <td>Ngotak</td>
                                <td>Otak otak</td>                                
                            </tr> 
                            <tr>
                                <td>16</td>
                                <td>Susuk</td>
                                <td>Uang</td>                                
                            </tr> 
                            <tr>
                                <td>17</td>
                                <td>Mak Jelas</td>
                                <td>Tidak Jelas</td>                                
                            </tr>               
                        </tbody>                
                    </table>

                </div>
            </div>
        </div>
        <!-- Required JS -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html> 