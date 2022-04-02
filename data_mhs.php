<?php
include 'konek.php';

$query = "SELECT * FROM tbl_115";
$hasil = mysqli_query($konek, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br>
        <h2>TABEL MAHASISWA </h2><br>
        <table class="table table-sm" style="background-color :bisque">
            <thead class="">
                <tr class="table-success">
                    <th scope="col">ID Mahasiswa</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Alamat Mahasiswa</th>
                    <th scope="col">ACTION</th>
                </tr>
                <?php //mengolah hasil query
                while ($baris = mysqli_fetch_assoc($hasil)) {
                ?>
                    <tr>
                        <td><?php echo $baris['id_mhs'] ?></td>
                        <td><?php echo $baris['nama_mhs'] ?></td>
                        <td><?php echo $baris['nim_mhs'] ?></td>
                        <td><?php echo $baris['alamat_mhs'] ?></td>
                        <td>
                            <a href="form_edit.php?id_mhs=<?= $baris['id_mhs'] ?>"><button type="submit" name="edit">EDIT</button>
                            <a href="delete.php?id_mhs=<?= $baris['id_mhs'] ?>">
                            <button type="submit" name="delete"> DELETE </button>
                        </td>
                    </tr>
                <?php } ?>
        </table>
        <a href="form_add.php"><button class="btn btn-primary">ADD</button></a>
    </div>
</body>

</html>