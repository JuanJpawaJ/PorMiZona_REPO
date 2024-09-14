<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<meta name="keywords" content="www.pormizona.com.pe: pormizona.com.pe:: pormizona :: avisos :: eventos : eventos en arequipa :porongoche : catalogo : pormizona catalogo : pormizona eventos :: por mizona .com .pe :: publicidad por mi zona :: AQP :: busco :: Por Mi Zona, eventos, catálogo, oubkictario,  Arequipa, avisos por mi zona, busco eventos., que hago hoy dia" />
<meta name="description" content="pormizona.com.pe:: pormizona :: por mi zona :: por mi zona . com.pe :: pormizona :: PORMIZONA.COM.PE :: AQP :: catálogo publicitario por mi zona :: publicidad por mi zona :: eventos por mi zona :: syscomputer :: jpawaj:: mujer bonita :: Boutique :: mujer bonita boutique" />

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/normalizar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos_footer.css">
    <link rel="stylesheet" href="css/estilos_navegador.css">
    <link rel="stylesheet" href="siga_pormizona/estilos-footer.css">

  <style>
      .button, .empresa > a > img {
          display: inline-block;
          transition: transform 0.3s ease; /* Suaviza la transición */
      }

      .button:hover, .empresa > a > img{
          transform: scale(1.1); /* Aumenta el tamaño de la imagen al pasar el mouse */
      }
  </style>

<title>PorMiZona.com.pe - PUBLICIDAD Y EVENTOS</title> 

</head>
<body>
    <header>
        <div>
            <img src="imgs/pmz_01_rgb.jpg" alt="" class="logo_por_mi_zona">
            <img src="imgs/c_edi_01_rgb.jpg" alt="" class="central_de_edicion">
            
            <div class="contenedor_navegador">
                <button class="nav" id="boton_hamburguesa" onclick="desplegarBotonHamburguesa()">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
    
                <div class="cont_lista_elementos" id="cont_elementos_navegador">
                    <ul>
                        <li><a href=""></a>DD</li>
                        <li><a href="">AA</a></li>
                        <li><a href="">SS</a></li>
                        <li><a href="">DD</a></li>
                        <li><a href="">DD</a></li>
                        <li><a href="">DD</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div>
            <h2>ENCUENTRE LO QUE NECESITE CERCA DE USTED</h2>
            <h2>PUBLICIDAD LOCALIZADA Y EVENTOS</h2>
        </div>
       <div class="contenedor_botones"> 

            <a href="siga_pormizona/buscar_pormizona.php" class="button"><img src="imgs/b_tiendas.png" alt="Botón 1" ></a>
            <a href="" class="button"><img src="imgs/b_eventos.png" alt="Botón 2" ></a>
            <a href="siga_pormizona/a_cat_impreso.php" class="button"><img src="imgs/b_catalogo.png" alt="Botón 3" ></a>
            <a href="siga_pormizona/a_publicar.php" class="button"><img src="imgs/b_publicar.png" alt="Botón 4" ></a>
<!---

    <a href="https://example.com" class="button"><img src="button1.png" alt="Botón 1">
    </a>
    <a href="https://example.com" class="button">
        <img src="button2.png" alt="Botón 2">
    </a>


--->




        </div>
    </header>
    <div class="division"></div>
    <div class="empresas_asociadas">
        <h1>EMPRESAS ASOCIADAS</h1>
        <div class="contenedor_empresas">
  <?php   
  
  include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");
   
$titulo="LISTA POR MI ZONA con filtro";

$result=mysqli_query($connec,"select * from asociado_51 where view01_aso='S' ");
   
$total=mysqli_num_rows($result);        

while ($tabla=mysqli_fetch_array($result)){
	$id=$tabla["id"];
	$cod_aso=$tabla["cod_aso"];
	$pais_aso=$tabla["pais_aso"];
	$rsocial_aso=$tabla["rsocial_aso"];
	$direccion_aso=$tabla["direccion_aso"];
	$distrito_aso=$tabla["distrito_aso"];
	$provincia_aso=$tabla["provincia_aso"];
	$estado_aso=$tabla["estado_aso"];
	$referencia_aso=$tabla["referencia_aso"];
	$gironeg_aso=$tabla["gironeg_aso"];
	$telf1_aso=$tabla["telf1_aso"];
	$telf2_aso=$tabla["telf2_aso"];
	$email_aso=$tabla["email_aso"];
	$date_aso=$tabla["date_aso"];
	$categoria_aso=$tabla["categoria_aso"];
	$productos_aso=$tabla["productos_aso"];
	$favicon_aso=$tabla["favicon_aso"];
	$logo_aso=$tabla["logo_aso"];
	$link01_aso=$tabla["link01_aso"];
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_pmz_bl.png";
	}
	$latitud_aso=$tabla["latitud_aso"];
	$longitud_aso=$tabla["longitud_aso"];
     
  ?>       
            <div class="empresa">
               
                   
				   
    
   <a href="link01_aso"> <img src="siga_pormizona/img_asociados/<? echo($logo_aso); ?>"  ></a>
       <?  echo($gironeg_aso); ?>                
            </div>
<?php
}
 ?>
            
            
    </div>
    </div>
    <div class="division"></div>

    <footer>
        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CLIENTES</h2>
                <p>Pormizona.com.pe es una página gratuita.
                Las consultas por esta Web y los contactos 
                con nuestros asociados son gratuitos.</p>
            </article>
        </div>

        <div class="footer_asociados footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">ASOCIADOS</h2>
                <p>Brinda los siguientes servicios:
                    * Servicio gratuito incluye:
                    - El registro de datos, ubicación y productos que comercializa.
                     
                    * Servicio por convenio:
                    - Diseño logos
                    - Mapa Google.
                </p>
            </article>
        </div>

        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">PRODUCTOS</h2>
                <p>Nuestra empresa, no se responsabiliza por productos o servicios en mal estado.</p>
            </article>
        </div>

        <div class="footer_contactos footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CONTACTOS</h2>
                <p>Cel. 959956000 <br>
                    Diseño Web.
                    Arequipa - Perú</p>
            </article>
        </div>

        <div class="footer_logo">
            <img src="imagenes/Logo/Logo_blanco_puro.svg" alt="">
            <h3>Arequipa - 2024</h3>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>