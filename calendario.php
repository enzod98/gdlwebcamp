<?php
    include_once 'includes/templates/header.php';
?>

    <section class="seccion contenedor">
        <h2>Calendario de eventos</h2>
        <?php
            try{
                require_once('includes/funciones/bd_conexiones.php');
                $sql = 'SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv = invitados.invitado_id';
                $resultado = $conn->query($sql);
            } catch(\Exception $e){
                echo $e->getMessage();
            }
        ?>
    <div class="calendario">
        <?php
            $calendario= array();
            while($eventos= $resultado->fetch_assoc()){ 

                //Obtiene la fecha del evento
                $fecha = $eventos['fecha_evento'];

                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'icono' => 'fa' . " " . $eventos['icono'],
                    'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                );

                //Agrupa todos los eventos de la misma fecha
                $calendario[$fecha][] = $evento;

                ?>
                


            <?php } ?>
                <?php
                    foreach($calendario as $dia => $lista_eventos){ ?>
                        <h3>
                            <i class="fa fa-calendar">
                            <?php
                                setlocale(LC_TIME, 'spanish');
                                echo strftime("%A, %d de %B del %Y", strtotime($dia)); 
                            ?></i>
                        </h3>
                        <?php foreach($lista_eventos as $evento){ ?>
                            <div class="dia">
                                <p class="titulo"> <?php echo $evento['titulo']; ?> </p>
                                <p class="hora"><i class="fa fa-clock"></i> <?php echo $evento['hora'] ?> </p>
                                <p><i class="<?php echo $evento['icono'] ?>"></i><?php echo $evento['categoria']; ?></p>
                                <p class="hora"><i class="fa fa-user"></i> <?php echo $evento['invitado'] ?> </p>
                            </div>

                        <?php } //fin del foreach lista_eventos ?>

                    <?php } //fin del foreach de dias ?>

    </div>
            <?php
                $conn->close();
            ?>
    </section>
    

    <?php
        include_once 'includes/templates/footer.php';
    ?>