<?php

function tampilkanHaloDunia()
{
    echo "Halo dunia! <br>";

    tampilkanHaloDunia();
}
tampilkanHaloDunia();

//Membuat batasan sampe ke 25 saja dengan menampilkan angka 1 sampai 25
for($i=1;$i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}

/* Langkah no 4
function tampilAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
 
    if ($indeks < $jumlah) {
       tampilAngka($jumlah, $indeks + 1);
    }
}
tampilAngka(20);*/



/* Contoh Kasus Menu Bertingkat
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],

];

function tampilMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if (isset($item['subMenu'])) {
            tampilMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

tampilMenuBertingkat($menu);*/
?>