<div id="project">
  <div class="container-fluid">
    <div class="row title-row d-flex align-items-center">
      <div class="col-lg-4 col-sm-5 col-12 offset-lg-1 px-lg-5 name-column">
        <h2><?php _e('Sistema de Inteligencia Epidemiológica del <span class="color-green">COVID-19</span>','siscovid')?></h2>
      </div>
      <div class="col-lg-6 col-sm-7 col-12 pr-lg-0 description-column">
        <h3 class="pt-4 pt-sm-0">
          <strong>
            <?php _e('<span class="color-blue">A través de esta web, SIS<span class="color-green">COVID</span> busca proveer una herramienta a los tomadores de decisión con información actualizada que permita evaluar escenarios de mitigación y control de la epidemia del COVID-19.</span>','siscovid')?>
          </strong>
        </h3>
      </div>
    </div>
    <div class="row page-intro">
      <div class="col-12 col-sm-10 offset-sm-1 col-xl-8 offset-xl-2 col-xl1-8 offset-xl1-2 px-xl-3 px-3 px-lg-5 p-xl-0 text-container">
        <h2><?php _e('Reporte actual de casos','siscovid')?></h2>
        <h4 class="color-blue h2"><span class="subtitle"><?php _e('Consulte en este tablero interactivo el reporte actualizado de casos por ciudad','siscovid')?></h4>
      </div>
    </div>
    <div class="row filter-row">
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
    <div class="row model-row">
      <div class="col-12 col-xl-10 offset-xl-1 p-0 model-container">
        <div class="model barranquilla no-complement hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiZWM0MjkyYzItM2QzYS00Zjk3LWIwMzQtMmRkOGE2MTAzOTNhIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9"
            src
            frameborder="0"></iframe>
            <!-- <iframe 
            class="github-complement"
            data-src="https://fabiancpl.github.io/siscovid/meta-viz/index.html?city=barranquilla"
            src
            frameborder="0"></iframe> -->
        </div>
        <div class="model bogota no-complement active">
          <iframe 
            src="https://app.powerbi.com/view?r=eyJrIjoiYTQzMzE4ODUtZjlhMy00YWRmLWJhZjEtZjkxOTcyY2RjNTU3IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9"
            frameborder="0"></iframe>
            <!-- <iframe 
            class="github-complement"
            src="https://fabiancpl.github.io/siscovid/meta-viz/index.html?city=bogota"
            frameborder="0"></iframe> -->
        </div>
        <div class="model cali no-complement hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiZThjNjY4YTUtZjJjOS00YWVkLWFiNTEtOTI1MTNmMDk1NWM2IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
            <!-- <iframe 
            class="github-complement"
            data-src="https://fabiancpl.github.io/siscovid/meta-viz/index.html?city=cali"
            src
            frameborder="0"></iframe> -->
        </div>
        <div class="model cartagena no-complement hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNzdkYmM0ZWUtY2Q1NS00M2ViLWEzYTAtZDVlNThjNjFiYTFiIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model medellin no-complement hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNWUwZTY4NGUtMjNhMC00Mzg4LTg0MzUtODcwN2QxYTMzYjAxIiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
      </div>
    </div>
    <!-- <div class="row d-flex align-items-center impacto-row">
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-xl-1 offset-md-0 offset-sm-1 p-md-5 text-container">
        <h2><?php _e('Sistema de Inteligencia Epidemiológica del <span class="color-green">COVID-19</span>','siscovid')?></h2>
        <h4 class="color-blue h2"><span class="subtitle"><?php _e('Impacto del proyecto', 'siscovid'); ?></span></h4>
        <p><?php _e('Brindar una herramienta a los tomadores de decisiones con información actualizada recolectada durante la epidemia que permita evaluar escenarios que nos ayuden a tomar decisiones inteligentes sobre el aislamiento y la distancia social.', 'siscovid'); ?></p>
        <p><?php _e('Determinar cómo podemos proteger a nuestra sociedad mientras mantenemos un equilibrio económico en las ciudades, sin enfrentar el dilema de salud o economía, sino entendiendo que ambas dimensiones van de la mano.', 'siscovid'); ?><p>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-12 offset-md-0 offset-sm-1 pt-sm-4 banner-container" id="vega-map" >
        <iframe id="map-iframe" src="https://fabiancpl.github.io/siscovid/colombia-map/index.html" frameborder="0"></iframe>
      </div>
    </div> -->
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
        <a class="button" href="/reportes-encuestas"><? _e('Reporte encuestas','siscovid');?></a>
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
        <a class="button methodology" href="/informacion-detallada"><?php _e('Información detallada','siscovid');?></a>
        <a class="button results" href="/evaluacion-escenarios"><?php _e('Evaluación escenarios','siscovid');?></a>
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