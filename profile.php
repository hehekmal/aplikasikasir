<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$petugas = mysqli_query($connect, "select * from petugas where PetugasID='$PetugasID'");
$dataPetugas = mysqli_fetch_array($petugas);
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
        .sensor {
            user-select: none;
            background-color: #000;
            color: #000;
        }
    </style>
</head>

<body>
    <h1>Profil</h1>
    <table>

        <tr>
            <td>Nama</td>
            <td>: <?php echo $dataPetugas['NamaPetugas'] ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>: <?php echo $dataPetugas['NomorTelepon'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $dataPetugas['Alamat'] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                : <span class="sensor"><?php echo $dataPetugas['Password'] ?></span><a href="gantipassword.php?PetugasID=<?php echo $PetugasID ?>">Ganti</a>

            </td>
        </tr>
    </table>
</body>

</html>