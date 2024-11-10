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
          
          <a class="navbar-brand" href="#" style="color:#fff; font-size:30px;">Run<b>Movies</b></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">

          <li style="background:#1F2544;color:#FFD0EC;"><a href="#"><span class="glyphicon glyphicon-user" style="color:#FFD0EC;"> <?php echo $nama; ?></span></a>
              <ul>
                <li style="background:#474F7A;color:#FFD0EC;"><a href="outpage_dhanti.php"><span class="glyphicon glyphicon-log-out">Keluar</span></a></li>
              </ul>
          </li>
        </ul>
          
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=genre_dhanti">Genre</a></li>
            <li><a href="index.php?page=film_dhanti">Film</a></li>
            <li><a href="index.php?page=customer_dhanti">Customer</a></li>
            <li><a href="index.php?page=laporan_dhanti">Laporan</a></li>
          </ul>
        </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
        	<?php
if(isset($_GET['page'])) {
	$page = $_GET['page'] . ".php";
	include ("$page");

} else {
	include ('home_dhanti.php');
}?>
</div>
</div>
        </div>
      </div>
    </div>
  </body>
</html>
