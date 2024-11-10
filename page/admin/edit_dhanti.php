<?php
include"../../conn_dhanti.php";
$a=$_GET['id'];
$genre=mysqli_query($conn,"SELECT * FROM genre WHERE id_genre='$a'");
$bo = mysqli_fetch_assoc($genre);
?>
<form action="update_gen_dhanti.php" method="post">
		<div class="col-md-8" style="margin-bottom:20px;">
 		<b>Nama Genre</b>
 		<input type="hidden" name="id_genre" value =" <?php  echo $bo['id_genre'];?> ">
 		<input type="text" name="genre" value ="<?php  echo $bo['genre'];?>" style="width:600px;" class="form-control">
 		</div>
 		<div class="col-md-1" style="margin-top:20px">
	<input type="submit" name="simpan" value="simpan" class="btn btn-success">
	</div>
</form>