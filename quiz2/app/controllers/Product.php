<?php

session_start();

class Product extends Controller {
  public function index() {
    $data = [
      'title' => 'Shop',
      'products' => $this->model('Product_model')->getAllProduct()
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
      $items = $this->model('Cart_model')->totalItem($data['data_login']['id']);
      $jumlah = 0;
      foreach($items as $item) {
        $jumlah += $item['jumlah'];
      }
      $data['jumlah'] = $jumlah;
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('product/index', $data);
      $this->view('components/cart', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    } else {
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('product/index', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    }
  }

  public function detail($id) {
    $data = [
      'title' => 'Product Detail',
      'detail' => $this->model('Product_model')->getProductById($id)
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
      $items = $this->model('Cart_model')->totalItem($data['data_login']['id']);
      $jumlah = 0;
      foreach($items as $item) {
        $jumlah += $item['jumlah'];
      }
      $data['jumlah'] = $jumlah;
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('product/detail', $data);
      $this->view('components/cart', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    } else {
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('product/detail', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    }
  }
}