<html>
<?php
$PetugasID=$_GET['PetugasID'];
?>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Daftar</h1>
    <form action="registerCheck.php?PetugasID=<?php echo $PetugasID ?>" method="post">
        <table>
            <tr>
                <td>Nama Petugas </td>
                <td>: <input type="text" name="NamaPetugas"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>: <input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>Nomor Telepon </td>
                <td>: <input type="text" name="NomorTelepon"></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>: <input type="password" name="Password"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <select name="role">
                    <option value="petugas">Petugas</option>
                    <option value="administrator">Administrator</option>
                </select></td>
            </tr>
        </table>
        <p style="color: red;"><?php
                                if (isset($_GET['salah'])) {
                                    $salah = $_GET['salah'];
                                    echo $salah;
                                }
                                ?></p>
        <p><input type="submit"></p>
    </form>

</body>

</html>
