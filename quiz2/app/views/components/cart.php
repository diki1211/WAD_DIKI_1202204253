<div class="cart bg-light rounded-circle d-flex justify-content-center align-items-center border">
  <?php if($data['jumlah'] !== 0 ){ ?>
    <span class="position-absolute top-0 translate-middle badge rounded-5 bg-danger notif"><?= $data['jumlah']; ?></span>
    <i class="bi bi-bag"></i>
  <?php } else { ?>
    <span class="position-absolute top-0 translate-middle badge rounded-5 bg-danger notif"></span>
    <i class="bi bi-bag"></i>
  <?php } ?>
</div>

<script src="<?= BASEURL; ?>/js/get_cart.js"></script>