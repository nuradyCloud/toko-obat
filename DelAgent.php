<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=karyawan_id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=karyawan_id
	$id = $_GET['id'];
	
	//cek ke database apakah ada data karyawan dengan karyawan_id='$id'
	$cek = mysql_query("SELECT ID_karyawan FROM karyawan WHERE ID_karyawan='$id'") or die(mysql_error());
	
	//jika data karyawan tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table karyawan dengan kondisi WHERE karyawan_id='$id'
		$del = mysql_query("DELETE FROM karyawan WHERE ID_karyawan='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data karyawan berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<a href="Agent.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
			
		}else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="Agent.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>