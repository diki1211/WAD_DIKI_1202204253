<header class="navbar sticky-top flex-md-nowrap p-0 shadow-sm bg-light">
  <a class="navbar-brand bg-light col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="<?= BASEURL; ?>/img/logo.png" alt="Logo VStore" width="50" /></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?= BASEURL; ?>/auth/logout"">Logout</a>
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
            <a class="nav-link active" href="<?= BASEURL; ?>/dashboard/show"><i class="bi bi-inboxes me-2"></i>Products</a>
          </li>
        </ul>      
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Edit Product</h2>    
        <a href="<?= BASEURL; ?>/dashboard/show" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-left"></i> Back</a>
      </div>
      <div class="row">
        <div class="col-md-4 d-flex flex-column align-items-md-end align-items-center mt-2 mt-md-4 mb-4 order-md-last">
          <img src="<?= BASEURL; ?>/img/products/<?= $data['product']['gambar']; ?>" class="img-thumbnail rounded-4 img-preview" alt="..." width="90%"/>
        </div>
        <div class="col-md-8">
          <form action="<?= BASEURL; ?>/dashboard/update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['product']['id']; ?>">
            <div class="mb-3">
              <label for="nama" class="form-label text-muted">Nama</label>
              <input type="text" name="nama" class="form-control text-muted" id="nama" value="<?= $data["product"]['nama']; ?>">
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label text-muted">Kategori</label>
              <input type="text" name="kategori" class="form-control text-muted" id="kategori" value="<?= $data["product"]['kategori']; ?>">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label text-muted">Harga</label>
              <input type="text" name="harga" class="form-control text-muted" id="harga" value="<?= $data['product']["harga"]; ?>">
            </div>
            <div class="mb-3">
              <label for="label" class="form-label text-muted">Label</label>
              <select class="form-select text-muted" id="label" name="label">
                <option value="Featured Product" <?= $data['product']['label'] === 'Featured Product' ? 'selected' : '' ?>>Featured Product</option>
                <option value="New Arrival" <?= $data['product']['label'] === 'Featured Product' ? 'selected' : '' ?>>New Arrival</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label text-muted">Gambar</label>
              <input class="form-control text-muted" type="file" id="gambar" name="gambar" accept="image/*" onchange="previewImage()">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label text-muted">Deskripsi</label>
              <textarea name="deskripsi" class="form-control text-muted" id="deskripsi" rows="4"><?= $data['product']["deskripsi"]; ?></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success mb-5" name="simpan">Simpan</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>

<script>
  function previewImage() {
    const image = document.getElementById('gambar');
    const imgPreview = document.querySelector('.img-preview');
    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent) {
      // imgPreview.setAttribute('src', oFREvent.target.result);
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>