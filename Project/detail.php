<?php 
require 'functions.php';
//ambil id
$id = $_GET['id'];

//QUERY BERDASARKAN ID
$m = query("SELECT * FROM data_mhs WHERE id =$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?> "width="60"></li>
    <li>Nim :<?= $m['nim']; ?></li>
    <li>Nama :<?= $m['nama']; ?></li>
    <li>Kelas :<?= $m['kelas']; ?></li>
    <li>Jenis Kelamin :<?= $m['kelamin']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="data_mhs.php">Kembali</a></li>
  </ul> 
</body>
</html>