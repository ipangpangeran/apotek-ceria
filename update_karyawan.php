<?php
include "konek.php";
require "headerobat5.html";

$tbl_name="Karyawan"; // Table name 

// get value of id that sent from address bar
$ID_Karyawan=$_GET['ID_Karyawan'];


// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE ID_Karyawan='$ID_Karyawan'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>

<body>
<center>
<h3><font color="#00CCFF">Update Data Karyawan</font></h3>
</center>
<br></br>
<center>
<form method="post" action="update2_karyawan.php"> 
<table width="300" border="0" cellpadding="5" cellspacing="2">
	<tbody>
    	<tr>
			<td>ID Karyawan</td>
            <td>:</td> 
            <td><input type="text" name="ID_Karyawan" maxlength="20" value="<?php echo $rows['ID_Karyawan']; ?>" /></td>
        </tr>
    <tr>
			<td>Nama Depan</td>
            <td>:</td>	
            <td><input type="text" name="Nama_Depan" maxlength="20" value="<?php echo $rows['Nama_Depan']; ?>"/></td>
         </tr>
		 <tr>
			<td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="Nama_Belakang" maxlength="20" value="<?php echo $rows['Nama_Belakang']; ?>"/></td>
		</tr>
        <tr>
			<td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="Alamat"  maxlength="20" value="<?php echo $rows['Alamat']; ?>" /></td>
		 </tr>
          <tr>
			<td>Status</td>
            <td>:</td>
            <td><input type="text" name="Status"  maxlength="20" value="<?php echo $rows['Status']; ?>" /></td>
		 </tr>
         <tr>	
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="No_Telepon" maxlength="20" value="<?php echo $rows['No_Telepon']; ?>" /></td>
         </tr>
 <tr> 	
<td align="left" colspan="3"><input type="submit" name="submit" value="Update Karyawan"></td></tr>

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
