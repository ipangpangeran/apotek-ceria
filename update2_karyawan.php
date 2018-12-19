<?php
include "konek.php";
$tbl_name="Karyawan";

$ID_Karyawan = $_POST['ID_Karyawan'];
$Nama_Depan = $_POST['Nama_Depan'];
$Nama_Belakang = $_POST['Nama_Belakang'];
$Alamat = $_POST['Alamat'];
$Status = $_POST['Status'];
$No_Telepon = $_POST['No_Telepon'];

// update data in mysql database 
$sql="UPDATE $tbl_name SET ID_Karyawan='$ID_Karyawan', Nama_Depan='$Nama_Depan', Nama_Belakang='$Nama_Belakang', Alamat='$Alamat', Status='$Status', No_Telepon='$No_Telepon' WHERE ID_Karyawan='$ID_Karyawan'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
?>
<script language="JavaScript">alert('Data Karyawan berhasil diupdate!');
document.location.href="lihat_karyawan.php";</script> 
<?php
}

else {
echo "Update Data ERROR ";
}

?>