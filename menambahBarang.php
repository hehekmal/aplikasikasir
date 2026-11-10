<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];

$check = mysqli_query($connect, "select * from produk where NamaProduk='$NamaProduk' and Harga='$Harga'");
$cProduk = mysqli_num_rows($check);

if ($NamaProduk == '' || $Harga == '') {
    header(header: "location: tambahBarang.php?PetugasID=$PetugasID&salah=Nama atau harga tidak boleh kosong");
} elseif ($cProduk > 0) {
    header(header: "location: tambahBarang.php?PetugasID=$PetugasID&salah=Nama barang sudah ada");
} else {
    mysqli_query($connect, "insert into produk (ProdukID,NamaProduk,Harga,Stok) values ('','$NamaProduk','$Harga','0')");
    header(header: "location: pendataanBarang.php?PetugasID=$PetugasID");
}
