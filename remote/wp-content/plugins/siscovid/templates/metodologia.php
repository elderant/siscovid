<div id="methodology">
  <div class="container-fluid">
    <div class="row title-row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <h2><?php _e('Metodologia del proyecto','siscovid')?></h2>
      </div>
    </div>
    <div class="row project-methodology-row">
      <div class="col-12 col-xl-6 col-xl1-8 col-lg-8 col-sm-10 offset-xl-3 offset-xl1-2 offset-lg-2 offset-sm-1">
        <img class="animate" src="/wp-content/uploads/methodology-project.png" alt="<?php _e('Metodología del projecto', 'siscovid')?>">
      </div>
    </div>
    <div class="row filter-row">
      <div class="col-xl-6 col-xl1-8 col-md-10 col-12 offset-xl-3 offset-xl1-2 offset-md-1 filter-container">
        <div class="tabs-container tabs-4">
          <button class="tab active" data-model="datos"><?php _e('Datos','siscovid');?></button>
          <button class="tab" data-model="agents"><?php _e('Modelo basado en agentes','siscovid');?></button>
          <button class="tab" data-model="metapoblacional"><?php _e('Modelo Metapoblacional','siscovid');?></button>
          <button class="tab" data-model="intervenciones"><?php _e('Intervenciones','siscovid');?></button>
        </div>
      </div>
    </div>
    <div class="row model-row">
      <div class="col-12 col-xl-6 col-xl1-8 col-sm-10 offset-xl-3 offset-xl1-2 offset-sm-1 model-container">
        <div class="model datos active">
          <div class="title-container">
            <h3><?php _e('Multiples fuentes de información','siscovid');?></h3>
          </div>
          <div class="row overview">
            <div class="col-12 d-flex flex-wrap justify-content-center align-items-start">  
              <div class="datos-part facebook">
                <h4><?php _e('Primera','siscovid');?></h4>
                <img class="animate-flip" src="/wp-content/uploads/methodology-datos-1.jpg" alt="<?php _e('Temporal datos image 1','siscovid')?>">
              </div>
              <div class="datos-part encuestas">
                <h4><?php _e('Segunda','siscovid');?></h4>
                <div class="content-container">
                  <p><?php _e('Encuesta en cada ciudad:','siscovid');?></p>
                  <ul class="animate-flip">
                    <li><?php _e('Movilidad y contactos','siscovid');?></li>
                    <li><?php _e('Adherencia','siscovid');?></li>
                    <li><?php _e('Sintomas','siscovid');?></li>
                    <li><?php _e('Enfermedades preexistentes','siscovid');?></li>
                    <li><?php _e('Características sociodemográficas','siscovid');?></li>
                  </ul>
                </div>
              </div>
              <div class="datos-part transporte">
                <h4><?php _e('Tercera','siscovid');?></h4>
                <div class="d-flex flex-wrap justify-content-around align-items-center">
                  <img class="animate-flip barranquilla" src="/wp-content/uploads/methodology-datos-alcaldia-barranquilla.png" alt="<?php _e('Logo Alcaldía de Barranquilla','siscovid')?>">
                  <img class="animate-flip cali" src="/wp-content/uploads/methodology-datos-alcaldia-cali.png" alt="<?php _e('Logo Alcaldía de Cali','siscovid')?>">
                  <img class="animate-flip transmetro" src="/wp-content/uploads/methodology-datos-transmetro.png" alt="<?php _e('Logo Transmetro','siscovid')?>">
                  <img class="animate-flip metro" src="/wp-content/uploads/methodology-datos-metrom.png" alt="<?php _e('Logo Metro de Medellín','siscovid')?>">
                  <img class="animate-flip transmilenio" src="/wp-content/uploads/methodology-datos-transmilenio.png" alt="<?php _e('Logo Transmilenio','siscovid')?>">
                  <img class="animate-flip medellin" src="/wp-content/uploads/methodology-datos-alcaldia-medellin.png" alt="<?php _e('Logo Alcaldía de Medellín','siscovid')?>">
                  <img class="animate-flip bogota" src="/wp-content/uploads/methodology-datos-alcaldia-bogota.png" alt="<?php _e('Logo Alcaldía de Bogotá','siscovid')?>">
                  <img class="animate-flip cartagena" src="/wp-content/uploads/methodology-datos-alcaldia-cartagena.png" alt="<?php _e('Logo Alcaldía de Cartagena','siscovid')?>">
                </div>
              </div>
              <div class="datos-part instituto">
                <h4><?php _e('Cuarta','siscovid');?></h4>
                <img class="animate-flip" src="/wp-content/uploads/methodology-datos-instituto-salud.png" alt="<?php _e('Logo Instituto Nacional de Salud','siscovid')?>">
              </div>
            </div>
          </div>

          <div class="row source-explanation facebook light-background odd">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h4><?php _e('Facebook: Data For Good/GeoInsights','siscovid');?></h4>
                </div>
              </div>
              <div class="row d-flex align-items-center justify-content-between">
                <div class="col-12 col-sm-8 order-2 order-sm-1 text-container animate-bounce-left">
                  <p><?php _e('Contienen conteos de desplazamientos durante la cuarentena para las 5 ciudades estudiadas, con 3 mediciones diarias.','siscovid');?></p>
                  <p><?php _e('Los datos se obtienen de los dispositivos de aquellos usuarios de Facebook que aprueban el acceso de la aplicación al GPS (alrededor del 15% de los usuarios).','siscovid');?></p>
                  <p><?php _e('A estos datos se le agrega el mallado geográfico usado por GeoInsights al nivel de localidad (o comuna), produciendo así matrices origen-destino entre localidades (comunas) que sirven como entrada para los dos modelos.','siscovid');?></p>
                </div>
                <div class="col-12 col-sm-4 order-1 order-sm-2 image-container">
                  <div class="datos-part facebook">
                    <img src="/wp-content/uploads/methodology-datos-1.jpg" alt="<?php _e('Temporal datos image 1','siscovid')?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row source-explanation encuestas light-shade-background even">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h4><?php _e('Encuestas','siscovid');?></h4>
                </div>
              </div>
              <div class="row d-flex align-items-center justify-content-between">
                <div class="col-12 col-sm-4 order-1 order-sm-1 image-container">
                  <div class="datos-part encuestas">
                    <div class="content-container">
                      <p><?php _e('Encuesta en cada ciudad:','siscovid');?></p>
                      <ul>
                        <li><?php _e('Movilidad y contactos','siscovid');?></li>
                        <li><?php _e('Adherencia','siscovid');?></li>
                        <li><?php _e('Sintomas','siscovid');?></li>
                        <li><?php _e('Enfermedades preexistentes','siscovid');?></li>
                        <li><?php _e('Características sociodemográficas','siscovid');?></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 order-2 order-sm-2 text-container animate-bounce-right">
                  <p><?php _e('<strong>Universo en estudio:</strong> Mujeres y hombres mayores de 18 años (adultos) habitantes de la zona urbana de Bogotá, Medellín, Cali, Cartagena y Barranquilla.','siscovid');?></p>
                  <p><?php _e('<strong>Marco de muestreo:</strong> directorio telefónico. La selección de los registros de teléfonos es aleatoria y funciona mediante un algoritmo de descarga de registros.','siscovid');?></p>
                  <p><?php _e('<strong>Diseño de muestreo:</strong> probabilístico. La unidad de observación son personas adultas de las cinco ciudades. Se realiza control de tamaños de muestra por sexo (mujer/hombre) y grupos de edad.','siscovid');?></p>
                  <p><?php _e('<strong>Márgenes de error de muestreo y nivel de confianza:</strong> se emplean expresiones matemáticas que permiten relacionar el tamaño de muestra con el error de muestreo esperado y el nivel del parámetro en investigación. En este caso el error de muestreo máximo es de 3.5% y el nivel de confiabilidad asumido por muestreo es de 95%.','siscovid');?></p>
                  <p><?php _e('<strong>Técnica de recolección:</strong> telefónica','siscovid');?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row source-explanation transporte light-background odd">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h4><?php _e('Medios de transporte masivo y alcaldias','siscovid');?></h4>
                </div>
              </div>
              <div class="row d-flex align-items-center justify-content-between">
                <div class="col-12 col-sm-8 order-2 order-sm-1 text-container animate-bounce-left">
                  <p><?php _e('Para la recolección, procesamiento y análisis de información de fuentes secundarias se siguen los siguientes pasos en general:','siscovid');?></p>
                  <h5><?php _e('Recolección:','siscovid');?></h5>
                  <ul>
                    <li><?php _e('Identificación de fuentes secundarias.','siscovid');?></li>
                    <li><?php _e('Búsquedas activas de información.','siscovid');?></li>
                    <li><?php _e('Solicitudes de información cuando los datos no están abiertos.','siscovid');?></li>
                  </ul>
                  <h5><?php _e('Procesamiento:','siscovid');?></h5>
                  <ul>
                    <li><?php _e('Organización e integración de datos.','siscovid');?></li>
                    <li><?php _e('Clasificación y codificación.','siscovid');?></li>
                    <li><?php _e('Crítica y coherencia.','siscovid');?></li>
                    <li><?php _e('Modelación.','siscovid');?></li>
                  </ul>
                  <h5><?php _e('Análisis:','siscovid');?></h5>
                  <ul>
                    <li><?php _e('Validación de resultados.','siscovid');?></li>
                    <li><?php _e('Interpretación y explicación de resultados.','siscovid');?></li>
                  </ul>
                  <p><?php _e('Estos datos son insumo para los modelos.','siscovid');?></p>
                </div>
                <div class="col-12 col-sm-4 order-1 order-sm-2 image-container">
                  <div class="datos-part transporte">
                    <div class="d-flex flex-wrap justify-content-around align-items-center">
                      <img class="barranquilla" src="/wp-content/uploads/methodology-datos-alcaldia-barranquilla.png" alt="<?php _e('Logo Alcaldía de Barranquilla','siscovid')?>">
                      <img class="cali" src="/wp-content/uploads/methodology-datos-alcaldia-cali.png" alt="<?php _e('Logo Alcaldía de Cali','siscovid')?>">
                      <img class="transmetro" src="/wp-content/uploads/methodology-datos-transmetro.png" alt="<?php _e('Logo Transmetro','siscovid')?>">
                      <img class="metro" src="/wp-content/uploads/methodology-datos-metrom.png" alt="<?php _e('Logo Metro de Medellín','siscovid')?>">
                      <img class="transmilenio" src="/wp-content/uploads/methodology-datos-transmilenio.png" alt="<?php _e('Logo Transmilenio','siscovid')?>">
                      <img class="medellin" src="/wp-content/uploads/methodology-datos-alcaldia-medellin.png" alt="<?php _e('Logo Alcaldía de Medellín','siscovid')?>">
                      <img class="bogota" src="/wp-content/uploads/methodology-datos-alcaldia-bogota.png" alt="<?php _e('Logo Alcaldía de Bogotá','siscovid')?>">
                      <img class="cartagena" src="/wp-content/uploads/methodology-datos-alcaldia-cartagena.png" alt="<?php _e('Logo Alcaldía de Cartagena','siscovid')?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row source-explanation encuestas light-shade-background even">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h4><?php _e('Instituto nacional de salud','siscovid');?></h4>
                </div>
              </div>
              <div class="row d-flex align-items-center justify-content-between">
                <div class="col-12 col-sm-4 order-1 order-sm-1 image-container">
                  <div class="datos-part instituto">
                    <img src="/wp-content/uploads/methodology-datos-instituto-salud.png" alt="<?php _e('Logo Instituto Nacional de Salud','siscovid')?>">
                  </div>
                </div>
                <div class="col-12 col-sm-8 order-2 order-sm-2 text-container animate-bounce-right">
                  <p><?php _e('Se obtienen los datos de personas contagiadas y confirmadas por Covid-19 para cada una de las 5 ciudades. En este caso se sigue el procedimiento general de fuentes secundarias:','siscovid');?></p>
                  <h5><?php _e('Recolección:','siscovid');?></h5>
                  <ul>
                    <li><?php _e('Descarga diaria de datos abiertos.','siscovid');?></li>
                  </ul>
                  <h5><?php _e('Procesamiento:','siscovid');?></h5>
                  <ul>
                    <li><?php _e('Organización e integración de datos.','siscovid');?></li>
                    <li><?php _e('Clasificación y codificación.','siscovid');?></li>
                    <li><?php _e('Crítica y coherencia.','siscovid');?></li>
                    <li><?php _e('Modelación.','siscovid');?></li>
                  </ul>
                  <h5><?php _e('Análisis:','siscovid');?></h5>
                  <ul>
                    <li><?php _e('Validación de resultados.','siscovid');?></li>
                    <li><?php _e('Interpretación y explicación de resultados.','siscovid');?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="model agents hidden">
          <!-- page 1 -->
          <div class="model-part general">
            <h3><?php _e('Modelo Basado en Agentes','siscovid');?></h3>
            <h4 class="uppercase hidden"><?php _e('Descripción del modelo conceptual','siscovid');?></h4>
            <div class="light-background">
              <h4><?php _e('Parte I. Propósito del modelo','siscovid');?></h4>
              <p><?php _e('El modelo basado en agentes (MBA) propuesto tiene como objetivo simular y evaluar el efecto de diferentes escenarios con el propósito de apoyar la toma de decisiones conjuntas que permitan mitigar los efectos del <span class="color-green">COVID-19</span> de tal manera que no se sobrepasen las capacidades de los sistemas de salud en una ciudad. Particularmente, la evaluación de escenarios se ha realizado para Bogotá, Cali, Medellin, Cartagena y Barranquilla.', 'siscovid');?></p>
              <p><?php _e('El desempeño global del sistema vendrá determinado en términos del número de infectados, hospitalizados, y usuarios que requieren alguna unidad de cuidados intensivos (UCI). También se analiza la tasa de ataque, que corresponde a la gráfica acumulada de infectados. Estas variables se pueden analizar por grupos de edad y para diferentes localidades o comunas en cada ciudad. La elección de los parámetros se ha hecho a partir de la revisión de la literatura y de diferentes fuentes de información a nivel nacional como el Instituto Nacional de Salud Pública.', 'siscovid');?></p>
            </div>
            <div class="light-shade-background">
              <h4><?php _e('Parte II. Alcance del modelo','siscovid');?></h4>
              <p><?php _e('Los agentes se ubican en sus residencias de acuerdo con la densidad poblacional y grupos de edad en diferentes zonas /localidades /comunas de cada ciudad.', 'siscovid');?></p>
              <p><?php _e('Cada día, los agentes:', 'siscovid');?></p>
              <ol class="numbered-list animate">
                <li><?php _e('Se desplazan levemente alrededor de su residencia', 'siscovid');?></li>
                <li><?php _e('Se movilizan por la ciudad, entre zonas y dentro de las zonas, de acuerdo con la matriz OD reportada para cada ciudad', 'siscovid');?></li>
                <li><?php _e('Se desplazan levemente alrededor de su lugar de trabajo.', 'siscovid');?></li>
                <li><?php _e('Vuelven a su residencia.', 'siscovid');?></li>
              </ol>
              <p><?php _e('Para efectos del modelo solo se están considerando los viajes por trabajo. Los viajes de trabajo se pueden realizar a través de transporte público colectivo o transporte privado (vehículo particular).', 'siscovid');?></p>
              <p><?php _e('Los agentes se infectan mediante un modelo SIR por contacto con otros agentes. Se utilizan parámetros de la literatura publicada sobre <span class="color-green">COVID19</span> (3–5). Para nuestros análisis asumimos el período de incubación, período latente, periodo infeccioso y coeficiente de infección del trabajo adelantado por Ferguson, et al (3).', 'siscovid');?></p>
              <p><?php _e('Los agentes susceptibles, al tener contacto con un agente infectado, pueden infectarse con cuatro diferentes niveles de severidad (4):', 'siscovid');?></p>
              <ul class="bullet-list animate">
                <li><?php _e('Leves Asintomáticos: son 50% menos contagiosos que los demás niveles de severidad y continúan con su rutina de movilidad.', 'siscovid');?></li>
                <li><?php _e('Leves Sintomáticos: son contagiosos y continúan su rutina de movilidad, pero cada día tienen una probabilidad de ser hospitalizados porque el estado de su enfermedad puede cambiar a grave o crítico.', 'siscovid');?></li>
                <li><?php _e('Grave: sintomáticos que son hospitalizados, con mayor tiempo de recuperación.', 'siscovid');?></li>
                <li><?php _e('Crítico: sintomáticos que deben ir a UCI, quedan inmovilizados y tienen una probabilidad de muerte de acuerdo con su edad. Los agentes infectados se recuperan o se mueren según su nivel de severidad.', 'siscovid');?></li>
              </ul>          
              <p><?php _e('El modelo provee, para cada día, para toda la ciudad, y por zona (y por grupos de edad si así se requiere): el porcentaje de infectados en cada nivel de gravedad, el porcentaje de recuperados y la cantidad de muertes. También se puede analizar la tasa de ataque a nivel general, por zonas y por diferentes grupos de edad.', 'siscovid');?></p>
            </div>
          </div>

          <div class="light-background">
            <!-- page 2 -->
            <h4><?php _e('Parte III. Especificación del modelo','siscovid');?></h4>
            <p><?php _e('Para describir los diferentes componentes del Modelo hace uso del marco de referencia PARTE, a través del cual se definen los aspectos característicos de los agentes modelados y del contexto en el cual se desenvuelve el sistema. PARTE ayuda a describir estructuralmente: propiedades, acciones, reglas de decisión, tiempo y entorno del sistema modelado, del modo que se presenta a continuación.', 'siscovid');?></p>
            <div class="model-interface">
              <div class="tabs-container tabs-5">
                <button class="tab properties active" data-part="properties"><span class="value"><?php _e('P','siscovid');?></span></button>
                <button class="tab actions" data-part="actions"><span class="value"><?php _e('A','siscovid');?></span></button>
                <button class="tab rules" data-part="rules"><span class="value"><?php _e('R','siscovid');?></span></button>
                <button class="tab time" data-part="time"><span class="value"><?php _e('T','siscovid');?></span></button>
                <button class="tab environment" data-part="environment"><span class="value"><?php _e('E','siscovid');?></span></button>
              </div>
              <!-- <img class="model-image" src="/wp-content/uploads/methodology-agentes-base.png" alt="<?php _e('Imagen para el modelo basado en agentes','siscovid')?>"> -->
              <!-- <div class="temp-interface-container">
                <button data-part="general" class="general">General</button>
                <button data-part="properties" class="invisible-button properties"></button>
                <button data-part="actions" class="invisible-button actions"></button>
                <button data-part="rules" class="invisible-button rules"></button>
                <button data-part="time" class="invisible-button time"></button>
                <button data-part="environment" class="invisible-button environment"></button>
                <button data-part="references" class="references">Referencias</button>
              </div> -->
              <!-- <div class="display-interface-container">
                <div class="arrow-container properties">
                  <div class="line curve"></div>
                  <div class="arrow"></div>
                </div>
                <div class="arrow-container actions">
                  <div class="line curve"></div>
                  <div class="arrow"></div>
                </div>
                <div class="arrow-container rules">
                  <div class="line"></div>
                  <div class="arrow"></div>
                </div>
                <div class="arrow-container time">
                  <div class="line curve"></div>
                  <div class="arrow"></div>
                </div>
                <div class="arrow-container environment">
                  <div class="line curve"></div>
                  <div class="arrow"></div>
                </div>
              </div> -->
            </div>
  
            <div class="model-part properties active">
              <h5><?php _e('Propiedades','siscovid');?></h5>
              <p><?php _e('Se considera un solo tipo de agente que son los individuos o personas. Cada agente tiene diferentes características o propiedades como son:', 'siscovid');?></p>
              <ul class="bullet-list animate">
                <li><?php _e('<strong>Sexo:</strong> para esto se emplea la distribución del sexo por cada ciudad (DANE, 2018).', 'siscovid');?></li>
                <li><?php _e('<strong>Edad:</strong> distribución de edad de los agentes de acuerdo a los grupos de edad en cada ciudad (DANE, 2018).', 'siscovid');?></li>
                <li><?php _e('<strong>Área de origen:</strong> el agente es asignado aleatoriamente a una zona o localidad de la ciudad. Los agentes se asignan de acuerdo a la densidad poblacional por cada zona o localidad en cada ciudad.', 'siscovid');?></li>
                <li><?php _e('<strong>Estado:</strong> cada agente tiene diferentes estados (Susceptible (1), infectado (2), infectado grave (requiere hospitalización) (3), infectado crítico (requiere una unidad de cuidados intensivos (4), recuperado (5)).', 'siscovid');?></li>
                <li><?php _e('<strong>Modo de transporte:</strong> el agente puede desplazarse por medio de modo de transporte privado o público con una probabilidad que depende del área a la que pertenece.', 'siscovid');?></li>
              </ul>
            </div>
  
            <div class="model-part actions hidden">
              <h5><?php _e('Acciones','siscovid');?></h5>
              <p><?php _e('Hay diferentes acciones que pueden realizar los agentes:', 'siscovid');?></p>
              <p><?php _e('<strong>Infectar:</strong> En cada etapa un agente puede infectar algunos agentes susceptibles que se encuentran en su misma locación (celda) con una probabilidad fija (Imperial College <span class="color-green">COVID-19</span> Response Team, 2020). Un agente puede infectar a otros agentes solo si está infectado y si han pasado 5 días desde que fue infectado.', 'siscovid');?></p>
              <p><?php _e('Un agente infectado puede infectar otros agentes con una tasa de contagio del 9,8% (Imperial College <span class="color-green">COVID-19</span> Response Team, 2020) si presenta síntomas, o del 4,9% de tasa de contagio si el agente no presenta síntomas.', 'siscovid');?></p>
              <p><?php _e('<strong>Presenta síntomas:</strong> Los agentes contagiados tienen una probabilidad de no presentar síntomas del 80% (Imperial College <span class="color-green">COVID-19</span> Response Team, 2020). ', 'siscovid');?></p>
              <p><?php _e('<strong>Estado del paciente:</strong> A los agentes contagiados que ya superaron el período de incubación de 5 días, dependiendo de su rango de edad, tienen una probabilidad de pasar del estado leve al estado grave (requiere hospitalización) o estado crítico (requiere UCI) (Imperial College <span class="color-green">COVID-19</span> Response Team, 2020). En la tabla 1 se puede observar las diferentes probabilidades para que un agente pase de un estado infectado a un estado infectado crítico o grave.', 'siscovid');?></p>
              
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
              <p class="citation"><?php _e('Source: (Imperial College <span class="color-green">COVID-19</span> Response Team, 2020). ', 'siscovid');?></p>
              <p><?php _e('<strong>Recuperarse:</strong> Los agentes infectados después de un tiempo de recuperación cambian de estado a recuperados. Este tiempo de recuperación depende del estado de infección del agente. Si su estado es infectado (asintomático) su tiempo de recuperación será de 2 semanas. Si el agente requiere hospitalización o cuidados intensivos su tiempo de recuperación se distribuirá de manera uniforme entre 3 a 6 semanas (Joint Mission, 2020).', 'siscovid');?></p>
              <p><?php _e('<strong>Morir:</strong> Los agentes cuyo estado sea grave o crítico dependiendo su grupo de edad tienen una probabilidad de morir (Tabla 1) (Imperial College <span class="color-green">COVID-19</span> Response Team, 2020).', 'siscovid');?></p>
            </div>
  
            <div class="model-part rules hidden">
              <h5><?php _e('Reglas','siscovid');?></h5>
              <p><?php _e('Todos los agentes susceptibles (1), infectados (2) y recuperados (5) se mueven desde su localidad de origen a su localidad de destino. Dependiendo de las dinámicas de movilidad en la población de la zona de cada agente, este tendrá asignada una probabilidad de quedarse o salir de su zona. La ubicación de destino y el modo de transporte se asignan a cada agente de acuerdo con la matriz Origen-Destino de cada ciudad.', 'siscovid');?></p>
              <p><?php _e('Los agentes se mueven cuatro veces en cada paso:', 'siscovid');?></p>
              <ol class="numbered-list animate">
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
            </div>
            
            <div class="model-part time hidden">
              <h5><?php _e('Tiempo','siscovid');?></h5>
              <p><?php _e('Un tick del modelo representa un día. Un tick está compuesto por los tiempos utilizados para administrar los movimientos de los agentes.', 'siscovid');?></p>
            </div>
  
            <div class="model-part environment hidden">
              <h5><?php _e('Ambiente','siscovid');?></h5>
              <p><?php _e('La ciudad se representa con una cuadrícula:', 'siscovid');?></p>
              <ul class="bullet-list animate">
                <li><?php _e('Cada celda de la cuadrícula representa una posición (x, y) relacionada con una posición de latitud y longitud en el mapa real de cada ciudad.', 'siscovid');?></li>
                <li><?php _e('Cada celda tiene las mismas características de la ubicación en el mapa real (específicamente la zona o distrito).', 'siscovid');?></li>
              </ul>
              <p><?php _e('El entorno del sistema está dividido en zonas o localidades de acuerdo a la división administrativa de cada ciudad.', 'siscovid');?></p>
            </div>
          </div>
          
          <div class="model-part other">
            <div class="light-shade-background">
              <h5><?php _e('Supuestos','siscovid');?></h5>
              <p><?php _e('Los primeros agentes infectados se distribuyen de manera aleatoria en la ciudad.', 'siscovid');?></p>
              <p><?php _e('Los agentes que se recuperaron del virus no pueden infectarse nuevamente.', 'siscovid');?></p>
              <h5><?php _e('Variables de salida','siscovid');?></h5>
              <p><?php _e('Las variables de salida se pueden analizar para diferentes grupos de edad y zonas o localidades.', 'siscovid');?></p>
              
              <!-- page 5 -->
              <ul class="bullet-list animate">
                <li><?php _e('Proporción de agentes por condición (susceptibles, infectados que requieren hospitalización y que requieren cuidados intensivos, recuperados, muertos).', 'siscovid');?></li>
                <li><?php _e('Tasa de ataque.', 'siscovid');?></li>
              </ul>
            </div>
            
            <div class="light-background">
              <h5><?php _e('Escenarios','siscovid');?></h5>
              <div class="padded-block escenarios">
                <h6 class="escenario"><?php _e('Escenario 1','siscovid');?></h6>
                <p><?php _e('Línea Base. Movilidad de todos los agentes sin restricción.', 'siscovid');?></p>
                <h6 class="escenario"><?php _e('Escenario 2','siscovid');?></h6>
                <p><?php _e('Aislamiento social obligatorio por diferentes días de cuarentena y diferentes intervalos de la misma.', 'siscovid');?></p>
                <p><?php _e('Supuestos:', 'siscovid');?></p>
                <ul class="bullet-list animate">
                  <li><?php _e('Un porcentaje de la población mantiene la movilidad sin restricciones de acuerdo a los datos de cada ciudad.', 'siscovid');?></li>
                </ul>
                <h6 class="escenario"><?php _e('Escenario 3','siscovid');?></h6>
                <p><?php _e('Pruebas de testeo aleatorio a través de diferentes estrategias:', 'siscovid');?></p>
                <ul class="bullet-list animate">
                  <li><?php _e('Testeo aleatorio a toda la población para hacer monitorio de la epidemia.', 'siscovid');?></li>
                  <li><?php _e('Testeo a los contactos de los infectados críticos(hospitalizados) y graves (UCI).', 'siscovid');?></li>
                  <li><?php _e('Testeo aleatorio a la población y testeo a los contactos de los infectados críticos(hospitalizados) y graves (UCI).', 'siscovid');?></li>
                  <li><?php _e('Testeo aleatorio a la población. Una vez identificados los infectados se realiza testeo a los contactos de los infectados.', 'siscovid');?></li>
                </ul>
                <p><?php _e('El testeo implica un retraso de dos días en conocer los resultados de la prueba. Si un individuo da positivo en la prueba, inmediatamente se va a cuarentena por 14 días.', 'siscovid');?></p>
                <h6 class="escenario"><?php _e('Escenario 4','siscovid');?></h6>
                <ul class="bullet-list animate">
                  <li><?php _e('Medidas de aislamiento parcial y/o escalonadas en el tiempo.','siscovid');?></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="model-part references light-shade-background">
            <!-- page 6 -->
            <h4><?php _e('Referencias','siscovid');?></h4>
            <ol class="numbered-list animate">
              <li class="citation"><?php _e('Departamento Administrativo Nacional de Estadística - DANE. Proyecciones de población [Internet]. Población y Demografía. 2020 [cited 2020 Mar 24]. Available from: https://www.dane.gov.co/index.php/estadisticas-por-tema/demografia-y-poblacion/proyecciones-de-poblacion', 'siscovid');?></li>
              <li class="citation"><?php _e('Secretaría Distrital de Movilidad. Prudencia Bogotá - Sistema Integrado de Información sobre Movilidad Urbana [Internet]. Encuesta de movilidad 2019. 2019 [cited 2020 Mar 24]. Available from: https://www.simur.gov.co/portal-simur/datos-del-sector/encuestas-de-movilidad/', 'siscovid');?></li>
              <li class="citation"><?php _e('Ferguson NM, Laydon D, Nedjati-Gilani G, Imai N, Ainslie K, Baguelin M, et al. Impact of non-pharmaceutical interventions (NPIs) to reduce <span class="color-green">COVID-19</span> mortality and healthcare demand [Internet]. 2020 [cited 2020 Mar 24]. Available from: https://doi.org/10.25561/77482', 'siscovid');?></li>
              <li class="citation"><?php _e('Verity R, Okell LC, Dorigatti I, Winskill P, Whittaker C, Imai N, et al. Estimates of the severity of <span class="color-green">COVID-19</span> disease. medRxiv. 2020;2020.03.09.20033357.', 'siscovid');?></li>
              <li class="citation"><?php _e('World Health Organization (WHO). Report of the WHO-China Joint Mission on Coronavirus Disease 2019 ( <span class="color-green">COVID-19</span> ) [Internet]. Vol. 2019, Report of the WHO-China Joint Mission. 2020. Available from: https://www.google.com/url?sa=t&source=web&rct=j&url=https://www.who.int/docs/default-source/coronaviruse/who-china-joint-mission-on-covid-19-final-report.pdf&ved=2ahUKEwiFr5KrppToAhWFdn0KHbRWABIQFjAAegQIBxAC&usg=AOvVaw1gO_RTfaIWQuEkjdvq_O7i', 'siscovid');?></li>
            </ol>
          </div>
        </div>

        <div class="model metapoblacional hidden">
          <h3><?php _e('Modelo Metapoblacional','siscovid');?></h3>
          <p><?php _e('Nos basamos en el clásico modelo SEIR (Susceptible, Expuesto, Infectado, Removido) e hicimos algunas modificaciones. Dividimos el grupo de infectados en dos: diagnosticados (I1) y no diagnosticados (A). Esto se debe a que se estima que los no diagnosticados juegan un papel fundamental en las dinámicas de la infección. De estos dos grupos pasan a hospitalización (I2) y de hospitalizados a la unidad de cuidados intensivos (I3) y finalmente a muertos (D). Para las poblaciones en A, I1, I2 e I3 existe una tasa de recuperación.','siscovid');?></p>
          <h4><?php _e('Modelo','siscovid');?></h4>
          <div class="model-image-container">
            <div class="animation-overlay"></div>
            <img src="/wp-content/uploads/methodology-poblacional-1.jpg" alt="<?php _e('Imagen modelo metapoblacional 1','siscovid')?>">
          </div>
          <p><?php _e('Una de las hipotesis que tenemos es que modelar ciudades completas con el mismo modelo quizas no da suficiente información para tomar decisiones más específicas. Por eso estamos trabajando en realizar modelos más específicos por localidad ya que pensamos que cada localidad tiene sus propias dinámicas. En el caso de Bogotá es evidente que en el suroccidente de la ciudad en las localidades de Kennedy y Engativa el contagio es mucho mayor que en otras localidades. Sin embargo existe un flujo entre las localidades que los simulamos de la siguiente forma.','siscovid');?></p>
          <img class="animate" src="/wp-content/uploads/methodology-poblacional-2.jpg" alt="<?php _e('Imagen modelo metapoblacional 2','siscovid')?>">
          <p><?php _e('Como se puede ver en la figura, el flujo solo se da entre los susceptibles, los expuestos, los recuperados y los que no han sido diagnosticados. Las ecuacioines que describen los modelos son las siguientes.','siscovid')?><p>
          <p><?php _e('Para un nodo determinado i:','siscovid');?></p>
          <p>$$ {dS \over dt} =  -\beta*S + S_{in} - S_{out} $$</p>
          <p>$$ {dE \over dt} =  \beta*S - {\phi\kappa E \over \omega} - {(1-\phi)(1-\kappa)E \over \omega} + E_{in} - E_{out} $$</p>
          <p>$$ {dA \over dt} =  {(1-\phi)(1-\kappa)E\over\omega} - {\rho_1 A\over\lambda_1} - {(1-\rho_1)A\over\gamma_1} + A_{in} - A{out} $$</p>
          <p>$$ {dI_1 \over dt} = {\phi\kappa E\over\omega} - {\rho_1I_1\over\lambda_1} - {(1-\rho_1)I_1\over\gamma_1}$$</p>
          <p>$$ {dI_2 \over dt} = {\rho_1A\over\lambda_1} + {\rho_1I_1\over\lambda_1} - {\rho_2I_2\over\lambda_2} - {(1-\rho_2)I_2\over\gamma_2} $$</p>
          <p>$$ {dI_23 \over dt} = {\rho_2I_2\over\lambda_2} - {\rho_3I_3\over\lambda_3} - {(1-\rho_3)I_3\over\gamma_3}$$</p>
          <p>$$ {dR \over dt} = {(1-\rho_1)A\over\gamma_1} + {(1-\rho_1)I_1\over\gamma_1} + {(1-\rho_2)I_2\over\gamma_2} + {(1-\rho_3)I_3\over\gamma_3} + R_{in} - R_{out}$$</p>
          <p>$$ {dD \over dt} = {\rho_3I_3\over\lambda_3}$$</p>
          <p>$$ \beta^* = \beta\left({\sigma_AA+\sigma_1I_1+\sigma_2I_2+\sigma_3I_3\over{N-D}}\right)$$</p>
          <!-- <img style="width: 514px;" src="/wp-content/uploads/methodology-poblacional-3.jpeg" alt="<?php _e('Imagen modelo metapoblacional 3','siscovid')?>"> -->
          <p><?php _e('Estos son los parámetros que estamos utilizando.','siscovid');?></p>
          <div class="parameter-table-container">
            <table id="parameters" class="parameters-table fist-part"> 
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
                <td class="mjx-units">$$prob.contagio*{contactos\over dia}$$</td>
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
                <td>0.1</td>
                <td>-</td>
              </tr>
              <tr>
                <td>$$\sigma_3$$</td>
                <td><?php _e('Efecto aislamiento en UCI','siscovid')?></td>
                <td>0.1</td>
                <td>-</td>
              </tr>
            </table>
            <table id="parameters-2" class="parameters-table second-part">
              <tr class="header">
                <th><?php _e('Variable / Parámetro','siscovid')?></th>
                <th><?php _e('Significado','siscovid')?></th>
                <th><?php _e('Valor','siscovid')?></th>
                <th><?php _e('Unidades','siscovid')?></th>
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

        <div class="model intervenciones hidden">
          <div class="title-container">
            <h3><?php _e('Intervenciones','siscovid');?></h3>
          </div>
          <div class="intervencion-container intervencion-alta-probabilidad light-background">
            <h4><?php _e('Cierre de zonas de alta probabilidad de transmisión','siscovid');?></h4>
            <div class="content-container d-flex justify-content-center align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('Restricción de la movilidad en sectores detectados con alta probabilidad de transmisión','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('5% de movilidad por motivos de fuerza mayor','siscovid');?></li>
                  <li><?php _e('10% de movilidad por motivos de fuerza mayor','siscovid');?></li>
                  <li><?php _e('15% de movilidad por motivos de fuerza mayor','siscovid');?></li>
                  <li><?php _e('Sin restricción en la movilidad','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-1.jpeg" alt="<?php _e('Foto temporal intervenciones 1','siscovid');?>">
              </div>
            </div>

          </div>
          <div class="intervencion-container intervencion-sectores-economicos light-shade-background">
            <h4><?php _e('Horarios escalonados <span class="uppercase">por sectores econónicos</span>','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('Establecimiento de horarios de trabajo para los sectores productivos, de manera que el flujo de personas se distribuya en las franjas horarias.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('Todos los sectores productivos movilizándose en horarios habituales','siscovid');?></li>
                  <li><?php _e('Sólo sectores esenciales','siscovid');?></li>
                  <li><?php _e('Sectores esenciales + construcción y manufactura','siscovid');?></li>
                  <li><?php _e('Sectores esenciales + construcción y manufactura + comercio','siscovid');?></li>
                  <li><?php _e('Escenarios propuestos por tomadores de decisiones','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-2.jpeg" alt="<?php _e('Foto temporal intervenciones 2','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-zonas light-background">
            <h4><?php _e('Horarios escalonados <span class="uppercase">por zonas</span>','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('Establecimiento de horarios de trabajo diferenciado por zonas de trabajo, de manera que el flujo de personas se distribuya en las franjas horarias.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('Todas las localidades/barrios movilizándose en horarios habituales','siscovid');?></li>
                  <li><?php _e('Localidades/barrios a distintos horarios','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-3.jpeg" alt="<?php _e('Foto temporal intervenciones 3','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-transporte light-shade-background">
            <h4><?php _e('Transporte activo (% de aumento de los viajes)','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('El aumento del uso de la bicicleta disminuye la probabilidad de infección en modos de transporte público. El aumento del transporte activo ha sido una alternativa en ciudades de América Latina.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('3% de aumento en transporte activo','siscovid');?></li>
                  <li><?php _e('5% de aumento en transporte activo','siscovid');?></li>
                  <li><?php _e('10% de aumento en transporte activo','siscovid');?></li>
                  <li><?php _e('Porcentaje actual en transporte activo','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-4.jpeg" alt="<?php _e('Foto temporal intervenciones 4','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-jardines light-background">
            <h4><?php _e('Apertura de jardines infantiles y guarderías (1-5)','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('La población menor de 5 años retoma actividades. Tiene alto riesgo alimentario y de violencia intrafamiliar, así como poca socialización.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('50% de los niños salen de sus casas a las guarderías o preescolar','siscovid');?></li>
                  <li><?php _e('70% de los niños salen de sus casas a las guarderías o preescolar','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-5.jpeg" alt="<?php _e('Foto temporal intervenciones 5','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-primaria light-shade-background">
            <h4><?php _e('Apertura de primaria (5-13)','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('Se movilizan los estudiantes del grupo etario de 5 a 13 años. Se usan los datos de uso de transporte público en las encuestas de movilidad.','siscovid');?></p>
                <h5 class="hidden"><?php _e('Escenarios: ','siscovid');?></h5>
                <p class="hidden"><?php _e('Movilización y contacto de este grupo etario, disminuyendo su probabilidad de transmisión a...','siscovid');?></p>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-6.jpeg" alt="<?php _e('Foto temporal intervenciones 6','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-universidad light-background">
            <h4><?php _e('Apertura de Universidades y Bachillerato','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('Se movilizan los estudiantes de bachillerato y universidades. Se usan los datos de uso de transporte público en las encuestas de movilidad para estos grupos.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('100% de la población de bachillerato sale de su vivienda y 25% de la población universitaria','siscovid');?></li>
                  <li><?php _e('100% de la población de bachillerato sale de su vivienda y 50% de la población universitaria','siscovid');?></li>
                  <li><?php _e('100% de la población de bachillerato sale de su vivienda y 70% de la población universitaria','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-7.jpeg" alt="<?php _e('Foto temporal intervenciones 7','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-continuar light-shade-background">
            <h4><?php _e('Continuar cuarentena de personas mayores de 60 años','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('Inmovilizar a la población mayor a 60 años, que son quienes presentan multicomorbilidades.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('Esta población se moviliza una vez al día al interior de su unidad espacial','siscovid');?></li>
                  <li><?php _e('Esta población se moviliza de manera normal','siscovid');?></li>
                  <li><?php _e('Movilización total de esta población','siscovid');?></li>
                </ul>
              </div>
              <div class="image-container">
                <img class="animate-flip" src="/wp-content/uploads/methodology-intervenciones-8.jpeg" alt="<?php _e('Foto temporal intervenciones 8','siscovid');?>">
              </div>
            </div>
          </div>
          <div class="intervencion-container intervencion-seguimiento light-background">
            <h4><?php _e('Seguimiento y aislamiento de contactos','siscovid');?></h4>
            <div class="content-container d-flex justify-content-between align-items-center">
              <div class="text-container">
                <h5><?php _e('¿En qué consiste?','siscovid');?></h5>
                <p><?php _e('El adecuado seguimiento y aislamiento de contactos de personas positivas ha demostrado ser la estrategia más efectiva para mitigar y controlar la propagación de la enfermedad.','siscovid');?></p>
                <h5><?php _e('Escenarios: ','siscovid');?></h5>
                <ul class="animate">
                  <li><?php _e('Se logra hacer seguimiento y aislamiento efectivo al 50% de los contactos de personas positivas','siscovid');?></li>
                  <li><?php _e('Se logra hacer seguimiento y aislamiento efectivo al 30% de los contactos de personas positivas','siscovid');?></li>
                  <li><?php _e('Se logra hacer seguimiento y aislamiento efectivo al 15% de los contactos de personas positivas','siscovid');?></li>
                </ul>
              </div>
              <!-- <div class="image-container">
              </div> -->
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>