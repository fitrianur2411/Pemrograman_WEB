<?php
/*
//fungsi tanpa parameter
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalan, nama saya Fitria<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan();*/


/*
//Fungsi Berparameter
function perkenalan($nama, $salam){
    echo $salam. ", ";
    echo "Perkenalan, nama saya ".$nama." <br/>";
    echo "Senang berkenalan dengan anda <br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Fitria", "Hallo");

echo "<hr>";

$saya="Nur";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya, $ucapanSalam);*/


/*
//Parameter dengan Nilai Default
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalan, nama saya ".$nama." <br/>";
    echo "Senang berkenalan dengan anda <br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Fitria", "Hallo");

echo "<hr>";

$saya="Nur";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);*/


/*
//Fungsi yang Mengembalikan Nilai
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur= $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2003, 2024) ." tahun"*/



//Fungsi di dalam Fungsi
//membuat fungsi yang dapat di panggil dalam fungsi lain
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur= $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum "){
    echo $salam. ", ";
    echo "Perkenalan, nama saya ".$nama." <br/>";
    
    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(2003, 2024) ." tahun<br/>";
}

//memanggil fungsi perkenalan
    perkenalan("Fitria")


?>