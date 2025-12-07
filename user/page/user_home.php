<?php

include '../functions/koneksi.php';

include '../functions/data.php';

if ($_SESSION['level'] == 0) {
  return;
}

date_default_timezone_set('Asia/Jakarta');

$tanggal    = date('d M');
$jam        = date('H:i A');

$sesi_id      = $_SESSION['id_user'];
$sesi_nama    = $_SESSION['nama_user'];
$sesi_level   = $_SESSION['level'];

?>
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $total_trip; ?></h3>
        <p>Total Trip</p>
      </div>
      <div class="icon">
        <i class="fas fa-tree"></i>
      </div>

    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?= $total_klien; ?></h3>
        <p>Total Reservasi</p>
      </div>
      <div class="icon">
        <i class="fas fa-book"></i>
      </div>

    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?= $total_user; ?></h3>
        <p>Total Staff</p>
      </div>
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?= $total_cust; ?></h3>
        <p>Total Customer</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>
</div>