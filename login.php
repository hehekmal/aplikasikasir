<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Masuk</h1>
    <form action="loginCheck.php" method="post">
        <table>
            <tr>
                <td>Nama Petugas</td>
                <td>: <input type="text" name="NamaPetugas"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="Password"></td>
            </tr>
        </table>
        <p><input type="submit"></p>
    </form>
    <p style="color: red;"><?php
                            if (isset($_GET['salah'])) {
                                $salah = $_GET['salah'];
                                echo $salah;
                            }
                            ?></p>
</body>

</html>