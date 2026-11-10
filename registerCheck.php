<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$NamaPetugas = $_POST['NamaPetugas'];
$Alamat = $_POST['Alamat'];
$NomorTelepon = $_POST['NomorTelepon'];
$Password = $_POST['Password'];
$check = mysqli_query($connect, "select * from petugas where NamaPetugas='$NamaPetugas' and NomorTelepon='$NomorTelepon'");
$cName = mysqli_num_rows($check);
if ($cName > 0) {
    header(header: "location: register.php?salah=Nama atau Nomor Telepon sudah ada");
} else {
    mysqli_query($connect, "insert into petugas (PetugasID,NamaPetugas,Password,Alamat,NomorTelepon) values ('','$NamaPetugas','$Password','$Alamat','$NomorTelepon')");
    header(header: "location: home.php?PetugasID=$PetugasID");
}
