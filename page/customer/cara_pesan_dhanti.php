<?php
include"../../config_dhanti.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../../login_dhanti.php");
}
$nama = $_SESSION['nama'];
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
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
          <li ><a href="index.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-home">Home |</span></a></li>
          <li class="a"><a href="detail_dhanti.php?page=keranjang_dhanti" style="color:#FFD0EC;"><span class="glyphicon glyphicon-shopping-cart">Keranjang |<?php
          include"../../conn_dhanti.php";
          $qcek=mysqli_query($conn,"SELECT * from keranjang where id_pembeli='$_SESSION[id_pembeli]'");
          $cek=mysqli_num_rows($qcek); 
          $q_cekout= mysqli_query($conn,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cekout = mysqli_num_rows($q_cekout);
          if($cekout>=1)
          {
          echo "0";
          }
          else{
          echo $cek;
          }  ?>] | </span></a></li>
          <li><a href="" style="color:#FFD0EC;" ><span class="glyphicon glyphicon-list">Genre | </span></a>
<ul>
<li><?php include("gen_dhanti.php");?></li>

</ul>
</li>
         <li class="a"><a href="cara_pesan_dhanti.php" style="color:#FFD0EC;"><span class="glyphicon glyphicon-question-sign">FAQ | </span></a></li>

         <?php
         include"../../conn_dhanti.php";
         $q_cek_cekout = mysqli_query($conn,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cek_cekout = mysqli_num_rows($q_cek_cekout);
          if($cek_cekout>=1){
          $queri_cek = mysqli_query($conn,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='sudah diterima'");
          $cek = mysqli_num_rows($queri_cek);
          if($cek>=1)
          {?>
          <li><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check" style="color:#FFD0EC;"> Konfirmasi | </span></a></li><?php
          }else{
          ?>
          <li><a href="cara_pesan_dhanti.php?page=konfirmasi"><span class="glyphicon glyphicon-check" style="color:#FFD0EC;"> Konfirmasi | </span></a></li>
          <?php }} ?>

         
           <li><a href="#"><span class="glyphicon glyphicon-user" style="color:#FFD0EC;"> <?php echo $nama; ?></span></a>
                <ul>
                  <li><a href="../admin/outpage_dhanti.php"><span class="glyphicon glyphicon-log-out">Keluar</span></a></li>
                </ul>
          </li>
          
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <?php
    @$page= $_GET['page'];
    if($page=="pembelian_selesai")
    {
      include("pembelian_selesai_dhanti.php");
    }
    else if($page=="konfirmasi")
    {
      include("konfirmasi_dhanti.php");
    }
    else{
    ?>
 <div id="banner" class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:auto;"> 
      <img src="../../img/resting.png" width="300"> 
    </div>
      <div class="col-md-6" style="margin:auto; margin-top: 40px;">
        <h2 style="color:#FFD0EC;"><b>Selamat datang di rumah koleksi kami<h1 style="color:#BEAEE2;">Run<b>Movies</b></h1></h2>
        <p style="color:#FFD0EC;">RunMovies adalah tempatnya koleksi movies terbaik sepanjang masa</p>
      </div>
    </div>
    </div>
    <div style="margin-top: 0px; width:100%,height:50px;text-align:center;background:#1F2544;color:#FFD0EC;line-height:60px;font-size:40px;">
Cara Pesan
</div>
<div class="body" style="margin-top:-30px;color:#FFD0EC;">
      <div class="row" style="margin:20px;">
<p><h3><b>1. Pilih View Details untuk memasukkan barang ke dalam keranjang.<br>
        <b>2. Pastikan anda sudah terdaftar sebagai anggota sebelum memesan<br>
          2. Pembayaran hanya dapat dilakukan melalui rekening bank kami<br>
          3. Setelah melakukan pembayaran, konfirmasi pembayaran telah selesai<br>
          <br>
		<p style="color:#FFE4C9;">Jl. Menteng Sukabumi, Jakarta Pusat, BCA: 8780350475  Atas Nama: Ramadhanti.
		</p>
		<br>
          4. File akan dikirimkan MAX 1 hari setelah pembayaran lewat e-mail yang tercantum<br>
          5. Jika terjadi kerusakan file, harap segera menghubungi MAX 2 hari setelah file diterima<br>
          6. Lewat dari MAX 2 hari maka file akan kami anggap dalam keadaan baik<br><br></b></p>
		<p style="color:red;">* Harga barang belum termasuk ongkos kirim, dan ongkos kirim akan disesuaikan dengan tujuan pengiriman.</p></h3>
	


      <hr>
      <?php } ?>

      
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
          <li style="color:#FFD0EC;"><h3><b>Temukan Kami:</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-3">
          <a href="https://www.linkedin.com/in/dhantirama/"><img src="../../images/2.png" style="width: 50px;px;height:40px;  "></a>
          </div>
          <div class="col-md-3">
          <a href="https://www.instagram.com/_dhntrama/"><img src="../../images/1.png" style="width: 50px;px;height:40px;"></a>
          </div>
          <div class="col-md-3">
          <a href="https://github.com/dhantirama"><img src="../../images/3.png" style="width:50px;height:40px;"></a>
          </div>
          <div class="col-md-3">
          <a href="https://web.whatsapp.com/"><img src="../../images/4.png" style="width:50px;height:40px;"></a>
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

