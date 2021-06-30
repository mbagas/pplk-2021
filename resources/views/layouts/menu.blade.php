<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <div class="media me-2">
                        <div class="media me-2 media-info">
                            HB
                        </div>
                    </div>
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>Hafizul Bagaskara</b></span>
                        <small class="text-end font-w400">hfzul.b@gmail.com</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item ai-icon">
                        <svg id="icon-user1" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="ms-2">Profil </span>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span class="ms-2">Keluar </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                            @csrf
                        </form>
                    </a>
                </div>
            </li>

            <li>
                <a href="{{ route('dashboard.index') }}" class="ai-icon" aria-expanded="true">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard </span>
                </a>
            </li>
            <!-- Akun Mahasiswa -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="#">Data User</a></li>
                    <li><a href="{{ route('dashboard.register') }}">Tambah User</a></li>
                </ul>
            </li>
            <!-- ITERA -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    <span class="nav-text">ITERA</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.upt.create') }}">Masukkan Data UPT ITERA</a></li>
                    <li><a href="{{ route('dashboard.upt.index') }}">Kelola Data UPT ITERA</a></li>
                </ul>
            </li>    
            <!-- Jurusan -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span class="nav-text">Jurusan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.jurusan.create') }}">Masukkan Data Jurusan</a></li>
                    <li><a href="{{ route('dashboard.jurusan.index') }}">Kelola Data Jurusan</a></li>
                </ul>
            </li>
            <!-- Prodi -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="nav-text">Prodi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.prodi.create') }}">Masukkan Data Prodi</a></li>
                    <li><a href="{{ route('dashboard.prodi.index') }}">Kelola Data Prodi</a></li>
                </ul>
            </li>
            <!-- Himpunan -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="nav-text">Himpunan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.himpunan.create') }}">Masukkan Data Himpunan</a></li>
                    <li><a href="{{ route('dashboard.himpunan.index') }}">Kelola Data Himpunan</a></li>
                </ul>
            </li>
            <!-- KM Itera -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="nav-text">KM ITERA</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.kabinet.create') }}">Masukkan Data Kabinet</a></li>
                    <li><a href="{{ route('dashboard.kabinet.index') }}">Kelola Data Kabinet</a></li>
                    <li><a href="{{ route('dashboard.senat.create') }}">Masukkan Data Senat</a></li>
                    <li><a href="{{ route('dashboard.senat.index') }}">Kelola Data Senat</a></li>
                </ul>
            </li>
            <!-- UKM/Komunitas -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-map" aria-hidden="true"></i>
                    <span class="nav-text">UKM/Komunitas</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.ukm.create') }}">Masukkan Data UKM/Komunitas</a></li>
                    <li><a href="{{ route('dashboard.ukm.index') }}">Kelola Data UKM/Komunitas</a></li>
                </ul>
            </li>
            <!-- PPLK -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                    <span class="nav-text">PPLK</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.pplk.create') }}">Masukkan Data PPLK</a></li>
                    <li><a href="{{ route('dashboard.pplk.index') }}">Kelola Data PPLK</a></li>
                </ul>
            </li>
            <!-- Fun Fact -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <span class="nav-text">Fun Fact</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.funfact.create') }}">Masukkan Fun Fact</a></li>
                    <li><a href="{{ route('dashboard.funfact.index') }}">Kelola Data Fun Fact</a></li>
                </ul>
            </li>
            {{--  --}}
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="bi-book-fill" ></i>
                    <span class="nav-text">Kamus Gaul</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.kamusGaul.create') }}">Masukkan Kata Gaul</a></li>
                    <li><a href="{{ route('dashboard.kamusGaul.index') }}">Kelola Kamus Gaul</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                    <span class="nav-text">Tugas</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="../html/Tugas/input-data-tugas.html">Masukkan Tugas Baru</a></li>
                    <li><a href="../html/Tugas/manage-data-tugas.html">Nilai Tugas</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void()" >
                    <i class="fa fa-shopping-basket" aria-hidden="true" ></i>
                    <span class="nav-text">E-commerce</span>
                </a>
            </li>
            <div class="copyright">
                <p><strong>Content Management System PPLK 2021</strong> © 2021 All Rights Reserved</p>
                <p class="fs-12">Made with <span class="heart"></span> by Abhinaksa</p>
            </div>
        </ul>
    </div>
</div>
