<?php

$a = 10;
$b = 5;

// operator aritmatika.
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "Hasil penjumlahan antara $a dan $b adalah $hasilTambah <br>";
echo "Hasil pengurangan antara $a dan $b adalah $hasilKurang <br>";
echo "Hasil perkalian antara $a dan $b adalah $hasilKali <br>";
echo "Hasil pembagian antara $a dan $b adalah $hasilBagi <br>";
echo "Sisa bagi $a dengan $b adalah $sisaBagi <br>";
echo "Hasil perpangkatan $a pangkat $b adalah $pangkat <br>";
echo "<br>";
 
// operator pembanding. jika salah kondisi tersebut tidak terpenuhi maka akan menghasilkan flase, jika benar maka akan menghasilkan true.
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "$a == $b maka "; var_dump($hasilSama);
echo "<br>";
echo "$a != $b maka "; var_dump($hasilTidakSama);
echo "<br>";
echo "$a < $b maka "; var_dump($hasilLebihKecil);
echo " = 5 lebih kecil <br>";
echo "$a > $b maka "; var_dump($hasilLebihBesar);
echo "<br>";
echo "$a <= $b maka "; var_dump($hasilLebihKecilSama);
echo "<br>";
echo "$a >= $b maka "; var_dump($hasilLebihBesarSama);
echo "<br>";
echo "<br>";

// operator logika yang menghasilkan dan mencetak nilai boolean berdasarkan kondisi dari variable.
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "$a && $b = $hasilAnd ", var_dump($hasilAnd) , "<br>";
echo "$a || $b = $hasilOr ", var_dump($hasilOr) ,"<br>";
echo "!$a = $hasilNotA ", var_dump($hasilNotA);
echo "<br>";
echo "!$b = $hasilNotB ", var_dump($hasilNotB);
echo "<br>";
echo "<br>";

// operator penugasan
$op1 = $a + $b;
$op2 = $a - $b;
$op3 = $a * $b;
$op4 = $a / $b;
$op5 = $a % $b;

echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "Hasil dari $a += $b adalah = $op1 <br>";
echo "Hasil dari $a -= $b adalah = $op2 <br>";
echo "Hasil dari $a *= $b adalah = $op3 <br>";
echo "Hasil dari $a /= $b adalah = $op4 <br>";
echo "Hasil dari $a %= $b adalah = $op5 <br>";
echo "<br>";

// identik dan tidak identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "$a apakah identik dengan $b? Jawab: ",
var_dump($hasilIdentik), "<br>";
echo "$a apakah identik dengan $b? Jawab: ", 
var_dump($hasilTidakIdentik), " <br>";
echo "<br>";

// SOAL NO 3.6
echo "============================== Soal Cerita No 3.6 =============================<br>";
$kursi = 45;
$kursiTerpakai = 28;
$kosong = $kursi - $kursiTerpakai;
$persen = $kosong/$kursi * 100;

echo "Sebuah restoran memiliki $kursi kursi. Pada suatu malam $kursiTerpakai kursi telah ditempati <br>";
echo "Jumlah kursi yang masih kosong adalah $kosong <br> Jumlah persentase kursi yang masih kosong adalah $persen %";
?>