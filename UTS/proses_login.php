<?php
session_start();

$siswa_username = "Fira";
$siswa_password = "12346";

if(isset($_POST['siswa']) && isset($_POST['input_password'])) {
    $input_siswa = $_POST['siswa'];
    $input_password = $_POST['input_password'];

    if(($input_siswa == $siswa1_username && $input_password == $siswa1_password) || ($input_admin == $siswa2_username && $input_password == $siswa2_password)) {
        $_SESSION['siswa'] = $input_siswa;
        $_SESSION['input_password'] = $input_password;
    }
}
?>