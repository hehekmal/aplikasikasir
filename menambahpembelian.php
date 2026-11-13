<?php
include('connect.php');
$PetugasID = $_GET['PetugasID'];
$PelangganID = $_POST['PelangganID'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];

if ($PelangganID == '' || $TanggalPenjualan == '') {
    header(header: "location: pembelian.php?PetugasID=$PetugasID&salah=Pelanggan atau Tanggal tidak boleh kosong");
} else {
    mysqli_query($connect, "insert into penjualan (PenjualanID,TanggalPenjualan,TotalHarga,PelangganID,PetugasID) values ('','$TanggalPenjualan','','$PelangganID','$PetugasID')");
    $penjualanlast = mysqli_query($connect, "select * from penjualan order by PenjualanID desc limit 1");
    $plastar=mysqli_fetch_array($penjualanlast);
    $penjualanID=$plastar['PenjualanID'];
    header(header: "location: inputdetailPembelian.php?PetugasID=$PetugasID&PenjualanID=$penjualanID");
}
