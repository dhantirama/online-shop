<?php
include"../../conn_dhanti.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM film WHERE id_film='$bk'");
header("location:index.php?page=film_dhanti");
 ?>