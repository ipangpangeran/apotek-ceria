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
<!--==============================header=================================-->
<?php
include "konek.php";
require "headerobat4.html";

$result = mysql_query("SELECT * FROM Supplier ORDER BY ID_Supplier");
echo"<form method='post' action='insert_supplier2.php'>";
echo"<center><h3><font style='font-weight:bold;' font size='+5' font color='#00CCFF'>Data Supplier Apotek Ceria</font></h3></center>";
echo"<br></br>";
echo"<center><table style='border-style:dotted' width = '700' border='1px' align='center'>
<tr align='center'>
<td width=9% font style='font-weight:bold;'>ID Supplier</td>
<td width=12% font style='font-weight:bold;'>Nama Depan</td>
<td width=12% font style='font-weight:bold;'>Nama Belakang</td>
<td width=9% font style='font-weight:bold;'>Alamat</td>
<td width=9% font style='font-weight:bold;'>No. Telepon</td>
<td width=6% font style='font-weight:bold;'> </td>
<td width=6% font style='font-weight:bold;'> </td>
</center>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='text-align:center'>" . $row['ID_Supplier'] . "</td>";
  echo "<td>" . $row['Nama_Depan'] . "</td>";
  echo "<td>" . $row['Nama_Belakang'] . "</td>";
  echo "<td style='text-align:center'>" . $row['Alamat'] . "</td>";
  echo "<td style='text-align:center'>" . $row['No_Telepon'] . "</td>";
  ?>
    <td width="60px"><button type="submit" name="Update" align="center"> <a href="update_supplier.php?ID_Supplier=<?php echo $row['ID_Supplier']?>">Update</a></button></td> 
  
  <td width="60px"><button type="submit" name="Hapus" align="center"> <a href="delete_supplier.php?ID_Supplier=<?php echo $row['ID_Supplier']?>" onClick="return confirm('Apakah Anda yakin akan menghapus data supplier?')">Hapus</a></button></td> 
  <?php
  echo "</tr>";

  echo "</tr>";
  }
echo "</table>";
echo"</body>";
echo"<tr><td align='left' colspan='3'><input type='submit' name='submit' value='Insert Supplier Baru'></td></tr>";
mysql_close($konek);

require "footer.html";
?>