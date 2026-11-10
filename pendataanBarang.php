<html>
<?php
$PetugasID = $_GET['PetugasID'];
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Pendataan Barang</h1>
    <a href="home.php?PetugasID=<?php echo $PetugasID ?>">Beranda</a>
    <p>
        <a href="tambahBarang.php?PetugasID=<?php echo $PetugasID ?>">Tambah barang</a>
    </p>
    <table border="1">

        <tr>
            <th>No</th>
            <th>Nama produk</th>
            <th>Harga</th>
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
                <td><?php echo $dataproduk['Harga'] ?></td>
                <td>
                    <a href="editBarang.php?PetugasID=<?php echo $PetugasID ?>&ProdukID=<?php echo $dataproduk['ProdukID'] ?>">Edit</a>
                    <a href="hapusBarang.php?PetugasID=<?php echo $PetugasID ?>&ProdukID=<?php echo $dataproduk['ProdukID'] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>