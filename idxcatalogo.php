   <style>

.contenedor_cabtxt{
    /* background-color: green; */
    width:100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom:4rem;
	
}

 
    .contenedor_cabtxt > h2{
        font-family: var(--fuente_gruesa);
       	margin-bottom: 1rem; 
		
		color: #080885;
    	font-size: 3rem;
    	padding-top: 1rem;
    }
	
	.contenedor_cabtxt > div{
		display: flex;
    	flex-direction: column;
    	row-gap: 0.5rem;
    	align-items: center;
	}


.razonsocial_blanco { 
   color: white; 
   font-size: 3rem;
  
   }

    

  </style>
  
<?php
include ("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso=$_GET['xcod'];


$result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

$usua_aso=$tabla['usua_aso'];
$pass_aso=$tabla['pass_aso'];


$xid=$tabla["id"];
$cod_aso=$tabla["cod_aso"];

$pais_aso=$tabla['pais_aso'];
$rsocial_aso=$tabla['rsocial_aso'];
$direccion_aso=$tabla['direccion_aso'];
$distrito_aso=$tabla['distrito_aso'];
$provincia_aso=$tabla['provincia_aso'];
$departamento_aso=$tabla['departamento_aso'];

    $resultaso=mysqli_query($connec,"SELECT * FROM estado_51   where cod_est='$departamento_aso'");
	$tablaaso =mysqli_fetch_array( $resultaso );
	$departamentotxt_aso=$tablaaso["estado_est"];


$referencia_aso=$tabla['referencia_aso'];
$gironeg_aso=$tabla["gironeg_aso"];
$telf1_aso=$tabla['telf1_aso'];
$telf2_aso=$tabla['telf2_aso'];
$email_aso=$tabla['email_aso'];
$categoria_aso=$tabla['categoria_aso'];
$productos_aso=$tabla['productos_aso'];
$latitud_aso=$tabla['latitud_aso'];
$longitud_aso=$tabla['longitud_aso'];	
$favicon_aso=$tabla["favicon_aso"];
 if(strlen($favicon_aso)==0) {
	$favicon_aso="f_pmz_bl.png";
 }
$date_aso=$tabla["date_aso"];	
$publicidad_aso=$tabla["publicidad_aso"];	
$grupolista_aso=$tabla["grupolista_aso"];
$img1_aso=$tabla["img1_aso"];
$img2_aso=$tabla["img2_aso"];
$logo_aso=$tabla["logo_aso"];
$view01_aso=$tabla["view01_aso"];  // ver=S o NOver = 
$view02_aso=$tabla["view02_aso"];  
$view03_aso=$tabla["view03_aso"]; // oferta   S -
$view04_aso=$tabla["view04_aso"]; // cabecera S - N
$link01_aso=$tabla["link01_aso"];
$link02_aso=$tabla["link02_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$obsinterno_aso=$tabla["obsinterno_aso"];
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
    include 'widgets/catalogo_navegador.php';
	$slid=$cod_aso."slide";
    ?>

  <? if ($view04_aso=="S") { ?>
	  

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

       

            </div> -->
        <!--
            <div class="slider-nav" id="slider-nav">
            </div>
          -->
        </div>
    </div>
    
<? } else {?>

<div class="contenedor_cabtxt">
<h2> <? echo $rsocial_aso; ?> </h2>
    <div>
    <h3> <? echo $direccion_aso; ?> </h3>
    <h3> <? echo $distrito_aso." ".$provincia_aso." ".$departamentotxt_aso; ?> </h3>
    <h3> <? echo $telf1_aso." ".$telf2_aso; ?> </h3>
    </div>
</div>

<? } ?>

<!-------   **********   consulta CATALOGO_PRODUCTOS *********************  --->
    <? $result = mysqli_query($connec, "select * from catalogo_productos where (cod_aso_it=$cod_aso) AND (view01_it='S') AND (pv03_it>0) order by producto_it");
  
	
	$simbolo_mone = "S/ "; ?>


    <div class="bloque_marca bloque_marca_syscomputer" id="jpawaj">
        <!-- <img src="assets/img/imagenes_index/logo_jpawaj.png" alt=""> -->
        <div class="contenedor_ofertas_semana">

        <div class="cabecera">
            <a href="siga_catalogo/a_lisgeneral.php" class="link_productos link_productos_oculto" style="visibility: hidden;">
                Ver todos los productos 
            </a> 

            <div class="header_ofertas">
                <h2>OFERTAS DE LA SEMANA</h2>
                <span class="material-symbols-outlined">
                    timer
                </span>
            </div>

            <a href="siga_catalogo/a_lisgeneral.php?xcod=<? echo $cod_aso; ?>&xrsocial=<? echo($rsocial_aso); ?>&xlogo=<? echo ($logo_aso); ?>" class="link_productos">
                Ver todos los productos bien
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
                    <a href="<?php echo "siga_catalogo/ilbupweiv.php?idx=" . $tabla["id"] ?>&xcod_aso=<?php echo($cod_aso);?>">
                    
                        Ver producto
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p> <? echo $msjpublico_aso ?>; </p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/<? echo '+51'.$telf2_aso ?>" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:<? echo '+51'.$telf2_aso ?>">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
        </div>
    </div>

  
    <div id="map" style="height: 400px; width: 100%; box-shadow: 0px -5px 9px 0px rgba(0,0,0,0.75)"></div>





    <?php 
    $agregado_en = "";
    include 'widgets/catalogo_footer.php' 
    ?>
    

    <script src="assets/js/slider_automatico.js"></script>
    <script src="assets/js/slider_marcas.js"></script>
    <script>
    // Función de inicialización del mapa
        function initMapWhenReady() {
            if (window.google && window.google.maps) {
            initMap();
            } else {
            setTimeout(initMapWhenReady, 200); // Reintentar en 200ms
            }
        }

        function initMap() {
            // Configuración del mapa
            var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: <?php echo $latitud_aso; ?>, lng: <?php echo $longitud_aso; ?> },
            zoom: 15
            });

            // Crear un marcador
            new google.maps.Marker({
            position: { lat: <?php echo $latitud_aso; ?>, lng: <?php echo $longitud_aso; ?> },
            map: map,
            title: '¡Hola, mundo!',
            });
        }

        
        window.onload = initMapWhenReady;
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwIDPzMH8Ydsj3EtpZAUuBpd3W3xW3e1k&callback=initMapWhenReady">
    </script>
</body>

</html>