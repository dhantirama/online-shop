<?php
include"../../conn_dhanti.php";
	$id_film = $_POST['id_film'];
	$judul = $_POST['judul'];
	$tahun = $_POST['tahun'];
	$durasi = $_POST['durasi'];
	$rate = $_POST['rate'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$genre= $_POST['genre'];
	$qryid = mysqli_query($conn,"SELECT * FROM genre where genre='$genre'");
	$data = mysqli_fetch_assoc($qryid);
	$id_genre = $data['id_genre'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000;


if($_FILES['gambar']['name']){
	
	if(!$_FILES['gambar']['error']){

		$new_file_name = strtolower($_FILES['gambar']['tmp_name']); 
		if($_FILES['gambar']['size'] > $max_size)
			$valid_file	= false;
			$message	= 'Maaf, file terlalu besar. Max: 1MB';
		}
	
		$image_path = pathinfo($_FILES['gambar']['name'],PATHINFO_EXTENSION); 
		$extension = strtolower($image_path); 

		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" ) {
			$valid_file = false;
			$message	= "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG & GIF. #".$extension;
		}



	
		if($valid_file == true)
		{
		
			$rename_nama_file	= date('YmdHis');
			$nama_file_baru		= $rename_nama_file.'.'.$extension;


			
			mysqli_query($conn,"UPDATE film set judul='$judul',id_genre='$id_genre',tahun='$tahun',durasi='$durasi',rate='$rate',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_film='$id_film'");
		
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/'.$nama_file_baru);
			header("location:index.php?page=film_dhanti");
		}
	}
	
	else
	{

		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['gambar']['error'];
	}
?>