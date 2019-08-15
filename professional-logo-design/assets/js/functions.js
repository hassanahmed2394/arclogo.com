// wow start
new WOW().init();
// wow end

// sticky social
$(document).scroll(function() {
    "use strict";
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.sticky-container').fadeIn();
    } else {
        $('.sticky-container').fadeOut();
    }

    if (y > 500) {
        $('.floating_wrap').addClass('visible');
        $('.floatbutton').addClass('visible');


    } else {
        $('.floating_wrap').removeClass('visible');
        $('.floatbutton').removeClass('visible');

    }





});
// sticky social end



$(document).ready(function() {
    "use strict";







    //*****************************
    // Mobile Navigation
    //*****************************
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
    });


    $('.firstlevel li a').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings('ul').slideUp();
        } else {
            $('.firstlevel li a').removeClass('active');
            $(this).addClass('active');
            $('.dropdown').slideUp();
            $(this).siblings('ul').slideDown();
        }
    });

    $('.mainnav > li > a').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).parents('li').children('.firstlevel').slideUp();
        } else {
            $(this).addClass('active');
            $(this).parents('li').children('.firstlevel').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
        }
    });


    $(".fortestslider").slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeight: true,
        responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });


    $(".quick-contact-slider").sensation({ dots: false, infinite: true, autoplay: false, slidesToShow: 2, slidesToScroll: 1, arrows: false, autoplay: true, responsive: [{ breakpoint: 768, settings: { arrows: false, slidesToShow: 5 } }, { breakpoint: 480, settings: { arrows: false, slidesToShow: 1, slidesToScroll: 1 } }] });



    $(".banlogslider").slick({
        dots: true,
        infinite: true,
        speed: 500,
        arrows: false,
        autoplay: true,

        cssEase: 'linear'

    });

    $(".bxslick").slick({
        dots: true,
        infinite: true,
        speed: 500,
        arrows: true,
        autoplay: false,
        // autoplaySpeed:100,
        vertical: true



    });



    $(".banslidee").slick({
        dots: false,
        infinite: true,
        speed: 500,
        arrows: false,
        fade: true,
        autoplay: true,
        speed: 1000,
        cssEase: 'linear'

    });
    $(".packagesslider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                // dots: true,
                //     arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
            }
        }]


    });
    $('.testslider').slick({
        infinite: true,
        slidesToShow: 2,
        arrows: true,
        dots: false,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 767,
            settings: {
                // dots: true,
                //     arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
            }
        }]

    });


    if ($(window).width() < 767) {
        $('.portfoliolist').slick({
            arrows: true,
            dots: false,
            responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }



    $('.coslider').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        vertical: true,
        autoplaySpeed: 3000
    });


    $(function() {
        function slickInit() {
            $('').slick({
                infinite: false,
                slidesToShow: 3,
                arrows: true,
                dots: false,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        // dots: true,
                        //     arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                    }
                }]

            });
        }
        slickInit();
        $('a[data-toggle="pill"]').on("shown.bs.tab", function(e) {
            $(".packagesslider").slick("setPosition");
            slickInit();
            $('.portfoliolist').slick('setPosition');
        });

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    });



    //*****************************
    // Tabbing 
    //*****************************

    $('[data-targetit]').on('click', function() {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="tabs"]').removeClass('current');
        $('.' + target).addClass('current');
        $('.slick-slider').slick('setPosition', 0);

    });




    function getURLParameter(name) {
        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
    }
    var a = getURLParameter('pack');

    $('#packages option:eq(' + a + ')').prop('selected', true);

    // var val = location.href.match(/[?&]days=(.*?)(?:$|&)/)[1];   // get params from URL
    // $('#days').val(val); 



    ////// tabs generic (nav and tabs in main div)
    $('.tab-custom .tab-custom-nav a').click(function(event) {
        $(this).closest('li').siblings('li').children('a').removeClass('current');
        $(this).addClass('current');
        $(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
        $(this.hash).show();
        event.preventDefault();
        $('.sliderxs').slick('setPosition');
    });
    ////// tabs generic end

    ////// tabs custom (place nav and tabs anywhere separately)
    $('.tabs-custom-nav a').click(function(event) {
        $(this).closest('li').siblings('li').children('a').removeClass('current');
        $(this).addClass('current');
        $(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
        $(this.hash).show();
        event.preventDefault();
        $('.sliderxs').slick('setPosition');
    });
    ////// tabs custom end

    ////// Accordion 
    $('.accordion .quest-title.active1').addClass('active');
    // $('#accordion-1').slideDown(300).addClass('open');
    function close_accordion_section() {
        jQuery('.accordion .quest-title').removeClass('active');
        jQuery('.accordion .quest-content').slideUp(300).removeClass('open');
    }
    jQuery('.quest-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = jQuery(this).attr('href');
        if (jQuery(e.target).is('.active')) {
            close_accordion_section();
        } else {
            close_accordion_section();
            // Add active class to section title
            jQuery(this).addClass('active');
            // Open up the hidden content panel
            jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
        }
        e.preventDefault();
    });
    ////// Accordion end 

    ////// fancybox
    $('[data-fancybox="swf-file"]').fancybox({
        iframe: {
            css: {
                width: '336px',
                height: '280px'
            }
        }
    });

    $('[data-fancybox="video-file"]').fancybox({
        iframe: {
            css: {
                width: '580px',
                height: '340px'
            }
        }
    });
    ////// fancybox end

    // intel Tel Input
    let ip;
    let ip_value;
    $("#phone-country,#phone-coun,#pro-phone,.phone-number").intlTelInput({

        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: "body",
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
                ip = resp.ip;


            });
        },
        initialCountry: "auto",
        nationalMode: true,
        separateDialCode: true,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // utilsScript: "<?php echo $basesurl;?>js/utils.js"
    });



    setTimeout(function() {
        console.log(ip);

        $('input[name="pc"]').val($('.selected-dial-code').text());
        $('input[name="cip"]').val(ip);
        console.log(ip);
        $('input[name="ctry"]').val($('.country-list .country.active .country-name').text());
    }, 3000);


    $('body').delegate('.country', 'click', function() {
        $('input[name="pc"]').val($(this).find('.dial-code').text());

        var oldString2 = $('.selected-flag').attr('title').toUpperCase();
        var newString12 = oldString2.split(':', 1)[0];
        $('input[name="ctry"]').val(newString12);
    });





}); // document ready end



// validate contact form on keyup and submit
$("#banform").validate({
    rules: {
        username: {
            required: true,
            minlength: 2
        },
        email: {
            required: true,
            email: true
        },
        agree: "required"
    },
    messages: {
        username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
        },
        email: "Please enter a valid email address"
    }
});

$("#contactForm").validate();



////// footer year
$(function() {
    "use strict";
    var theYear = new Date().getFullYear();
    $('#year').html(theYear);
});


function setButtonURL() {
    javascript: $zopim.livechat.window.show();
}

$(function() {
    //Slim Scroller

    $.mCustomScrollbar.defaults.theme = "light-1"; //set "light-2" as the default theme
    $(".list-scroll,.subscription-list").mCustomScrollbar({
        scrollButtons: {
            enable: true
        },
        callbacks: {
            onTotalScroll: function() { addContent(this) },
            onTotalScrollOffset: 100,
            alwaysTriggerOffsets: false
        }
    });


});





$(document).ready(function() {
    $(".clickbutton").click(function() {
        $('.floatbutton').toggleClass("active");
        $('.crossplus').toggleClass("rotate");
    });

    $(".topformswitch").click(function() {
        $('.topformwrap').toggleClass("active");
    });
    $('.get-design-btn').click(function() {
        $('.topformwrap').toggleClass("active");
    });
    $(".mymy").click(function() {
        $('.floatbutton').toggleClass("active");
    });

    $(window).scroll(function() {
        lazzyload();
    });


    $(".pricing-sec .nav-pills li a").each(function(i) {
        // if ($(this).hasClass('active')) {
        //     window.location.hash = this.hash;
        // }
        $(this).click(function(e) {

            e.preventDefault();
            console.log(i);
            // $(this).attr("href", $('.vertical-tab-content')[i].id)
            window.location.hash = this.hash;
            // console.log($(this).val());
        });
    });
});



$('#quoteForms').submit(function() {

    // var namevalue=$(".banner-inp-name").val();
    // var emailvalue=$(".banner-inp-email").val();
    // var phonevalue=$(".banner-inp-phone").val();

    $.ajax({
        type: 'POST',
        url: 'webpages/bannerFormController.php',
        data: $(this).serialize(),
        error: function() {
            alert("Request Failed");
        },
        success: function(response) {
                console.log(response);

                $("#offerFormResults").fadeIn();

                $("#quoteForms input[type='text']").val("");
                $("#quoteForms input[type='email']").val("");
                $("#quoteForms input[type='Number']").val("");
                $("#quoteForms input[type='hidden']").val("");


                // console.log(namevalue);
                // console.log(emailvalue);
                // console.log(phonevalue);

                // $('html, body').animate({
                //     scrollTop: $("#cta-section").offset().top
                // }, 1000);

                // $(".footer-inp-name").val(namevalue);
                // $(".footer-inp-email").val(emailvalue);
                // $(".footer-inp-phone").val(phonevalue);
                //   $("#contactForm").find("#projdescrip").focus();

                //EXECUTE ANIMATION HERE
                // var a=  $("#offerForm input[type='hidden']").val();


            } // this was missing


    });
    return false;
});
setInterval(function(){ 
    
    
    $('.alert-success').fadeOut()},9000);

$('.alert-success').click(function(){
   $(this).hide(); 
});
$('#bannerforms').submit(function() {

    // var namevalue=$(".banner-inp-name").val();
    // var emailvalue=$(".banner-inp-email").val();
    // var phonevalue=$(".banner-inp-phone").val();

    $.ajax({
        type: 'POST',
        url: 'webpages/bannerFormController.php',
        data: $(this).serialize(),
        error: function() {
            alert("Request Failed");
        },
        success: function(response) {
                console.log(response);

                $("#offerFormResultsss").fadeIn();

                $("#bannerform input[type='text']").val("");
                $("#bannerform input[type='email']").val("");
                $("#bannerform input[type='Number']").val("");
                $("#bannerform input[type='hidden']").val("");


                // console.log(namevalue);
                // console.log(emailvalue);
                // console.log(phonevalue);

                // $('html, body').animate({
                //     scrollTop: $("#cta-section").offset().top
                // }, 1000);

                // $(".footer-inp-name").val(namevalue);
                // $(".footer-inp-email").val(emailvalue);
                // $(".footer-inp-phone").val(phonevalue);
                //   $("#contactForm").find("#projdescrip").focus();

                //EXECUTE ANIMATION HERE
                // var a=  $("#offerForm input[type='hidden']").val();


            } // this was missing


    });
    return false;
});


$('#quoteFormss').submit(function() {

    // var namevalue=$(".banner-inp-name").val();
    // var emailvalue=$(".banner-inp-email").val();
    // var phonevalue=$(".banner-inp-phone").val();

    $.ajax({
        type: 'POST',
        url: 'webpages/orderFormController.php',
        data: $(this).serialize(),
        error: function() {
            alert("Request Failed");
        },
        success: function(response) {
                console.log(response);

                $("#offerFormResultss").fadeIn();

                $("#quoteFormss input[type='text']").val("");
                $("#quoteFormss input[type='email']").val("");
                $("#quoteFormss input[type='Number']").val("");
                $("#quoteFormss input[type='hidden']").val("");
                $("#quoteFormss input[type='file']").val("");
                $("#quoteFormss input[type='checkbox']").val("");
                $("textarea").val("");
                $("select").val("");

                // console.log(namevalue);
                // console.log(emailvalue);
                // console.log(phonevalue);

                // $('html, body').animate({
                //     scrollTop: $("#cta-section").offset().top
                // }, 1000);

                // $(".footer-inp-name").val(namevalue);
                // $(".footer-inp-email").val(emailvalue);
                // $(".footer-inp-phone").val(phonevalue);
                //   $("#contactForm").find("#projdescrip").focus();

                //EXECUTE ANIMATION HERE
                // var a=  $("#offerForm input[type='hidden']").val();


            } // this was missing


    });
    return false;
});

$(document)
  .ajaxStart(function () {
   $('#cover').show();
  })
  .ajaxStop(function () {
    $('#cover').hide();
  });

(function($, window, document, undefined) {
    'use strict';
    $('.js-grid-mosaic-flat').cubeportfolio({
        filters: '#js-filters-mosaic-flat',
        loadMore: '#js-loadMore-mosaic-flat',
        loadMoreAction: 'click',
        layoutMode: 'mosaic',
        sortToPreventGaps: true,
        mediaQueries: [{
            width: 1500,
            cols: 6
        }, {
            width: 1100,
            cols: 4
        }, {
            width: 800,
            cols: 3
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        defaultFilter: '*',
        animationType: 'fadeOutTop',
        gapHorizontal: 0,
        gapVertical: 0,
        gridAdjustment: 'responsive',
        caption: 'fadeIn',
        displayType: 'fadeIn',
        displayTypeSpeed: 100,
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
    });
    $('.js-grid-mosaic-flat-portfolio').cubeportfolio({
        filters: '#js-filters-mosaic-flat',
        loadMore: '#js-loadMore-mosaic-flat',
        loadMoreAction: 'click',
        layoutMode: 'mosaic',
        sortToPreventGaps: true,
        mediaQueries: [{
            width: 1500,
            cols: 6
        }, {
            width: 1100,
            cols: 4
        }, {
            width: 800,
            cols: 3
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        defaultFilter: '*',
        animationType: 'fadeOutTop',
        gapHorizontal: 0,
        gapVertical: 0,
        gridAdjustment: 'responsive',
        caption: 'fadeIn',
        displayType: 'fadeIn',
        displayTypeSpeed: 100,
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
    });
})(jQuery, window, document);