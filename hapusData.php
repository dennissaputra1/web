<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko_sepatu");

// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
mysqli_query($koneksi, "DELETE FROM barang WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("location:databarang.php");
?>