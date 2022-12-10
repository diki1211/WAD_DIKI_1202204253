<?php 
  if(isset($_POST['dismiss-alert'])) {
    session_destroy();
    echo "<meta http-equiv='refresh' content='0' />";
  }
?>

<div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-md-5 min-vh-100 left-side"></div>
    <div class="col-md-7 align-items-center">
      <div class="form-login-register m-auto">
        <h2 class="fw-bold mb-4">Login</h2>
        <?php if(isset($_SESSION['alert']) && $_SESSION['alert'] === 'register-success') { ?>
          <div class='alert alert-success alert-dismissible' role='alert'>
            <span>Register berhasil, silahkan login!</span>
            <form action="" method="post">
              <button type='submit' class='btn-close' name="dismiss-alert"></button>
            </form>
          </div>
        <?php } elseif(isset($_SESSION['alert']) && $_SESSION['alert'] === 'login-failed') { ?>
          <div class='alert alert-danger alert-dismissible' role='alert'>
            <span>Login gagal!</span>
            <form action="" method="post">
              <button type='submit' class='btn-close' name="dismiss-alert"></button>
            </form>
          </div>
        <?php } ?>
        <form action="<?= BASEURL; ?>/auth/login" method="post">
          <div class="mb-3 position-relative">
            <label for="email" class="form-label text-muted">Email</label>
            <input type="email" class="form-control text-muted" id="email" name="email" value="<?= isset($_COOKIE["email"]) ? $_COOKIE["email"] : ""; ?>" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-muted">Password</label>
            <input type="password" class="form-control text-muted" id="password" name="password" value="<?= isset($_COOKIE["password"]) ? $_COOKIE["password"] : ""; ?>">
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="remember" name="remember">
            <label class="form-check-label text-muted" for="remember">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-dark px-4" name="login">Login</button>
        </form>
        <p class="mt-3 text-muted">Anda belum punya akun? <a href="<?= BASEURL; ?>/auth/register" class="link">Daftar</a></p>
      </div>
    </div>
  </div>
</div>