<?
  /*$url = 'https://culturaprofetica.com/wp-admin/admin-post.php';
  // action = update_inventory
  $xml = '<DATOS><USUARIO>624154454F2912704B06435E06425001703E0BE3AFBC</USUARIO><CLAVE>624154454F2912704B06435E06425001706657A2F2</CLAVE><NOMBRE>CONSULTAINVENTARIOREFERENCIA</NOMBRE><REFCODIGO>0100077024C134</REFCODIGO><ALMCODIGO>CS101</ALMCODIGO><IDEMP>CARMENS</IDEMP></DATOS>';

  
  $byte_array = unpack('C*', $xml);
  $byte_array = array_values($byte_array);

  error_log('sending post request to ' . $url);
  //error_log('with data ' .  print_r($byte_array,1));
  $response = wp_remote_post( $url, array(
    'method'      => 'POST',
    'timeout'     => 45,
    'redirection' => 5,
    'httpversion' => '1.0',
    'blocking'    => true,
    'headers'     => array(),
    'body'        => array(
        'action' => 'update_inventory',
        'data' => $byte_array,
        'test' => 'new value',
    ),
    'cookies'     => array()
    )
  );
 

  if ( is_wp_error( $response ) ) {
      $error_message = $response->get_error_message();
      error_log('Something went wrong : ' . print_r($error_message,1));
      echo "Something went wrong: $error_message";
  } else {
    error_log('response received : ' . print_r($response,1));
  }*/
?>

<div id="policy">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
        <h2><?php _e('¿Cómo disminuir la transmisión del virus SARS-COV-2 en contextos urbanos de Colombia?','siscovid')?></h2>
      </div>
    </div> 
    <div class="row static-row introduction">
      <div class="introduction-text col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out slide-out-up static-element first-element">
        <h3 class="title"><?php _e('Introducción','siscovid')?></h3>
        <p><?php _e('La pandemia de <span class="color-green">COVID-19</span> no tiene precedentes en los últimos tiempos en términos de su propagación mundial, la morbilidad, mortalidad y la carga de enfermedad resultantes. Los países han adoptado diversas medidas de prevención y control para frenar la transmisión y así reducir la mortalidad asociada. Conforme avanza la pandemia los países y sus ciudades se enfrentan a los diferentes escenarios de transmisión bajo los cuales algunos intensifican las medidas al tiempo que otros las relajan.','siscovid')?></p>
        <div class="static-subelement introduction-image image-container fade-out d-flex justify-content-around flex-wrap">
          <img class="static-subelement fade-in zoom-in first-image" src="/wp-content/uploads/politicas-introduccion-1.png" alt="<?php _e('introduction image', 'siscovid')?>">
          <img class="static-subelement fade-in zoom-in second-image" src="/wp-content/uploads/politicas-introduccion-2.png" alt="<?php _e('introduction image', 'siscovid')?>">
          <img class="static-subelement fade-in zoom-in third-image" src="/wp-content/uploads/politicas-introduccion-3.png" alt="<?php _e('introduction image', 'siscovid')?>">
          <p class="image-description static-subelement fade-in"><?php _e('Escenarios de transmisión','siscovid')?></p>
        </div>
      </div>
      <div class="cities-text col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="title">
              <img class="icon" src="/wp-content/uploads/politicas-ciudades-icon.png" alt="<?php _e('Cities icon','siscovid');?>">
              <?php _e('Ciudades','siscovid')?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12 d-flex justify-content-center flex-column">
            <h4 class="color-blue h2"><span class="subtitle"><?php _e('Contextos urbanos', 'siscovid'); ?></span></h4>
            <p class="static-subelement fade-in cities-p"><?php _e('Barranquilla, Bogotá, Cali, Cartagena y Medellín, así como las grandes ciudades en el mundo tienen más riesgo de propagación por sus densidades poblacionales, mayor conectividad y mayor actividad económica. Adicionalmente, el contexto colombiano presenta un reto adicional por los altos niveles de inequidad social, en los que poblaciones vulnerables habitan en hacinamiento, carecen de necesidades básicas y viven en asentamientos informales que a su vez suelen estar desempleados o dependen de economías informales.','siscovid')?></p>
            <ul class="static-subelement fade-in background-light cities-ul hidden">
              <li><?php _e('<strong>Mapa con ciudades:</strong> Cali, Medellín, Bogotá, Barranquilla, Cartagena.','siscovid')?></li>
              <li><?php _e('<strong>Generalidades de cada una:</strong> población, estructura de edad, capacidad hospitalaria, sectores, comorbilidades, movilidad, contexto.','siscovid')?></li>
              <li><?php _e('<strong class="color-green">COVID:</strong> datos epidemiológicos (curvas ciudades).','siscovid')?></li>
            </ul>
          </div>
          <div class="col-md-6 col-12 map-column">
            <iframe class="static-subelement zoom-out-in fade-in map" id="map-iframe" src="https://fabiancpl.github.io/siscovid/colombia-map/index.html" frameborder="0"></iframe>
          </div>
        </div>
      </div>
      <div class="factors-text col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="title"><?php _e('¿Qué situaciones ocurren en las ciudades que facilitan la transmisión del SARS-COV2?','siscovid')?></h3>
            <!-- <img class="icon" src="/wp-content/uploads/politicas-factors-icon.png" alt="Factors icon"> -->
          </div>
        </div>
        <div class="factor-container static-subelement fade-in first-factor">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-12 offset-0 offset-md-2 d-flex flex-column justify-content-center">
              <h4><?php _e('Hipercontacto:', 'siscovid'); ?></h4>
              <p><?php _e('Número elevado de contactos estrechos, los contactos son de larga duración y son repetidos y usualmente con las mismas personas en escenarios cerrados y poco ventilados. Ejemplos: Oficinas, call centers, viviendas, fábricas, entre otros.', 'siscovid');?></p>
            </div>
            <div class="col-sm-6 col-md-4 col-12 image-column">
              <img class="lazy loaded" src="/wp-content/uploads/politicas-hipercontacto.png" data-src="/wp-content/uploads/politicas-maxims-3.png" alt="Third maxim icon" data-was-processed="true">
            </div>
          </div>
        </div>
        <div class="factor-container static-subelement fade-in second-factor">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-12 offset-0 offset-md-2 image-column">
              <img class="lazy loaded" src="/wp-content/uploads/politicas-hiperconectividad.png" data-src="/wp-content/uploads/politicas-maxims-3.png" alt="Third maxim icon" data-was-processed="true">
            </div>
            <div class="col-sm-6 col-md-4 col-12 d-flex flex-column justify-content-center">
              <h4><?php _e('Hiperconectividad:', 'siscovid'); ?></h4>
              <p><?php _e('Número elevado de contactos, pero los contactos son de corta duración y con muchas mas personas, usualmente desconocidos y no se repiten. Ejemplos: servicios de domicilio, transporte urbano y servicios de atención al cliente.', 'siscovid');?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="interventions-text col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <h3 class="title"><img class="icon" src="/wp-content/uploads/politicas-interventions-icon.png" alt="Interventions icon"><?php _e('¿Qué intervenciones existen y cuál es su efectividad?','siscovid')?></h3>
        <p class="interventions-p"><?php _e('Existen diversas medidas de salud pública diseñadas para reducir la exposición de las personas susceptibles a un agente infeccioso. La implementación de las medidas varía de acuerdo con las circunstancias epidemiológicas y sociales en el que se desarrolla la epidemia en cada País. La intensidad de aplicación de las medidas en salud pública sigue distintos objetivos desde contener, mitigar o suprimir la transmisión del virus.','siscovid')?></p>
        <div class="static-subelement objectives image-container fade-out slide-left-out d-flex justify-content-around flex-wrap">
          <img class="static-subelement fade-in zoom-in first-image" src="/wp-content/uploads/politicas-interventions-1.png" alt="<?php _e('Contain image', 'siscovid')?>">
          <img class="static-subelement fade-in zoom-in second-image" src="/wp-content/uploads/politicas-interventions-2.png" alt="<?php _e('Mitigate image', 'siscovid')?>">
          <img class="static-subelement fade-in zoom-in third-image" src="/wp-content/uploads/politicas-interventions-3.png" alt="<?php _e('Suppress image', 'siscovid')?>">
          <p class="image-description static-subelement fade-in"><?php _e('Objetivos de la aplicación de las medidas en salud pública','siscovid')?></p>
        </div>
        <div class="static-subelement graph px-xl-0 px-sm-5 px-0 fade-in slide-right-in image-container">
          <img class="image" src="/wp-content/uploads/politicas-interventions-graph.png" alt="<?php _e('Interventions Graph', 'siscovid')?>">
          <p class="image-description"><?php _e('<span class="source-text color-black">Adaptación fuente: CDC,</span> Curva epidémica hipotética que muestra el curso normal de una epidemia y el aplazamiento de la curva esperada al adoptar intervenciones','siscovid')?></p>
        </div>
      </div>
      
      <div class="inf-container col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <h4 class="title"><img class="icon" src="/wp-content/uploads/politicas-inf-icon.png" alt="INF icon"><?php _e('Intervenciones no farmacológicas (INF)','siscovid'); ?></h4>
        <p class="inf-introduction"><?php _e('Las INF tienen como objetivo disminuir la transmisión entre personas, ralentizar la propagación de la enfermedad y, en consecuencia, reducir y retrasar el pico de su aparición. Las INF tienen alcance individual, comunitario y ambiental.','siscovid');?></p>
        <div class="static-subelement inf-individual fade-out d-flex flex-md-nowrap flex-wrap">
          <div class="static-subelement text-container fade-in slide-left-in col-md-4 col-12 d-flex flex-column justify-content-center">
            <h5><?php _e('INF Individuales','siscovid')?></h5>
            <p><?php _e('Las medidas individuales incluyen higiene de manos, higiene respiratoria, uso de máscaras faciales (tapabocas) y distanciamiento físico. A su vez, el distanciamiento físico incluye el aislamiento de casos, la cuarentena de contactos y la práctica voluntaria de no frecuentar lugares donde se aglomeran personas (servicios no esenciales).','siscovid'); ?></p>
            <div class="p">
              <?php _e('Un estudio publicado en la revista Lancet (', 'siscovid');?>
              <div class="reference">
                <span><?php _e('16', 'siscovid');?></span>
                <div class="reference-container modal-container">
                  <div class="modal-overlay"></div>
                  <div class="modal-helper"></div>
                  <div class="modal-dialog arrow-down">
                    <?php _e('Chu DK, Akl EA, Duda S, Solo K, Yaacoub S, Schünemann HJ, et al. Physical distancing, face masks, and eye protection to prevent person-to-person transmission of SARS-CoV-2 and COVID-19: a systematic review and meta-analysis. Lancet. 2020;1973–87. Disponible en: <a href="https://doi.org/10.1016/S0140-6736(20)31142-9">https://doi.org/10.1016/S0140-6736(20)31142-9</a>', 'siscovid');?>
                  </div>
                </div>
              </div>
              <?php _e(') reporta que la posibilidad de transmisión del virus SARS-COV-2 es menor utilizando medidas como: ', 'siscovid');?>
            </div>
          </div>
          <div class="static-subelement image-container text-center fade-in slide-right-in col-md-8 col-12">
            <img src="/wp-content/uploads/politicas-inf-image1.png" alt="<?php _e('Individual Interventions','siscovid');?>">
          </div>
        </div>
        <div class="static-subelement inf-community px-md-5 px-xl-0 fade-in fade-out">
          <div class="top-container">
            <h5><?php _e('INF Communitarias','siscovid')?></h5>
            <p><?php _e('Las medidas comunitarias son acciones tomadas por autoridades (gerentes de empresas, secretarías de salud, líderes comunitarios, empleadores) para proteger a la población. Estas medidas buscan reducir el hipercontacto','siscovid'); ?></p>
            <h6 class="color-green"><?php _e('Tras analizar datos de 149 países (18) se evaluaron 5 intervenciones comunitarias','siscovid');?></h6>
            <img src="/wp-content/uploads/politicas-inf-image2.png" alt="<?php _e('Community Interventions','siscovid');?>">
          </div>
          <div class="static-subelement bottom-container fade-in d-flex flex-md-nowrap flex-wra">
            <div class="col-sm-8 col-12">
              <p><?php _e('Se evidenció que <strong>los países que implementaron las 5 intervenciones vieron una reducción del 13% en el número de casos nuevos en los siguientes 30 días</strong> de la implementación.','siscovid')?></p>
              <p><?php _e('Si ya se han implementado todas las medidas menos el cierre de transporte, no se evidencia una disminución importante en el número de casos nuevos de COVID-19.','siscovid')?></p>
            </div>
            <div class="static-subelement highlight pulse message col-sm-4 col-12">
              <p class="color-red text-center"><?php _e('¡Entre más rápido se implementen mayor impacto tendrán en la disminución de casos nuevos!','siscovid');?></p>
            </div>
          </div>
        </div>
        <div class="static-subelement inf-environment px-md-5 px-xl-0 fade-in">
          <div class="row image-row">
            <div class="static-subelement image-container fade-in slide-left-in col-12">
              <img src="/wp-content/uploads/politicas-inf-image3.jpg" alt="<?php _e('Outside restaurant image','siscovid');?>">
              <div><span class="source"><?php _e('Fuente de la imagen: ','siscovid');?><a href="http://www.freepik.com">upklyak / Freepik</a></span></div>
            </div>
          </div>
          <div class="row text-row">
            <div class="static-subelement text-container fade-in slide-right-in col-12 d-flex flex-column justify-content-center">
              <h5><?php _e('INF Ambientales','siscovid')?></h5>
              <p><?php _e('Las medidas ambientales hacen referencia a las acciones que se realizan que ayudan a eliminar el virus en lugares (ambientes interiores) y diversas superficies. Entre dichas acciones están mantener habitaciones bien ventiladas y expuestas al sol y limpieza rutinaria de superficies que, si están contaminadas, pueden contribuir a la propagación de virus (botones de ascensor, pasamanos, manijas de puertas y ventanas, botones, celulares, computadores, estaciones de trabajo).','siscovid'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="inf-effectiveness col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 static-element fade-in fade-out">
        <h3 class="title"><?php _e('INF : ¿Qué tan efectivo es el aislamiento, testeo y el rastreo de contactos para reducir la transmisión?','siscovid');?></h3> 
        <div class="image-div">
          <h4 class="static-subelement fade-in color-blue h2 animated-subtitle"><span class="subtitle"><?php _e('Infecciones COVID-19 secundarias por caso', 'siscovid'); ?></span></h4>
          <img class="image" src="/wp-content/uploads/politicas-effectiveness-base.png" alt="<?php _e('effectiveness', 'siscovid')?>">
        
          <div class="tasa-container left tasa-2-6">
            <div class="static-subelement value fade-in"><?php _e('2.6','siscovid');?></div>
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('Número promedio de casos secundarios sin intervenciones','siscovid');?></p>  
              <div class="arrow right"></div>
            </div>
          </div>

          <div class="tasa-container right tasa-2-5">
            <div class="static-subelement value fade-in"><?php _e('2.5','siscovid');?></div>
            <div class="static-subelement text fade-in slide-right-in">
              <div class="arrow left"></div>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-2.5.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <p><?php _e('Testeo masivo semanal del 5% de la población reducirá la transmisión en 2%','siscovid');?></p>
            </div>
          </div>

          <div class="tasa-container left tasa-disminucion">
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('Mayor reducción de la transmisión, menos casos','siscovid');?></p>  
            </div>
            <div class="static-subelement arrow right down fade-in"></div>
          </div>

          <div class="tasa-container left tasa-1-8">
            <div class="static-subelement value fade-in"><?php _e('1.8','siscovid');?></div>
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('Autoaislamiento en domicilio (de casos sintomáticos)','siscovid');?></p>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.8.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <div class="arrow right"></div>
            </div>
          </div>

          <div class="tasa-container right tasa-1-7">
            <div class="static-subelement value fade-in"><?php _e('1.7','siscovid');?></div>
            <div class="static-subelement text fade-in slide-right-in">
              <div class="arrow left"></div>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.7.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <p><?php _e('Autoaislamiento fuera del domicilio','siscovid');?></p>
            </div>
          </div>

          <div class="tasa-container left tasa-1-6">
            <div class="static-subelement value fade-in"><?php _e('1.6','siscovid');?></div>
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('Autoaislamiento y cuarentena del hogar','siscovid');?></p>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.6.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <div class="arrow right"></div>
            </div>
          </div>

          <div class="tasa-container left tasa-medidas">
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('Todas las medidas de abajo incluyen Autoaislamiento y cuarentena del hogar','siscovid');?></p>  
            </div>
          </div>

          <div class="tasa-container right tasa-1-4">
            <div class="static-subelement value fade-in"><?php _e('1.4','siscovid');?></div>
            <div class="static-subelement text fade-in slide-right-in">
              <div class="arrow left"></div>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.4.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <p><?php _e('+Rastreo basado en aplicaciones (apps)','siscovid');?></p>
            </div>
          </div>

          <div class="tasa-container left tasa-1-2">
            <div class="static-subelement value fade-in"><?php _e('1.2','siscovid');?></div>
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('+Rastreo en el trabajo/escuela','siscovid');?></p>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.2.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <div class="arrow right"></div>
            </div>
          </div>

          <div class="tasa-container right tasa-1-1">
            <div class="static-subelement value fade-in"><?php _e('1.1','siscovid');?></div>
            <div class="static-subelement text fade-in slide-right-in">
              <div class="arrow left"></div>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.1.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <p><?php _e('+Rastreo manual de conocidos','siscovid');?></p>
            </div>
          </div>

          <div class="tasa-container left tasa-1-0">
            <div class="static-subelement value fade-in"><?php _e('1.0','siscovid');?></div>
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('+Rastreo basado en apps</br>+Rastreo de conocidos','siscovid');?></p>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-1.0.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <div class="arrow right"></div>
            </div>
          </div>

          <div class="tasa-container right tasa-m0-9">
            <div class="static-subelement value fade-in"><?php _e('','siscovid');?></div>
            <div class="static-subelement text fade-in slide-right-in">
              <div class="arrow left"></div>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-0.9-2.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <p><?php _e('+Rastreo manual de todos los contactos','siscovid');?></p>
            </div>
          </div>

          <div class="tasa-container left tasa-0-9">
            <div class="static-subelement value fade-in"><?php _e('0.9','siscovid');?></div>
            <div class="static-subelement text fade-in slide-left-in">
              <p><?php _e('+Rastreo manual de conocidos</br>+Limitar a 4 contactos diarios adicionales','siscovid');?></p>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-0.9-1.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <div class="arrow right"></div>
            </div>
          </div>

          <div class="tasa-container right tasa-e0-9">
            <div class="static-subelement value fade-in"><?php _e('','siscovid');?></div>
            <div class="static-subelement text fade-in slide-right-in">
              <div class="arrow left"></div>
              <img class="icon" src="/wp-content/uploads/politicas-effectiveness-icon-0.9-3.png" alt="<?php _e('Icon for 2.5 rate','siscovid')?>">
              <p><?php _e('+Rastreo manual de conocidos</br>+limitar a 4 contactos diarios adicionales</br>+ Rastreo basado en aplicaciones (apps)','siscovid');?></p>
            </div>
          </div>

          <p class="static-subelement image-description fade-in"><?php _e('Adaptación de Infografía Lancet Infectious Diseases journal','siscovid');?>
        </div>
      </div>
      <div class="if-vaccines col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 static-element fade-in fade-out">    
        <div class="row vaccines-intro-row">
          <div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
            <h3 class="title"><?php _e('Intervenciones farmacológicas (IF)','siscovid');?></h3>
            <h4 class="text-center"><?php _e('Fases de las vacunas para COVID-19','siscovid');?></h4>
          </div>
        </div>
        <div class="static-subelement fade-in if-main-container d-flex">
          <div class="col-12 vaccines">
            
            <div class="row phase-row phase-preclinic-row static-subelement fade-in-slow slide-up-in-slow fade-out-slow slide-up-out-slow">
              <div class="vaccine-text col-sm-6 col-12 static-subelement fade-in-slow slide-left-in-slow fade-out-slow slide-left-out-slow d-flex align-items-center">
                <p><?php _e('En la <strong>fase preclínica</strong>, los investigadores prueban la vacuna en animales como ratones o monos para comprobar que produce una respuesta inmune.','siscovid'); ?></p>
              </div>
              <div class="vaccine-image col-sm-6 col-12 static-subelement fade-in-slow slide-right-in-slow fade-out-slow slide-right-out-slow text-center d-flex justify-content-center align-items-center">
                <img src="/wp-content/uploads/politicas-if-preclinica.png" alt="<?php _e('Vaccines Preclinic info','siscovid');?>">
              </div>
            </div>
            <div class="row phase-row phase-1-row static-subelement fade-in-slow slide-up-in-slow fade-out-slow slide-up-out-slow">
              <div class="vaccine-text col-sm-6 col-12 static-subelement fade-in-slow slide-left-in-slow fade-out-slow slide-left-out-slow d-flex align-items-center">
                <p><?php _e('En la <strong>fase I</strong> se le administra la vacuna a un número pequeño de personas, máximo 100, para probar qué tan segura es la vacuna (no mata, ni produce efectos serios en los humanos), determinar la dosis, confirmar que la respuesta inmune que se vio en los animales esté presente en los humanos también y probar distintas formas de aplicación (inyectada, tomada, etc).','siscovid'); ?></p>
              </div>
              <div class="vaccine-image col-sm-6 col-12 static-subelement fade-in-slow slide-right-in-slow fade-out-slow slide-right-out-slow text-center d-flex justify-content-center align-items-center">
                <img src="/wp-content/uploads/politicas-if-fase1.png" alt="<?php _e('Vaccines phase 1 info','siscovid');?>">
              </div>
            </div>
            <div class="row phase-row phase-2-row static-subelement fade-in-slow slide-up-in-slow fade-out-slow slide-up-out-slow">
              <div class="vaccine-text col-sm-6 col-12 static-subelement fade-in-slow slide-left-in-slow fade-out-slow slide-left-out-slow d-flex align-items-center">
                <p><?php _e('Las vacunas que son exitosas pasan a la <strong>fase II</strong>. En ella se aplica a un grupo de entre 200 y 500 personas y nuevamente se estudia su seguridad (cuáles son los efectos adversos a corto plazo), especialmente en adultos mayores y niños, también se sigue evaluando si la vacuna genera respuesta inmune.','siscovid'); ?></p>
              </div>
              <div class="vaccine-image col-sm-6 col-12 static-subelement fade-in-slow slide-right-in-slow fade-out-slow slide-right-out-slow text-center d-flex justify-content-center align-items-center">
                <img src="/wp-content/uploads/politicas-if-fase2.png" alt="<?php _e('Vaccines phase 2 info','siscovid');?>">
              </div>
            </div>
            <div class="row phase-row phase-3-row static-subelement fade-in-slow slide-up-in-slow fade-out-slow slide-up-out-slow">
              <div class="vaccine-text col-sm-6 col-12 static-subelement fade-in-slow slide-left-in-slow fade-out-slow slide-left-out-slow d-flex align-items-center">
                <p><?php _e('En la <strong>fase III</strong>, se le aplica la vacuna a un grupo más grande de personas (alrededor de mil) y ese grupo se divide en dos: unos reciben la vacuna y otros reciben una sustancia que no es la vacuna. El objetivo de esta fase es saber si hay diferencia entre la respuesta inmune de los que reciben la vacuna y los que no la recibieron (eficacia). Se continúa evaluando si la vacuna es segura y para ello se mira cuáles son los efectos adversos más comunes.','siscovid'); ?></p>
              </div>
              <div class="vaccine-image col-sm-6 col-12 static-subelement fade-in-slow slide-right-in-slow fade-out-slow slide-right-out-slow text-center d-flex justify-content-center align-items-center">
                <img src="/wp-content/uploads/politicas-if-fase3.png" alt="<?php _e('Vaccines phase 3 info','siscovid');?>">
              </div>
            </div>
            <div class="row phase-row phase-4-row static-subelement fade-in-slow slide-up-in-slow fade-out-slow slide-up-out-slow">
              <div class="vaccine-text col-sm-6 col-12 static-subelement fade-in-slow slide-left-in-slow fade-out-slow slide-left-out-slow d-flex align-items-center">
                <p><?php _e('Finalmente, las vacunas son aprobadas si cumplen con dos requisitos, que sea segura y eficaz y que los beneficios de su aplicación son mayores que los riesgos de administrarla. A pesar de que una vacuna sea aprobada, continúa en estudios de <strong>fase IV</strong> en los que se mira si la vacuna funciona en el mundo real (eficiencia) y se siguen monitoreando los efectos adversos.','siscovid'); ?></p>
              </div>
              <div class="vaccine-image col-sm-6 col-12 static-subelement fade-in-slow slide-right-in-slow fade-out-slow slide-right-out-slow text-center d-flex justify-content-center align-items-center">
                <img src="/wp-content/uploads/politicas-if-fase4.png" alt="<?php _e('Vaccines phase 4 info','siscovid');?>">
              </div>
            </div>

          </div>
        </div>
      </div>
      
      <div class="interventions-used col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 static-element fade-in fade-out text-center">
        <h3 class="title">
          <img class="icon" src="/wp-content/uploads/politicas-used-icon.png" alt="<?php _e('Applied interventions icon','siscovid');?>">
          <?php _e('¿Qué intervenciones han adoptado Barranquilla, Bogotá, Cartagena, Cali y Medellín para la contención, mitigación o supresión de la epidemia por COVID-19?','siscovid')?>
        </h3>
        <iframe class="results" src="https://fabiancpl.github.io/siscovid/daily-cases-viz/index.html" frameborder="0"></iframe>
        <div class="static-subelement fade-in description-container">
          <p class="image-description"><?php _e('<span class="source-text color-black">Fuente: SIVIGILA,</span> Casos nuevos y medidas nacionales y municipales de mitigación de la pandemia','siscovid')?></p>
        </div>
      </div>
      <div class="interventions-opinion col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="title">
              <img class="icon" src="/wp-content/uploads/politicas-opinions-icon.png" alt="<?php _e('Interventions Opinions Icon','siscovid')?>">
              <?php _e('¿Qué dice la gente en las ciudades?','siscovid')?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12 map-column">
            <iframe class="map static-subelement zoom-out-in fade-in map" src="https://fabiancpl.github.io/siscovid/colombia-map/index-surveys.html" frameborder="0"></iframe>
          </div>
          <div class="col-md-6 col-12 d-flex justify-content-center flex-column text-column">
            <p class="static-subelement fade-in opinions-p"><?php _e('Se recolectó información primaria a través de encuestas a población general distribuidas en las cinco ciudades. El propósito fue :','siscovid')?></p>
            <ul class="static-subelement fade-in opinions-ul">
              <li><?php _e('<strong>Apoyar el desarrollo y validación</strong> de los modelos de simulación','siscovid')?></li>
              <li><?php _e('Comprender <strong>las especificidades de las poblaciones más vulnerables</strong>','siscovid')?></li>
              <li><?php _e('ayudar al control y la prevención de riesgos epidemiológicos asociados al <span class="color-green">COVID-19</span>','siscovid')?></li>
            </ul>
            <p class="static-subelement fade-in opinions-p"><?php _e('En esta primera ronda se realizaron 4,200 encuestas entre el 29 de abril y el 6 de mayo: 1,000 en Bogotá y 800 en Medellín, Cali, Barranquilla y Cartagena respectivamente.','siscovid')?></p>
          </div>
        </div>
      </div>
      <div class="interventions-maxims col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="title">
              <img class="icon" src="/wp-content/uploads/politicas-maxims-icon.png" alt="<?php _e('Interventions Maxims Icon','siscovid');?>">
              <?php _e('¿Cómo dirigirse a las comunidades para lograr los mejores resultados?','siscovid');?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <img class="static-subelement section-image first-section fade-in" src="/wp-content/uploads/politicas-maxims-part1.png" alt="<?php _e('Maxims image first part','siscovid');?>">
            <img class="static-subelement section-image second-section fade-in slide-left-in" src="/wp-content/uploads/politicas-maxims-part2.png" alt="<?php _e('Maxims image second part','siscovid');?>">
            <img class="static-subelement section-image third-section fade-in slide-right-in" src="/wp-content/uploads/politicas-maxims-part3.png" alt="<?php _e('Maxims image third part','siscovid');?>">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="static-subelement fade-in description-container">
              <div class="image-description p">
                <?php _e('<span class="source-text color-black">Fuente: Infografía adaptada de Bonell et al. (', 'siscovid');?>
                <div class="reference">
                  <span><?php _e('22', 'siscovid');?></span>
                  <div class="reference-container modal-container">
                    <div class="modal-overlay"></div>
                    <div class="modal-helper"></div>
                    <div class="modal-dialog arrow-down">
                      <?php _e('NO ESTA FUNCIONANDO EL LINK Bonell C et al. Harnessing behavioural science in public health campaigns to maintain ‘social distancing’ in response to the COVID-19 pandemic: key principles Journal Epidemiol Community Health, 2020. Disponible en: <a href="http://dx.doi.org/10.1136/jech-2020-214290" target="_blank">http://dx.doi.org/10.1136/jech-2020-214290</a>.', 'siscovid');?>
                    </div>
                  </div>
                </div>
                <?php _e('),</span> Infografía de principios claves para dirigirse a las comunidades', 'siscovid');?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="models-intro col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="title"><img class="icon" src="/wp-content/uploads/politicas-model-intro-icon.png" alt="<?php _e('Interventions Opinions Icon','siscovid');?>"><?php _e('¿Qué dicen nuestros modelos de simulación?','siscovid')?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-12 d-flex justify-content-center flex-column text-column">
            <p class="static-subelement fade-in"><?php _e('El proyecto SISCOVID formuló dos modelos matemáticos: un modelo metapoblacional y un modelo basado en agentes. Estos modelos permiten simular escenarios con diferentes intervenciones en las ciudades y predecir cómo se comportan en cada una:','siscovid')?></p>
            <ul class="static-subelement fade-in">
              <li><?php _e('Los contagios por SARS-COV2.','siscovid')?></li>
              <li><?php _e('El número de hospitalizados en camas de baja complejidad.','siscovid')?></li>
              <li><?php _e('El número de hospitalizados en Unidades de cuidado intensivo.','siscovid')?></li>
              <li><?php _e('El número de muertes, entre otras.','siscovid')?></li>
            </ul>
          </div>
          <div class="col-sm-6 col-12 image-column text-center">
            <img class="static-subelement fade-in model-image" src="/wp-content/uploads/home-modelos-poblacional.png" alt="<?php _e('Metapopulation model image', 'siscovid')?>">
            <img class="static-subelement fade-in model-image" src="/wp-content/uploads/home-modelos-agentes.png" alt="<?php _e('Agents model image', 'siscovid')?>">
            <div class="static-subelement fade-in description-container">
              <p class="image-description"><?php _e('Modelos de simulación','siscovid')?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="model-population col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="background-title d-flex aling-items-start justify-content-end text-center">
              <div class="icon-container"><img class="icon" src="/wp-content/uploads/politicas-model-population-icon.png" alt="<?php _e('Metapopulation model Icon','siscovid');?>"></div>
              <div class="static-subelement text-container title1 fade-in fade-out"><?php _e('Modelamiento Metapoblacional','siscovid')?></div>
              <div class="static-subelement text-container title2 title-extra fade-in fade-out"><?php _e('Resultados del modelo','siscovid')?></div>
              <div class="static-subelement text-container title3 title-extra fade-in fade-out"><?php _e('Resultados del modelo 2','siscovid')?></div>
            </h3>
          </div>
        </div>
        <div class="static-subelement fade-in fade-out model-description text-center">
          <div class="row">
            <div class="col-md-6 col-12 image-column">
              <img class="static-subelement fade-in model-image" src="/wp-content/uploads/politicas-model-population-model.png" alt="<?php _e('Metapopulation model image extended', 'siscovid')?>">
              <div class="static-subelement fade-in description-container">
                <p class="image-description"><?php _e('Esquema general del modelo metapoblacional','siscovid')?></p>
              </div>
            </div>
            <div class="col-md-6 col-12 text-column d-flex flex-column justify-content-center">
              <p class="static-subelement fade-in"><?php _e('Nuestro modelo considera los cambios entre los diferentes grupos de individuos representados en la Figura. El objetivo del modelo es <strong>relacionar el crecimiento de la epidemia con las dinámicas</strong> de cada ciudad a través de las tendencias de las tasas de contagio y de movilidad.','siscovid')?></p>
              <p class="static-subelement fade-in"><?php _e('Para estimar las tasas de contagio en diferentes momentos de la epidemia, el modelo es <strong>ajustado a los datos diarios de mortalidad acumulada</strong> de cada ciudad usando una metodología denominada Markov Chain Monte Carlo – Metropolis Hastings (MCMC-MH).','siscovid')?></p>
            </div>
          </div>
        </div>
        <div class="static-subelement fade-in fade-out slide-left-out model-results1 px-md-5 px-xl-0 text-center">
          <div class="row text-row">
            <div class="col-12">
              <p><?php _e('La tendencia general de las ciudades respecto a las tasas de contagio es de mantenerse por debajo del valor inicial, previo a medidas de aislamiento, <strong>respaldando así la pertinencia de estas intervenciones como estrategias de mitigación</strong>. Conforme la movilidad ha incrementado ver figura, debido a la disminución de restricciones y reapertura económica, las tasas de contagio presentan un aumento inicial ver siguiente figura. Sin embargo, tienden a estabilizarse, posiblemente por el uso de tapabocas, el distanciamiento físico y el lavado de manos, que los individuos han adoptado para desplazarse; así como por intervenciones implementadas en distintas ciudades como toques de queda, aplicación de pico y cédula, manejo de zonas de cuidado especial, prohibición de venta de bebidas alcohólicas, control de aglomeraciones en sectores comerciales y restricción de transporte intermunicipal.','siscovid')?></p>
            </div>
          </div>
          <div class="row image-row">
            <div class="col-12">
              <img class="static-subelement fade-in model-image" src="/wp-content/uploads/politicas-model-population-results1.png" alt="<?php _e('Metapopulation model results first graph', 'siscovid')?>">
              <div class="static-subelement fade-in description-container">
                <p class="image-description"><?php _e('Porcentaje de movilidad en Barranquilla, Bogotá, Cartagena, Cali y Medellín, 2020','siscovid')?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="static-subelement fade-in slide-right-in model-results2 px-md-5 px-xl-0 text-center">
          <div class="row image-row">
            <div class="col-12">
              <img class="model-image" src="/wp-content/uploads/politicas-model-population-results2.png" alt="<?php _e('Metapopulation model results first graph', 'siscovid')?>">
              <div class="static-subelement fade-in description-container">
                <p class="image-description"><?php _e('Tasas de contacto entre susceptibles e infectados en las principales ciudades. La línea continua describe la tendencia polinómica de los betas estimados','siscovid')?></p>
              </div>
            </div>
          </div>
          <div class="row text-row">
            <div class="col-12">
              <p class="static-subelement fade-in "><?php _e('Por esta razón, fortalecer estos comportamientos de cuidado y prevención, al igual que las restricciones de aglomeraciones, <strong>podrían ser estrategias con mayor efecto en la contención de los contagios que las restricciones en la movilidad misma</strong>. Esto tendría un impacto beneficioso en las actividades económicas de las ciudades y permitiría priorizar nuevas intervenciones con un enfoque más localizado respecto a zonas de alto contagio y sitios de trabajo con necesidades específicas en sus protocolos de funcionamiento, así como dentro de las zonas residenciales.','siscovid')?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="model-agent col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element">
        <div class="row">
          <div class="col-12">
            <h3 class="background-title d-flex aling-items-start justify-content-end text-center">
              <div class="icon-container"><img class="icon" src="/wp-content/uploads/politicas-model-agent-icon.png" alt="<?php _e('Agent model Icon','siscovid');?>"></div>
              <div class="static-subelement text-container title1 fade-in fade-out"><?php _e('Modelamiento basado en agentes','siscovid')?></div>
              <div class="static-subelement text-container title2 title-extra fade-in fade-out"><?php _e('Resultados del modelo','siscovid')?></div>
            </h3>
          </div>
        </div>
        <div class="static-subelement fade-in fade-out model-description text-center">
          <div class="row text-row">
            <div class="col-12">
              <p class="static-subelement fade-in"><?php _e('Los modelos de agentes (MBA) permiten recrear sistemas donde es de interés comprender las dinámicas individuales de las personas (Figura "Atributos del individuo") y su interacción con otros agentes y su entorno (Figura "Dinámica de movimiento de los individuos").','siscovid')?></p>
            </div>
          </div>
          <div class="row agent-characteristics static-subelement fade-in">
            <div class="col-12">
              <h4 class="color-green"><?php _e('¿Cómo se caracterizan nuestros agentes?','siscovid');?></h4>
              <div class="agent-grouped static-subelement fade-in fade-out slide-left-out d-flex flex-column align-items-center justify-content-center">
                <div class="row agent-individual-row">
                  <div class="col-12">
                    <img class="model-image" src="/wp-content/uploads/politicas-model-agent-image1.png" alt="<?php _e('Agent model agents attributes image', 'siscovid')?>">
                    <div class="static-subelement fade-in description-container">
                      <p class="image-description"><?php _e('Atributos del individuo','siscovid')?></p>
                    </div>
                  </div>
                </div>
                <div class="row agent-states-row static-subelement fade-in">
                  <div class="col-sm-6 col-12">
                    <p><?php _e('Cuando un agente infectado se encuentra con un <span class="color-green">susceptible</span> hay una probabilidad de que se infecte. Este agente infectado puede presentar <span class="color-orange">síntomas o se asintomático</span>. Después de unos días, el agente infectado puede empeorar y podría requerir <span class="color-green-dark">hospitalización</span> o <span class="color-red">cuidado crítico</span>. Si el agente sobrevive se recupera del virus.','siscovid');?></p>
                  </div>
                  <div class="col-sm-6 col-12">
                    <img class="model-image" src="/wp-content/uploads/politicas-model-agent-image3.png" alt="<?php _e('Agent model agents attributes image', 'siscovid')?>">
                  </div>
                </div>
              </div>
              <div class="agent-movement static-subelement fade-in slide-right-in fade-out slide-left-out d-flex flex-column align-items-center justify-content-center">
                <img class="model-image" src="/wp-content/uploads/politicas-model-agent-image2.png" alt="<?php _e('Agent model agents attributes image', 'siscovid')?>">
                <div class="static-subelement fade-in description-container">
                  <p class="image-description"><?php _e('Dinámica de movimiento de los individuos','siscovid')?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="static-subelement fade-in model-results px-xl-0 px-md-5 px-0">
          <div class="row text-row">
            <div class="col-12">
              <p><?php _e('Las cuarentenas estrictas por localidad/comuna ha sido una estrategia que han tomado algunas de las ciudades para mitigar la propagación del SARS-COV-2.','siscovid')?></p>
              <p><?php _e('Para analizar el impacto de la estrategia en la evolución de la pandemia en cada ciudad, se planteó un escenario base (sin intervenciones) y un escenario de cada ciudad intervenida. La intervención para Bogotá representa hacer los cierres propuestos por la alcaldía mayor*. La intervención en Barranquilla y Cartagena son <strong>cierres automáticos proyectados</strong> en función de dos indicadores evaluados por comuna: el número de infectados per cápita y el número de muertos / infectados totales. Los cierres automáticos se activan cuando una localidad/comuna se encuentra por encima del promedio de la ciudad en los dos indicadores propuestos.','siscovid')?></p>
            </div>
          </div>
          <div class="row image-row">
            <div class="col-12">
              <div class="static-subelement fade-in fade-out slide-left-out image-container bogota text-center">
                <img class="result-image bogota" src="/wp-content/uploads/politicas-model-agent-results1.png" alt="<?php _e('Agent model mortality rate for Bogotá graph', 'siscovid')?>">
                <img class="legend-image bogota" src="/wp-content/uploads/politicas-model-agent-results-legend.png" alt="<?php _e('Agent model mortality rate legend', 'siscovid')?>">
              </div>
              <div class="static-subelement fade-in slide-right-in fade-out slide-left-out image-container barranquilla text-center">
                <img class="result-image" src="/wp-content/uploads/politicas-model-agent-results2.png" alt="<?php _e('Agent model mortality rate for Barranquilla graph', 'siscovid')?>">
                <img class="legend-image bogota" src="/wp-content/uploads/politicas-model-agent-results-legend.png" alt="<?php _e('Agent model mortality rate legend', 'siscovid')?>">
              </div>
              <div class="static-subelement fade-in slide-right-in image-container cartagena text-center">
                <img class="result-image" src="/wp-content/uploads/politicas-model-agent-results3.png" alt="<?php _e('Agent model mortality rate for Cartagena graph', 'siscovid')?>">
                <img class="legend-image bogota" src="/wp-content/uploads/politicas-model-agent-results-legend.png" alt="<?php _e('Agent model mortality rate legend', 'siscovid')?>">
              </div>
              <div class="static-subelement fade-in description-container">
                <p class="image-description"><?php _e('Tasa de mortalidad** (muertes por 100.000 habitantes)','siscovid')?></p>
              </div>
            </div>
          </div>
          <div class="row text-row bottom-row static-subelement fade-in">
            <div class="col-12">
              <p><?php _e('Los resultados del modelo de simulación muestran que el comportamiento de la propagación de la epidemia varía entre las ciudades analizadas. Se observa que el comportamiento la tasa de mortalidad varía entre ciudades, ver figura.','siscovid')?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="closing-text col-xl-8 col-xl1-10 col-sm-12 col-12 px-xl-0 px-5 fade-in fade-out static-element last-element">
        <div class="row">
          <div class="col-12">
            <h3 class="title">
              <img class="icon" src="/wp-content/uploads/politicas-closing-icon.png" alt="<?php _e('Closing icon','siscovid');?>">
              <?php _e('Conclusión','siscovid')?>
            </h3>
          </div>
        </div>
        <div class="row text-row">
          <div class="col-12">
            <p class="static-subelement fade-in"><?php _e('Usando la metáfora del fuego, en este documento hemos buscado establecer los caminos más eficaces para alejar la llama del combustible y de esta forma evitar escenarios más desoladores.','siscovid')?></p>
            <p class="static-subelement fade-in"><?php _e('Está en las manos de nuestros líderes y tomadores de decisión canalizar el deseo colectivo de pasar esta página, desarrollar un conocimiento general, hacer visibles las responsabilidades individuales, de las familias, y las comunidades y propagar una cultura de cuidado mutuo.','siscovid')?></p>
          </div>
        </div>
        <div class="row image-row text-center">
          <div class="col-12">
            <img class="static-subelement fade-in site-logo" src="/wp-content/uploads/logo-social.png" alt="<?php _e('Siscovid logo','siscovid');?>">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>