<!--creacion del include para ordenar todo mediante php-->
<?php include_once 'includes/templates/header.php'; ?>
</section>
<!--INICIO ENCABEZADO PRINCIPAL-->
<section class="seccion contenedor">
  <h2>Los mejores taller y conferencias de la comarca lagunera.</h2>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit iste consequatur quis quidem,
    ab rem aliquam in debitis corrupti perspiciatis laborum eligendi quae, porro obcaecati veniam,
    delectus maxime! Incidunt, laboriosam?
  </p>
</section>
<!--FIN ENCABEZADO PRINCIPAL-->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INCIO SECCION PROGRAMA DEL EVENTO-->
<section class="programa">
  <div class="contenedor-video">
    <!--INICIO VIDEOS DE FONDO-->
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogv">
    </video>
  </div>
  <!--FIN CLASE CONTENEDOR-VIDEO-->
  <div class="contenido-programa">
    <!--INICIO CLASE CONTENIDO PROGRAMA-->
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del evento</h2>
        <nav class="menu-programa">
          <a href="#talleres"><i class=" icoevento fa fa-code" aria-hidden="true" title="Talleres"></i>Talleres</a>
          <a href="#conferencias"><i class="icoevento fa fa-comment" aria-hidden="true"
              title="Conferencias"></i>Conferencias</a>
          <a href="#seminarios"><i class="icoevento fa fa-university" aria-hidden="true"
              title="Seminarios"></i>Seminarios</a>
        </nav>
        <!--FIN CLASE MENU-PROGRAMA-->
        <!--INICIO ID TALLERES-->
        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <!--INICIO CLASE DETALLE EVENTO-->
            <h3>HTML5, CSS3 y JavaScript</h3>
            <p><i class="icoevento fa fa-clock" title="Hora"></i> 16:00 hrs</p>
            <p><i class="icoevento fa fa-calendar-alt" title="Fecha"></i> 10 Nov</p>
            <p><i class="icoevento fa fa-user" title="Autor"></i> Christian Osvaldo Acosta Ramírez</p>
          </div>
          <!--FIN CLASE DETALLE EVENTO-->
          <div class="detalle-evento">
            <!--INICIO CLASE DETALLE EVENTO-->
            <h3>Responsive Web Design</h3>
            <p><i class="icoevento fa fa-clock" title="Hora"></i> 20:00 hrs</p>
            <p><i class="icoevento fa fa-calendar-alt" title="Fecha"></i> 10 Nov</p>
            <p><i class="icoevento fa fa-user" title="Autor"></i> Christian Osvaldo Acosta Ramírez</p>
          </div>
          <!--FIN CLASE DETALLE EVENTO-->
          <a href="" class="button float-right">Ver Todos</a>
        </div>
        <!--FIN ID TALLERES-->
        <!--INICIO ID CONFERENCIAS-->
        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <!--INICIO CLASE DETALLE EVENTO-->
            <h3>Como ser Freelancer</h3>
            <p><i class="icoevento fa fa-clock" title="Hora"></i> 10:00 hrs</p>
            <p><i class="icoevento fa fa-calendar-alt" title="Fecha"></i> 10 Nov</p>
            <p><i class="icoevento fa fa-user" title="Autor"></i> Rodrigo Medina</p>
          </div>
          <!--FIN CLASE DETALLE EVENTO-->
          <div class="detalle-evento">
            <!--INICIO CLASE DETALLE EVENTO-->
            <h3>Tecnologiaas del futuro</h3>
            <p><i class="icoevento fa fa-clock" title="Hora"></i> 1:00 hrs</p>
            <p><i class="icoevento fa fa-calendar-alt" title="Fecha"></i> 10 Nov</p>
            <p><i class="icoevento fa fa-user" title="Autor"></i> Teresita Onofre</p>
          </div>
          <!--FIN CLASE DETALLE EVENTO-->
          <a href="" class="button float-right">Ver Todos</a>
        </div>
        <!--FIN ID TALLERES-->
        <!--INICIO ID SEMINARIOS-->
        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <!--INICIO CLASE DETALLE EVENTO-->
            <h3>Diseño UI/UX para móviles</h3>
            <p><i class="icoevento fa fa-clock" title="Hora"></i> 18:00 hrs</p>
            <p><i class="icoevento fa fa-calendar-alt" title="Fecha"></i> 10 Nov</p>
            <p><i class="icoevento fa fa-user" title="Autor"></i> Carina Acosta</p>
          </div>
          <!--FIN CLASE DETALLE EVENTO-->
          <div class="detalle-evento">
            <!--INICIO CLASE DETALLE EVENTO-->
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="icoevento fa fa-clock" title="Hora"></i> 12:00 hrs</p>
            <p><i class="icoevento fa fa-calendar-alt" title="Fecha"></i> 10 Nov</p>
            <p><i class="icoevento fa fa-user" title="Autor"></i> Christian Osvaldo Acosta Ramírez</p>
          </div>
          <!--FIN CLASE DETALLE EVENTO-->
          <a href="" class="button float-right">Ver Todos</a>
        </div>
        <!--FIN ID SEMINARIOS-->
      </div>
    </div>
  </div>
  <!--FIN CLASE CONTENIDO PROGRAMA-->
</section>
<!--FIN SECCION PROGRAMA -->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INICIO SECCION INVITADOS-->
<section class="invitados contenedor seccion">
  <h2>Nuestros Invitados</h2>
  <ul class="lista-invitados clearfix">
    <li>
      <!--INVITADO 1-->
      <div class="invitado">
        <img src="img/invitado1.jpg" alt="Christian Acosta">
        <p>Christian Acosta</p>
      </div>
      <!--FIN CLASE INVITADO-->
    </li> <!-- FIN INVITADO 1-->
    <li>
      <!--INVITADO 2-->
      <div class="invitado">
        <img src="img/invitado2.jpg" alt="Teresita Onofe">
        <p>Teresita Onofre</p>
      </div>
      <!--FIN CLASE INVITADO-->
    </li><!-- FIN INVITADO 2-->
    <li>
      <!--INVITADO 3-->
      <div class="invitado">
        <img src="img/invitado3.jpg" alt="Manuel Acosta">
        <p>Manuel Acosta</p>
      </div>
      <!--FIN CLASE INVITADO-->
    </li><!-- FIN INVITADO 3-->
    <li>
      <!--INVITADO 4-->
      <div class="invitado">
        <img src="img/invitado4.jpg" alt="Carina Acosta">
        <p>Carina Acosta</p>
      </div>
      <!--FIN CLASE INVITADO-->
    </li><!-- FIN INVITADO 4-->
    <li>
      <!--INVITADO 5-->
      <div class="invitado">
        <img src="img/invitado5.jpg" alt="Rodrigo Medina">
        <p>Rodrigo Medina</p>
      </div>
      <!--FIN CLASE INVITADO-->
    </li><!-- FIN INVITADO 5-->
    <li>
      <!--INVITADO 6-->
      <div class="invitado">
        <img src="img/invitado6.jpg" alt="Coco Medina">
        <p>Coco Medina</p>
      </div>
      <!--FIN CLASE INVITADO-->
    </li><!-- FIN INVITADO 6-->
  </ul>
  <!--FIN CLASE LISTA-INVITADOS-->
</section>
<!--FIN SECCION INVITADOS-->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INICIO SECCION CONTADOR-->
<section>
  <h2>Resumen Evento</h2>
  <div class="contador parallax">
    <!--INICIO CLASE CONTADOR-->
    <div class="contenedor">
      <!--INICIO CLASE CONTENEDOR-->
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero">0</p>Invitados
        </li>
        <li>
          <p class="numero">0</p>Talleres
        </li>
        <li>
          <p class="numero">0</p>Días
        </li>
        <li>
          <p class="numero">0</p>Conferencias
        </li>
      </ul>
    </div>
    <!--INICIO CLASE CONTENEDOR-->
  </div>
  <!--FIN CLASE CONTADOR-->
</section>
<!--FIN SECCION CONTADOR-->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INICIO CLASE PRECIOS-->
<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <!--INICIO CLASE CONTENEDOR-->
    <ul class="lista-precios clearfix">
      <!--INICIO CALSE LISTA-PRECIOS-->
      <li>
        <!--TABLA 1-->
        <div class="tabla-precio">
          <!--INICIO CLASE TABLA-PRECIOS-->
          <h3>Pase por día</h3>
          <p class="numero">$30</p>
          <ul>
            <li><span class=" paloma fas fa-check"></span>Bocadillos Gratis</li>
            <li><span class=" paloma fas fa-check"></span>Todas las Conferencias</li>
            <li><span class=" paloma fas fa-check"></span>Todos los talleres</li>
          </ul>
          <a href="" class="button2 hollow">Comprar</a>
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
          <a href="" class="button2">Comprar</a>
        </div>
        <!--FIN CALSE TABLAS-PRECIOS-->
      </li>
      <!--FIN TABLA 2-->
      <li>
        <!--TABLA 3-->
        <div class="tabla-precio">
          <!--INICIO CLASE TABLA-PRECIOS-->
          <h3>Pase por 2 días</h3>
          <p class="numero">$45</p>
          <ul>
            <li><span class=" paloma fas fa-check"></span>Bocadillos Gratis</li>
            <li><span class=" paloma fas fa-check"></span>Todas las Conferencias</li>
            <li><span class=" paloma fas fa-check"></span>Todos los talleres</li>
          </ul>
          <a href="" class="button2 hollow">Comprar</a>
        </div>
        <!--FIN CALSE TABLAS-PRECIOS-->
      </li>
      <!--FIN TABLA 3-->
    </ul>
    <!--FIN CALSE LISTA-PRECIO-->
  </div>
  <!--FIN CALASE CONTENEDOR-->
</section>
<!--FIN CLASE PRECIOS-->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INICIO SECCION MAPA-->
<section>
  <h2>Ubicacion</h2>
  <div id="mapa" class="mapa">
  </div>
</section>
<!--FIN SECCION MAPA-->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INICIO SECCION TESTIMONIALES-->
<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <!--INICIO CLASE TESTIMONIAL-->
      <blockquote cite="">
        <p>corporis porro perferendis dolores exercitationem assumenda, eaque reiciendis delectus dicta enim quaerat
          et sapiente fuga. Non, corrupti!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="testimonial">
          <cite>Oswaldo Valdez Martinez<span>Mestro @ITL</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--FIN CLASE TESTIMONIAL-->
    <div class="testimonial">
      <!--INICIO CLASE TESTIMONIAL 2-->
      <blockquote cite="">
        <p>corporis porro perferendis dolores exercitationem assumenda, eaque reiciendis delectus dicta enim quaerat
          et sapiente fuga. Non, corrupti!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="testimonial">
          <cite>Oswaldo Valdez Martinez<span>Mestro @ITL</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--FIN CLASE TESTIMONIAL 2-->
    <div class="testimonial">
      <!--INICIO CLASE TESTIMONIAL 3-->
      <blockquote cite="">
        <p>corporis porro perferendis dolores exercitationem assumenda, eaque reiciendis delectus dicta enim quaerat
          et sapiente fuga. Non, corrupti!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="testimonial">
          <cite>Oswaldo Valdez Martinez<span>Mestro @ITL</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--FIN CLASE TESTIMONIAL 3-->
  </div>
</section>
<!--FIN SECCION TESTIMONIALES-->
<!---------------------------------------------------------------------------------------------------------------------->
<!--INICIO SECCION NEWSLETTER-->
<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Regístrate al newsletter:</p>
    <h3>foros itl 2019</h3>
    <a href="" class="button3 transparente">Registro</a>
  </div>
  <section class="seccion">
    <!--INCIO SECCION CUENTA-REGRESIVA-->
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>
          <p id="dias" class="numero"></p>días
        </li>
        <li>
          <p id="horas" class="numero"></p>horas
        </li>
        <li>
          <p id="minutos" class="numero"></p>minutos
        </li>
        <li>
          <p id="segundos" class="numero"></p>segundos
        </li>
      </ul>
    </div>
  </section>
  <!--FIN SECCION CUENTA-REGRESIVA-->
  <?php include_once 'includes/templates/footer.php'; ?>
