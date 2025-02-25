<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Administrador Productos</title>

<link rel="icon" href="../assets/img/imagenes_index/icono_pestana/icono_catalogo.png" type="image/png">

<style type="text/css">
.TITULO_NARANJA {
	color: #FC0;
	font-weight: bold;
}
.TITULO_NEGRO {
	color: #000;
	font-weight: bold;
}
.LOGO_NARANJA {
	color: #FC0;
	font-weight: bold;
	font-size: 22px;
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
.tit_menu_sup { color: #000; }
.camarilla { background-color:#FFC; }
.cazul { background-color:#9FF; }
.cverde { background-color:#9F9; }
.cplomo { background-color:#CCC; }
 
 /* INCIO: SOLO PARA LOS 3 BOTONES  */
        .btn {
            display: block;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            margin: 10px auto;
            background-color: #008CBA;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-container {
            text-align: center;
            margin: 20px;
        }
        .form-input {
            padding: 10px;
            margin: 5px;
            font-size: 10px;
        }


 /* FIN: SOLO PARA LOS 3 BOTONES  */


</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


$usuario  = trim($_POST['xusername']); // el usuario es el email_aso
$password = trim($_POST['xpassword']);

$xareg=$_POST['xareg'];
$xmodi=$_POST['xmodi'];
$xdelreg=$_POST['xdelreg'];
$viewmodi=$_POST['viewmodi'];
$whatsapp=$_POST['xwhatsapp'];
$whatsapp_number = $_POST['whatsapp_number'];


if (strlen($usuario)==0){
   $usuario  = trim($_GET['xusername']); // el usuario es el email_aso
   $password = trim($_GET['xpassword']);
   $xdelreg=$_GET['xdelreg'];
}

		
if ($xareg=="SIAREG") {
  // genera el codigo de 6 digitos en base al max id anterior
  $rs = mysqli_query($connec,"SELECT MAX(id) AS id FROM catalogo_productos");
   if ($row = mysqli_fetch_row($rs)) {
	   $idid = trim($row[0]);
   }
   $codigo_it=substr((string)$idid+1000001,1);
   $codfabrica_it=$_POST['xcodfabrica'];
   $producto_it=$_POST['xproducto'];
   $grupolista_it=$_POST['xgrupolista'];
   $marka_it=$_POST['xmarka'];
   $fabricante_it=$_POST['xfabricante'];
   $precom_it=$_POST['xprecom'];
   $monelista_it=$_POST['xmonelista'];      
   $pv01_it=$_POST['xpv01'];
   $pv02_it=$_POST['xpv02'];
   $pv03_it=$_POST['xpv03'];
   $img_it=$_POST['ximg'];
   $stockmin_it=$_POST['xstockmin'];
   $lugar_al_it=$_POST['xlugar_al'];
   $view01_it=$_POST['xview01'];
   $view02_it=$_POST['xview02'];
   $view03_it=$_POST['xview03'];
   $view04_it=$_POST['xview04'];
   $time_entrega_it=$_POST['xtime_entrega'];
   $msjpublico_it=$_POST['xmsjpublico'];
   $obscompra_it=$_POST['xobscompra'];

   // verifica si hay duplicados ....
   //$result=mysql_query("select * from a_items where producto_it=$xproducto",$connec);
   //$total=mysql_num_rows($result);
   //if ($total==0) {
   $xspce="s";
   $xum=0;
   $sql="INSERT INTO catalogo_productos (codigo_it,cod_aso_it,codfabrica_it,producto_it,grupolista_it,marka_it,fabricante_it, precom_it,monelista_it, pv01_it,pv02_it,pv03_it,img_it,stockmin_it,lugar_al_it,view01_it, view02_it,view03_it,view04_it,time_entrega_it,msjpublico_it,obscompra_it) VALUES 
('$codigo_it','$cod_aso,fabrica_it','$codfabrica_it','$producto_it','$grupolista_it','$marka_it','$fabricante_it','$precom_it','$monelista_it', '$pv01_it', '$pv02_it','$pv03_it', '$img_it','$stockmin_it','$lugar_al_it','$view01_it','$view02_it','$view03_it','$view04_it','$time_entrega_it','$msjpublico_it','$obscompra_it')";
   $result=mysqli_query($connec,$sql);
   if($result){
	   echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
   }else{
	   echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   }	
   $xareg="NO";
   $xmodi="NOOO";
   $xdelreg="NOOO";
   

// Supongamos que ya tienes las variables $usuario y $password definidas
$target_url = 'catalogo_list_items_admin.php'; // Cambia esto por la URL a la que deseas enviar los datos

echo '<form id="redirectForm" action="' . $target_url . '" method="post">
        <input type="hidden" name="xusername" value="' . trim($usuario) . '"/>
        <input type="hidden" name="xpassword" value="' . trim($password) . '"/>
      </form>
      <script>
        document.getElementById("redirectForm").submit();
      </script>';

   
   
   
} // ********++  FFFIIINNN  NUEVO REGISTROS 


?>
    <table width="562" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="562" colspan="2" bgcolor="#CCCCCC" class="tit_menu_sup"><table width="557" height="63" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="157" align="center" valign="top"><img src="../siga_pormizona/img_asociados/<? echo ($logo_aso); ?>" width="120" height="60"></a></td>
        <td width="400"><div align="center"><span class="TITULO_NEGRO">INGRESO NUEVO PRODUCTO<? echo $cod_aso." ".$rsocial_aso; ?></span></div></td>
        
        </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="262" colspan="2" valign="top" bgcolor="#FFFFCC">
      <form id="form1" name="form1" method="post" action="catalogo_areg_producto.php">
        <table width="290" border="1" align="center" class="tablaingrenuevo">
          <tr>
            <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>INGRESO NUEVO PRODUCTO</strong></div></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B"><span class="TITULO">Cod. Item</span></td>
            <td bgcolor="#FDF19B">&nbsp;</td> <!-- xcod -->
          </tr>
          <tr>
            <td height="26" colspan="2" bgcolor="#FDF19B" class="TITULO">NOMBRE DEL PRODUCTO  
            (120 caracteres)</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#FDF19B" class="TITULO" >
            <input name="xproducto" type="text" id="xproducto" size="45" maxlength="120" onKeyUp="this.value=this.value.toUpperCase();" /></td>
            
            
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Cod. Modelo.</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input class="cplomo" name="xcodfabrica" type="text" id="xcodfabrica" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Marca</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input class="cplomo" name="xmarka" type="text" id="xmarka" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Fabricante</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input class="cplomo" name="xfabricante" type="text" id="xfabricante" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
            </span></td>
            
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Características del producto.</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <textarea name="xmsjpublico" id="xmsjpublico" cols="27" rows="5"></textarea> <!-- Características producto -->
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Prec. compra</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input class="cplomo" name="xprecom" type="text" id="xprecom" size="10" maxlength="10" onKeyUp="this.value=this.value.toUpperCase();" />
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Moneda &quot;S&quot; - &quot;D&quot;</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input class="cplomo" name="xmonelista" type="text" id="xmonelista" size="1" maxlength="1" onKeyUp="this.value=this.value.toUpperCase();" value="S" />
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B" class="TITULO">Precio VENTA 01</td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input name="xpv01" type="text" id="xpv01" size="10" maxlength="10" onKeyUp="this.value=this.value.toUpperCase();" />
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B"><span class="TITULO">Precio OFERTA 03</span></td>
            <td bgcolor="#FDF19B"><span class="TITULO">
              <input name="xpv03" type="text" id="xpv03" size="10" maxlength="10" onKeyUp="this.value=this.value.toUpperCase();" />    
            </span> </td>
          </tr>
          <tr>
            <td bgcolor="#FDF19B"><span class="TITULO">Observaciones para el administrador</span></td>
            <td><span class="TITULO">
              <textarea class="cplomo" name="xobscompra" id="xobscompra" cols="27" rows="5"></textarea>
            </span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#FDF19B"><table width="306" border="1">
              <tr>
                <td width="120" rowspan="2" align="center" bgcolor="#FDF19B" class="tabla10">Grupo Lista</td>
                <td width="170" class="tabla10">1 2 3 4 5 </td>
                </tr>
              <tr>
                <td><input class="cplomo" name="xgrupolista" type="text" id="xgrupolista" size="4" maxlength="4" onKeyUp="this.value=this.value.toUpperCase();" /></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td width="98"><span class="TITULO">
              <input type="hidden" name="xusername" value="<?php echo(trim($usuario)); ?>"/>  
              <input type="hidden" name="xpassword" value="<?php echo(trim($password)); ?>"/>  
              
              <input type="hidden" name="xpv02" value=0/>
              <input type="hidden" name="xstockmin" value=0/>
              <input type="hidden" name="xlugar_al" value=""/>
              <input type="hidden" name="xview01" value="S"/>
              <input type="hidden" name="xview02" value=""/>
              
              <input type="hidden" name="ximg" value=""/>
              
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
  
 
</table>



</body>
</html>
