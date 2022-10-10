
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <header class="nav flex-column">
    <a class="nav-item" href=""><img src="logo.jpg" height="200" width="225"></a>
  </header>
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('show-karyawan')?'active': '' }}" aria-current="page" href="/show-karyawan">
            <span data-feather="user" class="align-text-bottom"></span>
            Data Karyawan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('edit-karyawan')?'active': '' }}" href="/edit-karyawan">
            <span data-feather="edit" class="align-text-bottom"></span>
            Edit Data Karyawan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('cuti-karyawan')?'active': '' }}" href="/cuti-karyawan">
            <span data-feather="list" class="align-text-bottom"></span>
            Pantau Cuti Karyawan
          </a>
        </li>
      </ul>
    </div>
  </nav>