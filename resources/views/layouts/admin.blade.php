<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Home')</title>
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Button Css -->
    <link href="{{ asset('assets/css/loading.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/loading-btn.css') }}" rel="stylesheet">
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index.html">
          <h4 class="logo" style="color: #666;">Dashboard</h4>
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
          <i class="mdi mdi-menu"></i>
          </button>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-apps mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Welcome</h6>
                  <p class="dropdown-title-text mt-2">Mini Dashboard</p>
                </div>
                <div class="dropdown-body border-top pt-0">
                  <a href="" class="dropdown-grid">
                    <i class="grid-icon mdi mdi-face mdi-2x"></i>
                    <span class="grid-tittle">Profile</span>
                  </a>
                  <a href="{{ route('settings.index') }}" class="dropdown-grid">
                    <i class="grid-icon mdi mdi-settings mdi-2x"></i>
                    <span class="grid-tittle">Settings</span>
                  </a>
                  <a class="dropdown-grid" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="grid-icon mdi mdi-power mdi-2x"></i>
                      <span class="grid-tittle">Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- Sidebar -->
      <div class="sidebar">
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="{{ route('admin.dashboard') }}">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('clients.index') }}">
              <span class="link-title">Clients Logo</span>
              <i class="mdi mdi-blur link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('offices.index') }}">
              <span class="link-title">Offices</span>
              <i class="mdi mdi-bank link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('products.index') }}">
              <span class="link-title">Products</span>
              <i class="mdi mdi-application link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('project-categories.index') }}">
              <span class="link-title">Project Categories</span>
              <i class="mdi mdi-receipt link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('projects.index') }}">
              <span class="link-title">Projects</span>
              <i class="mdi mdi-web link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('services.index') }}">
              <span class="link-title">Services</span>
              <i class="mdi mdi-trello link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('settings.index') }}">
              <span class="link-title">Settings</span>
              <i class="mdi mdi-settings link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('smtp.index') }}">
              <span class="link-title">SMTP</span>
              <i class="mdi mdi-email-open link-icon"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('testimonials.index') }}">
              <span class="link-title">Testimonials</span>
              <i class="mdi mdi-note-plus link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper" style="background-color: #ececec;">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <!-- Main Contents -->
            @yield('content')
            <!-- End Main Contents -->
          </div>
        </div>
      </div>
      <!-- content viewport ends -->
    </div>
    <!-- page content ends -->
  </div>
  <!--page body ends -->
  <!-- plugins:js -->
  <script src="{{ asset('assets/js/core.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <!-- CSS Loading Script -->
  <script>

      function loadingBtn() {
          document.getElementById('loading-btn').innerHTML = '<button type="button" class="btn btn-sm btn-disabled  ld-ext-right running" disabled>Please wait <div class="ld ld-ring ld-spin"></div></button>';
          return true;
      }

  </script>
</body>
</html>