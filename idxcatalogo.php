<?php
include ("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso="0000007";
$cab_aso="SI";

$rsocial_aso="Comercial SANDRITA";
$direccion_aso="Av. La Colonial 135";
$distrito_aso="Arequipa";
$provincia_aso="Arequipa";
$departamento_aso="Arequipa";
$telf1="959956000";
$telf2="959956000";
$qsomos_aso="Somos una empresa comercializadora de productos REGALOS de calidad y garantía.
             Nuestra experiencia data de más de 10 años en el mercado AREQUIPEÑO, siendo parte del Grupo AQPREGALOS.
              Contamos con una vitrina de productos variado y de marca.
               ¡Gracias por su confianza y recuerde que trabajamos para usted!"


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
                    <img class="imagen_normal" src="siga_catalogo/img_catacli/<? echo($slid."g1.jpg"); ?>" alt="">
                    <img class="imagen_movil" src="siga_catalogo/img_catacli/<? echo($slid."p1.jpg"); ?>" alt="">
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
    

<!-------   **********   consulta CATALOGO_PRODUCTOS *********************  --->
    <? $result = mysqli_query($connec, "select * from catalogo_productos where cod_aso_it=$cod_aso order by producto_it");
    
	
	$simbolo_mone = "S/ "; ?>


    <div class="bloque_marca bloque_marca_syscomputer" id="jpawaj">
        <!-- <img src="assets/img/imagenes_index/logo_jpawaj.png" alt=""> -->
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
                    <div class="contenedor_imagen"><img src="<?php echo " siga_catalogo/img_catacli/" . $tabla["img_it"];
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
                    <a href="<?php echo "siga_catalogo/ilbupweiv.php?idx=" . $tabla["id"] ?>&xtelf2=<?php echo($telf2);?>">
                    
                        Ver producto
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p> <? echo $qsomos_aso ?>; </p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/<? echo '+51'.$telf2 ?>" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:<? echo '+51'.$telf2 ?>">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
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