<?php
 
include ('koneksi.php');
echo '<h3>Data User</h3>
<table>
<tr>
<th>ID_Pelanggan</th>
<th>ID_Karyawan</th>
<th>ID_Obat</th>
<th>Jumlah</th>
</tr>';
 
$i=0; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
//error salah select table, harusnya yang diseelct agen_penyalur bukan user. karena tidak ada table user
$tampil = "SELECT * FROM faktur_penjualan";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel faktur_penjualan
echo mysql_error();
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "
 <tr>
 <td>".$data['ID_Pelanggan']."</td>
 <td>".$data['ID_Karyawan']."</td>
 <td>".$data['ID_Obat']."</td>
 <td>".$data['Jumlah']."</td>
 </tr>";
 }
echo '</table>';
 
?>