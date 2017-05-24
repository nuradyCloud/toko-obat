<!DOCTYPE html>
<html>
    <head>
        <title>Simple CRUD By nuradyCloud</title>
    </head>
    <body>
        <h2>Simple CRUD</h2>

        <p><a href="Agent.php">Show Data</a></p> / <a href="AddAgent.php">Add Data</a></p>

    <h3>Edit Data Agent</h3>

    <?php
    //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan idAgent yg didapatkan dari GET id -> EditAgent.php?id=ID_karyawan
    //include atau memasukkan file koneksi ke database
    include('koneksi.php');

    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=karyawan_id
    $id = $_GET['id'];

    //melakukan query ke database dg SELECT table karyawan dengan kondisi WHERE karyawan_id = '$id'
    $show = mysql_query("SELECT * FROM karyawan WHERE ID_karyawan='$id'");

    //cek apakah data dari hasil query ada atau tidak
    if (mysql_num_rows($show) == 0) {

        //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
        echo '<script>window.history.back()</script>';
    } else {

        //jika data ditemukan, maka membuat variabel $data
        $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    }
    ?>

    <form action="EditSave.php" method="post">
        <input type="hidden" name="idAgent" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah karyawan_id -->
        <table cellpadding="3" cellspacing="0">            
            <tr>
                <td>Agent Name</td>
                <td>:</td>
                <td><input type="text" name="nameAgent" value="<?php echo $data['Nama']; ?>" size="25" maxlength="25" required></td>
            </tr>
            <tr>
                <td>Addres</td>
                <td>:</td>
                <td><input type="text" name="addressAgent" value="<?php echo $data['Alamat']; ?>" size="50" maxlength="50" required></td>
            </tr>
            <tr>
                <td>Handphone</td>
                <td>:</td>
                <td><input type="text" name="hpAgent" size="13" value="<?php echo $data['No_HP']; ?>" maxlength="13" onkeypress="return isNumber(event);" required></td>
            </tr>            
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>