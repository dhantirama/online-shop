<?php
include"../../conn_dhanti.php";
$q = mysqli_query($conn,"SELECT * FROM chekout");
@$act = $_GET['act'];
if($act=="detail")
{
	include("detail_pembelian_dhanti.php");
}else{
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#474F7A;color:#FFD0EC;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>Laporan Transaksi</b>
</div>
<table class="table table-bordered" style="margin-top:15px;margin-left:17px; width:96%; background:#474F7A;color:#FFD0EC;">
		<th style=" background: #E6E6FA; color:#1F2544 "><center>Nama Customer</center></th>
 		<th style=" background: #E6E6FA; color:#1F2544 "><center>Tanggal Order</center></th>
 		<th style=" background: #E6E6FA; color:#1F2544 "><center>Status Terima</center></th>
 		<th style=" background: #E6E6FA; color:#1F2544 "><center>Aksi</center></th>
	<?php while($c=mysqli_fetch_assoc($q)){?>
	<tr>
		<td><center><?php $data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from customer where id_pembeli='$c[id_pembeli]'"));$nama=$data['nama']; echo $nama; ?></center></td>
 		<td><center><?php echo $c['tanggal']; ?></center></td>
 		<td><center><?php echo $c['status_terima']; ?></center></td>
 		<td><center><a href="index.php?page=laporan_dhanti&act=detail&id=<?php echo $c['id_pembeli']; ?>" style="color:#FFD0EC"><span class="glyphicon glyphicon-eye-open"></span></a> | <a href="konfirmasi_transaksi_dhanti.php?id=<?php echo $c['id_chekout']; ?>&id_pembeli=<?php echo $c['id_pembeli']; ?>" style="color:#FFD0EC"><span class="glyphicon glyphicon-check"></span></a></center></td>
	</tr>
	<?php }} ?>
</table>