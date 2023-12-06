<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMA UJUNGPANGKAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/list-siswa.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="d-flex justify-content-center my-5">
        <h1>Daftar Siswa Baru</h1>
    </header>

    <div class="d-flex flex-column justify-content-center">
        <nav class="d-flex justify-content-end">
            <a href="form-daftar.php">Tambah Siswa</a>
        </nav>

        <br>

        <table class="table table-hover">
            <thead class="table-secondary">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                    echo "<td>";
                    echo "<div class='d-grid gap-2'>";
                    echo "<a class='btn btn-warning text-light mx-2' href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>";
                    echo "<a class='btn btn-danger mx-2' href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                    echo "</div>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

        <footer class="d-flex justify-content-between">
            <a href="index.php">
                << Kembali</a>
                    <p>Total Pendaftar: <?php echo mysqli_num_rows($query) ?></p>
        </footer>
    </div>

</body>

</html>