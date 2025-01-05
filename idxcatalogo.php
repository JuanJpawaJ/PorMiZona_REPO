<?php
include ("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso="0000007";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/estilos_generales.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_slider_imagenes.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_bloques_marcas_general.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_contenedor_ofertas_semana.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_contenedor_imagenes_grid.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_cotenedor_quienes_somos.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_contenedor_marcas.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_servicio_tecnico.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloque_marca_interclass.css">
    <title>CATALOGO</title>
    <link rel="icon" href="assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head>

<body>

    <?php 
    $agregado_en_cab = "";
    include 'widgets/navegador.php';
	$slid=$cod_aso."s";
    ?>

  

    <div class="contenedor_slider_imagenes">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="imagen" id="slide-1">
                    <img class="imagen_normal" src="siga_catalogo/img_catacli/<? $slid."g1.jpg" ?> alt="">
                    <img class="imagen_movil" src="siga_catalogo/img_catacli/0000007sp1.jpg" alt="">
                </div>

          <!--
                <div class="imagen" id="slide-2">
                    <img class="imagen_normal" src="assets/img/imagenes_index/imgslider/sliderg2.jpg" alt="">
                    <img class="imagen_movil" src="assets/img/imagenes_index/imgslider/sliderp2.jpg" alt="">
                </div>

                <div class="imagen" id="slide-3">
                    <img class="imagen_normal" src="assets/img/imagenes_index/imgslider/sliderg3.jpg" alt="">
                    <img class="imagen_movil" src="assets/img/imagenes_index/imgslider/sliderp3.jpg" alt="">
                </div>

                <div class="imagen" id="slide-4">
                    <img class="imagen_normal" src="assets/img/imagenes_index/imgslider/sliderg4.jpg" alt="">
                    <img class="imagen_movil" src="assets/img/imagenes_index/imgslider/sliderp4.jpg" alt="">
                </div>

                <div class="imagen" id="slide-5">
                    <img class="imagen_normal" src="assets/img/imagenes_index/imgslider/sliderg5.jpg" alt="">
                    <img class="imagen_movil" src="assets/img/imagenes_index/imgslider/sliderp5.jpg" alt="">
                </div>

        -->

            </div>
        <!--
            <div class="slider-nav" id="slider-nav">
            </div>
          -->
        </div>
    </div>
    

<!-------   **********   JPAWAJ *********************  --->
    <? $result = mysqli_query($connec, "select * from catalogo_productos where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
    $simbolo_mone = "S/ "; ?>


    <div class="bloque_marca bloque_marca_syscomputer" id="jpawaj">
        <img src="assets/img/imagenes_index/logo_jpawaj.png" alt="">
        <div class="contenedor_ofertas_semana">

        <div class="cabecera">
            <a href="siga_jpawaj/a_lisgeneral.php" class="link_productos link_productos_oculto" style="visibility: hidden;">
                Ver todos los productos 
            </a> 

            <div class="header_ofertas">
                <h2>OFERTAS DE LA SEMANA*</h2>
                <span class="material-symbols-outlined">
                    timer
                </span>
            </div>

            <a href="siga_jpawaj/a_lisgeneral.php" class="link_productos">
                Ver todos los productos 
            </a>    
        </div>

            <div class="contenedor_productos">

                <?php while ($tabla = mysqli_fetch_array($result)) { ?>
                <div class="producto">
                    <div class="contenedor_imagen"><img src="<?php echo " siga_jpawaj/img_items/" . $tabla["img_it"];
                            ?>" /></div>
                    <h3>
                        <?php
                            $producto_it = $tabla["producto_it"];
                            echo $producto_it;
                            ?>
                    </h3>
                    <div class="precios">
                        <p class="precio_antiguo">
                            <?php echo ($simbolo_mone . ($tabla["pv01_it"])) ?>
                        </p>
                        <p class="precio_oferta">
                            <?php echo ($simbolo_mone . ($tabla["pv03_it"])) ?>
                        </p>
                    </div>
                    <a href="<?php echo "siga_jpawaj/ilbupweiv.php?idx=" . $tabla["id"] ?>">
                        Ver producto
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p>Somos una empresa comercializadora de productos INFORMÁTICOS y TECNOLÓGICOS de calidad y garantía.
             Nuestra experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER.
              Contamos con una vitrina de productos de seguridad e informática.
               Gracias por su confianza y recuerde que trabajamos para usted.</p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956000" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956000">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="division_secciones"></div>

<!-------   **********   SYSCOMPUTER (SERVICIO TECNICO *********************  --->


    <div class="bloque_marca bloque_marca_syscomputer" id="syscomputer">
        <img src="assets/img/imagenes_index/logo_syscomputer.png" alt="">
        <div class="contenedor_ofertas_semana">
        <div class="cabecera">
            <div class="header_ofertas">
                <h2>SERVICIO TÉCNICO</h2>
                <span class="material-symbols-outlined">
                    timer
                </span>
            </div>
        </div>

        </div>
        <div class="contenedor_imagenes_grid grid_mujer_bonita">
            <div class="imagen_6">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_3_5.png" alt="">
            </div>
            <div class="imagen_7">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_3_5.png" alt="">
            </div>
            <div class="imagen_8">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_6_3.png" alt="">
            </div>

        </div>

        
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p>Somos una empresa de SERVICIO TÉCNICO PROFESIONAL en INFORMÁTICA. 
            Nuestra experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER.
              Nuestro departamento de SERVICIO TÉCNICO con más de 10 profesionales especialistas en HARDWARE y SOFTWARE.
               Gracias por su confianza y recuerde que trabajamos para usted.</p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956000" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956000">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="division_secciones"></div>



<!-------   **********   ??????? *********************  --->

    <? $result = mysqli_query($connec, "select * from a_items where view02_it='S' AND grupolista_it like '%M%' order by producto_it");
    $simbolo_mone = "S/ "; ?>

    <div class="bloque_marca bloque_marca_mujer_bonita" id="mujer_bonita">
        <img src="assets/img/imagenes_index/logo_mujer_bonita.png" alt="">
        <div class="contenedor_ofertas_semana">
        <div class="cabecera">
            <div class="header_ofertas">
                <h2>OFERTAS DE LA SEMANA</h2>
                <span class="material-symbols-outlined">
                    timer
                </span>
            </div>
        </div>
            <div class="contenedor_productos">
                <?php while ($tabla = mysqli_fetch_array($result)) { ?>
                <div class="producto">
                    <div class="contenedor_imagen"><img src="<?php echo " siga_jpawaj/img_items/" . $tabla["img_it"];
                            ?>" /></div>
                    <h3>
                        <?php
                            $producto_it = $tabla["producto_it"];
                            echo $producto_it;
                            ?>
                    </h3>
                    <div class="precios">
                        <p class="precio_antiguo">
                            <?php echo ($simbolo_mone . ($tabla["pv01_it"])) ?>
                        </p>
                        <p class="precio_oferta">
                            <?php echo ($simbolo_mone . ($tabla["pv03_it"])) ?>
                        </p>
                    </div>
                    <a href="">
                        Ver producto
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="contenedor_imagenes_grid grid_mujer_bonita">
            <div class="imagen_6">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_3_5.png" alt="">
            </div>
            <div class="imagen_7">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_3_5.png" alt="">
            </div>
            <div class="imagen_8">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_6_3.png" alt="">
            </div>

        </div>
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p>Somos una empresa comercializadora de productos generales y tecnológicos de calidad y garantía. Nuestra
                experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER. Contamos
                con una vitrina de productos de seguridad e informática. En esta situación de cuarentena activamos
                nuestro servicio DELIVERY. Gracias por su confianza y recuerde que trabajamos para usted.</p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956060" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956060">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="division_secciones"></div>

    <div class="bloque_marca_interclass" id="interclass">
        <img src="assets/img/imagenes_index/logo_inter_class.png" alt="">
        <div class="contenedor_grid_interclass">
            <div class="contenedor_imagen_inter">
                <img src="assets/img/imagenes_index/imagenes_of/aviso_curso_web.jpg" alt="">
            </div>
            <div class="contenedor_imagen_inter">
                <img src="assets/img/imagenes_index/imagenes_of/f_contenido_excel_2024.jpg" alt="">
            </div>
            <div class="contenedor_formulario">
                <h4>Deseo obtener una revisión GRATUITA de mi equipo. Gracias</h4>
                <div class="contenedor_botones_de_contacto">
                    <a href="https://wa.me/+51959956000" target="_blank">
                        <p>Escribir por Whatsapp</p>
                        <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                    </a>

                    <a href="tel:+51959956000">
                        <p>Llamar por teléfono</p>
                        <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                    </a>
                </div>
                <form action="">
                    <div class="campo_texto_linea">
                        <label for="fname">¿Que cursos?</label>
                        <input type="text" id="fname" name="fname" value="" placeholder="Ej. Corel Draw">
                    </div>
                    <div class="campo_texto_linea">
                        <label for="fname">Nombre y Apellido:</label>
                        <input type="text" id="fname" name="fname" value="" placeholder="Ej. Juan Carlos Pérez">
                    </div>
                    <div class="campo_texto_linea">
                        <label for="fname">Número Telefónico:</label>
                        <input type="text" id="fname" name="fname" value="" placeholder="Ej. 987654321" type="number">
                    </div>
                    <button>Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="division_secciones mg-bt-none"></div>

    <div class="bloque_servicio_tecnico">
        <div class="contenedor_imagen_servicio">
            <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_1_1.png" alt="">
        </div>
        <div class="contenedor_formulario">
            <h4>Deseo obtener una revisión GRATUITA de mi equipo. Gracias</h4>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956000" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956000">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
            <form action="">
                <div class="campo_texto_linea">
                    <label for="fname">Nombre:</label>
                    <input type="text" id="fname" name="fname" value="" placeholder="Ej. Juan Carlos Perez">
                </div>
                <div class="campo_texto_linea">
                    <label for="fname">Descripción de la falla:</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="El problema que tengo es ..."></textarea>
                </div>
                <div class="campo_texto_linea">
                    <label for="fname">Número Telefónico:</label>
                    <input type="text" id="fname" name="fname" value="" placeholder="Ej. 987654321" type="number">
                </div>
                <button>Enviar</button>
            </form>
        </div>
    </div>


    <div class="contenedor_marcas">
        <h3>NUESTROS PRINCIPALES CLIENTES</h3>
        <div class="contenedor_slider">
            <div class="slider-track" id="sliderTrack">
                <div class="slide"><img
                        src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_1_23_40.png"
                        alt=""></div>
                <div class="slide"><img
                        src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_2_23_40.png"
                        alt=""></div>
                <div class="slide"><img
                        src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_3_23_40.png"
                        alt=""></div>
                <div class="slide"><img
                        src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_4_23_40.png"
                        alt=""></div>
            </div>
        </div>
    </div>

    <?php 
    $agregado_en = "";
    include 'widgets/footer.php' 
    ?>

    <script src="assets/js/slider_automatico.js"></script>
    <script src="assets/js/slider_marcas.js"></script>
</body>

</html>