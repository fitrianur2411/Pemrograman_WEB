<?php
// Pemberian Nilai.
$nilaiNumerik = 92;
// penggunaan if-elseis-else.
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

echo "<br>";
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak
500 kilometer.";

echo "<br>";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah+= ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";


echo "========================= Soal Cerita =========================<br>";
// SOAL NO 4.6
// Daftar nilai siswa
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan daftar nilai dari yang terendah ke yang tertinggi
sort($nilai);

// Abaikan dua nilai terendah (indeks 0 dan 1) dan dua nilai
// tertinggi (indeks -2 dan -1)
$nilai = array_slice($nilai, 2, -2);

// Hitung rata nilai
$total_nilai = array_sum($nilai);
$rata_nilai = $total_nilai / 6;

// Cetak total nilai
echo "Soal Cerita No 4.6<br>";
echo "Total nilai rata-rata setelah mengabaikan
dua nilai tertinggi dan dua nilai terendah adalah: " . $rata_nilai;

echo "<br>";
echo "<br>";

// SOAL NO 4.7

$harga_produk = 120000;
$diskon_persen = 20;
$min_for_diskon = 100000;

// Harga yang harus dibayar setelah diskon
if ($harga_produk > $min_for_diskon) {
    $diskon = ($diskon_persen / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $diskon;
} else {
    $harga_setelah_diskon = $harga_produk;
}
echo "Soal Cerita No 4.7<br>";
echo "Harga yang harus dibayar setelah diskon adalah:
Rp. " . $harga_setelah_diskon;

echo "<br>";
echo "<br>";

// SOAL NO 4.8

// Skor pemain
$skor_pemain = 600; // Ganti dengan skor pemain yang sesuai

// Total skor pemain
echo "Soal Cerita No 4.8<br>";
echo "Total skor pemain adalah: " . $skor_pemain . "<br>";

// Apakah pemain mendapatkan hadiah tambahan?
$hadiah_tambahan = ($skor_pemain > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan;

?>