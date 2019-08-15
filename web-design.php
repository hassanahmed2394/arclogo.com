<!doctype html>
<html lang="en">
<head>
<title>Custom Website Design and Development- ArcLogo</title>
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

$urhere = "webdesign";
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
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/web-1.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Custom Website Design and Development</h1>
                <p class="subtitle">Websites have become essentials when it comes to operating businesses today.</p>
                <ul class="myticks">
                  <li>Customized</li>
                  <li>Efficient</li>
                  <li>Unique</li>
                  <li>Creative</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/web-2.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Custom Website Design and Development</h1>
                <p class="subtitle">Websites have become essentials when it comes to operating businesses today.</p>
                <ul class="myticks">
                  <li>Customized</li>
                  <li>Efficient</li>
                  <li>Unique</li>
                  <li>Creative</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/web-3.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Custom Website Design and Development</h1>
                <p class="subtitle">Websites have become essentials when it comes to operating businesses today.</p>
                <ul class="myticks">
                  <li>Customized</li>
                  <li>Efficient</li>
                  <li>Unique</li>
                  <li>Creative</li>
                </ul>
                 <!--<a href="<?php echo $path;?>order" class="btn-theme">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
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
            <div class="tabs webdesign myservices current" role="toolbar">
            <?php
            $webdetail = $_SERVER['HTTP_HOST']; 
            $webdetail = $srcurl."webdetail.php"; 
            include($webdetail); 
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
          <h2>Let’s look at some of our Website Designs and Developments.</h2>
          <p>Sometimes, samples are what make you understand the job better.</p>  
        </div>

        
        <ul class="portfoliolist grid">
          <?php
          $portfolioweb = $_SERVER['HTTP_HOST']; 
          $portfolioweb = $srcurl."portfolio-web.php"; 
          include($portfolioweb); 
          ?>
        </ul>

        

      </div>
    </div>
  </div>
</section>






<section class="sec-padding pricing-sec ">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>How much does it cost to design a web?</h2>
        <p>We guarantee that you’ll get a great web design no matter what your budget is.</p>
      </div>  
      <div class="col-lg-12"> 
          
        <div class="tab-content pricingboxes">
          
          


          <div class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-webdesign.php"; 
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
$testimonial = $srcurl."web-testimonials.php"; 
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