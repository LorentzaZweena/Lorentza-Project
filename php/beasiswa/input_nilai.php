<?php
require_once 'connection.php';
require_once 'header.php';
?>

<div class="container">
    <h2 class="text-center fw-bold mt-3">Daftar Beasiswa</h2>
    <div class="row">
        <div class="col-8 m-auto">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-12" id="form">
                    <h4>Register Nilai</h4>

                    <div class="row mb-2">
                        <div class="col-4"><label class="form-label">Masukan Nama</label></div>
                        <div class="col-8"><input type="" name="nama" class="form-control" id="nama" placeholder="Nama" required></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-4"><label for="formFileMultiple" class="form-label">Kelas</label></div>
                        <div class="col-8"><select class="form-select" id="kelas" name="kelas" aria-label="Default select example">
                                <option selected>-- Pilih --</option>
                                <?php $query = "SELECT * FROM tbl_kelas";
                                $result = mysqli_query($connect, $query);

                                foreach ($result as $row) {
                                    echo '<option value="' . $row['id_kelas'] . '">' . $row['nama_kelas'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-4"><label class="form-label">Masukan Nilai</label></div>
                        <div class="col-8"><input type="" name="nilai" class="form-control" id="nilai" placeholder="Nilai : 1-100" required></div>
                    </div>

                    <div class="row">
                        <div class="col-4"><label for="formFileMultiple" class="form-label">Upload Berkas</label></div>
                        <div class="col-8"><input class="form-control" name="filename" type="file" id="filename" placeholder="jpg,jpeg,img." required></div>
                    </div>

                    <div class="mb-3">


                    </div>

                    <div class="col-12 d-flex justify-content-between p-3">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];
    $filename = $_FILES["filename"]["name"];
    $tempname = $_FILES["filename"]["tmp_name"];

    $folder = "./image/" . $filename;

    $queryInsert = "INSERT INTO tbl_siswa(nama_siswa,kelas,nilai, gambar) VALUES ('$nama', '$kelas', '$nilai','$filename')";

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    if ($connect->query($queryInsert)) {
        echo "<script>
                alert('Sukses');
                window.location.href='index.php';
            </script>";
    }
}
?>