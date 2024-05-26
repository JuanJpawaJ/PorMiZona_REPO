<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema SIGA</title>
<style type="text/css">
.TITULO_AMARILLO {
	font-family: "Comic Sans MS", cursive;
	color: #FF0;
	font-size: 24px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.pie {	font-size: 12px;
	font-weight: bold;
	text-align: center;
	color: #A9CF46;
}
.pie .pie .pie {
	font-family: "Comic Sans MS", cursive;
}
</style>
</head>
<body class="TITULO_AZUL">

<?php 

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$zxyw = $_POST['zxyw'];
$xnxixvx=$_POST['xnxixvx'];
echo ("nivel  ".$xnxixvx);

if(strlen($usuario)==0){
$zxyw = $_GET['zxyw'];
$xnxixvx=$_GET['xnxixvx'];
echo ("nivel  ".$xnxixvx);

}else{
echo ("usuario  ".$usuario);
echo ("password  ".$password);
$result=mysqli_query($connec,"select * from a_personal where usuario_per='$usuario'");
$tabla = mysqli_fetch_array( $result );
$total=mysqli_num_rows($result);

if ($total==0){
?>	
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="sca.html">CUIDADO !! Tenemos registrado su IP !! - NO ESTA UD. REGISTRADO</a></div>
    </th>
  </tr>
</table>
<?php 
}else{
echo ("total  ".$total);


$password_per=$tabla["password_per"];
$xnxixvx=$tabla["nivel_per"];
$cod_per=$tabla["cod_per"];
$nom_per=$tabla["nom_per"];
$ape_per=$tabla["ape_per"];


$xtimex=time()+10800;
$sql="UPDATE a_personal SET xtimex_per='$xtimex' WHERE cod_per=$cod_per";
$resultimex=mysqli_query($connec,$sql);


}
}

if ($zxyw == "SCADCASA2014_09" OR ($total !==0 AND $password_per == $password)){

?>


<table width="1030" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1030" bgcolor="#00238c"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="152" height="84" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="678" align="center" class="TITULO_AMARILLO">COMANDO GENERAL</td>
        <td width="170" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="386" align="center" valign="middle" bgcolor="#CCCCCC"><table width="951" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" colspan="9" align="center" valign="middle"><table width="416" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td></td>
            <td><?php echo($nom_per.", ".$ape_per)?></td>
            <td></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td width="19" align="center" valign="middle">&nbsp;</td>
        <td width="41" height="123" align="center" valign="middle">&nbsp;</td>
        <td width="163" rowspan="3" align="center" valign="top">
          <table width="146" height="428" border="1" align="center">
			  <tr>
			    <td width="136" height="28" align="center">YO VENDEDOR</td>
		      </tr>
			  <tr>
              <?php if ($xnxixvx>=3) { ?>
			    <td height="72" align="center"><a href="a_lista_clientes_ventas.php?xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>"><img src="iconos/ico_vendeprefac.png" width="129" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
                 <?php } ?>
		      </tr>
			  <tr>
			    <td height="33" align="center"><a href="a_lista_prefprof.php?xoxgxixdxoxcx=<?php echo($cod_per)?>"><img src="iconos/ico_listapre.png" width="61" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
		      </tr>
			  <tr>
			    <td height="73" align="center"><a href="view_lprecios.php"><img src="iconos/ico_listaprecios.png" width="61" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
		      </tr>
			  <tr>
			    <td height="34" align="center"><img src="iconos/ico_lisven.png" alt="" width="60" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></td>
		      </tr>
			  <tr>
			    <td height="74" align="center"><img src="iconos/ico_ctecomi.png" width="128" height="60" /></td>
		      </tr>
			  <tr>
			    <td height="16" align="center">&nbsp;</td>
		      </tr>
		    </table></td>
        <td width="13" align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="top"><table width="362" border="1" >
          <tr>
            <td height="23" colspan="2" align="center">COMPRAS</td>
            <td height="23" align="center">&nbsp;</td>
            </tr>
          <tr>
            <td width="207"><a href="a_ing_proveedores.php?xoxgxixdxoxcx=<?php echo("010000")?>&zyxw=SCADCASA2014_09&amp;xnxixvx=<?php echo($xnxixvx)?>"><img src="iconos/ico_proveedores_compras.fw.png" alt="" width="201" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
            <td width="66"><a href="a_lcompras.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx)?>&xcodper=<?php echo($cod_per)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>"><img src="iconos/ico_liscom.png" width="60" height="60"  style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
            <td width="67" align="center"><img src="iconos/ico_pagar.fw.png" width="60" height="60" /></td> 
          </tr>
        </table></td>
        <td width="9" align="center">&nbsp;</td>
        <td width="220" align="center" valign="top"><table width="165" border="1">
          <tr>
            <td height="23" colspan="3" align="center">ALMACEN</td>
            </tr>
          <tr>
            <td width="66"align="center"><a href="a_com_almacen.php?zyxw=SCADCASA2014_09&amp;xnxixvx=<?php echo($xnxixvx)?>"><img src="iconos/ico_almacen.fw.png" alt="" width="60" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
            <td width="40"><a href="a_transfe_alma.php"><img src="iconos/ico_transfe.png" width="61" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
            <td width="41"><a href="a_list_items_admin.php?xgl=SMRD"><img src="iconos/ico_items.fw.png" width="61" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
          </tr>
        </table>        </td>
        <td width="8" align="center">&nbsp;</td>
        <td width="84"><p><a href="a_lisimagenes.php">LISTA EMPRESAS</a></p>
          <p><a href="a_list_catalogos_admin.php">LISTA CATALOGOS</a></p></td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        <td height="122" >&nbsp;</td>
        <td>&nbsp;</td>
        <td width="394" align="center" valign="top"><table width="357" border="1" >
          <tr>
            <td height="23" colspan="2" align="center">VENTAS</td>
            <td width="62" height="23" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td width="207"><a href="a_lista_clientes_ventas.php?xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>"><img src="iconos/ico_clientes_ventas.fw.png" alt="" width="201" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" border="0" /></a></td>
            <td width="66"><a href="a_lventas.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx)?>&xcodper=<?php echo($cod_per)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>"><img src="iconos/ico_lisven.png" width="60" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
            <td align="center"><a href="a_lventas.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx)?>"><img src="iconos/ico_cobrar.fw.png" width="60" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
          </tr>
        </table></td>
        <td align="center">&nbsp;</td>
        <td align="center" valign="top"><table width="75" border="1">
          <tr>
            <td width="75" height="23" align="center">CAJA</td>
          </tr>
          <tr>
            <td height="70" align="center"><a href="a_caja1.php?xcodper=<?php echo($cod_per)?>"><img src="iconos/ico_caja.fw.png" alt="" width="60" height="60"  style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
          </tr>
        </table></td>
        <td align="center">&nbsp;</td>
        <td><table width="75" border="1">
          <tr>
            <td width="75" height="23" align="center">BONOFERTAS</td>
          </tr>
          <tr>
            <td height="70" align="center">
            
            <a href="a_list_bonofertas.php?xgl=SMRD">BonOfertas</a>
            
            <a href="xpdfxbxoxexrxa.php?xgl=SMRD">Gen. BonOfertas</a>
            </td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="181">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center" valign="top"><table width="296" border="1">
          <tr>
            <td height="23" colspan="3" align="center">CONSULTAS</td>
          </tr>
          <tr>
            <td width="134" height="70" align="center"><img src="iconos/ico_ctecomi.fw.png" alt="" width="131" height="60" /></td>
            <td width="69" align="center">&nbsp;</td>
            <td width="71" align="center"><a href="a_ligv.php"><img src="iconos/ico_igv.png" width="61" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
          </tr>
        </table></td>
        <td align="center">&nbsp;</td>
        <td align="center" valign="top">
        <table width="200" border="1">
          <tr>
            <td align="center" height="23" >PERSONAL</td>
          </tr>
          <tr>
            <? if ($xnxixvx>=9){ ?>
            <td height="69"><a href="a_ing_personal.php?zyxw=SCADCASA2014_09&amp;xnxixvx=<? echo($xnxixvx)?>"><img src="iconos/ico_personalctecomi.fw.png" alt="" width="201" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
            <? } ?>
          </tr>
        </table></td>
        <td align="center">&nbsp;</td>
        <td valign="top"><p>&nbsp;</p>
          <p><a href="formingre1.php">FORMINGRE1</a></p>
           <p><a href="buscar_pormizona.php">BUSCAR PMZ</a></p>
            <p><a href="geo_mendoza1.html">GEOMENDOZA 01 PMZ</a></p>
            <p><a href="formievento1.php">formievento PMZ</a></p>
            

          </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center"><a href="a_view_sistema.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx)?>"><img src="iconos/ico_ajustes.fw.png" width="60" height="60" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
        <td align="center">&nbsp;</td>
        <td><table width="80" border="1">
          <tr>
            <td width="70"><a href="a_export_excel.php">exp. Caja</a></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            </tr>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle" bgcolor="#00238c"><span class="pie"><span class="pie"><span class="pie">Design by: JR. Valdivia - 959956000 - Septiembre 2016</span><span class="pie"></span></span></span></td>
  </tr>
</table>
<?php

} else {
?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="sca.html">NO ESTA UD. REGISTRADO</a></div>
    </th>
  </tr>
</table>

<?php
}

?>
</body>
</html>