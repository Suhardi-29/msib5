<?php
require_once  'Bentuk2D.php';
class Segitiga extends Bentuk2D {
  public $alas;
  public $tinggi;
  public $sisi1;
  public $sisi2;

  public function __construct($alas, $tinggi, $sisi1, $sisi2) {
      $this->alas = $alas;
      $this->tinggi = $tinggi;
      $this->sisi1 = $sisi1;
      $this->sisi2 = $sisi2;
  }

  public function nama_bidang() {
      return 'Segitiga';
  }

  public function Luas_bidang() {
      $luas = 0.5 * $this->alas * $this->tinggi;
      return $luas;
  }

  public function Keliling_bidang() {
      $keliling = $this->alas + $this->sisi1 + $this->sisi2;
      return $keliling;
  }
}


?>