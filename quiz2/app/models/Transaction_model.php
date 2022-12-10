<?php 

class Transaction_model {
  private $table = 'transaction';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function store($data) {
    $query = "INSERT INTO $this->table 
                VALUES 
              ('', :invoice_no, :id_user, :nama_produk, :gambar, :ukuran, :harga, :jumlah)";
    $this->db->query($query);
    $this->db->bind('invoice_no', $data['invoice_no']);
    $this->db->bind('id_user', $data['id_user']);
    $this->db->bind('nama_produk', $data['nama_produk']);
    $this->db->bind('gambar', $data['gambar']);
    $this->db->bind('ukuran', $data['ukuran']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('jumlah', $data['jumlah']);
    $this->db->execute();
  }
  public function getInvoice($invoice_no) {
    $query = "SELECT $this->table.invoice_no, users.nama, $this->table.nama_produk, $this->table.harga, $this->table.jumlah,  $this->table.gambar, $this->table.ukuran FROM $this->table JOIN users ON $this->table.id_user = users.id WHERE invoice_no = :invoice_no";
    $this->db->query($query);
    $this->db->bind('invoice_no', $invoice_no);
    return $this->db->resultSet();
  }

  public function getAllInvoice() {
    $query = "SELECT $this->table.invoice_no, $this->table.nama_produk, $this->table.gambar, $this->table.ukuran, $this->table.harga, $this->table.jumlah,  users.nama FROM $this->table JOIN users ON $this->table.id_user = users.id ORDER BY $this->table.id DESC";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getInvoiceById($id_user) {
    $query = "SELECT $this->table.invoice_no, users.nama, $this->table.nama_produk, $this->table.harga, $this->table.jumlah,  $this->table.gambar, $this->table.ukuran,  FROM $this->table JOIN users ON $this->table.id_user = users.id WHERE id_user = :id_user ORDER BY $this->table.id DESC";
    $this->db->query($query);
    $this->db->bind('id_user', $id_user);
    return $this->db->resultSet();
  }
}