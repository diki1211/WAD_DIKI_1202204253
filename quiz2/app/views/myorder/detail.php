<div class="container" style="margin-top: 130px">
  <div class="row">
    <h5 class="my-4">Invoice No. <?= $data['order_detail'][0]['invoice_no']; ?></h5 class="my-4">
    <div class="table-responsive col-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-center" width="5%">No</th>
            <th scope="col" class="text-center">Image</th>
            <th scope="col" class="text-center">Product</th>
            <th scope="col" class="text-center">Size</th>
            <th scope="col" class="text-center" width="10%">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach($data['order_detail'] as $item) { ?>
            <tr>
              <td class="text-center align-middle"><?= $i; ?></td>
              <td class="text-center"><img src="<?= BASEURL; ?>/img/products/<?= $item['gambar']; ?>" alt="<?= $item['gambar']; ?>" width="80"></td>
              <td class="text-center align-middle"><?= $item['nama_produk']; ?></td>
              <td class="text-center align-middle"><?= $item['ukuran']; ?></td>
              <td class="text-center align-middle"><?= $item['jumlah']; ?></td>
            </tr>
            <?php $i++ ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>