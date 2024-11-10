<?php 
include"../../conn_dhanti.php";
$no = 1;
$qry_film = mysqli_query($conn,"SELECT * from film");
?>
<div style="margin-top:30px;width:100px,height:50px;text-align:center;background:#474F7A;color:#FFD0EC;line-height:80px;font-size:45px;">
<b>Data Film</b>
</div>
<a href="index.php?page=input_film_dhanti" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH FILM</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_film_dhanti.php");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;background:#474F7A;color:#FFD0EC;">
 
	<th style=" background: #E6E6FA; color:#1F2544;"><center>No.</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Judul</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Tahun</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Durasi</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Gambar</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Rate</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Harga</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Stok</center></th>
	<th style=" background: #E6E6FA;color:#1F2544"><center>Aksi</center></th>
	<?php while($data = mysqli_fetch_assoc($qry_film)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['judul'] ?></td>
	 <td><?php echo $data['tahun'] ?></td>
	 <td><?php echo $data['durasi'] ?></td>
	 <td><center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center></td>
	 <td><?php echo $data['rate'] ?></td>
	 <td>Rp.<?php echo number_format($data['harga']); ?>,-</td>
	 <td><?php echo $data['stok'] ?></td>
	 <td><a href="index.php?page=editfilm_dhanti&id=<?php echo $data['id_film']; ?>"><center>Edit<span class="glyphicon glyphicon-pencil"></span></a> <a href="hapus_film_dhanti.php?id=<?php echo $data['id_film']; ?>" ><span class="glyphicon glyphicon-trash"></span>Hapus</center></a></td>
	</tr>
	<?php } ?>
</table>
</div>