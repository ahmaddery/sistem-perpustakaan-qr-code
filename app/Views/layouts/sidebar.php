<?php

/**
 * List of sidebar navigations
 */
$sidebarNavs =
  [
    'Home',
    [
      'name' => 'Dashboard',
      'link' => '/admin/dashboard',
      'icon' => 'ti ti-layout-dashboard'
    ],
    'Transaksi',
    [
      'name' => 'Peminjaman',
      'link' => '/admin/loans',
      'icon' => 'ti ti-arrows-exchange'
    ],
    [
      'name' => 'Pengembalian',
      'link' => '/admin/returns',
      'icon' => 'ti ti-check'
    ],
    [
      'name' => 'Denda',
      'link' => '/admin/fines',
      'icon' => 'ti ti-report-money'
    ],
    'Master',
    [
      'name' => 'Anggota',
      'link' => '/admin/members',
      'icon' => 'ti ti-user'
    ],
    [
      'name' => 'Buku',
      'link' => '/admin/books',
      'icon' => 'ti ti-book'
    ],
    [
      'name' => 'Kategori',
      'link' => '/admin/categories',
      'icon' => 'ti ti-category-2'
    ],
    [
      'name' => 'Rak',
      'link' => '/admin/racks',
      'icon' => 'ti ti-columns'
    ],
  ];
?>
<!-- Sidebar Start -->
<style>
  @media only screen and (max-width: 768px) {
    .left-sidebar {
      position: fixed;
      z-index: 1050;
      left: -260px;
      height: 100%;
      overflow-y: auto;
      overflow-x: hidden;
      transition: all 0.3s;
    }

    .left-sidebar.show-sidebar {
      left: 0;
    }
  }

  .brand-logo h2 {
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    font-size: 24px;
  }

  .brand-logo a {
    text-decoration: none;
    color: #333; /* You can change the color to your preference */
  }

  .sidebar-nav {
    background-color: #f9f9f9; /* You can change the background color to your preference */
    padding: 20px;
  }

  .sidebar-nav .nav-link {
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    font-size: 18px;
    color: #333; /* You can change the color to your preference */
  }

  .sidebar-nav .nav-link i {
    margin-right: 10px;
    font-size: 20px;
  }

  .sidebar-nav .nav-link:hover {
    color: #ff4081; /* You can change the hover color to your preference */
  }
</style>

<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <!-- Brand -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <div class="pt-4 mx-auto">
        <a href="<?= base_url(); ?>">
          <h2>Buku<span class="text-primary">Perpustakaan</span></h2>
        </a>
      </div>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>

    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <?php foreach ($sidebarNavs as $nav) : ?>
          <?php if (gettype($nav) === 'string') : ?>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"><?= $nav; ?></span>
            </li>
          <?php else : ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url($nav['link']) ?>" aria-expanded="false">
                <span>
                  <i class="<?= $nav['icon']; ?>"></i>
                </span>
                <span class="hide-menu"><?= $nav['name']; ?></span>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!-- Sidebar End -->
