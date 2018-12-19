<?php
include "konek.php";
require "headerobat2.html";

$result = mysql_query("SELECT * FROM Obat WHERE ID_Obat LIKE 'R%' ORDER BY ID_Obat");
echo"<body Background='content-tail.gif'>";
echo"<center><h3><font style='font-weight:bold;' font size='+5' font color='#00CCFF'>Obat Resep</font></h3></center>";
echo"<br></br>";
echo "<center>
<table style='border-style:dotted' width = '1020' border='1px' align='center'>
<tr align='center'>
<td width=6% font style='font-weight:bold;'>ID Obat</td>
<td width=10% font style='font-weight:bold;'>Nama</td>
<td width=3% font style='font-weight:bold;'>Jenis</td>
<td width=13% font style='font-weight:bold;'>Deskripsi</td>
<td width=8% font style='font-weight:bold;'>Made Date</td>
<td width=8% font style='font-weight:bold;'>Expired Date</td>
<td width=7% font style='font-weight:bold;'>Cost Price</td>
<td width=7% font style='font-weight:bold;'>Sell Price</td>
<td width=4% font style='font-weight:bold;'>Stock</td>
<td width=6%> </td>
<td width=6%> </td>
</center>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='text-align:center'>" . $row['ID_Obat'] . "</td>";
  echo "<td>" . $row['Nama'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Jenis'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Deskripsi'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Made_Date'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Exp_Date'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Cost_Price'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Sell_Price'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Stock'] . "</td>";
  ?>
  <td width="60px"><button type="submit" name="Update" align="center"> <a href="update_resep.php?ID_Obat=<?php echo $row['ID_Obat']?>">Update</a></button></td> 
 <td width="60px"><button type="submit" name="Hapus" align="center"> <a href="delete_resep.php?ID_Obat=<?php echo $row['ID_Obat']?>" onClick="return confirm('Apakah Anda yakin akan menghapus obat resep?')">Hapus</a></button></td> 
  <?php
  echo "</tr>";

  echo "</tr>";
  }
echo "</table>";
echo"</body>";
mysql_close($konek);

require "footer.html";
?>

