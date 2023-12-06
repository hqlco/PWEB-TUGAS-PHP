<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMA UJUNGPANGKAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="text-white d-flex justify-content-center my-5">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <div class="form-group d-flex flex-column">
            <label class="text-white" for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Nama lengkap">
        </div>
        <div class="form-group d-flex flex-column">
            <label class="text-white" for="alamat">Alamat</label>
            <textarea name="alamat" placeholder="Alamat Lengkap"></textarea>
        </div>
        <div class="form-group d-flex flex-column">
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah">
        </div>
        <div class="form-white d-flex flex-column">
            <label for="agama">Agama</label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
        </div>
        <div class="form-group d-flex flex-column">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="radio"><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</div>
            <div class="radio"><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</div>
        </div>

        <footer class="d-flex justify-content-between">
            <input type="submit" value="Daftar" name="daftar" />
            <a href="index.php">
                << Kembali</a>
        </footer>
    </form>

</body>

</html>