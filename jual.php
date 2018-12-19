<?php
include "konek.php";
$tbl_name="Obat_Keluar"; // Table name 
$submit=isset($_GET['Submit']) ? $_GET['Submit'] : null;;

$NoObatKeluar=$_POST['NoObatKeluar'];
$ID_Obat=$_POST['ID_Obat'];
$Nama=$_POST['Nama'];
$ID_Karyawan=$_POST['ID_Karyawan'];
$Tanggal_Keluar=$_POST['Tanggal_Keluar'];
$Stock=$_POST['Stock'];


// update data in mysql database 

$sql2="update Obat set Stock = Stock - ".$_POST['Stock']." WHERE ID_Obat='$ID_Obat' and Nama='$Nama'";

$result = mysql_query($sql2);
if ($result){
?>
<script language="JavaScript">alert('Obat berhasil dijual!');
document.location.href="stock.php";</script> 
<?php
}

else {
echo "ERROR";
}

?>