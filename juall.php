<?php
include "konek.php";
require "headerobat2.html";

$tbl_name="Obat_Keluar"; // Table name 

// get value of id that sent from address bar
$ID_Obat=$_GET['ID_Obat'];


// Retrieve data from database 
$takeobat = "select Nama from obat where ID_Obat='$ID_Obat'";
$takeharga = "select Sell_Price from obat where ID_Obat='$ID_Obat'";
$takestock = "select Stock from obat where ID_Obat='$ID_Obat'";

$takeobat_sql = mysql_query($takeobat);
$takeobat_sql_fetch = mysql_fetch_array($takeobat_sql);
$namaobat = $takeobat_sql_fetch['Nama'];
$takeharga_sql = mysql_query($takeharga);
$takeharga_sql_fetch = mysql_fetch_array($takeharga_sql);
$harga = $takeharga_sql_fetch['Sell_Price'];

$takestock_sql = mysql_query($takestock);
$takestock_sql_fetch = mysql_fetch_array($takestock_sql);
$stock = $takestock_sql_fetch['Stock'];


?>
<body>
<center>
<h3><font color="#00CCFF">Penjualan Obat</font></h3>
</center>
<br></br>
<center>

<div id="konten">

<form name="postform" action="proses.php" method="post">
<table align="center" id="tabeledit" width="300">
<table width="400" border="0" cellpadding="5" cellspacing="2">
	<tbody>
    	<tr>
			<td>No. Obat Keluar</td>
            <td>:</td> 
            <td><input type="text" name="NoObatKeluar" required /></td>
        </tr>
    <tr>
			<td>ID_Obat</td>
            <td>:</td>	
            <td><input type="text" name="ID_Obat" readonly value="<?php echo $ID_Obat; ?>"></td>
         </tr>
		 <tr>
			<td>Nama</td>
            <td>:</td>
            <td><input type="text" name="Nama" readonly value="<?php echo $namaobat; ?>"></td>
		</tr>
        <tr>
			<td>Harga</td>
            <td>:</td>
            <td><input type="text" name="Sell_Price" readonly value="<?php echo $harga; ?>"></td>
		</tr>		
        <tr>
            <td>ID Karyawan</td>
            <td>:</td>
            <td><input type="text" name="ID_Karyawan" required /></td>
         </tr>
        <tr>          
<td>Tanggal Keluar</td>
<td>:</td>
<td><input type="text" id="from" name="Tanggal_Keluar" required onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
</tr>
		  <tr>
			<td>Stock</td>
            <td>:</td>
            <td><input type="text" name="Stock1" required </td></td>
		   </tr>
           <tr>  
<td>Status</td>  
<td>:</td>
<td><label>  
<input type="radio" name="status" value="Pegawai" id="status_0" checked="checked" />  
 Pegawai</label> 
<label>  
<input type="radio" name="status" value="Bukan Pegawai" id="status_1" />  
 Bukan Pegawai</label>  
</td></tr>  
         
 <tr>
<td align="left" colspan="3"><input name="" type="submit" value="Hitung" />&nbsp;  
<input name="" type="reset" value="Hapus" /></td>  
</td></tr>

</tbody>
</table>



</form> 
</center>
</div>
</body>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>


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
