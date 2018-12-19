<html>
<head>
<title>Insert Data Obat</title>

<body>
<center>
<h3><font color="#CC00CC">Masukkan Data Obat Baru</font></h3>
</center>
<center>
<form method="post" action="insert_obat.php"> 
<table border="0" cellpadding="3" cellspacing="0">
	<tbody>
    	<tr>
			<td>ID_Obat</td>
            <td>:</td> 
            <td><input type="text" name="ID_Obat" maxlength="20" required="required" /></td>
        </tr>
        <tr>
			<td>Nama</td>
            <td>:</td>	
            <td><input type="text" name="Nama" maxlength="20" required="required" /></td>
         </tr>
		 <tr>
			<td>Jenis</td>
            <td>:</td>
            <td><select name="Jenis"><option>-Pilih Salah Satu-</option><option>Syrup</option><option>Tablet</option><option>Kapsul</option><option>Tetes</option><option>Salep</option></select></td>
		</tr>
        <tr>
			<td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="Deskripsi"  maxlength="20" required="required" /></td>
		 </tr>
         <tr>	
            <td>Made Date</td>
            <td>:</td>
            <td><input type="text" name="Made_Date" maxlength="20" required="required" /></td>
         </tr>
         <tr>
			<td>Exp. Date</td>
            <td>:</td>
            <td><input type="text" name="Exp_Date" maxlength="20" required="required" /></td>
          </tr>
		  <tr>
			<td>Cost Price</td>
            <td>:</td>
            <td><input type="text" name="Cost_Price" maxlength="20" required="required" /></td>
		   </tr>
           <tr>
			<td>Sell Price</td>
            <td>:</td>
            <td><input type="text" name="Sell_Price" maxlength="20" required="required" /></td>
		   </tr>
           <tr>
			<td>Stock</td>
         	<td>:</td>
            <td><input type="text" name="Stock" maxlength="20" required="required" /></td>
            </tr>
            <tr>
<td align="right" colspan="3"><input type="submit" name="submit" value="Insert" /></td></tr>
			<tr>
<td align="right" colspan="3"><input type="reset"  name="reset" value="Batal" /></td></tr>
</tr>
</tbody>
</table>
</form> 
</center>
</body> 
</html> 
