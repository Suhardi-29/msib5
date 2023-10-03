<?php
require_once('Lingkaran.php');
require_once('Persegi_panjang.php');
require_once('Segitiga.php');

// Membuat objek-objek bentuk 2D
$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(4, 10);
$segitiga = new Segitiga(5, 8, 3,3);

$ar_judul = ['No', 'Nama Bidang','Keterangan','Luas Bidang','keliling'];
$bentuk = [$lingkaran, $persegiPanjang, $segitiga];
$ar_keterangan = [];
foreach ($bentuk as $b) {
    $ar_keterangan[] = $b;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang 2D</title>
</head>
<body style="text-align: center; display: inline; justify-content: center; align-items: center; ">
    <h1>Data Bidang 2D</h1>
    <table border="1" style="padding: 70px;  width: 100%; ">
        <thead>
            <tr>
            <?php 
                foreach($ar_judul as $judul){ ?>
                    <th><?= $judul ?></th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Menampilkan data dalam bentuk tabel
            $no = 1;
            foreach ($bentuk as $key => $b) {
                echo '<tr>';
                echo '<td>' . $no . '</td>';
                echo '<td>' . $b->nama_bidang() . '</td>';
                echo '<td>' .print_r($ar_keterangan[$key], true).'</td>';
                echo '<td>' . $b->luas_bidang() . '</td>';
                echo '<td>' . $b->keliling_bidang() . '</td>';
                echo '</tr>';
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>

