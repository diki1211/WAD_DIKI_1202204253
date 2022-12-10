<?php

session_start();

class Cart extends Controller {
  public function index() {
    $data = [
      'title' => 'Cart'
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
      $data['cart'] = $this->model('Cart_model')->getCart($data['data_login']['id']);
    }

    $subtotal = 0;
    foreach($data['cart'] as $item) {
      $subtotal += $item['harga'] * $item['jumlah'];
    };
    $data['subtotal'] = $subtotal;

    $this->view('templates/header', $data);
    $this->view('components/navbar', $data);
    $this->view('cart/index', $data);
    $this->view('components/footer');
    $this->view('templates/footer');
  }
  
  public function add() {
    $this->model('Cart_model')->store($_POST);
    header('Location: ' . BASEURL . '/cart');
  }

  public function remove() {
    $this->model('Cart_model')->removeItem($_POST['id']);
    header('Location: ' . BASEURL . '/cart');
  }

  public function checkout() {
    $invoice_no = rand();
    $data = $this->model('Cart_model')->getCart($_POST['id_user']);
    foreach($data as $item) {
      $transaction = [
        'invoice_no' => $invoice_no,
        'id_user' => $_POST['id_user'],
        'nama_produk' => $item['nama'],
        'gambar' => $item['gambar'],
        'ukuran' => $item['ukuran'],
        'harga' => $item['harga'],
        'jumlah' => $item['jumlah']
      ];
      $this->model('Transaction_model')->store($transaction);
    }
    $this->model('Cart_model')->clearCart($_POST['id_user']);
  }
}