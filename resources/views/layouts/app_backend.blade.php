@include('layouts.head')
  <!-- Sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MENU NAVIGASI</li>
        <li class="@yield('active-home')">
            <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        @include('layouts.menu.menu_admin')
      </ul>
    </section>
  </aside>
  <!-- End Sidebar -->

  <!-- Content  -->
  <div class="content-wrapper">
   <section class="content-header">
      <h1>
        @yield('title')
      </h1>
      <ol class="breadcrumb">
        @section('breadcrumb')
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        @show
      </ol>
    </section>

    <section class="content">
        @yield('content')
    </section>
  </div>
  <!-- End Content -->
  @include('layouts.footer')

