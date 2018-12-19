
<?php
include "konek.php";
require "headerobat4.html";
$tbl_name="Supplier"; // Table name 

// get value of id that sent from address bar
$ID_Supplier=$_GET['ID_Supplier'];


// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE ID_Supplier='$ID_Supplier'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<body>
<center>
<h3><font color="#00CCFF">Update Data Supplier</font></h3>
</center>
<br></br>
<center>
<form method="post" action="update2_supplier.php"> 
<table width="300" border="0" cellpadding="5" cellspacing="2">
	<tbody>
    	<tr>
			<td>ID Supplier</td>
            <td>:</td> 
            <td><input type="text" name="ID_Supplier" maxlength="20" value="<?php echo $rows['ID_Supplier']; ?>" /></td>
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
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="No_Telepon" maxlength="20" value="<?php echo $rows['No_Telepon']; ?>" /></td>
         </tr>
 <tr>
<td align="left" colspan="3"><input type="submit" name="submit" value="Update Supplier"></td></tr>

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
