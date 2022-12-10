<?php

session_start();

class Auth extends Controller {

  public function index() {
    $data = [
      'title' => 'Login'
    ];
    $this->view('templates/header', $data);
    $this->view('auth/index');
    $this->view('templates/footer');
  }

  public function register() {
    $data = [
      'title' => 'Register'
    ];
    $this->view('templates/header', $data);
    $this->view('auth/register');
    $this->view('templates/footer');
  }

  public function store() {
    if(!$this->model('User_model')->getUser($_POST['email']) && $_POST['password'] === $_POST['konfirmasi_password']) {
      $this->model('User_model')->store($_POST);
      $_SESSION['alert'] = 'register-success';
      header('Location: ' . BASEURL . '/auth');    
    } else {
      $_SESSION['alert'] = 'register-failed';
      header('Location: ' . BASEURL . '/auth/register');
    }
  }

  public function login() {
    $loginAs = $this->model('User_model')->getUser($_POST['email']);
    if($loginAs['password'] === $_POST['password']) {
      if($loginAs['is_admin'] == true) {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $loginAs['email'];
        header('Location: ' . BASEURL . '/dashboard');
      } else {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $loginAs['email'];
        header('Location: ' . BASEURL . '/home');
      }
    } else {
      $_SESSION['alert'] = 'login-failed';
      header('Location: ' . BASEURL . '/auth');
    }
  }

  public function logout() {
    session_destroy();
    header('Location: '. BASEURL . '/home');
  }
}