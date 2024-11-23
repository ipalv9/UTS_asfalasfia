<?php
include("../koneksi.php");

$id_karyawan =$_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$jabatan = $_POST['jabatan'];
$tanggal_gaji = $_POST['tanggal_gaji'];
$gaji = $_POST['gaji'];

$simpan = "INSERT INTO karyawan (id_karyawan,nama_karyawan,jabatan,tanggal_gaji,gaji) VALUES ('$id_karyawan','$nama_karyawan','$jabatan','$tanggal_gaji','$gaji')";

$proses = mysqli_query($koneksi, $simpan);



?>
<script>
    document.location="index.php";
</script>