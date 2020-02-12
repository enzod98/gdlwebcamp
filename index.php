<?php
    include_once 'includes/templates/header.php';
?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>
            Mauris elementum diam a molestie hendrerit. Phasellus dictum ante non nisl venenatis tincidunt. Suspendisse sed accumsan est. Nullam auctor enim nec sem dignissim euismod. Nunc facilisis magna eu dui mollis, eu molestie orci pellentesque. Pellentesque
            nibh mi, convallis eu dui quis, sollicitudin tristique tellus. Sed eget ipsum sit amet elit luctus elementum non euismod lectus. Nunc faucibus non odio vitae pharetra.
        </p>
    </section>
    <!-- .seccion -->

    <section class="programa">
        <div class="contenedor-video">

            <video autoplay loop poster="bgtalleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
      </video>

        </div>
        <!-- .contenedor-video -->

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="far fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fa fa-clock"></i>16:00 hs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Heber Benitez</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fa fa-clock"></i>20:00 hs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Heber Benitez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>

                    </div>
                    <!-- .talleres -->

                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Cómo ser freelancer</h3>
                            <p><i class="fa fa-clock"></i>16:00 hs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Heber Benitez</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fa fa-clock"></i>20:00 hs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Heber Benitez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>

                    </div>
                    <!-- .conferencias -->

                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño para móviles</h3>
                            <p><i class="fa fa-clock"></i>10:00 hs</p>
                            <p><i class="fa fa-calendar"></i>11 de Dic</p>
                            <p><i class="fa fa-user"></i>Elba Aranda</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fa fa-clock"></i>09:00 hs</p>
                            <p><i class="fa fa-calendar"></i>11 de Dic</p>
                            <p><i class="fa fa-user"></i>Susano Sánchez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>

                    </div>
                    <!-- .seminarios -->

                </div>
                <!-- .programa-evento -->
            </div>
            <!-- .contenedor -->
        </div>
        <!-- .contenido-programa -->

    </section>
    <!-- .programa -->

    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen invitado1">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen invitado2">
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen invitado3">
                    <p>Gregorio Sánchez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen invitado4">
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen invitado5">
                    <p>Harold García</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen invitado6">
                    <p>Susan Sánchez</p>
                </div>
            </li>
        </ul>
    </section>
    <!-- .invitados contenedor -->

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">

                <li>
                    <p class="numero"></p>Invitados
                </li>
                <li>
                    <p class="numero"></p>Talleres
                </li>
                <li>
                    <p class="numero"></p>Dias
                </li>
                <li>
                    <p class="numero"></p>Conferencias
                </li>

            </ul>
            <!-- .resumen-evento -->
        </div>
        <!-- contenedor -->
    </div>
    <!-- .contador.parallax -->

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Todos los días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
            <!-- .lista-precios -->
        </div>
        <!-- .contenedor -->
    </section>
    <!-- .precios -->

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie pellentesque dui rhoncus rhoncus. Maecenas lacinia sollicitudin scelerisque. Nunc vitae ultrices dui. Integer sed urna orci. Suspendisse aliquet arcu ut sem tincidunt,
                        quis rhoncus nisl elementum. Donec nec est quam.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!-- .testimonial -->

            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie pellentesque dui rhoncus rhoncus. Maecenas lacinia sollicitudin scelerisque. Nunc vitae ultrices dui. Integer sed urna orci. Suspendisse aliquet arcu ut sem tincidunt,
                        quis rhoncus nisl elementum. Donec nec est quam.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!-- .testimonial -->

            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie pellentesque dui rhoncus rhoncus. Maecenas lacinia sollicitudin scelerisque. Nunc vitae ultrices dui. Integer sed urna orci. Suspendisse aliquet arcu ut sem tincidunt,
                        quis rhoncus nisl elementum. Donec nec est quam.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!-- .testimonial -->
        </div>
        <!-- .testimoniales.contenedor.clearfix -->
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Regístrate al newsletter:</p>
            <h3>GdlWebCamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
        <!-- .contenido.contenedor -->
    </div>
    <!-- .newsletter.parallax -->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva">
            <ul class="clearfix contenedor">
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

    <?php
        include_once 'includes/templates/footer.php';
    ?>