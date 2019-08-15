<!doctype html>
<html lang="en">
<head>
<title>World Class Mobile App Development- ArcLogo</title>
<meta name="keywords" content="ArcLogo">
<meta name="description" content="Logo Designing, Best Logo Designing, Web Designing, Best Logo Packages">



<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>


<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "mobileapplication";
?>






</head>
<body class="innerpages">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>




<div class="slider-wrapper">
  <section class="banslidee">
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/app-01.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Applications that Build You</h1>
                <p class="subtitle">ArcLogo brings you services in the regard of Mobile Application Development to ensure your business remains right on top. Our skilled and qualified professionals give it all as we create an application that suits your needs and budget.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Brilliant</li>
                  <li>Technically Sound</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
                <!--<a href="<?php echo $path;?>order" class="btn-theme">Get Custom Quote </a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/app-02.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Applications that Build You</h1>
                <p class="subtitle">ArcLogo brings you services in the regard of Mobile Application Development to ensure your business remains right on top. Our skilled and qualified professionals give it all as we create an application that suits your needs and budget.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Brilliant</li>
                  <li>Technically Sound</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
                <!--<a href="<?php echo $path;?>order" class="btn-theme">Get Custom Quote </a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/app-03.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Applications that Build You</h1>
                <p class="subtitle">ArcLogo brings you services in the regard of Mobile Application Development to ensure your business remains right on top. Our skilled and qualified professionals give it all as we create an application that suits your needs and budget.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Brilliant</li>
                  <li>Technically Sound</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
                <!--<a href="<?php echo $path;?>order" class="btn-theme">Get Custom Quote </a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
</div>



<?php
$satisfied = $_SERVER['HTTP_HOST']; 
$satisfied = $srcurl."satisfied.php"; 
include($satisfied); 
?>



<section class="servicesec">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-12">
        <div class="centerwrap">
          <div class="tab-content">
            <div class="tabs Mobileapplication myservices current" role="toolbar">
              <?php
              $mobiledetail = $_SERVER['HTTP_HOST']; 
              $mobiledetail = $srcurl."mobiledetail.php"; 
              include($mobiledetail); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="filterportfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="text text-center">
          <h2>Take a peek at some of our latest and greatest work!</h2>
          <p>Design excellence can’t really be achieved without working side by side with extraordinary clients from around the world.</p>  
        </div>

        
        <ul class="portfoliolist grid">
          <?php
          $portfoliologo = $_SERVER['HTTP_HOST']; 
          $portfoliologo = $srcurl."portfolio-app.php"; 
          include($portfoliologo); 
          ?>
        </ul>

        

      </div>
    </div>
  </div>
</section>






<section class="sec-padding pricing-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>What Does a Mobile App Cost?</h2>
        <p>Regardless of what your business may be able to afford, we give you our best.</p>
      </div>  
      <div class="col-lg-12"> 
          
        <div class="tab-content pricingboxes">
          
          


          <div class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-mobileapps.php"; 
            include($packages); 
            ?>
          </div>

          

          

          
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$cta2 = $_SERVER['HTTP_HOST']; 
$cta2 = $srcurl."cta2.php"; 
include_once($cta2); 
?>

<?php
$clientslogos = $_SERVER['HTTP_HOST']; 
$clientslogos = $srcurl."clientslogos.php"; 
include($clientslogos); 
?>

<?php
$testimonial = $_SERVER['HTTP_HOST']; 
$testimonial = $srcurl."testimonial.php"; 
include($testimonial); 
?>

<?php
$helpingbrand = $_SERVER['HTTP_HOST']; 
$helpingbrand = $srcurl."helpingbrand.php"; 
include($helpingbrand); 
?>







 <?php
// $bottomcta = $_SERVER['HTTP_HOST']; 
// $bottomcta = $srcurl."bottomcta.php"; 
// include($bottomcta); 
 ?>

<?php
$faq = $_SERVER['HTTP_HOST']; 
$faq = $srcurl."faqs.php"; 
include_once($faq); 
?>



<div class="belowform">
  <div class="container ">
    <div class="row">
      <div class=" col-lg-12 col-xl-12 text-center">
        <div class="home-banner-content">
          <div class="col-lg-8 offset-lg-2 inner-content text-left">
              <?php
              $contactfrm = $_SERVER['HTTP_HOST']; 
              $contactfrm = $srcurl."contactfrm.php"; 
              include_once($contactfrm); 
              ?> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>



</body>
</html>