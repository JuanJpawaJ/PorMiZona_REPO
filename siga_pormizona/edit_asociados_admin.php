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

if(strlen($xcodvalue)<>0) {
	$cod_aso=$xcodvalue;
}



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
$departamento_aso=$tabla['departamento_aso'];
$referencia_aso=$tabla['referencia_aso'];
$gironeg_aso=$tabla["gironeg_aso"];
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
$view01_aso=$tabla["view01_aso"];
$view02_aso=$tabla["view02_aso"];
$view03_aso=$tabla["view03_aso"];
$view04_aso=$tabla["view04_aso"];
$link01_aso=$tabla["link01_aso"];
$link02_aso=$tabla["link02_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$obsinterno_aso=$tabla["obsinterno_aso"];

?>

     <h2>           *PAGINA DE EDICION ADMIN  </h2>
<form id="form0" name="form0" method="post" onsubmit="return checkSubmit();" action="upd3_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
 
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
           
           <div> <a href="geo_mendoza34.html?xcod=<? echo $cod_aso; ?>"><img src="iconos/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
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

 </table>  
 
             <input type="hidden" name="xlatitud" value="<? echo $xlatitud; ?>"/> 
             <input type="hidden" name="xlongitud" value="<? echo $xlongitud; ?>"/> 
  
             <input type="hidden" name="xform" value="TODO00"/> 
             <input type="hidden" name="xretorna" value="a_list_asociados_admin.php"/> 
             <input type="hidden" name="xcod" value="<? echo $xcodvalue; ?>"/> 
              
               
 
  <div class="campo_boton">
    <button class="boton_form">ENVIAR FORMULARIO TODO 00</button>
           </div>
</form>

<br/>   
<br/>   


<form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="upd3_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
 
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
           
           <div> <a href="geo_mendoza1.html?xcod=<? echo $cod_aso; ?>"><img src="imagenes/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
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
     <td>Giro Negocio</td>
     <td>
              <input type="text" class="campo_texto" name="xgironeg" value="<?php echo($gironeg_aso); ?>"> 
   
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
     <td bgcolor="#66FFCC">Correo electrónico</td>
     <td>
               <input type="text" class="campo_texto" name="xemail" value="<?php echo($email_aso); ?>"> 
    
     </td>
   </tr>
   <tr>
     <td bgcolor="#66FFCC">Crear una contraseña (Max.10 - Utilice símbolos, mayúsculas y minúsculas)</td>
     <td>
       <input type="text"  class="campo_texto" name="xpass" value="<?php echo($pass_aso); ?>"> 
       
      </td>
   </tr>
   <tr>
     <td>País</td>
     <td>
                <input type="text" class="campo_texto agrandar" name="xpais" value="<?php echo($pais_aso); ?>" > 
     </td>
   </tr>
   <tr>
     <td>Departamento o Estado</td>
     <td>
                    <input type="text" class="campo_texto agrandar" name="xdepartamento" value="<?php echo($departamento_aso); ?>"> 

     
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
                    <input type="text"  class="campo_texto agrandar" name="xreferencia" value="<?php echo($referencia_aso); ?>">
     
     </td>
   </tr>
   <tr>
     <td>Telf1 (WEB)</td>
     <td>
                   <input type="text" class="campo_texto agrandar" name="xtelf1" value="<?php echo($telf1_aso); ?>"> 
                   
     
     </td>
   </tr>
   <tr>
     <td>Telf2</td>
     <td>
                   <input type="text" class="campo_texto agrandar" name="xtelf2" value="<?php echo($telf2_aso); ?>"> 
     
     </td>
   </tr>
   <tr>
     <td>Relación de productos y servicios</td>
     <td>
                    <textarea name="xproductos" cols="5" rows="4" class="campo_grande"><?php echo($productos_aso); ?></textarea> 
     
     </td>
   </tr>
 </table>  
  
             <input type="hidden" name="xform" value="TODO01"/> 
             <input type="hidden" name="xretorna" value="a_list_asociados_admin.php"/> 
             <input type="hidden" name="xcod" value="<? echo $cod_aso; ?>" /> 
              
               
 
           <div class="campo_boton">
                    <button class="boton_form">ENVIAR FORMULARIO TODO 01</button>
           </div>
   </form>
<br/>   
<br/>   


<form id="form2" name="form2" method="post" onsubmit="return checkSubmit();" action="upd3_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
   
  <table width="669" border="1" cellspacing="1" cellpadding="1">
  
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
     <td>E. Asoc. V1</td>
     <td>
      <input type="text" class="campo_texto" name="xview1" value="<?php echo($view01_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>View 2</td>
     <td>
      <input type="text" class="campo_texto" name="xview2" value="<?php echo($view02_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>View 3</td>
     <td>
      <input type="text" class="campo_texto" name="xview3" value="<?php echo($view03_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>Link 01</td>
     <td>
      <input type="text" class="campo_texto" name="xlink1" value="<?php echo($link01_aso); ?>"> 

     </td>
   </tr>
   <tr>
     <td>Link02</td>
     <td>
       <input type="text" class="campo_texto" name="xlink2" value="<?php echo($link02_aso); ?>"> 
    
     </td>
   </tr>
      <tr>
        <td bgcolor="#FFFFCC">WEB Contrato SOCIO-CATALOGO S - N</td>
        <td bgcolor="#FFFFCC"><input type="text"  class="campo_texto" name="xusuario" value="<?php echo($usua_aso); ?>"></td>
    </tr>

   <tr>
     <td bgcolor="#FFFFCC"><p>WEB Observaciones SOCIO CATALOGO </p></td>
     <td bgcolor="#FFFFCC">
      <textarea class="campo_texto" name="xobsinterno" rows="5" cols="30"><?php echo($obsinterno_aso); ?></textarea>
     </td>
   </tr>
      <tr>
     <td bgcolor="#FFFFCC">WEB Si CABECERA slide View4</td>
     <td>
      <input type="text" class="campo_texto" name="xview4" value="<?php echo($view04_aso); ?>"> 

     </td>
   </tr>

    <tr>
        <td bgcolor="#FFFFCC">WEB Quienes Somos</td>
        <td>
           <textarea class="campo_texto" name="xmsjpublico" rows="5" cols="30"><?php echo($msjpublico_aso); ?></textarea>
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
  

 
             <input type="hidden" name="xretorna" value="a_list_asociados_admin.php"/> 

           <input type="hidden" name="xform" value="TODO02"/> 
           <input type="hidden" name="xcod" value="<? echo $cod_aso; ?>" /> 
              
               
 
           <div class="campo_boton">
                    <button class="boton_form">ENVIAR FORMULARIO TODO 02</button>
           </div>
    </form>
<br/>   


</body>
</html>