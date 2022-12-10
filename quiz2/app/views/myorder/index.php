<div class="container" style="margin-top: 130px">
  <div class="table-responsive col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="text-center" width="13%">Order Date</th>
          <th scope="col" class="text-center">Invoice</th>
          <th scope="col" class="text-center">Name</th>
          <th scope="col" class="text-center">Shipping Address</th>
          <th scope="col" class="text-center">Detail</th>
          <th scope="col" class="text-center">Status</th>
          <th scope="col" class="text-center">Update Status</th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($data['myorder'])) { ?>
          <tr>
            <td class="text-center align-middle"><?=  date_format(date_create($data['myorder'][0]['tanggal_beli']), "j F Y"); ?></td>
            <td class="text-center align-middle"><?= $data['myorder'][0]['invoice_no']; ?></td>
            <td class="text-center align-middle"><?= $data['myorder'][0]['nama']; ?></td>
            <td class="text-center align-middle"><?= $data['myorder'][0]['alamat_pengiriman']; ?></td>
            <td class="text-center align-middle">
              <form action="<?= BASEURL; ?>/myorder/detail" method="post">
                <input type="hidden" name="invoice_no" value="<?= $data['myorder'][0]['invoice_no']; ?>">
                <button type="submit" class="badge text-bg-dark">View Detail</button>
              </form>
            </td>
            <td class="text-center align-middle"><?= $data['myorder'][0]['status_pengiriman']; ?></td>
            <td class="text-center align-middle">
              <form action="<?= BASEURL; ?>/myorder/update_status" method="post">
                <input type="hidden" name="invoice_no" value="<?= $data['myorder'][0]['invoice_no']; ?>">
                <input type="hidden" name="status_pengiriman" value="Received">
                <button type="submit" class="badge text-bg-dark" <?= $data['myorder'][0]['status_pengiriman'] === 'Packing' || $data['myorder'][0]['status_pengiriman'] === 'Received' ? 'disabled' : '' ?>>Receive</button>
              </form>
            </td>
          </tr>
          <?php for($i = 1; $i < count($data['myorder']); $i++) { ?>
            <?php if($data['myorder'][$i]['invoice_no'] === $data['myorder'][$i - 1]['invoice_no']) { ?>
              <?php continue; ?>
            <?php } ?>
            <tr>
              <td class="text-center align-middle"><?=  date_format(date_create($data['myorder'][$i]['tanggal_beli']), "j F Y"); ?></td>
              <td class="text-center align-middle"><?= $data['myorder'][$i]['invoice_no']; ?></td>
              <td class="text-center align-middle"><?= $data['myorder'][$i]['nama']; ?></td>
              <td class="text-center align-middle"><?= $data['myorder'][$i]['alamat_pengiriman']; ?></td>
              <td class="text-center align-middle">
                <form  action="<?= BASEURL; ?>/myorder/detail" method="post">
                  <input type="hidden" name="invoice_no" value="<?= $data['myorder'][0]['invoice_no']; ?>">
                  <button type="submit" class="badge text-bg-dark">View Detail</button>
                </form>
              </td>
              <td class="text-center align-middle"><?= $data['myorder'][$i]['status_pengiriman']; ?></td>
              <td class="text-center align-middle">
                <form action="<?= BASEURL; ?>/myorder/update_status" method="post">
                  <input type="hidden" name="invoice_no" value="<?= $data['myorder'][$i]['invoice_no']; ?>">
                  <input type="hidden" name="status_pengiriman" value="Received">
                  <button type="submit" class="badge text-bg-dark" <?= $data['myorder'][$i]['status_pengiriman'] === 'Packing' || $data['myorder'][$i]['status_pengiriman'] === 'Received' ? 'disabled' : '' ?>>Receive</button>
                </form>
              </td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>