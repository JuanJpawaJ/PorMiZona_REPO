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
.giro {
	color: #0000FF;
	text-align:right;
	font-size: 22px;
	font-family:Tahoma, Geneva, sans-serif
	font-weight: bold;	
}

.productos_aso {
	color: #000000;
	text-align: center;
	font-size: 15px;
	font-family:Tahoma, Geneva, sans-serif
	
}
.txt_view_direcc {
	color: #FFFFFF;
	font-size: 24px;
	font-family:Tahoma, Geneva, sans-serif
	font-weight: bold;	
}
.txt_view_telf {
	color: #FFFFFF;
	font-size: 20px;
	font-family:Tahoma, Geneva, sans-serif
	font-weight: bold;	
}

.txt_view_otros {
	color: #0000FF;
	text-align: center;
	font-size: 18px;
	font-family:Tahoma, Geneva, sans-serif
	font-weight: bold;	
}

.txt_view_pie {
	color:#FFF;
	text-align: center;
	font-size: 14px;
	font-family:Tahoma, Geneva, sans-serif
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


	$xid=$tabla["id"];
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
	$categoria_aso=$tabla["categoria_aso"];
	$logo_aso=$tabla["logo_aso"];

//    $resultaso=mysqli_query($connec,"SELECT * FROM categoria   where cod_cat='$categoria_aso'");
//	$tablaaso =mysqli_fetch_array( $resultaso );
//	$categoriatxt_aso=$tablaaso["categoria_cat"];

    $resultaso=mysqli_query($connec,"SELECT * FROM estado_51   where cod_est='$departamento_aso'");
	$tablaaso =mysqli_fetch_array( $resultaso );
	$departamentotxt_aso=$tablaaso["estado_est"];
	
	
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
	} else {
        $imagePath = "img_asociados/".$img1_aso; 
        list($originalWidth, $originalHeight) = getimagesize($imagePath);
        //echo "Dimensiones originales - Ancho: " . $originalWidth . " píxeles, Alto: " . $originalHeight . " píxeles<br>";
        $futuro_ancho=((740/$originalWidth)*$originalHeight);
        if ($futuro_ancho>482) {
	       $vw_ancho=450;
        } else {
	       $vw_ancho=740;
        }
	}

$img2_aso=$tabla["img2_aso"];
$logo_aso=$tabla["logo_aso"];
$view01_aso=$tabla["view01_aso"];
$view02_aso=$tabla["view02_aso"];
$view03_aso=$tabla["view03_aso"];
$view04_aso=$tabla["view04_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$usua_aso=$tabla["usua_aso"];
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



    <table width="823" height="1206" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="142" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"  >
		
		<!-- background="iconos/f_cabview.jpg" -->
		<table width="772" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="129" height="84"
			
                 rowspan="3" align="center" valign="middle"><img src="img_asociados/<? echo($favicon_aso); ?>" width="100" height="100">
			
					
			</td>
		    <td width="397" height="77">
<?   
  	if(strlen(trim($logo_aso))==0) { ?>
       <span class="logo_aso"><? echo ($rsocial_aso); ?></span>		
<? 	}else{ ?>
        <img src=" <?php echo "img_asociados/".$logo_aso ?> " width="200" height="%" />
<?  } ?>  
			
			
			
			</td>
		    <td width="246" class="giro"><? echo $gironeg_aso; ?></td>
	      </tr>
		  </table>
		  </td>
      </tr>
      <tr>
        <td height="328" colspan="2" align="center" valign="middle" bgcolor="#EEF6F8"><img src="<?php echo "img_asociados/".$img1_aso ?>" width="<? echo $vw_ancho; ?>"  height="%"></td>
      </tr>
      <tr>
        <td width="513" height="126" align="center" valign="middle" bgcolor="#CCCCCC" class="productos_aso"><? echo $productos_aso."<br>"; ?></td>
		
		
        <td width="310" height="126" align="center" valign="middle" bgcolor="#CCCCCC" >
		
		<? if ($usua_aso=="S") { ?>
		
		<a href="../idxcatalogo.php?xcod=<?php  echo($cod_aso); ?>"><img src="iconos/bot_catalogo_digital_ok.png" width="239" height="89"></a> 	
		


		<? } else { ?>
		<img src="iconos/bot_catalogo_digital_bl.png" width="239" height="89">
			
		<? } ?>
		</td>
      </tr>
      <tr>
        <td height="11" colspan="2" align="center" bgcolor="#000000" class="txt_view_pie">&nbsp;</td>
      </tr>
      <tr>
        <td height="11" colspan="2" align="center" bgcolor="#000000" class="txt_view_pie"><table width="773" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="448" height="31" colspan="3"><table width="755" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="564" align="center"><span class="txt_view_direcc"><? echo $direccion_aso."<br>"; ?></span></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="3" align="center"><span class="txt_view_dir_otros"><? echo $referencia_aso."<br>"; ?></span></td>
          </tr>
          <tr>
            <td colspan="3" align="center"><span class="txt_view_telf"><? echo $telf1_aso." - ".$telf2_aso; ?></span></td>
          </tr>
          <tr>
            <td colspan="3" align="center" valign="middle"><table width="764" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center"><span class="txt_view_dir_otros"><? echo $distrito_aso; ?></span></td>
                <td align="center"><span class="txt_view_dir_otros"><? echo $provincia_aso; ?></span></td>
                <td align="center"><span class="txt_view_dir_otros"><? echo $departamento_aso." ".$departamentotxt_aso; ?></span></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="34" colspan="3" align="center" valign="middle" class="txt_view_pie"><? echo $cod_aso." - ". "Latitud: ".$latitud_aso." - "." Longitud: ".$longitud_aso." - ".$date_aso ; ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="8" colspan="2" bgcolor="#0099CC">&nbsp;</td>
      </tr>
      <tr>
        <td height="400" colspan="2">
		
    <div id="map" style="height: 400px; width: 100%; box-shadow: 0px -5px 9px 0px rgba(0,0,0,0.75)"></div>
		
		
		
		
		</td>
      </tr>
      <tr>
        <td height="15" colspan="2">Acceso solo a propietarios:<a href="ingre.php?xcod=<? echo ($cod_aso);?>&xiclave=SI&xrsocial=<? echo ($rsocial_aso);?>&xusua=<? echo ($usua_aso);?> ">" SOY PROPIETARIO "</a></td>
		
      </tr>
    </table>
<p>&nbsp;</p>
<footer>
        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CLIENTES</h2>
                <p>PorMiZona.com.pe es una página gratuita.
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
					- Favicon
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
            <h3>Arequipa - 2024</h3>
        </div>
</footer>
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