<?php
include "../../Config/koneksi.php";

$nis = $_POST["nis"];
$nm = $_POST["nama"];
$jk = $_POST["jk"];
$ttl = $_POST["tempat"];
$tgl = $_POST["tanggal"];
$hp = $_POST["nohp"];
$jur = $_POST["jurusan"];

$tambah = mysqli_query($koneksi, "insert into tb_siswa values('$nis', '$nm', '$jk', '$ttl', '$tgl', '$hp', '$jur')");
if ($tambah === true):
	echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../Siswa/DataSiswa.php';</script>";
else :
	echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../Siswa/FormDaftar.php';</script>";
endif;

?>