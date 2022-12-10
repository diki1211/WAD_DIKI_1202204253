<?php 
  if(isset($_POST['dismiss-alert'])) {
    session_destroy();
    echo "<meta http-equiv='refresh' content='0' />";
  }
?>
<div class="container-fluid  ">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Orders</h2>
      </div>
        <div class="table-responsive col-12 border">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center">Invoice</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($data['orders'])) { ?>
                <tr>
                  <td class="text-center align-middle"><?= $data['orders'][0]['invoice_no']; ?></td>
                  <td class="text-center align-middle"><?= $data['orders'][0]['nama']; ?></td>
                  <td class="text-center align-middle">
                    <form action="<?= BASEURL; ?>/dashboard/detail" method="post">
                      <input type="hidden" name="invoice_no" value="<?= $data['orders'][0]['invoice_no']; ?>">
                      <button type="submit" class="badge text-bg-dark">View Detail</button>
                    </form>
                  </td>
                </tr>
                <?php for($i = 1; $i < count($data['orders']); $i++) { ?>
                  <?php if($data['orders'][$i]['invoice_no'] === $data['orders'][$i - 1]['invoice_no']) { ?>
                    <?php continue; ?>
                  <?php } ?>
                  <tr>
                    <td class="text-center align-middle"><?= $data['orders'][$i]['invoice_no']; ?></td>
                    <td class="text-center align-middle"><?= $data['orders'][$i]['nama']; ?></td>
                    <td class="text-center align-middle">
                      <form  action="<?= BASEURL; ?>/dashboard/detail" method="post">
                        <input type="hidden" name="invoice_no" value="<?= $data['orders'][0]['invoice_no']; ?>">
                        <button type="submit" class="badge text-bg-dark">View Detail</button>
                      </form>
                    </td>
                  
                    <td class="text-center align-middle">
                      <form action="<?= BASEURL; ?>/dashboard/update_status" method="post">
                        <input type="hidden" name="invoice_no" value="<?= $data['orders'][$i]['invoice_no']; ?>">
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
