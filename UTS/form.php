<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru SMAN 1 MAGETAN</title>
    <link href="form.css" rel="stylesheet">
    <script src ="jquery-3.7.1.js"></script>
    <script src ="jquery-ui-1.13.2/jquery-ui.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
    $(function(){
        $("#tanggal_lahir").datepicker();
        $("#form_pendaftaran").submit(function(e) {
            e.preventDefault(); // Hindari submit formulir secara default

            // Alihkan ke bagian B (identitas orang tua/wali) jika tombol "Selanjutnya" ditekan
            $("#identitas_orang_tua").show();
            $("#identitas_calon_siswa").hide();
        });

        $("#form_orang_tua").submit(function(e) {
            e.preventDefault(); // Hindari submit formulir secara default

            // Semua formulir telah diisi, tampilkan pesan sukses
            $("#identitas_orang_tua").hide();
            $("#sukses_pendaftaran").show();
        });
    });
</script>



    </script>
</head>
<body>
    <div class="wrap">
        <div class="container" id="identitas_calon_siswa">
            <h1><center>Formulir Pendaftaran Siswa Baru SMAN 1 MAGETAN</h1></center>
            <form action="" method="post" id="form_pendaftaran">
            <div class="gambar">
                <img src="IMG/LOGO.png" alt="Logo">
            </div>
                <!-- Bagian A: Identitas Calon Siswa -->
                <h3>A. Identitas Calon Peserta Didik</h3>
                <label for="NISN">Nomor Induk Siswa Nasional (NISN) *</label><br>
                <input type="text" id="NISN" name="NISN" required><br>
                
                <label for="NIK">Nomor Induk Kependudukan (NIK)</label><br>
                <input type="text" id="NIK" name="NIK"><br>
                
                <label for="nama">Nama Lengkap Calon Siswa *</label><br>
                <input type="text" id="nama" name="nama" required><br>
                
                <label for="tempat_lahir">Tempat Lahir</label><br>
                <input type="text" id="tempat_lahir" name="tempat_lahir"><br>
                
                <label for="tanggal_lahir">Tanggal Lahir⭑</label><br>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>
                
                <label for="jenis_kelamin">Jenis Kelamin *</label><br>
                <input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
                <input type="radio" name="jk" value="Perempuan">Perempuan<br>
            
                
                <label for="alamat">Alamat Tinggal Calon Siswa</label><br>
                <textarea id="alamat" name="alamat"></textarea><br>
                
                <label for="agama">Agama</label><br>
                <select id="agama" name="agama">
                    <option value=""></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select><br>
                
                <label for="sekolah_asal">Sekolah Asal *</label><br>
                <input type="text" id="sekolah_asal" name="sekolah_asal" required><br>
                <!-- Tombol "Selanjutnya" -->
                <input type="submit" value="Selanjutnya">
            </form>
        </div>

        <div class="container" id="identitas_orang_tua" style="display: none;">
            <h1><center>Formulir Identitas Orang Tua/Wali</h1></center>
            <form action="" method="post" id="form_orang_tua">
                <!-- Bagian B: Identitas Orang Tua/Wali -->
                <h3>B. Identitas Orang Tua/Wali</h3>
                <label for="nama_ayah">Nama Ayah *</label><br>
                <input type="text" id="nama_ayah" name="nama_ayah" required><br>
                
                <label for="pekerjaan_ayah">Pekerjaan Ayah *</label><br>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required><br>
                
                <label for="nama_ibu">Nama Ibu *</label><br>
                <input type="text" id="nama_ibu" name="nama_ibu" required><br>
                
                <label for="pekerjaan_ibu">Pekerjaan Ibu *</label><br>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required><br>
                
                <!-- Tombol "Kirim" -->
                <input type="submit" value="Kirim">
            </form>
        </div>

        <!-- Pesan sukses -->
        <div class="container" id="sukses_pendaftaran" style="display: none;">
            <h1><center>Selamat Pendaftaran Siswa Baru SMA Negeri 1 MAGETAN Telah Berhasil</h1></center>
        </div>
    </div>
</body>
</html>
