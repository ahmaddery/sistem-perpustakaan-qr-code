<!--  Header Start -->
<style>
  @media only screen and (max-width: 768px) {
    #navBtn {
      display: none;
    }
  }

  .navbar-light .navbar-nav .nav-link {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
  }

  .btn-primary, .btn-outline-primary {
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    border-radius: 25px;
  }

  .btn-primary:hover, .btn-outline-primary:hover {
    transform: scale(1.05);
  }

  .user-icon {
    background-color: #ffffff;
    border-radius: 50%;
    padding: 5px;
  }
</style>
<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end gap-2" id="headerCollapse">
        <li class="nav-item" id="navBtn">
          <a href=" <?= base_url('admin/loans/new/members/search'); ?>" target="_blank" class="btn btn-primary">Ajukan peminjaman</a>
        </li>
        <li class="nav-item" id="navBtn">
          <a href="<?= base_url('admin/returns/new/search'); ?>" target="_blank" class="btn btn-outline-primary">Pengembalian buku</a>
        </li>
        <li class="nav-item" id="navBtn">
          <a href="<?= base_url('admin/fines/returns/search'); ?>" target="_blank" class="btn btn-outline-warning">Bayar denda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon-hover position-relative" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
            <img alt="" width="35" height="35" class="rounded-circle border border-primary" style="background-color: white;">
            <i class="ti ti-user position-absolute top-50 start-50 translate-middle text-primary"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body">
              <a href="<?= base_url('logout'); ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!--  Header End -->