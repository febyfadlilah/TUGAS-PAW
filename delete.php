<?php
include "konek.php";
$id=$_GET['id_mhs'];
$sql = "DELETE FROM tbl_115 WHERE id_mhs=$id";
$hasil = mysqli_query($konek,$sql);
if ($hasil){
    echo "<SCRIPT> alert('Penghapusan Data Sukses. Data Sudah diperbarui dalam Tabel');window.location='data_mhs.php'</SCRIPT>";
}
?>