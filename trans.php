<?php
include "konek.php";
$tbl_name="Obat, Karyawan, Supplier, Obat_Masuk";

$NoObatMasuk = $_POST['NoObatMasuk'];
$ID_Obat = $_POST['ID_Obat'];
$Nama = $_POST['Nama'];
$ID_Karyawan = $_POST['ID_Karyawan'];
$ID_Supplier = $_POST['ID_Supplier'];
$Tanggal_Masuk = $_POST['Tanggal_Masuk'];
$Stock = $_POST['Stock'];

// update data in mysql database 
$sql2="update Obat set Stock = Stock + ".$_POST['Stock']." WHERE ID_Obat='$ID_Obat'";

$result = mysql_query($sql2);
if ($result){
?>

<script language="JavaScript">alert('Stock berhasil ditambah kembali');
document.location.href="stock.php";</script> 
<?php
}

else {
echo "ERROR";
}

?>