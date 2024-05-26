<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Evento</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" /> 
</head>
<body>


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
    <img src="iconos/logo_pmz.png" alt="logo" class="logo">
</nav>
<div class="barra_titulo">
     <h2>           *REGISTRE TU EVENTO COMPLETAMENTE GRATIS</h2>
</div>
<div class="exteriorform">
   <div class="fondo_formulario">
      <div class="cabecera1">
            <img src="iconos/cabecera_formulario.jpg" width="700" height="85" class="iconos">
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
        <div> <a href="geo_mendoza2_mievento.html"><img src="iconos/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
        </div>
        <div>
             <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	
                  <div class="campo_de_posicion edit_lat">		  
	 	           SU LATITUD ES:  <img src="iconos/alerta.png" width="25" height="22"> <br>
                  </div>
                  <div class="campo_de_posicion edit_long">
	               SU LONGITUD ES:  <img src="iconos/alerta.png" width="25" height="22"> <br>
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
   <form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="areg_mievento.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
        <?  if(strlen($longitud)==0 AND strlen($latitud)==0){	?>		
           <br/>
           <br/>	
           <h2 class="semi-titulosform">Continua... Paso 02: Ingreso de datos</h2>
           <br/>
           <br/>
        <? } else { ?>             
           <h2 class="semi-titulosform">Paso 02: Ingreso de datos</h2>
           <div class="campos_de_formulario">
              <label>NOMBRE DEL EVENTO</label>
              <input type="text" class="campo_texto" name="xnomevento" placeholder="Ejemplo: GRAN PARRILLADA..." onkeyup= "this.value=this.value.toUpperCase();"> 
           </div>
           <!--  <h2 class="semi-titulos">UBICACIÓN</h2> -->
           <div class="campos_de_formulario_texarea">
              <label>DESCRIPCIÓN DEL EVENTO</label>
              <textarea name="xdescri" rows="5" class="campo_texto" placeholder="Ejemplo: Invito a mi parrilada bailable..."></textarea> 
           </div>
       <!-- 
          <div class="campos_de_formulario">
           
               <label>Categoría</label>
                <? // $sql=mysqli_query($connec,"SELECT * FROM categoria order by categoria_cat");  ?>
               <select id="departamento" name="xcategoria" class="campo_texto">
                <option value="CATEGORIA">Elije tu grupo...</option>
                <? //while($rosvi=mysqli_fetch_array($sql))
                     //   echo "<option  value='".$rosvi["cod_cat"]."'>".$rosvi["categoria_cat"]."</option>";
                ?>
               </select> 
           </div>
       -->
          <div class="campos_de_formulario">
               <label>Fecha del evento dd/mm/aa </label>
               <input type="date" class="campo_texto" name="xfinicio" placeholder="Ejemplo: 25/05/2025"> 
           </div>

          <div class="campos_de_formulario">
               <label>BOLETO DE ENTRADA en soles</label>
               <input type="text" class="campo_texto" name="xc_ingreso" placeholder="Ejemplo: S/ 10"> 
           </div>

           <h2 class="semi-titulosform">Los siguentes datos, no se mostrarán en su aviso</h2>

          <div class="campos_de_formulario">
               <label>NOMBRE Y APELLIDO ANUNCIANTE</label>
               <input type="text" class="campo_texto" name="xanunciante" placeholder="Ejemplo: Pedro Rios"> 
           </div>

          <div class="campos_de_formulario">
               <label>TELÉFONO CONTACTO</label>
               <input type="text" class="campo_texto" name="xtelf" placeholder="Ejemplo: Pedro Rios"> 
           </div>

           <div class="campos_de_formulario">
               <label>Correo electrónico</label>
               <input type="text" class="campo_texto" name="xemail" placeholder="Ejemplo: librerialaluz@gmail.com"> 
           </div>
   <!--        <div class="campos_de_formulario">
               <label>Crear un nombre de Usuario </label>
               <input type="text"  class="campo_texto" name="xusuario" placeholder="Ej. JUAN, MARIA PONCE, MORENA, etc."> 
           </div>

           <div class="campos_de_formulario">
               <label>Crear una contraseña (Max.10 - Utilice símbolos, mayúsculas y minúsculas)</label>
               <input type="text"  class="campo_texto" name="xpass" placeholder="Permitirá modificar sus datos y productos."> 
           </div>
   -->        
           <input type="hidden" name="xcodevento" value="000000"/> 
           <input type="hidden" name="xlatitud" value=<? echo $latitud; ?> > 
           <input type="hidden" name="xlongitud" value=<? echo $longitud; ?> > 
           <input type="hidden" name="ximg" value=""/> 
           <input type="hidden" name="xview01" value="1"/> 
           <input type="hidden" name="xview02" value=""/> 
           <input type="hidden" name="xmsjpublico" value=""/> 
           <input type="hidden" name="xobsinterno" value=""/> 
           <div class="campo_boton">
              <button class="boton_form">ENVIAR FORMULARIO</button>
           </div>
        <? } ?>   
           </form>
  </div>
</div>
    <footer>
        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CLIENTES</h2>
                <p>Pormizona.com.pe es una página gratuita.
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
                     Arequipa - Perú</p>
            </article>
        </div>

        <div class="footer_logo">
            <img src="imagenes/Logo/Logo_blanco_puro.svg" alt="">
            <h3>Arequipa - 2020</h3>
        </div>
    </footer>
</body>
</html>