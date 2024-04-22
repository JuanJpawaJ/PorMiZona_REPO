<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LP - CLIENTES</title>
<style type="text/css">
.TITULO_NARANJA {
	color: #FC0;
	font-weight: bold;
}
.diez {	font-size: 10px;
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
$viewmodi=$_GET['viewmodi'];
$xgl=$_GET['xgl'];
?>

  <table width="778" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="tit_menu_sup"><img src="../imagenes/cab_lista_ok.jpg" width="774" height="162"></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="774" height="102" align="center" bgcolor="#FFFFCC"><table width="755" border="1" cellspacing="2" cellpadding="0">
      <tr>

        <td width="92" height="91" align="center" <? if ($xgl=="S") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisgeneral.php?xgl=S"><img src="../imagenes/ico_p_informatica.png" width="72" height="58"></a></td>
        
        <td width="92" align="center" <? if ($xgl=="M") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisgeneral.php?xgl=M"><img src="../imagenes/ico_p_boutique.png" width="72" height="58"></a></td>
        <td width="92" align="center" <? if ($xgl=="R") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisgeneral.php?xgl=R"><img src="../imagenes/ico_p_regalos.png" width="72" height="58"></a></td>
        <td width="92" align="center" <? if ($xgl=="P") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisgeneral.php?xgl=P"><img src="../imagenes/ico_p_perfumeria.png" width="72" height="58"></a></td>
        <td width="362" align="center">
          <form id="form0" name="form0" method="get" action="a_lisgeneral.php">
            <table width="327" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
              <tr>
                <td width="203" height="28" bgcolor="#FFCC66"> <span class="TITULO">Dato a buscar Producto:</span>                  <input name="bxproducto" type="text" id="bxproducto" size="25" maxlength="60" /></td>
                
                <td width="128" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                
                </tr>
              </table>
            </form>
          
          </td>
        </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="262" valign="top" bgcolor="#FFFFCC">
      <!-- INICIO DE MUESTRA ITEMS -->
      <table width="772" height="65" border="1" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="85">IMAGEN</td>
          <td width="569" align="center">PRODUCTO</td>
          <td width="104" align="center">PRECIO</td>
        </tr>
        <?php 


  
//$result=mysql_query("select * from items order by codfabrica_it",$connec);

if(strlen($bxproducto)==0){
        $result=mysqli_query($connec,"select * from a_items where view01_it='S' AND grupolista_it like '%$xgl%' order by producto_it");
} else {
        $bxproducto1=trim($bxproducto);
        $result=mysqli_query($connec,"select * from a_items where producto_it like '%$bxproducto1%' order by producto_it");
}

//$result=mysql_query("select * from a_items",$connec);
$total=mysqli_num_rows($result);


while ($tabla=mysqli_fetch_array($result)){
	
		$id=$tabla["id"];
		$codigo_it=$tabla["codigo_it"];
		    $codfabrica_it=$tabla["codfabrica_it"];
		$img_it=$tabla["img_it"];
		$grupolista_it=$tabla["grupolista_it"];
		$producto_it=$tabla["producto_it"];
		$marka_it=$tabla["marka_it"];
    		$fabricante_it=$tabla["fabricante_it"];
		$precom_it=$tabla["precom_it"];
		$pv01_it=$tabla["pv01_it"];
        $util01=$pv01_it-$precom_it;
		$pv02_it=$tabla["pv02_it"];
		$pv03_it=$tabla["pv03_it"];
		$view01_it=$tabla["view01_it"];
		
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
          <td height="33" valign="middle" bgcolor="#FFFFFF"><a href="ilbupweiv.php?idx=<?php echo($id); ?>"><img src=" <?php echo "img_items/".$img_it ?> " width="60" height="%" /><? if ($pv03_it>0) {?> <img src="iconos/promocion.jpg" alt="EN OFERTA" width="14" height="30" /> <? } ?></a></td>
          
          <td bgcolor="#FFFFFF"><?php echo($producto_it) ?></td>
          <!--- <td align="right" bgcolor=<? echo($color1) ?> ><?php echo($simbolo_mone.money_format('%n',(round($precom_it+($precom_it*$pje1_it/100))))) ?></td>-->
          <td align="right" bgcolor=#FFFF66 ><?php echo($simbolo_mone.money_format('%n',($pv01_it))) ?></td>
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
