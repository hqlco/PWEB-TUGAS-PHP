<?php

include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SAM UJUNGPANGKAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="d-flex justify-content-center my-5">
        <h1>Formulir Edit Siswa Baru</h1>
    </header>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <div class="form-group d-flex flex-column">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
        </div>
        <div class="form-group d-flex flex-column">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" placeholder="Alamat Lengkap"><?php echo $siswa['alamat'] ?></textarea>
        </div>
        <div class="form-group d-flex flex-column">
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
        </div>
        <div class="form-group d-flex flex-column">
            <label for="agama">Agama</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
            </select>
        </div>
        <div class="form-group d-flex flex-column">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <div class="radio"><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked" : "" ?>> Laki-laki</div>
            <div class="radio"><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked" : "" ?>> Perempuan</div>
        </div>

        <footer class="d-flex justify-content-between">
            <input type="submit" value="Simpan" name="simpan" />
            <a href="index.php">
                << Kembali</a>
        </footer>
    </form>

</body>

</html>