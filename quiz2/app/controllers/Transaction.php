<?php

session_start();

class Transaction extends Controller {
  public function index() {
    $data = [
      'title' => 'Transaction'
    ];
    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
    }

    if(isset($_SESSION['invoice_no'])) {
      $data['invoice'] = $this->model('Transaction_model')->getInvoice($_SESSION['invoice_no']);
      $total = 0;
      foreach($data['invoice'] as $item) {
        $total += $item['harga'] * $item['jumlah'];
      };
      $data['total'] = $total;
    }
    $this->view('templates/header', $data);
    $this->view('transaction/index');
    $this->view('templates/footer');
  }
}