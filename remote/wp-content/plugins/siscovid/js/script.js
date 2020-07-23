( function( $ ) {
  var siscovid_check_metodologia_objects = function($container) {
    $container.find('img.animate').each(checkOffset('animate__animated animate__fadeInDown'));
    $container.find('img.animate-flip').each(checkOffset('animate__animated animate__flipInY'));
    $container.find('mjx-container').each(checkOffset('animate__animated animate__pulse'));
    $container.find('table').each(checkOffset('animate__animated animate__fadeInLeft'));
    $container.find('ul.animate').each(checkOffset('animate__animated animate__lightSpeedInLeft'));
    $container.find('ul.animate-flip').each(checkOffset('animate__animated animate__flipInY'));
    $container.find('ol.animate').each(checkOffset('animate__animated animate__lightSpeedInLeft'));
    $container.find('.padded-block').each(checkOffset('animate__animated animate__lightSpeedInLeft'));
    $container.find('.model-image-container').each(checkOffset('show'));
    $container.find('.text-container.animate-bounce-left').each(checkOffset('animate__animated animate__bounceInLeft'));
    $container.find('.text-container.animate-bounce-right').each(checkOffset('animate__animated animate__bounceInRight'));
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

  var siscovid_handle_home_models_fadeIn = function() {
    $('.filter-container button').each(function() {
      $(this).on('click', function(event) {
        let city = $(this).attr('data-city');
        let $modelContainer = $('.model-row .model.' + city);

        if($modelContainer.length == 0) {return;}

        // fill src if is not set
        if(!$modelContainer.find('iframe').attr('src')) {
          $modelContainer.find('iframe').each(function(){
            $(this).attr('src', $(this).attr('data-src'));
          });
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
      slidesToScroll: 4,
      prevArrow: '#team .slick-prev',
      nextArrow: '#team .slick-next',
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      responsive: [
        {
          breakpoint: 1365,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
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

  var checkOffsetStaticPage = function (className, height) {
    var topOfWindow = $(window).scrollTop();
    
    return function () {
      var $this = $(this);
      if(topOfWindow >= height && !$this.hasClass(className)){
        if(className == 'entering') {
          this.style.setProperty('--data-start-offset', height);
        }
        else if(className == 'exiting') {
          this.style.setProperty('--data-end-offset', height);
        }
        else if(className == 'transition') {
          this.style.setProperty('--data-transition-offset', height);
        }
        else if($(this).hasClass('last-element')) {
          this.style.setProperty('--data-self-height', $(this).height());
        }
        $this.addClass(className);
      }
      else if(topOfWindow < height && $this.hasClass(className)) {
        $this.removeClass(className);
      }
    };
  }

  var zoomIn = function ($height) {
    var topOfWindow = $(window).scrollTop();
    
    return function () {
      var $this = $(this);
      $this.css({
        'opacity': Math.min((topOfWindow - 825) /$height , 1), 
        'transform': 'translate(-50%, -50%) scale(' + Math.min((topOfWindow - 825) /$height , 1) + ')'})
    }
  }

  $(document).ready(function () {
    if($('.page-home').length > 0) {
      siscovid_initialize_team_carrousel();
      siscovid_handle_home_models_fadeIn();

      $('#project a').each(checkOffset('animate__animated animate__fadeIn'));
      $('#team .carousel-row').each(checkOffset('animate__animated animate__fadeInDown'));
      $('#allies .allies').each(checkOffset('animate__animated animate__fadeInDown'));

      // Home - models animaton
      $('#project .images-container .agentes-container').on('hover', function() {
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

    if($('.page-evaluacion-escenarios').length > 0) {
      siscovid_handle_simulacion_fadeIn();
    }

    if($('.page-informacion-detallada').length > 0) {
      // element animation initization
      siscovid_check_metodologia_objects($('#methodology .project-methodology-row'));
      siscovid_check_metodologia_objects($('#methodology .model.active'));

      siscovid_handle_metodologia_fadeIn();
      siscovid_handle_metodologia_agentes_fadeIn();
    }

    if($('.page-politicas').length > 0) {
      $('#policy .static-element.introduction-text').each(checkOffsetStaticPage('entering', 350));
    }
  });

  $(window).scroll(function () {
    "use strict";
    if($('.page-informacion-detallada').length > 0) {
      siscovid_check_metodologia_objects($('.page-informacion-detallada #methodology'));
    }

    if($('.page-home').length > 0) {
      $('#project a').each(checkOffset('animate__animated animate__fadeIn'));
      $('#team .carousel-row').each(checkOffset('animate__animated animate__fadeInDown'));
      $('#allies .allies').each(checkOffset('animate__animated animate__fadeInDown'));
    }

    if($('.page-politicas').length > 0) {
      // $('#policy .static-row').each(function(){
      //   debugger;
      //   $(this).css('--data-top', $(window).scrollTop());
      // });
      document.documentElement.style.setProperty('--data-top', $(window).scrollTop());

      $('#policy .static-element.introduction-text.first-element').each(checkOffsetStaticPage('in', 343));

      $('#policy .static-element.introduction-text').each(checkOffsetStaticPage('exiting', 800));
      $('#policy .static-element.introduction-text').each(checkOffsetStaticPage('out', 1100));

      /* introduction image enter */
      $('#policy .static-element.introduction-image').each(checkOffsetStaticPage('in', 825));
      $('#policy .static-element.introduction-image .first-image').each(checkOffsetStaticPage('entering', 825));
      $('#policy .static-element.introduction-image .second-image').each(checkOffsetStaticPage('entering', 1225));
      $('#policy .static-element.introduction-image .third-image').each(checkOffsetStaticPage('entering', 1625));
      $('#policy .static-element.introduction-image .image-description').each(checkOffsetStaticPage('entering', 1725));
      /* introduction image exit */
      $('#policy .static-element.introduction-image .first-image').each(checkOffsetStaticPage('transition', 2000));
      $('#policy .static-element.introduction-image .second-image').each(checkOffsetStaticPage('transition', 2000));
      $('#policy .static-element.introduction-image .third-image').each(checkOffsetStaticPage('transition', 2000));

      $('#policy .static-element.introduction-image').each(checkOffsetStaticPage('exiting', 2325));
      $('#policy .static-element.introduction-image').each(checkOffsetStaticPage('out', 2600));

      /* Cities text enter */
      $('#policy .static-element.cities-text').each(checkOffsetStaticPage('entering', 2500));
      $('#policy .static-element.cities-text .cities-p').each(checkOffsetStaticPage('entering', 2800));
      $('#policy .static-element.cities-text .cities-ul').each(checkOffsetStaticPage('entering', 3100));
      /* Cities text exit */
      $('#policy .static-element.cities-text').each(checkOffsetStaticPage('exiting', 3300));
      $('#policy .static-element.cities-text').each(checkOffsetStaticPage('out', 3600));

      /* Map enter */
      $('#policy .static-element.map-section').each(checkOffsetStaticPage('in', 3500));
      $('#policy .static-element.map-section .map').each(checkOffsetStaticPage('entering', 3500));
      /* Map exit */
      $('#policy .static-element.map-section').each(checkOffsetStaticPage('exiting', 3900));
      $('#policy .static-element.map-section').each(checkOffsetStaticPage('out', 4200));

      /* Factors enter */
      $('#policy .static-element.factors-text').each(checkOffsetStaticPage('entering', 4100));
      /* Factors exit */
      $('#policy .static-element.factors-text').each(checkOffsetStaticPage('exiting', 4600));
      $('#policy .static-element.factors-text').each(checkOffsetStaticPage('out', 4900));
      
      /* Interventions enter*/
      $('#policy .static-element.interventions-text').each(checkOffsetStaticPage('entering', 4800));
      
      /* Interventions first image enter*/
      $('#policy .static-element.interventions-text .objectives.image-container').each(checkOffsetStaticPage('in', 5100));
      $('#policy .static-element.interventions-text .objectives .first-image').each(checkOffsetStaticPage('entering', 5200));
      $('#policy .static-element.interventions-text .objectives .second-image').each(checkOffsetStaticPage('entering', 5500));
      $('#policy .static-element.interventions-text .objectives .third-image').each(checkOffsetStaticPage('entering', 5800));
      $('#policy .static-element.interventions-text .objectives .image-description').each(checkOffsetStaticPage('entering', 5900));
      
      /* Interventions first image exit*/
      $('#policy .static-element.interventions-text .objectives.image-container').each(checkOffsetStaticPage('exiting', 6400));
      
      /* Interventions Second image enter */
      $('#policy .static-element.interventions-text .graph.image-container').each(checkOffsetStaticPage('entering', 6500));
      
      /* Interventions exit */
      $('#policy .static-element.interventions-text').each(checkOffsetStaticPage('out', 6833));
    
      /* Effectiveness enter */
      $('#policy .static-element.effectiveness-image-container.first-element').each(checkOffsetStaticPage('in', 8400));
      
      $('#policy .static-element.effectiveness-image-container .animated-subtitle').each(checkOffsetStaticPage('entering', 8650));
      
      /* Tasa 2.6 */
      $('#policy .static-element.effectiveness-image-container .tasa-2-6 .value').each(checkOffsetStaticPage('entering', 9000));
      $('#policy .static-element.effectiveness-image-container .tasa-2-6 .text').each(checkOffsetStaticPage('entering', 9000));

      /* Tasa 2.5 */
      $('#policy .static-element.effectiveness-image-container .tasa-2-5 .value').each(checkOffsetStaticPage('entering', 9400));
      $('#policy .static-element.effectiveness-image-container .tasa-2-5 .text').each(checkOffsetStaticPage('entering', 9400));
      
      /* Tasa disminucion */
      $('#policy .static-element.effectiveness-image-container .tasa-disminucion .arrow').each(checkOffsetStaticPage('entering', 9800));
      $('#policy .static-element.effectiveness-image-container .tasa-disminucion .text').each(checkOffsetStaticPage('entering', 9800));

      /* Tasa 1.8 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-8 .value').each(checkOffsetStaticPage('entering', 10200));
      $('#policy .static-element.effectiveness-image-container .tasa-1-8 .text').each(checkOffsetStaticPage('entering', 10200));

      /* Tasa 1.7 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-7 .value').each(checkOffsetStaticPage('entering', 10600));
      $('#policy .static-element.effectiveness-image-container .tasa-1-7 .text').each(checkOffsetStaticPage('entering', 10600));

      /* Tasa 1.6 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-6 .value').each(checkOffsetStaticPage('entering', 11000));
      $('#policy .static-element.effectiveness-image-container .tasa-1-6 .text').each(checkOffsetStaticPage('entering', 11000));

      /* Tasa Medidas */
      $('#policy .static-element.effectiveness-image-container .tasa-medidas .text').each(checkOffsetStaticPage('entering', 11200));

      /* Tasa 1.4 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-4 .value').each(checkOffsetStaticPage('entering', 11600));
      $('#policy .static-element.effectiveness-image-container .tasa-1-4 .text').each(checkOffsetStaticPage('entering', 11600));

      /* Tasa 1.2 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-2 .value').each(checkOffsetStaticPage('entering', 12000));
      $('#policy .static-element.effectiveness-image-container .tasa-1-2 .text').each(checkOffsetStaticPage('entering', 12000));

      /* Tasa 1.1 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-1 .value').each(checkOffsetStaticPage('entering', 12400));
      $('#policy .static-element.effectiveness-image-container .tasa-1-1 .text').each(checkOffsetStaticPage('entering', 12400));

      /* Tasa 1.0 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-0 .value').each(checkOffsetStaticPage('entering', 12800));
      $('#policy .static-element.effectiveness-image-container .tasa-1-0 .text').each(checkOffsetStaticPage('entering', 12800));

      /* Tasa 0.9 */
      $('#policy .static-element.effectiveness-image-container .tasa-0-9 .value').each(checkOffsetStaticPage('entering', 13200));
      $('#policy .static-element.effectiveness-image-container .tasa-0-9 .text').each(checkOffsetStaticPage('entering', 13200));

      /* Tasa 0.9 */
      $('#policy .static-element.effectiveness-image-container .image-description').each(checkOffsetStaticPage('entering', 13300));

      /* Effectiveness exit */
      $('#policy .static-element.effectiveness-image-container.last-element').each(checkOffsetStaticPage('out', 14000));

      /* Interventions index */
      $('#policy .interventions-types-section .interventions-index').each(checkOffsetStaticPage('fixed', 14700));
      $('#policy .interventions-types-section .interventions-index').each(checkOffsetStaticPage('exit', 16375));
    }
  });

} (jQuery) );