<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>EDITA - ADMIN</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" /> 
</head>
<body>
<?    
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso = $_GET['xcod'];
$xcodvalue = $_POST['xcodValue'];
$xlongitud = $_POST['longitude'];
$xlatitud = $_POST['latitude'];

//if(strlen($xcodvalue)<>0) {
//	$cod_aso=$xcodvalue;
//}



echo ("ESTES ES  cod_aso : ".$cod_aso);
echo ("ESTES ES ELLLLLLLLLLLLLLLLLLLL xcodValue : ".$xcodvalue);

//ÑÑÑ
$result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

$usua_aso=$tabla['usua_aso'];
$pass_aso=$tabla['pass_aso'];


$xid=$tabla["id"];
$cod_aso=$tabla["cod_aso"];

$pais_aso=$tabla['pais_aso'];
$rsocial_aso=$tabla['rsocial_aso'];
$direccion_aso=$tabla['direccion_aso'];
$distrito_aso=$tabla['distrito_aso'];
$provincia_aso=$tabla['provincia_aso'];
$estado_aso=$tabla['estado_aso'];
$referencia_aso=$tabla['referencia_aso'];
$telf1_aso=$tabla['telf1_aso'];
$telf2_aso=$tabla['telf2_aso'];
$email_aso=$tabla['email_aso'];
$categoria_aso=$tabla['categoria_aso'];
$productos_aso=$tabla['productos_aso'];
$latitud_aso=$tabla['latitud_aso'];
$longitud_aso=$tabla['longitud_aso'];	
$favicon_aso=$tabla["favicon_aso"];
 if(strlen($favicon_aso)==0) {
	$favicon_aso="f_pmz_bl.png";
 }
$date_aso=$tabla["date_aso"];	
$publicidad_aso=$tabla["publicidad_aso"];	
$grupolista_aso=$tabla["grupolista_aso"];
$img1_aso=$tabla["img1_aso"];
$img2_aso=$tabla["img2_aso"];
$logo_aso=$tabla["logo_aso"];
$view1_aso=$tabla["view1_aso"];
$view2_aso=$tabla["view2_aso"];
$view3_aso=$tabla["view3_aso"];
$view4_aso=$tabla["view4_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$obsinterno_aso=$tabla["obsinterno_aso"];

?>

     <h2>           *PAGINA DE EDICION ADMIN  </h2>

  
<form id="form0" name="form0" method="post" onsubmit="return checkSubmit();" action="areg_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
 
 <table width="669" border="1" cellspacing="1" cellpadding="1">
   <tr>
     <td>GEOLOCALIZACION</td>
     <td>
           <div class="geolocalizacion">
      <h2 class="semi-titulosform_iz">¿Desea cambiar? Geolocalización</h2> 
           <div class="titobligatorio">
                Si desea cambiar la Geolocalización, utilice un equipo móvil para ser más exacto. 
           </div>
           <br/>
           
           <div> <a href="geo_mendoza33.html?xcod=<? echo $cod_aso; ?>"><img src="imagenes/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
           </div>
                           
           <div>
             <? if(strlen($xlongitud)==0 OR strlen($xlatitud)==0){	?>	
                    
                  <div class="campo_de_posicion edit_lat">		  
	 	           SU LATITUD REGISTRADA ES: <? echo $latitud_aso; ?>  <br>
                  </div>
                  <div class="campo_de_posicion edit_long">
	               SU LONGITUD REGISTRADA ES: <? echo $longitud_aso; ?>  <br>
                  </div>
             <? } else { ?>
                  <div class="campo_de_posicion edit_lat">	
			        SU NUEVA LATITUD ES: <? echo $xlatitud; ?> <br>
                  </div>
                  <div class="campo_de_posicion edit_long">
			        SU NUEVA LONGITUD ES: <? echo $xlongitud; ?> <br>
                  </div>
 		     <? } ?>
           

     </td>
   </tr>
   <tr>
     <td>Razon Social</td>
     <td>
                <input type="text" class="campo_texto" name="xrsocial" value="<?php echo($rsocial_aso); ?>" onkeyup= "this.value=this.value.toUpperCase();"> 
   
     </td>
   </tr>
   <tr>
     <td>Dirección</td>
     <td>
              <input type="text" class="campo_texto" name="xdireccion" value="<?php echo($direccion_aso); ?>"> 
   
     </td>
   </tr>
   <tr>
     <td>Categoría</td>
     <td>
                <? $sql=mysqli_query($connec,"SELECT * FROM categoria order by categoria_cat");  ?>
               <select id="departamento" name="xcategoria" class="campo_texto">
                <? while($rosvi=mysqli_fetch_array($sql))
				        if ($rosvi["cod_cat"]==$categoria_aso) {
                            echo "<option  value='".$rosvi["cod_cat"]."' selected>".$rosvi["categoria_cat"]."</option>";
						} else {
                            echo "<option  value='".$rosvi["cod_cat"]."'>".$rosvi["categoria_cat"]."</option>";
						}
                ?>
               </select> 
               
                 <!-- <option value="3" selected>Tres</option> -->
                  <!-- <option value="value2" selected>Value 2</option> -->
    
     
     </td>
   </tr>
   <tr>
     <td>Correo electrónico</td>
     <td>
               <input type="text" class="campo_texto" name="xemail" value="<?php echo($email_aso); ?>"> 
    
     </td>
   </tr>
   <tr>
     <td>Crear un nombre de Usuario </td>
     <td>
               <input type="text"  class="campo_texto" name="xusuario" value="<?php echo($usua_aso); ?>"> 
     
     
     </td>
   </tr>
   <tr>
     <td>Crear una contraseña (Max.10 - Utilice símbolos, mayúsculas y minúsculas)</td>
     <td>
               <input type="text"  class="campo_texto" name="xpass" value="<?php echo($pass_aso); ?>"> 
    
     </td>
   </tr>
   <tr>
     <td>País</td>
     <td>
                <input type="text" value="Perú" disabled class="desactivado campo_texto"> 
     </td>
   </tr>
   <tr>
     <td>Departamento o Estado</td>
     <td>
                    <? $sql=mysqli_query($connec,"SELECT * FROM estado_51 order by estado_est");  ?>
                    <select id="departamento" name="xestado" class="campo_texto">
                        <? while($rosvi=mysqli_fetch_array($sql))
                         echo "<option  value='".$rosvi["estado_est"]."'>".$rosvi["estado_est"]."</option>";
                        ?>
                    </select> 
     
     </td>
   </tr>
   <tr>
     <td>Provincia</td>
     <td>
                    <input type="text" class="campo_texto agrandar" name="xprovincia" value="<?php echo($provincia_aso); ?>"> 
    
     </td>
   </tr>
   <tr>
     <td>Distrito</td>
     <td>
                    <input type="text" class="campo_texto agrandar" name="xdistrito" value="<?php echo($distrito_aso); ?>"> 
    
     </td>
   </tr>
   <tr>
     <td>Referencia</td>
     <td>
                    <textarea name="xreferencia" cols="5" rows="1" class="campo_grande"><?php echo($referencia_aso); ?></textarea>
     
     </td>
   </tr>
   <tr>
     <td>Móvil</td>
     <td>
                   <input type="text" class="campo_texto form_telef" name="xtelf1" value="<?php echo($telf1_aso); ?>"> 
     
     </td>
   </tr>
   <tr>
     <td>Fijo</td>
     <td>
                   <input type="text" class="campo_texto form_telef" name="xtelf2" value="<?php echo($telf2_aso); ?>"> 
     
     </td>
   </tr>
   <tr>
     <td>Relación de productos y servicios</td>
     <td>
                    <textarea name="xproductos" cols="5" rows="4" class="campo_grande"><?php echo($productos_aso); ?></textarea> 
     
     </td>
   </tr>

   <tr>
     <td>Publicidad</td>
     <td>
     <input type="text" class="campo_texto" name="xpublicidad" value="<?php echo($publicidad_aso); ?>"> 
     </td>
   </tr>
   <tr>
     <td>Favicon</td>
     <td>
      <input type="text" class="campo_texto" name="xfavicon" value="<?php echo($favicon_aso); ?>"> 
     </td>
   </tr>

   <tr>
     <td>Grupo lista</td>
     <td>
      <input type="text" class="campo_texto" name="xgrupolista" value="<?php echo($grupolista_aso); ?>"> 
     </td>
   </tr>
   <tr>
     <td>Imagen 1</td>
     <td>
      <input type="text" class="campo_texto" name="ximg1" value="<?php echo($img1_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>Imagen 2</td>
     <td>
      <input type="text" class="campo_texto" name="ximg2" value="<?php echo($img2_aso); ?>"> 
     
     </td>
   </tr>
   <tr>
     <td>Logo</td>
     <td>
      <input type="text" class="campo_texto" name="xlogo" value="<?php echo($logo_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>View 1</td>
     <td>
      <input type="text" class="campo_texto" name="xview1" value="<?php echo($view1_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>View 2</td>
     <td>
      <input type="text" class="campo_texto" name="xview2" value="<?php echo($view2_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>View 3</td>
     <td>
      <input type="text" class="campo_texto" name="xview3" value="<?php echo($view3_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>View 4</td>
     <td>
      <input type="text" class="campo_texto" name="xview4" value="<?php echo($view4_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>Msj público</td>
     <td>
      <input type="text" class="campo_texto" name="xmsjpublico" value="<?php echo($msjpublico_aso); ?>"> 

     
     </td>
   </tr>
   <tr>
     <td>Observaciones internas</td>
     <td>
      <input type="text" class="campo_texto" name="xobsinterno" value="<?php echo($obsinterno_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>fecha publicación</td>
     <td>
     <?php echo($date_aso); ?> 

     </td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
 </table>
  <br/>  
  
 <h2 class="semi-titulosform">FORMULARIO 01</h2>
 

           <input type="hidden" name="xform" value="TODO"/> 
           <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> > 
              
               
 
           <div class="campo_boton">
                    <button class="boton_form">ENVIAR FORMULARIO 02</button>
           </div>
    </form>
<br/>   


</body>
</html>