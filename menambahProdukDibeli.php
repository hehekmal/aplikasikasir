<?php
include('connect.php');

$PetugasID = $_GET['PetugasID'];
$PenjualanID = $_GET['PenjualanID'];
$ProdukID = $_POST['ProdukID'];
$JumlahProduk = $_POST['JumlahProduk'];
if ($JumlahProduk < 1) {
    header("location: tambahProdukDibeli.php?PetugasID=$PetugasID&PenjualanID=$PenjualanID");
} else {
    $produk = mysqli_query($connect, "select * from produk where ProdukID='$ProdukID'");
    $produkarr = mysqli_fetch_array($produk);
    $Subtotal = $JumlahProduk * $produkarr['Harga'];
    mysqli_query($connect, "insert into detailPenjualan (DetailID,PenjualanID,ProdukID,JumlahProduk,Subtotal)values('','$PenjualanID','$ProdukID','$JumlahProduk','$Subtotal')");
    header("location: inputdetailPembelian.php?PetugasID=$PetugasID&PenjualanID=$PenjualanID");
}
