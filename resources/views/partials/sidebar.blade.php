<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">ADMIN Menu</li>
        <li class="{{ (request()->segment(1)=='dashboard') ? 'active' : '' }}"><a class="nav-link" href="blank.html"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li class="{{ (request()->segment(1)=='siswa') ? 'active' : '' }}"><a class="nav-link" href="{{ route('siswa') }}"><i class="fas fa-users"></i> <span>Siswa</span></a></li>
        <li class="{{ (request()->segment(1)=='setting') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('setting') }}"><i class="fas fa-chalkboard"></i> <span>Pengumuman</span></a></li>
        <li class="{{ (request()->segment(1)=='skl') ? 'active' : '' }}"><a class="nav-link" href="{{ route('skl') }}"><i class="fas fa-print"></i> <span>Setting SKL</span></a></li>
        <li class="{{ (request()->segment(1)=='web') ? 'active' : '' }}"><a class="nav-link" href="{{ route('web') }}"><i class="fas fa-tools"></i> <span>Pengaturan Website</span></a></li>
         </ul>

         </aside>
  </div>