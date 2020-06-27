<div id="project">
  <div class="container-fluid">
    <div class="row title-row d-flex align-items-center" style="display: none !important">
      <div class="col-lg-4 col-sm-5 col-12 offset-lg-1 px-lg-5 name-column">
        <h2><?php _e('Sistema de Inteligencia Epidemiológica del <span class="color-green">COVID-19</span>','siscovid')?></h2>
      </div>
      <div class="col-lg-6 col-sm-7 col-12 pr-lg-0 description-column">
        <h3 class="pt-4 pt-sm-0">
          <strong>
            <?php _e('<span class="color-blue">SIS</span><span class="color-green">COVID</span> <span class="color-blue">busca proveer una herramienta a los tomadores de decisión con información actualizada que permita evaluar escenarios de mitigación y control de la epidemia del</span> <span class="color-blue">COVID-19.</span>')?>
          </strong><br/>
          <?php _e('Esta web es una herramienta para los tomadores de decisión que provee información actualizada con el fin de contribuir a evaluar escenarios de mitigación y control de la epidemia del <span class="color-green">COVID-19</span>.')?>
        </h3>
      </div>
    </div>
    <div class="row filter-row hidden">
      <div class="col-12 col-lg-8 col-sm-10 offset-lg-2 offset-sm-1 filter-container">
        <div class="tabs-container tabs-5">
          <button class= "tab" data-city="barranquilla">Barranquilla</button>
          <button class= "tab active" data-city="bogota">Bogotá</button>
          <button class= "tab" data-city="cali">Cali</button>
          <button class= "tab" data-city="cartagena">Cartagena</button>
          <button class= "tab" data-city="medellin">Medellín</button>
        </div>
      </div>
    </div>
    <div class="row model-row hidden">
      <div class="col-12 col-xl-10 offset-xl-1 p-xl-0 p-lg-5 model-container">
        <div class="model barranquilla hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiMWNmMTYzYTMtZWY4Yi00MDdkLWFiMzctMGY5ZWQ5MzJmYmIwIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9&pageName=ReportSection"
            src
            frameborder="0"></iframe>
        </div>
        <div class="model bogota active">
          <iframe 
            src="https://app.powerbi.com/view?r=eyJrIjoiMWNmMTYzYTMtZWY4Yi00MDdkLWFiMzctMGY5ZWQ5MzJmYmIwIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9&pageName=ReportSection23b1c72172eb8a048d31"
            frameborder="0"></iframe>
        </div>
        <div class="model cali hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiMWNmMTYzYTMtZWY4Yi00MDdkLWFiMzctMGY5ZWQ5MzJmYmIwIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9&pageName=ReportSection65264f65514030cc48e0" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model cartagena hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiMWNmMTYzYTMtZWY4Yi00MDdkLWFiMzctMGY5ZWQ5MzJmYmIwIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9&pageName=ReportSectionea2653228035ea5c955a" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model medellin hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiMWNmMTYzYTMtZWY4Yi00MDdkLWFiMzctMGY5ZWQ5MzJmYmIwIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9&pageName=ReportSectionbd834c60d0902baec757" 
            src
            frameborder="0"></iframe>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-center impacto-row">
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-xl-1 offset-md-0 offset-sm-1 p-md-5 text-container">
        <!-- <div class="row title-row">
          <div class="col-10 offset-1"> -->
            <h2><?php _e('Sistema de Inteligencia Epidemiológica del <span class="color-green">COVID-19</span>','siscovid')?></h2>
            <h4 class="color-blue h2"><span class="subtitle"><?php _e('Impacto del proyecto', 'siscovid'); ?></span></h4>
          <!-- </div>
        </div> -->
        <p><?php _e('Brindar una herramienta a los tomadores de decisiones con información actualizada recolectada durante la epidemia que permita evaluar escenarios que nos ayuden a tomar decisiones inteligentes sobre el aislamiento y la distancia social.', 'siscovid'); ?></p>
        <p><?php _e('Determinar cómo podemos proteger a nuestra sociedad mientras mantenemos un equilibrio económico en las ciudades, sin enfrentar el dilema de salud o economía, sino entendiendo que ambas dimensiones van de la mano.', 'siscovid'); ?><p>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-md-0 offset-sm-1 pt-sm-4 banner-container" id="vega-map" >
        <iframe id="map-iframe" src="https://fabiancpl.github.io/siscovid/colombia-map/index.html" frameborder="0"></iframe>
      </div>
    </div>
    <div class="row d-flex align-items-center encuestas-row background-light">
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 p-md-5 text-container">
        <h2><?php _e('Encuesta Telefónica', 'siscovid'); ?></span></h2>
        <h4 class="color-blue h2"><span class="subtitle"><?php _e('Recolección de información', 'siscovid'); ?></span></h4>
        <p><?php _e('Realización de llamadas a hogares en Bogotá, Medellín, Cali, Barranquilla y Cartagena, preguntando sobre sus rutinas de transporte, sus necesidades económicas, las presiones para salir de casa y sus estados salud.', 'siscovid'); ?></p>
        <p><?php _e('El plan para las encuestas es:', 'siscovid'); ?></p>
        <ul class="marker-globe">
          <li><?php _e('800 - 1000 Encuestas X Ciudad.', 'siscovid'); ?></li>
          <li><?php _e('3 momentos diferentes.', 'siscovid'); ?></li>
          <li><?php _e('Total 12.600 Encuestas.', 'siscovid'); ?></li>
        </ul>
        <a class="button" href="/reporte"><? _e('Reporte de encuestas','siscovid');?></a>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-xl-1 pt-sm-4 banner-container">
        <img src="/wp-content/uploads/home-encuestas-image.png" alt="<?php _e('Imagen para las encuestas', 'siscovid')?>">
      </div>
    </div>
    <div class="row d-flex align-items-center resultados-row">
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-xl-1 offset-md-0 offset-sm-1 p-md-5 text-container">
        <h2><?php _e('Modelos de simulación', 'siscovid'); ?></span></h2>
        <h4 class="color-blue h2"><span class="subtitle"><?php _e('Aplicación de la información recolectada', 'siscovid'); ?></span></h4>
        <p><?php _e('Formulación de dos modelos matemáticos: un <span class="color-blue">modelo metapoblacional</span> y un <span class="color-blue">modelo basado en agentes</span>. Estos modelos nos permiten simular escenarios con diferentes intervenciones en las ciudades y predecir el comportamiento de variables como:', 'siscovid'); ?></p>
        <p><?php _e('Para predecir cómo se comportan:', 'siscovid'); ?></p>
        <ul class="marker-globe">
          <li><?php _e('Los contagios por SARS-COV2.', 'siscovid'); ?></li>
          <li><?php _e('El número de hospitalizados en camas de baja complejidad.', 'siscovid'); ?></li>
          <li><?php _e('El número de hospitalizados en UCI.', 'siscovid'); ?></li>
          <li><?php _e('El número de muertes.', 'siscovid'); ?></li>
        </ul>
        <a class="button methodology" href="/metodologia"><?php _e('Metodología','siscovid');?></a>
        <a class="button results" href="/simulacion"><?php _e('Resultados','siscovid');?></a>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-md-0 offset-sm-1 pt-sm-4 banner-container">
        <div class="images-container">
          <div class="model agentes-container">
            <img src="/wp-content/uploads/home-modelos-agentes.png" alt="<?php _e('Imagen modelo agentes', 'siscovid')?>">
          </div>
          <div class="model poblacional-container up">
            <img src="/wp-content/uploads/home-modelos-poblacional.png" alt="<?php _e('Imagen model metapoblacional', 'siscovid')?>">
          </div>
        </div>
      </div>
      <!-- <p><?php _e('Este sitio web es un recurso para ayudar al control y la prevención de riesgos epidemiológicos asociados al Coronavirus, teniendo en cuenta particularidades de las poblaciones más vulnerables, mediante la evaluación de escenarios que ayuden a mitigar el impacto de la Pandemia en Bogotá, Medellín, Cali, Cartagena y Barranquilla, y que fruto de esta evaluación sirva para dar lineamientos a otras ciudades del país.', 'siscovid'); ?></p> -->
    </div>
  </div>
</div>