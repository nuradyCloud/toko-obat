<!DOCTYPE html>
<html>
    <head>
        <title>Simple CRUD By nuradyCloud</title>
    </head>
    <body>
        <h2>Simple CRUD</h2>

        <p><a href="homenya.php">Beranda</a> / <a href="AddAgent.php">Add Data</a></p>

        <h3>Data Agent</h3>

        <table cellpadding="5" cellspacing="0" border="1">
            <tr bgcolor="#CCCCCC">
                <th>No.</th>
                <th>Agent ID</th>
                <th>Agent Name</th>
                <th>Address</th>
                <th>HP</th>
                <th>Option</th>
            </tr>

            <?php
            //iclude file koneksi ke database
            include('koneksi.php');

            //query ke database dg SELECT table karyawan diurutkan berdasarkan ID paling besar
            $query = mysql_query("SELECT * FROM karyawan ORDER BY ID_karyawan ASC") or die(mysql_error());

            //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
            if (mysql_num_rows($query) == 0) { //ini artinya jika data hasil query di atas kosong
                //jika data kosong, maka akan menampilkan row kosong
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            } else { //else ini artinya jika data hasil query ada (data di database tidak kosong)
                //jika data tidak kosong, maka akan melakukan perulangan while
                $no = 1; //membuat variabel $no untuk membuat nomor urut
                while ($data = mysql_fetch_assoc($query)) { //perulangan while dg membuat variabel $data yang akan mengambil data di database
                    //menampilkan row dengan data di database
                    echo '<tr>';
                    echo '<td>' . $no . '</td>'; //menampilkan nomor urut
                    echo '<td>' . $data['ID_karyawan'] . '</td>'; //menampilkan data id_karyawan dari database
                    echo '<td>' . $data['Nama'] . '</td>'; //menampilkan data nama lengkap dari database
                    echo '<td>' . $data['Alamat'] . '</td>'; //menampilkan data alamat dari database
                    echo '<td>' . $data['No_HP'] . '</td>'; //menampilkan data hp dari database
                    echo '<td><a href="EditAgent.php?id=' . $data['ID_karyawan'] . '">Edit</a> / <a href="DelAgent.php?id=' . $data['ID_karyawan'] . '" onclick="return confirm(\'Yakin Data Dihapus?\')">Delete</a></td>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=ID_karyawan
                    echo '</tr>';

                    $no++; //menambah jumlah nomor urut setiap row
                }
            }
            ?>
        </table>
    </body>
</html>