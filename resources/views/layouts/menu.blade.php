<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">M E N U</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </a>
                </li>

                <li class="has_sub">
                    <a href="{{ route('data-mahasiswa') }}" class="waves-effect"><i class="ti-user"></i> <span> Data Mahasiswa </a>
                </li>


                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-marker-alt"></i> <span> Tugas </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off"></i> <span> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                </li>



            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
