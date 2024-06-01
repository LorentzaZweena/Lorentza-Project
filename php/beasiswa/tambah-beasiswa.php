<?php
    session_start();
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Assuming you have form fields for Nama, Kelas, Nilai, and Gambar
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nilai = $_POST['nilai'];
        $gambar = $_POST['gambar'];

        // Save the data to the session to pass it to input_nilai.php
        $_SESSION['nama'] = $nama;
        $_SESSION['kelas'] = $kelas;
        $_SESSION['nilai'] = $nilai;
        $_SESSION['gambar'] = $gambar;

        // Redirect to input_nilai.php
        header("Location: input_nilai.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary bg-dark border-bottom border-body" style="padding-left: 5%;" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-2 mt-2 h1">Ariva Zweena</span>
        </div>
    </nav>

    <div class="element">
        <!-- header -->
        <h1 class="poppins-black">Data beasiswa</h1>
        <div class="col-md-12" style="text-align: end; padding-bottom: 1.5%; padding-right: 1.5%;">
            <a href="tambah-beasiswa.php" id="" class="bn5" role="button">Tambah data</a>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- Form for adding data -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="text" class="form-control" id="nilai" name="nilai" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
