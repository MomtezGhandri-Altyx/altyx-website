(function($) {
  'use strict';


  var $contact_forms = $('form.blahlab_contact_form');

  for (var i = 0; i < $contact_forms.length; i++) {

    $($contact_forms[i]).validate({
      messages: { },
      submitHandler: function(form) {
        $.ajax({
          type: 'POST',
          url: 'send.php',
          data: $(form).serialize(),
          success: function(data) {
            if(data.match(/success/)) {
              $(form).trigger('reset');
              $(form).find('p.thanks').removeClass('hide').show().fadeOut(5000);
            }
          }
        });
        return false;
      }
    });

  }

  var videos = $('video');

  var resizeId;

  $('#menu-controller').on('click', function() {

    var wrapper = $(this).closest('#menu-wrapper');

    if ( $(wrapper).hasClass('open-menu') ) {
      $("#menu-wrapper").removeClass('open-menu').addClass('close-menu');
    } else {
      $("#menu-wrapper").removeClass('close-menu').addClass('open-menu');
    }

  });


  $(document).ready(function() {
    $('.red, .purple, .orange').each(function() {

      $(this).appear();

      $(this).on('appear', function() {
        $(this).addClass('appear');

      });

      $(this).on('disappear', function() {
        $(this).removeClass('appear');

      });

    });
  });


  function whichTransitionEndEvent(){
    var t,
        el = document.createElement("fakeelement");

    var transitions = {
      "transition"      : "transitionend",
      "OTransition"     : "oTransitionEnd",
      "MozTransition"   : "transitionend",
      "WebkitTransition": "webkitTransitionEnd"
    }

    for (t in transitions){
      if (el.style[t] !== undefined){
        return transitions[t];
      }
    }
  }

  function whichAnimationEndEvent(){
    var t,
        el = document.createElement("fakeelement");

    var transitions = {
      "transition"      : "animationend",
      "OTransition"     : "oAnimationEnd",
      "MozTransition"   : "animationend",
      "WebkitTransition": "webkitAnimationEnd"
    }

    for (t in transitions){
      if (el.style[t] !== undefined){
        return transitions[t];
      }
    }
  }

  var transitionEndEvent = whichTransitionEndEvent();
  var animationEndEvent = whichAnimationEndEvent();


  function swiperInit() {
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: false,
      mousewheel: true,
      speed: 0,
      reverseDirection: true,
      effect:'fade',
      direction: 'vertical',
      hashNavigation: {
        replaceState: false
      },
      // history: {
      //   replaceState: true,
      // },
      on: {
        init: function() {

          var swiper = this;

          setTimeout(function() {
            swiper.$el.addClass('initd');
          }, 100);

        },
        slideChange: function() {

          if (this.activeIndex == 0) {
            this.$el.removeClass('greater-than-one');
          } else {
            this.$el.addClass('greater-than-one');
          }

          setTimeout(function() {
            // update the browser history state to work with smoothState.js
            if(window.history.state === null && window.smoothState) {
              // the 'main' is the id of the smoothState element
              var state = { id: 'main' };

              /** Update history entry */
              window.history.replaceState(state, document.title, window.location.href);
            }
          }, 100)

        },
        slideNextTransitionStart: function() {

          this.mousewheel.disable();
          $('#white-board').addClass('playact');
        },
        slideNextTransitionEnd: function() {

        },
        slidePrevTransitionStart: function() {

          this.mousewheel.disable();
          $('#white-board-reverse').addClass('playact');
        },
        slidePrevTransitionEnd: function() {

        }
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        renderBullet: function(index, className) {
          return '<span class="' + className + '"><strong>' + $(this.slides[index]).data('title') + '</strong></span>';
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        800: {

        }
      }


    });


    $('#white-board').on(animationEndEvent, function() {
      $(this).removeClass('playact');

      swiper.mousewheel.enable();
    });


    $('#white-board-reverse').on(animationEndEvent, function() {
      $(this).removeClass('playact');

      swiper.mousewheel.enable();
    });

    window.swiper = swiper;
  }

  swiperInit();

  var smoothStateOptions = {
    debug: true,
    // prefetch: true,
    // cacheLength: 2,
    onAfter: function($container, $newContent) {
      swiperInit();
    },
    onStart: {
      duration: 1000, // Duration of our animation
      render: function ($container) {
        // Add your CSS animation reversing class
        // $container.addClass('is-exiting');
        // Restart your animation
        $('#main').data('smoothState').restartCSSAnimations();
      }
    },
    onReady: {
      duration: 0,
      render: function ($container, $newContent) {
        // Remove your CSS animation reversing class
        // $container.removeClass('is-exiting');
        // Inject the new content
        $container.html($newContent);
      }
    }
  };

  if ( window.WOW ) {
    new WOW().init();
  }



  if(jQuery('#maps').length>0){
    google.maps.event.addDomListener(window, 'load', init);
  }

  function init() {

    var mapOptions = {
      zoom:14,
      center: new google.maps.LatLng(36.8492165,10.2001951),
      disableDefaultUI: true,
      scrollwheel: false,
      draggable: true,
      zoomControl: true,

      styles: [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#266169"
        }, {
          "lightness": 17
        }]
      },
        {
          featureType: 'administrative.locality',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{color: '#263c3f'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{color: '#6b9a76'}]
        },
        {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [{
            "color": "#eee"
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#111111"
          }, {
            "lightness": 17
          }]
        }, {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#cccccc"
          }, {
            "lightness": 29
          }, {
            "weight": 0.2
          }]
        }, {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [{
            "color": "#eee"
          }, {
            "lightness": 18
          }]
        },
        {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 16
          }]
        }, {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [{
            "color": "#111111"
          }, {
            "lightness": 21
          }]
        }, {
          "elementType": "labels.text.stroke",
          "stylers": [{
            "visibility": "on"
          }, {
            "color": "#555555"
          }, {
            "lightness": 1
          }]
        }, {
          "elementType": "labels.text.fill",
          "stylers": [{
            "saturation": 36
          }, {
            "color": "#FFFFFF"
          }, {
            "lightness": 1
          }]
        }, {
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "on"
          }]
        }, {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 19
          }]
        }, {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 20
          }]
        }, {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#000000"
          }, {
            "lightness": 17
          }, {
            "weight": 1.2
          }]
        }]
    };

    var map = new google.maps.Map(document.getElementById("maps"), mapOptions);
    var mapCenter = new google.maps.LatLng(36.8492165,10.2001951);
    var marker = new google.maps.Marker({
      map: map,
      position: mapCenter,
      icon: 'http://dev.altyx.io/altyx_web/themes/altyx/images/Icon_map.png',
      draggable: false,
      visible: true
    });
  }



})(jQuery);


