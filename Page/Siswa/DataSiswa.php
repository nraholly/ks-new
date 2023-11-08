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


<body>
    <h1 style="margin-top: 20px; text-align:center;">Data Siswa</h1>
    <br>
    <!--card-->
    <section id="card">
        <div class="container">

            <div class="card-header">
                <a href="<?= base_url('Page/Siswa/FormDaftar.php') ?>" class="btn-tambahdata">Tambah Data</a>
            </div>

            <div class="card-body">
                <table class="table" id="example">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        $siswa = $koneksi->query("SELECT * FROM tb_siswa inner join tb_jurusan on tb_siswa.kd_jurusan = tb_jurusan.kd_jurusan");
                        while ($data = $siswa->fetch_array()) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data["nis"] ?></td>
                                <td><?= $data["nama"] ?></td>
                                <td><?= $data["jk"] ?></td>
                                <td><?= $data["tempatlahir"] ?></td>
                                <td><?= $data["tgllahir"] ?></td>
                                <td><?= $data["nohp"] ?></td>
                                <td><?= $data["nm_jurusan"] ?></td>
                                <td>
                                    <a href="" class="btn btn-outline-dark">Edit Data</a>
                                    <a href="HapusProcess.php?nis=<?php echo $data['nis'] ?>" class="btn btn-outline-dark">Hapus Data</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!--End card-->
    <?php
    include "../../Template/Script.php";
    ?>

</body>


</html>

<script>
    new DataTable('#example');
</script>