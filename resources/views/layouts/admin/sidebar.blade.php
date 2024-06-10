<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item navbar-brand-mini-wrapper">
            <a class="nav-link navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('asset_admin/images/logo-mini.svg') }}" alt="logo" /></a>
        </li>
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{ asset('asset_admin/images/faces/face8.jpg') }}"
                        alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">Henry Klein</p>
                    <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                    <i class="icon-bubbles"></i>
                    <div class="dot-indicator bg-danger"></div>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.index') ? 'active' : '' }}" >
            <a class="nav-link" href="{{ route('admin.index') }}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        {{-- <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Basic UI Elements</span>
          <i class="icon-layers menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div>
      </li> --}}
        <li class="nav-item {{ Request::routeIs('admin.parkirs.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.parkirs.index') }}">
                <span>Data Pengguna Parkir</span>
                <i class="icon-layers menu-icon"></i>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.users.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <span>Data Pengguna</span>
                <i class="icon-user menu-icon"></i>
            </a>
        </li>

        <li class="nav-item {{ Request::routeIs('admin.users.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <span>Kritik Dan Saran</span>
                <i class="icon-mail menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
