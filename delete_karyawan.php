<?php
include "konek.php"; 
$tbl_name="karyawan"; // Nama tabel

// get value of id that sent from address bar 
$ID_Karyawan=$_GET['ID_Karyawan'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM `$tbl_name` WHERE ID_Karyawan = '$ID_Karyawan'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
?>
<script language="JavaScript">alert('Data Karyawan berhasil dihapus!');
document.location.href="lihat_karyawan.php";</script>
<?php
}

else {
echo "Penghapusan Data Gagal karena : ".mysql_error();
}

// close connection 
mysql_close();

?>