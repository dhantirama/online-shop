<?php
include"../../conn_dhanti.php";
$qry_genre = mysqli_query($conn,"SELECT * from genre");

	?>
	<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
Tambah Film
</div>
<form method="post" class="form-group" action="tambah_film_dhanti.php" enctype="multipart/form-data" style="margin-top:20px;">
	<select name="genre" class="form-control">
	<?php 
	while($genre=mysqli_fetch_assoc($qry_genre)){
	?>
			<option><?php echo $genre['genre']; ?></option>
			<?php } ?>
	</select><br>
	<input type="text" name="judul" placeholder="Judul Film" class="form-control"><br>
	<input type="text" name="tahun" placeholder="Tahun Film" class="form-control"><br>
	<input type="text" name="durasi" placeholder="Durasi Film" class="form-control"><br>
	<input type="file" name="gambar" placeholder="Gambar Film" class="form-control"><br>
	<input type="text" name="rate" placeholder="Rate Film" class="form-control"><br>
	<input type="text" name="harga" placeholder="Harga Film" class="form-control"><br>
	<input type="text" name="stok" placeholder="Stok Film" class="form-control"><br>
	<input type="submit" name="simpan" value="Simpan" class="btn btn-success"><br>
	</form>