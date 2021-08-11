<!DOCTYPE html>
<html>
<head>
    <title>Update Barang</title>
</head>
<body>
    <a href="dataBarang.php">KEMBALI</a>
    <br/>
    <h3>EDIT DATA BARANG</h3>

    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "barangsepatu");
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from barang where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>            
                    <td>Nama Barang</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="namabarang" required value="<?php echo $d['namabarang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="stock" required value="<?php echo $d['stock']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td><input type="number" name="harga" required value="<?php echo $d['harga']; ?>"></td>
                </tr>
                 <tr>
                    <td>Foto</td>
                   <td><input type="file" name="foto" required placeholder="Masukkan Foto">  </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>       
            </table>
        </form>
        <?php 
    }
    ?>

</body>
</html>