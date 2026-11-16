<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$salah = "";
if (isset($_POST['oldpassword'])) {
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];

    $petugas = mysqli_query($connect, "select * from petugas where PetugasID='$PetugasID'");
    $petugasarr = mysqli_fetch_array($petugas);
    if ($oldpassword == $petugasarr['Password']) {
        mysqli_query($connect, "update petugas set Password='$newpassword' where PetugasID='$PetugasID'");
        header("location: profile.php?PetugasID=$PetugasID");
    } else {
        $salah = "password lama salah";
    }
}
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Ganti Password</h1>
    <a href="profile.php?PetugasID=<?php echo $PetugasID ?>">Kembali</a>
    <form action="gantipassword.php?PetugasID=<?php echo $PetugasID ?>" method="post">
        <table>
            <tr>
                <td>Password Lama</td>
                <td>: <input type="text" name="oldpassword" placeholder="password lama"></td>
            </tr>
            <tr>
                <td>Password Baru</td>
                <td>: <input type="text" name="newpassword" placeholder="password baru"></td>
            </tr>
        </table>
        <p style="color: red;"><?php echo $salah ?></p>
        <button type="submit">Ganti</button>
    </form>
</body>

</html>