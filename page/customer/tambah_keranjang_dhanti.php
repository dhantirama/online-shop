<?php
include"../../conn_dhanti.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$q_aman = mysqli_query($conn,"SELECT * from chekout where id_pembeli='$id_pembeli'");
$aman = mysqli_num_rows($q_aman);
if($aman==0)

{
$id_film = $_POST['id_film'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$total_harga = $qty*$harga;
$qryfilm = mysqli_query($conn,"SELECT * from keranjang where id_film='$id_film'");
$q_stok = mysqli_query($conn,"SELECT * from film where id_film='$id_film'");
$d_stok = mysqli_fetch_assoc($q_stok);
$stok = $d_stok['stok'];
$siso_stok = $stok-$qty;
mysqli_query($conn,"UPDATE film set stok='$siso_stok' where id_film='$id_film'");
$data = mysqli_fetch_assoc($qryfilm);
$idfilm = $data['id_film'];
if($id_film==$idfilm)
{
	$q_qty = mysqli_query($conn,"SELECT * from keranjang where id_film='$id_film'");
	$data_qty = mysqli_fetch_assoc($q_qty);
	$qty1 = $data_qty['qty'];
	$qty2 = $qty1 + $qty;
	$tot = $harga * $qty2;
mysqli_query($conn,"UPDATE keranjang set id_pembeli='$id_pembeli',id_film='$id_film',qty='$qty2',harga='$harga',total_harga='$tot' where id_film='$id_film'");
header("location:detail_dhanti.php?page=keranjang");
}

else{
mysqli_query($conn,"INSERT into keranjang set id_pembeli='$id_pembeli',id_film='$id_film',qty='$qty',harga='$harga',total_harga='$total_harga'");
header("location:detail_dhanti.php?page=keranjang");
}
}
else if($aman>=1)
{
	header("location:index.php?pesan=blok");
}
?>