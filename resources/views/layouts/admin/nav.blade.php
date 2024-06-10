<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html">
        <img src="{{ asset('asset_admin/images/logo.svg') }}" alt="logo" class="logo-dark" />
        <img src="{{ asset('asset_admin/images/logo-light.svg') }}" alt="logo-light" class="logo-light">
      </a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('asset_admin/images/logo-mini.svg') }}" alt="logo" /></a>
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome Dashboard Admin!</h5>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            {{-- <img class="img-xs rounded-circle ms-2" src="{{ asset('asset_admin/images/faces/face8.jpg') }}" alt="Profile image"> --}}
             <span class="font-weight-normal"> {{ Auth::user()->name }} </span></a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              {{-- <img class="img-md rounded-circle" src="{{ asset('asset_admin/images/faces/face8.jpg') }}" alt="Profile image"> --}}
              <p class="mb-1 mt-3">{{ Auth::user()->name }}</p>
              <p class="font-weight-light text-muted mb-0">{{ Auth::user()->role }}</p>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" >
                <i class="dropdown-item-icon icon-power text-primary"></i>Sign Out
            </form>

            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>
