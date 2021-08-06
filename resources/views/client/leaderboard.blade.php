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
        <link rel="shortcut icon" type="image/png" href="../assets/images/Logopplk-clearbg.png" />

        <!-- Per Page Styling -->
        <link rel="stylesheet" href="../css/index.css"></link>
    </head>

    <body>
        <div class="main-wrapper">
            <!-- Navbar -->
            <nav class="navbar p-0">
                <div class="container-fluid head-bar">
                    <a class="pplk-logo navbar-brand" href="#">
                        <img src="../assets/images/Logopplk-clearbg.png" alt="launch-logo-pplk" class="pplk-logo-img"/>
                    </a>
                    <div class="head-menu row ">
                        <a class="head-menu-icon" href="#">
                            <img src="../assets/images/notification.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-icon" href="#">
                            <img src="../assets/images/messages.png" alt="notification-menu">
                        </a>
                        <a class="head-menu-profile" href="profile">
                            <img src="../assets/images/jhonnysins.png" alt="notification-menu">    
                        </a>
                    </div>
                </div>
            </nav>

            <div class="navbar p-0">
                <ul class="container-fluid footer-bar">
                        
                        <li>
                            <a href="../html/index.html">
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
                            <a href="../html/biodata.html">
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
                            <a href="../html/tugas.html">
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
                            <a href="../html/games.html">
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
                            <a href="../html/leaderboard.html">
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

            <div class="page-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat ligula sit amet lectus sollicitudin, eu placerat felis imperdiet. Pellentesque volutpat, eros fringilla rutrum imperdiet, mauris purus maximus augue, sit amet convallis erat eros ac nibh. Donec fermentum laoreet sem pulvinar suscipit. Aenean congue tellus eros, sed pharetra felis aliquet sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin consequat, arcu vel scelerisque hendrerit, massa neque mollis odio, a dictum nisl ipsum in metus. Nunc vel porttitor libero, ac interdum lacus.

Mauris ac enim eu tortor blandit sodales. Morbi accumsan malesuada nulla, at bibendum eros. Nunc suscipit mauris sit amet nibh euismod efficitur. Vestibulum viverra tincidunt risus, ac suscipit massa fermentum sed. Suspendisse rhoncus, felis sed scelerisque posuere, dui ligula suscipit diam, a luctus libero tellus ut libero. Quisque sodales lectus a risus bibendum ultrices. Aenean in imperdiet lectus, quis mollis magna. Nunc vitae justo facilisis, posuere elit eget, vulputate metus. Sed est mi, feugiat id nulla pellentesque, volutpat ornare elit. Suspendisse potenti.

Aenean mi metus, ultricies vitae facilisis non, imperdiet nec orci. Maecenas non odio ultricies, cursus sapien sed, tempor leo. Proin tempus cursus magna. Suspendisse consectetur, tortor a pretium mollis, leo neque tincidunt nisi, et vestibulum ex lorem non mauris. Fusce non dui eu nunc convallis fermentum tempor ac elit. Proin molestie, erat eget porttitor finibus, nulla turpis eleifend felis, at fringilla nunc sem vitae velit. Mauris laoreet sodales est id blandit. Donec elementum laoreet dignissim.

Praesent vitae sem ac magna porta porttitor. Sed eget rhoncus est, sit amet iaculis justo. Donec mattis nisi sed blandit congue. In bibendum, ante eget venenatis maximus, turpis arcu auctor orci, vitae dapibus mi ex ut lectus. Donec faucibus, urna non dictum posuere, lorem arcu porttitor libero, nec egestas diam eros ac justo. Fusce volutpat sed orci ornare ultricies. Nulla facilisi. Cras sit amet pharetra arcu. Morbi a viverra odio, eget pretium ipsum. Quisque blandit quam eget sagittis auctor. Ut varius gravida lacus id porta. Nullam aliquet fermentum metus vel viverra. Proin accumsan congue est, in tristique nulla pellentesque eu.

Fusce purus nisl, euismod nec dignissim sit amet, suscipit eget ante. Cras elementum arcu quis nisi blandit lacinia. Nullam vehicula consectetur vulputate. Vestibulum a turpis turpis. Vivamus nec erat commodo, tristique eros at, tincidunt nulla. Praesent vulputate diam mauris, ut viverra est auctor ac. Vestibulum eu justo purus. Nullam laoreet viverra metus. Sed rutrum, risus sagittis placerat ullamcorper, velit odio sagittis turpis, et facilisis sapien dui at enim. Duis aliquet, ligula ut porta semper, orci dui tempor velit, a volutpat velit velit ac ex. Nam et ante vehicula, dignissim lacus nec, bibendum velit. Vestibulum aliquam dignissim faucibus. Pellentesque iaculis, ipsum et feugiat condimentum, felis elit tristique nisi, non rhoncus dolor diam ut nunc. Vivamus eleifend ante quis dignissim lacinia. Donec luctus vulputate lobortis. Nulla purus nisi, gravida ac erat non, tincidunt molestie orci.

Duis blandit tortor vel magna viverra malesuada. Nulla eleifend tempor urna, vel euismod risus tempor eu. Sed semper odio vel efficitur condimentum. Aenean eleifend congue velit, quis varius ligula porttitor quis. Quisque maximus convallis ultrices. Pellentesque nunc eros, consectetur quis pretium ac, sagittis eget nibh. Aenean finibus cursus rutrum.

Nunc blandit dui elementum ultrices suscipit. Etiam et neque scelerisque, condimentum est ac, porttitor elit. Integer nulla arcu, laoreet sit amet hendrerit in, vulputate a risus. Integer imperdiet purus nec ante volutpat placerat. Pellentesque accumsan porta enim, in congue eros gravida ac. Proin efficitur tincidunt sollicitudin. Fusce eget tincidunt augue.

Vivamus viverra diam non quam venenatis, a aliquam leo facilisis. Proin nec ante ut leo vehicula eleifend. Aliquam mollis purus nisl, id luctus sem ultrices sit amet. Fusce vel bibendum urna. Cras lacinia erat nec tempus rutrum. Proin tincidunt nibh urna, et accumsan lectus porta at. In hac habitasse platea dictumst. Aliquam augue nisl, vulputate nec lectus eu, auctor eleifend ante. Praesent ligula magna, fringilla vel ligula a, tincidunt sagittis nulla. Sed ullamcorper leo est, nec facilisis lacus elementum eget. Ut laoreet sed arcu vitae egestas. Sed quis molestie elit, sit amet lacinia quam. Ut bibendum egestas erat id tincidunt. Maecenas vitae laoreet sapien, a tincidunt enim.

Ut quis ligula vel velit eleifend sodales a vel sapien. Quisque in urna nulla. Pellentesque hendrerit tempus magna sed faucibus. Nullam vel ex cursus nisi tempor hendrerit. Donec in hendrerit lorem. Integer bibendum sit amet quam non pretium. Pellentesque mollis est nec aliquam elementum. Aliquam vitae varius diam, non fermentum arcu.
t mi. Pellentesque ipsum dui, pretium sit amet erat non, elementum volutpat urna. Nunc nec ornare sem. Curabitur at odio pellentesque, pretium dui in, maximus nibh. Integer interdum ornare lacus ultrices interdum. Etiam ut tempor eros. Etiam pretium gravida nulla vel lobortis. Duis ultricies ante nunc, ac feugiat eros aliquam non. Nullam in libero vel neque fringilla cursus at ac nulla. Vivamus facilisis nisi sed turpis commodo ultricies. Quisque sed pretium nunc. Ut lacinia feugiat luctus. Suspendisse condimentum ex vestibulum ex convallis, vel fringilla tellus auctor. Nam ac odio eu quam egestas tincidunt nec eget arcu.

In vel sodales augue. Morbi commodo sed velit sed consequat. Praesent sed vestibulum leo. Ut consectetur suscipit sem vel malesuada. Phasellus gravida, odio sed imperdiet ultrices, arcu justo ultricies leo, nec commodo nisi felis ac velit. Suspendisse enim orci, rutrum vitae pellentesque a, ultrices nec est. In tellus nisi, fermentum ut sagittis nec, ornare eget odio. Cras eleifend eget est maximus efficitur. Nam convallis eleifend elementum. Praesent a nulla vel lorem fermentum commodo. Nunc aliquam luctus vehicula. Sed ultricies turpis scelerisque, porttitor elit eu, vestibulum nibh. Aliquam vitae libero quam. Suspendisse potenti. Maecenas luctus lacus vel justo maximus feugiat ut quis augue. Aenean dapibus neque eu tortor varius consectetur.

Pellentesque ac tristique nisl, vitae elementum diam. Sed sem ipsum, consectetur ut erat vulputate, placerat posuere diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec eget tortor tellus. Maecenas ut tortor efficitur, vestibulum tortor ac, gravida turpis. Donec pellentesque vel turpis ut varius. Nullam a ipsum a neque consequat convallis. Duis a ex quis sapien feugiat efficitur at ut risus.
                </p>
            </div>
        </div>

        <!-- Required JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>