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
          
          <a class="navbar-brand" href="#" style="color:#FFD0EC; font-size:30px;">Dodol<b>BUKU.pol</b></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-home">Home</span></a></li>
          <li><a href="" style="color:#FFD0EC;" ><span class="glyphicon glyphicon-list">Genre</span></a>
<ul>
<li><?php include("gen_dhanti.php");?></li>

</ul>
</li>
          <li ><a href="index.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-home">About Us</span></a></li>
          <li ><a href="index.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-home">Review</span></a></li>
          <li class="a"><a href="cara_pesan_dhanti.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign">FAQ</span></a></li>
          <li class="a"><a href="login_dhanti.php" style="color:#fff;"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:30px;">
     <img src="img/book.jpg">   
    </div>
      <div class="col-md-6" style="margin-left:70px;">
        <h2><b>Selamat datang di toko buku murah.<h1>Dodol<b>BUKU.pol</b></h1></h2>
        <p>disini anda bisa membeli dan memesan buku dengan mudah, anda tinggal klik, maka buku sampai di tempat anda. tidak perlu lagi jauh jauh ke toko buku.</p>
      </div>
    </div>
    </div>
<div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#d74b35;color:#fff;line-height:60px;font-size:20px;">
<b>Film Kami</b>
</div>
    <div class="container">
      <div class="row">
      <?php
      @$idgen = $_GET['id'] ;
      $qryfilmgen = mysql_query("SELECT * from film where id_genre='$idgen'");
      $qryfilm= mysql_query("SELECT * from film");
      if($idgen==0){
      while($film = mysql_fetch_array($qryfilm)) {
      ?>
      
        <div class="col-md-4" style="margin-top:20px;">
        <div class="film">
        <center><img src="gambar/<?php echo $film['gambar'] ?>" style="margin-top:20px; width:200px;height:190px;"></center>
         <h3 style="text-align:center; color:#0000ff;"><?php echo $film['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $film['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $film['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail_dhanti.php?id=<?php echo $film['id_film'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
        <?php } }
        else{ while($film1 = mysql_fetch_array($qryfilmgen)){?>
            <div class="col-md-4" style="margin-top:20px;">
        <div class="film">
        <center><img src="gambar/<?php echo $film1['gambar'] ?>" style="margin-top:20px;width:200px;height:190px;"></center>
        <h3 style="text-align:center; color:#0000ff; "><?php echo $film1['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $film1['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $film1['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail_dhanti.php?id=<?php echo $film1['id_film'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
          <?php }} ?>
      </div>

      <hr>

      
    </div> 
     
      <div class="footer" style="width:100%;height:270px;color:#fff;background:#d74b35;">
      <div class="row" style="background:#7e7c78;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Tentang dodolBUKU</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>dodolBUKU</b> adalah</li>
          <li>Sebuah toko buku online</li>
          <li>yang menyediakan semua</li>
          <li>jenis buku dengan pemilihan</li>
          <li>berdasarkan kategori.</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Alamat Kami</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl.Bandar Alim No.1</li>
          <li>Bandar Alim, Demangan</li>
          <li>Tanjung anom, Naganjuk</li>
          <li>Jawa Timur, Indonesia</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Contact Us</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href=""><img src="images/fb.png" style="width:70px;height:75px;  "></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="images/gp.png" style="width:70px;height:75px;"></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="images/Twitter.png" style="width:70px;height:75px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>&copy; 2016 Karya anak bangsa.</center>
        </div>
      </div>
  </body>
</html>