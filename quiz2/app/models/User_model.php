<?php 

class User_model {
  private $table = 'users';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function store($data) {
      $query = "INSERT INTO $this->table 
                  VALUES 
                ('', :nama, :email, :password, :no_hp, '')";
      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('password', $data['password']);
      $this->db->bind('no_hp', $data['no_hp']);
      $this->db->execute();

      return $this->db->rowCount();
  }

  public function getUser($data) {
    $this->db->query("SELECT * FROM $this->table WHERE email = :email");
    $this->db->bind('email', $data);
    return $this->db->single();
  }
}