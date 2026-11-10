<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$ProdukID = $_GET['ProdukID'];
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];

// $check = mysqli_query($connect, "select * from produk where NamaProduk='$NamaProduk'");
// $cProduk = mysqli_num_rows($check);

if ($NamaProduk == '' || $Harga == '') {
    header(header: "location: editBarang.php?ProdukID=$ProdukID&PetugasID=$PetugasID&salah=Nama atau harga tidak boleh kosong");
// } elseif ($cProduk > 1) {
//     header(header: "location: editBarang.php?ProdukID=$ProdukID&PetugasID=$PetugasID&salah=Nama barang sama dengan nama barang lain");
} else {
    mysqli_query($connect, "update produk set NamaProduk = '$NamaProduk',Harga = '$Harga' where ProdukID='$ProdukID'");
    header(header: "location: pendataanBarang.php?PetugasID=$PetugasID");
}
