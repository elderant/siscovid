<div id="simulation">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <h2><?php _e('Evaluación escenarios','siscovid')?></h2>
      </div>
    </div>
    <div class="row page-intro">
      <div class="col-12 col-sm-10 offset-sm-1 col-xl-4 offset-xl-4 col-xl1-6 offset-xl1-3 p-xl-3 p-3 p-lg-5 p-xl-0 text-container">
        <p><?php _e('La siguiente herramienta permite evaluar diferentes escenarios de intervención para el control y mitigación del <span class="color-green">COVID-19</span> por ciudad, localidades y grupos de edad.','siscovid')?></p>
      </div>
    </div>
    <div class="row filter-row">
      <div class="col-12 col-lg-8 col-sm-10 offset-lg-2 offset-sm-1 filter-container">
        <div class="tabs-container tabs-3">
          <button class= "tab" data-city="barranquilla">Barranquilla</button>
          <button class= "tab active" data-city="bogota">Bogotá</button>
          <button class= "tab" data-city="cartagena">Cartagena</button>
        </div>
      </div>
    </div>
    <div class="row model-row vertical">
      <div class="col-12 col-xl-10 offset-xl-1 p-0 model-container">
        <div class="model barranquilla hidden">
          <iframe 
            data-src="https://fabiancpl.github.io/siscovid/agents-viz/index.html?city=barranquilla"
            src
            frameborder="0"></iframe>
        </div>
        <div class="model bogota active">
          <iframe 
            src="https://fabiancpl.github.io/siscovid/agents-viz/index.html?city=bogota"
            frameborder="0"></iframe>
        </div>
        <div class="model cartagena hidden">
          <iframe 
            data-src="https://fabiancpl.github.io/siscovid/agents-viz/index.html?city=cartagena" 
            src
            frameborder="0"></iframe>
        </div>
      </div>
    </div>
    <div class="row page-outro">
      <div class="col-12 col-sm-10 offset-sm-1 col-xl-4 offset-xl-4 p-xl-3 col-xl1-6 offset-xl1-3 p-3 p-lg-5 p-xl-0 text-container">
        <p><?php _e('El modelo implementado tiene como propósito evaluar  escenarios a partir de la dinámica de contagio y no busca pronosticar resultados específicos de la pandemia del <span class="color-green">COVID-19</span>.','siscovid')?></p>
      </div>
    </div>

    <!-- <div class="row filter-row">
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
    </div> -->

  </div>
</div>