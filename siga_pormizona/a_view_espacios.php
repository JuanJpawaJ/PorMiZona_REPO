<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=600">
  -->

<meta name="robots" content="index, follow" />
<meta name="keywords" content="pormizona.com.pe:: pormizona :: porongoche : catalogo : pormizona catalogo : pormizona eventos :: por mizona .com .pe :: publicidad por mi zona :: AQP :: busco :: Por Mi Zona, eventos, catálogo, oubkictario,  Arequipa, avisos por mi zona, busco eventos., que hago hoy dia" />
    <meta name="description" content="pormizona.com.pe:: pormizona :: por mi zona :: por mi zona . com.pe :: pormizona :: PORMIZONA.COM.PE :: AQP :: catálogo publicitario por mi zona :: publicidad por mi zona :: eventos por mi zona :: syscomputer :: jpawaj:: mujer bonita :: Boutique :: mujer bonita boutique" />

<meta name="googlebot" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    
<title>PorMiZona Publique</title> 

<style type="text/css">
.blanco {
	color: #FFF;
}
.TITULOBLANCO {
	color: #FFF;
	text-align: center;
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
}</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$xzona=$_GET['xzona'];
// ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
$viewmodi=$_GET['viewmodi'];
$xgl=$_GET['xgl'];

if(strlen($xzona)==0){
	$xzona="050204";
}

?>


<table width="908" height="3352" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="900" height="318" align="center"><img src="../imagenes_1/titulo_catalogo_publicitario.jpg" width="947" height="316" /></td>
  </tr>
  <tr>
    <td height="86" align="center" valign="middle" bgcolor="#8199A3"><table width="936" height="105" border="1" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td width="105" height="101" align="center" bgcolor="#CCCCCC"><a href="../index.php"><img src="iconos/boton_pmz_3letras.jpg" width="85" height="80" /></a></td>
        <td width="202" align="center" 
    <? if ($xzona=="050204") { ?> bgcolor="#FFFF00" <?	} else { ?> bgcolor="#CCCCCC" <?  } ?>
        ><a href="a_view_espacios.php?&xzona=050204"><img src="iconos/boton_zona2.jpg" width="150" height="80" /></a></td>
        <td width="194" align="center"
    <? if ($xzona=="000000") { ?> bgcolor="#FFFF00" <?	} else { ?> bgcolor="#CCCCCC" <?  } ?>
         >Zona 3</td>
        <td width="203" align="center"
    <? if ($xzona=="040401") { ?> bgcolor="#FFFF00" <?	} else { ?> bgcolor="#CCCCCC" <?  } ?>
        ><a href="a_view_espacios.php?xzona=040401"><img src="iconos/boton_zona4.jpg" width="150" height="80" /></td>
        <td width="204" align="center"
    <? if ($xzona=="040501") { ?> bgcolor="#FFFF00" <?	} else { ?> bgcolor="#CCCCCC" <?  } ?>
        ><a href="a_view_espacios.php?xzona=040501"><img src="iconos/boton_zona5.jpg" width="150" height="80" /></td>
      </tr>
    </table>
      <?
	  

$codcatalogo_ctg=$xzona;
$result=mysqli_query($connec,"select * from a_espa_catalogo where codcatalogo_ctg=$codcatalogo_ctg");

$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

$id=$tabla["id"];
$ciudad_ctg=$tabla["ciudad_ctg"];
$zona_ctg=$tabla["zona_ctg"];
$nrocatalogo_ctg=$tabla["nrocatalogo_ctg"];
//$codcatalogo_ctg=$tabla["codcatalogo_ctg"];
$namezona_ctg=$tabla["namezona_ctg"];
$campana_ctg=$tabla["campana_ctg"];
$img_ctg=$tabla["img_ctg"];
$fechaini_ctg=$tabla["fechaini_ctg"];
$fechafin_ctg=$tabla["fechafin_ctg"];
$p1_ctg=$tabla["p1_ctg"];
$pp1_ctg=$tabla["pp1_ctg"];
$p2_ctg=$tabla["p2_ctg"];
$pp2_ctg=$tabla["pp2_ctg"];
$p3_ctg=$tabla["p3_ctg"];
$pp3_ctg=$tabla["pp3_ctg"];
$p4_ctg=$tabla["p4_ctg"];
$pp4_ctg=$tabla["pp4_ctg"];
$p5_ctg=$tabla["p5_ctg"];
$pp5_ctg=$tabla["pp5_ctg"];
$t1_ctg=$tabla["t1_ctg"];
$pt1_ctg=$tabla["pt1_ctg"];
$t2_ctg=$tabla["t2_ctg"];
$pt2_ctg=$tabla["pt2_ctg"];
$t3_ctg=$tabla["t3_ctg"];
$pt3_ctg=$tabla["pt3_ctg"];
$t4_ctg=$tabla["t4_ctg"];
$pt4_ctg=$tabla["pt4_ctg"];
$t5_ctg=$tabla["t5_ctg"];
$pt5_ctg=$tabla["pt5_ctg"];
$c1_ctg=$tabla["c1_ctg"];
$pc1_ctg=$tabla["pc1_ctg"];
$c2_ctg=$tabla["c2_ctg"];
$pc2_ctg=$tabla["pc2_ctg"];
$c3_ctg=$tabla["c3_ctg"];
$pc3_ctg=$tabla["pc3_ctg"];
$c4_ctg=$tabla["c4_ctg"];
$pc4_ctg=$tabla["pc4_ctg"];
$c5_ctg=$tabla["c5_ctg"];
$pc5_ctg=$tabla["pc5_ctg"];
$c6_ctg=$tabla["c6_ctg"];
$pc6_ctg=$tabla["pc6_ctg"];
$c7_ctg=$tabla["c7_ctg"];
$pc7_ctg=$tabla["pc7_ctg"];
$c8_ctg=$tabla["c8_ctg"];
$pc8_ctg=$tabla["pc8_ctg"];
$c9_ctg=$tabla["c9_ctg"];
$pc9_ctg=$tabla["pc9_ctg"];
$c10_ctg=$tabla["c10_ctg"];
$pc10_ctg=$tabla["pc10_ctg"];
$obs1_ctg=$tabla["obs1_ctg"];
$obs2_ctg=$tabla["obs2_ctg"];
$view01_ctg=$tabla["view01_ctg"];
$msjpublico_ctg=$tabla["msjpublico_ctg"];
$clp1_ctg=$tabla["clp1_ctg"];
$clp2_ctg=$tabla["clp2_ctg"];
$clp3_ctg=$tabla["clp3_ctg"];

$clt1_ctg=$tabla["clt1_ctg"];
$clt2_ctg=$tabla["clt2_ctg"];
$clt3_ctg=$tabla["clt3_ctg"];
$clt4_ctg=$tabla["clt4_ctg"];
$clt5_ctg=$tabla["clt5_ctg"];

$clc1_ctg=$tabla["clc1_ctg"];
$clc2_ctg=$tabla["clc2_ctg"];
$clc3_ctg=$tabla["clc3_ctg"];
$clc4_ctg=$tabla["clc4_ctg"];
$clc5_ctg=$tabla["clc5_ctg"];
$clc6_ctg=$tabla["clc6_ctg"];
$clc7_ctg=$tabla["clc7_ctg"];
$clc8_ctg=$tabla["clc8_ctg"];



$colorlib="#66FF66";
$colorocu="#999999";

?>        
    
    
  </tr>
  

  <tr>
    <td height="48" align="center" valign="middle" bgcolor="#000000"><span class="TITULOBLANCO"><?
    // if (
	 echo ("ESPACIOS LIBRES  -> ");
	 echo "<font color='yellow'>".ZONA." ".$zona_ctg."  ".$namezona_ctg."</font>";

	 echo (" -".$campana_ctg." -F.INICIO: ".$fechaini_ctg." -F.IMPRENTA: ".$fechafin_ctg) ?></span></td>
  </tr>
  <tr>
    <td height="613" align="center" valign="middle">
    
  <table width="675" height="575" border="1" cellpadding="1" cellspacing="1">
      <tr>
        <td width="334" height="284" align="center">
        <span class="tit_espacios">PORTADA</span>
<table width="178" height="233" border="1" cellpadding="1" cellspacing="1">
  <tr>
            <td height="15" colspan="2" bgcolor="#FFCC00">&nbsp;</td>
            </tr>
          <tr>
            <td height="73" colspan="2" align="center" valign="middle" bgcolor=<? if ($p1_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> >
              <span class="txt_espacios">
              <? if ($p1_ctg=="L") {
					 echo ("P1 LIBRE"."<br>"."S/ ".intval($pp1_ctg));
				  } else {
			         echo ("OCUPADO"."<br>".$clp1_ctg);
				  }  ?> 
              </span></td>
            </tr>
          <tr>
            <td width="83" height="112" align="center" valign="middle" bgcolor=<? if ($p2_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> > <span class="txt_espacios">
              <?  if ($p2_ctg=="L") { echo ("P2 LIBRE"."<br>"."S/ ".intval($pp2_ctg));  } else {  echo ("OCUPADO"."<br>".$clp2_ctg); }  ?>
            </span></td>
            <td width="82" align="center" valign="middle" bgcolor=<? if ($p3_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?>  > <span class="txt_espacios">
              <?  if ($p3_ctg=="L") { echo ("P3 LIBRE"."<br>"."S/ ".intval($pp3_ctg));  } else {  echo ("OCUPADO"."<br>".$clp3_ctg); }  ?>
            </span></td>
          </tr>
      </table></td>
        <td width="328" align="center">
        <span class="tit_espacios">CONTRA-PORTADA</span>
<table width="178" height="233" border="1" cellpadding="1" cellspacing="1">
  <tr>
            <td width="79" height="76" align="center" valign="middle" bgcolor=<? if ($t1_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> >              <span class="txt_espacios">
              <?  if ($t1_ctg=="L") { echo ("T1 LIBRE"."<br>"."S/ ".intval($pt1_ctg));  } else {  echo ("OCUPADO"."<br>".$clt1_ctg); }  ?>            
              </span></td>
            <td width="74" align="center" valign="middle" bgcolor=<? if ($t2_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> >              <span class="txt_espacios">
              <?  if ($t2_ctg=="L") { echo ("T2 LIBRE"."<br>"."S/ ".intval($pt2_ctg));  } else {  echo ("OCUPADO"."<br>".$clt2_ctg); }  ?>            
              </span></td>
          </tr>
          <tr>
            <td height="42" colspan="2" align="center" valign="middle" bgcolor=<? if ($t3_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> >              <span class="txt_espacios">
              <?  if ($t3_ctg=="L") { echo ("T3 LIBRE"."<br>"."S/ ".intval($pt3_ctg));  } else {  echo ("OCUPADO"."<br>".$clt3_ctg); }  ?>            
              </span></td>
            </tr>
          <tr>
            <td height="82" align="center" valign="middle" bgcolor=<? if ($t4_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> >              <span class="txt_espacios">
              <?  if ($t4_ctg=="L") { echo ("T4 LIBRE"."<br>"."S/ ".intval($pt4_ctg));  } else {  echo ("OCUPADO"."<br>".$clt4_ctg); }  ?>            
              </span></td>
            <td align="center" valign="middle" bgcolor=<? if ($t5_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> >              <span class="txt_espacios">
              <?  if ($t5_ctg=="L") { echo ("T5 LIBRE"."<br>"."S/ ".intval($pt5_ctg));  } else {  echo ("OCUPADO"."<br>".$clt5_ctg); }  ?>            
              </span></td>
          </tr>
      </table></td>
      </tr>
      <tr>
        <td height="286" colspan="2" align="center">
        <span class="tit_espacios">CENTRAL</span>
<table width="359" height="233" border="1" cellpadding="1" cellspacing="1">
  <tr>
            <td width="84" height="77" align="center" valign="middle" bgcolor=<? if ($c1_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> > <span class="txt_espacios">
              <?  if ($c1_ctg=="L") { echo ("C1 LIBRE"."<br>"."S/ ".intval($pc1_ctg));  } else {  echo ("OCUPADO"."<br>".$clc1_ctg); }  ?>
            </span></td>
            <td width="76" align="center" valign="middle" bgcolor=<? if ($c2_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> > <span class="txt_espacios">
              <?  if ($c2_ctg=="L") { echo ("C2 LIBRE"."<br>"."S/ ".intval($pc2_ctg));  } else {  echo ("OCUPADO"."<br>".$clc2_ctg); }  ?>
            </span></td>
            <td width="8" align="center" valign="middle">&nbsp;</td>
            <td colspan="2" align="center" valign="middle" bgcolor=<? if ($c5_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> ><span class="txt_espacios">
              <?  if ($c5_ctg=="L") { echo ("C5 LIBRE"."<br>"."S/ ".intval($pc5_ctg));  } else {  echo ("OCUPADO"."<br>".$clc5_ctg); }  ?>
            </span></td>
            </tr>
          <tr>
            <td height="45" colspan="2" align="center" valign="middle" bgcolor=<? if ($c3_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> ><span class="txt_espacios">
              <?  if ($c3_ctg=="L") { echo ("C3 LIBRE"."<br>"."S/ ".intval($pc3_ctg));  } else {  echo ("OCUPADO"."<br>".$clc3_ctg); }  ?>
            </span></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td colspan="2" align="center" valign="middle" bgcolor=<? if ($c6_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> ><span class="txt_espacios">
              <?  if ($c6_ctg=="L") { echo ("C6 LIBRE"."<br>"."S/ ".intval($pc6_ctg));  } else {  echo ("OCUPADO"."<br>".$clc6_ctg); }  ?>
            </span></td>
            </tr>
          <tr>
            <td height="84" colspan="2" align="center" valign="middle" bgcolor=<? if ($c4_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> ><span class="txt_espacios">
              <?  if ($c4_ctg=="L") { echo ("C4 LIBRE"."<br>"."S/ ".intval($pc4_ctg));  } else {  echo ("OCUPADO"."<br>".$clc4_ctg); }  ?>
            </span></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td width="84" align="center" valign="middle" bgcolor=<? if ($c7_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> ><span class="txt_espacios">
              <?  if ($c7_ctg=="L") { echo ("C7 LIBRE"."<br>"."S/ ".intval($pc7_ctg));  } else {  echo ("OCUPADO"."<br>".$clc7_ctg); }  ?>
            </span></td>
            <td width="86" align="center" valign="middle" bgcolor=<? if ($c8_ctg=="L") { echo($colorlib); } else{ echo($colorocu); } ?> ><span class="txt_espacios">
              <?  if ($c8_ctg=="L") { echo ("C8 LIBRE"."<br>"."S/ ".intval($pc8_ctg));  } else {  echo ("OCUPADO"."<br>".$clc8_ctg); }  ?>
            </span></td>
          </tr>
      </table></td>
        </tr>
    </table>
    

</td>
  </tr>
  <tr>
    <td height="61" align="center" class="blanco"><img src="../imagenes_1/pie_catalogo_publicitario.jpg" width="947" height="359" /></td>
  </tr>
  <tr>
    <td height="61" align="center" class="blanco"><img src="../imagenes_1/texto_comunica_pormizona.jpg" width="734" height="969" /></td>
  </tr>
  <tr>
    <td height="61" align="center" class="blanco"><img src="../imagenes_1/mapa_zonas.jpg" width="946" height="882" /></td>
  </tr>
  <tr>
    <td height="61" align="center" bgcolor="#000000" class="blanco">Design for: JpawaJ SAC - Abril 2023 - 959 956 000 - Arequipa - Perú</td>
  </tr>
</table>



</body>
</html>