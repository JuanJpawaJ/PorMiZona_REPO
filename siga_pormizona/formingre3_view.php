<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Formu 3 - EDITA</title>
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

$cod_aso = $_POST['xcod'];
$xlongitud = $_POST['longitude'];
$xlatitud = $_POST['latitude'];

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
$date_aso=$tabla["$date_aso"];	
$publicidad_aso=$tabla["$publicidad_aso"];	
$grupolista_aso=$tabla["$grupolista_aso"];
$img1_aso=$tabla["$img1_aso"];
$img2_aso=$tabla["$img2_aso"];
$logo_aso=$tabla["$logo_aso"];
$view1_aso=$tabla["$view1_aso"];
$view2_aso=$tabla["$view2_aso"];
$view3_aso=$tabla["$view3_aso"];
$view4_aso=$tabla["$view4_aso"];
$msjpublico_aso=$tabla["$msjpublico_aso"];
$obsinterno_aso=$tabla["$obsinterno_aso"];

?>
<nav>
    <div class="botones_nav">
            <a href="#" class="boton_home"></a>
            <a href="#" class="boton_menu"></a>
    </div>
    <!-- <img src="imagenes/Logo/Logo_blanco_negro.svg" alt="logo"> -->
    <img src="imagenes/logo_dencuentrop.png" alt="logo" class="logo">
</nav>
<div class="barra_titulo">
     <h2>           *PAGINA DE ASOCIADO AUTORIZADO </h2>
</div>
<div class="exteriorform">
   <div class="fondo_formulario">
      <div class="cabecera1">
            <img src="imagenes/cabecera_formulario.jpg" width="700" height="85" class="iconos">
      </div>
  
   <h2 class="semi-titulosform">FORMULARIO 00</h2>
               
   <form id="form0" name="form0" method="post" onsubmit="return checkSubmit();" action="areg_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
   
        <!-- inicio de boton obligatorio -->         
      <div class="geolocalizacion">
           <h2 class="semi-titulosform_iz">¿Desea cambiar? Geolocalización</h2> 
           <div class="titobligatorio">
                Si desea cambiar la Geolocalización, utilice un equipo móvil para ser más exacto. 
           </div>
           <br/>
           <div> <a href="geo_mendoza33.html"><img src="imagenes/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
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
       </div>
   </div>   <!-- class="geolocalizacion"-->     
    <!-- FIN DE boton obligatorio -->            


          <input type="hidden" name="xform" value="00"/> 
           <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> > 
           <input type="hidden" name="xlatitud" value=<? echo $xlatitud; ?> > 
           <input type="hidden" name="xlongitud" value=<? echo $xlongitud; ?> > 

           <div class="campo_boton">
              <button class="boton_form">ENVIAR FORMULARIO 00</button>
           </div>
   
           </form>
  </div>
</div>
  
  
  <br/>  
  
  <div class="exteriorform">
   <div class="fondo_formulario">  
 <h2 class="semi-titulosform">FORMULARIO 01</h2>
 
 
               
   <form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="areg_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
           <div class="campos_de_formulario">
              <label>Razon Social</label>
              <input type="text" class="campo_texto" name="xrsocial" value="<?php echo($rsocial_aso); ?>" onkeyup= "this.value=this.value.toUpperCase();"> 
           </div>
           <!--  <h2 class="semi-titulos">UBICACIÓN</h2> -->
           <div class="campos_de_formulario">
              <label>Dirección</label>
              <input type="text" class="campo_texto" name="xdireccion" value="<?php echo($direccion_aso); ?>"> 
           </div>
           <div class="campos_de_formulario">
               <label>Categoría</label>
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
           </div>
           <div class="campos_de_formulario">
               <label>Correo electrónico</label>
               <input type="text" class="campo_texto" name="xemail" value="<?php echo($email_aso); ?>"> 
           </div>
           <div class="campos_de_formulario">
               <label>Crear un nombre de Usuario </label>
               <input type="text"  class="campo_texto" name="xusuario" value="<?php echo($usua_aso); ?>"> 
           </div>

           <div class="campos_de_formulario">
               <label>Crear una contraseña (Max.10 - Utilice símbolos, mayúsculas y minúsculas)</label>
               <input type="text"  class="campo_texto" name="xpass" value="<?php echo($pass_aso); ?>"> 
           </div>
           <input type="hidden" name="xform" value="01"/> 
           <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> > 

           <div class="campo_boton">
              <button class="boton_form">ENVIAR FORMULARIO 01</button>
           </div>
   
           </form>
  </div>
</div>

<br/>

 
 
<div class="exteriorform">
   <div class="fondo_formulario">
      <!-- inicio de boton obligatorio -->         

 <h2 class="semi-titulosform">FORMULARIO 02</h2>
 
 <br/>   

          <form id="form2" name="form2" method="post" onsubmit="return checkSubmit();" action="areg_mod_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >

  
               <div class="campos_de_formulario">
                <label>País</label>
                <input type="text" value="Perú" disabled class="desactivado campo_texto"> 
               </div>
               <div class="campos_de_formulario">
                    <label>Departamento o Estado</label>
                    <? $sql=mysqli_query($connec,"SELECT * FROM estado_51 order by estado_est");  ?>
                    <select id="departamento" name="xestado" class="campo_texto">
                        <? while($rosvi=mysqli_fetch_array($sql))
                         echo "<option  value='".$rosvi["estado_est"]."'>".$rosvi["estado_est"]."</option>";
                        ?>
                    </select> 
               </div>

               <div class="otros_datos">
                
                 <div class="campos_de_formulario">
                    <label>Provincia</label>
                    <input type="text" class="campo_texto agrandar" name="xprovincia" value="<?php echo($provincia_aso); ?>"> 
                </div>

                <div class="campos_de_formulario form_horizontal">
                    <label>Distrito</label>
                    <input type="text" class="campo_texto agrandar" name="xdistrito" value="<?php echo($distrito_aso); ?>"> 
                </div>

              </div>        
               <div class="campos_de_formulario campo_fondo_texto">
                    <label>Referencia</label>
                    <textarea name="xreferencia" cols="5" rows="1" class="campo_grande"><?php echo($referencia_aso); ?></textarea>
                    
                </div>
                <div class="otros_datos">
                    <div class="campos_de_formulario">
                        <label>Móvil</label>
                        <input type="text" class="campo_texto form_telef" name="xtelf1" value="<?php echo($telf1_aso); ?>"> 
                    </div>
                    
                    <div class="campos_de_formulario form_horizontal">
                        <label>Fijo</label>
                        <input type="text" class="campo_texto form_telef" name="xtelf2" value="<?php echo($telf2_aso); ?>"> 
                    </div>
                </div>            
                <div class="campos_de_formulario">
                    <label>Relación de productos y servicios</label>
                    <textarea name="xproductos" cols="5" rows="4" class="campo_grande"><?php echo($productos_aso); ?></textarea> 
                </div>
                
               <!-- <a href="img_asociados/n_subir_xfile.php?xcod=<? echo $cod_aso; ?>">favicon</a>  -->
            <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> > 
            <input type="hidden" name="xform" value="02"/> 
                
               
                    <div class="campo_boton">
                    <button class="boton_form">ENVIAR FORMULARIO 02</button>
                    </div>
            </form>
</div>
</div>


    <footer>
        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CLIENTES</h2>
                <p>Dencuentro.com es una página gratuita.
                Las consultas por esta Web y los contactos 
                con nuestros asociados son gratuitos.</p>
            </article>
        </div>

        <div class="footer_asociados footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">ASOCIADOS</h2>
                <p>Brinda los siguientes servicios:
                    * Servicio gratuito incluye:
                    - El registro de datos, ubicación y productos que comercializa.
                     
                    * Servicio por convenio:
                    - Diseño logos
                    - Mapa Google.
                </p>
            </article>
        </div>

        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">PRODUCTOS</h2>
                <p>Nuestra empresa, no se responsabiliza por productos o servicos en mal estado.</p>
            </article>
        </div>

        <div class="footer_contactos footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CONTACTOS</h2>
                <p>Cel. 959956000 <br>
                    Diseño Web.
                    Ca. Sena 105 cop. 58.
                    J.L.B. y Rivero - Arequipa - Perú</p>
            </article>
        </div>

        <div class="footer_logo">
            <img src="imagenes/Logo/Logo_blanco_puro.svg" alt="">
            <h3>Arequipa - 2020</h3>
        </div>
    </footer>
</body>
</html>