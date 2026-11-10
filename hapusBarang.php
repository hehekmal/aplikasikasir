<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$ProdukID = $_GET['ProdukID'];
mysqli_query($connect, "delete from produk where ProdukID='$ProdukID'");
header(header: "location: pendataanBarang.php?PetugasID=$PetugasID");
