<?php

include "../../Config/koneksi.php";

$nis = $_GET['nis'];
$hapus = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nis = '$nis'");

if ($hapus === false):
	echo "<script>alert('Data Gagal Dihapus !!');location.href='DataSiswa.php';</script>";
else :
	echo "<script>alert('Data Berhasil Dihapus !!');location.href='DataSiswa.php';</script>";
endif;

?>