<form method="post" class="form-group">
	<div class="col-md-8" style="margin-bottom:20px;">
	<input type="text" name="genre" placeholder="Genre Baru" style="width:600px;" class="form-control">
	</div>
	<div class="col-md-1">
	<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
	</div>
</form>
<?php
include"../../conn_dhanti.php";
@$sim = $_POST['simpan'];
if($sim)
{
	$genre = $_POST['genre'];
	mysqli_query($conn,"INSERT into genre set genre='$genre'");
	header("location:index.php?page=genre_dhanti");
}
?>