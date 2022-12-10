<?php

session_start();

class About extends Controller {
  public function index() {
    $data = [
      'title' => 'About',
      'features' => ['f1', 'f2', 'f3', 'f4', 'f5', 'f6'],
      'vendor' => ['vendor5.png', 'vendor6.png','vendor7.jpeg','vendor8.png']
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
      $this->view('about/index', $data);
      $this->view('components/cart', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    } else {
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('about/index', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    }
  }
}