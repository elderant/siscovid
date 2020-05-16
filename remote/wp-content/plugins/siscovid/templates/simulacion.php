<div id="simulation">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-10 offset-1">
        <h2><?php _e('Simulación de nuestros modelos','siscovid')?></h2>
      </div>
    </div>
    <div class="row filter-row">
      <div class="col-6 offset-3 filter-container">
        <div class="tabs-container tabs-5">
          <button class= "tab active" data-city="barranquilla">Barranquilla</button>
          <button class= "tab" data-city="bogota">Bogotá</button>
          <button class= "tab" data-city="cali">Cali</button>
          <button class= "tab" data-city="cartagena">Cartagena</button>
          <button class= "tab" data-city="medellin">Medellín</button>
        </div>
      </div>
    </div>
    <div class="row model-row">
      <div class="col-10 offset-1 model-container">
        <div class="model barranquilla active">
          <div class="temp-title">Modelo para Barranquilla</div>
          <iframe 
            src="https://app.powerbi.com/view?r=eyJrIjoiNWU1ZDJmODEtNTBjMy00NzdhLThlNDAtMjBkNDk1MzZlNjYwIiwidCI6ImZhYmQwNDdjLWZmNDgtNDkyYS04YmJiLThmOThiOWZiOWNjYSIsImMiOjR9" 
            frameborder="0"></iframe>
        </div>
        <div class="model bogota hidden">
          <div class="temp-title">Modelo para Bogotá</div>
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNWU1ZDJmODEtNTBjMy00NzdhLThlNDAtMjBkNDk1MzZlNjYwIiwidCI6ImZhYmQwNDdjLWZmNDgtNDkyYS04YmJiLThmOThiOWZiOWNjYSIsImMiOjR9"
            src
            frameborder="0"></iframe>
        </div>
        <div class="model cali hidden">
          <div class="temp-title">Modelo para Cali</div>
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNWU1ZDJmODEtNTBjMy00NzdhLThlNDAtMjBkNDk1MzZlNjYwIiwidCI6ImZhYmQwNDdjLWZmNDgtNDkyYS04YmJiLThmOThiOWZiOWNjYSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model cartagena hidden">
          <div class="temp-title">Modelo para Cartagena</div>
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNWU1ZDJmODEtNTBjMy00NzdhLThlNDAtMjBkNDk1MzZlNjYwIiwidCI6ImZhYmQwNDdjLWZmNDgtNDkyYS04YmJiLThmOThiOWZiOWNjYSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
        <div class="model medellin hidden">
          <div class="temp-title">Modelo para Medellín</div>
          <iframe 
            data-src="https://app.powerbi.com/view?r=eyJrIjoiNWU1ZDJmODEtNTBjMy00NzdhLThlNDAtMjBkNDk1MzZlNjYwIiwidCI6ImZhYmQwNDdjLWZmNDgtNDkyYS04YmJiLThmOThiOWZiOWNjYSIsImMiOjR9" 
            src
            frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>