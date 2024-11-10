<?php
include"../../conn_dhanti.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM genre WHERE id_genre='$bk'");
header("location:index.php?page=genre_dhanti");
 ?>