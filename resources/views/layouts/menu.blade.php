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
            {{-- add user --}}
            <li class=""><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-041-graph"></i>
                <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">

                    <li><a href="{{ route('dashboard.prodi.index') }}">Data User</a></li>
                    <li><a href="{{ route('dashboard.prodi.create') }}">Tambah User</a></li>

                </ul>
            </li>
            
            <li class=""><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Prodi</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">

                    <li><a href="{{ route('dashboard.prodi.index') }}">Data Prodi</a></li>
                    <li><a href="{{ route('dashboard.prodi.create') }}">Tambah Prodi</a></li>

                </ul>
            </li>
            <!-- Ini bagian senat -->
            <li class=""><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Senat</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.senat.index') }}">Data Senat</a></li>
                    <li><a href="{{ route('dashboard.senat.create') }}">Tambah Data Senat</a></li>
                </ul>
            </li>
            <!-- Ending Bagian senat  -->
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">UKM</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">

                    <li><a href="{{ route('dashboard.ukm.index') }}">Data UKM</a></li>
                    <li><a href="{{ route('dashboard.ukm.create') }}">Tambah UKM</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Himpunan</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.himpunan.index') }}">Data Himpunan</a></li>
                    <li><a href="{{ route('dashboard.himpunan.create') }}">Tambah Himpunan</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Fun Fact</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.funfact.index') }}">Data FunFact</a></li>
                    <li><a href="{{ route('dashboard.funfact.create') }}">Tambah FunFact</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Jurusan</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.jurusan.index') }}">Data Jurusan</a></li>
                    <li><a href="{{ route('dashboard.jurusan.create') }}">Tambah Jurusan</a></li>

                </ul>
            </li>
            {{--  --}}
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">PPLK</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.pplk.index') }}">Data PPLK</a></li>
                    <li><a href="{{ route('dashboard.pplk.create') }}">Tambah PPLK</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Kabinet</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.kabinet.index') }}">Data Kabinet</a></li>
                    <li><a href="{{ route('dashboard.kabinet.create') }}">Tambah Kabinet</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">UPT</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.upt.index') }}">Data UPT</a></li>
                    <li><a href="{{ route('dashboard.upt.create') }}">Tambah UPT</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Kamus Gaul LPG</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.kamusGaul.index') }}">Data Kamus Gaul</a></li>
                    <li><a href="{{ route('dashboard.kamusGaul.create') }}">Tambah Bahasa Gaul Lampung</a></li>
                </ul>
            </li>
            <li><a href="dataTugas.html" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-file"></i>
                    <span class="nav-text">Tugas </span>
                </a>
            </li>
            <li><a href="dataMerch.html" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-gift"></i>
                    <span class="nav-text">Merch </span>
                </a>
            </li>
            <li><a href="dataMateri.html" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-paperclip"></i>
                    <span class="nav-text">Materi </span>
                </a>
            </li>
        </ul>
    </div>
</div>
