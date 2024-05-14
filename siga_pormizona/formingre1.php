<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" /> 
</head>
<body>

--
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$longitud = $_POST['longitude'];
$latitud = $_POST['latitude'];

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
     <h2>           *REGISTRE SU NEGOCIO COMPLETAMENTE GRATIS</h2>
</div>
<div class="exteriorform">
   <div class="fondo_formulario">
      <div class="cabecera1">
            <img src="imagenes/cabecera_formulario.jpg" width="700" height="85" class="iconos">
      </div>
      <!-- inicio de boton obligatorio -->         
      <div class="geolocalizacion">
         <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	            
              <h2 class="semi-titulosform_iz">Paso 01: Geolocalización</h2> 
              <div class="titobligatorio">
                  Es obligatorio reconocer su Geolocalización. Si usa un móvil, recuerde activar su ubicación 
              </div>
              <br/>
         <? } ?>
        <div> <a href="geo_mendoza2.html"><img src="imagenes/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
        </div>
        <div>
             <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	
                  <div class="campo_de_posicion edit_lat">		  
	 	           SU LATITUD ES:  <img src="imagenes/alerta.png" width="25" height="22"> <br>
                  </div>
                  <div class="campo_de_posicion edit_long">
	               SU LONGITUD ES:  <img src="imagenes/alerta.png" width="25" height="22"> <br>
                  </div>
             <? } else { ?>
                  <div class="campo_de_posicion edit_lat">	
			        SU LATITUD ES: <? echo $latitud; ?> <br>
                  </div>
                  <div class="campo_de_posicion edit_long">
			        SU LONGITUD ES: <? echo $longitud; ?> <br>
                  </div>
 		     <? } ?>
       </div>
   </div>   <!-- class="geolocalizacion"-->     
    <!-- FIN DE boton obligatorio -->              
   <form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="areg_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
        <?  if(strlen($longitud)==0 AND strlen($latitud)==0){	?>		
           <br/>
           <br/>	
           <h2 class="semi-titulosform">Continua... Paso 02: Ingreso de datos</h2>
           <br/>
           <br/>
        <? } else { ?>             
           <h2 class="semi-titulosform">Paso 02: Ingreso de datos</h2>
           <div class="campos_de_formulario">
              <label>Razon Social</label>
              <input type="text" class="campo_texto" name="xrsocial" placeholder="Ejemplo: Libería la Luz" onkeyup= "this.value=this.value.toUpperCase();"> 
           </div>
           <!--  <h2 class="semi-titulos">UBICACIÓN</h2> -->
           <div class="campos_de_formulario">
              <label>Dirección</label>
              <input type="text" class="campo_texto" name="xdireccion" placeholder="Ejemplo: Av. Salaverry"> 
           </div>
           <div class="campos_de_formulario">
               <label>Categoría</label>
                <? $sql=mysqli_query($connec,"SELECT * FROM categoria order by categoria_cat");  ?>
               <select id="departamento" name="xcategoria" class="campo_texto">
                <? while($rosvi=mysqli_fetch_array($sql))
                        echo "<option  value='".$rosvi["cod_cat"]."'>".$rosvi["categoria_cat"]."</option>";
                ?>
               </select> 
           </div>
           <div class="campos_de_formulario">
               <label>Correo electrónico</label>
               <input type="text" class="campo_texto" name="xemail" placeholder="Ejemplo: librerialaluz@gmail.com"> 
           </div>
           <div class="campos_de_formulario">
               <label>Crear un nombre de Usuario </label>
               <input type="text"  class="campo_texto" name="xusuario" placeholder="Ej. JUAN, MARIA PONCE, MORENA, etc."> 
           </div>

           <div class="campos_de_formulario">
               <label>Crear una contraseña (Max.10 - Utilice símbolos, mayúsculas y minúsculas)</label>
               <input type="text"  class="campo_texto" name="xpass" placeholder="Permitirá modificar sus datos y productos."> 
           </div>
           <input type="hidden" name="xpais" value="PERÚ"/> 
           <input type="hidden" name="xlatitud" value=<? echo $latitud; ?> > 
           <input type="hidden" name="xlongitud" value=<? echo $longitud; ?> > 
           <input type="hidden" name="xestado" value=""/> 
           <input type="hidden" name="xprovincia" value=""/> 
           <input type="hidden" name="xdistrito" value=""/> 
           <input type="hidden" name="xreferencia" value=""/> 
           <input type="hidden" name="xtelf1" value=""/> 
           <input type="hidden" name="xtelf2" value=""/> 
           <input type="hidden" name="xproductos" value=""/> 
           <input type="hidden" name="xfavicon" value=""/> 
           <div class="campo_boton">
              <button class="boton_form">ENVIAR FORMULARIO</button>
           </div>
           <h2 class="semi-titulosform">Continua... Paso 03: Ingreso de datos</h2>
        <? } ?>   
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