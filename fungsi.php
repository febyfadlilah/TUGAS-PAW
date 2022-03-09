<?php
//membuat fungsi perkalian
function perkalian($angka1, $angka2)
{
    $hasil = $angka1*$angka2;
    return $hasil;
}
//membuat fungsi penjumlahan
function penjumlahan($angka1, $angka2)
{
    $jml = $angka1+$angka2;
    return $jml;
}
//membuat fungsi pengurangan
function pengurangan($angka1, $angka2)
{
    $krg = $angka1-$angka2;
    return $krg;
}
//menampilkan hasil operasi dengan pemanggilan fuungsi
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
echo "<br/>";
echo "Perkalian 20 x 4 adalah ".perkalian(20,4);
echo "<br/>";
echo "Perkalian 8 x 9 adalah ".perkalian(8,9);
echo "<br/>";
echo "Penjumlahan 7 + 2 adalah ".penjumlahan(7,2);
echo "<br/>";
echo "Penjumlahan 20 + 4 adalah ".penjumlahan(20,4);
echo "<br/>";
echo "Penjumlahan 8 + 9 adalah ".penjumlahan(8,9);
echo "<br/>";
echo "Pengurangan 7 - 2 adalah ".pengurangan(7,2);
echo "<br/>";
echo "Pengurangan 20 - 4 adalah ".pengurangan(20,4);
echo "<br/>";
echo "Pengurangan 8 - 9 adalah ".pengurangan(8,9);
?>