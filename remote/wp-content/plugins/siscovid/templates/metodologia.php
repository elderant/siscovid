<div id="methodology">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-10 offset-1">
        <h2><?php _e('Metodología de nuestros modelos','siscovid')?></h2>
      </div>
    </div>
    <div class="row filter-row">
      <div class="col-10 offset-1 filter-container">
        <button class= "active" data-model="agents">Modelo basado en agentes</button>
        <button data-model="metapoblacional">Modelo Metapoblacional</button>
      </div>
    </div>
    <div class="row model-row">
      <div class="col-10 offset-1 model-container">
        <div class="model agents active">
          <!-- page 1 -->
          <h3><?php _e('Modelo Basado en Agentes','siscovid');?></h3>
          <h4 class="uppercase"><?php _e('Descripción del modelo conceptual','siscovid');?></h4>
          <h4><?php _e('Parte I. Propósito del modelo','siscovid');?></h4>
          <p><?php _e('El modelo basado en agentes (MBA) propuesto tiene como objetivo simular y evaluar el efecto de diferentes escenarios con el propósito de apoyar la toma de decisiones conjuntas que permitan mitigar los efectos del COVID-19 de tal manera que no se sobrepasen las capacidades de los sistemas de salud en una ciudad. Particularmente, la evaluación de escenarios se ha realizado para Bogotá, Cali, Medellin, Cartagena y Barranquilla.', 'siscovid');?></p>
          <p><?php _e('El desempeño global del sistema vendrá determinado en términos del número de infectados, hospitalizados, y usuarios que requieren alguna unidad de cuidados intensivos (UCI). También se analiza la tasa de ataque, que corresponde a la gráfica acumulada de infectados. Estas variables se pueden analizar por grupos de edad y para diferentes localidades o comunas en cada ciudad. La elección de los parámetros se ha hecho a partir de la revisión de la literatura y de diferentes fuentes de información a nivel nacional como el Instituto Nacional de Salud Pública.', 'siscovid');?></p>
          <h4><?php _e('Parte II. Alcance del modelo','siscovid');?></h4>
          <p><?php _e('Los agentes se ubican en sus residencias de acuerdo con la densidad poblacional y grupos de edad en diferentes zonas /localidades /comunas de cada ciudad.', 'siscovid');?></p>
          <p><?php _e('Cada día, los agentes:', 'siscovid');?></p>
          <ol class="numbered-list">
            <li><?php _e('Se desplazan levemente alrededor de su residencia', 'siscovid');?></li>
            <li><?php _e('Se movilizan por la ciudad, entre zonas y dentro de las zonas, de acuerdo con la matriz OD reportada para cada ciudad', 'siscovid');?></li>
            <li><?php _e('Se desplazan levemente alrededor de su lugar de trabajo.', 'siscovid');?></li>
            <li><?php _e('Vuelven a su residencia.', 'siscovid');?></li>
          </ol>
          <p><?php _e('Para efectos del modelo solo se están considerando los viajes por trabajo. Los viajes de trabajo se pueden realizar a través de transporte público colectivo o transporte privado (vehículo particular).', 'siscovid');?></p>
          <p><?php _e('Los agentes se infectan mediante un modelo SIR por contacto con otros agentes. Se utilizan parámetros de la literatura publicada sobre COVID19(3–5). Para nuestros análisis asumimos el período de incubación, período latente, periodo infeccioso y coeficiente de infección del trabajo adelantado por Ferguson, et al (3).', 'siscovid');?></p>
          <p><?php _e('Los agentes susceptibles, al tener contacto con un agente infectado, pueden infectarse con cuatro diferentes niveles de severidad (4):', 'siscovid');?></p>
          <ul class="bullet-list">
            <li><?php _e('Leves Asintomáticos: son 50% menos contagiosos que los demás niveles de severidad y continúan con su rutina de movilidad.', 'siscovid');?></li>
            <li><?php _e('Leves Sintomáticos: son contagiosos y continúan su rutina de movilidad, pero cada día tienen una probabilidad de ser hospitalizados porque el estado de su enfermedad puede cambiar a grave o crítico.', 'siscovid');?></li>
            <li><?php _e('Grave: sintomáticos que son hospitalizados, con mayor tiempo de recuperación.', 'siscovid');?></li>
            <li><?php _e('•	Crítico: sintomáticos que deben ir a UCI, quedan inmovilizados y tienen una probabilidad de muerte de acuerdo con su edad. Los agentes infectados se recuperan o se mueren según su nivel de severidad.', 'siscovid');?></li>
          </ul>          
          <p><?php _e('El modelo provee, para cada día, para toda la ciudad, y por zona (y por grupos de edad si así se requiere): el porcentaje de infectados en cada nivel de gravedad, el porcentaje de recuperados y la cantidad de muertes. También se puede analizar la tasa de ataque a nivel general, por zonas y por diferentes grupos de edad.', 'siscovid');?></p>
          
          <!-- page 2 -->
          <h4><?php _e('Parte III. Especificación del modelo','siscovid');?></h4>
          <p><?php _e('Para describir los diferentes componentes del Modelo hace uso del marco de referencia PARTE, a través del cual se definen los aspectos característicos de los agentes modelados y del contexto en el cual se desenvuelve el sistema. PARTE ayuda a describir estructuralmente: propiedades, acciones, reglas de decisión, tiempo y entorno del sistema modelado, del modo que se presenta a continuación.', 'siscovid');?></p>
          <h5><?php _e('Propiedades','siscovid');?></h5>
          <p><?php _e('Se considera un solo tipo de agente que son los individuos o personas. Cada agente tiene diferentes características o propiedades como son:', 'siscovid');?></p>
          <ul class="bullet-list">
            <li><?php _e('<strong>Sexo:</strong> para esto se emplea la distribución del sexo por cada ciudad (DANE, 2018).', 'siscovid');?></li>
            <li><?php _e('<strong>Edad:</strong> distribución de edad de los agentes de acuerdo a los grupos de edad en cada ciudad (DANE, 2018).', 'siscovid');?></li>
            <li><?php _e('<strong>Área de origen:</strong> el agente es asignado aleatoriamente a una zona o localidad de la ciudad. Los agentes se asignan de acuerdo a la densidad poblacional por cada zona o localidad en cada ciudad.', 'siscovid');?></li>
            <li><?php _e('<strong>Estado:</strong> cada agente tiene diferentes estados (Susceptible (1), infectado (2), infectado grave (requiere hospitalización) (3), infectado crítico (requiere una unidad de cuidados intensivos (4), recuperado (5)).', 'siscovid');?></li>
            <li><?php _e('<strong>Modo de transporte:</strong> el agente puede desplazarse por medio de modo de transporte privado o público con una probabilidad que depende del área a la que pertenece.', 'siscovid');?></li>
          </ul>
          <h5><?php _e('Acciones','siscovid');?></h5>
          <p><?php _e('Hay diferentes acciones que pueden realizar los agentes:', 'siscovid');?></p>
          <p><?php _e('<strong>Infectar:</strong> En cada etapa un agente puede infectar algunos agentes susceptibles que se encuentran en su misma locación (celda) con una probabilidad fija (Imperial College COVID-19 Response Team, 2020). Un agente puede infectar a otros agentes solo si está infectado y si han pasado 5 días desde que fue infectado.', 'siscovid');?></p>
          <p><?php _e('Un agente infectado puede infectar otros agentes con una tasa de contagio del 9,8% (Imperial College COVID-19 Response Team, 2020) si presenta síntomas, o del 4,9% de tasa de contagio si el agente no presenta síntomas.', 'siscovid');?></p>
          <p><?php _e('<strong>Presenta síntomas:</strong> Los agentes contagiados tienen una probabilidad de no presentar síntomas del 80% (Imperial College COVID-19 Response Team, 2020). ', 'siscovid');?></p>
          <p><?php _e('<strong>Estado del paciente:</strong> A los agentes contagiados que ya superaron el período de incubación de 5 días, dependiendo de su rango de edad, tienen una probabilidad de pasar del estado leve al estado grave (requiere hospitalización) o estado crítico (requiere UCI) (Imperial College COVID-19 Response Team, 2020). En la tabla 1 se puede observar las diferentes probabilidades para que un agente pase de un estado infectado a un estado infectado crítico o grave.', 'siscovid');?></p>
          
          <!-- page 3 -->
          <p><?php _e('Tabla 1: Casos severos estimados por grupos de edad. ', 'siscovid');?></p>
          <table id="severity-table">
            <tr class="header">
              <th><?php _e('Age-group(years)','siscovid');?></th>
              <th><?php _e('% symptomatic cases requiring hospitalization','siscovid');?></th>
              <th><?php _e('% hospitalised cases requiring critical care','siscovid');?></th>
              <th><?php _e('Infection Fatality Ratio','siscovid');?></th>
            </tr>
            <tr>
              <td><?php _e('0 to 9','siscovid');?></td>
              <td><?php _e('0.1%','siscovid');?></td>
              <td><?php _e('5.0%','siscovid');?></td>
              <td><?php _e('0.002%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('10 to 19','siscovid');?></td>
              <td><?php _e('0.3%','siscovid');?></td>
              <td><?php _e('5.0%','siscovid');?></td>
              <td><?php _e('0.006%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('20 to 29','siscovid');?></td>
              <td><?php _e('1.2%','siscovid');?></td>
              <td><?php _e('5.0%','siscovid');?></td>
              <td><?php _e('0.03%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('30 to 39','siscovid');?></td>
              <td><?php _e('3.2%','siscovid');?></td>
              <td><?php _e('5.0%','siscovid');?></td>
              <td><?php _e('0.08%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('40 to 49','siscovid');?></td>
              <td><?php _e('4.9%','siscovid');?></td>
              <td><?php _e('6.3%','siscovid');?></td>
              <td><?php _e('0.15%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('50 to 59','siscovid');?></td>
              <td><?php _e('10.2%','siscovid');?></td>
              <td><?php _e('12.2%','siscovid');?></td>
              <td><?php _e('0.60%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('60 to 69','siscovid');?></td>
              <td><?php _e('16.6%','siscovid');?></td>
              <td><?php _e('27.4%','siscovid');?></td>
              <td><?php _e('2.2%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('70 to 79','siscovid');?></td>
              <td><?php _e('24.3%','siscovid');?></td>
              <td><?php _e('43.2%','siscovid');?></td>
              <td><?php _e('5.1%','siscovid');?></td>
            </tr>
            <tr>
              <td><?php _e('80+','siscovid');?></td>
              <td><?php _e('27.3%','siscovid');?></td>
              <td><?php _e('70.9%','siscovid');?></td>
              <td><?php _e('9.3%','siscovid');?></td>
            </tr>
          </table>
          <p class="citation"><?php _e('Source: (Imperial College COVID-19 Response Team, 2020). ', 'siscovid');?></p>
          <p><?php _e('<strong>Recuperarse:</strong> Los agentes infectados después de un tiempo de recuperación cambian de estado a recuperados. Este tiempo de recuperación depende del estado de infección del agente. Si su estado es infectado (asintomático) su tiempo de recuperación será de 2 semanas. Si el agente requiere hospitalización o cuidados intensivos su tiempo de recuperación se distribuirá de manera uniforme entre 3 a 6 semanas (Joint Mission, 2020).', 'siscovid');?></p>
          <p><?php _e('<strong>Morir:</strong> Los agentes cuyo estado sea grave o crítico dependiendo su grupo de edad tienen una probabilidad de morir (Tabla 1) (Imperial College COVID-19 Response Team, 2020).', 'siscovid');?></p>
          <h5><?php _e('Reglas','siscovid');?></h5>
          <p><?php _e('Todos los agentes susceptibles (1), infectados (2) y recuperados (5) se mueven desde su localidad de origen a su localidad de destino. Dependiendo de las dinámicas de movilidad en la población de la zona de cada agente, este tendrá asignada una probabilidad de quedarse o salir de su zona. La ubicación de destino y el modo de transporte se asignan a cada agente de acuerdo con la matriz Origen-Destino de cada ciudad.', 'siscovid');?></p>
          <p><?php _e('Los agentes se mueven cuatri veces en cada paso:', 'siscovid');?></p>
          <ol class="numbered-list">
            <li><?php _e('Viaje alrededor de su hogar.', 'siscovid');?></li>
            <li><?php _e('Viaje de origen a destino.', 'siscovid');?></li>
            <li><?php _e('Viaje alrededor de su ubicación de destino.', 'siscovid');?></li>
            <li><?php _e('Viaje de destino a origen.', 'siscovid');?></li>
          </ol>
          
          <!-- page 4 -->
          <div class="padded-block viajes">
            <h6><?php _e('Viajar alrededor de su hogar','siscovid');?></h6>
            <p><?php _e('Los agentes antes de que se desplacen a su destino se moverán al azar alrededor de su posición de origen. Esto representa la dinámica de movilidad de las personas en su hogar.', 'siscovid');?></p>
            <h6><?php _e('Viaje de origen a destino','siscovid');?></h6>
            <p><?php _e('Los agentes sin restricciones de movilidad se mueven en transporte público o privado a su ubicación de destino. Quienes utilizan el transporte privado se trasladan inmediatamente desde su origen a su destino. Quienes utilizan el transporte público se mueven empleando diferentes movimientos que depende del tiempo de viaje para llegar a su destino.', 'siscovid');?></p>
            <h6><?php _e('Viajar alrededor de su ubicación de destino','siscovid');?></h6>
            <p><?php _e('Los agentes que se desplazaron a su destino se moverán al azar alrededor de su posición. Esto representa la dinámica de movilidad de las personas en su tiempo de trabajo.', 'siscovid');?></p>
            <h6><?php _e('Viaje de destino a origen','siscovid');?></h6>
            <p><?php _e('Los agentes sin restricciones de movilidad se trasladan en transporte público o privado a su ubicación de origen. Quienes utilizan el transporte privado se trasladan inmediatamente desde su destino a su origen. Quienes utilizan el transporte público se mueven empleando diferentes movimientos que depende del tiempo de viaje para llegar a su destino.', 'siscovid');?></p>
          </div>
          
          <h5><?php _e('Tiempo','siscovid');?></h5>
          <p><?php _e('Un tick del modelo representa un día. Un tick está compuesto por los tiempos utilizados para administrar los movimientos de los agentes.', 'siscovid');?></p>
          <h5><?php _e('Ambiente','siscovid');?></h5>
          <p><?php _e('La ciudad se representa con una cuadrícula:', 'siscovid');?></p>
          <ul class="bullet-list">
            <li><?php _e('Cada celda de la cuadrícula representa una posición (x, y) relacionada con una posición de latitud y longitud en el mapa real de cada ciudad.', 'siscovid');?></li>
            <li><?php _e('Cada celda tiene las mismas características de la ubicación en el mapa real (específicamente la zona o distrito).', 'siscovid');?></li>
          </ul>
          <p><?php _e('El entorno del sistema está dividido en zonas o localidades de acuerdo a la división administrativa de cada ciudad.', 'siscovid');?></p>
          <h5><?php _e('Supuestos','siscovid');?></h5>
          <p><?php _e('Los primeros agentes infectados se distribuyen de manera aleatoria en la ciudad.', 'siscovid');?></p>
          <p><?php _e('Los agentes que se recuperaron del virus no pueden infectarse nuevamente.', 'siscovid');?></p>
          <h5><?php _e('Variables de salida','siscovid');?></h5>
          <p><?php _e('Las variables de salida se pueden analizar para diferentes grupos de edad y zonas o localidades.', 'siscovid');?></p>
          
          <!-- page 5 -->
          <ul class="bullet-list">
            <li><?php _e('Proporción de agentes por condición (susceptibles, infectados que requieren hospitalización y que requieren cuidados intensivos, recuperados, muertos).', 'siscovid');?></li>
            <li><?php _e('Tasa de ataque.', 'siscovid');?></li>
          </ul>
          <h5><?php _e('Escenarios','siscovid');?></h5>
          <div class="padded-block escenarios">
            <h6 class="escenario"><?php _e('Escenario 1','siscovid');?></h6>
            <p><?php _e('Línea Base. Movilidad de todos los agentes sin restricción.', 'siscovid');?></p>
            <h6 class="escenario"><?php _e('Escenario 2','siscovid');?></h6>
            <p><?php _e('Aislamiento social obligatorio por diferentes días de cuarentena y diferentes intervalos de la misma.', 'siscovid');?></p>
            <p><?php _e('Supuestos:', 'siscovid');?></p>
            <ul class="bullet-list">
              <li><?php _e('Un porcentaje de la población mantiene la movilidad sin restricciones de acuerdo a los datos de cada ciudad.', 'siscovid');?></li>
            </ul>
            <h6 class="escenario"><?php _e('Escenario 3','siscovid');?></h6>
            <p><?php _e('Pruebas de testeo aleatorio a través de diferentes estrategias:', 'siscovid');?></p>
            <ul class="bullet-list">
              <li><?php _e('Testeo aleatorio a toda la población para hacer monitorio de la epidemia.', 'siscovid');?></li>
              <li><?php _e('Testeo a los contactos de los infectados críticos(hospitalizados) y graves (UCI).', 'siscovid');?></li>
              <li><?php _e('Testeo aleatorio a la población y testeo a los contactos de los infectados críticos(hospitalizados) y graves (UCI).', 'siscovid');?></li>
              <li><?php _e('Testeo aleatorio a la población. Una vez identificados los infectados se realiza testeo a los contactos de los infectados.', 'siscovid');?></li>
            </ul>
            <p><?php _e('El testeo implica un retraso de dos días en conocer los resultados de la prueba. Si un individuo da positivo en la prueba, inmediatamente se va a cuarentena por 14 días.', 'siscovid');?></p>
            <h6 class="escenario"><?php _e('Escenario 4','siscovid');?></h6>
            <ul class="bullet-list">
              <li><?php _e('Medidas de aislamiento parcial y/o escalonadas en el tiempo.','siscovid');?></li>
            </ul>
          </div>
          
          <!-- page 6 -->
          <h4><?php _e('Referencias','siscovid');?></h4>
          <ol class="numbered-list">
            <li class="citation"><?php _e('Departamento Administrativo Nacional de Estadística - DANE. Proyecciones de población [Internet]. Población y Demografía. 2020 [cited 2020 Mar 24]. Available from: https://www.dane.gov.co/index.php/estadisticas-por-tema/demografia-y-poblacion/proyecciones-de-poblacion', 'siscovid');?></li>
            <li class="citation"><?php _e('Secretaría Distrital de Movilidad. Prudencia Bogotá - Sistema Integrado de Información sobre Movilidad Urbana [Internet]. Encuesta de movilidad 2019. 2019 [cited 2020 Mar 24]. Available from: https://www.simur.gov.co/portal-simur/datos-del-sector/encuestas-de-movilidad/', 'siscovid');?></li>
            <li class="citation"><?php _e('Ferguson NM, Laydon D, Nedjati-Gilani G, Imai N, Ainslie K, Baguelin M, et al. Impact of non-pharmaceutical interventions (NPIs) to reduce COVID-19 mortality and healthcare demand [Internet]. 2020 [cited 2020 Mar 24]. Available from: https://doi.org/10.25561/77482', 'siscovid');?></li>
            <li class="citation"><?php _e('Verity R, Okell LC, Dorigatti I, Winskill P, Whittaker C, Imai N, et al. Estimates of the severity of COVID-19 disease. medRxiv. 2020;2020.03.09.20033357.', 'siscovid');?></li>
            <li class="citation"><?php _e('World Health Organization (WHO). Report of the WHO-China Joint Mission on Coronavirus Disease 2019 ( COVID-19 ) [Internet]. Vol. 2019, Report of the WHO-China Joint Mission. 2020. Available from: https://www.google.com/url?sa=t&source=web&rct=j&url=https://www.who.int/docs/default-source/coronaviruse/who-china-joint-mission-on-covid-19-final-report.pdf&ved=2ahUKEwiFr5KrppToAhWFdn0KHbRWABIQFjAAegQIBxAC&usg=AOvVaw1gO_RTfaIWQuEkjdvq_O7i', 'siscovid');?></li>
          </ol>
        </div>

        <div class="model metapoblacional hidden">
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