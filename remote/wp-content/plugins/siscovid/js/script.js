( function( $ ) {
  var siscovid_check_metodologia_objects = function($container) {
    $container.find('img.animate').each(checkOffset('animate__animated animate__fadeInDown'));
    $container.find('img.animate-flip').each(checkOffset('animate__animated animate__flipInY'));
    $container.find('mjx-container').each(checkOffset('animate__animated animate__pulse'));
    $container.find('table').each(checkOffset('animate__animated animate__fadeInLeft'));
    $container.find('ul').each(checkOffset('animate__animated animate__lightSpeedInLeft'));
    $container.find('ol').each(checkOffset('animate__animated animate__lightSpeedInLeft'));
    $container.find('.padded-block').each(checkOffset('animate__animated animate__lightSpeedInLeft'));
    $container.find('.model-image-container').each(checkOffset('show'));
  }

  var siscovid_handle_metodologia_fadeIn = function() {
    $('.filter-container button').each(function() {
      $(this).on('click', function(event) {
        let model = $(this).attr('data-model');
        let $modelContainer = $('.model-row .model.' + model);

        if($modelContainer.length == 0) {return;}

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
            
            siscovid_check_metodologia_objects($(this));
          });
        }, 250);
      });
    });
  }

  var siscovid_handle_metodologia_agentes_fadeIn = function() {
    $('.model-interface .tabs-container button').each(function() {
      $(this).on('click', function(event) {
        let modelPart = $(this).attr('data-part');
        let $modelContainer = $('.agents .model-part.' + modelPart);
        if($modelContainer.length == 0) {return;}
        
        // Change tab states
        $('.model-interface .tabs-container button.active').removeClass('active');
        $(this).addClass('active');

        // Change button states
        // $('.temp-interface-container button.active').removeClass('active');
        // $(this).addClass('active');

        // Change model states
        $('.agents .model-part.active').fadeOut(500, function(){
          $(this).removeClass('active');
          $(this).addClass('hidden');
        });

        // Change arrow states
        // let oldArrow = $('.display-interface-container .arrow-container.active');
        // let newArrow = $('.display-interface-container .arrow-container.' + modelPart);

        // oldArrow.removeClass('animate active');
        // newArrow.addClass('animate active');

        setTimeout(function(){
          $modelContainer.fadeIn(500, function(){
            $(this).addClass('active');
            $(this).removeClass('hidden');
            
            siscovid_check_metodologia_objects($(this));
          });
        }, 300);
        // setTimeout(function(){
        //   oldArrow.removeClass('reverse');
        //   newArrow.addClass('reverse');
        // }, 1000);
      });
    });
  }

  var siscovid_handle_simulacion_fadeIn = function() {
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

  var siscovid_initialize_team_carrousel = function() {
    $('#team .team-carousel').slick({
      infinite: false,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: '#team .slick-prev',
      nextArrow: '#team .slick-next',
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 434,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
      ],
    });
  }

  var siscovid_validate_promo_form_jquery = function() {
    let $form = $('.page-id-35 .covid-form-section .laaldea-form');
    let $inputs = $form.find('input:not([type="submit"]), select');
    //let lang = $('html').attr('lang').substring(0,2);
    lang = lang == undefined ? 'es' : lang

    var message_array = {
      'form_name' : {
        'es' : 'Este campo es requerido',
        'en' : 'This field is required',
      },
      'form_organization' : {
        'es' : 'Este campo es requerido',
        'en' : 'This field is required',
      },
      'form_location' : {
        'es' : 'Este campo es requerido',
        'en' : 'This field is required',
      },
      'form_use' : {
        'es' : 'Este campo es requerido',
        'en' : 'This field is required',
      },
      'form_email' : {
        'required' : {
          'es' : 'Este campo es requerido',
          'en' : 'This field is required',
        },
        'email' : {
          'es' : 'Ingrese un correo electrónico valido',
          'en' : 'Enter a valid email',
        }
      },
    }

    $form.validate({
      rules: {
        form_name: "required",
        form_organization: "required",
        form_location: "required",
        form_use: "required",
        form_email: {
          required: true,
          email: true,
        },
      },
      messages: {
        form_name: message_array.form_name[lang],
        form_organization: message_array.form_organization[lang],
        form_location: message_array.form_location[lang],
        form_use: message_array.form_use[lang],
        form_email: {
          required: message_array.form_email.required[lang],
          email: message_array.form_email.email[lang],
        },
      },
      submitHandler: function(form) {
        form.submit();
      },
    });
  }
  
  /**
  * Disables all links and changes cursor for the website, used in ajax calls.
  */
  var webStateWaiting = function(waiting){
    if(waiting) {
      $('body').css('cursor', 'progress');
    }
    else {
      $('body').css('cursor', 'default');
    }
    
    $('a').each(function() {
      if(!$(this).hasClass('disabled') && waiting && !$(this).hasClass('language-option') && !$(this).hasClass('menu-end-post-denominacion-a')) {
        $(this).addClass('disabled');	
      }
      else if ($(this).hasClass('disabled') && !waiting && !$(this).hasClass('language-option') && !$(this).hasClass('menu-end-post-denominacion-a')) {
        $(this).removeClass('disabled');
      }
    });
  }

  var checkOffset = function (className) {
    var topOfWindow = $(window).scrollTop();
    
    return function () {
      var $this = $(this),
        imagePos = $this.offset().top;

      if($(window).width() > 768) {
        $this.toggleClass(className, (imagePos < topOfWindow + 900));
      }
      else {
        $this.toggleClass(className, (imagePos < topOfWindow + 1250));
      }
    };
  }

  $(document).ready(function () {
    if($('.page-home').length > 0) {
      siscovid_initialize_team_carrousel();
      $('#project a').each(checkOffset('animate__animated animate__fadeIn'));
      $('#team .carousel-row').each(checkOffset('animate__animated animate__fadeInDown'));
      $('#allies .allies').each(checkOffset('animate__animated animate__fadeInDown'));

      // Home - models animaton
      $('#project .images-container .agentes-container ').on('hover', function() {
        $('.agentes-container').addClass('animate');
        $('.poblacional-container').addClass('animate');

        $('.agentes-container').removeClass('reverse');
        $('.poblacional-container').removeClass('reverse');
      });

      $('#project .images-container .poblacional-container').on('hover', function() {
        $('.agentes-container').addClass('reverse');
        $('.poblacional-container').addClass('reverse');

        $('.agentes-container').removeClass('animate');
        $('.poblacional-container').removeClass('animate');
      });
    }

    if($('.page-simulacion').length > 0) {
      siscovid_handle_simulacion_fadeIn();
    }

    if($('.page-metodologia').length > 0) {
      // element animation initization
      siscovid_check_metodologia_objects($('#methodology .project-methodology-row'));
      siscovid_check_metodologia_objects($('#methodology .model.active'));

      siscovid_handle_metodologia_fadeIn();
      siscovid_handle_metodologia_agentes_fadeIn();
    }
  });

  $(window).scroll(function () {
    "use strict";
    if($('.page-metodologia').length > 0) {
      siscovid_check_metodologia_objects($('.page-metodologia #methodology'));
    }

    if($('.page-home').length > 0) {
      $('#project a').each(checkOffset('animate__animated animate__fadeIn'));
      $('#team .carousel-row').each(checkOffset('animate__animated animate__fadeInDown'));
      $('#allies .allies').each(checkOffset('animate__animated animate__fadeInDown'));
    }
  });

} (jQuery) );