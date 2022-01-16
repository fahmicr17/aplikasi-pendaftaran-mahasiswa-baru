<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

mysqli_query("INSERT INTO formulir values('$nama','$email','$alamat','$tgl_lahir','$jenis_kelamin')");
header("location: formulir/index.php");
?>