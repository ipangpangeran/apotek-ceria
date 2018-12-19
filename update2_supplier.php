<?php
include "konek.php";
$tbl_name="Supplier";

$ID_Supplier = $_POST['ID_Supplier'];
$Nama_Depan = $_POST['Nama_Depan'];
$Nama_Belakang = $_POST['Nama_Belakang'];
$Alamat = $_POST['Alamat'];
$No_Telepon = $_POST['No_Telepon'];

// update data in mysql database 
$sql="UPDATE $tbl_name SET ID_Supplier='$ID_Supplier', Nama_Depan='$Nama_Depan', Nama_Belakang='$Nama_Belakang', Alamat='$Alamat', No_Telepon='$No_Telepon' WHERE ID_Supplier='$ID_Supplier'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
?>
<script language="JavaScript">alert('Data Supplier berhasil diupdate!');
document.location.href="lihat_supplier.php";</script> 
<?php
}

else {
echo "Update Data ERROR ";
}

?>