<?php
include"../../conn_dhanti.php";
$a=$_POST['id_genre'];
$b=$_POST['genre'];

 mysqli_query($conn,"UPDATE genre SET   genre='$b' WHERE id_genre='$a'");
 header("location:index.php?page=genre_dhanti");
?>