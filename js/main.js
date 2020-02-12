(function() {
    "use strict";
    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('mapa')) {
            var map = L.map('mapa').setView([-25.216483, -57.531474], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-25.216483, -57.531474]).addTo(map)
                .bindPopup('GDLWebCamp 2019. <br> Boletos ya disponibles')
                .openPopup()
                .bindTooltip('Un Tooltip')
                .openTooltip();
        }

        //Campos Datos Usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras
        var camisa_evento = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');
        if (document.getElementById('calcular')) {

            calcular.addEventListener('click', calcularMontos);

            pase_dia.addEventListener('blur', mostrarDias);
            pase_dosdias.addEventListener('blur', mostrarDias);
            pase_completo.addEventListener('blur', mostrarDias);

            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarMail);

            function validarCampos() {
                if (this.value == '') {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = 'Este campo es obligatorio';
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                } else {
                    this.style.border = '1px solid #cccccc'
                    if (nombre.value !== '' && apellido.value !== '' && email.value !== '') {
                        errorDiv.style.display = 'none';
                    }
                }
            }

            function validarMail() {
                if (this.value.indexOf("@") > -1) {
                    this.style.border = '1px solid #cccccc'
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = 'El mail debe tener al menos un @';
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                }
            }

            function calcularMontos(event) {
                event.preventDefault();
                if (regalo.value === "") {
                    alert('Debes elegir un regalo');
                    regalo.focus();
                } else {
                    var boletoDia = parseInt(pase_dia.value, 10) || 0,
                        boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
                        boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                        cantCamisas = parseInt(camisa_evento.value, 10) || 0,
                        cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                    var totalPagar = (boletoDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                    var listadoProductos = [];
                    if (boletoDia > 0) {
                        listadoProductos.push(boletoDia + ' pases por día');
                    }

                    if (boleto2Dias > 0) {
                        listadoProductos.push(boleto2Dias + ' pases por 2 días');
                    }

                    if (boletoCompleto > 0) {
                        listadoProductos.push(boletoCompleto + ' pases completos');
                    }

                    if (cantCamisas > 0) {
                        listadoProductos.push(cantCamisas + ' camisas');
                    }

                    if (cantEtiquetas > 0) {
                        listadoProductos.push(cantEtiquetas + ' pases completos');
                    }

                    lista_productos.style.display = 'block';

                    lista_productos.innerHTML = '';
                    for (var i = 0; i < listadoProductos.length; i++) {
                        lista_productos.innerHTML += listadoProductos[i] + '</br>';
                    }

                    suma.innerHTML = "$ " + totalPagar.toFixed(2);
                }
            } /* Función calcularMontos */

            function mostrarDias() {
                var boletoDia = parseInt(pase_dia.value, 10) || 0,
                    boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0;

                var diasElegidos = [];

                if (boletoDia > 0) {
                    diasElegidos.push('viernes');
                }
                if (boleto2Dias > 0) {
                    diasElegidos.push('viernes', 'sabado');
                }
                if (boletoCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                }

                for (var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }
            }
        }
    }); //DOM CONTENT Cargado
})();


$(function() {
    //Lettering
    $('.nombre-sitio').lettering();

    //Menú Fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': 0 });
        }
    });

    //Menú Responsive
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    //Programa de Conferencias
    $('.programa-evento div:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    //Animaciones para los números
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 3000);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 3000);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 3000);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 3000);

    //Cuenta regresiva de días
    $('.cuenta-regresiva').countdown('2019/12/23 00:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    })


});