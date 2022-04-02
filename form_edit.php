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
    <?php
    include 'konek.php';
    $id = $_GET['id_mhs'];
    $hasil = mysqli_query($konek, "SELECT * FROM tbl_115 WHERE id_mhs=$id");
    $data = mysqli_fetch_assoc($hasil); ?>
    <!-- Form untuk melakukan edit data -->
    <div class="container">
        <h1>Masukkan Data Mahasiswa</h1>
        <form method="POST" action="">
            <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <input type="text" name="nama_mhs" value="<?= $data['nama_mhs'] ?>" class="form-control" placeholder="Nama Mahasiswa">
                    </div>
                    <div class="col">
                        <input type="text" name="nim_mhs" value="<?= $data['nim_mhs'] ?>" class="form-control" placeholder="NIM Mahasiswa">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <input type="text" name="alamat_mhs" value="<?= $data['alamat_mhs'] ?>" class="form-control" placeholder="Alamat Mahasiwa">
                    </div>
                </div>
        </form><br>
        <button class="btn btn-primary" type="submit" name="send">UPDATE</button>
    </div>
    <?php
    // kondisi jika tombol send di klik
    if (isset($_POST['send'])) {
        $id=$_POST['id_mhs'];
        $nama= $_POST['nama_mhs'];
        $nim = $_POST['nim_mhs'];
        $alamat = $_POST['alamat_mhs'];
        $sql = "UPDATE tbl_115 set nama_mhs = '$nama',nim_mhs = '$nim',alamat_mhs = '$alamat' WHERE id_mhs=$id";
        $hasil = mysqli_query($konek,$sql);
        // alert untuk pemberitahuan jika eksekusi berhasil
        if ($hasil){
            echo "<SCRIPT> alert('Perubahan Data Sukses. Data Sudah diperbarui dalam Tabel');window.location='data_mhs.php'</SCRIPT>";
        }
    }
?>
</body>

</html>