<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario - Clave</title>
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
$iclave= $_GET['xiclave'];

$xemail= $_GET['xemail'];
$xclave= $_GET['xclave'];
$xopcion= $_GET['xopcion'];

$rsocial= $_GET['xrsocial'];
$usua_aso= $_GET['xusua'];

if ($usua_aso=="S") { ?>
    <script type="text/javascript">
      // window.location.href = "formingre2.php?xcod=<?php echo $cod_aso; ?>";
       window.location.href = "/siga_catalogo/sociocatalogo.php";
    </script> <?
} else { 

  if ($iclave=="SI") {  ?>
     <div class="exteriorform">
        <div class="fondo_formulario">
            <div class="cabecera1">
                <!-- <img src="imagenes/cabecera_formulario.jpg"  class="iconos"> -->
            <h2 class="semi-titulosform"> - Por Mi Zona - </h2>
               
            </div>
            <form id="form1" name="form1" method="GET" onsubmit="return checkSubmit();" action="ingre.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
                 <h2 class="semi-titulosform"> <? echo ($rsocial);?></h2>
                 <h2 class="semi-titulosform"> ¿AÚN NO CUENTA CON CATÁLOGO DE PRODUCTOS? - ¡Solicíte ahora mismo! </h2>
                 <br />
                 <h2 class="semi-titulosform">Ingrese su USUARIO y CLAVE </h2>
                 <div class="campos_de_formularioin">
                     <label>Usuario</label>
                     <input type="text" class="campo_textoin" name="xemail"  > 
                 </div>
                 <div class="campos_de_formularioin">
                     <label>Clave</label>
                     <input type="password" class="campo_textoin" name="xclave" > 
                 </div>
                 <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> >
                 <input type="hidden" name="xiclave" value="NO" />
                 <div class="campo_botonin">
                     <button class="boton_form">VERIFICAR</button>
                 </div>
                 <div>
                   Acceso solo para PROPIETARIOS <br />
                   Si desea realizar alguna consulta comunicarse con: 959956000 <br />
                   Este formulario SI, es SEGURO. Gracias <br />
                   <br />
                 </div>         
           </form>
       </div>
     <!-- </div>  -->
     <?
  } else {  // iclave = YA infresó su clave

     $result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
     $total=mysqli_num_rows($result);
     $tabla = mysqli_fetch_array( $result );
     $email_aso=$tabla['email_aso'];
     $pass_aso=$tabla['pass_aso'];
     if ($email_aso==$xemail AND  $pass_aso==$xclave) { ?>

      <!-- </div>  -->
      
            <form id="form0" name="form0" method="post" onsubmit="return checkSubmit();" action="formingre3_view.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
               <input type="hidden" name="xcod" value=<? echo $cod_aso; ?> >
               <div class="campo_botonin">
                  <button class="boton_form"> ¡ CONTINUAR ! (Mi Perfil)</button>
               </div>
           </form>
  </div>
  
   <? } else { ?>
    <table width="363" border="0">
      <tr bgcolor="#F8DA94">
        <th scope="col"><div align="center"><a href="buscar_pormizona.php">CUIDADO !! Tenemos su IP !! - NO ESTA REGISTRADO</a></div>
       </th>
     </tr>
   </table> <?
     } 
  }
}?>
</body>
</html>
