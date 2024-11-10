<?php
include"../../conn_dhanti.php";
$cus=$_GET['id'];
mysqli_query($conn,"DELETE FROM customer WHERE id_pembeli='$cus'");
header("location:index.php?page=customer_dhanti");
?>