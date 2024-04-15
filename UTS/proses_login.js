function index() {
    var siswa = document.getElementById("admin").value;
    var password = document.getElementById("input_password").value;
    if ((siswa === "Fira" && password === "123456") || (siswa === "Kinara" && password === "98765")) {
        window.location.href = "form.php";
        alert("Berhasil Login");
    } else {
        alert("Login Gagal, Periksa Username Dan Password Anda!");
    }
}