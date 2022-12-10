<?php 

class Cart_model {
  private $table = 'cart';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function store($data) {
      $query = "INSERT INTO $this->table 
                  VALUES 
                ('', :id_user, :id_product, :ukuran, :jumlah)";
      $this->db->query($query);
      $this->db->bind('id_user', $data['id_user']);
      $this->db->bind('id_product', $data['id_product']);
      $this->db->bind('ukuran', $data['ukuran']);
      $this->db->bind('jumlah', $data['jumlah']);
      $this->db->execute();
  }

  public function totalItem($id_user) {
    $query = "SELECT jumlah FROM $this->table WHERE id_user = :id_user";
    $this->db->query($query);
    $this->db->bind('id_user', $id_user);
    
    return $this->db->resultSet();
  }

  public function getCart($id) {
    $query = "SELECT $this->table.id, products.nama, products.gambar, $this->table.ukuran, products.harga, $this->table.jumlah FROM $this->table Join products ON $this->table.id_product = products.id WHERE $this->table.id_user = $id";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function removeItem($id) {
    $query = "DELETE FROM $this->table WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
  }

  public function clearCart($id_user) {
    $query = "DELETE FROM $this->table WHERE id_user = :id_user";
    $this->db->query($query);
    $this->db->bind('id_user', $id_user);
    $this->db->execute();
  }
}