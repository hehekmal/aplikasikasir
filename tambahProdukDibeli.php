<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$PenjualanID = $_GET['PenjualanID'];
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Tambah Produk</h1>
    <form action="menambahProdukDibeli.php?PetugasID=<?php echo $PetugasID ?>&PenjualanID=<?php echo $PenjualanID ?>" method="post">
        <table>
            <tr>
                <td>Produk</td>
                <td> :<select name="ProdukID">
                        <?php
                        $produk = mysqli_query($connect, "select * from produk");
                        while ($produkarr = mysqli_fetch_array($produk)) {
                        ?>
                            <option value="<?php echo $produkarr['ProdukID'] ?>"><?php echo $produkarr['NamaProduk'] ?></option>
                        <?php } ?>
                    </select></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td> :<input type="number" min="0" name="JumlahProduk"></td>
            </tr>
        </table>
        <input type="submit">
    </form>
</body>

</html>