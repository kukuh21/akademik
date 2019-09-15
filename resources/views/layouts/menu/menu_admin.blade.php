<li class="@yield('active-master') treeview">
  <a href="#">
    <i class="fa fa-bars"></i>
    <span>Master</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="@yield('active-mahasiswa')">
      <a href="{{ route('mahasiswa.index') }}"><i class="fa fa-users"></i> <span>Data Mahasiswa</span></a>
    </li>
    <li class="@yield('active-dosen')">
      <a href="{{ route('dosen.index') }}"><i class="fa  fa-user-secret"></i> <span>Data Dosen</span></a>
    </li>
    <li class="@yield('active-matakuliah')">
      <a href="{{ route('matakuliah.index') }}"><i class="fa  fa-book"></i> <span>Mata Kuliah</span></a>
    </li>
  </ul>
</li>
<li class="@yield('active-perkuliahan')">
  <a href="{{ route('perkuliahan.index') }}"><i class="fa fa-graduation-cap"></i> <span>Perkuliahan</span></a>
</li>
<li class="@yield('active-laporan')">
  <a href="{{ route('laporan.index') }}"><i class="fa fa-print"></i> <span>Laporan</span></a>
</li>