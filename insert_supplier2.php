<?php
session_start();
include "konek.php"; 
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
//session tidak ada
if(empty($_SESSION[ID_Karyawan]) AND (empty($_SESSION[Password])))
{
?><script languange="javascript">alert("Mau masuk? Login dulu!");</script>
<script> document.location.href='index.php';</script>
<?php
}

?>

<?php
	$sql="select * from karyawan where ID_Karyawan='".$_SESSION['ID_Karyawan']."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Apotek Ceria</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Vegur_500.font.js"></script>
<script src="js/Ropa_Sans_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<!--[if lt IE 9]>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page2">


<header>
  <div class="border-bot">
    <div class="main">
    <h1><img src="images/apotek.png" alt="" width="397" height="121"></h1>
      <nav>
        <ul class="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="lihat_obat.php">Medicines</a></li>
          <li><a class="active" href="lihat_supplier.php">our suppliers</a></li>
          <li><a href="lihat_karyawan.php">Our Employee</a></li>
          <li><a href="logout.php">Logout Sudah</a></li>
          
        </ul>
      </nav>
        <blockquote>&nbsp;</blockquote>
      <div class="clear"></div>
    </div>
  </div>
 
</header>

<body>
<center>
<h3><font color="#00CCFF">Masukkan Data Supplier Baru</font></h3>
</center>
<br></br>
<center>
<form method="post" action="insert_supplier.php"> 
<table width="300" border="0" cellpadding="5" cellspacing="2">
	<tbody>
    	<tr>
			<td>ID Supplier</td>
            <td>:</td> 
            <td><input type="text" name="ID_Supplier" maxlength="20" required /></td>
        </tr>
        <tr>
			<td>Nama Depan</td>
            <td>:</td>	
            <td><input type="text" name="Nama_Depan" maxlength="20" required /></td>
         </tr>
        <tr>
			<td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="Nama_Belakang"  maxlength="20" required /></td>
		 </tr>
         <tr>	
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="Alamat" maxlength="20" required /></td>
         </tr>
		  <tr>
			<td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="No Telepon" maxlength="20" required /></td>
		   </tr>
            <tr>
<td align="left" colspan="3"><input type="submit" name="submit" value="Insert"><input type="reset"  name="reset" value="Batal" /></td></tr>

</tbody>
</table>
</form> 
</center>
</body> 


<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3">
          <div class="spacer"><img src="images/apotek.png" alt="" width="220" height="75"></div>
        </div>
        <div class="grid_5">
          <div class="indent-top2">
            <p align="center" class="prev-indent-bot">Copyright &copy; 2014 <a href="#"><strong> Apotek Ceria</strong></a> | <a href="index.html">apotekceria.co.id</a> <a href="index.html">info@apotekceria.co.id</a></div>
        </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a class="item-1" href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
          <span class="footer-text">&copy; 2014 <a class="link color-2" href="#">Privacy Policy</a></span> </div>
      </div>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function() {
	$('.slider')._TMS({
		duration:1000,
		easing:'easeOutQuint',
		preset:'diagonalFade',
		slideshow:7000,
		banners:false,
		pauseOnHover:true,
		pagination:true,
		pagNums:false
	});
});
</script>
</html>
