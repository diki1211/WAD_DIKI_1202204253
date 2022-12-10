<!-- Awal Page Header -->
<section id="page-header" class="d-flex flex-column text-center justify-content-center about-header">
  <h2 class="fw-bold">#cart</h2>
  <p>Add your coupon code & SAVE up to 70%!</p>
</section>
<!-- Akhir Page Header -->

<!-- Awal Cart -->
<section id="cart">
  <div class="container my-5">
    <table>
      <thead>
        <tr class="fw-bold">
          <td>Remove</td>
          <td>Image</td>
          <td>Product</td>
          <td>Size</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Subtotal</td>
        </tr>
      </thead>
      <tbody class="list-item">
        <?php if(!empty($data['cart'])) { ?>
          <?php foreach($data['cart'] as $item) { ?>
            <tr>
              <td>
                <form action="<?= BASEURL; ?>/cart/remove" method="post">
                  <input type="hidden" name="id" value="<?= $item['id']; ?>">
                  <button type="submit" class="border-0 bg-transparent rounded-circle remove"><i class="bi bi-x-circle"></i></button>
                </form>
              </td>
              <td><img src="<?= BASEURL; ?>/img/products/<?= $item['gambar']; ?>" alt="<?= $item['gambar']; ?>"></td>
              <td><?= $item['nama']; ?></td>
              <td><?= $item['ukuran']; ?></td>
              <td><?= rupiah($item['harga']); ?></td>
              <td><?= $item['jumlah']; ?></td>
              <td><?= rupiah($item['harga'] * $item['jumlah']); ?></td>
            </tr>
          <?php } ?>
        <?php } else { ?>
          <tr>
            <td colspan="7" class="text-muted">No Product</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
<!-- Akhir Cart -->

<!-- Awal Cart Total -->
<section id="cart-total">
  <div class="container my-5">
    <div class="row">
      <div class="col-md-6 mb-md-0 mb-5">
        <h4 class="mb-3">Apply Coupon</h4>
        <div class="d-flex align-items-start">
          <input type="text" name="coupon" class="form-control rounded-2 w-50 me-2" id="coupon" placeholder="Enter Your Coupon" />
          <button class="btn btn-outline-success">Apply</button>
        </div>
      </div>
      <?php if(!empty($data['cart'])) { ?>
        <div class="col-md-6 border p-4 rounded-2 cart-totals">
          <h4 class="mb-3">Cart Totals</h4>
          <table class="mb-4">
            <tr>
              <td>Cart Subtotal</td>
              <td><?= rupiah($data['subtotal']); ?></td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td>Free</td>
            </tr>
            <tr>
              <td><strong>Total</strong></td>
              <td><strong><?= rupiah($data['subtotal']); ?></strong></td>
            </tr>
          </table>
          <button class="btn btn-outline-success checkout" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Proceed to checkout</button>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Akhir Cart Total -->

<!-- Awal Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center pt-5"><p>Are you sure?</p></div>
      <div class="footer d-flex justify-content-end">
        <button type="button" class="btn btn-outline-danger my-2 me-2" data-bs-dismiss="modal">No <i class="bi bi-x-lg ms-2"></i></button>
        <form action="<?= BASEURL; ?>/cart/checkout" method="post">
          <input type="hidden" name="id_user" value="<?= $data['data_login']['id']; ?>">
          <button type="submit" class="btn btn-outline-success my-2 me-2">Yes <i class="bi bi-check-lg ms-2"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal -->