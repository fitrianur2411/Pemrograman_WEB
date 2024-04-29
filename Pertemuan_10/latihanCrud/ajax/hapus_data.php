<?php
// Memulai sesi untuk penggunaan token CSRF.
session_start();
// Mengimpor file koneksi.php untuk terhubung ke database.
include 'koneksi.php';
// Mengimpor file csrf.php untuk menangani token CSRF.
include 'csrf.php';

// Mengambil nilai ID anggota dari parameter POST.
$id = $_POST['id'];

// Query untuk menghapus data anggota berdasarkan ID.
$query = "DELETE FROM anggota WHERE id=?";

// Mempersiapkan query SQL.
$sql = $db1->prepare($query);

// Mengikat parameter ke query untuk mencegah SQL injection.
$sql->bind_param("i", $id);

// Menjalankan query untuk menghapus data.
$sql->execute();

// Mengirimkan respons JSON untuk menandakan bahwa operasi penghapusan berhasil.
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi dengan database.
$db1->close();
?>