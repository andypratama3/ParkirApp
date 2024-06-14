<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('landing.index') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> -->
        <h1 class="sitename">Dishub Samarinda</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        @if(Request::routeIs('landing.index'))
          <li><a href="#hero" class="">Home<br></a></li>
          <li><a href="#visi_misi">Visi Misi</a></li>
          <li><a href="#struktur-organisasi">Struktur Organisasi</a></li>
          <li><a href="#kebijakan">Kebijakan</a></li>
          <li><a href="#lokasi-parkir">Lokasi Parkir</a></li>
          <li><a href="#kontak">Kontak</a></li>
          @auth

          @if(Auth::user()->role == 'admin')
            <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
          @else
          <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="dropdown-item-icon icon-power text-primary"></i>Log Out
                </a>
            </form>
          </li>
          @endif
          @endauth

        @else
            <li><a href="/#hero" class="">Home<br></a></li>
            <li><a href="/#visi_misi">Visi Misi</a></li>
            <li><a href="/#struktur-organisasi">Struktur Organisasi</a></li>
            <li><a href="/#kebijakan">Kebijakan</a></li>
            <li><a href="/#lokasi-parkir">Lokasi Parkir</a></li>
            <li><a href="/#kontak">Kontak</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="dropdown-item-icon icon-power text-primary"></i>Log Out
                    </a>
                </form>
            </li>
        @endif
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
