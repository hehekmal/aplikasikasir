<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$Alamat = $_POST['Alamat'];
$NomorTelepon = $_POST['NomorTelepon'];

$check = mysqli_query($connect, "select * from pelanggan where NamaPelanggan='$NamaPelanggan' and NomorTelepon='$NomorTelepon'");
$cProduk = mysqli_num_rows($check);

if ($NamaPelanggan == '' || $Alamat == '' || $NomorTelepon == '') {
    header(header: "location: pembelian.php?PetugasID=$PetugasID&salah=Nama, alamat, atau Nomor tidak boleh kosong");
} elseif ($cProduk > 0) {
    header(header: "location: pembelian.php?PetugasID=$PetugasID&salah=Pelanggan sudah ada");
} else {
    mysqli_query($connect, "insert into pelanggan (PelangganID,NamaPelanggan,Alamat,NomorTelepon) values ('','$NamaPelanggan','$Alamat','$NomorTelepon')");
    header(header: "location: pembelian.php?PetugasID=$PetugasID&ditambah=Pelanggan telah ditambahkan");
}
