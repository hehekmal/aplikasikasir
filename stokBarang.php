<html>
<?php
$PetugasID = $_GET['PetugasID']
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Stok Barang</h1>
    <a href="home.php?PetugasID=<?php echo $PetugasID ?>">Beranda</a>
    <table border="1">

        <tr>
            <th>No</th>
            <th>Nama produk</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        include('connect.php');
        $no = 1;
        $produkquery = mysqli_query($connect, "select * from produk");
        while ($dataproduk = mysqli_fetch_array($produkquery)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dataproduk['NamaProduk'] ?></td>
                <td><?php echo $dataproduk['Stok'] ?></td>
                <td>
                    <a href="tambahStok.php?PetugasID=<?php echo $PetugasID ?>&ProdukID=<?php echo $dataproduk['ProdukID'] ?>">Tambah stok</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>