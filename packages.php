+<!doctype html>
<html lang="en">
<head>
<title>Packages- ArcLogo</title>
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
$urhere = "pricing";
?>

<style type="text/css">
  .pricing-sec .nav-pills li {
    margin-right: -2 !important;}
</style>


</head>
<body class="inner-pages cltestpg packagespg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include_once($header); 
?>




<section class="sec-padding pricing-sec mtpx-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>Serving Economical & Efficient Design Packages</h2>
        <p>Our Design and Development professionals aim to provide you nothing but the most beautiful designs in the industry. Pick a suitable design package below or discuss a custom quote with us today.</p>
      </div>  
      <div class="col-lg-12"> 
          <ul class="nav nav-pills">
            
            <li><a data-toggle="pill" href="#logodesign" class="active show">Logo</a></li>
            <li><a data-toggle="pill" href="#branding" class="">Branding</a></li>
            <li><a data-toggle="pill" href="#webdd" class="">Web Design</a></li>
            <li><a data-toggle="pill" href="#videoanimation" class="">Video Animation</a></li>
            <li><a data-toggle="pill" href="#seo" class="">Seo Packages</a></li>
            <li><a data-toggle="pill" href="#content" class="">Content Writing Packages</a></li>
            <li><a data-toggle="pill" href="#socal" class="">Social Media Marketing</a></li>
             <li><a data-toggle="pill" href="#mobileapp" class="">App Design</a></li>
             <li><a data-toggle="pill" href="#combo" class="">Combo Packages</a></li>
          </ul>
        <div class="tab-content pricingboxes">
          
          


          <div id="logodesign" class="tab-pane active inner-tab">
            <ul class="nav nav-pills">
            
            <li><a data-toggle="pill" href="#logod" class="active show">Abstract, Flat, Iconic</a></li>
            <li><a data-toggle="pill" href="#Illustrative" class="">Illustrative</a></li>
            <li><a data-toggle="pill" href="#3D" class="">3D</a></li>
            <li><a data-toggle="pill" href="#mascot" class="">Mascot</a></li>
            <li><a data-toggle="pill" href="#animation-logo">Animation Logo</a></li>
            
          </ul>
        <div class="tab-content pricingboxes">
         
          


          <div id="logod" class="tab-pane active no-border">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-logo.php"; 
            include($packages); 
            ?>
          </div>

          <div id="Illustrative" class="tab-pane no-border">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-illustrative-logo.php"; 
            include($packages); 
            ?>
          </div>
          <div id="3D" class="tab-pane no-border">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-3d-logo.php"; 
            include($packages); 
            ?>
          </div>
           <div id="mascot" class="tab-pane no-border">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-mascot-logo.php"; 
            include($packages); 
            ?>
          </div>
           <div id="animation-logo" class="tab-pane no-border">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-animation-logo.php"; 
            include($packages); 
            ?>
          </div>
        
          
        </div>
          </div>

          <div id="combo" class="tab-pane ">
             <?php
            $packagescombo = $_SERVER['HTTP_HOST']; 
            $packagescombo = $srcurl."packages-combo.php"; 
            include($packagescombo); 
            ?>
          </div>

          <div id="webdd" class="tab-pane ">
            
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-webdesign.php"; 
            include($packages); 
            ?>
          </div>

          <div id="branding" class="tab-pane">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-branding.php"; 
            include($packages); 
            ?>
          </div>

          <div id="videoanimation" class="tab-pane">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-video.php"; 
            include($packages); 
            ?>
          </div>

          <div id="seo" class="tab-pane">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."seo-packages.php"; 
            include($packages); 
            ?>
          </div>

          <div id="content" class="tab-pane">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."content-packages.php"; 
            include($packages); 
            ?>
          </div>

          <div id="mobileapp" class="tab-pane">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-mobileapps.php"; 
            include($packages); 
            ?>
          </div>

          <div id="socal" class="tab-pane">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-social-media.php"; 
            include($packages); 
            ?>
          </div>

          
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$packagesstartupcombo = $_SERVER['HTTP_HOST']; 
$packagesstartupcombo = $srcurl."packages-startupcombo.php"; 
include($packagesstartupcombo); 
?>

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