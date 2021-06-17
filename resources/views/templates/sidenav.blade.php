<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <h2 class="text-primary">API FINANCE</h2>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  {{ Route::is('api_list') ? 'active' : '' }}"
                           href="{{route('api_list')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">API List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('get_data_transaksi') ? 'active' : '' }}"
                           href="{{ route('get_data_transaksi') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i>
                            <span class="nav-link-text">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('get_data_bukti_pembayaran') ? 'active' : '' }}"
                           href="{{route('get_data_bukti_pembayaran')}}">
                            <i class="ni ni-paper-diploma text-primary"></i>
                            <span class="nav-link-text">Bukti Pembayaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('get_data_pengajuan_dana') ? 'active' : '' }}"
                           href="{{route('get_data_pengajuan_dana')}}">
                            <i class="ni ni-paper-diploma text-primary"></i>
                            <span class="nav-link-text">Pengajuan Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('get_data_tanggungan') ? 'active' : '' }}"
                           href="{{route('get_data_tanggungan')}}">
                            <i class="ni ni-paper-diploma text-primary"></i>
                            <span class="nav-link-text">Tanggungan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('get_data_asset') ? 'active' : '' }}"
                           href="{{route('get_data_asset')}}">
                            <i class="ni ni-paper-diploma text-primary"></i>
                            <span class="nav-link-text">Asset</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
