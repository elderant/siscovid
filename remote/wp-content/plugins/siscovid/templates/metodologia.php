<div id="methodology">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-10 offset-1">
        <h2><?php _e('Metodología de nuestros modelos','siscovid')?></h2>
      </div>
    </div>
    <div class="row filter-row">
      <div class="col-10 offset-1 filter-container">
        <button data-city="agents">Modelo basado en agentes</button>
        <button class= "active" data-city="metapoblacional">Modelo Metapoblacional</button>
      </div>
    </div>
    <div class="row model-row">
      <div class="col-10 offset-1 model-container">
        <div class="model agents hidden">
          

        </div>

        <div class="model metapoblacional active">
          <h3><?php _e('Modelo Metapoblacional','siscovid');?></h3>
          <p><?php _e('Nos basamos en el clásico modelo SEIR (Susceptible, Expuesto, Infectado, Removido) e hicimos algunas modificaciones. Dividimos el grupo de infectados en dos: diagnosticados (I1) y no diagnosticados (A). Esto se debe a que se estima que los no diagnosticados juegan un papel fundamental en las dinámicas de la infección. De estos dos grupos pasan a hospitalización (I2) y de hospitalizados a la unidad de cuidados intensivos (I3) y finalmente a muertos (D). Para las poblaciones en A, I1, I2 e I3 existe una tasa de recuperación.','siscovid');?></p>
          <h4><?php _e('Modelo','siscovid');?></h4>
          <img src="/wp-content/uploads/methodology-poblacional-1.jpeg" alt="<?php _e('Imagen modelo metapoblacional 1','siscovid')?>">
          <p><?php _e('Una de las hipotesis que tenemos es que modelar ciudades completas con el mismo modelo quizas no da suficiente información para tomar decisiones más específicas. Por eso estamos trabajando en realizar modelos más específicos por localidad ya que pensamos que cada localidad tiene sus propias dinámicas. En el caso de Bogotá es evidente que en el suroccidente de la ciudad en las localidades de Kennedy y Engativa el contagio es mucho mayor que en otras localidades. Sin embargo existe un flujo entre las localidades que los simulamos de la siguiente forma.','siscovid');?></p>
          <img src="/wp-content/uploads/methodology-poblacional-2.jpeg" alt="<?php _e('Imagen modelo metapoblacional 2','siscovid')?>">
          <p><?php _e('Como se puede ver en la figura, el flujo solo se da entre los susceptibles, los expuestos, los recuperados y los que no han sido diagnosticados. Las ecuacioines que describen los modelos son las siguientes.','siscovid')?><p>
          <p><?php _e('Para un nodo determinado i:','siscovid');?></p>
          <p>$$ {dS \over dt} =  -\beta*S + S_{in} - S_{out} $$</p>
          <img style="width: 514px;" src="/wp-content/uploads/methodology-poblacional-3.jpeg" alt="<?php _e('Imagen modelo metapoblacional 3','siscovid')?>">
          <p><?php _e('Estos son los parámetros que estamos utilizando.','siscovid');?></p>
          <table id="parameters"> 
            <tr class="header">
              <th><?php _e('Variable / Parámetro','siscovid')?></th>
              <th><?php _e('Significado','siscovid')?></th>
              <th><?php _e('Valor','siscovid')?></th>
              <th><?php _e('Unidades','siscovid')?></th>
            </tr>
            <tr>
              <td>S</td>
              <td><?php _e('Susceptibles','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>E</td>
              <td><?php _e('Expuestos','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>A</td>
              <td><?php _e('Asintomáticos / No detectados','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>$$I_1$$</td>
              <td><?php _e('Sintomáticos leves (Casa)','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>$$I_2$$</td>
              <td><?php _e('Sintomáticos moderados (Hospital)','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>$$I_3$$</td>
              <td><?php _e('Sintomáticos graves (UCI)','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>R</td>
              <td><?php _e('Recuperados','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>D</td>
              <td><?php _e('Muertos','siscovid')?></td>
              <td>-</td>
              <td><?php _e('Individuos','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\beta$$</td>
              <td><?php _e('Transmisión','siscovid')?></td>
              <td>1.5</td>
              <td>$$prob.contagio*{contactos\over dia}$$</td>
            </tr>
            <tr>
              <td>$$\sigma_A$$</td>
              <td><?php _e('Efecto asintomático/no detectado','siscovid')?></td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\sigma_1$$</td>
              <td><?php _e('Efecto aislamiento en casa','siscovid')?></td>
              <td>0.5</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\sigma_2$$</td>
              <td><?php _e('Efecto aislamiento en hospital','siscovid')?></td>
              <td><0.1/td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\sigma_3$$</td>
              <td><?php _e('Efecto aislamiento en UCI','siscovid')?></td>
              <td>0.1</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\phi$$</td>
              <td><?php _e('Fracción diagnosticada','siscovid')?></td>
              <td>0.1</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\kappa$$</td>
              <td><?php _e('Fracción sintomática','siscovid')?></td>
              <td>0.3</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\omega$$</td>
              <td><?php _e('Periodo de latencia','siscovid')?></td>
              <td>1</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\rho_1$$</td>
              <td><?php _e('días','Probabilidad de complicación leve a moderado','siscovid')?></td>
              <td>0.2</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\rho_2$$</td>
              <td><?php _e('días','Probabilidad de complicación moderado a grave','siscovid')?></td>
              <td>$$2 \over 7$$</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\rho_3$$</td>
              <td><?php _e('días','Probabilidad de complicación grave a fallecimiento','siscovid')?></td>
              <td>0.5</td>
              <td>-</td>
            </tr>
            <tr>
              <td>$$\lambda_1$$</td>
              <td><?php _e('días','Periodo de complicación leve a moderado','siscovid')?></td>
              <td>5</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\lambda_2$$</td>
              <td><?php _e('días','Periodo de complicación moderado a grave','siscovid')?></td>
              <td>6</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\lambda_3$$</td>
              <td><?php _e('días','Periodo de complicación grave a fallecimiento','siscovid')?></td>
              <td>10</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\gamma_1$$</td>
              <td><?php _e('días','Periodo de leve a recuperado','siscovid')?></td>
              <td>8</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\gamma_2$$</td>
              <td><?php _e('días','Periodo de moderado a recuperado','siscovid')?></td>
              <td>8</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
            <tr>
              <td>$$\gamma_3$$</td>
              <td><?php _e('días','Periodo de grave a recuperado','siscovid')?></td>
              <td>10</td>
              <td><?php _e('días','siscovid')?></td>
            </tr>
          </table>
        </div>
        
      </div>
    </div>
  </div>
</div>