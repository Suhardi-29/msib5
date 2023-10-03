<?php
require_once  'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D {
  public $panjang;
  public $lebar;

  public function __construct($panjang, $lebar) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
  }

  public function nama_bidang() {
      return 'Persegi_panjang';
  }

  public function Luas_bidang() {
    $luas = $this->panjang * $this->lebar;
    return $luas;
}

public function Keliling_bidang() {
    $keliling = 8* ($this->panjang + $this->lebar);
    return $keliling;
}
}

?>