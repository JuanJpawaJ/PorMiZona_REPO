<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" />
    <style type="text/css">
    a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
    </style>
</head>
<body>
<?    
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$longitud = $_POST['longitude'];
$latitud = $_POST['latitude'];

//echo ("Longitud: ".$longitud."<br>");
//echo ("Latitud : ".$latitud."<br>");
if ($longitud<0) {
     $longitud = substr($longitud,0,6);
} else {
     $longitud = substr($longitud,0,5);
}
if ($latitud<0) {
     $latitud = substr($latitud,0,6);
} else {
     $latitud = substr($latitud,0,5);
}

//echo ("Longitud: ".$longitud."<br>");
//echo ("Latitud : ".$latitud."<br>");

$result=mysqli_query($connec,"select * from asociado_51 where (latitud_aso like '%$latitud%' AND longitud_aso like '%$longitud%') order by categoria_aso");

$total=mysqli_num_rows($result);
//echo "Total: ".$total."<br>";

?>


    <nav>

        <div class="botones_nav">
            <a href="#" class="boton_home"></a>
            <a href="#" class="boton_menu"></a>
        </div>
       <!-- <img src="imagenes/Logo/Logo_blanco_negro.svg" alt="logo"> -->

 


       <img src="imagenes/logo_dencuentrop.png" alt="logo" class="logo">
    </nav>

    <div class="barra_titulo">
        <h2>Cerca a Ud. </h2>
        <h3> Su: *Longitud=<?  echo ($longitud."  "); ?> *Latitud=<? echo ($latitud); ?> </h3>
    </div>
    
    <div class="exterior">
        
        <div class="fondo_formulario">
 
          <div class="cabecera1">
            <img src="imagenes/cabecera_formulario_iconos_alfa.png" alt="iconos" class="iconos">
            </div>
<?php 


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
	$telf1_aso=$tabla["telf1_aso"];
	$telf2_aso=$tabla["telf2_aso"];
	$email_aso=$tabla["email_aso"];
	$date_aso=$tabla["date_aso"];
	$categoria_aso=$tabla["categoria_aso"];
	$productos_aso=$tabla["productos_aso"];
	$favicon_aso=$tabla["favicon_aso"];
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_pmz_bl.png";
	}
	$latitud_aso=$tabla["latitud_aso"];
	$longitud_aso=$tabla["longitud_aso"];
	
	
	?>
    <div class="lista"><a href="viewasociado.php?xcod=<?php  echo($cod_aso); ?>">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    
  <tr>
    <td width="47" rowspan="2" valign="middle"><img src="img_asociados/<?php  echo($favicon_aso); ?>" width="45" height="45"></td>
    <td width="226" class="busrazon"><?php  echo("  ".$rsocial_aso); ?></td>
    <td width="64" rowspan="2" class="busdireccion"><?php  echo($direccion_aso); ?></td>
  </tr>
  <tr>
    <td valign="middle" class="busproductos"><?php  echo(substr($productos_aso,0,45)); ?></td>
    </tr>
  <tr>
    <td width="47">&nbsp;</td>
    <td colspan="2" class="busraya">--------------------------------------------------------------------------------------------</td>
    </tr>
   
    </table>

  </a></div>
 
<?php 
       
	} 

mysqli_close($connec_sql);
?>            
            


          </div>   <!-- geolocalizacion-->     
    <!-- FIN DE boton obligatorio -->              
  
</div>
</div>




    <footer>
        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CLIENTES</h2>
                <p>Dencuentro.com es una página gratuita.
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
                <p>Nuestra empresa, no se responsabiliza por productos o servicos en mal estado.</p>
            </article>
        </div>

        <div class="footer_contactos footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CONTACTOS</h2>
                <p>Cel. 959956000 <br>
                    Diseño Web.
                    Ca. Sena 105 cop. 58.
                    J.L.B. y Rivero - Arequipa - Perú</p>
            </article>
        </div>

        <div class="footer_logo">
            <img src="imagenes/Logo/Logo_blanco_puro.svg" alt="">
            <h3>Arequipa - 2020</h3>
        </div>
    </footer>
</body>
</html>