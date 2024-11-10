<?php
include"../../conn_dhanti.php";
$genre = mysqli_query($conn,"SELECT * from genre");
while($get_data=mysqli_fetch_assoc($genre)){

	?><li style=""><a href="index.php?page=detail_dhanti&id=<?=$get_data['id_genre']?>">
		<?php echo $get_data['genre']?>
	</a></li>
	<?php
	}
?>
