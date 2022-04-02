<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "febi";

$konek = mysqli_connect($server, $user, $pass, $db);

if(!$konek) {
//     echo "Selamat, koneksi Anda berhasil ";
// } else {
    echo "Maaf, koneksi Anda tidak berhasil, Silahkan coba lagi !";
}

?>