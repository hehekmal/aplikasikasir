<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$penjualan = mysqli_query($connect, "select * from penjualan");

?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Data Pembelian</h1>
    <a href="home.php?PetugasID=<?php echo $PetugasID ?>">Beranda</a>
    <a href="pembelian.php?PetugasID=<?php echo $PetugasID ?>">Tambah Pembelian</a>
    <table border="1">
        <tr>
            <th>No. Pembelian</th>
            <th>Pelanggan</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($penjualarr = mysqli_fetch_array($penjualan)) {
            $PelangganID = $penjualarr['PelangganID'];
            $pelanggan = mysqli_query($connect, "select * from pelanggan where PelangganID='$PelangganID'");
            $pelangganarr = mysqli_fetch_array($pelanggan);
        ?>
            <tr>
                <td><?php echo $penjualarr['PenjualanID'] ?></td>
                <td><?php echo $pelangganarr['NamaPelanggan'] ?></td>
                <td><a href="detailPembelian.php?PetugasID=<?php echo $PetugasID ?>&PenjualanID=<?php echo $penjualarr['PenjualanID'] ?>">Detail</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>