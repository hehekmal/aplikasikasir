<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$PenjualanID = $_GET['PenjualanID'];
$dibayar = $_POST['dibayar'];

$penjualan = mysqli_query($connect, "select * from penjualan where PenjualanID='$PenjualanID'");
$penjualanarr = mysqli_fetch_array($penjualan);

$dpenjualan = mysqli_query($connect, "select * from detailPenjualan where PenjualanID='$PenjualanID'");


while ($dpenjualanarr = mysqli_fetch_array($dpenjualan)) {
    $ProdukID = $dpenjualanarr['ProdukID'];
    $produk = mysqli_query($connect, "select * from produk where ProdukID='$ProdukID'");
    $produkarr = mysqli_fetch_array($produk);
    $Stok=$dpenjualanarr['Stok'];
}
$total = $penjualanarr['TotalHarga'];
$kembalian = $dibayar - $total;
$penjualan = mysqli_query($connect, "update penjualan set dibayar='$dibayar', kembalian='$kembalian' where PenjualanID='$PenjualanID'");

header("location: detailPembelian.php?PetugasID=$PetugasID&PenjualanID=$PenjualanID");
