<?php
echo "<hr>FITRIA NUR SHOLIKAH - SIB 2C<hr>";
$TugasDataIdentitas = [
    'Bright Vachirawit' => [
        'Foto' => '<img src="foto1.jpg" width="200" height="250"></img>',
        'Nama' => 'Bright Vachirawit',
        'No.Telp' => '0987654321',
        'Alamat' => 'Jl.Kembang Turi No.19',
        'Jurusan' => 'Teknik Mesin',
    ],
    'Anya Forger' => [
        'Foto' => '<img src="foto2.jpg" width="200" height="200"></img>',
        'Nama' => 'Anya Forger',
        'No.Telp' => '1234567890',
        'Alamat' => 'Jl.Semanggi Barat No.23',
        'Jurusan' => 'Akuntansi',
    ],
];

foreach ($TugasDataIdentitas as $nama => $detail) {
    echo $detail['Foto'] . '<br><br>';
    echo 'Nama    : ' . $detail['Nama'] . '<br>';
    echo 'No. Telp: ' . $detail['No.Telp'] . '<br>';
    echo 'Alamat  : ' . $detail['Alamat'] . '<br>';
    echo 'Jurusan : ' . $detail['Jurusan'] . '<hr>';
}
?>
