<header class="navbar sticky-top flex-md-nowrap p-0 shadow-sm bg-light">
  <a class="navbar-brand bg-light col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="<?= BASEURL; ?>/img/logo.png" alt="Logo VStore" width="50" /></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <span class="w-100 text-muted">Welcome Admin</span>
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
            <a class="nav-link " href="#"><i class="bi bi-inboxes me-2"></i>Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= BASEURL; ?>/orders"><i class="bi bi-bag-check me-2"></i>orderan</a>
          </li>
        </ul>      
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Order Detail</h2>
        <a href="<?= BASEURL; ?>/dashboard/orders" class="btn btn-outline-dark"><i class="bi bi-arrow-left"></i> Back</a>
      </div>
        <h5 class="my-4">Invoice No. <?= $data['order_detail'][0]['invoice_no']; ?></h5 class="my-4">
        <div class="table-responsive col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center" width="5%">No</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Product</th>
                <th scope="col" class="text-center">Size</th>
                <th scope="col" class="text-center" width="10%">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach($data['order_detail'] as $item) { ?>
                <tr>
                  <td class="text-center align-middle"><?= $i; ?></td>
                  <td class="text-center"><img src="<?= BASEURL; ?>/img/products/<?= $item['gambar']; ?>" alt="<?= $item['gambar']; ?>" width="80"></td>
                  <td class="text-center align-middle"><?= $item['nama_produk']; ?></td>
                  <td class="text-center align-middle"><?= $item['ukuran']; ?></td>
                  <td class="text-center align-middle"><?= $item['jumlah']; ?></td>
                </tr>
                <?php $i++ ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
