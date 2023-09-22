
<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
    <style>
        label{
            width:200%;
            border-collapse:collapse;
        }
        th, td{
            background: yellow;
            padding: 20px;
            text-align:left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="pekerjaan">Pekerjaan:</label>
        <select id="pekerjaan" name="pekerjaan">
            <option value="Kantoran">Kantoran</option>
            <option value="Serabutan">Serabutan</option>
            <option value="Koki"> Koki</option>
            <option value="Atlit"> Atlit</option>
            <option value="Guru"> Guru</option>
            <option value="PNS"> PNS</option>
            <option value="Petani"> Petani</option>
            <option value="Ibu Rumahtangga"> Ibu Rumah tangga</option>
            <option value="Programmer"> Programmer</option>
            <option value="Dosen"> Dosen</option>
            <!-- tambahkan pilihan pekerjaan lainnya -->
        </select><br><br>
        
        <label for="hobby">Hobby:</label><br>
        <input type="radio" id="Renang" name="hobby" value="Renang">
        <label for="Renang">Renang</label><br>
        <input type="radio" id="lari" name="hobby" value="lari">
        <label for="lari">lari</label><br>
        <input type="radio" id="Nonton" name="hobby" value="Nonton">
        <label for="hobby3">Nonton</label><br>
        <input type="radio" id="Mancing" name="hobby" value="Mancing">
        <label for="hobby3">Mancing</label><br>
        <input type="radio" id="hobby3" name="hobby" value="Main Bola">
        <label for="hobby3">Main bola</label><br>
        <input type="radio" id="hobby1" name="hobby" value="Batminton">
        <label for="hobby1">Batminton</label><br>
        <input type="radio" id="hobby2" name="hobby" value="Ngoding">
        <label for="hobby2">Ngoding</label><br>
        <input type="radio" id="hobby3" name="hobby" value="Healing">
        <label for="hobby3">Healing</label><br>
        <input type="radio" id="hobby3" name="hobby" value="Playgirl">
        <label for="hobby3">Playgirl</label><br>
        <input type="radio" id="hobby3" name="hobby" value="Mian Hati">
        <label for="hobby3">Main hati</label><br>
        <!-- tambahkan pilihan hobby lainnya -->
        
        <br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
    
    <?php
    if(isset($_POST['simpan'])){
        // Memperoleh data dari form
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];
        
        // Menampilkan data dalam bentuk tabel
        echo "<h2>Data Diri</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$pekerjaan</td>
                    <td>$hobby</td>
                </tr>
            </table>";
    }
    ?>
</body>
</html>