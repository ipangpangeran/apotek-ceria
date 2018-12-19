<?php
include "konek.php";
$tbl_name="Obat"; // Table name 
$submit=isset($_GET['Submit']) ? $_GET['Submit'] : null;;

$ID_Obat=$_POST['ID_Obat'];
$Nama=$_POST['Nama'];
$Jenis = $_POST['Jenis'];
$Deskripsi = $_POST['Deskripsi'];
$Made_Date = $_POST['Made_Date'];
$Exp_Date = $_POST['Exp_Date'];
$Cost_Price = $_POST['Cost_Price'];
$Sell_Price= $_POST['Sell_Price'];
$Stock=$_POST['Stock'];
// update data in mysql database 
$sql="UPDATE $tbl_name SET ID_Obat='$ID_Obat', Nama='$Nama', Jenis='$Jenis', Deskripsi='$Deskripsi', Made_Date='$Made_Date', Exp_Date='$Exp_Date', Cost_Price='$Cost_Price', Sell_Price='$Sell_Price', Stock='$Stock' WHERE ID_Obat='$ID_Obat'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
?>
<script language="JavaScript">alert('Data Obat Resep berhasil diupdate!');
document.location.href="resep.php";</script> 
<?php
}

else {
echo "ERROR";
}

?>