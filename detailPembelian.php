<html>
<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$penjualan = mysqli_query($connect, "select * from penjualan order by PenjualanID desc limit 1");
$penjualarr = mysqli_fetch_array($penjualan);
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Detail Pembelian</h1>
    <p></p>
    <form action="menambah detail" method="post">

    </form>
</body>

</html>