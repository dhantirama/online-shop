<?php
include"config_dhanti.php";
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


        <div class="nav navbar-nav navbar-right" style="background-color: #1F2544;">
         <ul id="nav">
          <li><a href="index.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-home">Home |</span></a></li>
          <li><a href="" style="color:#FFD0EC;" ><span class="glyphicon glyphicon-list">Genre |</span></a>
<ul>
<li><?php include("gen_dhanti.php");?></li>

</ul>
</li>
          <li><a href="#about" style="color:#FFD0EC;"><span class="glyphicon glyphicon-check">About Us |</span></a></li>
          <li><a href="#review" style="color:#FFD0EC;"><span class="glyphicon glyphicon-thumbs-up">Review |</span></a></li>
          <li class="a"><a href="cara_pesan_dhanti.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-question-sign">FAQ |</span></a></li>
          <li class="a"><a href="login_dhanti.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-log-in">Login |</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div id="banner" class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:auto;"> 
      <img src="img/resting.png" width="300"> 
    </div>
      <div class="col-md-6" style="margin:auto; margin-top: 40px;">
        <h2 style="color:#FFD0EC;"><b>Selamat datang di rumah koleksi kami<h1 style="color:#BEAEE2;">Run<b>Movies</b></h1></h2>
        <p style="color:#FFD0EC;">RunMovies adalah tempatnya koleksi movies terbaik sepanjang masa</p>
      </div>
    </div>
    </div>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="img/video.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p class="fst-italic" style="color: #1F2544;">
            "Website ini menawarkan koleksi film yang beragam dan lengkap untuk dinikmati, mulai dari film terbaru hingga klasik favorit, dengan opsi pembelian dan penyewaan untuk memenuhi kebutuhan hiburan Anda."</p>
            <h3>“Semua yang dibutuhkan adalah keyakinan dan kepercayaan.” – Peter Pan</h3>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
<div style="margin-top: 0px; width:100%,height:50px;text-align:center;background:#1F2544;color:#FFD0EC;line-height:60px;font-size:40px;">
<b>Recomendeed</b>
</div>
    <div class="container">
      <div class="row">
      <?php
      include"conn_dhanti.php";
      @$idgen = $_GET['id'] ;
      $qryfilmgen = mysqli_query($conn,"SELECT * from film where id_genre='$idgen'");
      $qryfilm= mysqli_query($conn,"SELECT * from film");
      if($idgen==0){
      while($film = mysqli_fetch_assoc($qryfilm)) {
      ?>
      
        <div class="col-md-3" style="margin-top:20px;">
        <div class="film">
        <center><img src="gambar/<?php echo $film['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h3 style="text-align:center;color:#FFD0EC;"><?php echo $film['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $film['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $film['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail_dhanti.php?id=<?php echo $film['id_film'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
        <?php } }
        else{ while($film1 = mysqli_fetch_assoc($qryfilmgen)){?>
            <div class="col-md-3" style="margin-top:20px;">
        <div class="film">
        <center><img src="gambar/<?php echo $film1['gambar'] ?>" style="margin-top:20px;width:210px;height:190px;"></center>
        <h3 style="text-align:center; color:#FFD0EC; "><?php echo $film1['judul'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $film1['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $film1['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail_dhanti.php?id=<?php echo $film1['id_film'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
          <?php }} ?>
      </div>

      <hr>

  
    </div> 
    
   
  <section id="review" class="review">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:#FFD0EC;">Apa Kata Mereka</h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span style="color:#BEAEE2;font-size:30px">01</span>
              <h4 style="color:#FFD0EC;">Nana</h4>
              <p style="color:#FFD0EC;">"Dengan adanya ulasan dan peringkat yang diberikan oleh pengguna lain, saya merasa lebih yakin dalam memilih film untuk dibeli, menghasilkan pengalaman belanja yang memuaskan."</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span style="color:#BEAEE2;font-size:30px">02</span>
              <h4 style="color:#FFD0EC;">Agus</h4>
              <p style="color:#FFD0EC;">"Website yang dapat diandalkan untuk mengunduh film berkualitas. Keamanan yang baik dan opsi resolusi yang fleksibel membuat pengalaman unduhan sangat memuaskan."</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span style="color:#BEAEE2;font-size:30px">03</span>
              <h4 style="color:#FFD0EC;">Fia</h4>
              <p style="color:#FFD0EC;">"Dengan kualitas gambar yang prima dan opsi unduhan yang cepat, situs ini menjadi tempat yang andal untuk menemukan film-film terbaru dan klasik dalam berbagai genre."</p>
            </div>
          </div>

        </div>

      </div>
    </section>
 
     
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
          <li style="color:#FFD0EC;"><h3><b>Temukan Kami:</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-3">
          <a href="https://www.linkedin.com/in/dhantirama/"><img src="images/2.png" style="width:50px;height:40px;  "></a>
          </div>
          <div class="col-md-3">
          <a href="https://www.instagram.com/_dhntrama/"><img src="images/1.png" style="width:50px;height:40px;"></a>
          </div>
          <div class="col-md-3">
          <a href="https://github.com/dhantirama"><img src="images/3.png" style="width:50px;height:40px;"></a>
          </div>
          <div class="col-md-3">
          <a href="https://web.whatsapp.com/"><img src="images/4.png" style="width:50px;height:40px;"></a>
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
