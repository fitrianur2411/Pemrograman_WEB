<?php 
// Soal 1.1 >>
/*
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }
}*/


// Soal 1.2 >>
/*
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}*/


// Soal 1.3 >>
/*
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    $maxFileSize = 5 * 1024 * 1024; 

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
            echo '<br><br><img src=" ' . $targetFile . '"width="200" "alt="thumbnail">';// Untuk membuat file thumbnail dengan uk lebar 200
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Jenis file tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}*/

// Soal 1.4 >>

if (isset($_POST['submit'])) {
    $targetDirectory="documents/"; // direktori untuk menyimpan file
    $targetFile=$targetDirectory . basename($_FILES["fileToUpload"]["name"]);

    $documentType= strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions=array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10*1024*1024;
    
    if (in_array($documentType, $allowedExtensions)&& $_FILES["fileToUpload"]["size"]<= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else{
            echo "Gagal mengunggah dokumen.";
        }
    } else{
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>