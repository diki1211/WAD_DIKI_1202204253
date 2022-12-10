<?php 

class Product_model {
  private $table = 'products';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllProduct() {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  public function getFeaturedProducts() {
    $this->db->query("SELECT * FROM $this->table WHERE label = 'Featured Product'");
    return $this->db->resultSet();
  }

  public function getNewArrivals() {
    $this->db->query("SELECT * FROM $this->table WHERE label = 'New Arrival'");
    return $this->db->resultSet();
  }

  public function getProductById($id) {
    $this->db->query("SELECT * FROM $this->table WHERE id = :id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function deleteProduct($id) {
    $this->db->query("DELETE FROM $this->table WHERE id = :id");
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateProduct($data, $gambar) {
    $query = "UPDATE $this->table SET nama = :nama, kategori = :kategori, deskripsi = :deskripsi, harga = :harga, label = :label, gambar = :gambar WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('label', $data['label']);
    $this->db->bind('gambar', $gambar);
    $this->db->bind('id', $data['id']);
    $this->db->execute();
  }

  public function storeProduct($data, $gambar) {
    $query = "INSERT INTO $this->table 
                VALUES 
              ('', :nama, :kategori, :harga, :deskripsi, :label, :gambar)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('label', $data['label']);
    $this->db->bind('gambar', $gambar);
    $this->db->execute();
}
}