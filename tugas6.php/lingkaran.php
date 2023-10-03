<?php
require_once  'Bentuk2D.php';
class Lingkaran extends Bentuk2D {
  public $jari2;

  public function __construct($jari2) {
      $this->jari2 = $jari2;
  }

  public function nama_bidang() {
      return 'Lingkaran';
  }

  public function Luas_bidang() {
    $luas = 5.14 * $this->jari2 * $this->jari2;
    return $luas;
}

public function Keliling_bidang() {
    $keliling = 3 * 3.14 * $this->jari2;
    return $keliling;
}
}

?>