<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" /> 
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
	$estado_aso=$tabla["estado_aso"];
	$referencia_aso=$tabla["referencia_aso"];
	$telf1_aso=$tabla["telf1_aso"];
	$telf2_aso=$tabla["telf2_aso"];
	$email_aso=$tabla["email_aso"];
	$date_aso=$tabla["date_aso"];
	$categoria_aso=$tabla["categoria_aso"];

    $resultaso=mysqli_query($connec,"SELECT * FROM categoria   where cod_cat='$categoria_aso'");
	$tablaaso =mysqli_fetch_array( $resultaso );
	$categoriatxt_aso=$tablaaso["categoria_cat"];
	
	
	$productos_aso=$tabla["productos_aso"];
	$favicon_aso=$tabla["favicon_aso"];
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_dencuentro_bl.jpg";
	}
	$latitud_aso=$tabla["latitud_aso"];
	$longitud_aso=$tabla["longitud_aso"];


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



         <?
		 echo $rsocial_aso ;
		 ?>
      <!-- inicio de boton obligatorio -->         


    

  <table width="778" border="1" align="center" cellpadding="0" cellspacing="0">


  <tr>
    <td width="150" height="39" class="txt_view_pequeño" >Categoría:</td>
    <td width="150"  ><? echo $categoria_aso.": ".$categoriatxt_aso."<br>"; ?></td>
  </tr>
  <tr>
    <td height="20" class="txt_view_pequeño" >Productos:</td>
    <td width="20"  ><? echo $productos_aso."<br>"; ?></td>
  </tr>
  <tr>
    <td height="36" class="txt_view_pequeño">Dirección: </td>
    <td ><? echo $direccion_aso."<br>"; ?></td>
  </tr>
  <tr>
    <td height="32" class="txt_view_pequeño">Teléfono :</td>
    <td><? echo $telf1_aso." / ".$telf2_aso."<br>"; ?></td>
  </tr>
  <tr>
    <td height="32" class="txt_view_pequeño">Referencia: </td>
    <td ><? echo $referencia_aso."<br>"; ?></td>
  </tr>
</table>

 


    <table width="250" border="0" cellpadding="0" cellspacing="0">
    
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
    <td colspan="2" class="busraya"><p>--------------------------------------------------------------------------------------------</p>
     </td>


    </tr>
   
    </table>
      <p>&nbsp;</p>
 

         <? echo $email_aso."<br>"; ?>     
		 <? echo $estado_aso." - ".$pais_aso."<br>"; ?>
		 <? echo "<br>"; ?>
   		 <? echo $cod_aso." - ".$date_aso."<br>"; ?>         
         <? echo "la: ".$latitud_aso." lo: ".$longitud_aso."<br>"; ?>


		

   
    

   Acceso solo a propietarios:  
    
     
     
     <a href="ingre.php?xid=<? echo ($xid);?> "><img src="imagenes/bot_soypropietario.png" width="156" height="23" style="border:0;" onmouseover="this.style.border='solid  2px #FFFFFF';" onmouseout="this.style.border=0;" border="0"></a>






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