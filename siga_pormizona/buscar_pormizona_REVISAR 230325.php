<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="canonical" href="https://www.pormizona.com.pe/index.php">
<meta name="robots" content="noindex, follow">

<title>BUSCO Por Mi Zona</title>
<style type="text/css">
:root{
    --color-principal:#21ADFF;
    --color-fondo:#F0F0F0;
    --color-negro:#1A1A1A;
    --color-plomo:#999999;
    --fuente-negrita:nexa_bold;
    --fuente-normal:nexa_light;
    --fuente-abel:abel; }

.TITULO_NARANJA {
	color: #FC0;
	font-weight: bold;
}
.diez {	font-size: 10px;
}

.once {	font-size: 11px;
}
.texto_tablas11 {	font-size: 11px;
}
.tabla10 {
	font-size: 10px;
	font-family: Tahoma, Geneva, sans-serif;
}
.tabla20 {
	font-size: 20px;
	font-family: Tahoma, Geneva, sans-serif;
}

.TITULO {
	font-size: 12px;
	color: #000;
}
.T_QUE {
	font-size: 14px;
	color: #000;
}

.tit_menu_sup {
	color: #000;
}
.rsocial {
	color: #009;
	font-weight: bold;
		font-size: 50px;
}
.PRECIO2 {
	color: #999;
	/*font-weight: bold; */
		font-size: 12px;
}

.viewtexto {
	font-family: "Arial";
	font-size: 18px;
	color: #009;
}
.viewgiro {
	font-family: "Arial";
	font-size: 40px;
	color: #009;
}

.viewdir {
	font-family: "Arial";
	font-size: 38px;
	color: #009;
}
.viewproducto {
	font-family: "Arial";
	font-size: 28px;
	color: #009;
}

.tachado {
    text-decoration:line-through;
    color: red;
	font-size: 12px;
}

nav{
    background-color:var(--color-principal);
    height:70px;
    width:100%;
    display:flex;
    align-items:flex-start;

    justify-content:space-between;
    

    box-shadow: 0px 4px 24px -1px rgba(0,0,0,0.55);

    position:fixed;
}
.logo{
    margin-top:5px;
    width:15%;
    min-width:180px;
    max-width:393px;
    margin-right:20px;
}
.geolocalizacion{
	

  display: flex;
  flex-wrap: wrap;
  /* background-color: DodgerBlue; */ 
    width:100%;
 }
.geolocalizacion > div {
   /* background-color: #f1f1f1; */
  width: 370px;
  margin: 10px;
  /*  text-align: center; 
  line-height: 25px; */ 
  font-size: 15px;
}



a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$longitud = $_GET['longitud'];
$latitud = $_GET['latitud'];
$bxproducto=$_GET['texto'];
$bxproducto=trim($bxproducto);
$ciudad = $_GET['ciudad']; //solo llega el codigo de ciudad

//if(strlen($xfi)==0){
//  $xfi="D";
//}
?>

 <nav>
     <div class="botones_nav">
            <a href="#" class="boton_home"></a>
            <a href="#" class="boton_menu"></a>
     </div>
     <!-- <img src="imagenes/Logo/Logo_blanco_negro.svg" alt="logo"> -->
     <img src="../static/imgs/Logos/logo_pormizona_borde_bl.png" alt="logo" class="logo">
 </nav>
<?


if(strlen(($longitud)==0 OR strlen($latitud)==0) AND (strlen($ciudad)==0) ){
	echo (" debería ubicacion geoubicación");
}

$xxxciudad="NO";
if(strlen($ciudad)<>0) {
  $titulo="Busqueda: Departamento";
  $result=mysqli_query($connec,"select * from asociado_51 where (productos_aso like '%$bxproducto%' OR rsocial_aso like '%$bxproducto%' OR gironeg_aso like '%$bxproducto%') order by categoria_aso");
  $xxxciudad="SI";
  $imgciudad="img".$ciudad.".jpg";

 
} else { //  latitud y longitud
  $titulo="Busqueda: PorMiZona";
  $result=mysqli_query($connec,"select * from asociado_51 where (latitud_aso like '%$bxlatitud%' AND longitud_aso like '%$bxlongitud%' AND (productos_aso like '%$bxproducto%' OR rsocial_aso like '%$bxproducto%' OR gironeg_aso like '%$bxproducto%') ) order by categoria_aso");
}

$total=mysqli_num_rows($result);


?>
<table width="902" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="77" align="center" class="tit_menu_sup">POR MI ZONA</td>
  </tr>
  <tr class="tit_menu_sup">
    <td width="898" height="141" align="center" bgcolor="#999999"><table width="788" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="99" colspan="2" align="center" bgcolor="#999999" class="tabla10" ><img src="../static/imgs/Logos/logo_pormizona_borde_bl.png" width="285" height="86"></td>
        </tr>
        <tr>
        <td width="200" height="35" align="center" bgcolor="#999999" class="tabla10" >
             <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	
	 	           SU LATITUD ES:  <img src="iconos/alerta.png" width="25" height="22"> <br>
             <? } else { ?>
			        SU LATITUD ES: <? echo $latitud; ?> <br>
 		     <? } ?>

        </td>
        <td width="251" rowspan="2" align="center" bgcolor="#999999" class="tabla10" >
          <form id="form0" name="form0" method="get" action="buscar_pormizona.php">
            <table width="371" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
              <tr>
                <td width="244" height="50" align="center" bgcolor="#CCCCCC"> <span class="T_QUE">¿Que está buscando?:</span>  
                  <input name="texto" type="text" id="texto" size="30" maxlength="60" value="<?php echo($bxproducto); ?>" /></td>
                <input type="hidden" name="longitud" value="<?php echo($longitud); ?>" />
                <input type="hidden" name="latitud" value="<?php echo($latitud); ?>" />
                <td width="121" align="center" bgcolor="#CCCCCC"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                </tr>
              </table>
            </form>
        </td>
        </tr>
        <tr>
          <td height="36" align="center" bgcolor="#999999" class="tabla10" >
              <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	
	               SU LONGITUD ES:  <img src="iconos/alerta.png" width="25" height="22"> <br>
             <? } else { ?>
			        SU LONGITUD ES: <? echo $longitud; ?> <br>
 		     <? } ?>
          </td>
        </tr>
    </table></td>
  </tr>
  <tr class="tit_menu_sup">
    <td height="188" valign="top" bgcolor="#FFFFCC">
      <!-- INICIO DE MUESTRA ITEMS -->
      <table width="891" height="155" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" >
        
		
		
		<?php 
		




  

//if(strlen($bxproducto)==0){
//        $result=mysqli_query($connec,"select * from a_items where view01_it='S' AND grupolista_it like '%$xgl%' order by producto_it");
//} else {
//        $bxproducto1=trim($bxproducto);
//        $result=mysqli_query($connec,"select * from a_items where producto_it like '%$bxproducto1%' order by producto_it");
//}

// $total=mysqli_num_rows($result);


while ($tabla=mysqli_fetch_array($result)){
	$id=$tabla["id"];
	$cod_aso=$tabla["cod_aso"];
	$pais_aso=$tabla["pais_aso"];
	$rsocial_aso=$tabla["rsocial_aso"];
	$direccion_aso=$tabla["direccion_aso"];
	$distrito_aso=$tabla["distrito_aso"];
	$provincia_aso=$tabla["provincia_aso"];
	$departamento_aso=$tabla["departamento_aso"];
	$referencia_aso=$tabla["referencia_aso"];
	$gironeg_aso=$tabla["gironeg_aso"];
	$telf1_aso=$tabla["telf1_aso"];
	$telf2_aso=$tabla["telf2_aso"];
	$email_aso=$tabla["email_aso"];
	$date_aso=$tabla["date_aso"];
	$datehoy_aso=$tabla["datehoy_aso"];
	$categoria_aso=$tabla["categoria_aso"];
	$productos_aso=$tabla["productos_aso"];
	$favicon_aso=$tabla["favicon_aso"];
	if(strlen($favicon_aso)==0) {
	   //$favicon_aso="f_pmz_bl.png";	
       $nombre = $rsocial_aso;  // El nombre que ya leíste de la tabla
       $faviconPath == __DIR__ . 'img_asociados/f_pmz_bl.png';   // Ruta de tu imagen base
// Obtener las dos primeras letras en mayúsculas y sin espacios
       $letras = strtoupper(substr(trim($nombre), 0, 2));
	   
// Verificar si la extensión GD está habilitada
if (!extension_loaded('gd')) {
    die("La extensión GD no está habilitada en este servidor.");
}

// ==============================
// CARGAR LA IMAGEN BASE
// ==============================
$imagen = imagecreatefrompng($faviconPath);
if (!$imagen) {
    die("No se pudo cargar la imagen.");
}

// Hacer la imagen transparente si es necesario
imagealphablending($imagen, true);
imagesavealpha($imagen, true);

// ==============================
// CONFIGURACIÓN DE COLORES Y FUENTES
// ==============================
$blanco = imagecolorallocate($imagen, 255, 255, 255);
$negro = imagecolorallocate($imagen, 0, 0, 0);
$fontSize = 50;  // Tamaño de la letra
//$fontFile = __DIR__ . '/arial.ttf';  // Asegúrate de tener la fuente Arial o coloca la que uses

// ==============================
// CENTRAR EL TEXTO
// ==============================
$box = imagettfbbox($fontSize, 0, $fontFile, $letras);
$textWidth = $box[2] - $box[0];
$textHeight = $box[1] - $box[7];
$x = (imagesx($imagen) - $textWidth) / 2;
$y = (imagesy($imagen) + $textHeight) / 2;

// ==============================
// DIBUJAR EL TEXTO SOBRE LA IMAGEN
// ==============================
imagettftext($imagen, $fontSize, 0, $x + 2, $y + 2, $negro, $fontFile, $letras);  // Contorno negro
imagettftext($imagen, $fontSize, 0, $x, $y, $blanco, $fontFile, $letras);  // Letras blancas

// ==============================
// CONVERTIR A BASE64 PARA INCRUSTAR DIRECTAMENTE EN HTML
// ==============================
ob_start();  // Iniciar el buffer de salida
imagepng($imagen);  // Enviar la imagen al buffer
$imagenEnBase64 = base64_encode(ob_get_clean());  // Obtener contenido del buffer y codificarlo en Base64
imagedestroy($imagen);  // Liberar memoria

// Crear el string base64 que puedes incrustar en el src de tu <img>
$imagenBase64Src = 'data:image/png;base64,' . $imagenEnBase64;		
	
	}
	$latitud_aso=$tabla["latitud_aso"];
	$longitud_aso=$tabla["longitud_aso"];
	
	
	
		
		//if ($pv01_it<=$precom_it) { $color1="#FF0000";  } else {  $color1="#E4E4E4";  }
		//if ($pv02_it<=$precom_it) { $color2="#FF0000";  } else {  $color2="#E4E4E4";  }
		//if ($pv03_it<=$precom_it) { $color3="#FF0000";  } else {  $color3="#E4E4E4";  }
        
		//$lugar_al_it=$tabla["lugar_al_it"];	

		//$monelista_it=$tabla["monelista_it"];
        //if ($monelista_it=="S") {
          $simbolo_mone="S/  ";
		//} else {
        //    $simbolo_mone="US$ ";
		//}

?>
        
        <tr bgcolor="#FFFFFF" class="tabla20">
          <td width="887" height="153" valign="middle">
          
              <div class="lista"><a href="viewasociado.php?xcod=<?php  echo($cod_aso); ?>">

            <table width="887" border="0" cellspacing="0" cellpadding="1">
              <tr>
                 <td width="150" rowspan="4" align="center" valign="middle"><img src="img_asociados/<? echo($favicon_aso); ?>" width="100" height="100"> </td>
                 

                <td height="41" colspan="2" align="left" bgcolor="#FFFFFF"><span class="rsocial"><?php echo($rsocial_aso) ?></span></td>
                </tr>
              <tr>
                <td width="467" height="37" align="left" bgcolor=#FFFFFF ><span class="viewgiro"><?php echo($gironeg_aso) ?></span></td>
                <td width="264" height="37" align="left" bgcolor=#FFFFFF ><span class="viewgiro"><?php echo($telf1_aso) ?></span></td>
              </tr>
              <tr>
                <td height="37" colspan="2" align="left" bgcolor=#FFFFFF ><span class="viewdir"><?php echo($direccion_aso) ?></span></td>
                </tr>
              <tr>
                <td height="52" colspan="2" align="left" bgcolor=#FFFFFF ><span class="viewproductos">
                <?php echo($productos_aso) ?> </span>
                </td>
              </tr>
          </table>
          
          </a></div>
          </td>
          
          <!--- <td align="right" bgcolor=<? echo($color1) ?> ><?php echo($simbolo_mone.money_format('%n',(round($precom_it+($precom_it*$pje1_it/100))))) ?></td>-->        </tr>
        <?php 
	}
  
?>

      </table> 
      <!-- FFFIIINNN  MUESTRA ITEMS -->
      
    </td>
  </tr>
  
</table>

<p>&nbsp;</p>
</body>
</html>
