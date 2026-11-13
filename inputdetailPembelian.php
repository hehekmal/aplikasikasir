<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$PenjualanID = $_GET['PenjualanID'];
$penjualan = mysqli_query($connect, "select * from penjualan where PenjualanID='$PenjualanID'");
$penjualarr = mysqli_fetch_array($penjualan);
$PelangganID = $penjualarr['PelangganID'];
$pelanggan = mysqli_query($connect, "select * from pelanggan where PelangganID='$PelangganID'");
$pelangganarr = mysqli_fetch_array($pelanggan);
$dpenjualan = mysqli_query($connect, "select * from detailpenjualan where PenjualanID='$PenjualanID'");
// $dpenjualanarr = mysqli_fetch_array($dpenjualan);
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
        td.kiri {
            text-align: start;
        }

        td {
            padding-left: 10px;
            padding-right: 10px;
        }

        td.kanan {
            text-align: end;
        }
    </style>
</head>

<body>
    <h1>Detail Pembelian</h1>
    <div>
        <a href="tambahProdukDibeli.php?PetugasID=<?php echo $PetugasID ?>&PenjualanID=<?php echo $PenjualanID ?>">tambah produk</a>
        <table>
            <tr>
                <td class="kiri">Pelanggan</td>
                <td></td>
                <td class="kanan"></td>
                <td class="kanan"><?php echo $pelangganarr['NamaPelanggan'] ?></td>
            </tr>
            <?php
            while ($dpenjualanarr = mysqli_fetch_array($dpenjualan)) {
                $ProdukID = $dpenjualanarr['ProdukID'];
                $produk = mysqli_query($connect, "select * from produk where ProdukID='$ProdukID'");
                $produkarr = mysqli_fetch_array($produk);
            ?>
                <tr>
                    <td class="kiri"><?php echo $produkarr['NamaProduk'] ?></td>
                    <td><?php echo $dpenjualanarr['JumlahProduk'] ?></td>
                    <td class="kanan"><?php echo $produkarr['Harga'] ?></td>
                    <td class="kanan"><?php echo $dpenjualanarr['Subtotal']  ?></td>
                </tr>
            <?php } ?>
            <?php
            $total = mysqli_query($connect, "select sum(Subtotal) from DetailPenjualan where PenjualanID='$PenjualanID'");
            $totalarr = mysqli_fetch_array($total);
            $ftotal = $totalarr['sum(Subtotal)'];
            mysqli_query($connect, "update penjualan set TotalHarga='$ftotal' where PenjualanID='$PenjualanID'")
            ?>
            <tr>
                <td class="kiri"></td>
                <td></td>
                <td class="kanan">-</td>
                <td class="kanan">-------------</td>
            </tr>
            <tr>
                <td class="kiri"></td>
                <td></td>
                <td class="kanan">total</td>
                <td class="kanan"><?php echo $totalarr['sum(Subtotal)'] ?></td>
            </tr>
            <!-- <tr>
                <td class="kiri"></td>
                <td></td>
                <td></td>
                <td class="kanan"></td>
            </tr> -->
        </table>
        <form action="kembalian.php?PetugasID=<?php echo $PetugasID ?>&PenjualanID=<?php echo $PenjualanID ?>" method="post">
            <p>tunai : <input type="number" min="<?php echo $penjualarr['TotalHarga'] ?>" name="dibayar"></p>
            <input type="submit">
        </form>
    </div>
</body>

</html>