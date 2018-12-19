 
<?php
include "konek.php";
require "headerobat2.html";

$tbl_name="Obat"; // Table name 

// get value of id that sent from address bar
$ID_Obat=$_GET['ID_Obat'];


// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE ID_Obat='$ID_Obat'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>

<body>
<center>
<h3><font color="#00CCFF">Update Data Obat Resep</font></h3>
</center>
<br></br>
<center>

<div id="konten">

<form name="postform" action="update2_resep.php" method="post"><table align="center" id="tabeledit" width="300">
<table width="300" border="0" cellpadding="5" cellspacing="2">
	<tbody>
    	<tr>
			<td>ID_Obat</td>
            <td>:</td> 
            <td><input type="text" name="ID_Obat" maxlength="20" readonly value="<?php echo $rows['ID_Obat']; ?>" /></td>
        </tr>
    <tr>
			<td>Nama</td>
            <td>:</td>	
            <td><input type="text" name="Nama" maxlength="20" value="<?php echo $rows['Nama']; ?>"/></td>
         </tr>
		 <tr>
			<td>Jenis</td>
            <td>:</td>
            <td><input type="text" name="Jenis" maxlength="20" readonly value="<?php echo $rows['Jenis']; ?>"/></td>
		</tr>
        <tr>
			<td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="Deskripsi"  maxlength="20" readonly value="<?php echo $rows['Deskripsi']; ?>" /></td>
		 </tr>
         <tr>	
            <td>Made Date</td>
            <td>:</td>
            <td><input type="text" id="from" name="Made_Date" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;" value="<?php echo $rows['Made_Date']; ?>"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td> 
         </tr>
         <tr>
			<td>Exp. Date</td>
            <td>:</td>
            <td><input type="text" id="to" name="Exp_Date" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.to);return false;" value="<?php echo $rows['Exp_Date']; ?>"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.to);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
          </tr>
		  <tr>
			<td>Cost Price</td>
            <td>:</td>
            <td><input type="text" name="Cost_Price" maxlength="20" value="<?php echo $rows['Cost_Price']; ?>" /></td>
		   </tr>
           <tr>
			<td>Sell Price</td>
            <td>:</td>
            <td><input type="text" name="Sell_Price" maxlength="20" value="<?php echo $rows['Sell_Price']; ?>" /></td>
		   </tr>
           <tr>
			<td>Stock</td>
         	<td>:</td>
            <td><input type="text" name="Stock" maxlength="20" value="<?php echo $rows['Stock']; ?>" /></td>
            </tr>
 <tr>
<td align="left" colspan="3"><input type="submit" name="submit" value="Update Obat"></td></tr>

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
