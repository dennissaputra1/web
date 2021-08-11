<!DOCTYPE html>
<html>
<head>
<title>Cara Design Table Dengan CSS | www.malasngoding.com</title>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>
    <body align="center">
        <table id="example" class="display" style="width:100%" >
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $koneksi = mysqli_connect("localhost", "root", "", "toko_sepatu");
                if (mysqli_connect_errno()){
                    echo "Koneksi database gagal : " . mysqli_connect_error();
                }
                $no =1;
                $data = mysqli_query ($koneksi, "select * from barang");
                while ($d = mysqli_fetch_array($data)){
            ?>    
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $d["nama_barang"];?></td>
                    <td><?php echo $d["harga_jual"];?></td>
                    <td><?php echo $d["jumlah"];?></td>
                    <td><img src="img/<?php echo $d["foto"];?>" width="50px" height="50px"></td>
                    <td> 
                        <a href="hapusData.php?id=<?php echo $d["id"];?>" class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus')">Hapus Data</a> || 
                        <a href="editData.php?id=<?php echo $d["id"];?>" class="btn btn-primary">Edit Data</a></td>
                </tr>
            <?php $no++; }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nomor</th>
                    <th>Nama barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah</th>
                    <th>Foto</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
            <script>
                $(document).ready(function() {
                $('#example').DataTable();
                } );
            </script>
        <a href="tambahData.php" class="btn btn-primary"">Tambah Data</a>
    </body>
</html>