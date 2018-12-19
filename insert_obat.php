<?php
include"konek.php";
$tbl_name="Obat"; // Table name 

// Get values from form 
$ID_Obat=$_POST['ID_Obat'];
$Nama=$_POST['Nama'];
$Jenis=$_POST['Jenis'];
$Deskripsi=$_POST['Deskripsi'];
$Made_Date=$_POST['Made_Date'];
$Exp_Date=$_POST['Exp_Date'];
$Cost_Price=$_POST['Cost_Price'];
$Sell_Price=$_POST['Sell_Price'];
$Stock=$_POST['Stock'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(ID_Obat, Nama, Jenis, Deskripsi, Made_Date, Exp_Date, Cost_Price, Sell_Price, Stock)VALUES('$ID_Obat', '$Nama', '$Jenis', '$Deskripsi', '$Made_Date', '$Exp_Date', '$Cost_Price', '$Sell_Price', '$Stock')";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Obat Berhasil Ditambahkan". 
if($result){
?>
<script language="JavaScript">alert('Data Obat berhasil ditambahkan!');
document.location.href="lihat_obat.php";</script> 
<?php
}


else{
?><script>alert("Penambahan Obat Gagal");document.location.href="insert_obat.php"</script> <?php
echo mysql_error();
}

mysql_close();
?>