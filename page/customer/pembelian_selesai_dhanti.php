<div style="margin-top: 0px; width:100%,height:50px;text-align:center;background:#1F2544;color:#FFD0EC;line-height:60px;font-size:40px;">
<b>Pembelian Selesai</b>
</div>
<?php
include"../../conn_dhanti.php";
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($conn,"SELECT * from  chekout where id_pembeli='$id_pembeli'");
$data_chekout = mysqli_fetch_assoc($query_checkout);
?>
<h3 style="color:#FFD0EC;"><b>Data Penerima:</b></h3>
<table style="color:#FFD0EC;">
	<tr>
		<td><p><b>Nama</b></p></td>  	<td>: <?php echo $data_chekout['nama']; ?></td>
	</tr>

	<tr>
		<td><p><b>Alamat</b></p></td>	<td>: <?php echo $data_chekout['alamat']; ?></td>
	</tr>

	<tr>
		<td><p><b>Nomor Telepon</b></p></td>	<td>: <?php echo $data_chekout['nomor_tlp']; ?></td>
	</tr>
</table>
<h3 style="color:#FFD0EC;"><b>Data Order</b></h3>
<?php
$qry = mysqli_query($conn,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
?>
<div class="jumbotron" style="color:#B4B4B8;">
<table class="table table-bordered" style="color:#1F2544;">
	<th>Judul film</th><th>Harga</th><th>Qty</th><th>Total Harga</th>
	<?php while($keranjang=mysqli_fetch_assoc($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($conn,"SELECT * from film where id_film='$keranjang[id_film]'");
		$d = mysqli_fetch_assoc($q);
		$judul = $d['judul']; echo $judul;
		$qbyar = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?>
			
		</td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		</tr>
<?php } ?>
<tr>
	<td colspan="3">Total harga keseluruhan</td><td><?php echo $bayar;  ?></td>
</tr>
<tr>
	<td colspan="3">Ongkos Kirim (Minimal)</td><td>Rp.20,000,00</td>
</tr>
<tr>	
	<td colspan="3">Total Bayar</td><td>Rp.<?php $t_bayar=$bayar+20000; echo number_format($t_bayar); ?>,00</td>
</tr>
</table>
<p style="color:#1F2544;">Selanjutnya anda harus megirimkan uang yang tertera pada total bayar ke <b>No. Rek: 111.222.33.444</b> atas nama <b>SITI CAROLINA MAX 1 hari setelah pemesanan</b>. Setelah melakukan pembayaran anda bisa mengonfirmasi melalui <b><a href="http://wa.me/749237384"> No.WA:749237384</a></b>. <a href="index.php" class="btn btn-danger"> Selesai</a> </p>
</div>
