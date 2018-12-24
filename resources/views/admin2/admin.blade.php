<!DOCTYPE html>
<html lang="es">
  <head>
   @include('template_partials.admin_style')
   @yield('style')
  </head>
  <body id="page-top">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">InverProject</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Salir
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>

      </nav>

      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('panel') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('properties') }}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Inmuebles</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('clients') }}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Clientes</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Configuración</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Sistema:</h6>
              @can('users.index')<a class="dropdown-item" href="{{ url('users') }}">usuarios</a>@endcan
              @can('roles.index')<a class="dropdown-item" href="{{ url('roles') }}">Roles</a>@endcan
              @can('permissions.index')<a class="dropdown-item" href="{{ url('permissions') }}">Permisos</a>@endcan
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Parametros:</h6>
              @can('countries.index')<a class="dropdown-item" href="{{ url('countries') }}">Pais</a>@endcan
            </div>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">
            @if(session('info'))
              <div class="card text-white bg-info mb-3">
                <div class="card-header">{{ session('info') }}</div>
              </div>
            @endif
            <div id="panel">
              @yield('content')
            </div>
          </div>
          <!-- /.container-fluid -->

          <!-- Sticky Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © StudioTecno 2018</span>
              </div>
            </div>
          </footer>

        </div>
        <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->

  </body>

    <!-- Bootstrap core JavaScript-->
    @include('template_partials.admin_script')
    @yield('script')
</html>
