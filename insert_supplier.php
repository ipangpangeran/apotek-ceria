<?php
include "konek.php";
$tbl_name="Supplier"; 

$ID_Supplier=$_POST['ID_Supplier'];
$Nama_Depan=$_POST['Nama_Depan'];
$Nama_Belakang=$_POST['Nama_Belakang'];
$Alamat=$_POST['Alamat'];
$No_Telepon=$_POST['No_Telepon'];


$sql="INSERT INTO $tbl_name(ID_Supplier,Nama_Depan,Nama_Belakang,Alamat,No_Telepon) VALUES ('$ID_Supplier','$Nama_Depan','$Nama_Belakang','$Alamat','$No_Telepon')";
$result=mysql_query($sql);

if($result){
?>
<script language="JavaScript">alert('Data Supplier berhasil ditambahkan!');
document.location.href="lihat_supplier.php";</script> 
<?php
}


else{
?><script>alert("Penambahan Supplier Gagal!");document.location.href="insert_supplier.php"</script> <?php
echo mysql_error();
}

mysql_close();
?>