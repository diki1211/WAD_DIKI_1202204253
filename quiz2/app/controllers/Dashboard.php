<?php

session_start();

class Dashboard extends Controller {
  public function index() {
    $data = [
      'title' => 'Admin',
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
    }

    $this->view('dashboard/templates/header', $data);
    $this->view('dashboard/index', $data);
    $this->view('dashboard/templates/footer');
  }

  public function show() {
    $data = [
      'title' => 'List Products',
      'products' => $this->model('Product_model')->getAllProduct()
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
    }

    $this->view('dashboard/templates/header', $data);
    $this->view('dashboard/show', $data);
    $this->view('dashboard/templates/footer');
  }

  public function edit($id) {
    $data = [
      'title' => 'Edit',
      'product' => $this->model('Product_model')->getProductById($id)
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
    }

    $this->view('dashboard/templates/header', $data);
    $this->view('dashboard/edit', $data);
    $this->view('dashboard/templates/footer');
  }

  public function delete($id) {
    if($this->model('Product_model')->deleteProduct($id)) {
      $_SESSION['alert'] = 'delete-success';
      header('Location: ' . BASEURL . '/dashboard/show');
    } else {
      $_SESSION['alert'] = 'delete-failed';
      header('Location: ' . BASEURL . '/dashboard/show');
    }
  }

  public function update() {
    $item = $this->model('Product_model')->getProductById($_POST['id']);
    if($_FILES['gambar']['error'] === 4) {
      $gambar = $item['gambar'];
    } else {
      $gambar = $_FILES['gambar']['name'];
    }
    $this->model('Product_model')->updateProduct($_POST, $gambar);
    $_SESSION['alert'] = 'update-success';
    header('Location: ' . BASEURL . '/dashboard/show');
  }

  public function create() {
    $data = [
      'title' => 'Add Product'
    ];

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
    } 

    $this->view('dashboard/templates/header', $data);
    $this->view('dashboard/create', $data);
    $this->view('dashboard/templates/footer');
  }

  public function store() {
    $gambar = $_FILES['gambar']['name'];
    
    $this->model('Product_model')->storeProduct($_POST, $gambar);
    move_uploaded_file(BASEURL . '/public/img/', $gambar);
    $_SESSION['alert'] = 'add-success';
    header('Location: ' . BASEURL . '/dashboard/show');
  }
  public function orders() {
    $data = [
      'title' => 'Order',
      'orders' => $this->model('Transaction_model')->getAllInvoice()
    ];

    $this->view('dashboard/templates/header', $data);
    $this->view('dashboard/orders', $data);
    $this->view('dashboard/templates/footer');
  }

  public function detail() {
    $data = [
      'title' => 'Order',
      'order_detail' => $this->model('Transaction_model')->getInvoice($_POST['invoice_no'])
    ];

    $this->view('dashboard/templates/header', $data);
    $this->view('dashboard/detail', $data);
    $this->view('dashboard/templates/footer');
  }

  public function update_status() {
    $this->model('Transaction_model')->update($_POST);
    header('Location: ' . BASEURL . '/dashboard/orders');
  }
}