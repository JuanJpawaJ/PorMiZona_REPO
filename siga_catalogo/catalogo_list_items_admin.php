<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


//$cod_aso="0000007";
//$rsocial_aso="PERFUMERIA ANY";


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

$result0=mysqli_query($connec,"select * from asociado_51 WHERE TRIM(email_aso) ='$usuario' AND TRIM(pass_aso) = '$password' ");
$total0=mysqli_num_rows($result0);
$columna = mysqli_fetch_array( $result0 );
$usua_aso=$columna["usua_aso"];

if ($total0==1 AND $usua_aso=="S") { // usua_aso CON CONTRATO DE CATALOGO

$cod_aso=$columna["cod_aso"];
$rsocial_aso=$columna["rsocial_aso"];
$logo_aso=trim($columna["logo_aso"]);


$bxproducto=$_GET['bxproducto'];

$xgl=$_GET['xgl']; //PRO --- PRODUCTO

		


// ********++  DEL REGISTRO

$seguro="N";
if ($xdelreg=="SIDELREG") {
	
	echo "ESTA SEGURO DE ELIMINAR ESTE REGSTRO? S - N ";
    echo '<form method="POST">
            <label for="respuesta">¿Es "S" o "N"?</label>
            <input type="text" id="respuesta" name="respuesta" value="N" >
            <input type="submit" value="Enviar">
          </form>';
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = $_POST["respuesta"];
    
    if ($respuesta == "N") {
	    // Cambiar el contenido de la variable y continuar con el programa
        $xdelreg = "NOOOO";
        echo "Continuando con el programa...";
    } else {	
       $idx=$_GET['idx']; 
	   $imgx_it=$_GET['ximg'];
       $delcod=$_GET['delcod'];
       //echo ("AHora estor dentro dl IFFFFF". "SIDELREG" . "delcod=====: "." ".$delcod);
       $query = "delete from catalogo_productos where codigo_it ='$delcod'";  
       $result = mysqli_query($connec,$query); 
	   
	   $ruta_archivo = "img_catacli/" . $imgx_it;
	   // Verifica si el archivo existe antes de intentar eliminarlo
	   if (file_exists($ruta_archivo)) {
    		// Intenta eliminar el archivo
    		if (unlink($ruta_archivo)) {
        		echo "El archivo ha sido eliminado correctamente.";
    		} else {
        		echo "No se pudo eliminar el archivo.";
    		}
	   } else {
    		echo "El archivo no existe.";
	   }	   
       $xdelreg="NO";
       echo "El registro ha sido borrado.";
     }	
 }
}

// FIN "DEL REGISTRO"



// INICIO: SOLO PARA LOS BOTONES
if ($whatsapp=="SIMENSAJE") {

    $mensaje_previo = "Saludos, le enviaré mi Catálogo. Gracias.";

    //$whatsapp_number = $_POST['whatsapp_number'];
    //$whatsapp_url = "https://api.whatsapp.com/send?phone=" . $whatsapp_number . "&text=Saludos Enviaremos nuestro catálogo";
    $whatsapp_url_previo = "https://api.whatsapp.com/send?phone=" . $whatsapp_number . "&text=" . urlencode($mensaje_previo);

    echo "<script>window.location.href = '$whatsapp_url_previo';</script>";
	
                    //$whatsapp_url = "https://wa.me/$whatsapp_number?text=Hola%20deseo%20información%20de:%20$link target='_blank'"; 
	

	$whatsapp="SIWHATSAPP" ;
	 
	 

}


if ($whatsapp=="SIWHATSAPP") {
    //$whatsapp_number = $_POST['whatsapp_number'];
    $link = "https://www.pormizona.com.pe/idxcatalogo.php?xcod=" . $cod_aso . "&xrsocial=" . $rsocial_aso;
    $whatsapp_url = "https://api.whatsapp.com/send?phone=" . $whatsapp_number . "&text=" ." *ACEPTAR COMO CONTACTO* ". " CATALOGO: ".$rsocial_aso." ".$link ;

                    //$whatsapp_url = "https://wa.me/$whatsapp_number?text=Hola%20deseo%20información%20de:%20$link target='_blank'"; 
   echo "<script>window.location.href = '$whatsapp_url';</script>";
    echo "<script>
   setTimeout(function(){
    window.location.href = 'www.pormizona.com.pe/siga_catalogo/catalogo_list_items_admin.php?xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>&xareg=NNOOO&xmodi=NOOOOO&viewmodi=NOOOO&idx=NOOOO';
                       
   }
    echo </script>";

}
// FIN: SOLO PARA LOS BOTONES

?>
    <table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC" class="tit_menu_sup"><table width="767" height="63" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="157" align="center" valign="top"><img src="../siga_pormizona/img_asociados/<? echo ($logo_aso); ?>" width="120" height="60"></a></td>
        <td width="610"><div align="center"><span class="TITULO_NEGRO">ADMINISTRADOR DE PRODUCTOS -<? echo $cod_aso." ".$rsocial_aso; ?></span></div></td>
        
        </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="281" rowspan="2" align="center" bgcolor="#FFFFCC">
    
          <!-- Botón para enviar enlace por WhatsApp
       <button id="showFormBtn" style="background-color: #25D366; color: white; border: none; padding: 10px 20px; margin: 10px; cursor: pointer; border-radius: 5px; font-size: 16px;">ENVIAR catálogo por WhatsApp</button>  -->
          
          <div class="form-container"> <!-- BOTON WHATSAPP -->
            <form id="formbot1" name="formbot1"action="catalogo_list_items_admin.php" method="POST">
              
              <input type="text" name="whatsapp_number" class="form-input" placeholder="Número de WhatsApp" required>
              <input type="hidden" name="xusername" value="<?php echo(trim($usuario)); ?>"/>  
              <input type="hidden" name="xpassword" value="<?php echo(trim($password)); ?>"/>  
              <input type="hidden" name="xwhatsapp" value="SIMENSAJE"/>  
              
              <button type="submit" class="btn">Enviar MENSAJE</button>
              </form>
            </div>
          <div class="form-container"> <!-- BOTON WHATSAPP -->
            <form id="formbot2" name="formbot2"action="catalogo_list_items_admin.php" method="POST">
              
              <input type="text" name="whatsapp_number" class="form-input" placeholder="Número de WhatsApp" value="<?php echo(trim($whatsapp_number)); ?>" required>
              <input type="hidden" name="xusername" value="<?php echo(trim($usuario)); ?>"/>  
              <input type="hidden" name="xpassword" value="<?php echo(trim($password)); ?>"/>  
              
              <input type="hidden" name="xwhatsapp" value="SIWHATSAPP"/>  
              
              <button type="submit" class="btn">Enviar CATALOGO</button>
              </form>
            </div>

    
    
    
    
    
    </td>
    <td width="234" height="151" align="center" bgcolor="#FFFFCC">
          <!-- Segundo espacio: botón para copiar link -->
          <div class="form-container">
            <button onClick="copyLink()" class="btn">Copiar Link</button>
            </div>        
    
    </td>
    <td width="240" align="center" bgcolor="#FFFFCC">
          <form id="form0" name="form0" method="post" onSubmit="return checkSubmit();" action="/siga_pormizona/formingre3_view.php" onKeyPress="javascript:if(event.keyCode==13){return false;}" >
            <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> >
            <div class="campo_botonin">
              <button class="boton_form">MI PERFIL</button>
              </div>
            </form>
    
    </td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="79" align="center" bgcolor="#FFFFCC">
      <a href="catalogo_areg_producto.php?xusername=<?php echo(trim($usuario)); ?>&xpassword=<?php echo(trim($password)); ?>&xcodaso=<?php echo($cod_aso); ?>">nuevo ingreso productos</a>
    
    </td>
    <td align="center" bgcolor="#FFFFCC">
      
  <div class="form-container">
    <a href="https://www.pormizona.com.pe/idxcatalogo.php?xcod=<? echo $cod_aso; ?>&xrsocial=<? echo $rsocial_aso; ?>" class="btn">VER MI CATALOGO</a>
    </div>    
    </td>
    </tr>
  <tr class="tit_menu_sup">
  
    <td colspan="3" align="center" bgcolor="#FFFFCC"><table width="742" border="1" cellspacing="4" cellpadding="4">
      
      <tr>
        <td width="87" height="17" align="center" class="tabla10"><a href="catalogo_list_items_admin.php?xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>&xareg=NNOOO&xmodi=NOOOOO&viewmodi=NOOOO&idx=NOOOO">NORMAL</a></td>
        
        <td width="89" height="17" align="center" class="tabla10"><a href="catalogo_list_items_admin.php?xgl=PRO&xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>&xareg=NNOOO&xmodi=NOOOOO&viewmodi=NOOOO&idx=NOOOO">X PRODUCTO</a></td>
        
        
        <td width="228" rowspan="2" align="center">
          <form id="form0" name="form0" method="get" action="a_list_items_admin.php">
            <table width="430" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
              <tr>
                <td width="250" height="28" bgcolor="#FDF19B"> Dato a buscar Producto.:
                  <input name="bxproducto" type="text" id="bxproducto" size="25" maxlength="60" onKeyUp="this.value=this.value.toUpperCase();"/></td>
                
                <td width="174" bgcolor="#FDF19B"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                
                </tr>
              </table>
            </form>
          </td>
        <td width="228" rowspan="2" align="center" bgcolor="#FFCC66">
          
          
          
          </td>
        
        </tr>
      </table>
      
    </td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="262" colspan="3" valign="top" bgcolor="#FFFFCC">
      <!-- INICIO DE MUESTRA ITEMS -->
      <table width="782" height="80" border="1" cellpadding="0" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="62" align="center">COD. Item</td>
          <td width="99" align="center">IMAGEN</td>
          <td width="38" align="center">Grupo</td>
          <td width="243" align="center">PRODUCTO</td>
          <td width="69" align="center">P.VENTA.-01</td>
          <td width="65" align="center">P.OFERTA.- 03</td>
          <td width="30" align="center">VIEW01</td>
          <td width="32" align="center">VIEW03</td>
          <td width="34" align="center">DATOS</td>
          <td width="42" align="center">Mod. IMG</td>
          <td width="22" align="center">DEL Reg.</td>
        </tr>
        <?php 


  
//$result=mysql_query("select * from items order by codfabrica_it",$connec);

 


if(strlen($bxproducto)==0){
	if ($xgl=="PRO") {
        $result=mysqli_query($connec,"select * from catalogo_productos where cod_aso_it=$cod_aso order by producto_it");
	}else{
       // $result=mysqli_query($connec,"select * from catalogo_productos where cod_aso_it=$cod_aso order by codigo_id");
        $result=mysqli_query($connec,"select * from catalogo_productos where cod_aso_it=$cod_aso order by codigo_it DESC");

	}
} else {
$bxproducto1=trim($bxproducto);
$result=mysqli_query($connec,"select * from catalogo_productos where (cod_aso_it=$cod_aso) AND (producto_it like '%$bxproducto1%') order by producto_it");
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
		$view02_it=$tabla["view02_it"];
		$view03_it=$tabla["view03_it"];
		
		if ($pv01_it<=$precom_it) { $color1="#FF0000";  } else {  $color1="#E4E4E4";  }
		if ($pv02_it<=$precom_it) { $color2="#FF0000";  } else {  $color2="#E4E4E4";  }
		if ($pv03_it<=$precom_it) { $color3="#FF0000";  } else {  $color3="#E4E4E4";  }
        
		//$lugar_al_it=$tabla["lugar_al_it"];	

		//$monelista_it=$tabla["monelista_it"];
        //if ($monelista_it=="S") {
         //   $simbolo_mone="S/  ";
		//} else {
        //    $simbolo_mone="US$ ";
		//}

?>
        
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td align="center" bgcolor="#FFFFFF"><?php echo($codigo_it) ?></td>
          
          <td align="center" valign="middle" bgcolor="#FFFFFF">           <a href="ilbupweiv.php?idx=<?php  echo($id); ?>"><img src=" <?php echo "img_catacli/".$img_it ?> " width="60" height="%" /><? if ($pv03_it>0) {?> <img src="iconos/promocion.jpg" alt="EN OFERTA" width="14" height="30" /> <? } ?></a></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo($grupolista_it) ?></td>
          <td bgcolor="#FFFFFF"><?php echo($producto_it) ?></td>
          <!--- <td align="right" bgcolor=<? echo($color1) ?> ><?php echo($simbolo_mone.money_format('%n',(round($precom_it+($precom_it*$pje1_it/100))))) ?></td>-->
          <td align="right" bgcolor=<? echo($color1) ?> class="tit_menu_sup" ><?php echo($simbolo_mone.money_format('%n',($pv01_it))) ?></td>
          <td align="right" bgcolor=<? echo($color3) ?> ><?php echo($simbolo_mone.money_format('%n',($pv03_it))) ?></td>
          <td align="center"><?php echo($view01_it) ?></td>
          <td align="center"><?php echo($view03_it) ?></td>
          <td align="center"><a href="catalogo_edit_items.php?idx=<?php  echo($id); ?>&xview=<?php  echo("ADMIN"); ?>&xcod=<?php  echo($cod_aso); ?>&xareg=NNOOO&xmodi=NOOOOO&xdelreg=NOOOOO"><img src="iconos/ico_editar.png" width="30" height="30"></a></td>
          <td bgcolor="#FFCC66" align="center"><a href="img_catacli/n_subir_xfile.php?id_img=<?php echo($id); ?>&xcod=<?php echo($cod_aso); ?>&xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?> "><img src="iconos/ico_imagen.png" width="30" height="30"></a></td>
          
          <td bgcolor="#FFCC66" align="center"><a href="catalogo_list_items_admin.php?delcod=<?php echo($codigo_it);?>&xdelreg=<?php echo("SIDELREG");?>&xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>&ximg=<?php echo($img_it); ?>&xareg=NNOOO&idx=NOOOO">X</a></td>
        </tr>
        <?php 
	}
  
?>
      </table> 
      <!-- FFFIIINNN  MUESTRA ITEMS -->
      
    </td>
    </tr>
  
  <? // } // ************************  FFFIIIINNNN FORMULARIO DE MODIFICAR  ?>
  
</table>
<?

} else {  //SI ES DIFERENTE A : if ($total0==1 AND $usua_aso=="S") { // usua_aso CON CONTRATO DE CATALOGO

     
echo "  <script type='text/javascript'>
    alert('¡SUS DATOS NO SON CORRECTOS! - Cel: 959956000');
   // setTimeout(function(){
       window.location.href = 'sociocatalogo.php';
   // }, 5000); // 5000 milisegundos = 5 segundos
	   
</script>";

   
 }
  
?>

<script>
    function copyLink() {
        const link = "https://www.pormizona.com.pe/idxcatalogo.php?xcod=<?php echo $cod_aso; ?>&xrsocial=<?php echo $rsocial_aso; ?>";
        navigator.clipboard.writeText(link).then(() => {
            alert('Link copiado al portapapeles');
        }).catch(err => {
            console.error('Error al copiar el link: ', err);
        });
    }
</script>

<p>&nbsp;</p>
</body>
</html>
