<?php
include "konek.php"; 
$tbl_name="Supplier"; // Nama tabel

// get value of id that sent from address bar 
$ID_Supplier=$_GET['ID_Supplier'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM `$tbl_name` WHERE ID_Supplier = '$ID_Supplier'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
?>
<script language="JavaScript">alert('Data Supplier berhasil dihapus!');
document.location.href="lihat_supplier.php";</script>
<?php
}

else {
echo "Penghapusan Data Gagal karena : ".mysql_error();
}

// close connection 
mysql_close();

?>