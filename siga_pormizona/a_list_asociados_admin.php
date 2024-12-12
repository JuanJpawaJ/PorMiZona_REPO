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
$xmodi=$_GET['xmodi'];
$xdelreg=$_GET['xdelreg'];
$viewmodi=$_GET['viewmodi'];
// ++++$xtipoi=$_GET['xtipoi'];

$xgl=$_GET['xgl']; //CMRD
		
if ($xareg=="SIAREG") {
  // genera el codigo de 6 digitos en base al max id anterior
  $rs = mysqli_query($connec,"SELECT MAX(id) AS id FROM a_items");
   if ($row = mysqli_fetch_row($rs)) {
	   $idid = trim($row[0]);
   }
   $codigo_it=substr((string)$idid+1000001,1);
   $codfabrica_it=$_GET['xcodfabrica'];
   $producto_it=$_GET['xproducto'];
   $grupolista_it=$_GET['xgrupolista'];
   $marka_it=$_GET['xmarka'];
   $fabricante_it=$_GET['xfabricante'];
   $precom_it=$_GET['xprecom'];
   $monelista_it=$_GET['xmonelista'];      
   $pv01_it=$_GET['xpv01'];
   $pv02_it=$_GET['xpv02'];
   $pr03_it=$_GET['xpv03'];
   $img_it=$_GET['ximg'];
   $stockmin_it=$_GET['xstockmin'];
   $lugar_al_it=$_GET['xlugar_al'];
   $view01_it=$_GET['xview01'];
   $view02_it=$_GET['xview02'];
   $view03_it=$_GET['xview03'];
   $view04_it=$_GET['xview04'];
   $time_entrega_it=$_GET['xtime_entrega'];
   $msjpublico_it=$_GET['xmsjpublico'];
   $obscompra_it=$_GET['xobscompra'];

 // echo  "codigo: ".  $codigo_it."<br>";
 //  echo  "codfab: ".  $codfabrica_it."<br>";
 //  echo  "prod: ".  $producto_it."<br>";
 //  echo  "grupo: ".  $grupolista_it."<br>";
 //  echo  "marka: ".  $marka_it."<br>";
 //  echo  "fab: ".  $fabricante_it."<br>";
 //  echo  "precom: ".  $precom_it."<br>";
 //  echo  "prevn: ".  $preven_it."<br>";
 //  echo  "pje: ".  $pje1_it."<br>";
 //  echo  "img: ".  $img_it."<br>";
 //  echo  "publico: ".  $publico_it."<br>";
 //  echo  "oferta: ".  $oferta_it."<br>";
 //  echo  "mone: ".  $monelista_it."<br>";   


   // verifica si hay duplicados ....
   //$result=mysql_query("select * from a_items where producto_it=$xproducto",$connec);
   //$total=mysql_num_rows($result);
   //if ($total==0) {
	   $xspce="s";
	   $xum=0;
	   

     $sql="INSERT INTO a_items (codigo_it,codfabrica_it,producto_it,grupolista_it,marka_it,fabricante_it, precom_it,monelista_it, pv01_it,pv02_it,pv03_it,img_it,stockmin_it,lugar_al_it,view01_it, view02_it,view03_it,view04_it,time_entrega_it,msjpublico_it,obscompra_it) VALUES 
('$codigo_it','$codfabrica_it','$producto_it','$grupolista_it','$marka_it','$fabricante_it','$precom_it','$monelista_it', '$pv01_it', '$pv02_it','$pv03_it', '$img_it','$stockmin_it','$lugar_al_it','$view01_it','$view02_it','$view03_it','$view04_it','$time_entrega_it','$msjpublico_it','$obscompra_it')";
     $result=mysqli_query($connec,$sql);
     if($result){
	   echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
     }else{
	   echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
     }	
   //}
   $xareg="NO";
   $xmodi="NOOO";
   $xdelreg="NOOO";
  
   
} // ********++  FFFIIINNN  NUEVO REGISTROS 

// ********++  MODIFICA REGISTRO
if ($xmodi=="SIMODI") {

   $idmodi=$_GET['xidmodi'];	
   $xcodfab=$_GET['xcodfab'];
   $xproducto=$_GET['xproducto'];
   $xmarka=$_GET['xmarka'];
  $xventa=$_GET['xventa'];
   $xcosto=$_GET['xcosto'];
   $ximg=$_GET['ximg'];
$sql="UPDATE a_items SET codfabrica_it='$xcodfab',producto_it='$xproducto',producto_it='$xproducto',marka_it='$xmarka',preven_it='$xventa',img_it='$ximg' WHERE id=$idmodi";

   $result=mysqli_query($connec,$sql);
   if($result){
 	echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
   }else{
	echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   }	
   $xmodi="NO";
   $xareg="NO";
   $xdelreg="NOOO";

}  // ********++  FFFIIINNN  MODIFICA
// ******************* COMO RETORNO *************************
// ********++  DEL REGISTRO
if ($xdelreg=="SIDELREG") {
	
 
   $idx=$_GET['idx']; 
   $delcod=$_GET['delcod'];

echo ("AHora estor dentro dl IFFFFF". "SIDELREG" . "delcod=====: "." ".$delcod);

   $query = "delete from asociado_51 where cod_aso ='$delcod'";  
   $result = mysqli_query($connec,$query); 
  
   $xdelreg="NO";
   $xareg="NO";
   $xmodi="NOOO";
}
?>

  <table width="926" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" bgcolor="#000066" class="tit_menu_sup"><table width="904" height="63" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="121" align="center" valign="top"><img src="iconos/ico_yo_sigachef.png" width="120" height="60"></td>
        <td width="575"><div align="center"><span class="TITULO_NARANJA">ADMINISTRADOR - ASOCIADOS ***** P. Mi ZONA</span></div></td>
        <td width="154" align="center" valign="middle"><img src="iconos/logo_cli_120_60_png.png" width="120" height="60"></td>
        </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="679" align="center" bgcolor="#FFFFCC"><table width="912" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="63" height="17" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=SMRP">TODO</a></td>
        <td width="64" align="center" class="tabla10"><a href="a_list_asociados_admin.php?xgl=Y">FECH.HOY</a></td>
        <td width="98" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=M">M.BONITA</a></td>
        <td width="89" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=R">R.STORE</a></td>
        <td width="88" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=P">PERFUMERIA</a></td>
        <td width="510" rowspan="2" align="center">
    <form id="form0" name="form0" method="get" action="a_list_items_admin.php">
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
      <tr>
        <td height="17" colspan="5" align="center" class="tabla10">
		<? if ($xgl=="SMRD") {
			 echo "TODO";
		   }elseif ($xgl=="Y") {
			  echo "X FECHA HOY";			   
		   }elseif ($xgl=="M") {
			 echo "MUJER BONITA";			
		   }elseif ($xgl=="R"){   
			 echo "REGAL STORE";
		   }elseif ($xgl=="D"){   
			 echo "DELIBEARS";			   
		   } ?>
			    </td>
        </tr>
    </table></td>
    <td width="5" bgcolor="#FFFFCC">&nbsp;</td>
    <td width="390" colspan="2" bgcolor="#FFFFCC"height="76" align="center"><table width="600" border="1">
      <tr>
        <td width="64"><a href="../index.php">INDEX</a></td>
        <td width="188"> <a href="ilbupsil.php">publico</a></td>
        <td width="283"><a href="mesas.php"><img src="iconos/ico_retornoamesas.png" width="64" height="64" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" /></a></td>
        <td width="37">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr class="tit_menu_sup">
    <td height="262" colspan="2" rowspan="4" valign="top" bgcolor="#FFFFCC">
    <!-- INICIO DE MUESTRA ITEMS -->
    <table width="1119" height="80" border="1" cellspacing="0">
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
        <td width="49">UTIL 01</td>
        <td width="43">FAVICON</td>
        <td width="56">IMAGEN1</td>
        <td width="38">LOGO</td>
        <td width="56" align="center">EDITAR TXT</td>
        <td width="60" align="center">DEL Reg.</td>
      </tr>
      <?php 


  
//$result=mysql_query("select * from items order by codfabrica_it",$connec);

 


if(strlen($bxproducto)==0){
	if ($xgl=="SMRD") {
        $result=mysqli_query($connec,"select * from asociado_51 order by rsocial_aso");
	}elseif ($xgl=="Y") {
		echo ( "YA ESTOY AQUIIIIIIIIIIIIIIII YYY");
        $result=mysqli_query($connec,"select * from asociado_51 order by datehoy_aso");
	}else{
        $result=mysqli_query($connec,"select * from asociado_51 where grupolista_it like '%$xgl%' order by rsocial_aso");
	}
} else {
$bxproducto1=trim($bxproducto);
$result=mysqli_query($connec,"select * from asociado_51 where producto_it like '%$bxproducto1%' order by rsocial_aso");
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
        <td align="right" bgcolor="#FFFFFF"><? echo($view1_aso) ?></td>
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
         
    <td colspan="2" valign="top" bgcolor="#FFFFCC">
    <?php
	if($viewmodi<>"SIVM"){
	?>
    <form id="form1" name="form1" method="get" action="a_list_items_admin.php">
    <table width="290" border="1" class="tablaingrenuevo">
    <tr>
      <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>INGRESO NUEVO ITEM</strong></div></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B"><span class="TITULO">Cod. Item</span></td>
      <td bgcolor="#FDF19B">&nbsp;</td> <!-- xcod -->
    </tr>
    <tr>
      <td height="26" colspan="2" bgcolor="#FDF19B" class="TITULO">Producto: (Tx. para factura) Ej. MOUSE GAMER A.. <br>  
        (120 caracteres)</td>
      </tr>
    <tr>
      <td colspan="2" class="TITULO">
      <input name="xproducto" type="text" id="xproducto" size="45" maxlength="120" onKeyUp="this.value=this.value.toUpperCase();" /></td>
      </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Cod. Modelo.</td>
      <td><span class="TITULO">
        <input name="xcodfabrica" type="text" id="xcodfabrica" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
        </span></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Marca</td>
      <td><span class="TITULO">
        <input name="xmarka" type="text" id="xmarka" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
        </span></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Fabricante</td>
       <td><span class="TITULO">
        <input name="xfabricante" type="text" id="xfabricante" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
      </span></td>

    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Observaciones para el publico.</td>
      <td><span class="TITULO">
        <textarea name="xmsjpublico" id="xmsjpublico" cols="27" rows="5"></textarea>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" class="TITULO">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFF66" class="TITULO">LOS SIGUIENTES DATOS: (Solo si es necesario)</td>
      </tr>
    <tr>
      <td bgcolor="#FFFF66" class="TITULO">Prec. compra</td>
      <td><span class="TITULO">
        <input name="xprecom" type="text" id="xprecom" size="10" maxlength="10" onKeyUp="this.value=this.value.toUpperCase();" />
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#FFFF66" class="TITULO">Moneda &quot;S&quot; - &quot;D&quot;</td>
      <td><span class="TITULO">
        <input name="xmonelista" type="text" id="xmonelista" size="1" maxlength="1" onKeyUp="this.value=this.value.toUpperCase();" value="S" />
        </span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFF66" class="TITULO">La Imagen (JPG 120 X 73) en la orpcion: [Modificar]</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B" class="TITULO">
        <input name="ximg" type="text" id="ximg" size="45" maxlength="60" /></td>
      </tr>
    <tr>
      <td bgcolor="#FFFF66" class="TITULO">Precio Venta 01</td>
      <td><span class="TITULO">
        <!-- <input name="xpreven" type="text" id="xpreven" size="15" maxlength="15" /> -->
 
        <input name="xpv01" type="text" id="xpv01" size="10" maxlength="10" onKeyUp="this.value=this.value.toUpperCase();" />
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#FFFF66"><span class="TITULO">Observaciones para el administrador</span></td>
      <td><span class="TITULO">
        <textarea name="xobscompra" id="xobscompra" cols="27" rows="5"></textarea>
      </span></td>
    </tr>
    <tr>
      <td colspan="2"><table width="306" border="1">
        <tr>
          <td width="120" rowspan="2" align="center" bgcolor="#FFFF66" class="tabla10">S SR M MR P PR SMRP</td>
          <td width="170" class="tabla10">Syscom, M.Bonita, Regalos, Perfume</td>
        </tr>
        <tr>
          <td><input name="xgrupolista" type="text" id="xgrupolista" size="4" maxlength="4" onKeyUp="this.value=this.value.toUpperCase();" /></td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td width="98"><span class="TITULO">
     <input type="hidden" name="xpv02" value=0/>
     <input type="hidden" name="xpv03" value=0/>
     <input type="hidden" name="xstockmin" value=0/>
     <input type="hidden" name="xlugar_al" value=""/>
     <input type="hidden" name="xview01" value="S"/>
     <input type="hidden" name="xview02" value=""/>
     <input type="hidden" name="xview03" value=""/>
     <input type="hidden" name="xview04" value=""/>
     <input type="hidden" name="xtime_entrega" value=""/>
     <input type="hidden" name="xareg" value="<?php echo("SIAREG"); ?>" />
     <input type="hidden" name="xmodi" value=NOOO/>
     <input type="hidden" name="xcosto" value=NOOO/>
     <input type="hidden" name="xdelreg" value=NOOO/>
     <input type="hidden" name="viewmodi" value=NOOO/>
        <input name="Submit" type="submit" class="Estilo38" value="-&gt; Guardar &lt;-" />
      </span></td>
      <td width="180"><span class="TITULO">
        <input name="Submit2" type="reset" class="Estilo38" value="Borrar" />
      </span></td>
    </tr>
  </table>
</form>
</td>
    </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC">
          <?php 
// ************************  VER FORMULARIO DE MODIFICAR 
} elseif($viewmodi=="SIVM"){
   $idx=$_GET['idx']; 

$result=mysqli_query($connec,"select * from a_items where id=$idx");	

$tabla = mysqli_fetch_array( $result );
		$idmodi=$tabla["id"];
		$codigo_it=$tabla["codigo_it"];
		$codfabrica_it=$tabla["codfabrica_it"];
		$producto_it=$tabla["producto_it"];
		$marka_it=$tabla["marka_it"];
		$precom_it=$tabla["precom_it"];
		$preven_it=$tabla["preven_it"];
		$img_it=$tabla["img_it"];


?>
    
        <form id="form1" name="form1" method="get" action="a_list_items_admin.php">
          <table width="290" border="1" class="tablaingrenuevo">
            <tr>
              <td colspan="2" bgcolor="#FF0000"><div align="center"><strong>MODIFICA  ITEM</strong></div></td>
            </tr>
            <tr>
              <td bgcolor="#FDF19B"><span class="TITULO">Cod. Item</span></td>
              <td bgcolor="#FDF19B"><?php echo($codigo_it); ?></td>
              <!-- xcod -->
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Grupo: Ej. 100, 200, 300, 400, 500</span></td>
            </tr>
            <tr>
              <td colspan="2"><span class="TITULO">
                <input name="xcodfab" type="text" id="xcodfab" size="30" maxlength="30" value="<?php echo($codfabrica_it); ?>" onKeyUp="this.value=this.value.toUpperCase();"  />
              </span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B" class="TITULO">Producto</td>
            </tr>
            <tr>
              <td colspan="2"><span class="TITULO">
                <input name="xproducto" type="text" id="xproducto" size="35" maxlength="60" value="<?php echo($producto_it); ?>" onKeyUp="this.value=this.value.toUpperCase();"  />

              </span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Insumos = PRIMA</span></td>
            </tr>
            <tr>
              <td colspan="2"><span class="TITULO">
                <input name="xmarka" type="text" id="xmarka" size="30" maxlength="30" value="<?php echo($marka_it); ?>" onKeyUp="this.value=this.value.toUpperCase();"  />
              </span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B" class="TITULO">Imagen (JPG 120 X 73)</td>
            </tr>
            <tr>
              <td colspan="2" class="TITULO"><input name="ximg" type="text" id="ximg" size="45" maxlength="60" value="<?php echo($img_it); ?>"/></td>
            </tr>
            <tr>
              <td bgcolor="#FDF19B" class="TITULO">P.Venta:</td>
              <td><span class="TITULO">
                <input name="xventa" type="text" id="xventa" size="15" maxlength="15" value="<?php echo($preven_it); ?>" />
              </span></td>
            </tr>
            <tr>
              <td width="98"><span class="TITULO">
                <input type="hidden" name="xmodi" value="<?php echo("SIMODI"); ?>" />
                <input type="hidden" name="xidmodi" value="<?php echo($idmodi); ?>" />
                <input type="hidden" name="xcosto" value="<?php echo($precom_it); ?>" />
                <input type="hidden" name="xdelreg" value=NOOO/>
                <input type="hidden" name="xareg" value=NOOO/>
                <input type="hidden" name="viewmodi" value=NOOO/>
                <input name="Submit3" type="submit" class="Estilo38" value="-&gt; Guardar &lt;-" />
              </span></td>
              <td width="180"><span class="TITULO">
                <input name="Submit3" type="reset" class="Estilo38" value="Borrar" />
              </span></td>
            </tr>
          </table>
        </form>
      </td>
  </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC"><a href="img_items/n_subir_xfile.php?id_img=<?php echo ($idmodi); ?>">ir</a></td>
  </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC">ññ</td>
  </tr>
  
  <?php  } // ************************  FFFIIIINNNN FORMULARIO DE MODIFICAR  ?>
  
</table>

<p>&nbsp;</p>
</body>
</html>
