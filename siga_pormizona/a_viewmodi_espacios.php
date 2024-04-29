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
    
<title>PMZ VIEW MODI</title> 

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

$codcatalogo_ctg=$_GET['codcatalogox'];
// ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
$viewmodi=$_GET['viewmodi'];
$xgl=$_GET['xgl'];
$id=$_GET['idx'];

$result=mysqli_query($connec,"select * from a_espa_catalogo where id=$id");

$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

//$id=$tabla["id"];
$ciudad_ctg=$tabla["ciudad_ctg"];
$zona_ctg=$tabla["zona_ctg"];
$nrocatalogo_ctg=$tabla["nrocatalogo_ctg"];
$codcatalogo_ctg=$tabla["codcatalogo_ctg"];
$namezona_ctg=$tabla["namezona_ctg"];
$campana_ctg=$tabla["campana_ctg"];
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


<table width="908" height="1971" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="900" height="119" align="center" valign="middle"><p><img src="/imagenes_1/logo_pormizona_com_pe.jpg" width="395" height="97" /></p>
    
  
    </td>
  </tr>
  <tr>
    <td height="43" align="center" bgcolor="#48887A"><span class="TITULOBLANCO"> <? echo ("ESPACIOS LIBRES CATÁLOGO - ZONA ".$namezona_ctg." ".$zona_ctg." ".$campana_ctg) ?> </span></td>
    
    
  </tr>
  <tr>
    <td height="613" align="center" valign="middle"><table width="905" height="845" border="1" cellpadding="1" cellspacing="1">
      <tr>
        <td height="50" colspan="2" bgcolor="#CCCCCC">ADMIN
            <table width="817" height="129" border="1" cellpadding="1" cellspacing="1">
            <form id="form0" name="form0" method="get" action="a_modi_espacios.php">
              <tr>
                <td width="94">Ciudad</td>
                <td width="220"><input name="xciudad" type="text" id="xciudad" size="30" maxlength="30" value="<?php echo($ciudad_ctg); ?>" style="text-align:right"/></td>
                <td width="63">--</td>
                <td width="11">&nbsp;</td>
                <td width="104">fecha Ini</td>
                <td width="194"><input name="xfechaini" type="text" id="xfechaini" size="30" maxlength="30" value="<?php echo($fechaini_ctg); ?>" style="text-align:right"/></td>
                <td width="93">--</td>
                </tr>
              <tr>
                <td>Zona</td>
                <td><input name="xzona" type="text" id="xzona" size="30" maxlength="30" value="<?php echo($zona_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                <td>&nbsp;</td>
                <td>fecha fin</td>
                <td><input name="xfechafin" type="text" id="xfechafin" size="30" maxlength="30" value="<?php echo($fechafin_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                </tr>
              <tr>
                <td>Nro. Cat </td>
                <td><input name="xnrocatalogo" type="text" id="xnrocatalogo" size="30" maxlength="30" value="<?php echo($nrocatalogo_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                <td>&nbsp;</td>
                <td>Obs1</td>
                <td><input name="xobs1" type="text" id="xobs1" size="30" maxlength="30" value="<?php echo($obs1_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                </tr>
              <tr>
                <td>Cod Cat</td>
                <td><input name="xcodcatalogo" type="text" id="xcodcatalogo" size="30" maxlength="30" value="<?php echo($codcatalogo_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                <td>&nbsp;</td>
                <td>Obs2</td>
                <td><input name="xobs2" type="text" id="xobs2" size="30" maxlength="30" value="<?php echo($obs2_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                </tr>
              <tr>
                <td>Name Z</td>
                <td><input name="xnamezona" type="text" id="xnamezona" size="30" maxlength="30" value="<?php echo($namezona_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                <td>&nbsp;</td>
                <td>View1</td>
                <td><input name="xview01" type="text" id="xview01" size="30" maxlength="30" value="<?php echo($view01_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                </tr>
              <tr>
                <td>Campaña</td>
                <td><input name="xcampana" type="text" id="xcampana" size="30" maxlength="30" value="<?php echo($campana_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                <td>&nbsp;</td>
                <td>mspublico</td>
                <td><input name="xmsjpublico" type="text" id="xmsjpublico" size="30" maxlength="30" value="<?php echo($msjpublico_ctg); ?>" style="text-align:right"/></td>
                <td>--</td>
                </tr>
              <tr>
                <td colspan="7"><input type="hidden" name="idx" value="<?php echo($id); ?>" />
                  <input type="hidden" name="xmod" value="A" />
                  <input name="Submit" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" /></td>
                </tr>
              </form>
            </table>
          <p>&nbsp;</p></td>
        </tr>
      <tr>
        <td width="408" height="259" bgcolor="#FFFFCC"> PORTADA
          <table width="408" height="129" border="1" cellpadding="1" cellspacing="1">
            
            <form id="form1" name="form1" method="get" action="a_modi_espacios.php">
              <tr>
                <td width="42">P1</td>
                <td width="57"><input name="xp1" type="text" id="xp1" size="1" maxlength="1" value="<?php echo($p1_ctg); ?>" style="text-align:right"/></td>
                <td width="134"><input name="xpp1" type="text" id="xpp1" size="10" maxlength="10" value="<?php echo($pp1_ctg); ?>" style="text-align:right"/></td>
                <td width="152"><input name="xclp1" type="text" id="xclp1" size="20" maxlength="20" value="<?php echo($clp1_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>P2</td>
                <td><input name="xp2" type="text" id="xp2" size="1" maxlength="1" value="<?php echo($p2_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpp2" type="text" id="xpp2" size="10" maxlength="10" value="<?php echo($pp2_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclp2" type="text" id="xclp2" size="20" maxlength="20" value="<?php echo($clp2_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>P3</td>
                <td><input name="xp3" type="text" id="xp3" size="1" maxlength="1" value="<?php echo($p3_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpp3" type="text" id="xpp3" size="10" maxlength="10" value="<?php echo($pp3_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclp3" type="text" id="xclp3" size="20" maxlength="20" value="<?php echo($clp3_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>P4</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>P5</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td colspan="4">
                  <input type="hidden" name="idx" value="<?php echo($id); ?>" />
                  <input type="hidden" name="xmod" value="P" />
                  
                  <input name="Submit" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" />
                  
                  
                  </td>
                </tr>
              
              </form>           
            
          </table></td>
        <td width="401" bgcolor="#CCFFFF"> CONTRA-PORTADA        
          
          <table width="408" height="129" border="1" cellpadding="1" cellspacing="1">
            <form id="form2" name="form1" method="get" action="a_modi_espacios.php">
              <tr>
                <td width="52">T1</td>
                <td width="66"><input name="xt1" type="text" id="xt1" size="1" maxlength="1" value="<?php echo($t1_ctg); ?>" style="text-align:right"/></td>
                <td width="183"><input name="xpt1" type="text" id="xpt1" size="10" maxlength="10" value="<?php echo($pt1_ctg); ?>" style="text-align:right"/></td>
                <td width="84"><input name="xclt1" type="text" id="xclt1" size="20" maxlength="20" value="<?php echo($clt1_ctg); ?>" style="text-align:right"/></td>
              </tr>
              <tr>
                <td>T2</td>
                <td><input name="xt2" type="text" id="xt2" size="1" maxlength="1" value="<?php echo($t2_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpt2" type="text" id="xpt2" size="10" maxlength="10" value="<?php echo($pt2_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclt2" type="text" id="xclt2" size="20" maxlength="20" value="<?php echo($clt2_ctg); ?>" style="text-align:right"/></td>
              </tr>
              <tr>
                <td>T3</td>
                <td><input name="xt3" type="text" id="xt3" size="1" maxlength="1" value="<?php echo($t3_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpt3" type="text" id="xpt3" size="10" maxlength="10" value="<?php echo($pt3_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclt3" type="text" id="xclt3" size="20" maxlength="20" value="<?php echo($clt3_ctg); ?>" style="text-align:right"/></td>
              </tr>
              <tr>
                <td>T4</td>
                <td><input name="xt4" type="text" id="xt4" size="1" maxlength="1" value="<?php echo($t4_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpt4" type="text" id="xpt4" size="10" maxlength="10" value="<?php echo($pt4_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclt4" type="text" id="xclt4" size="20" maxlength="20" value="<?php echo($clt4_ctg); ?>" style="text-align:right"/></td>
              </tr>
              <tr>
                <td>T5</td>
                <td><input name="xt5" type="text" id="xt5" size="1" maxlength="1" value="<?php echo($t5_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpt5" type="text" id="xpt5" size="10" maxlength="10" value="<?php echo($pt5_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclt5" type="text" id="xclt5" size="20" maxlength="20" value="<?php echo($clt5_ctg); ?>" style="text-align:right"/></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4"><input type="hidden" name="idx" value="<?php echo($id); ?>" />
                  <input type="hidden" name="xmod" value="T" />
                 
                  <input name="Submit" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" /></td>
              </tr>
            </form>
          </table>
          
       
          </td>
      </tr>
      <tr>
        <td height="270" colspan="2" bgcolor="#FFCCFF"> CENTRAL 
          <table width="817" height="129" border="1" cellpadding="1" cellspacing="1">
            <form id="form3" name="form3" method="get" action="a_modi_espacios.php">
              <tr>
                <td width="53">C1</td>
                <td width="75"><input name="xc1" type="text" id="xc1" size="1" maxlength="1" value="<?php echo($c1_ctg); ?>" style="text-align:right"/></td>
                <td width="148"><input name="xpc1" type="text" id="xpc1" size="10" maxlength="10" value="<?php echo($pc1_ctg); ?>" style="text-align:right"/></td>
                <td width="102"><input name="xclc1" type="text" id="xclc1" size="20" maxlength="20" value="<?php echo($clc1_ctg); ?>" style="text-align:right"/></td>
                <td width="8">&nbsp;</td>
                <td width="55">C5</td>
                <td width="75"><input name="xc5" type="text" id="xc5" size="1" maxlength="1" value="<?php echo($c5_ctg); ?>" style="text-align:right"/></td>
                <td width="148"><input name="xpc5" type="text" id="xpc5" size="10" maxlength="10" value="<?php echo($pc5_ctg); ?>" style="text-align:right"/></td>
                <td width="79"><input name="xclc5" type="text" id="xclc5" size="20" maxlength="20" value="<?php echo($clc5_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>C2</td>
                <td><input name="xc2" type="text" id="xc2" size="1" maxlength="1" value="<?php echo($c2_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpc2" type="text" id="xpc2" size="10" maxlength="10" value="<?php echo($pc2_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclc2" type="text" id="xclc2" size="20" maxlength="20" value="<?php echo($clc2_ctg); ?>" style="text-align:right"/></td>
                <td>&nbsp;</td>
                <td>C6</td>
                <td><input name="xc6" type="text" id="xc6" size="1" maxlength="1" value="<?php echo($c6_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpc6" type="text" id="xpc6" size="10" maxlength="10" value="<?php echo($pc6_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclc6" type="text" id="xclc6" size="20" maxlength="20" value="<?php echo($clc6_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>C3</td>
                <td><input name="xc3" type="text" id="xc3" size="1" maxlength="1" value="<?php echo($c3_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpc3" type="text" id="xpc3" size="10" maxlength="10" value="<?php echo($pc3_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclc3" type="text" id="xclc3" size="20" maxlength="20" value="<?php echo($clc3_ctg); ?>" style="text-align:right"/></td>
                <td>&nbsp;</td>
                <td>C7</td>
                <td><input name="xc7" type="text" id="xc7" size="1" maxlength="1" value="<?php echo($c7_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpc7" type="text" id="xpc7" size="10" maxlength="10" value="<?php echo($pc7_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclc7" type="text" id="xclc7" size="20" maxlength="20" value="<?php echo($clc7_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>C4</td>
                <td><input name="xc4" type="text" id="xc4" size="1" maxlength="1" value="<?php echo($c4_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpc4" type="text" id="xpc4" size="10" maxlength="10" value="<?php echo($pc4_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclc4" type="text" id="xclc4" size="20" maxlength="20" value="<?php echo($clc4_ctg); ?>" style="text-align:right"/></td>
                <td>&nbsp;</td>
                <td>C8</td>
                <td><input name="xc8" type="text" id="xc8" size="1" maxlength="1" value="<?php echo($c8_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xpc8" type="text" id="xpc8" size="10" maxlength="10" value="<?php echo($pc8_ctg); ?>" style="text-align:right"/></td>
                <td><input name="xclc8" type="text" id="xclc8" size="20" maxlength="20" value="<?php echo($clc8_ctg); ?>" style="text-align:right"/></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td colspan="9"><input type="hidden" name="idx" value="<?php echo($id); ?>" />
                  <input type="hidden" name="xmod" value="C" />
                  
                  <input name="Submit" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" /></td>
                </tr>
              </form>
            </table>
        </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="613" align="center" valign="middle">
    



<!--
		if ($pv01_it<=$precom_it) { $color1="#FF0000";  } else {  $color1="#E4E4E4";  }
		if ($pv02_it<=$precom_it) { $color2="#FF0000";  } else {  $color2="#E4E4E4";  }
		if ($pv03_it<=$precom_it) { $color3="#FF0000";  } else {  $color3="#E4E4E4";  }

       <td align="right" bgcolor=<? echo($color2) ?> ><?php echo($simbolo_mone.money_format('%n',($pv02_it))) ?></td>

-->
        
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
    <td height="44" bgcolor="#48887A" class="TITULOBLANCO">TABLA DE PROGRAMACIÓN</td>
  </tr>
  <tr>
    <td height="476" align="center" valign="top" bgcolor="#E7FEFD"><table width="915" height="474" border="1" cellpadding="0" cellspacing="0">
      <tr class="TITU_TABLA_ZONAS">
        <td width="48" height="31" align="center" valign="middle" bgcolor="#FF9900">ZONA</td>
        <td width="306" align="center" valign="middle" bgcolor="#FF9900">REFERENCIA</td>
        <td width="177" align="center" valign="middle" bgcolor="#FF9900">INICIO DE DISEÑO</td>
        <td width="177" align="center" valign="middle" bgcolor="#FF9900">IMPRENTA</td>
        <td width="179" align="center" valign="middle" bgcolor="#FF9900">DISTRIBUCIÓN</td>
      </tr>
      <tr>
        <td height="58" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">1</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">Av. Lambramani (Guisos)</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><em>P/Confirmar</em></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="48" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">2</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">Av. Porongoche</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">15 abril 2024</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">29 abril 2024</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">01 mayo 2024</span></td>
      </tr>
      <tr>
        <td height="58" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">3</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">Pizarro</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><em>P/Confirmar</em></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="70" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">4</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">Av. Lambramani (Parroquia)</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">01 abril 2024</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">16 abril 2024</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">18 abril 2024</td>
      </tr>
      <tr>
        <td height="58" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">5</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">Av Kennedy</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><em>P/Confirmar</em></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="45" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">6</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">Apima</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><em>P/Confirmar</em></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="52" align="center" valign="middle" bgcolor="#FFFFCC">7</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">MM. Umachiri</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">15 marzo 2024</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">09 abril 2024</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">10 abril 2024</td>
      </tr>
      <tr>
        <td height="52" align="center" valign="middle" bgcolor="#FFFFCC"><span class="text_tabla_zonas">8</span></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"> Mayta Capac</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><em>P/Confirmar</em></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="61" align="center" bgcolor="#000000" class="blanco">Design for: JpawaJ SAC - Abril 2023 - 959 956 000 - Arequipa - Perú</td>
  </tr>
</table>



</body>
</html>