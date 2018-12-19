<?php
include "konek.php";

// $tbl_name="Obat , Stock";
// get value of id that sent from address bar 
// $id=$_GET['id'];

$sql="SELECT ID_Obat, Nama, Jenis, Deskripsi, Quantity, Sell_Price FROM Obat, Stock WHERE ID_Obat LIKE '%B%' and Obat.ID_obat = Stock.ID_Obat;
$result=mysql_query($sql);

// close connection

mysql_close();

?>