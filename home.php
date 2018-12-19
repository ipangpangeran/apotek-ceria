<?php
session_start();
include "konek.php"; 
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
//session tidak ada
if(empty($_SESSION[ID_Karyawan]) AND (empty($_SESSION[Password])))
{
?><script languange="javascript">alert("Mau masuk? Login dulu!");</script>
<script> document.location.href='index.php';</script>
<?php
}

?>

<?php
	$sql="select * from karyawan where ID_Karyawan='".$_SESSION['ID_Karyawan']."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Apotek Ceria</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Vegur_500.font.js"></script>
<script src="js/Ropa_Sans_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<!--[if lt IE 9]>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page2">
<!--==============================header=================================-->
<header>
  <div class="border-bot">
    <div class="main">
    <h1><img src="images/apotek.png" alt="" width="397" height="121"></h1>
      <nav>
        <ul class="menu">
          <li><a class="active" href="home.php">Home</a></li>
          <li><a href="lihat_obat.php">Medicines</a></li>
          <li><a href="lihat_supplier.php">our suppliers</a></li>
          <li><a href="lihat_karyawan.php">Our Employee</a></li>
          <li><a href="logout.php">Logout Sudah</a></li>
          
        </ul>
      </nav>
        <blockquote>&nbsp;</blockquote>
      <div class="clear"></div>
    </div>
  </div>
  <div class="row-bot">
    <div class="slider-wrapper">
      <div class="slider">
        <ul class="items">
        <li align="center"> <img src="images/1.jpg" alt=""> </li>
          <li> <img src="images/4.jpg" alt=""> </li>
          <li> <img src="images/6.png" alt=""> </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
         <h2>Selamat Datang Admin Apotek Ceria</h2>
          <article class="grid_8">
          <h3>Lakukanlah yang terbaik yang dapat kau lakukan!</h3>
          <h4>Based on catagories</h4>
              <div class="wrapper">
               <div id="templatemo_content_left">
                <div class="col-md-4 col-sm-6 col-xs-6">
                
                                          <h4><li><a href="resep.php">Resep</li></h4>
                                         
                                          <h4><li><a href="nonresep.php">Non Resep</li></h4>
              </div>
            </div>
          </div>          
        </article>
        <article class="grid_4">
          <div class="indent-top indent-left">
            <div class="wrapper margin-bot">
              <figure class="img-indent-r">
                <div align="left"><a href="#"><img src="images/page1-img1.png" alt=""></a></div>
              </figure>
              <div class="extra-wrap"> 
                <div align="left"><strong class="title-1">Berikan Yang Terbaik Untuk<em>Sesama</em></strong>                </div>
              </div>
            </div>
            <h3>What to do?</h3>
                  <ul>
                  <li><a href="stock.php">Sell and Supply</a></li>
                 
                  <li><a href="obat_baru.php">Tambah Obat Baru</a></li>
                  </ul>

            <p class="prev-indent-bot">&nbsp;</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3">
          <div class="spacer"><img src="images/apotek.png" alt="" width="220" height="75"></div>
        </div>
        <div class="grid_5">
          <div class="indent-top2">
            <p align="center" class="prev-indent-bot">Copyright &copy; 2014 <a href="#"><strong> Apotek Ceria</strong></a> | <a href="index.html">apotekceria.co.id</a> <a href="index.html">info@apotekceria.co.id</a></div>
        </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a class="item-1" href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
          <span class="footer-text">&copy; 2014 <a class="link color-2" href="#">Privacy Policy</a></span> </div>
      </div>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function() {
	$('.slider')._TMS({
		duration:1000,
		easing:'easeOutQuint',
		preset:'diagonalFade',
		slideshow:7000,
		banners:false,
		pauseOnHover:true,
		pagination:true,
		pagNums:false
	});
});
</script>
</body>
</html>
