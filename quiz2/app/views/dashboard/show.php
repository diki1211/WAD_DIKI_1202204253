<?php 
  if(isset($_POST['dismiss-alert'])) {
    session_destroy();
    echo "<meta http-equiv='refresh' content='0' />";
  }
?>

<header class="navbar sticky-top flex-md-nowrap p-0 shadow-sm bg-light">
  <a class="navbar-brand bg-light col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="<?= BASEURL; ?>/img/logo.png" alt="Logo VStore" width="50" /></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?= BASEURL; ?>/auth/logout">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-4">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/dashboard"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="bi bi-inboxes me-2"></i>Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= BASEURL; ?>/orders"><i class="bi bi-bag-check me-2"></i>orderan</a>
          </li>
        </ul>      
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Daftar barang</h2>    
        <a href="<?= BASEURL; ?>/dashboard/create" class="btn btn-sm btn-outline-secondary fixed-bottom">Add <i class="bi bi-plus-lg"></i></a>
      </div>
      <div class="row">
        <div class="col-12">
          <?php if(isset($_SESSION['alert']) && $_SESSION['alert'] === 'delete-success') { ?>
            <div class='alert alert-success alert-dismissible' role='alert'>
              <span>Produk berhasil dihapus</span>
              <form action="" method="post">
                <button type='submit' class='btn-close' name="dismiss-alert"></button>
              </form>
            </div>
          <?php } elseif(isset($_SESSION['alert']) && $_SESSION['alert'] === 'delete-failed') { ?>
            <div class='alert alert-danger alert-dismissible' role='alert'>
              <span>Produk gagal dihapus</span>
              <form action="" method="post">
                <button type='submit' class='btn-close' name="dismiss-alert"></button>
              </form>
            </div>
          <?php } elseif(isset($_SESSION['alert']) && $_SESSION['alert'] === 'update-success') { ?>
            <div class='alert alert-success alert-dismissible' role='alert'>
              <span>Produk berhasil diupdate</span>
              <form action="" method="post">
                <button type='submit' class='btn-close' name="dismiss-alert"></button>
              </form>
            </div>
          <?php } elseif(isset($_SESSION['alert']) && $_SESSION['alert'] === 'add-success') { ?>
            <div class='alert alert-success alert-dismissible' role='alert'>
              <span>Produk berhasil ditambah</span>
              <form action="" method="post">
                <button type='submit' class='btn-close' name="dismiss-alert"></button>
              </form>
            </div>
          <?php } ?>
        </div>
        <?php foreach($data['products'] as $product) { ?>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="card my-4" data-id="<?= $product['id']; ?>">
              <img src="<?= BASEURL; ?>/img/products/<?= $product['gambar']; ?>" class="card-img-top p-2 rounded-4" alt="..." />
              <div class="card-body">
                <span class="type"><?= $product['kategori']; ?></span>
                <h5 class="card-title"><?= $product['nama']; ?></h5>
                <h4 class="pt-2 fw-bold"><?= rupiah($product['harga']); ?></h4>
                <div class="position-absolute" style="right: 15px; bottom: 15px">
                  <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/dashboard/delete/<?= $product['id']; ?>; ?>"><i class="bi bi-eraser"></i></a>
                  <a class="btn btn-outline-success ms-1" href="<?= BASEURL; ?>/dashboard/edit/<?= $product['id']; ?>"><i class="bi bi-pencil"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?> 
      </div>
    </main>
  </div>
</div>