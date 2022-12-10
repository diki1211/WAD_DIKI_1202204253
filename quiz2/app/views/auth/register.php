<?php 
  if(isset($_POST['dismiss-alert'])) {
    session_destroy();
    echo "<meta http-equiv='refresh' content='0' />";
  }
?>

<div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-md-5 min-vh-100 left-side"></div>
    <div class="col-md-7">
      <div class="form-login-register m-auto">
        <h2 class="fw-bold mb-4">Register</h2>
        <?php if(isset($_SESSION['alert']) && $_SESSION['alert'] === 'register-failed') { ?>
          <div class='alert alert-danger alert-dismissible' role='alert'>
            <span>Register gagal!</span>
            <form action="" method="post">
              <button type='submit' class='btn-close' name="dismiss-alert"></button>
            </form>
          </div>
        <?php } ?>
        <form action='<?= BASEURL; ?>/auth/store' method="post">
          <div class="mb-3">
            <label for="email" class="form-label text-muted required">Email</label>
            <input type="email" class="form-control text-muted" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label text-muted required">Nama</label>
            <input type="text" class="form-control text-muted" id="name" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="no_hp" class="form-label text-muted required">Nomor Handphone</label>
            <input type="tel" class="form-control text-muted" id="no_hp" name="no_hp" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-muted required">Kata Sandi</label>
            <input type="password" class="form-control text-muted" id="password" name="password" required> 
          </div>
          <div class="mb-4">
            <label for="konfirmasi_password" class="form-label text-muted required">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control text-muted" id="konfirmasi_password" name="konfirmasi_password" required>
          </div>
          <button type="submit" class="btn btn-dark px-4" name="register">Daftar</button>
        </form>
        <p class="mt-3 text-muted">Anda sudah punya akun? <a href="<?= BASEURL; ?>/auth" class="link">Login</a></p>
      </div>
    </div>
  </div>
</div>