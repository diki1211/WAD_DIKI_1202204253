<?php

define("BASEURL", 'http://localhost:8080/praktikum/quiz2/public');
define("DB_HOST", "localhost:3308");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "quiz");

function rupiah($angka) {
  $harga = 'Rp' . number_format($angka, 0, ',', '.');
  return $harga;
}