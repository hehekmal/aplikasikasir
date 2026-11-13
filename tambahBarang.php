<html>
<?php
$PetugasID = $_GET['PetugasID'];
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Tambah Barang</h1>
    <a href="pendataanBarang.php?PetugasID=<?php echo $PetugasID ?>">Kembali</a>
    <form action="menambahBarang.php?PetugasID=<?php echo $PetugasID ?>" method="post">

        <table>
            <tr>
                <td>Nama Barang</td>
                <td>: <input type="text" name="NamaProduk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>: <input type="number" name="Harga"></td>
            </tr>
        </table>
        <input type="submit">
    </form>
    <p style="color: red;">
        <?php
        if (isset($_GET['salah'])) {
            $salah = $_GET['salah'];
            echo $salah;
        }
        ?>
    </p>
</body>

</html>