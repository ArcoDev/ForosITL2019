/* ESPERAR A CARGAR EL HTML*/
(function () {
  "use strict";
  /*******************************************************************************************************/
  /*                                       API PARA MAPA                                                 */
  /*******************************************************************************************************/
  document.addEventListener('DOMContentLoaded', function () {
    var map = L.map('mapa').setView([25.532761, -103.435818], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([25.532761, -103.435818]).addTo(map)
      .bindPopup('Instituto Tecnologico De La Laguna.<br> Foros ITL 2019')
      .openPopup();
  });
  /*******************************************************************************************************/
  /*                                       V A R I A B L E S                                             */
  /*******************************************************************************************************/
  //VARIABLE DEL REGALO 
  var regalo = document.getElementById('regalo');
  /* CREACION DE LAS VARIABLES DE LOS CAMPOS DEL REGISTRO */
  //CAMPOS DATOS USUARIO 
  var nombre = document.getElementById('nombre');
  var apellido = document.getElementById('apellido');
  var email = document.getElementById('email')
  // CAMPOS PASES 
  var pase_dia = document.getElementById('pase_dia');
  var pase_dosdias = document.getElementById('pase_dosdias');
  var pase_completo = document.getElementById('pase_completo');

  //BOTONES Y DIVS 
  var calcular = document.getElementById('calcular');
  var errorDiv = document.getElementById('error');
  var botonRegistro = document.getElementById('btnRegistro');
  var lista_productos = document.getElementById('lista-productos');
  var suma = document.getElementById('suma-total');

  //EXTRAS 
  var camisas = document.getElementById('camisa_evento');
  var etiquetas = document.getElementById('etiquetas');

  //CREAR EL EVENTO PARA CALCULAR LA CANTIDAD DE BOLETOS
  if (document.getElementById('calcular')) {

    calcular.addEventListener('click', calcularMontos);

    //CREAR EVENTO blur PARA MOSTRAR LOS DIAS (DEPENDIENDO DE LA SELEECION DEL PASE DEL USUARIO)
    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);

    //CREAR EVENTOS PARA VALIDAREL FORMULARIO DEL USUARIO.
    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);
    /******************************************************************************************************/
    /*                                      F U N C I O N E S                                             */
    /******************************************************************************************************/
    // FUNCION PARA LA VALIDACION DE LOS INPUT DEL REGISTRO DEL USUARIO (NOMBRE, APELLIDO Y CORREO) QUE NO ESTE VACIO.
    function validarCampos() {
      if (this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "Este campo es obligatorio!!!";
        this.style.border = '1px solid #fe4918';
        errorDiv.style.textAlign = 'center';
        errorDiv.style.border = '1px solid #fe4918';
        errorDiv.style.color = 'white';
        errorDiv.style.background = '#fe4918';
      } else {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }
    //FUNCION PARA VALIDAR EL EMAIL 
    function validarMail() {
      if (this.value.indexOf("@") > -1) {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      } else {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "El campo email debe contener un @";
        this.style.border = '1px solid #fe4918';
        errorDiv.style.textAlign = 'center';
        errorDiv.style.border = '1px solid #fe4918';
        errorDiv.style.color = 'white';
        errorDiv.style.background = '#fe4918';
      }
    }
    // FUNCION PARA CALCULAR LOS MONTOS DE LA SELECCION DE PASES DEL USUARIO
    function calcularMontos() {
      /*SENTENCIA PARA VERIFICAR QUE EL USUARIO HALLA ESCOGIDO UN REGALO Y ASI PUEDA CONTINUAR CON EL EVENTO DE CALCULAR*/
      if (regalo.value === '') {
        alert("Debes elegir un regalo para continuar");
        regalo.focus();
      } else {
        var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
          boletoCompleto = parseInt(pase_completo.value, 10) || 0,
          cantCamisas = parseInt(camisas.value, 10) || 0,
          cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

        //CALCULAR EL TOTAL DEL BOLETO POR DIA 
        var totalBoletoDia = (boletosDia * 30);
        //CALCULAR EL TOTAL DEL BOLETO POR 2 DIAS
        var totalBoletoDosDias = (boletos2Dias * 45);
        //CALCULAR EL TOTAL DEL BOLETO COMPLETO
        var totalBoletoCompleto = (boletoCompleto * 50);
        //CALCULAR EL TOTAL CON SU DESCUENTO DEL EXTRA(CAMISAS)
        var totalCamisas = ((cantCamisas * 10) * .93);
        //CALCULAR EL TOTAL CON SU DESCUENTO DEL EXTRA(ETIQUETAS)
        var totalEtiquetas = ((cantEtiquetas * 2))

        var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) +
          ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

        //CREACION DEL LISTADO DEL RESUMEN (PRODUCTOS)
        var listadoProductos = [];
        if (boletosDia === 1) {
          listadoProductos.push(boletosDia + ' Pase por dia' + " $ " + totalBoletoDia);
        } else if (boletosDia >= 1) {
          listadoProductos.push(boletosDia + ' Pases por dia' + " $ " + totalBoletoDia);
        }
        if (boletos2Dias === 1) {
          listadoProductos.push(boletos2Dias + ' Pase por 2 días ' + " $ " + totalBoletoDosDias);
        } else if (boletos2Dias >= 1) {
          listadoProductos.push(boletos2Dias + ' Pases por 2 días' + " $ " + totalBoletoDosDias);
        }
        if (boletoCompleto === 1) {
          listadoProductos.push(boletoCompleto + ' Pase Completos' + " $ " + totalBoletoCompleto);
        } else if (boletoCompleto >= 1) {
          listadoProductos.push(boletoCompleto + ' Pases Completos' + " $ " + totalBoletoCompleto);
        }
        //EXTRAS
        if (cantCamisas === 1) {
          listadoProductos.push(cantCamisas + ' Camisa' + " $ " + totalCamisas);
        } else if (cantCamisas >= 1) {
          listadoProductos.push(cantCamisas + ' Camisas' + " $ " + totalCamisas);
        }
        if (cantEtiquetas === 1) {
          listadoProductos.push(cantEtiquetas + ' Paquete de etiquetas' + " $ " + totalEtiquetas);
        } else if (cantEtiquetas >= 1) {
          listadoProductos.push(cantEtiquetas + ' Paquetes de etiquetas' + " $ " + totalEtiquetas);
        }
        lista_productos.style.display = "block";

        //CICLO FOR PARA IMPRIMIR EL ARREGLO DEL RESUMEN DE SELECCION DEL USUARIO 
        lista_productos.innerHTML = '';
        for (var i = 0; i < listadoProductos.length; i++) {
          lista_productos.innerHTML += listadoProductos[i] + '<br/>';
        }
        //REALIZAR LA SUMA TOTAL DE LA SELECCION DE LA COMPRA DEL USUARIO 
        suma.innerHTML = "$ " + totalPagar.toFixed(2);
      }
    }
    //METODO PARA MOSTRAR Y OCULTAR LA SECCION DE DIAS (DEPENDIENDO DEL BOLETO QUE SELECCIONE EL USUARIO)
    function mostrarDias() {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
        boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
        boletoCompleto = parseInt(pase_completo.value, 10) || 0;
      var diasElegidos = [];
      if (boletosDia > 0) {
        diasElegidos.push('viernes');
      }
      if (boletos2Dias > 0) {
        diasElegidos.push('viernes', 'sabado');
      }
      if (boletoCompleto > 0) {
        diasElegidos.push('viernes', 'sabado', 'domingo');
      }
      //SETEAR LOS VALOS DEL ARREGLO PARA QUE AL MOMENTO DE QUE ESTE EN 0 NO MUESTRE LOS DIAS CORRESPONDIENTES
      //HASTA QUE SE CUMPLA LA SENTENCIA IF 
      document.getElementById('viernes').style.display = 'none';
      document.getElementById('sabado').style.display = 'none';
      document.getElementById('domingo').style.display = 'none';
      for (var i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = 'block';
      }
    }
  }
})(); // DOM CONTENT LOADED
/*******************************************************************************************************/
/*                                  AGREGAR JQUERY EN EL PROYECTO                                      */
/*******************************************************************************************************/
$(function () {
  //MANTENER FIJO EL MENU AL HACER SCROLL
  var barraAltura = $('.barra').innerHeight();
  var offset = $('.barra').offset();
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > offset.top) {
      $('.barra').addClass('fixed');
      $('body').css({
        'margin-top': barraAltura + 'px'
      });
    } else {
      $('.barra').removeClass('fixed');
      $('body').css({
        'margin-top': 0 + 'px'
      });
    }
  });
  //MENU RESPONSIVO 
  $('.menu-movil').on('click', function () {
    $('.navegacion-principal').slideToggle();
  });
  //PROGRAMA DE CONFERENCIAS  TABS DE NAVEGACION EN EL CONTENIDO DEL PROGRAMA
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');

  $('.menu-programa a').on('click', function () {
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(2000);
    return false;
  });
  //ANIMACIONES PARA LOS NUMEROS DE LA SECCION DE RESUMEN DEL EVENTO
  var resumenLista = jQuery('.resumen-evento');
  if (resumenLista.length > 0) {
    $('.resumen-evento').waypoint(function () {
      $('.resumen-evento li:nth-child(1) p').animateNumber({
        number: 6
      }, 1400);
      $('.resumen-evento li:nth-child(2) p').animateNumber({
        number: 15
      }, 1400);
      $('.resumen-evento li:nth-child(3) p').animateNumber({
        number: 3
      }, 1500);
      $('.resumen-evento li:nth-child(4) p').animateNumber({
        number: 9
      }, 1400);
    }, {
      offset: '60%'
    });
  }
  //ANIMACION PARA LOS NUMEROS DE LA SECCION DE LA CUENTA REGRESIVA 
  $('.cuenta-regresiva').countdown('2019/11/07 09:00:00', function (event) {
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });
});
