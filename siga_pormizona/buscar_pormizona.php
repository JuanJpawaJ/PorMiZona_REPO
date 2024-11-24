<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		font-size: 18px;
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

  <table width="778" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="77" align="center" class="tit_menu_sup">
    
 
    
    
    
    
    POR MI ZONA</td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="774" height="141" align="center" bgcolor="#FFFFCC"><table width="740" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="99" colspan="2" align="center" bgcolor="#000000" class="tabla10" ><img src="../static/imgs/Logos/logo_pormizona_borde_bl.png" width="285" height="86"></td>
          <td width="312" rowspan="3" align="center" bgcolor="#000000"  class="tabla10" >
          <? if ($xxxciudad=="SI") { ?>
		     <img src="img_asociados/<? echo ($imgciudad) ?>" width="300" height="225">
		  <? } else { 
  echo ("ESTA ES LA CIUDAD ESPERO SE PUEDA VER...".$imgciudad);		  
		  ?>
            <iframe id="mapa" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d402.28170424441254!2d<?php echo ($longitud) ?>!3d<?php echo ($latitud) ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe"> </iframe>		
          <? } ?>  
            
          </td>
        </tr>
        <tr>
        <td width="200" height="71" align="center" class="tabla10" >
             <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	
	 	           SU LATITUD ES:  <img src="iconos/alerta.png" width="25" height="22"> <br>
             <? } else { ?>
			        SU LATITUD ES: <? echo $latitud; ?> <br>
 		     <? } ?>

        </td>
        <td width="228" align="center" class="tabla10" >
        
             <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	
	               SU LONGITUD ES:  <img src="iconos/alerta.png" width="25" height="22"> <br>
             <? } else { ?>
			        SU LONGITUD ES: <? echo $longitud; ?> <br>
 		     <? } ?>
   
        </td>
        </tr>
      <tr>

   <td height="72" colspan="2" align="center" class="tabla10" >
     <form id="form0" name="form0" method="get" action="buscar_pormizona.php">
       <table width="371" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
         <tr>
           <td width="234" height="50" bgcolor="#FFCC66"> <span class="T_QUE">¿Que está buscando?:</span>  
             <input name="texto" type="text" id="texto" size="30" maxlength="60" value="<?php echo($bxproducto); ?>" /></td>
             <input type="hidden" name="longitud" value="<?php echo($longitud); ?>" />
             <input type="hidden" name="latitud" value="<?php echo($latitud); ?>" />
           <td width="131" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
           </tr>
         </table>
       </form>
   </td>
  </tr>
      <tr>
        <td height="27" colspan="3" align="center" bgcolor="#0099FF" class="tabla10"><span class="rsocial"><?php echo($titulo) ?></span></td>
        
                                                                    
        </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="188" valign="top" bgcolor="#FFFFCC">
      <!-- INICIO DE MUESTRA ITEMS -->
      <table width="769" height="155" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" >
        
		
		
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
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_pmz_bl.png";
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
          <td width="767" height="153" valign="middle">
          
              <div class="lista"><a href="viewasociado.php?xcod=<?php  echo($cod_aso); ?>">

            <table width="751" border="0" cellspacing="0" cellpadding="1">
              <tr>
                 <td width="150" rowspan="3" align="center" valign="middle"><img src="img_asociados/<? echo($favicon_aso); ?>" width="100" height="100"></td>
                 
                <td width="418" height="41" align="left" bgcolor="#FFFFFF"><span class="rsocial"><?php echo($rsocial_aso) ?></span></td>
                <td width="177" align="left" bgcolor="#FFFFFF"><span class="viewtexto"><?php echo($gironeg_aso) ?></span></td>
              </tr>
              <tr>
                <td height="37" align="left" bgcolor=#FFFFFF ><span class="viewtexto"><?php echo($direccion_aso) ?></span></td>
                <td height="37" align="left" bgcolor=#FFFFFF ><span class="viewtexto"><?php echo($telf1_aso) ?></span></td>
              </tr>
              <tr>
                <td height="52" colspan="2" align="left" bgcolor=#FFFFFF ><span class="viewtexto">
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
