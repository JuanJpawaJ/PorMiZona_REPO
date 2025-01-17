<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMZ Ingrese su Negocio</title>
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
     <h2>           *REGISTRE SU NEGOCIO COMPLETAMENTE GRATIS</h2>
</div>
<div class="exteriorform">
   <div class="fondo_formulario">
      <div class="cabecera1">
            <img src="iconos/cabecera_donde_compro.jpg" width="700" height="85" class="iconos">
      </div>
      <!-- inicio de boton obligatorio -->         
      <div class="geolocalizacion">
         <? if(strlen($longitud)==0 OR strlen($latitud)==0){	?>	            
              <h2 class="semi-titulosform_iz">Paso 01: Geolocalización</h2>
              <br>               
              <div class="titobligatorio">
                 La GEOLOCALIZACIÓN, son números que corresponden a coordenadas geográficas. Ejemplo: Latitud -16.458626685027895 y longitud -71.12705155985589.<br> <br>
¿POR QUÉ ES IMPORTANTE LA GEOLOCALIZACIÓN PARA SU NEGOCIO?<br>
Para que sus clientes potenciales, haciendo uso de su ubicación actual, encuentren el producto de su necesidad en la tienda más cercana. Esta tienda es decir su negocio deberá estar previamente identificado por la geolocalización.<br><br>
¿COMO PUBLICAR SU NEGOCIO?<br>
Para obtener una ubicación precisa, ES RECOMENDABLE USAR UN EQUIPO MOVIL. Esto permitirá capturar la geolocalización exacta en el lugar donde se encuentra su negocio y publicar su tienda.<br>
¡No se preocupe por la geolocalización! El proceso es rápido y sencillo. Si tiene alguna duda o necesita ayuda, estamos aquí para asistir en cada paso.<br><br>
¡HAGA QUE SU NEGOCIO SEA VISIBLE PARA LOS CLIENTES CERCANOS!</div>
              <br/>
         <? } ?>
         
         
        <div> <a href="geo_mendoza2.html"><img src="iconos/bot_obligatorio_azu.png" width="352" height="44" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" ></a>
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
              <label>Razon Social (del local comercial, negocio, empresa)</label>
              <input type="text" class="campo_texto" name="xrsocial" placeholder="Ejemplo: Libería la Luz, JPAWAJ SAC" onkeyup= "this.value=this.value.toUpperCase();"> 
           </div>
           <!--  <h2 class="semi-titulos">UBICACIÓN</h2> -->
           <div class="campos_de_formulario">
              <label>Dirección (del local comercial.)</label>
              <input type="text" class="campo_texto" name="xdireccion" placeholder="Ejemplo: Av. Salaverry"> 
           </div>
           <div class="campos_de_formulario">
              <label>Giro del negocio.</label>
              <input type="text" class="campo_texto" name="xgironeg" placeholder="Ej. Boutique, Librería, Dentista, ferretería, etc." onkeyup= "this.value=this.value.toUpperCase();"> 
           </div>
         
           <div class="campos_de_formulario">
               <label>Departamento o Estado</label>
                    <? $sql=mysqli_query($connec,"SELECT * FROM estado_51 order by estado_est");  ?>
                    <select id="departamento" name="xdepartamento" class="campo_texto">  
                    <option value="ESTADO">Elije tu ciudad...</option>
                        <? while($rosvi=mysqli_fetch_array($sql))
						 echo "<option  value='".$rosvi["cod_est"]."'>".$rosvi["cod_est"]." ".$rosvi["estado_est"]."</option>";
                        ?>
                    </select> 
           </div>
           
      
         <!--  <div class="campos_de_formulario">
           
               <label>Categoría</label>
                <? //$sql=mysqli_query($connec,"SELECT * FROM categoria order by categoria_cat");  ?>
               <select id="departamento" name="xcategoria" class="campo_texto">
                <option value="CATEGORIA">Elije tu grupo...</option>
                <? //while($rosvi=mysqli_fetch_array($sql))
                   //     echo "<option  value='".$rosvi["cod_cat"]."'>".$rosvi["categoria_cat"]."</option>";
                ?>
               </select> 
           </div>  -->
           
           <div class="campos_de_formulario">
               <label>Correo electrónico </label>
               <input type="text" class="campo_texto" name="xemail" placeholder="Ejemplo: librerialaluz@gmail.com"> 
           </div>
           <div class="campos_de_formulario">
               <label>Crear una contraseña (Max.10 - Utilice símbolos, mayúsculas y minúsculas)</label>
               <input type="text"  class="campo_texto" name="xpass" placeholder="Permitirá modificar sus datos y productos."> 
           </div>
           <input type="hidden" name="xpais" value="PERÚ"/> 
           <input type="hidden" name="xlatitud" value=<? echo $latitud; ?> > 
           <input type="hidden" name="xlongitud" value=<? echo $longitud; ?> > 
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
                    Diseño Web.
                    Arequipa - Perú</p>
            </article>
        </div>

        <div class="footer_logo">
            <img src="imagenes/Logo/Logo_blanco_puro.svg" alt="">
            <h3>Arequipa - 2024</h3>
        </div>
    </footer>
</body>
</html>