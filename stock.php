<?php
include "konek.php";
require "headerobat2.html";

$result = mysql_query("SELECT ID_Obat, Nama, Sell_Price, Stock FROM Obat ORDER BY ID_Obat");
echo"<body Background='content-tail.gif'>";
echo"<center><h3><font style='font-weight:bold;' font size='+5' font color='#00CCFF'>Sell and Supply</font></h3></center>";
echo"<br>";
echo"<center>
<table style='border-style:dotted' width = '600' border='1px' align='center'>
<tr align='center'>
<th width='6%'>ID Obat</th>
<th width='30%'>Nama</th>
<th width='6%'>Sell Price</th>
<th width=6%>Stock</th>
<th width=5%> </th>
<th width=5%> </th>
</center>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='text-align:center'>" . $row['ID_Obat'] . "</td>";
  echo "<td>" . $row['Nama'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Sell_Price'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Stock'] . "</td>";
  ?>
  <td width="60px"><button type="submit" name="Supply" align="center"> <a href="transs.php?ID_Obat=<?php echo $row['ID_Obat']?>">Supply</a></button></td>
  <td width="60px"><button type="submit" name="Jual" align="center"> <a href="juall.php?ID_Obat=<?php echo $row['ID_Obat']?>">Jual</a></button></td>
  <?php
  echo "</tr>";

  echo "</tr>";
  }
echo "</table>";
echo"</body>";
mysql_close($konek);

require "footer.html";
?>