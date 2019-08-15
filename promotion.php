<!doctype html>
<html lang="en">
<head>
<title>Logo Design- ArcLogo</title>
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

$urhere = "logodesign";
?>






</head>
<body class="innerpages promotion">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>







<section class="promotionbanner" style="background-image:url(<?php echo $basesurl;?>images/banners/banner.webp)">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="banlogslider">
          <div class="item">
            <figure>
              <img src="<?php echo $basesurl;?>images/banimg.jpg">
            </figure>
          </div>
          <div class="item">
            <figure>
              <img src="<?php echo $basesurl;?>images/banimg1.jpg">
            </figure>
          </div>
          <div class="item">
            <figure>
              <img src="<?php echo $basesurl;?>images/banimg2.jpg">
            </figure>
          </div>
        </div>
        <div class="star-image">
           <img src="<?php echo $basesurl;?>images/stars-icon.png" alt="Star">
        </div>
      </div>

      <div class="col-md-4">
        <div class="formmy">
          <div class="hdmy">
            <h3>UP TO 75% DISCOUNT<span>Professional Logo & Web Design Solutions for You</span></h3>
          </div>
          <?php
          $bannerform = $_SERVER['HTTP_HOST']; 
          $bannerform = $srcurl."bannerform.php"; 
          include($bannerform); 
          ?>
          <span class="point">*Signup now to avail this deal</span>
        </div>
      </div>
    </div>
    <div class="row margin-top-6">
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
          <div class="images-check">
             <img src="<?php echo $basesurl;?>images/arrow-check.png" alt="" width="100%">  
          </div>
          <div class="images-text">
             <h4 class="mb-0 font16">Unlimited Revisions</h4>
          </div>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
          <div class="images-check">
             <img src="<?php echo $basesurl;?>images/arrow-check.png" alt="" width="100%">
          </div>
          <div class="images-text">
             <h4 class="mb-0 font16">24/7 Live Support</h4>
          </div>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
          <div class="images-check">
             <img src="<?php echo $basesurl;?>images/arrow-check.png" alt="" width="100%">  
          </div>
          <div class="images-text">
             <h4 class="mb-6 font16">100% Ownership Rights</h4>
          </div>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
          <div class="images-check">
             <img src="<?php echo $basesurl;?>images/arrow-check.png" alt="" width="100%">  
          </div>
          <div class="images-text">
             <h4 class="mb-0 font16">Print &amp; Web Ready Files</h4>
          </div>
       </div>
    </div>

  </div>
</section>



<?php
$satisfied = $_SERVER['HTTP_HOST']; 
$satisfied = $srcurl."satisfied.php"; 
include($satisfied); 
?>



<section class="mtypes">
  <div class="container">
    <div class="row">
      <h2>WHAT TYPE IS YOUR LOGO?</h2>
      <div class="tab-custom">
        <ul class="tabbing-links">
          <li class="current" data-targetit="tabs-iconicld">Iconic Logo design</li>
          <li data-targetit="tabs-illuslogodesign">Illustrative Logo Design</li>
          <li data-targetit="tabs-wordmarkld">Wordmark Logo Design</li>
          <li data-targetit="tabs-threedld">3D Logo Design</li>
          <li data-targetit="tabs-abstractld">Abstract Logo Design</li>
          <li data-targetit="tabs-flatld">Flat Logo Design</li>
        </ul>

         
        <div class="tabs tabs-iconicld current">
          <div class="lft">
            <p>A well Iconic Logo Design directly represents (or shows us) an idea, concept, operation or action. Icons simplify or summarize an operation through a graphical representation. Iconic Logo Designs are commonly used in applications (or apps), to represent what the app does, and are a key element in UI/UX interface.</p>
            <div class="btnwrap">
              <a href="javascript:;" class="btn-theme-outline mymy">Let's Start</a>
              <a href="javascript:;" class="what-ul-a" onclick="setButtonURL();">Want to Discuss <br class="br">Live Chat Now</a>
            </div>
          </div>
          <div class="rht">
            <figure>
              <img src="<?php echo $basesurl;?>images/iconic.png">
            </figure>
          </div>
        </div>

        <div class="tabs tabs-illuslogodesign">
          <div class="lft">
            <p>Illustrative logos are much more elaborate and harder to design. They are the best among all treatments. To establish a logo as a brand in a highly competitive market, an illustrative logo is the best solution. We take <b>illustrative logo design</b> very seriously and we have all the expertise and tools require to create logos that stand to the test of time. </p>
            <div class="btnwrap">
              <a href="javascript:;" class="btn-theme-outline mymy">Let's Start</a>
              <a href="javascript:;" class="what-ul-a" onclick="setButtonURL();">Want to Discuss <br class="br">Live Chat Now</a>
            </div>
          </div>
          <div class="rht">
            <figure>
              <img src="<?php echo $basesurl;?>images/Illustrative.png">
            </figure>
          </div>
        </div>

        <div class="tabs tabs-wordmarkld">
          <div class="lft">
            <p>Do you want a wordmark logo for your business?  <br><br>Wordmark logos are all about keeping it simple. Wordmark logos are used widely across the industries especially <b>Tech, Media, Fashion and Food</b> for a reason.  They’re clean and make the most memorable impression on targeted audience.</p>
            <div class="btnwrap">
              <a href="javascript:;" class="btn-theme-outline mymy">Let's Start</a>
              <a href="javascript:;" class="what-ul-a" onclick="setButtonURL();">Want to Discuss <br class="br">Live Chat Now</a>
            </div>
          </div>
          <div class="rht">
            <figure>
              <img src="<?php echo $basesurl;?>images/Wordmark.png">
            </figure>
          </div>
        </div>

        <div class="tabs tabs-threedld">
          <div class="lft">
            <p>3D logos are becoming increasingly popular while most brands go for flat logos, 3D logos make an instant impression on customers and tips the scales in a brand’s favor. We ArcLogo design 3D logos that communicate the brand message clearly and effectively. Moreover, we have worked for a multitude of brands from different industries and have successfully delivered 100% satisfaction to each one of them.</p>
            <div class="btnwrap">
              <a href="javascript:;" class="btn-theme-outline mymy">Let's Start</a>
              <a href="javascript:;" class="what-ul-a" onclick="setButtonURL();">Want to Discuss <br class="br">Live Chat Now</a>
            </div>
          </div>
          <div class="rht">
            <figure>
              <img src="<?php echo $basesurl;?>images/3dnew.png">
            </figure>
          </div>
        </div>

        <div class="tabs tabs-abstractld">
          <div class="lft">
            <p>If you lack inspiration, we have a range of awesome Abstract Logo Design ideas for your business. Abstract Logo Design are a popular type of logo design form small businesses to large brands. <b>A well designed abstract logo</b> requires really hard work and being up to date with the <b>latest trends in design</b>.</p>
            <div class="btnwrap">
              <a href="javascript:;" class="btn-theme-outline mymy">Let's Start</a>
              <a href="javascript:;" class="what-ul-a" onclick="setButtonURL();">Want to Discuss <br class="br">Live Chat Now</a>
            </div>
          </div>
          <div class="rht">
            <figure>
              <img src="<?php echo $basesurl;?>images/Abstract.png">
            </figure>
          </div>
        </div>

        <div class="tabs tabs-flatld">
          <div class="lft">
            <p>Flat Logo Designs have become increasingly popular in the last couple of years among professional designers and can be seen in almost every aspect of visual designs. Flat Logo Designs have their own remarkable and quite unique characteristics. To get a taste for this trend, We ArcLogo have curated a roundup of beautiful Flat Logo Designs, making an <b>impact</b> on customers and ensuring that they'll <b>remember</b>.</p>
            <div class="btnwrap">
              <a href="javascript:;" class="btn-theme-outline mymy">Let's Start</a>
              <a href="javascript:;" class="what-ul-a" onclick="setButtonURL();">Want to Discuss <br class="br">Live Chat Now</a>
            </div>
          </div>
          <div class="rht">
            <figure>
              <img src="<?php echo $basesurl;?>images/FLATnew.png">
            </figure>
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
          <h2>Take a look at our diverse portfolio, we have done for our clients.</h2>
          <p>We help them break creative boundaries to make their unique ideas stand out.</p>  
        </div>

        
        <ul class="portfoliolist grid">
           
  <li class="border-box-effect logoportfo" data-category="transition">
      <a class="" data-fancybox="port" tabindex="-1"  href="assets/images/portfolio/logo/inner/senior-ville-big-inside.png">
        <figure>
          <img src="assets/images/portfolio/logo/thumbnails/senior-ville-big.png">
        </figure>
      </a>
    </li>
    <li class="border-box-effect logoportfo" data-category="transition">
      <a class="" data-fancybox="port" tabindex="-1"  href="assets/images/portfolio/logo/inner/slingerz-wax-big-inside.png">
        <figure>
          <img src="assets/images/portfolio/logo/thumbnails/slingerz-wax-big.png">
        </figure>
      </a>
    </li>
    
    <li class="border-box-effect logoportfo" data-category="transition">
      <a class="" data-fancybox="port" tabindex="-1"  href="assets/images/portfolio/logo/inner/spruce-goose-big-inside.png">
        <figure>
          <img src="assets/images/portfolio/logo/thumbnails/spruce-goose-big.png">
        </figure>
      </a>
    </li>
    <li class="border-box-effect logoportfo" data-category="transition">
      <a class="" data-fancybox="port" tabindex="-1"  href="assets/images/portfolio/logo/inner/swl-big-inside.png">
        <figure>
          <img src="assets/images/portfolio/logo/thumbnails/swl-big.png">
        </figure>
      </a>
    </li>
    <li class="border-box-effect logoportfo" data-category="transition">
      <a class="" data-fancybox="port" tabindex="-1"  href="assets/images/portfolio/logo/inner/the-vet-big-inside.png">
        <figure>
          <img src="assets/images/portfolio/logo/thumbnails/the-vet-big.png">
        </figure>
      </a>
    </li>
     <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/13.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/13.png">
      </figure>
    </a>
  </li>
   <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/16.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/16.png">
      </figure>
    </a>
  </li>
  <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/new-04.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/new-04.png">
      </figure>
    </a>
  </li>
  
  <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/new-07.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/new-07.png">
      </figure>
    </a>
  </li>
  <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/14.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/14.png">
      </figure>
    </a>
  </li>
  <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/15.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/15.png">
      </figure>
    </a>
  </li>

  
  <li class="logoportfo border-box-effect" data-category="transition">
    <a class="" data-fancybox="port" tabindex="-1"  href="<?php echo $basesurl;?>images/portfolio/logo/new-08.png">
      <figure>
        <img src="<?php echo $basesurl;?>images/portfolio/logo/new-08.png">
      </figure>
    </a>
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
        <h2>What’s the cost of a Logo?</h2>
        <p>Keeping your budget in mind, we give you optimum results!</p>
      </div>  
      <div class="col-lg-12"> 
          
        <div class="tab-content pricingboxes">
          
          


          <div class="tab-pane active">
            <div class="smallboxes packagesslider">
  <div class="smallbox">
    <h2>$33.99 <span><s>$66.98</s></span> </h2>
    <h4>Special Logo <br> Package</h4>
    <p>Suitable for low level startups and brand revamps for companies.</p>
    <div class="hrline"></div>
    
    <ul class="ticklist2 list-scroll">
      <li>4 Logo Design Concepts</li>
      <li>2 Revisions</li>
      <li>1 Dedicated Designers</li>
      <li>24 - 48 hrs Turnaround Time</li>
      <li>File Format (JPG)</li>
      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
    </ul>
    
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/special-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=1" class="btn-packages">Place Your Order</a>
    </div>

  </div>

  <div class="smallbox">
    <h2>$55.99 <span><s>$110.98</s></span> </h2>
    <h4>Bronze Logo<br> Package</h4>
    <p>Suitable for mid-level startups and organizations.</p>
    <div class="hrline"></div>
    <!-- <h3>Payable Amount</h3> -->
    <ul class="ticklist2 list-scroll">
      <li>6 Logo Design Concepts</li>
      <li>5 Revisions</li>
      <li>2 Dedicated Designers</li>
      <li>24 - 48 hrs Turnaround Time</li>
      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
      
    </ul>
    
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/bronze-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=2" class="btn-packages">Place Your Order</a>
    </div>

  </div>

  <div class="smallbox">
    <h2>$88.99 <span><s>$176.98</s></span> </h2>
    <h4>Silver Logo<br> Package</h4>
    <p>Suitable for mid-level and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <!-- <h3>Payable Amount</h3> -->
    <ul class="ticklist2 list-scroll">
      <li>8 Logo Design Concepts</li>
      <li>Unlimited Revisions</li>
      <li>FREE Icon Design</li>
      <li>FREE Grayscale Format</li>
      <li>FREE Color Options</li>
      <li>FREE Vector Files</li>
      <li>4 Creative Designers</li>
      <li>48 hrs Turnaround Time</li>

      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
      
    </ul>
    
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/silver-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=3" class="btn-packages">Place Your Order</a>
    </div>

  </div>

  <div class="smallbox">
    <h2>$111.99 <span><s>$222.98</s></span> </h2>
    <h4>Gold Logo <br> Package</h4>
    <p>Suitable for potential super-startups and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <ul class="ticklist2 list-scroll">
      <li>Unlimited Logo Concepts (6 Initial Concepts)</li>
      <li>Unlimited Revisions</li>
      <li>FREE Icon Design</li>
      <li>FREE Grayscale Format</li>
      <li>FREE Color Options</li>
      <li>FREE File Formats (PSD, PDF, AI, JPEG, PNG)</li>
      <li>FREE Vector Files</li>
      <li>Stationery Design(Business Card, Letterhead, Envelope, Invoice)</li>
      <li>6 Dedicated Designers</li>
      <li>48 hrs Turnaround Time</li>

      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
      
    </ul>
    
    <div class="price-btnwrap"> 
      <a href="<?php echo $path;?>ourpackages/gold-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=4" class="btn-packages">Place Your Order</a>
    </div>
  </div>

  <div class="smallbox">
    <h2>$144.99 <span><s>$289.98</s></span> </h2>
    <h4>Platinum Logo  <br> Package</h4>
    <p>Suitable for potential super-startups and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <ul class="ticklist2 list-scroll">
      <li>Unlimited Logo Concepts (8 Initial Concepts )</li>
      <li>6 Dedicated Design Artists</li>
      <li>Unlimited Revisions</li>
      <li>2 Free Custom Startionery Designs (Letterhead, Envelope, Business Card, Invoice, Contract Cover Page Design)</li>
      <li>1 Double Sided Flyer Design</li>
      <li>FREE MS Word Letterhead</li>
      <li>Free Email Signature</li>
      <li>FREE Fax Template</li>
      <li>All Final File Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>
      <li>Facebook Banner Design</li>
      <li>Instagram Design</li>
      <li>Twitter Design</li>
      <li>YouTube Design</li>
      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
    </ul>
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/platinum-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=5" class="btn-packages">Place Your Order</a>
    </div>
  </div>

  <div class="smallbox">
    <h2>$144.99 <span><s>$289.98</s></span> </h2>
    <h4>Basic Illustration  <br> Logo  Package</h4>
    <p>Suitable for low level startups and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <ul class="ticklist2 list-scroll">
      <li>2 Custom Logo Design Concepts</li>
      <li>1 Dedicated Designer</li>
      <li>2 Revision Rounds</li>
      <li>48 to 72 hours TAT</li>
      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
    </ul>
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/basic-illustration-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=6" class="btn-packages">Place Your Order</a>
    </div>
  </div>

  <div class="smallbox">
    <h2>$244.99 <span><s>$488.98</s></span> </h2>
    <h4>Startup Illustration  <br> Logo  Package</h4>
    <p>Suitable for mid level startups and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <ul class="ticklist2 list-scroll">
       <li>5 Custom Logo Design Concepts</li>
      <li>2 Dedicated Designers</li>
      <li>FREE Icon</li>
      <li>Business Card Design</li>
      <li>6 Revision Rounds</li>
      <li>48 to 72 hours TAT</li>
      <li>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>

      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
    </ul>
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/startup-illustration-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=7" class="btn-packages">Place Your Order</a>
    </div>
  </div>

  <div class="smallbox">
    <h2>$344.99 <span><s>$688.98</s></span> </h2>
    <h4>Professional Illustration  <br> Logo  Package</h4>
    <p>Suitable for potential super-startups and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <ul class="ticklist2 list-scroll">
      <li>8 Custom Logo Design Concepts</li>
      <li>4 Dedicated Designers</li>
      <li>Unlimited Revisions</li>
      <li>FREE Icon</li>
      <li>"FREE Custom Stationery Design (Letterhead, Envelope, Business Card)"</li>
      <li>FREE MS Word Letterhead</li>
      <li>24 to 48 hours TAT</li>
      <li>All Final File Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>

      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
    </ul>
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/professional-illustration-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=8" class="btn-packages">Place Your Order</a>
    </div>
  </div>

  <div class="smallbox">
    <h2>$394.99 <span><s>$788.98</s></span> </h2>
    <h4>3D logo  <br>   Package</h4>
    <p>Suitable for potential super-startups and brand revamps for existing companies</p>
    <div class="hrline"></div>
    <ul class="ticklist2 list-scroll">
      <li>3 Unique 3D Logo Concepts</li>
      <li>Light Effects and VFX</li>
      <li>Fully Rendered</li>
      <li>Multiple 3D Angles</li>
      <li>By 3 Award Winning Designers</li>
      <li>72 hours Turnaround Time</li>
      <li>UNLIMITED Revisions</li>
      <li class="heading">FEATURES</li>
      <li>100% Ownership Rights</li>
      <li>100% Satisfaction Guarantee</li>
      <li>100% Unique Design Guarantee</li>
      <li>100% Money Back Guarantee</li>
    </ul>
    <div class="price-btnwrap">
      <a href="<?php echo $path;?>ourpackages/3d-logo-package" class="vdetails">View Details</a>
      <a href="<?php echo $path;?>order?pack=9" class="btn-packages">Place Your Order</a>
    </div>
  </div>
  
</div>
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


<section class="sec-7 industry">
         <div class="container">
            <h3>Serving Fortune 500 Companies</h3>
            <h2>Belonging to 45+ Industries!</h2>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box ico-sprite">
                     <span class="ico engg"></span>
                     <h4>Engineering</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico religion"></span>
                     <h4>Religion</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico business"></span>
                     <h4>Financial</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico medical"></span>
                     <h4>Medical</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico communications"></span>
                     <h4>Communication</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico children"></span>
                     <h4>Children</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico construction"></span>
                     <h4>Construction</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico like"></span>
                     <h4>Social</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico trivia"></span>
                     <h4>Insurance</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico health"></span>
                     <h4>Health</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico finance"></span>
                     <h4>Entertainment</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico craft"></span>
                     <h4>Craft</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico tech"></span>
                     <h4>Technology</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico educational"></span>
                     <h4>Education</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico lifestyle"></span>
                     <h4>Consultation</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico travel"></span>
                     <h4>Travel</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico weather"></span>
                     <h4>Environmental</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico music"></span>
                     <h4>Music</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico auto"></span>
                     <h4>Automotive</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico social"></span>
                     <h4>Human Resource</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico architect"></span>
                     <h4>Architectural</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico role-playing"></span>
                     <h4>Matrimony</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico fashion"></span>
                     <h4>Fashion</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico navigation"></span>
                     <h4>Navigation</h4>
                  </div>
               </div>
            </div>
            <div class="row nomargin">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico catalogue"></span>
                     <h4>Catalogues</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico sports"></span>
                     <h4>Sports</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico food"></span>
                     <h4>Food</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico art"></span>
                     <h4>Art</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico spa"></span>
                     <h4>Spa</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico news"></span>
                     <h4>News</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>


<?php
$clientslogos = $_SERVER['HTTP_HOST']; 
$clientslogos = $srcurl."clientslogos.php"; 
include($clientslogos); 
?>

<?php
$testimonial = $_SERVER['HTTP_HOST']; 
$testimonial = $srcurl."logo-testimonials.php"; 
include($testimonial); 
?>

<?php
$helpingbrand = $_SERVER['HTTP_HOST']; 
$helpingbrand = $srcurl."helpingbrand.php"; 
include($helpingbrand); 
?>







<?php
$bottomcta = $_SERVER['HTTP_HOST']; 
$bottomcta = $srcurl."bottomcta.php"; 
include($bottomcta); 
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