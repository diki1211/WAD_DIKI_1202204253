<?php

session_start();

class MyOrder extends Controller {
  public function index() {
    $data = [
      'title' => 'My Order',
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
      $data['myorder'] = $this->model('Transaction_model')->getInvoiceById($data['data_login']['id']);
    }

    $items = $this->model('Cart_model')->totalItem($data['data_login']['id']);
    $jumlah = 0;
    foreach($items as $item) {
      $jumlah += $item['jumlah'];
    }
    $data['jumlah'] = $jumlah;

    $this->view('templates/header', $data);
    $this->view('components/navbar', $data);
    $this->view('myorder/index', $data);
    $this->view('components/cart', $data);
    $this->view('components/footer');
    $this->view('templates/footer');
  }

  public function update_status() {
    $this->model('Transaction_model')->update($_POST);
    header('Location: ' . BASEURL . '/myorder');
  }

  public function detail() {
    $data = [
      'title' => 'Order Detail',
      'order_detail' => $this->model('Transaction_model')->getInvoice($_POST['invoice_no'])
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
    }

    $items = $this->model('Cart_model')->totalItem($data['data_login']['id']);
    $jumlah = 0;
    foreach($items as $item) {
      $jumlah += $item['jumlah'];
    }
    $data['jumlah'] = $jumlah;

    $this->view('templates/header', $data);
    $this->view('components/navbar', $data);
    $this->view('myorder/detail', $data);
    $this->view('components/cart', $data);
    $this->view('components/footer');
    $this->view('templates/footer');
  }
}