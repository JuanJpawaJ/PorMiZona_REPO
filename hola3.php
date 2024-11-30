<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../static/css/estilos_generales.css">
    <link rel="stylesheet" href="../static/css/estilos_index.css">
    <link rel="stylesheet" href="../static/css/estilos_contenedor_marcas.css">
    <title>PorMiZona</title>
</head>
<body>
    <nav id="navbar">
        <div class="cont_logo">
            <img src="static/imgs/Logos/logo_pormizona_borde_bl.png" alt="">
        </div>

        <a href="siga_pormizona/formingre1.php">¡PUBLICA TU TIENDA!</a>
        
        <button class="boton_nav" id="boton_hamburguesa">
            <span class="material-symbols-outlined">
                menu
            </span>
        </button>


        <ul id="menu">
            <li><a href="siga_pormizona/a_lis_mievento.php">Eventos locales</a></li>
            <li><a href="siga_pormizona/a_catalogo_imp.php">Catálogo</a></li>
            <li><a href="siga_pormizona/a_publicar.php">Publicar avisos</a></li>
        </ul>
    </nav>
    
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");
?>    

    <div class="contenido_total">

        <div class="overlay"></div>

        <div class="contenido">
  <!--        <div class=" "> Para motrar las empresas cerca a usted, es obligatorio reconocer su Geolocalización IN SITU. Un móvil es mucho más preciso, recuerde activar su ubicación</div> -->

            <div class="contenido_2">
                <button id="select_ubi" class="seleccion_ubicacion">
                    <span class="material-symbols-outlined">
                        location_on
                    </span>
                    <p>Seleccionar ubicación</p>
                    
                </button>

                <div class="ventana_emergente_ubicacion" id="ventana_emergente_ubicacion" style="display:none;">
                    <div class="cabecera_botones">

                        <button id="boton1">Departamento</button>

                        <button id="boton2" class="seleccionado">Por mi zona</button>
                    </div>
                    <div class="contenedor_opcion">
                        <div class="cont_mi_ciudad" id="div1" style="display:none;">

                            <? $sql=mysqli_query($connec,"SELECT * FROM estado_51");  ?>
                            <select name="ciudad" id="selector_ciudad" style="width:10rem; color:black;">
                               <? while($rosvi=mysqli_fetch_array($sql))
                                  echo "<option  value='".$rosvi["cod_est"]."'>".$rosvi["cod_est"]." ".$rosvi["estado_est"]."</option>";
                               ?>
                            </select> 
                            <button id="aceptar_ciudad">Aceptar</button>
                        </div>
                        <div class="cont_mi_zona" id="div2" > 
                            <p>*El sistema usará tu ubicación solo para recomendaciones cercanas. No se comparte ni almacena</p>
                            <button id="activar_ubi">Activar mi ubicación</button>
                        </div>
                    </div>
                </div>
                

                <form class="principal" method="GET" action="siga_pormizona/buscar_pormizona.php">
                    <h1>¿Qué estás buscando?</h1>
                    <input type="text" name="texto" placeholder="ropa, comida, eventos, etc" required>
                    <input type="hidden" id="latitud" name="latitud">
                    <input type="hidden" id="longitud" name="longitud">
                    <input type="hidden" id="ciudad" name="ciudad">
                    <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="empresas_asociadas">
        <h1>EMPRESAS ASOCIADAS</h1>
        <div class="contenedor_empresas">
           <?   
           include("connec_sql_new.php");
           mysqli_set_charset($connec,'utf8'); 
           date_default_timezone_set("America/Lima");
           setlocale(LC_ALL, "sp");
   
           $titulo="LISTA POR MI ZONA con filtro";
           $result=mysqli_query($connec,"select * from asociado_51 where view01_aso='S' ");
           $total=mysqli_num_rows($result); ?>
    </div>
 </div>


   
    <div class="contenedor_marcas">
        <h3>EMPRESAS ASOCIADAS</h3>
        <div class="contenedor_slider">
            <div class="slider-track" id="sliderTrack">
                <? while ($tabla=mysqli_fetch_array($result)){
                $gironeg_aso=$tabla["gironeg_aso"];
                $logo_aso=$tabla["logo_aso"];
                $link01_aso=$tabla["link01_aso"];
                ?>       
                <!--<div class="empresa">
                //   <a href=" <? // echo($link01_aso); ?> "> <img src="siga_pormizona/img_asociados/<? // echo($logo_aso); ?>"  ></a>
                <?//  echo($gironeg_aso); ?>                
                </div>-->
<div class="slide">
    <a href="<?php echo $link01_aso; ?>">
        <img src="siga_pormizona/img_asociados/<?php echo $logo_aso; ?>" width="200" height="auto" alt="Logo">
    
    <p style="color: white;"><?php echo $gironeg_aso; ?></p>
    </a>
</div>
                
                <? } ?>
            </div>
        </div>
    </div>

    <!--div class="contenedor_marcas">
        <div class="contenedor_slider">
            <div class="slider-track" id="sliderTrack2">
                <div class="slide"><img
                        src="static/imgs/Proporciones_marcas/marca_1_23_40.png"
                        alt=""></div>
                <div class="slide"><img
                        src="static/imgs/Proporciones_marcas/marca_2_23_40.png"
                        alt=""></div>
                <div class="slide"><img
                        src="static/imgs/Proporciones_marcas/marca_3_23_40.png"
                        alt=""></div>
                <div class="slide"><img
                        src="static/imgs/Proporciones_marcas/marca_4_23_40.png"
                        alt=""></div>
            </div>
        </div>
    </div>-->


    


    <script src="/static/js/navegador.js"></script>
    <script src="/static/js/slider_marcas.js"></script>
    <script src="/static/js/ubicacion.js"></script>
    <script src="/static/js/ventana_emergente_ubicacion.js"></script>
</body>
</html>
