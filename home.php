<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$PID = mysqli_fetch_array(mysqli_query($connect, "select * from petugas where PetugasID='$PetugasID'"))
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div style="text-align: end; padding-right: 10%;">
        <a href="profile.php?PetugasID=<?php echo $PetugasID ?>">Profil</a>
    </div>
    <h1>Beranda</h1>
    <p>Nama Petugas:
        <?php echo $PID['NamaPetugas'] ?>
    </p>
    <p>Status:
        <?php echo $PID['role'] ?>
    </p>
    <p> <a href="pendataanBarang.php?PetugasID=<?php echo $PetugasID ?>">Pendataan Barang</a></p>
    <p> <a href="dataPembelian.php?PetugasID=<?php echo $PetugasID ?>">Pembelian</a></p>
    <p> <a href="stokBarang.php?PetugasID=<?php echo $PetugasID ?>">Stok Barang</a></p>
    <?php if ($PID['role'] == 'administrator') { ?>
    <p> <a href="petugas.php?PetugasID=<?php echo $PetugasID ?>">Petugas</a></p>
    <?php } ?>
    <p> <a style="color: red;" href="login.php">Keluar</a></p>
</body>

</html>