<div class="dlabnav">
<<<<<<< HEAD
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <div class="media me-2">
                        <div class="media me-2 media-info user-icon">
                            <i class="fa fa-user-circle media me-2 media-info" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi, <b>{{Auth::user()->nama}}</b> !</span>
                        <small class="text-end font-w400">{{Auth::user()->email}}</small>
                    </div>
                </a>
            </li>
            @if(Auth::user()->roles_id == 1)
                <li>
                    <a href="{{ route('dashboard.index') }}" class="ai-icon" aria-expanded="true">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard </span>
                    </a>
                </li>
                <!-- Akun Mahasiswa -->
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <span class="nav-text">User</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="{{ route('dashboard.user.create') }}">Tambah User</a></li>
                        <li><a href="{{ route('dashboard.user.index') }}">Kelola Data User</a></li>
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
            @elseif(Auth::user()->roles_id == 6)
                <li>
                    <a href="{{ route('dashboardOrmawa.index') }}" class="ai-icon" aria-expanded="true">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard </span>
                    </a>
                </li>
            @elseif(Auth::user()->roles_id == 3)
                <li>
                    <a href="{{ route('dashboardDaplokMentor.index') }}" class="ai-icon" aria-expanded="true">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="nav-text">User</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="{{ route('dashboardDaplokMentor.user.create') }}">Tambah User</a></li>
                        <li><a href="{{ route('dashboardDaplokMentor.user.index') }}">Kelola Data User</a></li>
                    </ul>
                </li>
            @endif
            <div class="copyright">
                <p><strong>Content Management System PPLK 2021</strong> © 2021 All Rights Reserved</p>
                <p class="fs-12">Made with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by Abhinaksa</p>
            </div>
        
=======
  <div class="dlabnav-scroll">
    <ul class="metismenu" id="menu">
      <li class="header-profile">
        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
          <div class="media me-2">
            <div class="media me-2 media-info user-icon">
              <i class="fa fa-user-circle media me-2 media-info" aria-hidden="true"></i>
            </div>
          </div>
          <div class="header-info ms-3">
            <span class="font-w600 ">Hi, <b>{{Auth::user()->nama}}</b> !</span>
            <small class="text-end font-w400">{{Auth::user()->email}}</small>
          </div>
        </a>
      </li>
      @if(Auth::user()->roles_id == 1)
      <li>
        <a href="{{ route('dashboard.index') }}" class="ai-icon" aria-expanded="true">
          <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Dashboard </span>
        </a>
      </li>
      <!-- Akun Mahasiswa -->
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          <span class="nav-text">User</span>
        </a>
        <ul aria-expanded="false" class="mm-collapse">
          <li><a href="{{ route('dashboard.user.create') }}">Tambah User</a></li>
          <li><a href="{{ route('dashboard.user.index') }}">Kelola Data User</a></li>
>>>>>>> 84df0294831bf95a7fefd1417485fa46d0cb732c
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
      {{-- --}}
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="bi-book-fill"></i>
          <span class="nav-text">Kamus Gaul</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{ route('dashboard.kamusGaul.create') }}">Masukkan Kata Gaul</a></li>
          <li><a href="{{ route('dashboard.kamusGaul.index') }}">Kelola Kamus Gaul</a></li>
        </ul>
      </li>
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-tasks" aria-hidden="true"></i>
          <span class="nav-text">Tugas</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{route('dashboard.tugas.create')}}">Masukkan Tugas Baru</a></li>
          <li><a href="{{route('dashboard.tugas.index')}}">Nilai Tugas</a></li>
          <li><a href="{{route('dashboard.maba.index')}}">Kerjakan Tugas</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void()">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          <span class="nav-text">E-commerce</span>
        </a>
      </li>
      @elseif(Auth::user()->roles_id == 6)
      <li>
        <a href="{{ route('dashboardOrmawa.index') }}" class="ai-icon" aria-expanded="true">
          <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Dashboard </span>
        </a>
      </li>
      @elseif(Auth::user()->roles_id == 3)
      <li>
        <a href="{{ route('dashboardDaplokMentor.index') }}" class="ai-icon" aria-expanded="true">
          <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Dashboard </span>
        </a>
      </li>
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span class="nav-text">User</span>
        </a>
        <ul aria-expanded="false" class="mm-collapse">
          <li><a href="{{ route('dashboardDaplokMentor.user.create') }}">Tambah User</a></li>
          <li><a href="{{ route('dashboardDaplokMentor.user.index') }}">Kelola Data User</a></li>
        </ul>
      </li>
      @endif

      <div class="copyright">
        <p><strong>Content Management System PPLK 2021</strong> © 2021 All Rights Reserved</p>
        <p class="fs-12">Made with <span class="heart"></span> by Abhinaksa</p>
      </div>
    </ul>
    </li>
    {{-- --}}
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
    <li class="">
      <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-041-graph"></i>
        <span class="nav-text">Tugas</span>
      </a>
      <ul aria-expanded="false" class="mm-collapse">
        <li><a href="{{ route('dashboard.tugas.index') }}">Data Tugas</a></li>
        <li><a href="{{ route('dashboard.tugas.create') }}">Tambah Tugas</a></li>
      </ul>
    </li>
    <li><a href="{{route('dashboard.maba.index')}}" class="ai-icon" aria-expanded="false">
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
