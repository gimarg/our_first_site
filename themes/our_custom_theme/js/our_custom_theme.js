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
              shrinkOn = 200;
          if (distanceY > shrinkOn) {
            $('#service-tabs').addClass("fixed");
            if ($('body').hasClass('user-logged-in')) {
              $('.fixed').css('top','80px');
            }
          } else {
            if ($('#service-tabs').hasClass("fixed")) {
                $('#service-tabs').removeClass("fixed");
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

              if ($('body').hasClass('user-logged-in')) {
                $('html, body').animate({
                    scrollTop: $(window).scrollTop() - 100
                });
              }

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
    }
  };

})(jQuery, Drupal, drupalSettings);