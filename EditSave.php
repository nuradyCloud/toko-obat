<?php
//mulai proses edit data
 
//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$idAgent        = $_POST['idAgent'];	//membuat variabel $idAgent dan datanya dari inputan idAgent
	$nameAgent      = $_POST['nameAgent'];	//membuat variabel $nameAgent dan datanya dari inputan nameAgent
	$addressAgent	= $_POST['addressAgent'];	//membuat variabel $addressAgent dan datanya dari inputan addressAgent
	$hpAgent	= $_POST['hpAgent'];	//membuat variabel $hpAgent dan datanya dari inputan hpAgent
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE karyawan_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE karyawan SET Nama='$nameAgent', Alamat='$addressAgent', No_HP='$hpAgent' WHERE ID_karyawan='$idAgent'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="Agent.php?id='.$idAgent.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="EditAgent.php?id='.$idAgent.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
}else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>