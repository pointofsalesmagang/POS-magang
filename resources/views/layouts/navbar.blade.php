<div class="navbar-menu-wrapper d-flex align-items-center justify-content-start">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1 ms-2 fs-3">Blue Mart</h4>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
  <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="https://i.pinimg.com/736x/b7/5b/29/b75b29441bbd967deda4365441497221.jpg" alt="profile"/>
          <span class="nav-profile-name">aaa</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="mdi mdi-logout text-primary"></i>
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        </div>
      </li>
    </ul>
  </div>
