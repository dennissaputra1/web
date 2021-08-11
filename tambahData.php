<html>
<head>
</head>
<body>
    <h2>Tambah Data</h2>
    <h3>Menambah Data</h3>
    <form action="act_user.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_barang" placeholder="Masukkan Nama Barang"></td>					
			</tr>	
			<tr>
				<td>Harga Jual</td>
				<td><input type="number" name="harga_jual" placeholder="Masukkan harga jual"></td>					
			</tr>	
			<tr>
				<td>Harga Beli</td>
				<td><input type="number" name="harga_beli" placeholder="Masukkan harga beli"></td>					
			</tr>	
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah" placeholder="Jumlah Barang"></td>					
			</tr>	
            <tr>
				<td>Foto</td>
				<td><input type="file" name="foto" placeholder="Masukkan Foto"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
        <p>Catatan : <br>
        Ekstensi Foto harus .jpg .jpeg .png</p>
	</form>
</body>
</html>