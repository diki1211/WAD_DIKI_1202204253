<!-- Awal Page Header -->
<section id="page-header" class="d-flex flex-column text-center justify-content-center about-header ">
  <h2 class="fw-bold text-dark">TENTANG KAMI</h2>
  <p>Lorem ipsum dolor sit amet, consectetur</p>
</section>
<!-- Akhir Page Header -->

<!-- Awal About -->
<section id="about">
  <div class="container my-5">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-5 me-0 me-md-3 mb-4 mb-md-0">
        <iframe
          width="100%"
          height="300"
          src="https://www.youtube.com/embed/51URDI_AYB4"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="col-md-6">
        <h2>Cepheus</h2>
        <p>
        As the Online Fashion Center in Indonesia, we create endless style possibilities by expanding our product range,
        from international products to coveted local products. We make you the center. With Cepheus, You Own Now.</p>
      </div>
    </div>
  </div>
</section>
<!-- Akhir About -->


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
  <h1 class="text-center">vendors</h1>
  <div class="container my-5">
    <div class="row justify-content-evenly">
      <?php foreach($data['vendor'] as $feature) { ?>
        <div class="col-md-2 py-4 border text-center shadow-sm mb-xl-0 mb-lg-3 me-lg-2 mb-md-3 me-md-1 me-sm-1 mb-sm-4 mb-4 features-box">
          <img style="width:150px; height: 150px;" src="<?= BASEURL; ?>/img/vendors/<?= $feature; ?>" alt="" />
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Akhir Features -->