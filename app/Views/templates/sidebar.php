<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-store"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> Ayu Lestari </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/admin'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/pesanan'); ?>">
        <i class="fas fa-cart-arrow-down"></i>
        <span>Pesanan</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/credit'); ?>">
        <i class="fab fa-creative-commons-nc"></i>
        <span>Credit</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/perusahaan'); ?>">
        <i class="fas fa-store-alt"></i>
        <span>Perusahaan</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Rekapan
</div>

<!-- Nav Item - Bulan -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/bulan'); ?>">
        <i class="far fa-clipboard"></i>
        <span>Bulan</span></a>
</li>

<!-- Nav Item - Tahun -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/tahun'); ?>">
        <i class="fas fa-clipboard-list"></i>
        <span>Tahun</span></a>
</li>

<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Perusahaan
</div>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/pesanan1'); ?>">
        <i class="fas fa-cart-arrow-down"></i>
        <span>Pesanan</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/home/credit1'); ?>">
        <i class="fab fa-creative-commons-nc"></i>
        <span>Credit</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>