<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$idAgent        = $_POST['idAgent'];	//membuat variabel $idAgent dan datanya dari inputan idAgent
	$nameAgent      = $_POST['nameAgent'];	//membuat variabel $nameAgent dan datanya dari inputan nameAgent
	$addressAgent	= $_POST['addressAgent'];	//membuat variabel $addressAgent dan datanya dari inputan addressAgent
	$hpAgent	= $_POST['hpAgent'];	//membuat variabel $hpAgent dan datanya dari inputan hpAgent
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO karyawan VALUES('$idAgent', '$nameAgent', '$addressAgent', '$hpAgent')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="Agent.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="AddAgent.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>