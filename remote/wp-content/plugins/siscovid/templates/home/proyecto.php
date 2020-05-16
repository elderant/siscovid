<div id="project">
  <div class="container-fluid">
    <div class="row d-flex align-items-center impacto-row">
      <div class="col-5 offset-1 p-5 text-container">
        <!-- <div class="row title-row">
          <div class="col-10 offset-1"> -->
            <h2><?php _e('Sistema de Inteligencia Epidemiológica del <span class="color-?">COVID-19</span>','siscovid')?></h2>
            <h4 class="color-blue h2"><span class="subtitle"><?php _e('Impacto del proyecto', 'siscovid'); ?></span></h4>
          <!-- </div>
        </div> -->
        <p><?php _e('Queremos (se quire, se busca?) brindar una herramienta a los tomadores de decisiones con información actualizada recolectada durante la epidemia que permita evaluar escenarios que nos ayuden a tomar decisiones inteligentes sobre el aislamiento y la distancia social.', 'siscovid'); ?></p>
        <p><?php _e('Para determinar cómo podemos proteger a nuestra sociedad mientras mantenemos un equilibrio económico en las ciudades. Sin enfrentar el dilema de salud o economía, sino entendiendo que ambas dimensiones van de la mano.', 'siscovid'); ?><p>
      </div>
      <div id="vega-map" class="col-5 banner-container">
        <!-- <iframe id="map-iframe" src="/wp-content/plugins/siscovid/other/visualizacionvf.html" frameborder="0"></iframe> -->
      </div>
      <!-- <script>
         vegaEmbed(
           '#vega-map',
           'https://vega.github.io/vega/examples/bar-chart.vg.json'
         );
      </script> -->
    </div>
    <div class="row d-flex align-items-center encuestas-row background-light">
      <div class="col-5 offset-1 p-5 text-container">
        <h2><?php _e('Encuesta de habitos', 'siscovid'); ?></span></h2>
        <h4 class="color-blue h2"><span class="subtitle"><?php _e('¿De donde obtenemos la (nuestra?) informacion?', 'siscovid'); ?></span></h4>
        <p><?php _e('Llamaremos a las casas de las personas en Bogotá, Medellín, Cali, Barranquilla y Cartagena. Les preguntaremos sobre sus rutinas de transporte, sus necesidades económicas, las presiones para salir de la casa.', 'siscovid'); ?></p>
        <p><?php _e('El plan para las encuestas es:', 'siscovid'); ?></p>
        <ul class="marker-globe">
          <li><?php _e('800 - 1000 Encuestas X Ciudad.', 'siscovid'); ?></li>
          <li><?php _e('3 momentos diferentes.', 'siscovid'); ?></li>
          <li><?php _e('Total 12.600 Encuestas.', 'siscovid'); ?></li>
        </ul>
        <a class="button" href="/reporte"><? _e('Encuestas','siscovid');?></a>
      </div>
      <div class="col-5 banner-container">
        <img src="/wp-content/uploads/home-encuestas-image.png" alt="<?php _e('Banner temporal', 'siscovid')?>">
      </div>
    </div>
    <div class="row d-flex align-items-center resultados-row">
      <div class="col-5 offset-1 p-5 text-container">
        <h2><?php _e('Modelos de contagio', 'siscovid'); ?></span></h2>
        <h4 class="color-blue h2"><span class="subtitle"><?php _e('¿Como usaremos nuestra(su, la?) información?', 'siscovid'); ?></span></h4>
        <p><?php _e('Crearemos modelos matemáticos, un <span class="color-blue">modelo metapoblacional</span> y un <span class="color-blue">modelo basado en agentes.</span> Estos modelos nos permiten simular escenarios, en este caso tipos de cuarentena.', 'siscovid'); ?></p>
        <p><?php _e('Para predecir cómo se comportan:', 'siscovid'); ?></p>
        <ul class="marker-globe">
          <li><?php _e('Las infecciones por SARS-COV2.', 'siscovid'); ?></li>
          <li><?php _e('El número de hospitalizados en camas de baja complejidad.', 'siscovid'); ?></li>
          <li><?php _e('Número de hospitalizados en UCI.', 'siscovid'); ?></li>
          <li><?php _e('El número de muertes.', 'siscovid'); ?></li>
        </ul>
        <a class="button methodology" href="/metodologia"><?php _e('Metodología','siscovid');?></a>
        <a class="button results" href="/simulacion"><?php _e('Resultados','siscovid');?></a>
      </div>
      <div class="col-5 banner-container">
        <img src="/wp-content/uploads/survey-image-2.png" alt="<?php _e('Banner temporal', 'siscovid')?>">
      </div>
      <!-- <p><?php _e('Este sitio web es un recurso para ayudar al control y la prevención de riesgos epidemiológicos asociados al Coronavirus, teniendo en cuenta particularidades de las poblaciones más vulnerables, mediante la evaluación de escenarios que ayuden a mitigar el impacto de la Pandemia en Bogotá, Medellín, Cali, Cartagena y Barranquilla, y que fruto de esta evaluación sirva para dar lineamientos a otras ciudades del país.', 'siscovid'); ?></p> -->
    </div>
  </div>
</div>