<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai){
    if ($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(',', $nilaiLulus);

echo "<br>";
echo "<br>";

// Memfilter dan mecetak daftar karyawan yang memiliki pengalaman kerja lebih dari 5 tahun.
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 thaun: "
. implode(', ', $karyawanPengalamanLimaTahun);

echo "<br>";
echo "<br>";

// Mencetak daftar nilai mahasiswa dalam mata kuliah yang ditentukan, yang diambil dari array.
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ]
];
$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";
echo "<br>";


// SOAL NO 5.4
echo "========================= Soal Cerita No 5.4 =========================<br>";
$siswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];

$rata_rata = (array_sum($siswa)) / count($siswa);
echo"Daftar nama dan nilai siswa: <br>";
foreach($siswa as $nama => $isi){
    if ($isi > $rata_rata){
        echo "Nilai $nama: $isi <br>";
    } else {
        echo "Nilai $nama: $isi <br>";
    }
}
echo "Jumlah rata-rata kelas: $rata_rata <br>";
echo "<br>";

// Cetak daftar nilai siswa di atas rata-rata kelas
echo "Daftar nama siswa di atas rata-rata kelas: <br>";

foreach ($siswa as $nama => $isi) {
    if ($isi > $rata_rata) { 
        echo "$nama: $isi","<br>";
    }
}
?>