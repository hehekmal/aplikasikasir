<html>
<?php
$PetugasID = $_GET['PetugasID'];
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Petugas</h1>
    <a href="home.php?PetugasID=<?php echo $PetugasID ?>">Beranda</a>
    <a href="register.php?PetugasID=<?php echo $PetugasID ?>">Registrasi Petugas</a>
    <table border="1">

        <tr>
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Role</th>
            <!-- <th>Aksi</th> -->
            <!-- <th>Aksi</th> -->
        </tr>
        <?php
        include('connect.php');
        $no = 1;
        $produkquery = mysqli_query($connect, "select * from petugas");
        while ($datapetugas = mysqli_fetch_array($produkquery)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $datapetugas['NamaPetugas'] ?></td>
                <td><?php echo $datapetugas['Alamat'] ?></td>
                <td><?php echo $datapetugas['NomorTelepon'] ?></td>
                <td><?php echo $datapetugas['role'] ?></td>
                <!-- <td>
                    <a href="editBarang.php?PetugasID=<?php echo $PetugasID ?>&PetugasID=<?php echo $datapetugas['PetugasID'] ?>">Edit</a>
                    <a href="hapusBarang.php?PetugasID=<?php echo $PetugasID ?>&PetugasID=<?php echo $datapetugas['PetugasID'] ?>">Hapus</a>
                </td> -->
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>