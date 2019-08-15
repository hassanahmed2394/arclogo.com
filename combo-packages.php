<!doctype html>
<html lang="en">
<head>
<title>Combo Packages- ArcLogo</title>
<meta name="keywords" content="ArcLogo">
<meta name="description" content="Logo Designing, Best Logo Designing, Web Designing, Best Logo Packages">


<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>


<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include_once($style); 
?>

<?php
$urhere = "combopackages";
?>


</head>
<body class="inner-pages cltestpg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include_once($header); 
?>




<section class="sec-padding pricing-sec mtpx-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>Our Combos</h2>
        <p>Combo Packages allow you to pick and choose from a variety of options that suit your requirements.</p>
      </div>  
      <div class="col-lg-12"> 
        <div class="tab-content pricingboxes">
          
          


          <div id="" class="tab-pane active">
            <?php
            $packagescombo = $_SERVER['HTTP_HOST']; 
            $packagescombo = $srcurl."packages-combo.php"; 
            include($packagescombo); 
            ?>
          </div>

          

          

          
        </div>
      </div>
    </div>
  </div>
</section>



<?php
$cta = $_SERVER['HTTP_HOST']; 
$cta = $srcurl."cta.php"; 
include($cta); 
?>


<?php
$testimonial = $_SERVER['HTTP_HOST']; 
$testimonial = $srcurl."testimonial.php"; 
include($testimonial); 
?>


<?php
$faq = $_SERVER['HTTP_HOST']; 
$faq = $srcurl."faqs.php"; 
include_once($faq); 
?>

<?php
$bottomform = $_SERVER['HTTP_HOST']; 
$bottomform = $srcurl."bottomform.php"; 
include_once($bottomform); 
?>









<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include_once($footer); 
?>




<!-- scroll top car
<div class="car-top"><span>
<img src="<?php echo $basesurl;?>images/car.png" alt="Top" title="Back to top" />
</span></div>
-->
</body>
</html>