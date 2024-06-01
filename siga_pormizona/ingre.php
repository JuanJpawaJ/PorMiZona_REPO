<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Su ingreso</title>
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
<? 
$id_aso = $_GET['xid'];

//echo (" en ingre el idddddd ".$id_aso."<br>");
//echo " en ingre el idddddd ".$id_aso."<br>";
//echo " en ingre el idddddd ".$id_aso."<br>";
//echo " en ingre el idddddd ".$id_aso."<br>";

?>
<div class="exteriorform">
  <div class="fondo_formulario">
      <div class="cabecera1">
        <img src="imagenes/cabecera_formulario.jpg"  class="iconos">
      </div>
   <form id="form1" name="form1" method="post" onsubmit="return checkSubmit();" action="formingre3_view.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
           <h2 class="semi-titulosform">INGRESE USUARIO Y CLAVE</h2>
      <div class="campos_de_formularioin">
              <label>Usuario</label>
              <input type="text" class="campo_textoin" name="xusuario"  > 
           </div>
           <!--  <h2 class="semi-titulos">UBICACIÓN</h2> -->
      <div class="campos_de_formularioin">
              <label>Clave</label>
              <input type="password" class="campo_textoin" name="xclave" > 
           </div>

           <input type="hidden" name="xid" value=<? echo $id_aso; ?> >
           
           
           <div class="campo_botonin">
              <button class="boton_form">INGRESAR</button>
           </div>
   <div>
  Si dese realizar alguna consulta comunicarse con:
Consulta: 959956000 Solo para propietarios.

Este formulario SI, es SEGURO. Gracias
 </div>
          
    </form>
  </div>
</div>


</body>
</html>
