<?php
include"../../conn_dhanti.php";
$no = 1;
$qry_genre = mysqli_query($conn,"SELECT * from genre");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#474F7A;color:#FFD0EC;line-height:60px;font-size:40px; margin-bottom:25px;">
<b>Data Genre</b>
</div>
<a href="index.php?page=genre_dhanti&aksi=input" class="btn btn-success" style="margin:17px;"><span class="glyphicon glyphicon-plus"> TAMBAH GENRE</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_genre_dhanti.php");
}
else if($aksi=="edit")
{
	include("edit_dhanti.php");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:15px;margin-left:17px; width:96%; background:#474F7A;color:#FFD0EC;">
 
	<th style=" background: #E6E6FA;color:#1F2544"><center>No.</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Genre</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Aksi</center></th>
	<?php
	 while($data = mysqli_fetch_assoc($qry_genre)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['genre'] ?></td>
	 <td><a href="index.php?page=genre_dhanti&aksi=edit&id=<?php echo $data['id_genre']; ?>" style="color:#FFD0EC"><center>|Edit <span class="glyphicon glyphicon-pencil"></span></a> | | <a href="hapus_genre_dhanti.php?id=<?php echo $data['id_genre']; ?>" style="color:#FFD0EC"><span class="glyphicon glyphicon-trash"></span>Hapus|</center></a></td>
	</tr>
	<?php } ?>
</table>
</div>