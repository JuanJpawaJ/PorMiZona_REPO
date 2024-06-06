<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>VIEW ASOCIADO</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" /> 
<style type="text/css">
.blanco {
	color: #FFF;
}
.logo_aso {
	color: #0000FF;
	text-align: center;
	font-size: 26px;
	font-family: "Comic Sans MS", cursive;
	font-weight: bold;	
}
.productos_aso {
	color: #000000;
	text-align: center;
	font-size: 20px;
	font-family: "Comic Sans MS", cursive;
	font-weight: bold;	
}

.text_tabla_zonas {
	font-family: "Times New Roman", Times, serif;
}
.TITU_TABLA_ZONAS {
	font-size: 11px;
	font-weight: bold;
}
.tit_espacios {
	font-family: "Comic Sans MS", cursive;
	color: #00C;
	font-size: 14px;
}
.txt_espacios {
	font-family: "Comic Sans MS", cursive;
	font-size: 14px;
</style>
    
    
    
    
</head>
<body>
<?    
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso = $_GET['xcod'];

?>
       
<nav>
    <div class="botones_nav">
            <a href="#" class="boton_home"></a>
            <a href="#" class="boton_menu"></a>
    </div>
    <!-- <img src="imagenes/Logo/Logo_blanco_negro.svg" alt="logo"> -->
    <img src="iconos/logo_pmz.png" alt="logo" class="logo">
</nav>
<div class="barra_titulo">
     <h2>           *Nuestro asociado:</h2>
</div>
<span class="busraya">
<?
$result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

ñññññññññññññññññññññññññññ
<?php
// Ruta de la imagen
$imagePath = 'ruta/a/tu/imagen.jpg';

// Obtener las dimensiones de la imagen
list($width, $height) = getimagesize($imagePath);

// Mostrar las dimensiones
echo "Ancho: " . $width . " píxeles<br>";
echo "Alto: " . $height . " píxeles";
?>



ññññññññññññññññññññññññññññññññ
<?php
// Ruta de la imagen original
$imagePath = 'ruta/a/tu/imagen.jpg';

// Nuevas dimensiones deseadas
$newWidth = 200; // Ancho deseado en píxeles
$newHeight = 150; // Alto deseado en píxeles

// Obtener las dimensiones de la imagen original
list($width, $height) = getimagesize($imagePath);

// Crear una imagen desde el archivo original
$originalImage = imagecreatefromjpeg($imagePath);

// Crear una nueva imagen con las dimensiones deseadas
$newImage = imagecreatetruecolor($newWidth, $newHeight);

// Redimensionar la imagen original y copiarla en la nueva imagen
imagecopyresampled($newImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

// Ruta para guardar la nueva imagen
$newImagePath = 'ruta/a/tu/nueva_imagen.jpg';

// Guardar la nueva imagen en formato JPEG
imagejpeg($newImage, $newImagePath, 90); // 90 es la calidad de la imagen (0-100)

// Liberar memoria
imagedestroy($originalImage);
imagedestroy($newImage);

echo "La imagen ha sido redimensionada y guardada en: " . $newImagePath;
?>




fffffffffffffffffffffffffffffffffffffffff

los 2 juntos

<?php
// Ruta de la imagen original
$imagePath = 'ruta/a/tu/imagen.jpg';

// Obtener las dimensiones de la imagen original
list($originalWidth, $originalHeight) = getimagesize($imagePath);

// Mostrar las dimensiones originales
echo "Dimensiones originales - Ancho: " . $originalWidth . " píxeles, Alto: " . $originalHeight . " píxeles<br>";

// Nuevas dimensiones deseadas
$newWidth = 200; // Ancho deseado en píxeles
$newHeight = 150; // Alto deseado en píxeles

// Crear una imagen desde el archivo original
$originalImage = imagecreatefromjpeg($imagePath);

// Crear una nueva imagen con las dimensiones deseadas
$newImage = imagecreatetruecolor($newWidth, $newHeight);

// Redimensionar la imagen original y copiarla en la nueva imagen
imagecopyresampled($newImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

// Ruta para guardar la nueva imagen
$newImagePath = 'ruta/a/tu/nueva_imagen.jpg';

// Guardar la nueva imagen en formato JPEG
imagejpeg($newImage, $newImagePath, 90); // 90 es la calidad de la imagen (0-100)

// Liberar memoria
imagedestroy($originalImage);
imagedestroy($newImage);

echo "La nueva imagen ha sido redimensionada y guardada en: " . $newImagePath;
?>
Explicación del código:
Ruta de la imagen original: Especifica la ruta de la imagen que deseas redimensionar.
getimagesize(): Obtiene las dimensiones de la imagen original y las guarda en $originalWidth y $originalHeight.
Mostrar las dimensiones originales: Imprime las dimensiones originales de la imagen.
Nuevas dimensiones: Define el ancho y alto deseados para la nueva imagen.
imagecreatefromjpeg(): Carga la imagen original desde el archivo. Si estás utilizando una imagen en otro formato (PNG, GIF), utiliza imagecreatefrompng() o imagecreatefromgif() respectivamente.
imagecreatetruecolor(): Crea una nueva imagen en memoria con las dimensiones deseadas.
imagecopyresampled(): Redimensiona y copia la imagen original a la nueva imagen. Esta función hace un muestreo de la imagen para mantener la calidad.
imagejpeg(): Guarda la nueva imagen en formato JPEG en la ruta especificada. Si utilizas otro formato, utiliza imagepng() o imagegif().
imagedestroy(): Libera la memoria asociada a las imágenes para evitar fugas de memoria.
Mostrar mensaje final: Imprime un mensaje indicando que la imagen ha sido redimensionada y guardada con éxito.
Este script realiza tanto la obtención de las dimensiones de la imagen original como el redimensionamiento y guardado de la nueva imagen en un solo archivo PHP. Puedes ajustar las rutas y dimensiones según tus necesidades.





kkkkkkkkkkkkkkkkkkkkkkkkkkkkk


	$xid=$tabla["id"];
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
	$logo_aso=$tabla["logo_aso"];

    $resultaso=mysqli_query($connec,"SELECT * FROM categoria   where cod_cat='$categoria_aso'");
	$tablaaso =mysqli_fetch_array( $resultaso );
	$categoriatxt_aso=$tablaaso["categoria_cat"];
	
	
	$productos_aso=$tabla["productos_aso"];

	$favicon_aso=$tabla["favicon_aso"];
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_pmz_bl.png";
	}
	$latitud_aso=$tabla["latitud_aso"];
	$longitud_aso=$tabla["longitud_aso"];
	
$date_aso=$tabla["$date_aso"];	
$publicidad_aso=$tabla["publicidad_aso"];	
$grupolista_aso=$tabla["grupolista_aso"];
$img1_aso=$tabla["img1_aso"];
	if(strlen($img1_aso)==0) {
		$img1_aso="avi_pmz_bl.jpg";
	}


$img2_aso=$tabla["img2_aso"];
$logo_aso=$tabla["logo_aso"];
$view1_aso=$tabla["view1_aso"];
$view2_aso=$tabla["view2_aso"];
$view3_aso=$tabla["view3_aso"];
$view4_aso=$tabla["view4_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$obsinterno_aso=$tabla["obsinterno_aso"];
	
	


// $distrito_aso=$tabla["distrito_aso"];
// $provincia_aso=$tabla["provincia_aso"];
// $estado_aso=$tabla["estado_aso"];
// $referencia_aso=$tabla["referencia_aso"];
// $telf1_aso=$tabla["telf1_aso"];
// $telf2_aso=$tabla["telf2_aso"];
// $pass_aso=$tabla["pass_aso"];
// $categoria_aso=$tabla["categoria_aso"];
// $productos_aso=$tabla["productos_aso"];
// $favicon_aso=$tabla["favicon_aso"];
// $publicidad_aso=$tabla["publicidad_aso"];
?>
</span>



    <table width="800" height="969" border="1" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td width="1574" height="142" colspan="2" align="center" valign="middle" background="iconos/f_cabview.jpg" >
		<table width="772" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="166" height="84"
			
                 rowspan="3" align="center" valign="middle"><img src="img_asociados/<? echo($favicon_aso); ?>" width="100" height="100">
			
					
			</td>
		    <td width="547">
<?   
  	if(strlen(trim($logo_aso))==0) { ?>
       <span class="logo_aso"><? echo ($rsocial_aso); ?></span>		
<? 	}else{ ?>
        <img src=" <?php echo "img_asociados/".$logo_aso ?> " width="300" height="50" />
<?  } ?>  
			
			
			
			</td>
	      </tr>
		  </table></td>
      </tr>
      <tr>
        <td height="447" colspan="2" align="center" valign="middle" bgcolor="#CBF6EC"><img src="<?php echo "img_asociados/".$img1_aso ?>" width="769" height="441"></td>
      </tr>
      <tr>
        <td height="53" colspan="2" align="center" valign="middle" bgcolor="#CBF6EC" class="productos_aso"><? echo $productos_aso."<br>"; ?></td>
      </tr>
      <tr>
        <td height="194" colspan="2" align="center" valign="middle" bgcolor="#CBF6EC"><table width="759" border="1" align="center" cellpadding="0" cellspacing="0">


  <tr>
    <td height="39" class="txt_view_pequeño" ><? echo $direccion_aso."<br>"; ?></td>
    <td rowspan="2"  ><? echo $telf1_aso." / ".$telf2_aso."<br>"; ?></td>
  </tr>
  <tr>
    <td height="39" class="txt_view_pequeño" ><? echo $referencia_aso."<br>"; ?></td>
    </tr>
  <tr>
    <td height="39" colspan="2" class="txt_view_pequeño" ><? echo $categoria_aso.": ".$categoriatxt_aso."<br>"; ?></td>
    </tr>
  <tr>
    <td width="512" height="39" class="txt_view_pequeño" >&nbsp;</td>
    <td width="241"  >&nbsp;</td>
  </tr>
  <tr>
    <td height="32" class="txt_view_pequeño">Productos:</td>
    <td >&nbsp;</td>
  </tr>
</table></td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" bgcolor="#0099CC"><? echo $email_aso."<br>"; ?> <? echo $estado_aso." - ".$pais_aso."<br>"; ?> <? echo "<br>"; ?> <? echo $cod_aso." - ".$date_aso."<br>"; ?> <? echo "la: ".$latitud_aso." lo: ".$longitud_aso."<br>"; ?></td>
      </tr>
      <tr>
        <td height="32" colspan="2">Acceso solo a propietarios:<a href="ingre.php?xcod=<? echo ($cod_aso);?>&xiclave=SI"><img src="imagenes/bot_soypropietario.png" width="156" height="23" style="border:0;" onMouseOver="this.style.border='solid  2px #FFFFFF';" onMouseOut="this.style.border=0;" border="0"></a></td>
 
      </tr>
      <tr>
        <td height="23" colspan="2">&nbsp;</td>
      </tr>
    </table>
<p>&nbsp;</p>
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
                 Cel. 922900787 <br>
                    Diseño Web.
                    Ca. Sena 105 Coop. 58.
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