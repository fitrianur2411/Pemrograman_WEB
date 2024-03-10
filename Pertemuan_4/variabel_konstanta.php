<?php
// Untuk inisialisasi
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 +$angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";

// Untuk Boolean(true/false), jika true maka bernilai 1, jika false maka akan kosong
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah <br>";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang
didirikan pada tahun " . TAHUN_PENDIRIAN . ",";
?>