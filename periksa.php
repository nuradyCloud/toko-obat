<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>periksa login</title>
<style type="text/css">
<!--
.style5 {font-family: "Comic Sans MS"}
-->
</style>
</head>

<body>
<div align="center">
  <table width="819" border="0">
    <tr>
      <td>
        <div align="center">
      <?php
include('koneksi.php');
$username=$_POST['username'];
$pasword=$_POST['password'];
$sql="SELECT*FROM login where User='$username' AND Password='$password'";
$baris=mysql_query($sql);
$ada=mysql_num_rows($baris);
if($ada>0){
	session_start();
	/*session_register('user');
	session_register('password');
*/
	$_SESSION[' username ']=$ada['User'];
	$_SESSION[' password '] =$ada['Password'];

echo "<script>document.location=\"formsearching.php\";</script>";
}else{
echo "<blink>Maaf, Username atau Password yang anda masukkan salah!!</blink>";
echo "<br><a href=index.php> Cobalagi </a>";
}
?></div></td>
    </tr>
  </table>
</div>
</body>
</html>
