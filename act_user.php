<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko_sepatu");
$nama = $_POST['nama_barang'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$jumlah = $_POST['jumlah'];
$foto = $_POST['foto'];

$query="INSERT INTO barang SET nama_barang='$nama',harga_jual='$harga_jual',harga_beli='$harga_beli',jumlah='$jumlah',foto='$foto'";
mysqli_query($koneksi, $query);
header("location:databarang.php");
?>