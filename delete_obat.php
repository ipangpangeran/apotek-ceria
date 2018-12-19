<?php
include "konek.php";

$tbl_name="Obat";
// get value of id that sent from address bar 
$ID_Obat=$_GET['ID_Obat'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM `$tbl_name` WHERE ID_Obat = '$ID_Obat'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
?>
<script language="JavaScript">alert('Obat berhasil dihapus!');
document.location.href="lihat_obat.php";</script> 
<?php
}

else {
echo "Penghapusan Data Gagal Karena : ".mysql_error();
}

// close connection 
mysql_close();

?>