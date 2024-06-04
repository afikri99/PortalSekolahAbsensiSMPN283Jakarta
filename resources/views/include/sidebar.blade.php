<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="/assets/img/logo-smpn.svg" alt="SMPN 283 Jakarta" class="brand-image"> <!--end::Brand Image--> <!--begin::Brand Text--><!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
              <li class="nav-header">HOME</li>
              <li class="nav-item"> 
                <a href="./docs/how-to-contribute.html" class="nav-link">
                  <i class="fas fa-tachometer-alt"></i><p>Dashboard</p>
                </a>
              </li>
              <li class="nav-header">KEHADIRAN</li>
              <li class="nav-item"> 
                <a href="./docs/how-to-contribute.html" class="nav-link">
                  <i class="far fa-circle"></i><p>Absen Siswa</p>
                </a>
              </li>
              <li class="nav-item"> 
                <a href="./docs/how-to-contribute.html" class="nav-link">
                  <i class="far fa-circle"></i><p>Rekap Absensi</p>
                </a>
              </li>
              <li class="nav-header">ADMINISTRASI</li>
              <li class="nav-item"> 
                <a href="#" class="nav-link">
                  <i class="far fa-circle"></i> <p>Master Data</p>
                </a>
                <ul class="nav nav-treeview bg-dark rounded">
                  <li class="nav-item"> 
                    <a href="{{route('guru.index')}}" class="nav-link">
                      <p>Guru</p>
                    </a>
                  </li>
                  <li class="nav-item"> 
                    <a href="{{route('kelas.index')}}" class="nav-link">
                      <p>Kelas</p>
                    </a>
                  </li>
                  <li class="nav-item"> 
                    <a href="{{route('matapelajaran.index')}}" class="nav-link">
                      <p>Mata Pelajaran</p>
                    </a>
                  </li>
                  <li class="nav-item"> 
                    <a href="{{route('siswa.index')}}" class="nav-link">
                      <p>Siswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->