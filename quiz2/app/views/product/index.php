<!-- Awal Page Header -->
<section id="page-header" class="d-flex flex-column text-center justify-content-center shop-header">
  <h2 class="fw-bold">#PRODUK LOCAL KULIASTAS INTERNASIONAL</h2>
  <p>See more with coupons & up to 70% off!</p>
</section>
<!-- Akhir Page Header -->

<!-- Awal Products-->
<section id="products">
  <div class="container my-5">
    <div class="row text-center">
      <div class="col-12">
        <h2>NEW!!! Products</h2>
        <hr>
        <p>Summer Collection New Modern Design</p>
      </div>
    </div>
    <div class="row">
      <?php foreach($data['products'] as $product) { ?>
        <div class="col-lg-3 col-md-4 col-12">
          <div class="card my-4" data-id="<?= $product['id']; ?>">
            <img src="<?= BASEURL; ?>/img/products/<?= $product['gambar']; ?>" class="card-img-top p-2 rounded-4" alt="..." />
            <div class="card-body">
              <span class="type"><?= $product['kategori']; ?></span>
              <h5 class="card-title"><?= $product['nama']; ?></h5>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <h4 class="pt-2 fw-bold"><?= rupiah($product['harga']); ?></h4>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Akhir Products-->

<!-- Script -->
<script src="<?= BASEURL; ?>/js/get_product_detail.js"></script>
<script src="<?= BASEURL; ?>/js/get_product_detail.js"></script>