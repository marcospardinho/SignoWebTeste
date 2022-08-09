<body class="hold-transition sidebar-mini layout-fixed ">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
      <!-- Left navbar links -->
      
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" class="nav-link" onclick="event.preventDefault();
                                      this.closest('form').submit();">
              {{ __('Sair ') }}

              <i class="fas fa-sign-out-alt"></i>
            </x-responsive-nav-link>

          </form>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
        <img align="" src="https://site.signoweb.com.br/assets/images/logo-signo.svg">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"> {{ Auth::guard('web')->user()->name }} </a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Procurar aba..." aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

            <li class="nav-header">MENUS</li>
            <li class="nav-item">
              <a href="{{ route('question.index') }}" class="nav-link">
              <i class="fas fa-question nav-icon"></i>
                <p>Enquetes</p>
              </a>
            </li>
          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  </div>
</body>


<!-- Control Sidebar -->

<!-- /.control-sidebar -->

<!-- ./wrapper -->