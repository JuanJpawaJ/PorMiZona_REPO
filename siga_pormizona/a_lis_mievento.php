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
.tit_menu_sup {
	color: #000;
}
.PRECIO1 {
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
	font-size: 20px;
	color: #009;
}
.tachado {
    text-decoration:line-through;
    color: red;
	font-size: 12px;
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
    <td align="center" class="tit_menu_sup">POR MI ZONA</td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="774" height="86" align="center" bgcolor="#FFFFCC"><table width="735" border="1" cellspacing="1" cellpadding="0">
      <tr>

        <td width="92" height="75" align="center" <? if ($xgl=="S") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisimagenes.php?xgl=S"><img src="../imagenes/ico_p_informatica.png" width="72" height="58"></a></td>
        <td width="92" align="center" <? if ($xgl=="M") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisimagenes.php?xgl=M"><img src="../imagenes/ico_p_boutique.png" width="72" height="58"></a></td>
        <td width="92" align="center" <? if ($xgl=="R") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisimagenes.php?xgl=R"><img src="../imagenes/ico_p_regalos.png" width="72" height="58"></a></td>
        <td width="92" align="center" <? if ($xgl=="P") {?> bgcolor="#FFF00" <? } ?> class="tabla10"><a href="a_lisimagenes.php?xgl=P"><img src="../imagenes/ico_p_perfumeria.png" width="72" height="58"></a></td>
        <td width="350" align="center">
          <form id="form0" name="form0" method="get" action="a_lisimagenes.php">
            <table width="334" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
              <tr>
                <td width="203" height="28" bgcolor="#FFCC66"> <span class="TITULO">Dato a buscar Producto:</span>                  <input name="bxproducto" type="text" id="bxproducto" size="25" maxlength="60" /></td>
                
                <td width="125" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                
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
      <table width="769" height="203" border="1" align="center" cellpadding="0" cellspacing="0">
        <?php 


  
//$result=mysql_query("select * from items order by codfabrica_it",$connec);

if(strlen($bxproducto)==0){
        $result=mysqli_query($connec,"select * from mievento_51 where view01_it='S' ");
} else {
        $bxproducto1=trim($bxproducto);
        $result=mysqli_query($connec,"select * from a_items where producto_it like '%$bxproducto1%' order by producto_it");
}

//$result=mysql_query("select * from a_items",$connec);
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
$fhoy_mev=$tabla["fhoy_mev"];
		
		
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
          <td width="767" height="175" valign="middle" bgcolor="#FFFFFF">
            <table width="751" border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td width="437" rowspan="3" align="center"><p><a href="ilbupweiv.php?idx=<?php echo($id); ?>"><img src=" <?php echo "img_items/".$img_it ?> " width="350" height="%" />
                  <? if ($pv03_it>0) {?> <img src="iconos/promocion.jpg" alt="EN OFERTA" width="40" height="%" /> <? } ?>
                </a></p>
          <!--  <p class="TITULO">NOTA: La imagen es referencial.</p>--> </td>
                
                <td width="310" height="49" align="center" bgcolor="#FFFFFF"><span class="viewtexto"><?php echo($nomevento_mev) ?></span></td>
              </tr>
              <tr>
                <td height="46" align="center" bgcolor=#FFFFFF ><<span class="viewtexto"><?php echo($descri_mev) ?></span>>
				<?  //if ($pv03_it>0) { ?>
					<!-- <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($pv01_it))) ?></span>
					 <span class="PRECIO1"> <? echo($simbolo_mone.money_format('%n',($pv03_it))) ?></span> -->

                <? //}else{ ?>
					<!-- <span class="PRECIO1"> <? echo($simbolo_mone.money_format('%n',($pv01_it))) ?></span> -->
                <? //}?>
                </td>
              </tr>
              <tr> 

                <td height="59" align="center"><span class="once"><?php echo($msjpublico_it); ?></span>  
                               
              <!--  <span class="PRECIO2"> <?php // echo($simbolo_mone.money_format('%n',round($pv01_it*1.05/2,0))."      / ".$simbolo_mone.money_format('%n',round($pv01_it*1.15/3,0)))."<br>" ." 02/cuotas      / "." 03/cuotas " ?></span> -->
                
                </td>             
              </tr>
          </table></td>
          
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
