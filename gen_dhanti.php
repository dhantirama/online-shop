<?php
include"conn_dhanti.php";
$gen = mysqli_query($conn,"SELECT * from genre");
while($data_gen = mysqli_fetch_assoc($gen)){
?>
<li><a href="index.php?id=<?php echo $data_gen['id_genre'] ?>"><?php echo $data_gen['genre']; ?></a></li>
<?php } ?>