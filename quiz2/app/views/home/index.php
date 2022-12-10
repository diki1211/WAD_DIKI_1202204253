<!-- Awal Jumbotron -->
<section id="jumbotron">
  <div class="container">
    <div class="row min-vh-100 align-content-center align-items-center">
      <div class="col-md-6">
        <h4>Trade-in-offer</h4>
        <h1>Super value deals</h1>
        <h3>On all products</h3>
        <p class="text-light">Save more with coupons & up to 70% off!</p>
        <a href="<?= BASEURL; ?>/product" class="btn btn-outline-dark">Shop Now</a>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Jumbotron -->

<!-- Awal Featuress -->
<section id="features">
  <div class="container my-5">
    <div class="row justify-content-evenly">
      <?php foreach($data['features'] as $feature) { ?>
        <div class="col-md-2 py-4 border text-center shadow-sm mb-xl-0 mb-lg-3 me-lg-2 mb-md-3 me-md-1 me-sm-1 mb-sm-4 mb-4 features-box">
          <img src="<?= BASEURL; ?>/img/features/<?= $feature; ?>.png" alt="" />
          <h6 class="py-1 px-2 rounded-1 mt-3 d-inline-block">Free Shipping</h6>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Akhir Features -->

<!-- Awal Featured Products-->
<section id="featured-products">
  <div class="container my-5">
    <div class="row text-center">
      <div class="col-12">
        <h2>NEW! Products</h2>
        <hr>
        <p>Stay Updated!!!</p>
      </div>
    </div>
    <div class="row">
      <?php foreach($data['featured_products'] as $product) { ?>
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
<!-- Akhir Featured Products-->

<!-- Awal Banner -->
<section id="banner" class="mt-5 d-flex justify-content-center align-items-center text-center">
  <div class="row">
    <div class="col-12">
      <h4>PRODUK LOCAL KULIASTAS INTERNASIONAL</h4>
      <h2>Up to <span class="discount">70% off</span> - All t-Shirts & Accessories</h2>
      <button type="button" class="btn btn-outline-light mt-4">Explore More</button>
    </div>
  </div>
</section>
<!-- Akhir Banner -->

<!-- Awal New Arrivals -->
<section id="new-arrivals">
  <div class="container my-5">
    <div class="row text-center">
      <div class="col-12">
        <h2>New Arrivals</h2>
        <hr>
        <p>PRODUK LOCAL KULIASTAS INTERNASIONAL</p>
      </div>
    </div>
    <div class="row">
      <?php foreach($data['new_arrivals'] as $product) { ?>
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
<!-- Akhir New Arrivals -->

<!-- Awal Banner Group -->
<section id="banner-group">
  <div class="container my-5">
    <div class="row">
      <div class="col-md-6">
        <div class="d-flex p-4 mb-4 flex-column justify-content-center align-items-start box box-1">
          <h4>crazy deals</h4>
          <h2 class="fw-bold">buy 1 get 1 free</h2>
          <span>The best classic dress is on sale at Cepheus</span>
          <button type="button" class="btn btn-outline-light mt-3">Learn More</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex p-4 mb-4 flex-column justify-content-center align-items-start box box-2">
          <h4>spring/summer</h4>
          <h2 class="fw-bold">upcomming season</h2>
          <span>The best classic dress is on sale at Cepheus</span>
          <button type="button" class="btn btn-outline-light mt-3">Learn More</button>
        </div>
      </div>
    </div>
    
    </div>
  </div>
</section>
<!-- Akhir Banner Group -->

<!-- Script -->
<script src="<?= BASEURL; ?>/js/nav_scroll.js"></script>
<script src="<?= BASEURL; ?>/js/get_product_detail.js"></script>