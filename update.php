<?php
// include database connection file
 $koneksi = mysqli_connect("localhost", "root", "", "barangsepatu");
// Check if form is submitted for user update, then redirect to homepage after update
 	$id = $_POST['id'];
	$nama_barang = $_POST['nama_barang'];
	$harga_jual=$_POST['harga_jual'];
	$jumlah=$_POST['jumlah'];
	$foto=$_POST['foto'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE barang SET namabarang='$namabarang',stock='$stock',harga='$harga',foto='$foto' WHERE id='$id'");
	
	// Redirect to homepage to display updated user in list
	header("Location: barang.php");

?>
