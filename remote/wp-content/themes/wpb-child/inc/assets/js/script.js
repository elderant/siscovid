( function( $ ) {
  window.debounce_timer = 0;

  function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
  } 
  
  //************** Window Scroll ************************//
	var goToTopDebouncer = function(event) {
		if(window.debounce_timer) {
			window.clearTimeout(debounce_timer);
		}
		
		debounce_timer = window.setTimeout(function() {
      if(window.scrollY > 500){
        let $goToTop = $('#footer-widget .go-to-top');
        if(!$goToTop.hasClass('display')) {
          $goToTop.toggleClass('display');
        }
      }
      else {
        let $goToTop = $('#footer-widget .go-to-top');
        if($goToTop.hasClass('display')) {
          $goToTop.toggleClass('display');
        }
      }
      //let $secondaryMenu = $('header .navbar.secondary');
      //$secondaryMenu.toggleClass('sticky', window.scrollY > 120);
      //console.log(window.scrollY);
		}, 100);
	}
	
	$(window).on( 'scroll', goToTopDebouncer );

  //************** Document Ready ************************//
  $(document).ready(function () {
    // if($('header#masthead').length > 0) {
    //   $('header .navbar-toggler').on('click', function(event) {
    //     let $toggler = $(event.currentTarget);
    //     $toggler.parent(".navbar").toggleClass('show');
    //   });
    // }

    if($('#footer-widget .go-to-top').length > 0) {
      let $goToTop = $('#footer-widget .go-to-top');
      $goToTop.on('click', function(event) {
        $('html, body').animate({scrollTop:0}, '1000');
      });
    }

    if($('.page-simulacion').length > 0) {
      $('.filter-container button').each(function() {
        $(this).on('click', function(event) {
          let city = $(this).attr('data-city');
          let $modelContainer = $('.model-row .model.' + city);

          if($modelContainer.length == 0) {return;}

          // fill src if is not set
          if(!$modelContainer.find('iframe').attr('src')) {
            $modelContainer.find('iframe').attr('src', $modelContainer.find('iframe').attr('data-src'));
          }

          // Change button states
          $('.filter-container button.active').removeClass('active');
          $(this).addClass('active');

          // Change model states
          $('.model-row .model.active').fadeOut(500, function(){
            $(this).removeClass('active');
            $(this).addClass('hidden');
          });
          setTimeout(function(){
            $modelContainer.fadeIn(500, function(){
              $(this).addClass('active');
              $(this).removeClass('hidden');
            })
          }, 250);
        });
      });
    }
    
  });
} (jQuery) );

/* ------  SMOOTH SCROLL ----- */
( function( $ ) {
	$(document).ready(function () {
		"use strict";
		$('a[href*="http://siscovid.com/#"]').bind('click', function(event) {
      event.preventDefault();
		
      let target = $(this).attr("href"); //Get the target
      let id = target.substring(20);
          
      // perform animated scrolling by getting top-position of target-element and set it as scroll target
      $('html, body').stop().animate({ scrollTop: $(id).offset().top}, 1500, function() {
        location.hash = id;  //attach the hash (#jumptarget) to the pageurl
      });
          
      return false;
		});
	});
} (jQuery) );