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
}
.precios {
	font-size: 20px;
		color: #000;
	font-weight: bold;
	font-family: "Comic Sans MS", cursive;
	
}
.precios table tr td table tr .precios table tr td p {
	color: #FFF;
}
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="precios">
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
	$xzona="040501";
}

?>


<table width="908" height="1761" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="900" height="119" align="center" valign="middle"><img src="../imagenes_1/logo_pmz_telf_rgb.jpg" width="853" height="147" />
    
  
    </td>
  </tr>
  <tr>
    <td height="402" align="center"><img src="../imagenes_1/titulo_catalogo_publicitario.jpg" width="947" height="400" /></td>
  </tr>
  

   <tr>
    <td height="613" align="center" valign="middle"><table width="715" height="735" border="1" cellpadding="1" cellspacing="1">
      <tr>
        <td width="341" height="375" align="center"><table width="186" border="1" cellspacing="1" cellpadding="1">
          <tr>
              <td width="178" align="center"><span class="tit_espacios">PORTADA</span></td>
            </tr>
            <tr>
            <!--  <td height="256">ññ<img src="../imagenes_1/f_catalogo_prin_178.jpg" width="179" height="252" /></td> -->

              
              <td height="259" align="center" background="../imagenes_1/f_catalogo_prin_178.jpg"> <span class="precios">
                </span>
                <table width="165" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="2" height="5">&nbsp;</td>
                    </tr>
                  <tr>
                    <td colspan="2" align="center">P1<br/>
                      S/75</td>
                    </tr>
                  <tr>
                    <td width="81" height="135" align="center">P2<br>
                     S/65</td>
                    <td width="84" align="center">P3<br>
                     S/65</td>
                  </tr>
                </table></td>
              
            </tr>
      </table></td>
        <td width="361" align="center" class="precios"><table width="188" border="1" cellspacing="1" cellpadding="1">
          <tr>
              <td width="180" align="center"><span class="tit_espacios">CONTRA-PORTADA</span></td>
            </tr>
            <tr>
              <td height="252" align="center" background="../imagenes_1/f_catalogo_contra_178.jpg">
                <table width="164" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="82" height="91" align="center">T1<br />
                    S/45</td>
                    <td width="82" align="center">T2<br />
                    S/45</td>
                  </tr>
                  <tr>
                    <td height="48" colspan="2" align="center">T3 S/40</td>
                    </tr>
                  <tr>
                    <td height="104" align="center">T4<br />
                    S/45</td>
                    <td align="center">T5<br />
                    S/45</td>
                  </tr>
                </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="355" colspan="2" align="center"><table width="366" border="1" cellspacing="1" cellpadding="1">
          <tr>
              <td width="358" align="center"><span class="tit_espacios">CENTRAL</span></td>
            </tr>
            <tr>
              <td height="261" align="center" background="../imagenes_1/f_catalogo_central_178.jpg"><table width="342" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="85" height="98" align="center">C1<br />
                   S/35</td>
                  <td width="86" align="center">C2<br />
                   S/35</td>
                  <td colspan="2" align="center">C5<br />
                   S/60</td>
                  </tr>
                <tr>
                  <td height="48" colspan="2" align="center">C3 S/30</td>
                  <td colspan="2" align="center">C6 S/30</td>
                  </tr>
                <tr>
                  <td height="104" colspan="2" align="center">C4<br />
                  S/60</td>
                  <td width="89" align="center">C7<br />
                    S/35</td>
                  <td width="82" align="center">C8<br />
                    S/35</td>
                </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="61" align="center" class="blanco"><img src="../imagenes_1/titulo_catalogo_publicitario2.jpg" width="947" height="439" /></td>
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