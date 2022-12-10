<nav class="navbar navbar-expand-lg fixed-top bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="<?= BASEURL; ?>/img/logo.png" alt="Logo VStore" width="50" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(isset($_SESSION['login'])) { ?>
      <span class="text-muted ms-2">Welcome <?= $data['data_login']['nama'] ?></span>
    <?php } ?>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link mx-2 <?= $data['title'] === 'Home' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/">Home</a>
        <a class="nav-link mx-2 <?= $data['title'] === 'Shop' || $data['title'] === 'Product Detail' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/product">Shop</a>
        <a class="nav-link mx-2 <?= $data['title'] === 'Contact' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/contact">Contact</a>
        <a class="nav-link mx-2 <?= $data['title'] === 'About' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/about">About</a>
        <?php if(isset($_SESSION['login'])) { ?>
          <a class="btn btn-outline-danger mx-2 m-auto" href="<?= BASEURL; ?>/auth/logout" role="button">Logout</a>
        <?php } else { ?>
          <a class="btn btn-outline-dark mx-2 m-auto" href="<?= BASEURL; ?>/auth" role="button">Login</a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>