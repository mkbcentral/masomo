<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        @if (Auth::user()->school)
            @if (Auth::user()->school->logo_url==null)
                <img src="{{ asset('logo.jpg') }}" id="logoImage"
                alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            @else
                <img src="{{Storage::url(Auth::user()->school->logo_url) }}" id="logoImage"
                alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            @endif
        @else
            <img src="{{Storage::url(Auth::user()->school->logo_url) }}" id="logoImage"
            alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        @endif


      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->avatar==null ? asset('defautl-user.jpg') :
            Storage::url(Auth::user()->avatar) }}" id="profileImage"
            class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" x-ref="username">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.school') }}" class="nav-link {{ Route::is('admin.school') ? 'active' : '' }} ">
                <i class="fas fa-school    "></i>
              <p>
                Gestionnaire école
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.setting.app') }}" class="nav-link {{ Route::is('admin.setting.app') ? 'active' : '' }} ">
                <i class="fas fa-cogs"></i>
              <p>
               Paramètres
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.profil') }}" class="nav-link {{ Route::is('user.profil') ? 'active' : '' }} ">
                <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                Mon profile
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
