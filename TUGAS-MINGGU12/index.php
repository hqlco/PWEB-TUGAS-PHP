<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMA UJUNGPANGKAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="d-flex flex-column align-items-center justify-content-center">
        <h3 class="d-flex align-items-center justify-content-center">Pendaftaran Siswa Baru</h3>
        <h1 class="d-flex align-items-center justify-content-center"> SMA UJUNGPANGKAH</h1>
        <ul class="d-flex align-items-center justify-content-center mt-5">
            <li class="mx-2"><a href="form-daftar.php">Daftar Baru</a></li>
            <li class="mx-2"><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </header>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
</body>

</html>