<?php
include('connect.php');
$NamaPetugas = $_POST['NamaPetugas'];
$Password = $_POST['Password'];
$check = mysqli_query($connect, "select * from petugas where NamaPetugas='$NamaPetugas' and Password='$Password'");
$cNamePassword = mysqli_num_rows($check);
if ($cNamePassword > 0) {
    $id = mysqli_fetch_array($check);
    $PetugasID = $id['PetugasID'];
    header(header: "location: home.php?PetugasID=$PetugasID");
} else {
    header(header: "location: login.php?salah=Nama atau Password salah");
}
