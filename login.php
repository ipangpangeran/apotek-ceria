<?php
session_start();
include "konek.php";

$username=$_POST['karyawan'];
$password=$_POST['pass'];

$query=mysql_query("select * from karyawan where ID_Karyawan='$username' and Password='$password'");
$cek=mysql_num_rows($query);

if ($cek){
$_SESSION['ID_Karyawan']=$username; ?>
<?php header("location:home.php"); ?> 
<?php
}else{
	
?>
<script languange="javascript">alert("Login Gagal!!!");</script>
<script> document.location.href='index.html';</script><?php
echo mysql_error();
}
?>