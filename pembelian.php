<html>
<?php
$PetugasID = $_GET['PetugasID'];
$pilih = 0;
if (isset($_POST['pilih'])) {
    $pilih = $_POST['pilih'];
}
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Pembelian</h1>
    <a href="home.php?PetugasID=<?php echo $PetugasID ?>">Beranda</a>
    <form action="pembelian.php?PetugasID=<?php echo $PetugasID ?>" method="post">
        <input type="radio" name="pilih" value="0">tambah pelanggan
        <input type="radio" name="pilih" value="1">pembelian
        <input type="submit">
    </form>
    <?php
    if ($pilih == 1) {
    ?>
        <form action="menambahpembelian.php?PetugasID=<?php echo $PetugasID ?>" method="post">
            <table>
                <tr>
                    <td>Pelanggan</td>
                    <td>
                        : <select name="PelangganID">
                            <?php
                            include("connect.php");

                            $no = 1;
                            $dt = mysqli_query($connect, "select * from pelanggan");
                            while ($d = mysqli_fetch_array($dt)) {
                            ?>
                                <option value="<?php echo $d['PelangganID'] ?>"><?php echo $d['NamaPelanggan'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: <input type="date" name="TanggalPenjualan"></td>
                </tr>
            </table>
            <input type="submit">
        </form>
    <?php
    } else {
    ?>
        <form action="menambahPelanggan.php?PetugasID=<?php echo $PetugasID ?>" method="post">
            <table>

                <tr>
                    <td>Nama Pelanggan</td>
                    <td>: <input type="text" name="NamaPelanggan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input type="text" name="Alamat"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>: <input type="text" name="NomorTelepon"></td>
                </tr>
            </table>
            <input type="submit">
        </form>
    <?php } ?>
</body>

</html>

<!-- : <select name="ProdukID">
                    <?php
                    include("connect.php");

                    $no = 1;
                    $dt = mysqli_query($connect, "select * from alat");
                    while ($d = mysqli_fetch_array($dt)) {
                    ?>
                        <option value="<?php echo $no++ ?>"><?php echo $d['namaAlat'] ?> <?php echo $d['jumlahAlatTersedia'] ?> tersedia</option>
                    <?php } ?>
                </select> -->