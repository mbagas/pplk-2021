<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets') }}/images/profile/pic1.jpg" width="20" alt=""/>
                    
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
            <li><a href="{{ route('dashboard.index') }}" class="ai-icon" aria-expanded="true">
                <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard </span>
                </a>
            </li>
            <li class=""><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Prodi</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.prodi') }}">Data Prodi</a></li>
                    <li><a href="{{ route('dashboard.createProdi') }}">Tambah Prodi</a></li>
                </ul>
            </li>
            <!-- Ini bagian senat -->
            <li class=""><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Senat</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.senat') }}">Data Senat</a></li>
                    <li><a href="{{ route('dashboard.createSenat') }}">Tambah Data Senat</a></li>
                </ul>
            </li>
            <!-- Ending Bagian senat  -->
            <li class="">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">UKM</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard.ukm') }}">Data UKM</a></li>
                    <li><a href="{{ route('dashboard.createUKM') }}">Tambah UKM</a></li>
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