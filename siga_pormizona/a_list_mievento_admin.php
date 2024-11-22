<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi Evento Administrador</title>
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
   $xdelreg="NOOO";
$xareg=$_GET['xareg'];
$xmodi=$_GET['xmodi'];
$xdelreg=$_GET['xdelreg'];
$viewmodi=$_GET['viewmodi'];
// ++++$xtipoi=$_GET['xtipoi'];

$xgl=$_GET['xgl']; //CMRD

		
if ($xareg=="SIAREG") {
  // genera el codigo de 6 digitos en base al max id anterior
  $rs = mysqli_query($connec,"SELECT MAX(id) AS id FROM mievento_51");
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
   //$result=mysql_query("select * from xxxxx where producto_it=$xproducto",$connec);
   //$total=mysql_num_rows($result);
   //if ($total==0) {
	   $xspce="s";
	   $xum=0;
	   

     $sql="INSERT INTO xxxxx (codigo_it,codfabrica_it,producto_it,grupolista_it,marka_it,fabricante_it, precom_it,monelista_it, pv01_it,pv02_it,pv03_it,img_it,stockmin_it,lugar_al_it,view01_it, view02_it,view03_it,view04_it,time_entrega_it,msjpublico_it,obscompra_it) VALUES 
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
$sql="UPDATE xxxxx SET codfabrica_it='$xcodfab',producto_it='$xproducto',producto_it='$xproducto',marka_it='$xmarka',preven_it='$xventa',img_it='$ximg' WHERE id=$idmodi";

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
   $query = "delete from xxxxx where codigo_it ='$delcod'";  
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
        <td width="510" height="34" align="center">
          <form id="form0" name="form0" method="get" action="a_list_mievento_admin.php">
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
    <table width="1216" height="80" border="1" cellspacing="0">
      <tr bgcolor="#CCFFFF" class="diez">
        <td width="44" align="center">COD. Item</td>
        <td width="49">FECHA HOY</td>
        <td width="60">IMAGEN</td>
        <td width="34">codevento</td>
        <td width="122">momevento</td>
        <td width="228" align="center">DESCRI EVENTO</td>
        <td width="51" align="center">FECH INICIO</td>
        <td width="43" align="center">CUOTA S/</td>
        <td width="70" align="center">ANUNCIANTE</td>
        <td width="50" align="center">telf</td>
        <td width="67" align="center">email</td>
        <td width="21">viw01</td>
        <td width="48">msj pub</td>
        <td width="42">FAVICON</td>
        <td width="55">IMAGEN1</td>
        <td width="37">LOGO</td>
        <td width="55" align="center">EDITAR TXT</td>
        <td width="66" align="center">DEL Reg.</td>
      </tr>
      <?php 


  


$result=mysqli_query($connec,"select * from mievento_51 ");
$total=mysqli_num_rows($result);


while ($tabla=mysqli_fetch_array($result)){
	
$id=$tabla["id"];
$codigo_mev=$tabla["codigo_mev"];
$codevento_mev=$tabla["codevento_mev"];
$nomevento_mev=$tabla["nomevento_mev"];
$descri_mev=$tabla["descri_mev"];
$finicio_mev=$tabla["finicio_mev"];
$c_ingreso_mev=$tabla["c_ingreso_mev"];
$anunciante_mev=$tabla["anunciante_mev"];
$telf_mev=$tabla["telf_mev"];
$email_mev=$tabla["email_mev"];
$img_mev=$tabla["img_mev"];
$view01_mev=$tabla["view01_mev"];
$view02_mev=$tabla["view02_mev"];
$msjpublico_mev=$tabla["msjpublico_mev"];
$obsinterno_mev=$tabla["obsinterno_mev"];
$latitud_mev=$tabla["latitud_mev"];
$longitud_mev=$tabla["longitud_mev"];
$finicio_mev=$tabla["finicio_mev"];
$fhoy_mev=$tabla["fhoy_mev"];


?>
      
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td bgcolor="#FFFFFF"><?php echo($codigo_mev) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($fhoy_mev) ?></td>

        <td bgcolor="#FFFFFF"><img src=" <?php echo "img_mievento/".$img_mev ?> " width="60" height="%" /></td>
        <td bgcolor="#FFFFFF"><?php echo($codevento_mev) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($nomevento_mev) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($descri_mev) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($finicio_mev) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($c_ingreso_mev) ?></td>
        <td bgcolor="#FFFFFF"><? echo($anunciante_mev) ?></td>
        <td bgcolor="#FFFFFF"><? echo($telf_mev) ?></td>
        <td bgcolor="#FFFFFF"><? echo($email_mev) ?></td>
        <td bgcolor="#FFFFFF"><? echo($view01_mev) ?></td>
        <td bgcolor="#FFFFFF"><? echo($msjpublico_mev) ?></td>
        <td bgcolor="#FFCC66" align="center"><a href="img_mievento/n_subir_xfile.php?xcod=<?php  echo($cod_aso); ?>&xtip=01"><img src="iconos/ico_favicon.png" width="30" height="30"></a></td>                                                                  
        <td bgcolor="#FFCC66" align="center"><a href="img_mievento/n_subir_xfile.php?xcod=<?php  echo($cod_aso); ?>&xtip=02"><img src="iconos/ico_imagen.png" width="30" height="30"></a></td>                                                                  
        <td bgcolor="#FFCC66" align="center"><a href="img_mievento/n_subir_xfile.php?xcod=<?php  echo($cod_aso); ?>&xtip=03"><img src="iconos/ico_logo.png" width="30" height="30"></a></td>                                                                  

        <td align="center" bgcolor="#FFCC66"><a href="edit_mievento_admin.php?xcod=<?php  echo($cod_aso); ?>&xview=<?php  echo("ADMIN"); ?>&xareg=NNOOO&xmodi=NOOOOO&xdelreg=NOOOOO"><img src="iconos/ico_editar.png" width="30" height="30"></a></td>

        <td align="center"><a href="a_list_mievento_admin.php?delcod=<?php echo($codigo_it);?>&xdelreg=<?php echo("SIDELREG");?>&xareg=NNOOO&xmodi=NOOOOO&viewmodi=NOOOO&idx=NOOOO">X</a></td>
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
    <form id="form1" name="form1" method="get" action="a_list_mievento_admin.php">
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

$result=mysqli_query($connec,"select * from xxxxx where id=$idx");	

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
    
        <form id="form1" name="form1" method="get" action="a_list_mievento_admin.php">
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
    <td colspan="2" valign="top" bgcolor="#FFFFCC"><a href="img_mievento/n_subir_xfile.php?id_img=<?php echo ($idmodi); ?>">ir</a></td>
  </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC">ññ</td>
  </tr>
  
  <?php  } // ************************  FFFIIIINNNN FORMULARIO DE MODIFICAR  ?>
  
</table>

<p>&nbsp;</p>
</body>
</html>
