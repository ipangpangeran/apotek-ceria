<?php
include "konek.php";

$NoObatKeluar=$_POST['NoObatKeluar'];
$ID_Obat=$_POST['ID_Obat'];
$Nama=$_POST['Nama'];
$ID_Karyawan=$_POST['ID_Karyawan'];
$Tanggal_Keluar=$_POST['Tanggal_Keluar'];
$Stock=$_POST['Stock'];
$Sell_Price=$_POST['Sell_Price'];
$status = $_POST['status']; 
?>

<div align="center">  
<table width="297" border="1">  
<tr>  
<td colspan="2" bgcolor="#666666">  
<div align="center" class="putih">  
<strong>HASIL PERHITUNGAN</strong>  
</div>  
</td>  
</tr>  
<tr>  
<td width="116" bgcolor="#CCCCCC">No. Obat Keluar</td>  
<td width="165" bgcolor="#CCCCCC">&nbsp;  
<?php echo "$NoObatKeluar"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">ID Obat</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$ID_Obat"; ?></td>  
</tr>
<tr>  
<td bgcolor="#CCCCCC">Nama</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$Nama"; ?></td>  
</tr>

<tr>  
<td bgcolor="#CCCCCC">Harga</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($Sell_Price); ?></td>  
</tr> 
<tr>
<td bgcolor="#CCCCCC">ID Karyawan</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$ID_Karyawan"; ?></td>  
</tr>
<tr>  
<td bgcolor="#CCCCCC">Quantity</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$Stock"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Subtotal</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($subtotal); ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Status</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$status"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Diskon</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($diskon); ?></td>  
</tr>     
<tr>  
<td bgcolor="#666666" class="putih">  
<strong>Total</strong></td>  
<td bgcolor="#666666">&nbsp;  
<?php echo "Rp. ".number_format($total); ?></td>  
</tr>  
</table>  
<a href="stock.php"> &lt;&lt; Kembali</a>  

</div> 