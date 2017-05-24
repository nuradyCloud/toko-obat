<?php
include ('koneksi.php');

echo '<h3>Data User</h3>
<table>
<tr>
<th>ID_Pelanggan</th>
<th>ID_Obat</th>
<th>Namat</th>
<th>Alamat</th>
</tr>';
 
$i=0; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
//error salah select table, harusnya yang diseelct agen_penyalur bukan user. karena tidak ada table user
$tampil = "SELECT * FROM pelanggan";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel pelanggan
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "
 <tr>
 <td>".$data['ID_Pelanggan']."</td>
 <td>".$data['ID_Obat']."</td>
 <td>".$data['Nama']."</td>
 <td>".$data['Alamat']."</td>
 </tr>";
 }
echo '</table>';
 
?>