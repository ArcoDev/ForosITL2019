<!--creacion del include para ordenar todo mediante php-->
<?php include_once 'includes/templates/header.php'; ?>
<!--INICIO DE LA SECCION DE RESERVACION-->
<!--INICIO PARA EL REGISTRO DE USUARIOS-->
<section class="seccion contenedor">
  <h2>Registro de usuarios</h2>
  <form id="registro" class="registro" action="index.html" method="post">
    <div id="datos_usuarios" class="registro caja clearfix">
      <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" autocomplete="off" placeholder="Ingresa tu nombre">
      </div>
      <div class="campo">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" autocomplete="off" placeholder="Ingresa tu apellido">
      </div>
      <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" autocomplete="off" placeholder="Ingresa tu email">
      </div>
      <!--VALIDAR EL ERROR MEIDANTE JAVASCRIPT-->
      <div id="error"></div>
      <!--FINAL DEL FORMULARIO DEL REGISTRO DE USUARIO-->
    </div>
    <!--INICIO CAJA DE PAQUETES-->
    <div id="paquetes" class="paquetes">
      <h3>Elige el número de boletos</h3>
      <ul class="lista-precios clearfix">
        <!--INICIO CALSE LISTA-PRECIOS-->
        <li>
          <!--TABLA 1-->
          <div class="tabla-precio">
            <!--INICIO CLASE TABLA-PRECIOS-->
            <h3>Pase por día (Viernes)</h3>
            <p class="numero">$30</p>
            <ul>
              <li><span class=" paloma fas fa-check"></span>Bocadillos Gratis</li>
              <li><span class=" paloma fas fa-check"></span>Todas las Conferencias</li>
              <li><span class=" paloma fas fa-check"></span>Todos los talleres</li>
            </ul>
            <div class="orden">
              <label for="pase_dia">Boletos deseados:</label>
              <input type="number" min="0" id="pase_dia" size="3" placeholder="0">
            </div>
          </div>
          <!--FIN CALSE TABLAS-PRECIOS-->
        </li><!-- FIN TABLA 1-->
        <li>
          <!--TABLA 2-->
          <div class="tabla-precio">
            <!--INICIO CLASE TABLA-PRECIOS-->
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li><span class=" paloma fas fa-check"></span>Bocadillos Gratis</li>
              <li><span class=" paloma fas fa-check"></span>Todas las Conferencias</li>
              <li><span class=" paloma fas fa-check"></span>Todos los talleres</li>
            </ul>
            <div class="orden">
              <label for="pase_completo">Boletos deseados:</label>
              <input type="number" min="0" id="pase_completo" size="3" placeholder="0">
            </div>
          </div>
          <!--FIN CALSE TABLAS-PRECIOS-->
        </li>
        <!--FIN TABLA 2-->
        <li>
          <!--TABLA 3-->
          <div class="tabla-precio">
            <!--INICIO CLASE TABLA-PRECIOS-->
            <h3>Pase por 2 días (Viernes y Sabado)</h3>
            <p class="numero">$45</p>
            <ul>
              <li><span class=" paloma fas fa-check"></span>Bocadillos Gratis</li>
              <li><span class=" paloma fas fa-check"></span>Todas las Conferencias</li>
              <li><span class=" paloma fas fa-check"></span>Todos los talleres</li>
            </ul>
            <div class="orden">
              <label for="pase_dosdias">Boletos deseados:</label>
              <input type="number" min="0" id="pase_dosdias" size="3" placeholder="0">
            </div>
          </div>
          <!--FIN CALSE TABLAS-PRECIOS-->
        </li>
        <!--FIN TABLA 3-->
      </ul>
    </div>
    <!--INICIO DE LA CAJA DE EVENTOS-->
    <div id="eventos" class="eventos clearfix">
      <h3>Elige tus talleres</h3>
      <div class="caja">
        <div id="viernes" class="contenido-dia clearfix">
          <h4>Viernes</h4>
          <div>
            <p>Talleres:</p>
            <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time>
              Responsive Web Design</label>
            <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time>
              Flexbox</label>
            <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y
              CSS3</label>
            <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time>
              Drupal</label>
            <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time>
              WordPress</label>
          </div>
          <div>
            <p>Conferencias:</p>
            <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser
              Freelancer</label>
            <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías
              del Futuro</label>
            <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en
              la Web</label>
          </div>
          <div>
            <p>Seminarios:</p>
            <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX
              para móviles</label>
          </div>
        </div>
        <!--#viernes-->
        <div id="sabado" class="contenido-dia clearfix">
          <h4>Sábado</h4>
          <div>
            <p>Talleres:</p>
            <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time>
              AngularJS</label>
            <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y
              MySQL</label>
            <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time>
              JavaScript Avanzado</label>
            <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en
              Google</label>
            <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De
              Photoshop a HTML5 y CSS3</label>
            <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP
              Medio y Avanzado</label>
          </div>
          <div>
            <p>Conferencias:</p>
            <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear
              una tienda online que venda millones en pocos días</label>
            <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores
              lugares para encontrar trabajo</label>
            <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para
              crear un negocio rentable</label>
          </div>
          <div>
            <p>Seminarios:</p>
            <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a
              Programar en una mañana</label>
            <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX
              para móviles</label>
          </div>
        </div>
        <!--#sabado-->
        <div id="domingo" class="contenido-dia clearfix">
          <h4>Domingo</h4>
          <div>
            <p>Talleres:</p>
            <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time>
              Laravel</label>
            <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu
              propia API</label>
            <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time>
              JavaScript y jQuery</label>
            <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando
              Plantillas para WordPress</label>
            <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas
              Virtuales en Magento</label>
          </div>
          <div>
            <p>Conferencias:</p>
            <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer
              Marketing en línea</label>
            <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que
              lenguaje debo empezar?</label>
            <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y
              librerias Open Source</label>
          </div>
          <div>
            <p>Seminarios:</p>
            <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una
              App en Android en una tarde</label>
            <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una
              App en iOS en una tarde</label>
          </div>
        </div>
        <!--#domingo-->
      </div>
      <!--.caja-->
    </div>
    <!--FIN DE LA CAJA DE EVENTOS-->
    <!--INCIO CAJA RESUMEN-->
    <div id="resumen" class="resumen">
      <h3>Pago y extras</h3>
      <div class="caja clearfix">
        <div class="extras">
          <div class="orden">
            <label for="camisa_evento">Camisa del evento $10 <small>(promocion 7% de dto)</small></label>
            <input type="number" min="0" id="camisa_evento" size="3" placeholder="0">
          </div>
          <div class="orden">
            <label for="etiquetas">Paquetes de 10 etiquetas $2 <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
            <input type="number" min="0" id="etiquetas" size="3" placeholder="0">
          </div>
          <div class="orden">
            <label for="regalo">Seleccione un regalo</label><br>
            <select id="regalo" required>
              <option value="">--Seleccione un regalo--</option>
              <option value="ETI">Etiquetas</option>
              <option value="PUL">Pulseras</option>
              <option value="PLU">Plumas</option>
            </select>
          </div>
          <!--BOTON PARA CALCULAR LA ORDEN-->
          <h4></h4>
          <input type="button" id="calcular" class="button2" value="Calcular">
        </div>
        <!--FIN CLASE EXTRAS-->
        <!--INICI CLASE TOTAL-->
        <div class="total">
          <p>Resumen:</p>
          <div id="lista-productos">

          </div>
          <p>Total:</p>
          <div id="suma-total">
          </div>
          <input id="btnRegistro" type="submit" class="button2" value="Pagar">
        </div>
        <!--FIN CLASE TOTAL-->
      </div>
    </div>
    <!--FIN CAJA RESUMEN-->
  </form>
</section>
</section>
<!--creacion del include para ordenar todo mediante php-->
<?php include_once 'includes/templates/footer.php'; ?>
