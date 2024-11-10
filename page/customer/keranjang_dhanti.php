<?php
include"../../conn_dhanti.php";
$id_pembeli = $_SESSION['id_pembeli'];
$qry = mysqli_query($conn,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
@$aksi = $_GET['aksi'];
if($aksi=="hapus"){
	$id_keranjang = $_GET['id'];
	$query_qty = mysqli_query($conn,"SELECT * from keranjang where id_keranjang='$id_keranjang'");
	$data_qty = mysqli_fetch_assoc($query_qty);
	$qty = $data_qty['qty'];
	$id_film = $data_qty['id_film'];
	$query_film = mysqli_query($conn,"SELECT * from film where id_film='$id_film'");
	$data_film = mysqli_fetch_assoc($query_film);
	$stok = $data_film['stok'];
	$stok_ubah = $stok+$qty;
	mysqli_query($conn,"UPDATE film set stok='$stok_ubah' where id_film='$id_film'");
	mysqli_query($conn,"DELETE from keranjang where id_keranjang='$id_keranjang'");
	header("location:detail_dhanti.php?page=keranjang");
}
?>
<div class="jumbotron">
<table class="table table-bordered">
	<th>Judul film</th><th>Harga</th><th>QTY</th><th>Total Harga</th><th>Aksi</th>
	<?php while($keranjang=mysqli_fetch_assoc($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($conn,"SELECT * from film where id_film='$keranjang[id_film]'");
		$d = mysqli_fetch_assoc($q);
		$judul = $d['judul']; echo $judul;
		$qbyar = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?></td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		<td><a href="keranjang_dhanti.php?aksi=hapus&id=<?php echo $keranjang['id_keranjang']; ?>"><center><span class="glyphicon glyphicon-remove"></span></a>
		</tr>
<?php } ?>
<tr>
	<td colspan="3"><b>Total Bayar</b></td><td><?php echo @$bayar;  ?></td>
	<td><center><a href="detail_dhanti.php?aksi=checkout" class="btn btn-info">Checkout</a></center></td>
</tr>
</table>
</div>