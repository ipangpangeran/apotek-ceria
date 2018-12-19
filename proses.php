<?php
include "konek.php";

$tbl_name="Obat_Keluar"; // Table name 
$submit=isset($_GET['Submit']) ? $_GET['Submit'] : null;;

$NoObatKeluar=$_POST['NoObatKeluar'];
$ID_Obat=$_POST['ID_Obat'];
$Nama=$_POST['Nama'];
$ID_Karyawan=$_POST['ID_Karyawan'];
$Tanggal_Keluar=$_POST['Tanggal_Keluar'];
$Stock1 = $_POST['Stock1'];
$Sell_Price=$_POST['Sell_Price'];
$status = $_POST['status']; 

$takestock = "select Stock from obat where ID_Obat='$ID_Obat'";

$takestock_sql = mysql_query($takestock);
$takestock_sql_fetch = mysql_fetch_array($takestock_sql);
$stockawal = $takestock_sql_fetch['Stock'];

$kurang = $stockawal - $Stock1;

if 
	($stockawal < $Stock1) 
{ 
?> 
<script language="JavaScript">alert('Maaf stock tidak ada!');
document.location.href="stock.php";</script> 
<?php
}
else {

if ($stockawal!=0)
{
$sql2="update Obat set Stock = '$kurang' WHERE ID_Obat='$ID_Obat' and Nama='$Nama'";
$result = mysql_query($sql2);

$subtotal = $Sell_Price * $Stock1 ;  

switch ($status){  
 case "Pegawai":   
  $diskon = $subtotal * 0.05;  
 break;   
 default:   
  $diskon = 0;   
 }
$total = $subtotal - $diskon;

if ($result){
?>
<script language="JavaScript">alert('Obat berhasil dijual!');
</script> 
<?php
}

else {
echo "ERROR";
}
}
else {
?> 
<script language="JavaScript">alert('Maaf stok obat sudah habis!');
document.location.href="stock.php";</script> 
<?php
}
}
?> 

<form method="post" action="stock.php"> 
<div align="center">  
<table width="297" border="2">  
<tr>  
<td colspan="2" bgcolor="#FF99CC">  
<div align="center" class="putih">  
<strong>HASIL PERHITUNGAN</strong>  
</div>  
</td>  
</tr>  
<tr>  
<td width="116" bgcolor="#FFFFFF">
<strong>No. Obat Keluar</strong></td>  
<td width="165" bgcolor="#FFFFFF">&nbsp;  
<?php echo "$NoObatKeluar"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#FFFFFF">
<strong>ID Obat</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "$ID_Obat"; ?></td>  
</tr>
<tr>  
<td bgcolor="#FFFFFF">
<strong>Nama</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "$Nama"; ?></td>  
</tr>

<tr>  
<td bgcolor="#FFFFFF">
<strong>Harga</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "Rp. ".number_format($Sell_Price); ?></td>  
</tr> 
<tr>
<td bgcolor="#FFFFFF">
<strong>ID Karyawan</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "$ID_Karyawan"; ?></td>  
</tr>
<tr>  
<td bgcolor="#FFFFFF">
<strong>Quantity</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "$Stock1"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#FFFFFF">
<strong>Subtotal</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "Rp. ".number_format($subtotal); ?></td>  
</tr>  
<tr>  
<td bgcolor="#FFFFFF">
<strong>Status</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "$status"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#FFFFFF">
<strong>Tanggal</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "$Tanggal_Keluar"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#FFFFFF">
<strong>Diskon</strong></td>  
<td bgcolor="#FFFFFF">&nbsp;  
<?php echo "Rp. ".number_format($diskon); ?></td>  
</tr>     
<tr>  
<td bgcolor="#FFFF99" class="putih">  
<strong>Total</strong></td>  
<td bgcolor="#FFFF99">&nbsp;  
<?php echo "Rp. ".number_format($total); ?></td>  
</tr>  
</table> 

<td align="left" colspan="3"><input type="submit" name="submit" value="&lt;&lt; Kembali"></td></tr>
</div> 
</form>
