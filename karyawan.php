<?php
include ('koneksi.php');
 
echo '<h3>Data User</h3>
<table>
<tr>
<th>ID_karyawan</th>
<th>Nama</th>
<th>Alamat</th>
<th>No_hp</th>
</tr>';
 
$i=0; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
//error salah select table, harusnya yang diseelct agen_penyalur bukan user. karena tidak ada table user
$tampil = "SELECT * FROM karyawan";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel karyawan
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "
 <tr>
 <td>".$data['ID_karyawan']."</td>
 <td>".$data['Nama']."</td>
 <td>".$data['Alamat']."</td>
 <td>".$data['No_HP']."</td>
 </tr>";
 }
echo '</table>';
 
?>