<?php
include"conn_dhanti.php";
$id = $_GET['id'];
$qry = mysqli_query($conn,"SELECT * from film where id_film='$id'");
$data = mysqli_fetch_assoc($qry);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>RunMovies</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

  <nav class="navbar navbar-default navbar-fixed-top" style="background:#1F2544;">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#" style="color:#FFD0EC;">RunMovies</a>
        </div>
        <div class="collapse navbar-collapse">

        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li class="a"><a href="" style="color:#FFD0EC;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang | </span></a></li>
          <li><a href="" style="color:#FFD0EC;" ><span class="glyphicon glyphicon-list"> Genre | </span></a>
<ul>
<li><?php include("gen_dhanti.php");?></li>

</ul>
</li>
<li class="a"><a href="cara_pesan_dhanti.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-question-sign">FAQ</span></a></li>
          <li class="a"><a href="login_dhanti.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div id="banner" class="jumbotron">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="gambar/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <table style="color:#FFD0EC;">
        	<tr>
        		<h3><td><b>Judul</b></td>		<td>: <?php echo $data['judul']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Tahun</b></td>		<td>: <?php echo $data['tahun']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Durasi</b></td>		<td>: <?php echo $data['durasi']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Rate</b></td>		<td>: <?php echo $data['rate']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Harga</b></td>		<td>: <?php echo $data['harga']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Stok</b></td>		<td>: <?php echo $data['stok']; ?></td></h3>
        	</tr>
        </table><br><br>
         <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>">
         <a href="login_dhanti.php?pesan=a" class="btn btn-success">Beli</a>
        </div>
    </div>
    </div>

    <div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#1F2544;color:#FFD0EC;line-height:60px;font-size:40px;">
<b>Recomendeed</b>
</div>
<div class="container">
      <div class="row">
      <?php
      include"conn_dhanti.php";
      $qryfilm= mysqli_query($conn,"SELECT * from film");
      while($film = mysqli_fetch_assoc($qryfilm)) {
      ?>

      <div class="col-md-3" style="margin-top:20px;">
        <div class="film">
        <center><img src="gambar/<?php echo $film['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h3 style="text-align:center; color:#f97b61;"><?php echo $film['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $film['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $film['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail_dhanti.php?id=<?php echo $film['id_film'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>

        <?php } ?>
      </div>

      <hr>

      
    </div> 
    <div class="footer" style="width:100%;height:270px;color:#FFD0EC;background:#1F2544;">
      <div class="row" style="background:#474F7A;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#FFD0EC"><h3><b>DISCLAIMER</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li>Harap Memperhatikan Jumlah Pembelian Barang.</li>
          <li>Baca Petunjuk Pemesanan Sebelum Memesan</li>
          <li>Barang yang Sudah Dibeli Tidak Dapat Dikembalikan</li>
          <li>Apabila Terjadi Error Saat Pengunduhan File, Segera Hubungi Kami Dalam Kurun Waktu 24 Jam</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#FFD0EC"><h3><b>Alamat:</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl. Apa Adanya</li>
          <li>Sukabumi, Sumatera Barat</li>
          <li>Nusanatara</li>
          <li>Kepulauan Asia</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <ul>
          <li style="color:#FFD0EC;"><h3><b>Temukan Kami:</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href="https://www.linkedin.com/in/dhantirama/"><img src="images/2.png" style="width:55px;height:40px;  "></a>
          </div>
          <div class="col-md-4">
          <a href="https://www.instagram.com/_dhntrama/"><img src="images/1.png" style="width:55px;height:40px;"></a>
          </div>
          <div class="col-md-4">
          <a href="https://github.com/dhantirama"><img src="images/3.png" style="width:55px;height:40px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>CopyRights &copy; 2024 | Re-Design by dhanram.my.id </center>
        </div>
      </div>
  </body>
</html>
