<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        
        <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        @if(auth()->user()->role == 'Admin')
        <li><a href="category" class=""><i class="lnr lnr-dice"></i> <span>Kategori</span></a></li>
        <li><a href="cagaralam" class=""><i class="lnr lnr-file-empty"></i> <span>Cagar Budaya</span></a></li>
        @endif
        @if(auth()->user()->role == 'Member')
        <li><a href="laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan</span></a></li>
        @endif
        @if(auth()->user()->role == 'Dinas Pariwisata')
        <li><a href="laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan</span></a></li>
        @endif
      </ul>
    </nav>
  </div>
</div>
