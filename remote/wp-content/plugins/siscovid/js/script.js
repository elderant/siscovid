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
  
  var siscovid_handle_reference_hover = function(event) {
    event.stopPropagation();
    let $referenceContainer = $(this).find('.reference-container')
    if(!$referenceContainer.hasClass('active')) {
      $referenceContainer.addClass('active');

      $(this).find('.modal-helper').on('mouseleave', function(event){
        event.stopPropagation();
        $referenceContainer.removeClass('active');
      });
      $(this).on('mouseleave', function(event){
        event.stopPropagation();
        $referenceContainer.removeClass('active');
      });
    }
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
        else if(className == 'fixed') {
          this.style.setProperty('--data-top-fixed', $(window).scrollTop());
        }
        $this.addClass(className);
      }
      else if(topOfWindow < height && $this.hasClass(className)) {
        $this.removeClass(className);
      }
    };
  }

  var convertRemToPixels = function(rem) {    
    return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
  }

  $(document).ready(function () {
    if($('.page-home').length > 0) {
      siscovid_initialize_team_carrousel();
      siscovid_handle_home_models_fadeIn();

      $('#project a').each(checkOffset('animate__animated animate__fadeIn'));
      $('#team .carousel-row').each(checkOffset('animate__animated animate__fadeInDown'));
      $('#allies .allies').each(checkOffset('animate__animated animate__fadeInDown'));

      // Home - models animaton
      $('#project .images-container .agentes-container').on('mouseenter', function() {
        $('.agentes-container').addClass('animate');
        $('.poblacional-container').addClass('animate');

        $('.agentes-container').removeClass('reverse');
        $('.poblacional-container').removeClass('reverse');
      });

      $('#project .images-container .poblacional-container').on('mouseenter', function() {
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
      //References events
      $('#policy .reference').each(function(){
        $(this).on('mouseenter', siscovid_handle_reference_hover);
      });

      // Scroll events and variables
      let introStart = $('#policy .static-row.introduction').offset().top - window.innerHeight*0.1;
      
      // General variables
      window.siscovid = {};
      window.siscovid.scrollHeight = 500;
      window.siscovid.heightOffset = 100;
      
      // introduction variables
      window.siscovid.intro = {start : introStart};
      window.siscovid.inf = {start : introStart + 16*window.siscovid.scrollHeight + 9*window.siscovid.heightOffset};
      window.siscovid.effectiveness = {start : window.siscovid.inf.start + 5*window.siscovid.scrollHeight + 3*window.siscovid.heightOffset};
      window.siscovid.if = {start : window.siscovid.effectiveness.start + 16*window.siscovid.scrollHeight + 3*window.siscovid.heightOffset};
      window.siscovid.used = {start : window.siscovid.if.start + 8*window.siscovid.scrollHeight};
      window.siscovid.model = {start : window.siscovid.used.start + 10*window.siscovid.scrollHeight + 3*window.siscovid.heightOffset};
      $('#policy .introduction')[0].style.height = (window.siscovid.model.start + 32*window.siscovid.scrollHeight + 6*window.siscovid.heightOffset + window.innerHeight/2) + "px";
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
      document.documentElement.style.setProperty('--data-top', $(window).scrollTop());
      let start = window.siscovid.intro.start;
      let scrollHeight = window.siscovid.scrollHeight;
      let heightOffset = window.siscovid.heightOffset;
      let infStart = window.siscovid.inf.start;
      let effectivenessStart = window.siscovid.effectiveness.start;
      let ifStart = window.siscovid.if.start;
      let usedStart = window.siscovid.used.start
      let modelStart = window.siscovid.model.start;

      $('#policy .static-element.introduction-text.first-element').each(checkOffsetStaticPage('in', 343));

      /* introduction image enter */
      $('#policy .static-subelement.introduction-image').each(checkOffsetStaticPage('in', start + scrollHeight));
      $('#policy .static-subelement.introduction-image .first-image').each(checkOffsetStaticPage('entering', start + scrollHeight));
      $('#policy .static-subelement.introduction-image .second-image').each(checkOffsetStaticPage('entering', start + 2*scrollHeight));
      $('#policy .static-subelement.introduction-image .third-image').each(checkOffsetStaticPage('entering', start + 3*scrollHeight));
      $('#policy .static-subelement.introduction-image .image-description').each(checkOffsetStaticPage('entering', start + 3*scrollHeight + heightOffset)); //1600
      /* introduction image exit */
      $('#policy .static-subelement.introduction-image .first-image').each(checkOffsetStaticPage('transition', start + 4*scrollHeight + heightOffset));
      $('#policy .static-subelement.introduction-image .second-image').each(checkOffsetStaticPage('transition', start + 4*scrollHeight + heightOffset));
      $('#policy .static-subelement.introduction-image .third-image').each(checkOffsetStaticPage('transition', start + 4*scrollHeight + heightOffset));
      /* introduction text exit */
      $('#policy .static-element.introduction-text').each(checkOffsetStaticPage('exiting', start + 5*scrollHeight + heightOffset));
      $('#policy .static-element.introduction-text').each(checkOffsetStaticPage('out', start + 6*scrollHeight + heightOffset)); //2400

      /* Cities text enter */
      $('#policy .static-element.cities-text').each(checkOffsetStaticPage('entering', start + 5*scrollHeight + 3*heightOffset));
      $('#policy .static-element.cities-text .cities-p').each(checkOffsetStaticPage('entering', start + 6*scrollHeight + 3*heightOffset));
      /* Map enter */
      $('#policy .static-element.cities-text .map').each(checkOffsetStaticPage('entering', start + 7*scrollHeight + 3*heightOffset)); //3400
      /* Cities text exit */
      $('#policy .static-element.cities-text').each(checkOffsetStaticPage('exiting', start + 8*scrollHeight + 3*heightOffset));
      $('#policy .static-element.cities-text').each(checkOffsetStaticPage('out', start + 9*scrollHeight + 3*heightOffset)); //3900

      /* Factors enter */
      $('#policy .static-element.factors-text').each(checkOffsetStaticPage('entering', start + 9*scrollHeight + 4*heightOffset));
      $('#policy .static-element.factors-text .first-factor').each(checkOffsetStaticPage('entering', start + 9*scrollHeight + 4*heightOffset));
      $('#policy .static-element.factors-text .second-factor').each(checkOffsetStaticPage('entering', start + 10*scrollHeight + 4*heightOffset));
      /* Factors exit */
      $('#policy .static-element.factors-text').each(checkOffsetStaticPage('exiting', start + 11*scrollHeight + 4*heightOffset));
      $('#policy .static-element.factors-text').each(checkOffsetStaticPage('out', start + 12*scrollHeight + 4*heightOffset));
      
      /* Interventions enter*/
      $('#policy .static-element.interventions-text').each(checkOffsetStaticPage('entering', start + 11*scrollHeight + 5*heightOffset));
      
      /* Interventions first image enter*/
      $('#policy .static-element.interventions-text .objectives.image-container').each(checkOffsetStaticPage('in', start + 11*scrollHeight + 5*heightOffset));
      $('#policy .static-element.interventions-text .objectives .first-image').each(checkOffsetStaticPage('entering', start + 11*scrollHeight + 6*heightOffset));
      $('#policy .static-element.interventions-text .objectives .second-image').each(checkOffsetStaticPage('entering', start + 12*scrollHeight + 6*heightOffset));
      $('#policy .static-element.interventions-text .objectives .third-image').each(checkOffsetStaticPage('entering', start + 13*scrollHeight + 6*heightOffset));
      $('#policy .static-element.interventions-text .objectives .image-description').each(checkOffsetStaticPage('entering', start + 13*scrollHeight + 7*heightOffset));
      
      /* Interventions first image exit*/
      $('#policy .static-element.interventions-text .objectives.image-container').each(checkOffsetStaticPage('exiting', start + 14*scrollHeight + 7*heightOffset));
      
      /* Interventions Second image enter */
      $('#policy .static-element.interventions-text .graph.image-container').each(checkOffsetStaticPage('entering', start + 15*scrollHeight + 8*heightOffset));
      
      /* Interventions exit */
      $('#policy .static-element.interventions-text').each(checkOffsetStaticPage('exiting', start + 16*scrollHeight + 8*heightOffset));
      $('#policy .static-element.interventions-text').each(checkOffsetStaticPage('out', start + 17*scrollHeight + 8*heightOffset));

      /* Interventions exit */
      //$('#policy .static-element.interventions-text').each(checkOffsetStaticPage('out', start + 16*scrollHeight + 8*heightOffset));
    
      /* INF enter */
      $('#policy .static-element.inf-container').each(checkOffsetStaticPage('entering', infStart));
      $('#policy .static-element.inf-container .inf-individual').each(checkOffsetStaticPage('in', infStart));

      /* INF individuales : enter */
      $('#policy .static-element.inf-container .inf-individual .text-container').each(checkOffsetStaticPage('entering', infStart + scrollHeight));
      $('#policy .static-element.inf-container .inf-individual .image-container').each(checkOffsetStaticPage('entering', infStart + scrollHeight));

      /* INF individuales : exit */
      $('#policy .static-element.inf-container .inf-individual').each(checkOffsetStaticPage('exiting', infStart + 2*scrollHeight));
      $('#policy .static-element.inf-container .inf-individual').each(checkOffsetStaticPage('out', infStart + 3*scrollHeight));

      /* INF Community enter */
      $('#policy .static-element.inf-container .inf-community').each(checkOffsetStaticPage('entering', infStart + 2*scrollHeight + heightOffset));
      
      /* INF Community : bottom row enter */
      $('#policy .static-element.inf-container .inf-community .message').each(checkOffsetStaticPage('in', infStart + 3*scrollHeight + heightOffset));
      $('#policy .static-element.inf-container .inf-community .bottom-container').each(checkOffsetStaticPage('entering', infStart + 3*scrollHeight + heightOffset));

      /* INF Community exit */
      $('#policy .static-element.inf-container .inf-community').each(checkOffsetStaticPage('exiting', infStart + 4*scrollHeight + heightOffset));
      $('#policy .static-element.inf-container .inf-community').each(checkOffsetStaticPage('out', infStart + 5*scrollHeight + heightOffset));

      /* INF Environment enter */
      $('#policy .static-element.inf-container .inf-environment').each(checkOffsetStaticPage('entering', infStart + 4*scrollHeight + 2*heightOffset));
      $('#policy .static-element.inf-container .inf-environment .image-container').each(checkOffsetStaticPage('entering', infStart + 4*scrollHeight + 2*heightOffset));
      $('#policy .static-element.inf-container .inf-environment .text-container').each(checkOffsetStaticPage('entering', infStart + 4*scrollHeight + 2*heightOffset));

      /* INF Environment exit */
      /* INF exit */
      $('#policy .static-element.inf-container').each(checkOffsetStaticPage('exiting', infStart + 5*scrollHeight + 2*heightOffset));
      $('#policy .static-element.inf-container').each(checkOffsetStaticPage('out', infStart + 6*scrollHeight + 2*heightOffset));
      
      /* INF Effectiveness enter */
      $('#policy .static-element.inf-effectiveness').each(checkOffsetStaticPage('entering', effectivenessStart));
      
      $('#policy .static-element.inf-effectiveness .animated-subtitle').each(checkOffsetStaticPage('entering', effectivenessStart + scrollHeight));
      
      /* Tasa 2.6 */
      $('#policy .static-element.inf-effectiveness .tasa-2-6 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 2*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-2-6 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 2*scrollHeight));

      /* Tasa 2.5 */
      $('#policy .static-element.inf-effectiveness .tasa-2-5 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 3*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-2-5 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 3*scrollHeight));
      
      /* Tasa disminucion */
      $('#policy .static-element.inf-effectiveness .tasa-disminucion .arrow').each(checkOffsetStaticPage('entering', effectivenessStart + 4*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-disminucion .text').each(checkOffsetStaticPage('entering', effectivenessStart + 4*scrollHeight));

      /* Tasa 1.8 */
      $('#policy .static-element.inf-effectiveness .tasa-1-8 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 5*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-8 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 5*scrollHeight));

      /* Tasa 1.7 */
      $('#policy .static-element.inf-effectiveness .tasa-1-7 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 6*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-7 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 6*scrollHeight));

      /* Tasa 1.6 */
      $('#policy .static-element.inf-effectiveness .tasa-1-6 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 7*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-6 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 7*scrollHeight));

      /* Tasa Medidas */
      $('#policy .static-element.inf-effectiveness .tasa-medidas .text').each(checkOffsetStaticPage('entering', effectivenessStart + 8*scrollHeight));

      /* Tasa 1.4 */
      $('#policy .static-element.inf-effectiveness .tasa-1-4 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 9*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-4 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 9*scrollHeight));

      /* Tasa 1.2 */
      $('#policy .static-element.inf-effectiveness .tasa-1-2 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 10*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-2 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 10*scrollHeight));

      /* Tasa 1.1 */
      $('#policy .static-element.inf-effectiveness .tasa-1-1 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 11*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-1 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 11*scrollHeight));

      /* Tasa 1.0 */
      $('#policy .static-element.inf-effectiveness .tasa-1-0 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 12*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-1-0 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 12*scrollHeight));

      /* Tasa mayor 0.9 */
      $('#policy .static-element.inf-effectiveness .tasa-m0-9 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 13*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-m0-9 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 13*scrollHeight));

      /* Tasa 0.9 */
      $('#policy .static-element.inf-effectiveness .tasa-0-9 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 14*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-0-9 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 14*scrollHeight));

      /* Tasa menor 0.9 */
      $('#policy .static-element.inf-effectiveness .tasa-e0-9 .value').each(checkOffsetStaticPage('entering', effectivenessStart + 15*scrollHeight));
      $('#policy .static-element.inf-effectiveness .tasa-e0-9 .text').each(checkOffsetStaticPage('entering', effectivenessStart + 15*scrollHeight));

      /* Image description*/
      $('#policy .static-element.inf-effectiveness .image-description').each(checkOffsetStaticPage('entering', effectivenessStart + 15*scrollHeight + 2*heightOffset));

      /* Effectiveness exit */
      $('#policy .static-element.inf-effectiveness').each(checkOffsetStaticPage('exiting', effectivenessStart + 16*scrollHeight + 2*heightOffset));
      $('#policy .static-element.inf-effectiveness').each(checkOffsetStaticPage('out', effectivenessStart + 17*scrollHeight + 2*heightOffset));

      /* IF start */
      $('#policy .static-element.if-vaccines').each(checkOffsetStaticPage('entering', ifStart));

      /* IF container start */
      $('#policy .static-element.if-vaccines .if-main-container').each(checkOffsetStaticPage('entering', ifStart + scrollHeight));

      /* preclinic */
      $('#policy .static-element.if-vaccines .if-main-container .phase-preclinic-row').each(checkOffsetStaticPage('entering', ifStart + scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-preclinic-row .vaccine-text').each(checkOffsetStaticPage('entering',  ifStart + scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-preclinic-row .vaccine-image').each(checkOffsetStaticPage('entering',  ifStart + scrollHeight));

      $('#policy .static-element.if-vaccines .if-main-container .phase-preclinic-row').each(checkOffsetStaticPage('exiting', ifStart + 3*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-preclinic-row .vaccine-text').each(checkOffsetStaticPage('exiting', ifStart + 3*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-preclinic-row .vaccine-image').each(checkOffsetStaticPage('exiting', ifStart + 3*scrollHeight));

      /* phase 1 */
      $('#policy .static-element.if-vaccines .if-main-container .phase-1-row').each(checkOffsetStaticPage('entering', ifStart + 2*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-1-row .vaccine-text').each(checkOffsetStaticPage('entering', ifStart + 2*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-1-row .vaccine-image').each(checkOffsetStaticPage('entering', ifStart + 2*scrollHeight));

      $('#policy .static-element.if-vaccines .if-main-container .phase-1-row').each(checkOffsetStaticPage('exiting', ifStart + 4*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-1-row .vaccine-text').each(checkOffsetStaticPage('exiting', ifStart + 4*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-1-row .vaccine-image').each(checkOffsetStaticPage('exiting', ifStart + 4*scrollHeight));

      /* phase 2 */
      $('#policy .static-element.if-vaccines .if-main-container .phase-2-row').each(checkOffsetStaticPage('entering', ifStart + 3*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-2-row .vaccine-text').each(checkOffsetStaticPage('entering', ifStart + 3*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-2-row .vaccine-image').each(checkOffsetStaticPage('entering', ifStart + 3*scrollHeight));

      $('#policy .static-element.if-vaccines .if-main-container .phase-2-row').each(checkOffsetStaticPage('exiting', ifStart + 5*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-2-row .vaccine-text').each(checkOffsetStaticPage('exiting', ifStart + 5*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-2-row .vaccine-image').each(checkOffsetStaticPage('exiting', ifStart + 5*scrollHeight));

      /* phase 3 */
      $('#policy .static-element.if-vaccines .if-main-container .phase-3-row').each(checkOffsetStaticPage('entering', ifStart + 4*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-3-row .vaccine-text').each(checkOffsetStaticPage('entering', ifStart + 4*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-3-row .vaccine-image').each(checkOffsetStaticPage('entering', ifStart + 4*scrollHeight));

      $('#policy .static-element.if-vaccines .if-main-container .phase-3-row').each(checkOffsetStaticPage('exiting', ifStart + 6*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-3-row .vaccine-text').each(checkOffsetStaticPage('exiting', ifStart + 6*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-3-row .vaccine-image').each(checkOffsetStaticPage('exiting', ifStart + 6*scrollHeight));

      /* phase 4 */
      $('#policy .static-element.if-vaccines .if-main-container .phase-4-row').each(checkOffsetStaticPage('entering', ifStart + 5*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-4-row .vaccine-text').each(checkOffsetStaticPage('entering',ifStart + 5*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-4-row .vaccine-image').each(checkOffsetStaticPage('entering', ifStart + 5*scrollHeight));

      $('#policy .static-element.if-vaccines .if-main-container .phase-4-row').each(checkOffsetStaticPage('exiting', ifStart + 7*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-4-row .vaccine-text').each(checkOffsetStaticPage('exiting', ifStart + 7*scrollHeight));
      $('#policy .static-element.if-vaccines .if-main-container .phase-4-row .vaccine-image').each(checkOffsetStaticPage('exiting', ifStart + 7*scrollHeight));

      /* IF exit */
      // $('#policy .static-element.if-vaccines .if-main-container.scroll').each(checkOffsetStaticPage('fixed', ifStart + 8*scrollHeight));
      $('#policy .static-element.if-vaccines').each(checkOffsetStaticPage('exiting', ifStart + 8*scrollHeight));
      $('#policy .static-element.if-vaccines').each(checkOffsetStaticPage('out', ifStart + 9*scrollHeight));
      
      /* used enter */
      $('#policy .static-element.interventions-used').each(checkOffsetStaticPage('entering', usedStart));
      
      /* used description enter */ 
      $('#policy .static-element.interventions-used .description-container').each(checkOffsetStaticPage('entering', usedStart + scrollHeight));
      
      /* used exit */
      $('#policy .static-element.interventions-used').each(checkOffsetStaticPage('exiting', usedStart + 2*scrollHeight));
      $('#policy .static-element.interventions-used').each(checkOffsetStaticPage('out', usedStart + 3*scrollHeight));

      /* Opinions enter */
      $('#policy .static-element.interventions-opinion').each(checkOffsetStaticPage('entering', usedStart + 2*scrollHeight + heightOffset));

      /* Opinions text enter */
      $('#policy .static-element.interventions-opinion .text-column .static-subelement').each(checkOffsetStaticPage('entering', usedStart + 3*scrollHeight + heightOffset));

      /* Opnions map enter */
      $('#policy .static-element.interventions-opinion .map').each(checkOffsetStaticPage('entering', usedStart + 4*scrollHeight + heightOffset));
      
      /* Opinions exit */
      $('#policy .static-element.interventions-opinion').each(checkOffsetStaticPage('exiting', usedStart + 5*scrollHeight + heightOffset));
      $('#policy .static-element.interventions-opinion').each(checkOffsetStaticPage('out', usedStart + 6*scrollHeight + heightOffset));

      /* Maxims enter */
      $('#policy .static-element.interventions-maxims').each(checkOffsetStaticPage('entering', usedStart + 5*scrollHeight + 2*heightOffset));
      
      /* Maxims First part enter */
      $('#policy .static-element.interventions-maxims .first-section').each(checkOffsetStaticPage('entering', usedStart + 6*scrollHeight + 2*heightOffset));

      /* Maxims Second part enter */
      $('#policy .static-element.interventions-maxims .second-section').each(checkOffsetStaticPage('entering', usedStart + 7*scrollHeight + 2*heightOffset));

      /* Maxims Third part enter */
      $('#policy .static-element.interventions-maxims .third-section').each(checkOffsetStaticPage('entering', usedStart + 8*scrollHeight + 2*heightOffset));

      /* Maxims text enter */
      $('#policy .static-element.interventions-maxims .description-container').each(checkOffsetStaticPage('entering', usedStart + 9*scrollHeight + 2*heightOffset));

      /* Maxims exit */
      $('#policy .static-element.interventions-maxims').each(checkOffsetStaticPage('exiting', usedStart + 10*scrollHeight + 2*heightOffset));
      $('#policy .static-element.interventions-maxims').each(checkOffsetStaticPage('out', usedStart + 11*scrollHeight + 2*heightOffset));

      /* Models intro enter */
      $('#policy .static-element.models-intro').each(checkOffsetStaticPage('entering', modelStart));

      /* Models intro text enter */
      $('#policy .static-element.models-intro .text-column .static-subelement').each(checkOffsetStaticPage('entering', modelStart + scrollHeight));

      /* Models intro images enter */
      $('#policy .static-element.models-intro .image-column .model-image').each(checkOffsetStaticPage('entering', modelStart + 2*scrollHeight));

      /* Models intro image name enter */
      $('#policy .static-element.models-intro .image-column .description-container').each(checkOffsetStaticPage('entering', modelStart + 3*scrollHeight));

      /* Models intro exit */
      $('#policy .static-element.models-intro').each(checkOffsetStaticPage('exiting', modelStart + 4*scrollHeight));
      $('#policy .static-element.models-intro').each(checkOffsetStaticPage('out', modelStart + 5*scrollHeight));
     
      
      /* Model Population enter */
      $('#policy .static-element.model-population').each(checkOffsetStaticPage('entering', modelStart + 4*scrollHeight + heightOffset));
      $('#policy .static-element.model-population .background-title .title1').each(checkOffsetStaticPage('entering', modelStart + 4*scrollHeight + heightOffset));
      
      /* Model Population description enter */
      $('#policy .static-element.model-population .model-description').each(checkOffsetStaticPage('entering', modelStart + 5*scrollHeight + heightOffset));
      $('#policy .static-element.model-population .model-description .model-image').each(checkOffsetStaticPage('entering', modelStart + 5*scrollHeight + heightOffset));
      
      /* Model Population description text enter */
      $('#policy .static-element.model-population .model-description .text-column .static-subelement').each(checkOffsetStaticPage('entering', modelStart + 5*scrollHeight + heightOffset));
      
      /* Model Population image description enter */
      $('#policy .static-element.model-population .model-description .description-container').each(checkOffsetStaticPage('entering', modelStart + 7*scrollHeight + heightOffset));
     
      /* Model Population description exit */
      $('#policy .static-element.model-population .model-description').each(checkOffsetStaticPage('exiting', modelStart + 8*scrollHeight + heightOffset));
      $('#policy .static-element.model-population .background-title .title1').each(checkOffsetStaticPage('exiting', modelStart + 8*scrollHeight + heightOffset));
      $('#policy .static-element.model-population .model-description').each(checkOffsetStaticPage('out', modelStart + 9*scrollHeight + heightOffset));

      /* Model Population result 1 enter */
      $('#policy .static-element.model-population .model-results1').each(checkOffsetStaticPage('entering', modelStart + 8*scrollHeight + 2*heightOffset));
      $('#policy .static-element.model-population .background-title .title2').each(checkOffsetStaticPage('entering', modelStart + 8*scrollHeight + 2*heightOffset));

      /* Model Population result 1 image enter */
      $('#policy .static-element.model-population .model-results1 .model-image').each(checkOffsetStaticPage('entering', modelStart + 9*scrollHeight + 2*heightOffset));

      /* Model Population result 1 image description */
      $('#policy .static-element.model-population .model-results1 .description-container').each(checkOffsetStaticPage('entering', modelStart + 10*scrollHeight + 2*heightOffset));

      /* Model Population result 1 exit */
      $('#policy .static-element.model-population .model-results1').each(checkOffsetStaticPage('exiting', modelStart + 11*scrollHeight + 2*heightOffset));
      $('#policy .static-element.model-population .background-title .title2').each(checkOffsetStaticPage('exiting', modelStart + 11*scrollHeight + 2*heightOffset));
      $('#policy .static-element.model-population .model-results1').each(checkOffsetStaticPage('out', modelStart + 12*scrollHeight + 2*heightOffset));

      /* Model Population result 2 enter */
      $('#policy .static-element.model-population .model-results2').each(checkOffsetStaticPage('entering', modelStart + 11*scrollHeight + 3*heightOffset));
      $('#policy .static-element.model-population .background-title .title3').each(checkOffsetStaticPage('entering', modelStart + 11*scrollHeight + 3*heightOffset));

      /* Model Population result 2 image description enter */
      $('#policy .static-element.model-population .model-results2 .description-container').each(checkOffsetStaticPage('entering', modelStart + 12*scrollHeight + 3*heightOffset));

      /* Model Population result 2 image description */
      $('#policy .static-element.model-population .model-results2 .text-row .static-subelement').each(checkOffsetStaticPage('entering', modelStart + 13*scrollHeight + 3*heightOffset));

      /* Model Population exit */
      $('#policy .static-element.model-population').each(checkOffsetStaticPage('exiting', modelStart + 14*scrollHeight + 3*heightOffset));
      $('#policy .static-element.model-population').each(checkOffsetStaticPage('out', modelStart + 15*scrollHeight + 3*heightOffset));


      /* Model Agent enter */
      $('#policy .static-element.model-agent').each(checkOffsetStaticPage('entering', modelStart + 14*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .background-title .title1').each(checkOffsetStaticPage('entering', modelStart + 14*scrollHeight + 4*heightOffset));

      /* Model Agent description enter */
      $('#policy .static-element.model-agent .model-description').each(checkOffsetStaticPage('entering', modelStart + 15*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .model-description .text-row .static-subelement').each(checkOffsetStaticPage('entering', modelStart + 15*scrollHeight + 4*heightOffset));
      
      /* Model Agent description characteristics 1 enter */
      $('#policy .static-element.model-agent .agent-characteristics').each(checkOffsetStaticPage('entering', modelStart + 16*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .agent-characteristics .agent-grouped').each(checkOffsetStaticPage('entering', modelStart + 16*scrollHeight + 4*heightOffset));
      
      /* Model Agent description characteristics 1 image description enter */
      $('#policy .static-element.model-agent .agent-characteristics .agent-grouped .description-container').each(checkOffsetStaticPage('entering', modelStart + 17*scrollHeight + 4*heightOffset));

      /* Model Agent description characteristics 3 enter */
      //$('#policy .static-element.model-agent .agent-characteristics .agent-movement').each(checkOffsetStaticPage('exiting', modelStart + 18*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .agent-characteristics .agent-states-row').each(checkOffsetStaticPage('entering', modelStart + 18*scrollHeight + 4*heightOffset));

      /* Model Agent description characteristics 2 enter */
      $('#policy .static-element.model-agent .agent-characteristics .agent-grouped').each(checkOffsetStaticPage('exiting', modelStart + 19*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .agent-characteristics .agent-movement').each(checkOffsetStaticPage('entering', modelStart + 19*scrollHeight + 4*heightOffset));

      /* Model Agent description characteristics 2 image description enter */
      $('#policy .static-element.model-agent .agent-characteristics .agent-movement .description-container').each(checkOffsetStaticPage('entering', modelStart + 20*scrollHeight + 4*heightOffset));
      
      /* Model Agent description exit */
      $('#policy .static-element.model-agent .model-description').each(checkOffsetStaticPage('exiting', modelStart + 21*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .background-title .title1').each(checkOffsetStaticPage('exiting', modelStart + 21*scrollHeight + 4*heightOffset));
      $('#policy .static-element.model-agent .model-description').each(checkOffsetStaticPage('out', modelStart + 22*scrollHeight + 4*heightOffset));


      /* Model Agent results enter */
      $('#policy .static-element.model-agent .model-results').each(checkOffsetStaticPage('entering', modelStart + 21*scrollHeight + 5*heightOffset));
      $('#policy .static-element.model-agent .background-title .title2').each(checkOffsetStaticPage('entering', modelStart + 21*scrollHeight + 5*heightOffset));

      /* Model Agent first graph enter */
      $('#policy .static-element.model-agent .model-results .image-container.bogota').each(checkOffsetStaticPage('entering', modelStart + 22*scrollHeight + 5*heightOffset));

      /* Model Agent graph description enter */
      $('#policy .static-element.model-agent .model-results .image-row .description-container').each(checkOffsetStaticPage('entering', modelStart + 23*scrollHeight + 5*heightOffset));

      /* Model Agent bottom row enter */
      $('#policy .static-element.model-agent .model-results .bottom-row').each(checkOffsetStaticPage('entering', modelStart + 24*scrollHeight + 5*heightOffset));

      /* Model Agent second graph enter */
      $('#policy .static-element.model-agent .model-results .image-container.bogota').each(checkOffsetStaticPage('exiting', modelStart + 25*scrollHeight + 5*heightOffset));
      $('#policy .static-element.model-agent .model-results .image-container.barranquilla').each(checkOffsetStaticPage('entering', modelStart + 26*scrollHeight + 5*heightOffset));

      /* Model Agent third graph enter */
      $('#policy .static-element.model-agent .model-results .image-container.barranquilla').each(checkOffsetStaticPage('exiting', modelStart + 27*scrollHeight + 5*heightOffset));
      $('#policy .static-element.model-agent .model-results .image-container.cartagena').each(checkOffsetStaticPage('entering', modelStart + 28*scrollHeight + 5*heightOffset));

      /* Model Agent exit */
      $('#policy .static-element.model-agent').each(checkOffsetStaticPage('exiting', modelStart + 29*scrollHeight + 5*heightOffset));
      $('#policy .static-element.model-agent').each(checkOffsetStaticPage('out', modelStart + 30*scrollHeight + 5*heightOffset));

      /* Closing enter */
      $('#policy .static-element.closing-text').each(checkOffsetStaticPage('entering', modelStart + 29*scrollHeight + 6*heightOffset));

      /* Closing main enter */
      $('#policy .static-element.closing-text .text-row .static-subelement').each(checkOffsetStaticPage('entering', modelStart + 30*scrollHeight + 6*heightOffset));

      /* Closing logo enter */
      $('#policy .static-element.closing-text .site-logo').each(checkOffsetStaticPage('entering', modelStart + 31*scrollHeight + 6*heightOffset));

      $('#policy .static-element.closing-text').each(checkOffsetStaticPage('out', modelStart + 32*scrollHeight + 6*heightOffset));
    }
  });

} (jQuery) );