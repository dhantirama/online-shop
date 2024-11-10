<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include"../../conn_dhanti.php";
$e=$_GET['id'];
$edit=mysqli_query($conn,"SELECT * FROM film WHERE id_film='$e'");
$film = mysqli_fetch_assoc($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#474F7A;color:#FFD0EC;line-height:60px;font-size: 40px;margin-bottom:20px;">
Edit Film
</div>
<form action="update_film_dhanti.php" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_film" class="form-control" value =" <?php  echo $film['id_film'];?>">
 		<b>Genre Film :</b><select name="genre" class="form-control">
 			<?php
 			$d = mysqli_query($conn,"SELECT * from genre");
 			while($data = mysqli_fetch_assoc($d)){ ?>;
 			<option> <?php echo $data['genre']; ?> </option>
 			<?php } ?>
	</select><br>
 		<b>Judul Film :</b> <input type="text" name="judul" class="form-control" value =" <?php  echo $film['judul'];?>" ><br>
 		<b>Tahun Film :</b><input type="text" name="tahun" class="form-control" value =" <?php  echo $film['tahun'];?>"><br>
 		<b>Durasi Film : </b><input type="text" name="durasi" class="form-control" value =" <?php  echo $film['durasi'];?>"><br>
 		<b>Gambar Film : </b><input type="file" name="gambar" class="form-control" value =" <?php  echo $film['gambar'];?>" ><br>
 		<b>Rate Film : </b><input type="text" name="rate" class="form-control" value =" <?php  echo $film['rate'];?>"><br>
 		<b>Harga Film : </b><input type="text" name="harga" class="form-control" value =" <?php  echo $film['harga'];?>" ><br>
 		<b>Stok Film : </b><input type="text" name="stok" class="form-control" value =" <?php  echo $film['stok'];?>" ><br>
 		<td><input type="submit" class="btn btn-success" value="Simpan">
</form>