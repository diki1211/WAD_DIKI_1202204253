<section id="product-detail">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-5 col-12 me-4">
        <img src="<?= BASEURL; ?>/img/products/<?= $data['detail']['gambar']; ?>" alt="<?= $data['detail']['nama']; ?>" width="100%" class="img-thumbnail rounded-4" />
      </div>
      <div class="col-lg-6 col-12">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mt-4 mt-md-0">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/" class="text-decoration-none link">Home</a></li>
            <li class="breadcrumb-item active"><?= $data['detail']['kategori']; ?></li>
          </ol>
        </nav>
        <h4 class="mb-4 mt-lg-0 mt-4 "><?= $data['detail']['nama']; ?></h4>
        <h2 class="mb-2"><?= rupiah($data['detail']['harga']); ?></h2>
        <form action="<?= BASEURL; ?>/cart/add" method="post">
          <input type="hidden" name="id_product" value="<?= $data['detail']['id']; ?>">
          <input type="hidden" name="id_user" value="<?= $data['data_login']['id']; ?>">
          <div class="my-3 d-flex">
            <select class="form-select me-3" name="ukuran" style="width: 100px">
              <option selected>S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
            </select>
            <input class="me-2 form-control me-3" type="number" value="1" min="1" max="99" name="jumlah" style="width: 70px" />
            <button class="btn btn-outline-success add"><i class="bi bi-bag-plus"></i></button>
          </div>
        </form>
        <h4 class="mb-3">Product Detail</h4>
        <p class="text-muted detail-text">
          <?= $data['detail']['deskripsi']; ?>
        </p>
        <div class="row mt-4 align-items-center">
          <h5 class="mb-3">Ratings & Reviews</h5>
          <div class="col-md-2 text-center">
            <h5>4,8</h5>
            <span>from 5</span>
          </div>
          <div class="col-md-10" style="font-size: 11px;">
            <div class="row">
              <div class="col-md-2 text-end" style="margin-right: -10px">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-md-10">
                <div class="progress" style="height: 7px; margin-top: 5px">
                  <div class="progress-bar bg-warning" role="progressbar" aria-label="Bintang 5" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-md-2 text-end" style="margin-right: -10px">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-md-10">
                <div class="progress" style="height: 7px; margin-top: 5px">
                  <div class="progress-bar bg-warning" role="progressbar" aria-label="Bintang 4" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-md-2 text-end" style="margin-right: -10px">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-md-10">
                <div class="progress" style="height: 7px; margin-top: 5px">
                  <div class="progress-bar bg-warning" role="progressbar" aria-label="Bintang 3" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-md-2 text-end" style="margin-right: -10px">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-md-10">
                <div class="progress" style="height: 7px; margin-top: 5px">
                  <div class="progress-bar bg-warning" role="progressbar" aria-label="Bintang 2" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-md-2 text-end" style="margin-right: -10px">
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-md-10">
                <div class="progress" style="height: 7px; margin-top: 5px">
                  <div class="progress-bar bg-warning" role="progressbar" aria-label="Bintang 1" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>