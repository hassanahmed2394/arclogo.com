

<!doctype html>
<html lang="en">
<head>
<title>ArcLogo</title>
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

$urhere = "homepage";
?>

<?php
$geo=$_SERVER['HTTP_HOST']; 
$geo= $srcurl.'geoplugin.class.php';
include($geo); 
// require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
$varcountryip=$geoplugin->ip;
// echo 
// redirect based on country code:

?>
<script>
    console.log(" <?php echo $varcountryip ?>");
    var getCountryCode="<?php echo $var_country_code?>";
    var getip="<?php echo $varcountryip ?>";
//   console.log("ip"+ getip getCountryCode);
    
</script>

<?php 
if ($var_country_code == "PK") {
// echo $var_country_code;
?>

<!--<script>-->
<!--    window.location.replace("https://seoprohub.com/");-->
    
<!--</script>-->
<?php
}
else if ($var_country_code == "GB") {
?>
// <script>
//     window.location.replace("https://seoprohub.co.uk/");
// </script>
<?php
}
else {
    


}?>









</head>
<body class="hompg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>




<div class="slider-wrapper">
  <section class="banslidee">
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/hm2.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Logo’s that push your brand forward.</h1>
                <p class="subtitle">Skilled Professionals are waiting to create exceptional logos for your brand.</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Appropriate</li>
                  <li>Aesthetically Pleasing</li>
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
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/hm4.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Branding Changes Everything.</h1>
                <p class="subtitle">Branding is a tool that can change ideas, perceptions and everything else in between. We provide branding services that set you apart and embark on your ideology.</p>
                <ul class="myticks">
                  <li>Unique Branding</li>
                  <li>Creativity</li>
                  <li>Timely Delivery</li>
                  <li>Growth</li>
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
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/hm6.png)">
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
    <div class="item ">
        <video class="mainvideo" autoplay="" loop="" muted="" playsinline="" preload="metadata"> 
        <source src="assets/videos/animated-explainer-video.mp4" type="video/mp4"> 
         Your browser does not support the video tag. </video>
      <div class="home-banner d-flex vd1">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>Animation that keeps you real benefits</h1>
                <p class="subtitle">Video is undoubtedly the medium of the modern age. Let us help you create magnificent animated videos to educate and evoke your customers!</p>
                <ul class="myticks">
                  <li>Unique</li>
                  <li>Creative</li>
                  <li>Finesse</li>
                  <li>Relatable</li>
                </ul>
                <!--<a href="<?php echo $path;?>order" class="btn-theme  get-design-btn">Get a Design Now</a>-->
                <a class="btn-theme  get-design-btn">Let's Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/hm5.png)">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
</div>

<!-- <section id="factsTwo">
  <div class="css-overlay">
    <div class="container">
          <div class="row text-center">
              <div class="col-sm-4 selected">
              <ul class="myinnerlist">
                <li>Client Co-Ordination and Support</li>
                <li>Customer Satisfaction and Service</li>
                <li>Ownership Rights</li>
                <li>Experienced Professionals</li>
                <li>Money Back Guarantee</li>
              </ul>
               
              </div> 
              <div class="col-sm-8">
                <div class="counter-wrap">
                  <i class="icon-logos-ico_vv"></i>
                  <strong><span class="timer">5246</span>+</strong>
                  <span class="count-description">Logo <br> Designs</span>
                </div>
                <div class="counter-wrap">
                  <i class="icon-web-ico_vv"></i>
                  <strong><span class="timer">285</span>+</strong>
                  <span class="count-description">Website Design <br> & Development</span>
                </div>
                <div class="counter-wrap" >
                  <i class="icon-branding-ico_vv"></i>
                  <strong><span class="timer">1119</span>+</strong>
                  <span class="count-description">Branding <br>Solutions Provided</span>
                </div>
              </div>

          </div>
      </div>
  </div>
</section> -->

<?php
$satisfied = $_SERVER['HTTP_HOST']; 
$satisfied = $srcurl."satisfied.php"; 
include($satisfied); 
?>


<section class="servicesec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <h4>What do you need designed?</h4>
        <p>We cater to each and every design need that you may have. Good Design is known to create impact, evoke emotions and create a certain sense of loyalty. Design works in wondrous ways to boost the look and growth of your business and we are more than willing to provide you with design that serves the purpose.</p>
      </div>
      
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="centerwrap">
          <ul class="boxwrap">
            <li data-targetit="logodesign" class="current">
                <i class="two"></i>
                <h6>Logo <br> Design</h6>
            </li>
            <li data-targetit="brandingservices">
                <i class="three"></i>
                <h6>Branding <br> Services</h6>
            </li>
            <li data-targetit="videoanimation">
              <i class="five"></i>
              <h6>Video Animation <br>Services</h6>
            </li>
            <li data-targetit="webdesign">
                <i class="one"></i>
                <h6>Website Design <br> &amp; Development</h6>
            </li>
            
            
            
            <li data-targetit="Mobileapplication">
              <i class="four"></i>
              <h6>Mobile App <br>Development</h6>
            </li>

            
           
          </ul>

          <div class="tab-content">
            <div class="tabs logodesign current myservices" role="toolbar">
              <?php
              $logodetail = $_SERVER['HTTP_HOST']; 
              $logodetail = $srcurl."logodetail.php"; 
              include($logodetail); 
              ?>
            </div>

            <div class="tabs webdesign myservices" role="toolbar">
            <?php
            $webdetail = $_SERVER['HTTP_HOST']; 
            $webdetail = $srcurl."webdetail.php"; 
            include($webdetail); 
            ?>
            </div>

            <div class="tabs brandingservices myservices" role="toolbar">
              <?php
              $brandingdetail = $_SERVER['HTTP_HOST']; 
              $brandingdetail = $srcurl."brandingdetail.php"; 
              include($brandingdetail); 
              ?>
            </div>
            <div class="tabs videoanimation myservices" role="toolbar">
              <?php
              $videodetail = $_SERVER['HTTP_HOST']; 
              $videodetail = $srcurl."videodetail.php"; 
              include($videodetail); 
              ?>
            </div>
            
            <div class="tabs Mobileapplication myservices" role="toolbar">
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


<section class="sec-padding pricing-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>We have done a lot of work and we would <br>like for you to take a look!</h2>
        <p>Here’s a portfolio made out of hard work, skill and passion.</p>
      </div>  
      <div class="col-lg-12"> 
          <ul class="nav nav-pills">
            <li><a data-toggle="pill" href="#logodesign" class="active show">Logo Design </a></li>
            <li><a data-toggle="pill" href="#branding" class="">Branding</a></li>
            <li><a data-toggle="pill" href="#videoanimation" class="">Video Animation</a></li>
            <li><a data-toggle="pill" href="#webdd" class="">Web Design</a></li>
            <li><a data-toggle="pill" href="#mobileapp" class="">Mobile Application</a></li>
          </ul>
        <div class="tab-content pricingboxes">
          
          <div id="logodesign" class="tab-pane active">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-logo.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="branding" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-branding.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="webdd" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-web.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="videoanimation" class="tab-pane">
            <ul class="portfoliolist grid">
              <?php
              $portfoliologo = $_SERVER['HTTP_HOST']; 
              $portfoliologo = $srcurl."portfolio-video.php"; 
              include($portfoliologo); 
              ?>
            </ul>
          </div>

          <div id="mobileapp" class="tab-pane">
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
    </div>
  </div>
</section>



<?php
$cta = $_SERVER['HTTP_HOST']; 
$cta = $srcurl."cta.php"; 
include($cta); 
?>

<section class="mygrid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Size of your business doesn’t matter at ArcLogo. For us, it is the simple idea that lets us help you develop an identity through magnificent design and appropriate marketing.</h2>
        <p>Businesses worldwide have benefited from our services as we progressed with them, step by step, into creating the brand of their dreams.</p>

        <ul class="gridlisting">
          <li>
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/satisfied-clients.svg">
              </figure>
              <h3>1284</h3>
              <p>satisfied clients</p>
            </div>
          </li>

          <li>
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/years-experience.svg">
              </figure>
              <h3>7</h3>
              <p>Years Experience</p>
            </div>
          </li>

          <li>
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/projects-completed.svg">
              </figure>
              <h3>9892</h3>
              <p>projects completed</p>
            </div>
          </li>

          <li class="nrb">
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/increase-in-roi.svg">
              </figure>
              <h3 class="noplus">170%</h3>
              <p>Increase in ROI</p>
            </div>
          </li>

          <li class="nbb">
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/daily-website-visits.svg">
              </figure>
              <h3>1015</h3>
              <p>daily website visits</p>
            </div>
          </li>

          <li class="nbb">
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/client-coordination.svg">
              </figure>
              <h3 class="noplus">Constant</h3>
              <p> Client Coordination</p>
            </div>
          </li>

          <li class="nbb">
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/customer-satisfaction.svg">
              </figure>
              <h3 class="noplus">Supreme</h3>
              <p> Customer Satisfaction</p>
            </div>
          </li>

          <li class="nbb nrb">
            <div class="innerwrap">
              <figure>
                <img src="<?php echo $basesurl;?>images/ownership-rights.svg">
              </figure>
              <h3 class="noplus">100%</h3>
              <p>Ownership Rights</p>
            </div>
          </li>
          

        </ul>
      </div>
    </div>
  </div>
</section>


<section class="sec-padding pricing-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>What is going to be the Cost?</h2>
        <p>Regardless of what you have to offer, we give nothing but our best.</p>
      </div>  
      <div class="col-lg-12"> 
          <ul class="nav nav-pills">
            
            <li><a data-toggle="pill" href="#logod" class="active show">Abstract, Flat, Iconic</a></li>
            <li><a data-toggle="pill" href="#Illustrative" class="">Illustrative</a></li>
            <li><a data-toggle="pill" href="#3D" class="">3D</a></li>
            <li><a data-toggle="pill" href="#mascot" class="">Mascot</a></li>
            <li><a data-toggle="pill" href="#animation-logo">Animation Logo</a></li>
            
          </ul>
        <div class="tab-content pricingboxes">
         
          


          <div id="logod" class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-logo.php"; 
            include($packages); 
            ?>
          </div>

          <div id="Illustrative" class="tab-pane ">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-illustrative-logo.php"; 
            include($packages); 
            ?>
          </div>
          <div id="3D" class="tab-pane ">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-3d-logo.php"; 
            include($packages); 
            ?>
          </div>
           <div id="mascot" class="tab-pane ">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-mascot-logo.php"; 
            include($packages); 
            ?>
          </div>
           <div id="animation-logo" class="tab-pane ">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-animation-logo.php"; 
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
include($cta2); 
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


<!-- <?php
$bottomcta = $_SERVER['HTTP_HOST']; 
$bottomcta = $srcurl."bottomcta.php"; 
include($bottomcta); 
?> -->


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
include($footer); 
?>



</body>
</html>