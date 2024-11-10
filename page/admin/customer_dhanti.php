<?php
include"../../conn_dhanti.php";
$q = mysqli_query($conn,"SELECT * FROM customer");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#474F7A;color:#FFD0EC;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>DATA CUSTOMER</b>
</div>
<table class="table table-bordered" style="margin-top:15px;margin-left:17px; width:96%; background:#474F7A;color:#FFD0EC;";>
		<th style=" background: #E6E6FA; color:#1F2544 "><center>Nama Customer</center></th>
 		<th style=" background: #E6E6FA; color:#1F2544 ""><center>Username</center></th>
 		<th style=" background: #E6E6FA; color:#1F2544 ""><center>Password</center></th>
 		<th style=" background: #E6E6FA; color:#1F2544 ""><center>Aksi</center></th>
	<?php while($c=mysqli_fetch_assoc($q)){?>
	<tr>
		<td><?php echo $c['nama']; ?></td>
 		<td><?php echo $c['username']; ?></td>
 		<td><?php echo $c['password']; ?></td>
 		<td><center><a href="hapus_cus_dhanti.php?id=<?php echo $c['id_pembeli']; ?>" style="color:#FFD0EC"><span class="glyphicon glyphicon-trash"></span></a></center></td>
	</tr>
	<?php } ?>
</table>