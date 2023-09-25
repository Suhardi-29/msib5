<?php
//inisialisasi array 1 d
$m1 =['nim'=>'200602062','nama'=>'andi Setyo','nilai'=>95];
$m2 =['nim'=>'200602063','nama'=>'Rafael','nilai'=>70];
$m3 =['nim'=>'200602064','nama'=>'Ali Hakim','nilai'=>85];
$m4 =['nim'=>'200602065','nama'=>'Ari','nilai'=>40];
$m5 =['nim'=>'200602066','nama'=>'ani','nilai'=>59];
$m6 =['nim'=>'200602067','nama'=>'aji','nilai'=>75];
$m7 =['nim'=>'200602068','nama'=>'budi santoso','nilai'=>30];
$m8 =['nim'=>'200602069','nama'=>'chandra','nilai'=>20];
$m9 =['nim'=>'200602070','nama'=>'budi santoso','nilai'=>59];
$m10 =['nim'=>'200602071','nama'=>'chandra','nilai'=>60];

$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
$ar_judul = ['no','nim','nama','nilai','keterangan','grade','predikat'];

//fungsi sederhana
$jumlah_mahasiswa = count($mahasiswa);
$nilai_mahasiswa = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai_mahasiswa);
$rata_nilai = $total_nilai / $jumlah_mahasiswa;
$max_nilai = max($nilai_mahasiswa);
$min_nilai = min($nilai_mahasiswa);
$keterangan = [
    'jumlah mahasiswa'=>$jumlah_mahasiswa,
    'nilai tertinggi mahasiswa'=>$max_nilai,
    'nilai terendah mahasiswa'=>$min_nilai,
    'nilai rata rata mahasiswa'=>$rata_nilai,
    ]
?>

<table border="1px" width="100%" bgcolor="yellow">
    <thead>
        <tr>
            <?php
            foreach($ar_judul as $judul){
            ?>
            <th><?= $judul ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        //keterangan
        $no=1;
        foreach($mahasiswa as $mhs){
            $ket = ($mhs['nilai']>=60) ? 'lulus' : 'Tidak Lulus';

            //grade
            if($mhs['nilai']>= 81 && $mhs['nilai']<=100)$grade='A';
            else if($mhs['nilai']>= 75 && $mhs['nilai']<= 80)$grade='B';
            else if($mhs['nilai']>= 60 && $mhs['nilai']<= 74)$grade='C';
            else if($mhs['nilai']>= 30 && $mhs['nilai']<= 59)$grade='D';
            else if($mhs['nilai']>= 0 && $mhs['nilai']<= 29)$grade='E';
            else $grade = '';

            //predikat (switch case)
            switch ($grade){
                case "A" : $predikat = "memuaskan"; break;
                case "B" : $predikat = "baik"; break;
                case "C" : $predikat = "cukup"; break;
                case "D" : $predikat = "kurang"; break;
                case "E" : $predikat = "buruk"; break;
                default : $predikat ="";     
            }
        ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
            </tr>
        <?php $no++; } ?>
        
    </tbody>
    <tfoot>
        <?php
        foreach($keterangan as $ket => $hasil){
        ?>
        <tr>
            <th colspan="6"><?= $ket ?></th>
            <th><?= $hasil ?></th>
        </tr>
        <?php } ?>
    </tfoot>
</table>