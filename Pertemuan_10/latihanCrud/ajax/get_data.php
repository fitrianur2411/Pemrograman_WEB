<?php
// Membuka sesi untuk penggunaan token CSRF.
session_start();
// Mengimpor file koneksi.php untuk terhubung ke database.
include 'koneksi.php';
// Mengimpor file csrf.php untuk menangani token CSRF.
include 'csrf.php';

// Mengambil nilai ID anggota dari parameter POST.
$id = $_POST['id'];

// Menyiapkan query SQL untuk mengambil data anggota berdasarkan ID dan mengurutkannya secara menurun berdasarkan ID.
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";

// Mempersiapkan query SQL.
$sql = $db1->prepare($query);

// Mengikat parameter ke query untuk mencegah SQL injection.
$sql->bind_param('i', $id);

// Menjalankan query.
$sql->execute();

// Mendapatkan hasil query.
$res1 = $sql->get_result();

// Membuat array untuk menyimpan data anggota.
$h = array();

// Iterasi untuk setiap baris hasil query dan menyimpan data ke dalam array.
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama'] = $row["nama"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['alamat'] = $row["alamat"];
    $h['no_telp'] = $row["no_telp"];
}

// Mengembalikan data anggota dalam format JSON.
echo json_encode($h);

// Menutup koneksi dengan database.
$db1->close();

?>