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
      let introStart = $('#policy .static-row.introduction').offset().top - window.innerHeight*0.1;
      let interventionsStart = $('#policy .effectiveness-image-row').offset().top - window.innerHeight*0.4;
      let indexStart = $('#policy .interventions-types-section').offset().top + window.innerHeight*0.25;
      let indexEnd = indexStart + $('#policy .interventions-types-section').height() - window.innerHeight*0.9;

      window.siscovid = {};
      window.siscovid.scrollHeight = 450;
      window.siscovid.heightOffset = 100;
      
      window.siscovid.intro = {start : introStart};
      window.siscovid.interventions = {start : interventionsStart};
      window.siscovid.index = {start : indexStart, end: indexEnd};
      window.siscovid.maxims = {};

      $('#policy .introduction')[0].style.height = (introStart + 16*window.siscovid.scrollHeight + 9*window.siscovid.heightOffset + window.innerHeight/2) + "px";
      $('#policy .effectiveness-image-row')[0].style.height = (16*window.siscovid.scrollHeight + 2*window.siscovid.heightOffset + window.innerHeight) + "px";
      $('#policy .static-element.introduction-text').each(checkOffsetStaticPage('entering', introStart));
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
      $('#policy .static-element.interventions-text').each(checkOffsetStaticPage('out', start + 16*scrollHeight + 8*heightOffset));
    
      let interventionsStart = window.siscovid.interventions.start;
      
      /* Effectiveness enter */
      $('#policy .static-element.effectiveness-image-container.first-element').each(checkOffsetStaticPage('in', interventionsStart));
      
      $('#policy .static-element.effectiveness-image-container .animated-subtitle').each(checkOffsetStaticPage('entering', interventionsStart + scrollHeight));
      
      /* Tasa 2.6 */
      $('#policy .static-element.effectiveness-image-container .tasa-2-6 .value').each(checkOffsetStaticPage('entering', interventionsStart + 2*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-2-6 .text').each(checkOffsetStaticPage('entering', interventionsStart + 2*scrollHeight));

      /* Tasa 2.5 */
      $('#policy .static-element.effectiveness-image-container .tasa-2-5 .value').each(checkOffsetStaticPage('entering', interventionsStart + 3*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-2-5 .text').each(checkOffsetStaticPage('entering', interventionsStart + 3*scrollHeight));
      
      /* Tasa disminucion */
      $('#policy .static-element.effectiveness-image-container .tasa-disminucion .arrow').each(checkOffsetStaticPage('entering', interventionsStart + 4*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-disminucion .text').each(checkOffsetStaticPage('entering', interventionsStart + 4*scrollHeight));

      /* Tasa 1.8 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-8 .value').each(checkOffsetStaticPage('entering', interventionsStart + 5*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-8 .text').each(checkOffsetStaticPage('entering', interventionsStart + 5*scrollHeight));

      /* Tasa 1.7 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-7 .value').each(checkOffsetStaticPage('entering', interventionsStart + 6*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-7 .text').each(checkOffsetStaticPage('entering', interventionsStart + 6*scrollHeight));

      /* Tasa 1.6 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-6 .value').each(checkOffsetStaticPage('entering', interventionsStart + 7*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-6 .text').each(checkOffsetStaticPage('entering', interventionsStart + 7*scrollHeight));

      /* Tasa Medidas */
      $('#policy .static-element.effectiveness-image-container .tasa-medidas .text').each(checkOffsetStaticPage('entering', interventionsStart + 8*scrollHeight));

      /* Tasa 1.4 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-4 .value').each(checkOffsetStaticPage('entering', interventionsStart + 9*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-4 .text').each(checkOffsetStaticPage('entering', interventionsStart + 9*scrollHeight));

      /* Tasa 1.2 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-2 .value').each(checkOffsetStaticPage('entering', interventionsStart + 10*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-2 .text').each(checkOffsetStaticPage('entering', interventionsStart + 10*scrollHeight));

      /* Tasa 1.1 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-1 .value').each(checkOffsetStaticPage('entering', interventionsStart + 11*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-1 .text').each(checkOffsetStaticPage('entering', interventionsStart + 11*scrollHeight));

      /* Tasa 1.0 */
      $('#policy .static-element.effectiveness-image-container .tasa-1-0 .value').each(checkOffsetStaticPage('entering', interventionsStart + 12*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-1-0 .text').each(checkOffsetStaticPage('entering', interventionsStart + 12*scrollHeight));

      /* Tasa mayor 0.9 */
      $('#policy .static-element.effectiveness-image-container .tasa-m0-9 .value').each(checkOffsetStaticPage('entering', interventionsStart + 13*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-m0-9 .text').each(checkOffsetStaticPage('entering', interventionsStart + 13*scrollHeight));

      /* Tasa 0.9 */
      $('#policy .static-element.effectiveness-image-container .tasa-0-9 .value').each(checkOffsetStaticPage('entering', interventionsStart + 14*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-0-9 .text').each(checkOffsetStaticPage('entering', interventionsStart + 14*scrollHeight));

      /* Tasa menor 0.9 */
      $('#policy .static-element.effectiveness-image-container .tasa-e0-9 .value').each(checkOffsetStaticPage('entering', interventionsStart + 15*scrollHeight));
      $('#policy .static-element.effectiveness-image-container .tasa-e0-9 .text').each(checkOffsetStaticPage('entering', interventionsStart + 15*scrollHeight));

      /* Image description*/
      $('#policy .static-element.effectiveness-image-container .image-description').each(checkOffsetStaticPage('entering', interventionsStart + 15*scrollHeight + 2*heightOffset));

      /* Effectiveness exit */
      $('#policy .static-element.effectiveness-image-container.last-element').each(checkOffsetStaticPage('out', interventionsStart + 16*scrollHeight + 2*heightOffset));

      let indexStart = window.siscovid.index.start;
      let indexEnd = window.siscovid.index.end;

      /* Interventions index */
      $('#policy .interventions-types-section .interventions-index').each(checkOffsetStaticPage('fixed', indexStart));
      $('#policy .interventions-types-section .interventions-index').each(checkOffsetStaticPage('exit', indexEnd));
    
      /* Maxims enter */
      // let maximsIntro = $('#policy .community-maxims .maxims-images .maxims-intro');
      // let maximStart =  window.siscovid.maxims.maximsIntroTop - window.innerHeight + maximsIntro.find('img').height() + convertRemToPixels(3);
      // maximsIntro.each(checkOffsetStaticPage('fixed', maximStart));
      
      
      // let maximIn = maximStart + window.innerHeight/2 - convertRemToPixels(3);
      // maximsIntro.each(checkOffsetStaticPage('in', maximIn));
      // $('#policy .community-maxims .maxims-images').each(checkOffsetStaticPage('in', maximIn));

      var texts = $('#policy .community-maxims .maxims-text');
      var maximsin = texts.offset().top - window.innerHeight*0.4;
      $('#policy .community-maxims .maxims-images .maxim-intro').each(checkOffsetStaticPage('in', maximsin));
      $('#policy .community-maxims .maxims-images').each(checkOffsetStaticPage('in', maximsin));

      let currentMaximImage;
      let nextMaximImage;
      let markMaximText;
      let maximChange;

      /* Maxim 1 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-intro');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-1');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-1 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;

      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));

      /* Maxim 2 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-1');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-2');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-2 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));

      /* Maxim 3 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-2');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-3');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-3 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));

      /* Maxim 4 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-3');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-4');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-4 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));
      
      /* Maxim 5 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-4');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-5');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-5 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));
      
      /* Maxim 6 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-5');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-6');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-6 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));
      
      /* Maxim 7 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-6');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-7');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-7 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));
      
      /* Maxim 8 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-7');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-8');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-8 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));
      
      /* Maxim 9 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-8');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-9');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-9 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));
      
      /* Maxim 10 */
      currentMaximImage = $('#policy .community-maxims .maxims-images .maxim-9');
      nextMaximImage = $('#policy .community-maxims .maxims-images .maxim-10');
      markMaximText = $('#policy .community-maxims .maxims-text .maxim-10 p');
      maximChange = markMaximText.offset().top - window.innerHeight/2 - 300 + markMaximText.height()/2;
      
      currentMaximImage.each(checkOffsetStaticPage('exiting', maximChange));
      nextMaximImage.each(checkOffsetStaticPage('entering', maximChange));

      /* Maxims exit */
      var texts = $('#policy .community-maxims .maxims-text');
      var maximsOut = texts.offset().top + texts.height() - window.innerHeight;
      $('#policy .community-maxims .maxims-images .last-element').each(checkOffsetStaticPage('out', maximsOut));
      $('#policy .community-maxims .maxims-images').each(checkOffsetStaticPage('out', maximsOut));
    }
  });

} (jQuery) );