<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos - Paso 02</title>
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

    
<?

$result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

$id=$tabla["id"];
$cod_aso=$tabla["cod_aso"];
$pais_aso=$tabla["pais_aso"];
$rsocial_aso=$tabla["rsocial_aso"];
$direccion_aso=$tabla["direccion_aso"];
$departamento_aso=$tabla["departamento_aso"];
$gironeg_aso=$tabla["gironeg_aso"];
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

    $resultaso=mysqli_query($connec,"SELECT * FROM estado_51   where cod_est='$departamento_aso'");
	$tablaaso =mysqli_fetch_array( $resultaso );
	$departamentotxt_aso=$tablaaso["estado_est"];


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
<h2 class="semi-titulos">PASO 3...</h2>

<h2 class="semi-titulos">Ud. ha completado el Paso 01</h2>
<table width="300" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td><? echo "SU LATITUD ES : "; ?></td>
    <td><? echo $latitud_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "SU LONGITUD ES: "; ?></td>
    <td><? echo $longitud_aso; ?></td>
  </tr>
</table>
<? echo "<br>"; ?>

 <h2 class="semi-titulos">Ud. ha completado el Paso 02</h2> 
 <table width="300" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td><? echo "SU CÓDIGO ES : "; ?></td>
    <td><? echo $cod_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "PAÍS DE ORIGEN : "; ?></td>
    <td><? echo $pais_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "SU RAZÓN SOCIAL : "; ?></td>
    <td><? echo $rsocial_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "SU DIRECCIÓN : "; ?></td>
    <td><? echo $direccion_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "SU GIRO NEGOCIO : "; ?></td>
    <td><? echo $gironeg_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "SU DEPARTAMENTO : "; ?></td>
    <td><? echo $departamento_aso." ".$departamentotxt_aso; ?></td>
    
  </tr>
</table>

<? echo "<br>"; ?>
 <h2 class="semi-titulos">Tome nota de su usuario y clave</h2> 

<table width="300" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td colspan="2"><? 
echo "Última oportunidad de TOMAR NOTA de su USUARIO y CLAVE "."<br>";
echo "Recuerde: Ud. podrá realizar las modificaciones necesarias después del paso 3"."<br>";
echo "En la opción [SOY PROPIETARIO]"."<br>"."<br>";
?>
</td>
  </tr>
  <tr>
    <td><? echo "SU USUARIO  : "; ?></td>
    <td><? echo $email_aso; ?></td>
  </tr>
  <tr>
    <td><? echo "SU PASSWORD : "; ?></td>
    <td><? echo $pass_aso; ?></td>
  </tr>

</table>






<? echo "<br>"; ?>



          <form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="upd2_asoc.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >

                <h2 class="semi-titulos">Continuamos.. Paso 03 - Productos</h2>
  
               <div class="campos_de_formulario">
                <label>País</label>
                <input type="text" value="Perú" disabled class="desactivado campo_texto"> 
               </div>

             
                
                <div class="campos_de_formulario">
                    <label>Provincia</label>
                    <input type="text" class="campo_texto agrandar" name="xprovincia" placeholder="Ejemplo: Arequipa"> 
                </div>

                <div class="campos_de_formulario">
                    <label>Distrito</label>
                    <input type="text" class="campo_texto agrandar" name="xdistrito" placeholder="Ejemplo: Yanahuara"> 
                </div>

                    
               <div class="campos_de_formulario campo_fondo_texto">
                    <label>Referencia</label>
                    <textarea  id="" cols="5" rows="1" name="xreferencia" placeholder="Ejemplo: A 2 cuadras de la Plaza de Armas" class="campo_grande" ></textarea>
                    
                </div>
                <div class="otros_datos">
                    <div class="campos_de_formulario">
                        <label>Móvil 1</label>
                        <input type="text" class="campo_texto form_telef" name="xtelf1" placeholder="959595959"> 
                    </div>
                    
                    <div class="campos_de_formulario form_horizontal">
                        <label>Móvil 2</label>
                        <input type="text" class="campo_texto form_telef" name="xtelf2" placeholder="054-224836"> 
                    </div>
                </div>            
                <div class="campos_de_formulario">
                    <label>Etiqueta de productos y/o servicios ¡IMPORTANTE!</label>
                    <textarea id="" cols="5" rows="4" name="xproductos" placeholder="Ej. palabras de búsqueda: cabello, ropa, perfumes, computadoras, gasfitero plumones libros carne menú carpintero licores bcp clases legal, etc. (Max. 250 caracteres)" class="campo_grande" ></textarea> 
                </div>
                
               <!-- <a href="img_asociados/n_subir_xfile.php?xcod=<? echo $cod_aso; ?>">favicon</a>  -->
            <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> > 
            <input type="hidden" name="longitud" value=<? echo $longitud_aso; ?> > 
            <input type="hidden" name="latitud" value=<? echo $latitud_aso; ?> > 
            <input type="hidden" name="xrsocial" value=<? echo $rsocial_aso; ?> > 
               
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