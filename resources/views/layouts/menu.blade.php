<div class="dlabnav">

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
            <span class="font-w600 ">Hi, <b>{{auth()->user()->nama}}</b> !</span>
            <small class="text-end font-w400">{{auth()->user()->email}}</small>
          </div>
        </a>
      </li>
      @if(auth()->user()->roles_id == 1)
      <li>
        <a href="{{ route('dashboard.index') }}" class="ai-icon" aria-expanded="true">
          <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Dashboard </span>
        </a>
      </li>
      <li>
        <a href="{{ route('home') }}" class="ai-icon" aria-expanded="true">
          <i class="fa fa-home"></i>
          <span class="nav-text">Home PPLK </span>
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
          <li><a href="{{route('dashboard.tugas.index')}}">Kelola Tugas</a></li>
          <li><a href="{{route('dashboard.submissions.index')}}">Nilai Tugas</a></li>
        </ul>
      </li>
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-tasks" aria-hidden="true"></i>
          <span class="nav-text">Games</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{route('dashboard.findCode.create')}}">Masukkan Find the Code</a></li>
          <li><a href="{{route('dashboard.findCode.index')}}">Kelola Find the Code</a></li>
          <li><a href="{{route('dashboard.tebakGedung.create')}}">Masukkan Tebak Gedung</a></li>
          <li><a href="{{route('dashboard.tebakGedung.index')}}">Kelola Tebak Gedung</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void()">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          <span class="nav-text">E-commerce</span>
        </a>
      </li>
      @elseif(auth()->user()->roles_id == 6)
      <li>
        <a href="{{ route('dashboardOrmawa.index') }}" class="ai-icon" aria-expanded="true">
          <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Dashboard </span>
        </a>
      </li>
      @elseif(auth()->user()->roles_id == 3)
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

      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-tasks" aria-hidden="true"></i>
          <span class="nav-text">Tugas</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{route('dashboardDaplokMentor.submissions.index')}}">Nilai Tugas</a></li>
        </ul>
      </li>


      @elseif(auth()->user()->roles_id == 2)
      <li>
        <a href="{{ route('dashboardTugas.index') }}" class="ai-icon" aria-expanded="true">
          <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Dashboard </span>
        </a>
      </li>
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-tasks" aria-hidden="true"></i>
          <span class="nav-text">Tugas</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{route('dashboardTugas.tugas.create')}}">Masukkan Tugas Baru</a></li>
          <li><a href="{{route('dashboardTugas.tugas.index')}}">Kelola Tugas</a></li>
          <li><a href="{{route('dashboardTugas.submissions.index')}}">Nilai Tugas</a></li>
        </ul>
      </li>
      @endif

      </ul>
    <div class="copyright">
        <p><strong>Content Management System PPLK 2021</strong> © 2021 All Rights Reserved</p>
        <p class="fs-12">Made with <span class="heart"></span> by Abhinaksa</p>
      </div>
  </div>
</div>
