<?php
include "konek.php";
$tbl_name="Karyawan"; 

$ID_Karyawan=$_POST['ID_Karyawan'];
$Nama_Depan=$_POST['Nama_Depan'];
$Nama_Belakang=$_POST['Nama_Belakang'];
$Alamat=$_POST['Alamat'];
$Status=$_POST['Status'];
$No_Telepon=$_POST['No_Telepon'];


$sql="INSERT INTO $tbl_name(ID_Karyawan, Nama_Depan, Nama_Belakang, Alamat, Status, No_Telepon)VALUES('$ID_Karyawan', '$Nama_Depan', '$Nama_Belakang', '$Alamat', '$Status', '$No_Telepon')";
$result=mysql_query($sql);

if($result){
?>
<script language="JavaScript">alert('Data Karyawan berhasil ditambahkan!');
document.location.href="lihat_karyawan.php";</script> 
<?php
}


else{
?><script>alert("Penambahan Karyawan Gagal");document.location.href="insert_karyawan.php"</script> <?php
echo mysql_error();
}

mysql_close();
?>