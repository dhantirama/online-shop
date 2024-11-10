<?php
include"conn_dhanti.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$qrycus = mysqli_query($conn,"SELECT * from customer where username='$username' && password='$password'");
$datacus = mysqli_fetch_assoc($qrycus);
$usercus = $datacus['username'];
$passcus = $datacus['password'];
if($usercus==$username && $passcus==$password)
{
	header("location:daftar_dhanti.php?pesan=sama");
}
else{
	mysqli_query($conn,"INSERT into customer set nama='$nama', username='$username', password='$password'");
header("location:logincustomer_dhanti.php?pesan=berhasil");
}
?>