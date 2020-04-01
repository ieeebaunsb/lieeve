<?php
include("adminvt.php");


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>LIEEEVE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">


      <!-- Main -->
        <div id="main">

          <div class="inner">


            <!-- Header -->


            <header id="header">


<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>


<table>
  <thead>
    <tr>
        <th class="tablinks active btn btn-google" onclick="openCity(event, 'anasayfa')" id="defaultOpen"></th>
        <th class="tablinks" onclick="openCity(event, 'etkinlikekle')"></th>
        <th class="tablinks" onclick="openCity(event, 'iletisim')"></th>
        <th> 	
        
		</select></th>
    </tr>
  </thead>
  </table>


              <div class="logo">

                <a href="index.php">LIEEEVE</a>
              </div>
            </header>

            <!-- Üst menüler -->

            <div id="anasayfa" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h1>LIEEEVE</h1>
                    <p>Türkiye'deki IEEE Öğrenci Kolları yılda sayısız etkinlik yapmaktadır.Bu etkinliklerden en etkili şekilde haberdar olmak için tüm bu etkinlikleri bir websitesi içinde toplayıp kategorilendirerek insanlara sunmayı hedeflemekteyiz."Rekabet en iyi ürünlerin ortaya çıkmasını sağlar" mottosunu benimseyerek LIEEEVE'ye bir oy sistemi koymayı düşünmekteyiz. Bu oy kapsamında yılın en iyi etkinliği gibi şeyleri seçerek rekabet hissini kuvvetlendirmeyi düşünmekteyiz.Oylamayı sadece IEEE Öğrenci Kolları başkanları'na verilecek üyeliklerle yapmayı ve Okulların kendi etkinliklerine oy verememelerini sağlayacak filtreleme yöntemlerine gitmek gibi hedeflerimiz var. Site veritabanı olarak MYSQL kullanmayı seçtik.Veritabanı içerisinde etkinlikler, etkinlik tarihleri, etkinlik yeri ve etkinliği yapan öğrenci kolu gibi verileri tutmayı hedeflemekteyiz.</p>
                  </div>
                </div>
              </div>
            </div>

                       



            <!-- Aylar -->
   
         
            <div id="Ocak" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table style="">
				            <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-01-01' and '2020-01-31'"); 

while ($sonuc = $sorgu->fetch_assoc()) { 


$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];

 
?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
  
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>

   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>        
<?php 
} 
 
?>
</table>
				  </div>
				  </div>
        </div>
            </div>


            <div id="Subat" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                                      <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-02-01' and '2020-02-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];

?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
  
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
   <tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>

   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>        
<?php 
} 

?>
</table>

                  </div>
                </div>
              </div>
            </div>

            <div id="Mart" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-03-01' and '2020-03-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];

?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
   <tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>

   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>        
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

              <div id="Nisan" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-04-01' and '2020-04-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];

?>
    
     <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
   <tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

            <div id="Mayis" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                   <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-05-01' and '2020-05-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];
?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
<tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

            <div id="Haziran" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                   <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-06-01' and '2020-06-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];

?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
    <tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

            <div id="Temmuz" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                   <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-07-01' and '2020-07-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];
?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
   <tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>

   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

           <div id="Agustos" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-08-01' and '2020-08-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];
?>
    
     <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
<tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

           <div id="Eylul" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-09-01' and '2020-09-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];

?>
    
     <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
<tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

            <div id="Ekim" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                   <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-10-01' and '2020-10-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];
?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
<tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

            <div id="Kasim" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-11-01' and '2020-11-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];
?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
<tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

             <div id="Aralik" class="tabcontent">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <table>
                    <?php 

$sorgu = $baglanti->query("SELECT * FROM etkinlik where etkinlik_tarihi between '2020-12-01' and '2020-12-31'");

while ($sonuc = $sorgu->fetch_assoc()) { 

$okul = $sonuc['okul'];
$etkinlik_adi = $sonuc['etkinlik_adi'];
$etkinlik_tarihi = $sonuc['etkinlik_tarihi'];
$etkinlik_kategori = $sonuc['etkinlik_kategori'];
$etkinlik_tanim = $sonuc['etkinlik_tanim'];
$etkinlik_fotograf = $sonuc['etkinlik_fotograf'];
?>
    
    <tr>
       
        <th style="text-align: center"><?php echo $okul; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center"><?php echo $etkinlik_adi; ?></th>
   </tr>
    <tr>
       
        <th style="text-align: center">Etkinlik Tarihi : <?php echo $etkinlik_tarihi; ?></th>
   </tr>
   <tr>
       
        <th style="text-align: center">Etkinlik Türü : <?php echo $etkinlik_kategori; ?></th>
   </tr>
<tr>
    <th><img src='<?php echo $etkinlik_fotograf ?>'></th>
   </tr>
   <tr>
          <th><?php echo $etkinlik_tanim; ?></th>
    </tr>
<?php 
} 

?>
</table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Arama..." />
              </form>
            </section>


              
            <!-- Menu -->
<div>
	<br>
		<select id="yil" class="custom-select custom-select-sm"> 		
  		<option value="1">2019-2020</option>
		</select>
</div>
            <nav id="menu">
              <div>
              <ul>
  <a class="tablinks" onclick="openCity(event, 'Ocak')">Ocak</a>
  <a class="tablinks" onclick="openCity(event, 'Subat')">Şubat</a>
  <a class="tablinks" onclick="openCity(event, 'Mart')">Mart</a>
  <a class="tablinks" onclick="openCity(event, 'Nisan')">Nisan</a>
  <a class="tablinks" onclick="openCity(event, 'Mayis')">Mayıs</a>
  <a class="tablinks" onclick="openCity(event, 'Haziran')">Haziran</a>
  <a class="tablinks" onclick="openCity(event, 'Temmuz')">Temmuz</a>
  <a class="tablinks" onclick="openCity(event, 'Agustos')">Ağustos</a>
  <a class="tablinks" onclick="openCity(event, 'Eylul')">Eylül</a>
  <a class="tablinks" onclick="openCity(event, 'Ekim')">Ekim</a>
  <a class="tablinks" onclick="openCity(event, 'Kasim')">Kasım</a>
  <a class="tablinks" onclick="openCity(event, 'Aralik')">Aralık</a>
              </ul>
            </div>
            </nav>

            <!-- Featured Posts -->
            <div class="featured-posts">
              <div class="heading">
                <h2>Yaklaşan Etkinlikler</h2>
              </div>
              <div class="owl-carousel owl-theme">
                <a >
                  <div class="featured-item">
                    <img src="assets/images/kid.jpg" alt="featured one">
                    <p>IEEE BAUN olarak sloganımız: Sektörün en eşit hâli! Kadın İş Derse’20 etkinliğimizin beşincisini düzenliyoruz! Etkinliğimiz 4Mart 2020 Çarşamba günü okulumuz Mühendislik Fakültesi Amfisinde gerçekleşecektir. Alanında uzman konuşmacılarımızın katılacağı etkinliğimize davetlisiniz!</p>
                  </div>
                </a>
                <a >
                  <div class="featured-item">
                    <img src="assets/images/kid.jpg" alt="featured two">
                    <p>IEEE BAUN olarak sloganımız: Sektörün en eşit hâli! Kadın İş Derse’20 etkinliğimizin beşincisini düzenliyoruz! Etkinliğimiz 4Mart 2020 Çarşamba günü okulumuz Mühendislik Fakültesi Amfisinde gerçekleşecektir. Alanında uzman konuşmacılarımızın katılacağı etkinliğimize davetlisiniz!</p>
                  </div>
                </a>
                <a >
                  <div class="featured-item">
                    <img src="assets/images/kid.jpg" alt="featured three">
                    <p>IEEE BAUN olarak sloganımız: Sektörün en eşit hâli! Kadın İş Derse’20 etkinliğimizin beşincisini düzenliyoruz! Etkinliğimiz 4Mart 2020 Çarşamba günü okulumuz Mühendislik Fakültesi Amfisinde gerçekleşecektir. Alanında uzman konuşmacılarımızın katılacağı etkinliğimize davetlisiniz!</p>
                  </div>
                </a>
              </div>
            </div>




            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">  2020 BAUN IEEE CS
              <br>Designed by <a rel="nofollow" href="http://www.balikesir.edu.tr/~ieee/">BAUN CS</a></p>
            </footer>
    


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/deneme.js"></script>
    </div>
</div>
</div>
</body>



</html>
