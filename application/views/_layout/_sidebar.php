<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <!-- <button class="btn btn-icon icon-left btn-primary editData" type="button" style="min-width: 5rem"><i class="fas fa-pen"></i>Edit</button> -->
      <a href="#" data-toggle="modal" data-target="#edit_nama"><?= $masjid; ?></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#" data-toggle="modal" data-target="#edit_nama"><i class="fas fa-mosque" style="font-size: 1.5rem;"></i></a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
        <li class="<?= $title == 'Dashboard' ? 'active' : ''; ?>"><a class="nav-link" href="<?= base_url(); ?>Dashboard/index"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
      </li>
      <li class="menu-header">Keuangan Masjid</li>
      <li class="dropdown <?= $title == 'Pemasukan Masjid' || $title == 'Pengeluaran Masjid' ? 'active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-wallet"></i><span>Kas Masjid</span></a>
        <ul class="dropdown-menu">
          <li class="<?= $title == 'Pemasukan Masjid' ? 'active' : ''; ?>"><a href="<?= base_url(); ?>Kas/masuk">Data Pemasukan</a></li>
          <li class="<?= $title == 'Pengeluaran Masjid' ? 'active' : ''; ?>"><a href="<?= base_url(); ?>Kas/keluar">Data Pengeluaran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konfigurasi</li>
        <li class="<?= $title == 'Kategori' ? 'active' : ''; ?>"><a class="nav-link" href="<?= base_url(); ?>Konfigurasi"><i class="fas fa-cogs"></i><span>Kategori</span></a></li>
      </li>
      </ul>
  </aside>
</div>
