<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$ProdukID = $_GET['ProdukID'];
$produk = mysqli_fetch_array(mysqli_query($connect, "select * from produk where ProdukID='$ProdukID'"))
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Tambah Barang</h1>
    <a href="pendataanBarang.php?PetugasID=<?php echo $PetugasID ?>">Kembali</a>
    <form action="mengeditBarang.php?PetugasID=<?php echo $PetugasID ?>&ProdukID=<?php echo $ProdukID ?>" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>: <input type="text" name="NamaProduk" value="<?php echo $produk['NamaProduk'] ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>: <input type="number" name="Harga" value="<?php echo $produk['Harga'] ?>"></td>
            </tr>
        </table>
        <p style="color: red;">
            <?php
            if (isset($_GET['salah'])) {
                $salah = $_GET['salah'];
                echo $salah;
            }
            ?>
        </p>
        <input type="submit">
    </form>
</body>

</html>