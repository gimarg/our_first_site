  (function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.mybehavior = {
    attach: function (context, settings) {
      
      // $("body.user-logged-in").css('top','0');


      /*** Open sub-menu on hover ***/
      
      $(".nav li.expanded").hover(
        function(){
          $(this).addClass("open");
        },function(){
            $(this).removeClass("open");
        }
      );

      //Delayed body text in front page normal section
      $( document ).ready(function() {
        $("#block-normalsection .field--name-body ul li:first-child").delay(1000).fadeIn(500).css({"left":"-1200px"}).animate({"left":"0px"}, 2000);
        $("#block-normalsection .field--name-body ul li:nth-child(2)").delay(2500).fadeIn(500).css({"left":"-1200px"}).animate({"left":"0px"}, 2000);
        $("#block-normalsection .field--name-body ul li:last-child").delay(4000).fadeIn(500).css({"left":"-1200px"}).animate({"left":"0px"}, 2000);
    });
      // if($('#navbar-collapse').hasClass('in')) {

      // }
      
      /*** Newsletter popup messages ***/
      $("#mc-embedded-subscribe-form").submit(function(e){
          e.preventDefault();
          submitSubscribeForm($("#mc-embedded-subscribe-form"), $("#form_message"));
      });

      function submitSubscribeForm($form, $resultElement) {
        $.ajax({
            type: "GET",
            url: $form.attr("action"),
            data: $form.serialize(),
            cache: false,
            dataType: "jsonp",
            jsonp: "c",
            contentType: "application/json; charset=utf-8",

            error: function(error){},

            success: function(data){
                if (data.result != "success") {
                    var message = data.msg || "Sorry. Unable to subscribe. Please try again later.";

                    if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
                        message = "You're already subscribed. Thank you.";
                    }
                    if ($resultElement.hasClass("hide")) {
                      $resultElement.removeClass("hide");
                    }

                    $resultElement.append('<span class="popuptext" id="myPopup">'+message+'</span>');

                    setTimeout(function(){ 
                      $resultElement.addClass("hide"); 
                      message = "";
                      $( ".popuptext" ).remove();
                    }, 4000);
                    // setTimeout(function(){
                    //   $resultElement.append('<span class="popuptext" id="myPopup">'+message+'</span>');
                    // }, 4000);
                    // $resultElement.html(message);

                } else {
                    message="";
                    if ($resultElement.hasClass("hide")) {
                      $resultElement.removeClass("hide");
                    }
                    $resultElement.append('<span class="popuptext" id="myPopup">Thank you! You must confirm the subscription in your inbox.</span>');
                    setTimeout(function(){ 
                      $resultElement.addClass("hide"); 
                      $("#mce-EMAIL").val("");
                      // message= "";
                      $( ".popuptext" ).remove();
                  }, 4000);
                    // $resultElement.html("Thank you!<br>You must confirm the subscription in your inbox.");
                }
            }
        });
      }

      /*** Tab Headers on services page ***/

      // $( document ).ready(function() {
        // $('.tablink').click(function() { 
        //   var id= $(this)[0].id;
        //           // alert(id);
        //   $('.tabcontent#'+id).removeClass('inactive');
        //   $('.tabcontent#'+id).addClass('active');
          
        //   $('.tabcontent').not('#'+id).removeClass('active');
        //   $('.tabcontent').not('#'+id).addClass('inactive');
        // });

        // // Get the element with id="defaultOpen" and click on it
        // $('.defaultOpen').click();
 
      // });

    
      /*** Auto Nav Tabs ***/
      // $(document).ready(function() {
      //   $('article.services-page').autoNav(); 
      // });


      /*** Fixed services nav tabs on scroll ***/

      $( document ).ready(function() {

        $(function(){
        $(window).scroll(function() {
          //Sticks tabs to top
          var distanceY = window.pageYOffset || document.documentElement.scrollTop,
              shrinkOn = 200, shrinkOff = 3000;
              // console.log('scrolltop'+document.documentElement.scrollTop);
              // console.log('wind page offs'+window.pageYOffset);
              // console.log('dist'+distanceY);
          if (distanceY > shrinkOn && distanceY < shrinkOff) {
            $('#service-tabs').css('display','block');
            $('#service-tabs').addClass("fixed");
            if ($('body').hasClass('user-logged-in')) {
              $('.fixed').css('top','80px');
            }
          } else if (distanceY < shrinkOn) {
            if ($('body').hasClass('user-logged-in')) {
              $('.fixed').css('top','0');
            }
            if ($('#service-tabs').hasClass("fixed")) {
                $('#service-tabs').removeClass("fixed");
            }
          } else if (distanceY > shrinkOff) {
            $('#service-tabs').css('display','none');
            if ($('body').hasClass('user-logged-in')) {
              $('.fixed').css('top','0');
            }
          }
        });

        // //Creates active class
        // $(document).ready(function() {
          $('article.services-page').autoNav(); 
        // });


        // Fixes sticky tabs functionality
          $('.tab-header ul li').on('click', function (e) {
              e.preventDefault();

              // if ($('body').hasClass('user-logged-in')) {
              //   $('html, body').animate({
              //       scrollTop: $(window).scrollTop() - 100
              //   });
              // }

              $('#service-tabs').addClass("fixed");

              if ($('body').hasClass('user-logged-in')) {
                $('.fixed').css('top','80px');
              }

              var href = $(this).find('a').attr('href');
              location.href = href;
              // alert(href);

          });
          $('.navbar-nav li:nth-child(2) ul li a').on('click', function (e) {

              if ($('body').hasClass('user-logged-in')) {
                $('html, body').animate({
                    scrollTop: $(window).scrollTop() - 100
                });
              }

              $('#service-tabs').addClass("fixed");

              if ($('body').hasClass('user-logged-in')) {
                $('.fixed').css('top','80px');
              }

              var url = $(this).attr('href');
              var href_tab = url.substring(url.indexOf('#')+1);

              $('.tab-header ul li a[href="#'+href_tab+'"]').click();
          });
        });
      });

      $("#block-mainnavigation-4 li a").removeAttr("data-toggle");

      if ($('body').hasClass('path-contact')) {
        function initMap() {
          var uluru = {lat: 38.041071, lng: 23.819751};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
        google.maps.event.addDomListener(window, "load", initMap);
      }

      // if ($('body').hasClass('path-frontpage')) {
      //   var url = $("#block-views-block-frontpage-slideshow-block-1 .active-slide .parallax__bg").text();
      //   alert(url);
      //   $("#block-views-block-frontpage-slideshow-block-1 .active slide .parallax__bg").css('background','url('+url+')');
      // }
      // var controller = new ScrollMagic.Controller();
      // var scene1 = new ScrollMagic.Scene({
      //     triggerElement: '.parallax--parallax1',
      //     triggerHook: 1,
      //     duration: "100%"
      // })
      // .setTween(TweenMax.from('.parallax--parallax1 .parallax__bg', 1, {y: '-50%', ease:Power0.easeNone}))
      // .addTo(controller);

      // var scene2 = new ScrollMagic.Scene({
		  //   triggerElement: '.parallax--parallax2',
		  //   triggerHook: 1,
		  //   duration: "100%"
		  // })
	    // .setTween(TweenMax.from('.parallax--parallax2 .parallax__bg', 1, {y: '-50%', ease:Power0.easeNone}))
	    // .addTo(controller);

      var controller = new ScrollMagic.Controller();

      var blocks = [".parallax--parallax1", ".parallax--parallax2", ".parallax--parallax3", "#block-views-block-frontpage-slideshow-block-1"];

      blocks.forEach(function (block, index) {

          var $bg = $(block).find('.parallax__bg');
          var $content = $(block).find('.parallax__content');

          var tl = new TimelineMax();
          tl
              .from($bg, 2, {y: '-50%', ease: Power0.easeNone}, 0.2)
              .from($content, 2, {y: '-50%', ease: Power0.easeNone}, 0.2)
          ;

          var scene = new ScrollMagic.Scene({
              triggerElement: block,
              triggerHook: 1,
              duration: "100%"
          })
          .setTween(tl)
          .addTo(controller);
      });
    }
  };
})(jQuery, Drupal, drupalSettings);