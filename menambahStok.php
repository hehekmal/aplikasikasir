<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$ProdukID = $_POST['ProdukID'];
$tambahan = $_POST['tambahan'];
$produk = mysqli_query($connect, "select * from produk where ProdukID='$ProdukID'");
$produkr = mysqli_fetch_array($produk);
$ditambah = $produkr['Stok'] + $tambahan;
mysqli_query($connect, "update produk set Stok='$ditambah' where ProdukID='$ProdukID'");
header(header: "location: stokBarang.php?PetugasID=$PetugasID");