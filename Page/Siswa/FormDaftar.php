<?php
require '../../Config/config.php';
require '../../Config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include "../../Template/Head.php";
?>

<!-- Navbar -->
<?php
include "../../Template/Navbar.php";
?>
<!-- End Navbar -->

<style>
    .mx-auto {
        width: 1000px;
    }

    .card {
        margin-top: 10px;
    }
</style>

<body>
    <br>
    <!--card-->
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-dark" style="color: white;">
                Tambah Data Siswa
            </div>
            <div class="card-body">
                <form action="DaftarProcess.php" method="post">
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIS Siswa</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nis" required >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Nama Siswa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input class="form-check-input" type="checkbox" value="Laki-Laki" name="jk">
                            <label class="form-check-label">
                                Laki - Laki
                            </label>
                            <input class="form-check-input" type="checkbox" value="Perempuan" name="jk">
                            <label class="form-check-label">
                                Perempuan
                            </label>
                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nohp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">Jurusan Siswa</label>

                        <?php
                        $data = $koneksi->query("SELECT * FROM tb_jurusan");
                        ?>

                        <div class="col-sm-10">
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" name="jurusan" >
                                <option selected>Pilih</option>
                                <?php
                                foreach ($data as $value) {
                                    echo "<option value='{$value['kd_jurusan']}'>{$value['nm_jurusan']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <div style="float:left; margin-right:20px;">
                        <button class="btn btn-dark" type="submit" value="SIMPAN">Simpan Data</button>
                    </div>

                </form>

                <div style="float:left; margin-right:20px;">
                    <button class="btn btn-dark" value="KEMBALI" onclick="history.go(-1);">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!--End card-->
    <?php
    include "../../Template/Script.php";
    ?>

</body>


</html>