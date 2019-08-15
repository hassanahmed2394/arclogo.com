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
<body class="hompg illustrativelogopg">
<div id="cover" style="display:none;">
    
    <div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-rolling"><div></div></div><style type="text/css">@keyframes lds-rolling {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
    transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
    transform: translate(-50%, -50%) rotate(360deg);
  }
}
@-webkit-keyframes lds-rolling {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
    transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
    transform: translate(-50%, -50%) rotate(360deg);
  }
}
.lds-rolling {
  position: relative;
}
.lds-rolling div,
.lds-rolling div:after {
  position: absolute;
  width: 130px;
  height: 130px;
  border: 10px solid #1d3f72;
  border-top-color: transparent;
  border-radius: 50%;
}
.lds-rolling div {
  -webkit-animation: lds-rolling 1s linear infinite;
  animation: lds-rolling 1s linear infinite;
  top: 100px;
  left: 100px;
}
.lds-rolling div:after {
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.lds-rolling {
    width: 200px !important;
    height: 200px !important;
    -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
    transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
    margin: 0 auto;
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 20%;
}
</style></div>
    
</div>
<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>


<section class="hero-services hero-subservices forlogolp forweblp" style=" overflow:hidden;position: relative;">
  
  
  <section class="floating_wrap" style="display: none;">
    <div class="btns_wrap">
      
      <a href="javascript:;" class="chat_wrap" onclick="$zopim.livechat.window.toggle()">
        <i class="fa fa-comment sea-bg"></i>
        <span class="sea">Chat With Us</span>
      </a>
      <a href="tel:+18662681794" class="call_wrap">
        <i class="fa fa-phone sea-bg"></i>
        <span class="sea">++1 925 268 9288</span>
      </a>
    </div>
    <div class="float_form_box">
      <div class="floating_form">
        <div class="floating_strip sea-bg">
          <div class="rotatekaro">
            <a href="javascript:;" class="">Get Free Consultancy</a>
          </div>
        </div>
        <div class="floating_inner">
          <h3 class="sea">Signup Now</h3>
          <div class="form_wrap">
            <!-- <form method="POST"  id="quoteForm" autocomplete="off"> -->
              <div class="row">
                <div class="col-md-12 col-xs-12 margin-bottom-10">
                  <input type="text" autocomplete="off" class="form-control sea-bor" placeholder="Full Name" name="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required">
                </div>
                
                <div class="col-md-12 col-xs-12 margin-bottom-10">
                  <input type="email" autocomplete="off" class="form-control sea-bor" placeholder="Email" name="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">
                </div>
                <div class="col-md-12 col-xs-12 margin-bottom-10 ">
                  <input type="number" min="1" autocomplete="off" class="form-control sea-bor" placeholder="Phone Number" name="Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required">
                </div>
                <div class="col-md-12 col-xs-12 margin-bottom-10">
                  <textarea class="form-control sea-bor" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
                </div>
                <div class="col-md-12 col-xs-12 margin-bottom-10 text-center field-mergedleft">
                  <div class="clearfix margin-bottom-20">
                    
                    <div class="col-lg-12">
                      
                      <div class="company_profile pull-right">
                        <label class="control control--checkbox">
                          include Company Profile
                          <input type="checkbox" checked="checked">
                          <div class="control__indicator"></div>
                        </label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="text-center">
                    <input class="btn-green btn-quote sea-bg" type="submit" id="quoteSubmit" name="quote" value="Let's Get Started">
                  </div>
                </div>
              </div>
              <div id="offerFormResult" class="alert alert-success" style="font-size: 12px;display: none;">Congratulations! You've Signed up, For Further Assistance Start <a href="javascript:;" onclick="setButtonURL()"> Live Chat.</a></div>
              <input type="hidden" name="page" value="illustrative-logo-design">
            </form>        </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class=" hero-banner">
      <div class="container">
        <div class="d_t">
          <div class="d_c">
            <div class="actions mt-10" >
              <div class="row">
           
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 paddingtop customize-fields">
                  <div class="banner-mytext">
                    <h2> Custom logo design for your business.</h2>
                    <p>Our experienced logo designers can help you to design your logo and identity and comes with production-ready files that you can use for print or digital.</p>
                    
                    <div class="w80">
                      <div class="myform">
                        <form method="POST" action="webpages/bannerFormController.php" id="quoteForms" autocomplete="off">
                          
                          <div class="flset half">
                            <input type="text" autocomplete="off" class="form-control halfround sea-bor" placeholder="Full Name" name="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required">
                          </div>
                          <input type="hidden" name="_token" value="Rnh67GnLhqlcJT0fAajzMql1sH8kjJ4YqQgoMRv1">
                          <div class="flset half">
                            <input type="email" autocomplete="off" class="form-control sea-bor" placeholder="Email" name="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">
                          </div>
                          <div class="flset half">
                            <input type="number" min="1" autocomplete="off" class="form-control sea-bor" placeholder="Phone Number" name="Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required">
                          </div>
                          <div class="flset full">
                            <input class="btn-green btn-quote sea-bg" type="submit" id="quoteSubmit" name="quote" value="Let's Get Started">
                            <input type="hidden" name="page" value="illustrative-logo-design">
                             <input type="hidden" name="cip" value="">
                              <input type="hidden" name="pc" value="">
                               <input type="hidden" name="ctry" value="">
                            
                          </div>
                          <div id="offerFormResults" class="alert alert-success" style="font-size: 12px; width:40%; margin:9px auto; display:none">Congratulations! You've Signed up, For Further Assistance Start <a href="javascript:;" onclick="setButtonURL()"> Live Chat.</a></div>
                        </form>                    </div>


                      </div>
                      <ul class="mylist">
                        <li class="sea-dots">Hand crafted designs</li>
                        <li class="sea-dots">Dozens of concepts to pick from</li>
                        <li class="sea-dots">100% money back guarantee</li>
                      </ul>
                      
                      <a href="javascript:;" onclick="$zopim.livechat.window.toggle()" class="simplecta sea">Chat now to avail discounts</a>
                      <a href="tel:+1 9252689288" class="mynum">+1 925 268 9288</a>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
     
      
      
      
    
      </section>



<section class="counter ">
      <ul class="packslider">
        <li>
          <a href="javascript:;">
            <figure>
              <img src="assets/images/c1.png" height="64" width="64">
            </figure>
            <span class="wrap">Over 500+ <br> Happy Customers</span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <figure>
              <img src="assets/images/c2.png" height="64" width="64">
            </figure>
            <span class="wrap">Affordable <br> Pricing</span>
          </a>
        </li>
        <li class="dkblk">
          <a href="javascript:;">
            <figure>
              <img src="assets/images/c3.png" height="64" width="64">
            </figure>
            <span class="wrap">Logo Designed For More <br> Than 100+ Companies</span>
          </a>
        </li>
      </ul>
    </section> 

<?php
$portfoliologo = $_SERVER['HTTP_HOST']; 
$portfoliologo = $srcurl."portfolio-logo-illustrative.php"; 
include($portfoliologo); 
?>






<section class="sec-padding pricing-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>What is going to be the Cost?</h2>
        <p>Regardless of what you have to offer, we give nothing but our best.</p>
      </div>  
      <div class="col-lg-12"> 
          <ul class="nav nav-pills">
            
            <!-- <li><a data-toggle="pill" href="#Illustrative" class="">Illustrative</a></li> -->
            
          </ul>
        <div class="tab-content pricingboxes">
          <div id="Illustrative" class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-logo.php"; 
            include($packages); 
            ?>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>



<div class="bggray hidecreative">
  <div class="bggray hidecreative">
    <section class="section-padding process fouritems">
      <div class="container">
        <div class="clearfix">
          <div class="row">
            <div class="col-md-12">
              <h3   >Design Exceptional Logos for <br> Competitive Industry Advantage</h3>
              <p class="wow fadeInDown text-center main" >When it comes to Logo Design, we believe in choosing a unique proven path that’s made for success. Our methodology basically focuses on creating a brand existence like no other.</p>
            </div>
          </div>
          <div class="row methodolgy-slider slider">

            <ul class="fullbox">
              <div class="bbox" >
                <div class="process-img">
                  <span class="icon-research-Concept"></span> 
                </div>
                <h4>Analysis </h4>
                <p> Our brand identity architects look over the company’s core values and analyze how the overall identity will be portrayed to the customer.</p>
              </div>
              <div class="bbox" >
                <div class="process-img">
                  <span class="icon-design-presentation"></span> 
                </div>
                <h4>Creation </h4>
                <p> After complete brand analysis, our architects carefully create a solid brand identity for your corporation that mirrors your core values.</p>
              </div>
              <div class="bbox" >
                <div class="process-img">
                  <span class="icon-discovery"></span> 
                </div>
                <h4>Momentum </h4>
                <p> We provide you the complete details on how your new brand identity represents your company and teach you how your company needs to operate as per the identity.</p>
              </div>
              <div class="bbox" >
                <div class="process-img">
                  <span class="icon-launch-delivery"></span> 
                </div>
                <h4>Results </h4>
                <p> The work doesn’t end when your new brand identity is live. Our brand analysts and architects make sure your new identity is providing you the results that you need.</p>
              </div>
            </ul>
          </div>
          <div class="actions text-center margin-top-20 wow fadeInDown" >
            <a onclick="$zopim.livechat.window.toggle()" class="btn-green">Discuss Your Idea</a> <a href="packages" class="btn-line draw">SEE OUR PACKAGES <i class="fa fa-arrow-right"></i> </a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>




<div class="bggray ">
  <section class="section-padding qualities">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4  class=" fadeInDown">Professionally Proven Worldwide</h4>
          <h3  >We’re Here to Change How Brands Work</h3>
          <p class="text-center wow fadeInDown" >We, at ArcLogo are proven worldwide for the services we provide.<br> We take great pride in providing solutions that rock the world with excellent results.</p>
        </div>
      </div>
      
      <div class="row margin-bottom-20 margin-top-20  ">
        <div class="col-md-1"></div>
        <div class=" col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border " data-wow-delay="0.2s">
          <div class="quality">
            
            <div class="quality-img"><img src="assets/images/constant-client-coordination.svg"></div>
            <h4>Constant Client Coordination</h4>
          </div>
          
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border " data-wow-delay="0.2s">
          <div class="quality">
            
            <div class="quality-img"><img src="assets/images/supreme-customer-satisfaction.svg"></div>
            <h4>Supreme Customer Satisfaction</h4>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border " data-wow-delay="0.3s">
          <div class="quality">
            
            <div class="quality-img"><img src="assets/images/100percent-ownership-rights.svg"></div>
            <h4>100% Ownership Rights</h4>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border " >
          <div class="quality">
            
            <div class="quality-img"><img src="assets/images/secure-money-back-guarantee.svg"></div>
            <h4>Secure Money Back Guarantee</h4>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 " data-wow-delay="0.5s">
          <div class="quality">
            
            <div class="quality-img"><img src="assets/images/industry-proven-professionals.svg"></div>
            <h4>Industry Proven Professionals</h4>
          </div>
        </div>
        
      </div>


      <div class="row">
        <div class="col-md-12">
          <section class="section-padding call-actions  " data-wow-delay="0.3s">
            <div class="row">
              
              <div class="col-md-3">
                <h2 class="text-left">Call us and discuss your project with our experts today.</h2>
                <div class="slash slash2"></div>
                
              </div>
              <div class="col-md-4 phone-div">
                <i class="fa  fa-mobile-phone"></i>
                
                <h3 class="text-left">
                <span>Call us (TOLL FREE)</span>
                +1 925 268 9288</h3>
                <div class="slash"></div>
                
              </div>
              <div class="col-md-5 mail">
                <i class="fa  fa-envelope-open-o"></i>
                
                <h3 class="text-left">
                
                <span>Discuss your Ideas</span>
                info@arclogo.com</h3>
                
              </div>
              <div class="col-md-3" style="display: none;">
                <i class="fa  fa-commenting-o"></i>
                
                <h3 class="text-left">
                
                <span>Call Toll Free</span>
                1-872-888-1188</h3>
                
                
              </div>
              
              
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>



<section class="mytestimonials">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="textwrapper">
         <h4 class="text-center">TESTIMONIALS</h4>
         <h3 class="text-center">What our valuable clients say</h3> 
         <p class="text-center">We have proudly served an awesome client base by delivering comprehensive design solutions. Our clients' feedback and appreciation will explain it all.</p>
       </div>
    </div>
    <div class="col-lg-12">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="mytestimonialswrap">
        <ul class="fortestslider">
          <li>
            <blockquote>
              Working with ArcLogo was phenomenal! The complete brand development solutions that i got were very well defined and perfectly priced.
            </blockquote>
            <div class="reviewerinfo">
              <div class="initials">
                <h5>MM</h5>
              </div>
              <div class="otherhalf">
                <h4>Mason McMahon<span>CEO</span></h4>
                <div class="star">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </li>
          <li>
            <blockquote>
              Got one of my product designs completely revamped from the design team at ArcLogo. The job done was brilliant and helped improve my product sales by far.
            </blockquote>
            <div class="reviewerinfo">
              <div class="initials">
                <h5>KP</h5>
              </div>
              <div class="otherhalf">
                <h4>Kristina Paul Jr<span>Head of Operations</span></h4>
                <div class="star">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </li>
          <li>
            <blockquote>
              One word: finesse! The designers at ArcLogo love to work seamlessly with creativity. I loved the new brand identity that they developed for my company.
            </blockquote>
            <div class="reviewerinfo">
              <div class="initials">
                <h5>JL</h5>
              </div>
              <div class="otherhalf">
                <h4>Janice Lapore<span>Regional Manager Operations</span></h4>
                <div class="star">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
          </div>
        </div>
      </div>
    </div>
     

     
  </div>
</div>
   
</section>





<section class="section-padding gray_bg get_quote myquote">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4 class="text-left">CONTACT US</h4>
        <h3 class="text-left">Let’s give your brand a makeover</h3>
        <p class="text-left">Thinking of giving your brand a complete makeover?
          Talk to our design gurus today and discuss your project in depth.</p>
        <form method="POST" action="webpages/orderFormController.php" id="quoteFormss" autocomplete="off">
          <div class="row">
                      <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedright">

              <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
            </div>
            <input type="hidden" name="_token" value="Dsfy4WKnmD3qKjxsRep4EP5rOvFtFAxDo98EXokk">
            <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedright">
              <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
            </div>
            <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedright">
              <input type="number" min="1" autocomplete="off" id="phone-country" class="form-control" placeholder="Phone Number" name="Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required" />
            </div>
            <!-- <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedleft">
              <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"   required="required"/>
            </div> -->
            <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedright">
             <select name="Packages" id="packages" class="valid safari_only" aria-invalid="false"> <option value="" pack="0">Select Package</option> <option value="Bronze Logo Package - $19.00" pack="1">Bronze Logo Package - $19.00</option> <option value="Silver Logo Package - $39.00" pack="2">Silver Logo Package - $39.00</option> <option value="Gold Logo Package - $69.00" pack="3">Gold Logo Package - $69.00</option> <option value="Platinum Logo Package - $119.00" pack="4">Platinum Logo Package - $119.00</option> <option value="Diamond Logo Package - $169.00" pack="5">Diamond Logo Package - $169.00</option> <option value="Titanium Illustration Logo Package - $219.00" pack="6">Titanium Logo Package - $219.00</option> <option value="Stationery Package - $74.99" pack="7">Stationery Package - $74.99</option> <option value="Infographic Package - $139.99" pack="8">Infographic Package - $139.99</option> <option value="Brochure/Flyer Package - $134.99" pack="9">Brochure/Flyer Package - $134.99</option> <option value="Basic Website Package - $244.00" pack="10">Basic Website Package - $244.00</option> <option value="Startup Website Package - $394.00" pack="11">Startup Website Package - $394.00</option> <option value="Professional Website Package - $844.00" pack="12">Professional Website Package - $844.00</option> <option value="Elite Website Package - $2988.00" pack="13">Elite Website Package - $2988.00</option> <option value="Corporate Website Package - $2394.00" pack="14">Corporate Website Package - $2394.00</option> <option value="Business Website Package - $2999.00" pack="15">Business Website Package - $2999.00</option> <option value="Superior Website Package - $1499.00" pack="16">Superior Website Package - $1499.00</option> <option value="Next Generation Package - $999.00" pack="17">Next Generation Package - $999.00</option> <option value="Infinity Package - $1499.00" pack="18">Infinity Package - $1499.00</option> <option value="Startup Video Package - $209.99" pack="19">Startup Video Package - $209.99</option> <option value="Classic Video Package - $409.99" pack="20">Classic Video Package - $409.99</option> <option value="Premium Video Package - $809.99" pack="21">Premium Video Package - $809.99</option> <option value="Unlimited Animation Package - $1409.99" pack="22">Unlimited Animation Package - $1409.99</option> <option value="Professional 3D VFX Animation - $2009.99" pack="23">Professional 3D VFX Animation - $2009.99</option> <option value="Elite 3D VFX Animation - $2509.99" pack="24">Elite 3D VFX Animation - $2509.99</option> <option value="Seo Booster Package - $1,499.00" pack="25">Seo Booster Package - $1,499.00</option> <option value="Seo Value Package - $1,999.00" pack="26">Seo Value Package - $1,999.00</option> <option value="Seo Pro Package - $2,599.00" pack="27">Seo Pro Package - $2,599.00</option> <option value="Article Writing Package - $25.00" pack="28">Article Writing Package - $25.00</option> <option value="Press Release Package - $30.00" pack="29">Press Release Package - $30.00</option> <option value="Web Content Writing Package - $35.00" pack="30">Web Content Writing Package - $35.00</option> <option value="Basic Social Package - $94.99" pack="31">Basic Social Package - $94.99</option> <option value="Advance Social Package - $224.99" pack="32">Advance Social Package - $224.99</option> <option value="Banner Ads Package - $134.99" pack="33">Banner Ads Package - $134.99</option> <option value="Email Template Package - $94.99" pack="34">Email Template Package - $94.99</option> <option value="Landing Pages - $144.99" pack="35">Landing Pages - $144.99</option> <option value="Basic Combo Package - $444.99" pack="36">Basic Combo Package - $444.99</option> <option value="Startup Combo Package - $794.00" pack="37">Startup Combo Package - $794.00</option> <option value="Professional Combo Package - $1,044.99" pack="38">Professional Combo Package - $1,044.99</option> <option value="Corporate Combo Package - $1,344.99" pack="39">Corporate Combo Package - $1,344.99</option> <option value="Elite Combo Package - $1,994.99" pack="40">Elite Combo Package - $1,994.99</option> <option value="Complete Branding Solution - $1199.99" pack="41">Complete Branding Solution - $1199.99</option> <option value="Bronze Logo Package - $39.00" pack="42">Bronze Logo Package - $39.00</option> <option value="Special Logo Package- $19.00" pack="43">Special Logo Package- $19.00 - $38.00</option> <option value="Silver Logo Package - $69.00" pack="44">Silver Logo Package - $69.00</option> <option value="Gold Logo Package - $119.00" pack="45">Gold Logo Package - $119.00</option> <option value="Platinum Logo Package - $169.00" pack="46">Platinum Logo Package - $169.00</option> <option value="Diamond Logo Package - $219.00" pack="47">Diamond Logo Package - $219.00</option> <option value="Titanium Illustration Logo Package - $249.00" pack="48">Titanium Logo Package - $249.00</option> <option value="Infinite Logo Package- $299.00" pack="49">Infinite Logo Package- $299.00 - $438.00</option> <option value="Bronze Illustrative Logo Package - $199.00" pack="50">Bronze Illustrative Logo Package - $199.00</option> <option value="Silver Illustrative Logo Package - $299.00" pack="51">Silver Illustrative Logo Package - $299.00</option> <option value="Gold Illustrative Logo Package - $399.00" pack="52">Gold Illustrative Logo Package - $399.00</option> <option value="Bronze 3D Logo Package - $249.00" pack="53">Bronze 3D Logo Package - $249.00</option> <option value="Silver 3D Logo Package - $299.00" pack="54">Silver 3D Logo Package - $399.00</option> <option value="Gold 3D Logo Package - $599.00" pack="55">Gold 3D Logo Package - $599.00</option> <option value="Bronze Mascot Logo Package - $299.00" pack="56">Bronze Mascot Logo Package - $299.00</option> <option value="Silver Mascot Logo Package - $349.00" pack="57">Silver Mascot Logo Package - $349.00</option> <option value="Gold Mascot Logo Package - $549.00" pack="58">Gold Mascot Logo Package - $549.00</option> <option value="Bronze Animation Logo Package - $149.00" pack="59">Bronze Animation Logo Package - $149.00</option> <option value="Bronze Animation Logo Package - $199.00" pack="60">Sliver Animation Logo Package - $199.00</option> <option value="Gold Animation Logo Package - $249.00" pack="61">Gold Animation Logo Package - $249.00</option> <option value="Platinum Animation Logo Package - $349.00" pack="62">Platinum Animation Logo Package - $349.00</option> <option value="App Design Bronze - $1499.00" pack="63">App Design Bronze - $1499.00</option> <option value="App Design Silver - $1499.00" pack="64">App Design Silver - $2000.00</option> <option value="App Design Gold - $1499.00" pack="65">App Design Gold - $2999.00</option> </select>
            </div>

          <!--   <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedleft">

              <input type="text" class="form-control" placeholder="Forecasted-Budget" name="budget" id="budget" required="required">
            </div> -->

            <div class="col-md-12"> <label class="field-txt">Please Attach Relevant Documents MS Word, JPG &amp; PNG Preferred <span>*</span></label> <input type="file" name="wordfile" id="fileToUpload"> </div>
            <div class="col-md-12 col-xs-12 margin-bottom-20">
              <textarea class="form-control" name="Comment" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
            </div>

            <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft">
              <div class="clearfix row">


                <div class="col-lg-12">




                <div class="company_profile pull-right">
                  <label class="control control--checkbox">
                  include Company Profile
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                  </label>
                </div>



                <div class="company_profile fill-help pull-left">
                  <label class="control control--checkbox">
                  Please Fill all the field


                  </label>
                </div>

                </div>

              </div>
              <div class="text-center">
                <input class="btn-green btn-quote" type="submit" id="quoteSubmit" name="quote" value="Submit Request" />
              </div>
            </div>

            <div id="offerFormResultss" class="alert alert-success" style="font-size: 12px; width:40%; margin:9px auto; display:none">Congratulations! You've Signed up, For Further Assistance Start <a href="javascript:;" onclick="setButtonURL()"> Live Chat.</a></div>
          </div>
          <input type="hidden" name="page" value="illustrative-logo-design" />
            <input type="hidden" name="cip" value="" />
            <input type="hidden" name="pc" value="" />
            <input type="hidden" name="ctry" value="" />
        </form>
      </div>
      <div class="col-md-6">
        <figure class="myfigu">
          <img src="assets/images/culture.png">
        </figure>
      </div>
      <!-- end col-md-6 -->

    </div>
    <!-- end row -->

  </div>
  <!-- end container -->

</section>





    





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>



</body>
</html>