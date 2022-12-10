<?php

session_start();

class Home extends Controller {
  public function index() {
    $data = [
      'title' => 'Home',
      'featured_products' => $this->model('Product_model')->getFeaturedProducts(),
      'new_arrivals' => $this->model('Product_model')->getNewArrivals(),
      'features' => ['f1', 'f2', 'f3', 'f4', 'f5', 'f6'],
      
      
    ];
    if (isset($_COOKIE["login"]) && isset($_COOKIE['email'])) {
      if ($_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $_COOKIE['email'];
      }
    } 

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
      $items = $this->model('Cart_model')->totalItem($data['data_login']['id']);
      $jumlah = 0;
      foreach($items as $item) {
        $jumlah += $item['jumlah'];
      }
      $data['jumlah'] = $jumlah;
      if($data['data_login']['is_admin'] == true) {
        header('Location: ' . BASEURL . '/dashboard');
      }
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('home/index', $data);
      $this->view('components/cart', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    } else {
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('home/index', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    }
  }
}