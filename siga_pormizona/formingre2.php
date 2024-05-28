<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
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
            <img src="iconos/cabecera_donde_compro.jpg" width="700" height="85" class="iconos">
      </div>
      <!-- inicio de boton obligatorio -->         

    
<?

$result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

$id=$tabla["id"];
$cod_aso=$tabla["cod_aso"];
$pais_aso=$tabla["pais_aso"];
$rsocial_aso=$tabla["rsocial_aso"];
$direccion_aso=$tabla["direccion_aso"];
$email_aso=$tabla["email_aso"];
$date_aso=$tabla["date_aso"];
$latitud_aso=$tabla["latitud_aso"];
$longitud_aso=$tabla["longitud_aso"];
$favicon_aso=$tabla["favicon_aso"];
$usua_aso=$tabla["usua_aso"];
$pass_aso=$tabla["pass_aso"];
	if(strlen($favicon_aso)==0) {
		$favicon_aso="f_pmz_bl.png";
	}



// $distrito_aso=$tabla["distrito_aso"];
// $provincia_aso=$tabla["provincia_aso"];
// $estado_aso=$tabla["estado_aso"];
// $referencia_aso=$tabla["referencia_aso"];
// $telf1_aso=$tabla["telf1_aso"];
// $telf2_aso=$tabla["telf2_aso"];

// $categoria_aso=$tabla["categoria_aso"];
// $productos_aso=$tabla["productos_aso"];
// $favicon_aso=$tabla["favicon_aso"];
// $publicidad_aso=$tabla["publicidad_aso"];

?>
<h2 class="semi-titulos">Ud. ha completado el Paso 01</h2>
<?
echo "<br>";
echo "SU LATITUD ES : ". $latitud_aso."<br>";
echo "SU LONGITUD ES: ".$longitud_aso."<br>";
echo "<br>";
?>
<h2 class="semi-titulos">Ud. ha completado el Paso 02</h2>
<?
echo "<br>";
echo "SU CÓDIGO ES : ".$cod_aso."<br>";
echo "PAÍS DE ORIGEN : ".$pais_aso."<br>";
echo "SU RAZÓN SOCILA : ".$rsocial_aso."<br>";
echo "SU DIRECCIÓN : ".$direccion_aso."<br>";
echo "SU EMAIL : ".$email_aso."<br>";
echo " SU ".$email_aso."<br>";
echo "<br>";

echo "Última oportunidad de tomar nota de su USUARIO y CLAVE ";
echo "Recuerde: Ud. podrá realizar las modificaciones necesarias después del paso 3. En la opción [SOY PROPIETARIO]";
echo "<br>";

echo "SU USUARIO . ".$usua_aso."<br>";
echo "SU PASSWORD : ".$pass_aso."<br>";
echo "<br>";

?>
    <div class="lista">

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    
  <tr>
    <td width="47" rowspan="2" valign="middle"><img src="img_asociados/<?php  echo($favicon_aso); ?>" width="45" height="45"></td>
    <td width="226" class="busrazon"><?php  echo("  ".$rsocial_aso); ?></td>
    <td width="64" rowspan="2" class="busdireccion"><?php  echo($direccion_aso); ?></td>
  </tr>
  <tr>
    <td valign="middle" class="busproductos"><?php  echo($productos_aso); ?></td>
    </tr>
  <tr>
    <td width="47">&nbsp;</td>
    <td colspan="2" class="busraya">--------------------------------------------------------------------------------------------</td>
    </tr>
   
    </table>

  </a></div>

          <form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="upd2_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >

                <h2 class="semi-titulos">Paso 03 - Productos</h2>
  
               <div class="campos_de_formulario">
                <label>País</label>
                <input type="text" value="Perú" disabled class="desactivado campo_texto"> 
               </div>
               <div class="campos_de_formulario">
                    <label>Departamento o Estado</label>
                    <? $sql=mysqli_query($connec,"SELECT * FROM estado_51 order by estado_est");  ?>
                    <select id="departamento" name="xestado" class="campo_texto">  
                    <option value="ESTADO">Elije tu ciudad...</option>

                    
                    
                        <? while($rosvi=mysqli_fetch_array($sql))
                         echo "<option  value='".$rosvi["estado_est"]."'>".$rosvi["estado_est"]."</option>";
                        ?>
                    </select> 
               </div>

               <div class="otros_datos">
                
                 <div class="campos_de_formulario">
                    <label>Provincia</label>
                    <input type="text" class="campo_texto agrandar" name="xprovincia" placeholder="Ejemplo: Arequipa"> 
                </div>

                <div class="campos_de_formulario form_horizontal">
                    <label>Distrito</label>
                    <input type="text" class="campo_texto agrandar" name="xdistrito" placeholder="Ejemplo: Yanahuara"> 
                </div>

              </div>        
               <div class="campos_de_formulario campo_fondo_texto">
                    <label>Referencia</label>
                    <textarea  id="" cols="5" rows="1" name="xreferencia" placeholder="Ejemplo: A 2 cuadras de la Plaza de Armas" class="campo_grande" ></textarea>
                    
                </div>
                <div class="otros_datos">
                    <div class="campos_de_formulario">
                        <label>Móvil</label>
                        <input type="text" class="campo_texto form_telef" name="xtelf1" placeholder="959595959"> 
                    </div>
                    
                    <div class="campos_de_formulario form_horizontal">
                        <label>Fijo</label>
                        <input type="text" class="campo_texto form_telef" name="xtelf2" placeholder="054-224836"> 
                    </div>
                </div>            
                <div class="campos_de_formulario">
                    <label>Relación de productos y servicios</label>
                    <textarea id="" cols="5" rows="4" name="xproductos" placeholder="Ej. palabras de búsqueda: cabello corte computadoras gasfitero plumones libros carne menú carpintero licores bcp clases legal, etc. (Max. 250 caracteres)" class="campo_grande" ></textarea> 
                </div>
                
               <!-- <a href="img_asociados/n_subir_xfile.php?xcod=<? echo $cod_aso; ?>">favicon</a>  -->
            <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> > 
                
                
                <h2 class="semi-titulos">Al finalizar, continue con el botón SOY PROPIETARIO</h2>
                
                
                    <div class="campo_boton">
                    <button class="boton_form">ENVIAR FORMULARIO</button>
                    </div>
            </form>
</div>
</div>




    <footer>
        <div class="footer_clientes footer_uno">
            <article class="footer_article">
                <h2 class="semi-titulos">CLIENTES</h2>
                <p>Por Mi Zona.com.pe es una página gratuita.
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
            <h3>Arequipa - 2024</h3>
        </div>
    </footer>
</body>
</html>