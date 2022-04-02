<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Data</title>
</head>
<body>
    <div class="container">
        <h1>Masukkan Data Mahasiswa</h1>
         <form method="post" action="">
             <!-- membuat sebuah form untuk inputan -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama_mhs">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="NIM Mahasiswa" name="nim_mhs">
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Alamat Mahasiwa" name="alamat_mhs">
                </div>
            </div>
        </form><br>
        <button class="btn btn-primary" type="submit" name="kirim">KIRIM</button>
    </div>
    <!-- Eksekusi untuk penambahan data -->
    <?php
    include "konek.php";
    // kondisi jika tombol kirim di klik
    if (isset($_POST['kirim'])) {
        $nama= $_POST['nama_mhs'];
        $nim = $_POST['nim_mhs'];
        $alamat = $_POST['alamat_mhs'];
        $sql = "INSERT INTO tbl_115 VALUES (null,'$nama','$nim','$alamat')";
        $hasil = mysqli_query($konek,$sql);
        // alert message box jika eksekusi berhasil
        if ($hasil){
            echo "<SCRIPT> alert('Penambahan Data Sukses. Data Sudah ada dalam Tabel');window.location='data_mhs.php'</SCRIPT>";
            }
    }
    ?>
</body>
</html>