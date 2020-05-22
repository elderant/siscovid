<div id="simulation">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <h2><?php _e('Simulación de nuestros modelos','siscovid')?></h2>
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
      <div class="col-12 col-xl-10 offset-xl-1 p-xl-0 p-lg-5 model-container">
        <div class="model barranquilla hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNTRlNTAyOGEtODQ4ZS00MTgxLWEwMjUtNWU4ODM0YTY4MjY2IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9"
            src
            frameborder="0"></iframe>
        </div>
        <div class="model bogota active">
          <iframe 
            src="https://app.powerbi.com/view?r=eyJrIjoiNTRlNTAyOGEtODQ4ZS00MTgxLWEwMjUtNWU4ODM0YTY4MjY2IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            frameborder="0"></iframe>
        </div>
        <div class="model cali hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNTRlNTAyOGEtODQ4ZS00MTgxLWEwMjUtNWU4ODM0YTY4MjY2IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model cartagena hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNTRlNTAyOGEtODQ4ZS00MTgxLWEwMjUtNWU4ODM0YTY4MjY2IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model medellin hidden">
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNTRlNTAyOGEtODQ4ZS00MTgxLWEwMjUtNWU4ODM0YTY4MjY2IiwidCI6IjRjY2VlNTI2LTljZDktNGQxNC1iY2E2LWFiNzlkNzBhZjlmOSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>