<?php
include ('koneksi.php');
 
echo '<h3>Data User</h3>
<a href="tambah_obat.php"><button type="submit" values="submi" class="btn btn-default">tambah</button></a>
<table>
<tr>
<th>ID_Obat</th>
<th>Nama</th>
<th>Hargat</th>
<th>Stok</th>
</tr>';
 
$i=0; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
//error salah select table, harusnya yang diseelct agen_penyalur bukan user. karena tidak ada table user
$tampil = "SELECT * FROM obat";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel obat
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "
 <tr>
 <td>".$data['ID_Obat']."</td>
 <td>".$data['Nama']."</td>
 <td>".$data['Harga']."</td>
 <td>".$data['Stok']."</td>
 </tr>";
 }
echo '</table>';
 
?>