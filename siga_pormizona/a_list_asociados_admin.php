<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iTEMS Administrador</title>
<style type="text/css">
.TITULO_NARANJA {
	color: #FC0;
	font-weight: bold;
}
.diez {	font-size: 9px;
}
.texto_tablas11 {	font-size: 11px;
}
.tabla10 {
	font-size: 10px;
	font-family: Tahoma, Geneva, sans-serif;
}
.TITULO {
	font-size: 12px;
	color: #000;
}
.tit_menu_sup {
	color: #000;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$bxproducto=$_GET['bxproducto'];
// ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
  // $xdelreg="NOOO";
$xareg=$_GET['xareg'];

$xdelreg=$_GET['xdelreg'];
$viewmodi=$_GET['viewmodi'];
// ++++$xtipoi=$_GET['xtipoi'];

$xgl=$_GET['xgl']; //CMRD
		
// ********++  DEL REGISTRO
if ($xdelreg=="SIDELREG") {
   $idx=$_GET['idx']; 
   $delcod=$_GET['delcod'];
   echo ("AHora estor dentro dl IFFFFF". "SIDELREG" . "delcod=====: "." ".$delcod);
   $query = "delete from asociado_51 where cod_aso ='$delcod'";  
   $result = mysqli_query($connec,$query); 
   $xdelreg="NO";
}
?>

<table width="1090" border="1" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td colspan="2" bgcolor="#000066" class="tit_menu_sup"><table width="904" height="63" border="0" cellpadding="0" cellspacing="0">
       <tr>
         <td width="121" align="center" valign="top"><img src="iconos/ico_yo_sigachef.png" width="120" height="60"></td>
         <td width="575"><div align="center"><span class="TITULO_NARANJA">ADMINISTRADOR - ASOCIADOS ***** P. Mi ZONA</span></div></td>
         <td width="154" align="center" valign="middle"><img src="iconos/logo_cli_120_60_png.png" width="120" height="60"></td>
       </tr>
</table>
  <tr class="tit_menu_sup">
    <td width="1076" height="76" align="center" bgcolor="#FFFFCC"><table width="912" border="3" cellspacing="0" cellpadding="5">
      <tr>
        <td width="63" height="17" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=SMRP">TODO</a></td>
        <td width="64" align="center" class="tabla10"><a href="a_list_asociados_admin.php?xgl=Y">FECH.HOY</a></td>
        <td width="98" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=M">M.BONITA</a></td>
        <td width="89" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=R">R.STORE</a></td>
        <td width="88" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=P">PERFUMERIA</a></td>
        <td width="510" rowspan="2" align="center">
          <form id="form0" name="form0" method="get" action="a_list_asociados_admin.php">
            <table width="395" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
              <tr>
                <td width="250" height="28" bgcolor="#FFCC66"> Dato a buscar Producto.:
                  <input name="bxproducto" type="text" id="bxproducto" size="25" maxlength="60" onKeyUp="this.value=this.value.toUpperCase();"/></td>
                
                <td width="139" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                
                </tr>
              </table>
            </form>
          
          </td>
        </tr>
    </table>
    </td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="262" valign="top" bgcolor="#FFFFCC">
    <!-- INICIO DE MUESTRA ITEMS -->
    <table width="1082" height="80" border="1" cellspacing="0">
      <tr bgcolor="#CCFFFF" class="diez">
        <td width="45" align="center">COD. Item</td>
        <td width="68">FAVICON</td>
        <td width="63">IMAGEN</td>
        <td width="60">LOGO</td>
        <td width="28">Grupo</td>
        <td width="218" align="center">R. SOCIAL</td>
        <td width="77" align="center">GIRO</td>
        <td width="77" align="center">GEOLOCALIZA</td>
        <td width="44" align="center">fecha</td>
        <td width="71" align="center">PUBLICO 01</td>
        <td width="62">CATG. V4</td>
        <td width="46">FAVICON</td>
        <td width="45">IMAGEN1</td>
        <td width="37">LOGO</td>
        <td width="52" align="center">EDITAR TXT</td>
        <td width="23" align="center">DEL Reg.</td>
      </tr>
      <?php 


if(strlen($bxproducto)==0){
	if ($xgl=="SMRD") {
        $result=mysqli_query($connec,"select * from asociado_51 order by rsocial_aso");
	}elseif ($xgl=="Y") {
		echo ( "YA ESTOY AQUIIIIIIIIIIIIIIII YYY");
        $result=mysqli_query($connec,"select * from asociado_51 order by datehoy_aso DESC");
	}else{
		$result=mysqli_query($connec,"select * from asociado_51 order by rsocial_aso");
        //$result=mysqli_query($connec,"select * from asociado_51 where grupolista_it like '%$xgl%' order by rsocial_aso");
	}
} else {
$bxproducto1=trim($bxproducto);
$result=mysqli_query($connec,"select * from asociado_51 where productos_aso like '%$bxproducto%' OR  rsocial_aso like '%$bxproducto%' order by rsocial_aso");
}



//$result=mysql_query("select * from a_items",$connec);
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
	$pass_aso=$tabla["pass_aso"];

	$date_aso=$tabla["date_aso"];
	
	$categoria_aso=$tabla["categoria_aso"];
	$productos_aso=$tabla["productos_aso"];
	$latitud_aso=$tabla["latitud_aso"];
	$longitud_aso=$tabla["longitud_aso"];
	$favicon_aso=$tabla["favicon_aso"];
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_pmz_bl.png";
	}
	$logo_aso=$tabla["logo_aso"];
	if(strlen($logo_aso)==0) {
		$logo_aso="f_pmz_bl.png";
	}

$img1_aso=$tabla["img1_aso"];
	if(strlen($img1_aso)==0) {
		$img1_aso="f_pmz_bl.png";
	}

$img2_aso=$tabla["img2_aso"];


$date_aso=$tabla["date_aso"];	
$publicidad_aso=$tabla["publicidad_aso"];	
$grupolista_aso=$tabla["grupolista_aso"];

$view1_aso=$tabla["view1_aso"];
$view2_aso=$tabla["view2_aso"];
$view3_aso=$tabla["view3_aso"];
$view4_aso=$tabla["view4_aso"];
$usua_aso=$tabla["usua_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$obsinterno_aso=$tabla["obsinterno_aso"];

?>
      
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td bgcolor="#FFFFFF"><?php echo($cod_aso) ?></td>

        <td valign="middle" bgcolor="#FFFFFF"><a href="viewasociado.php?xcod=<?php  echo($cod_aso); ?>"><img src=" <?php echo "img_asociados/".$favicon_aso ?> " width="60" height="%" /></a></td>
        <td bgcolor="#FFFFFF"><img src=" <?php echo "img_asociados/".$img1_aso ?> " width="60" height="%" /></td>
        <td bgcolor="#FFFFFF"><img src=" <?php echo "img_asociados/".$logo_aso ?> " width="60" height="%" /></td>
        <td bgcolor="#FFFFFF"><?php echo($categoria_aso) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($rsocial_aso) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($gironeg_aso) ?></td>
        <td align="right" bgcolor="#FFFFFF"><? echo($latitud_aso." ".$longitud_aso) ?></td>
        <td align="right" bgcolor="#FFFFFF"><? echo($date_aso) ?></td>
        <td align="right" bgcolor="#FFFFFF"><? echo($direccion_aso) ?></td>
        <td align="right" bgcolor="#FFFFFF"><?
		if ($usua_aso=="S") { // TIENE CONTRATO DE CATALOGO?>  
			<a href="../siga_catalogo/catalogo_list_items_admin.php?xusername=<?php  echo($email_aso); ?>&xpassword=<?php echo($pass_aso); ?>">CATALG</a>
      <? } ?>
		 </td>
        <td bgcolor="#FFCC66" align="center"><a href="img_asociados/n_subir_xfile.php?xcod=<?php  echo($cod_aso); ?>&xtip=01"><img src="iconos/ico_favicon.png" width="30" height="30"></a></td>                                                                  
        <td bgcolor="#FFCC66" align="center"><a href="img_asociados/n_subir_xfile.php?xcod=<?php  echo($cod_aso); ?>&xtip=02"><img src="iconos/ico_imagen.png" width="30" height="30"></a></td>                                                                  
        <td bgcolor="#FFCC66" align="center"><a href="img_asociados/n_subir_xfile.php?xcod=<?php  echo($cod_aso); ?>&xtip=03"><img src="iconos/ico_logo.png" width="30" height="30"></a></td>                                                                  

        <td align="center" bgcolor="#FFCC66" class="tabla10"><a href="edit_asociados_admin.php?xcod=<?php  echo($cod_aso); ?>&xview=<?php  echo("ADMIN"); ?>&xareg=NNOOO&xmodi=NOOOOO&xdelreg=NOOOOO"><img src="iconos/ico_editar.png" width="30" height="30"></a></td>

        <td align="center"><a href="a_list_asociados_admin.php?delcod=<?php echo($cod_aso);?>&xdelreg=<?php echo("SIDELREG");?>&xareg=NNOOO&xmodi=NOOOOO&viewmodi=NOOOO&idx=NOOOO">X</a></td>
        
      </tr>
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
