<html>
    <?php 
    $PetugasID=$_GET['PetugasID'];
    $ProdukID=$_GET['ProdukID'];
     ?>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
    <body>
    <h1>Tambah stok</h1>
        <form action="menambahStok.php?PetugasID=<?php echo $PetugasID ?>" method="post">
            <input type="hidden" name="ProdukID" value="<?php echo $ProdukID ?>">
            <input type="number" name="tambahan">
            <input type="submit">
        </form>
    </body>
</html>