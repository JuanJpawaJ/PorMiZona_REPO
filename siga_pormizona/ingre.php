<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Su ingreso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
<!--    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="fuentes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos-footer.css">
    <link rel="icon" href="imagenes/dencuentro.ico" /> 
-->
</head>

<body>
<? 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$id_aso = $_GET['xid'];
$iclave= $_GET['xiclave'];

$xusuario= $_GET['xusuario'];
$xclave= $_GET['xclave'];

echo (" en ingre el id_aso ".$id_aso."<br>");
echo (" en ingre el iclave ".$iclave."<br>");

echo (" en ingre el xusuario ".$xusuario."<br>");
echo (" en ingre el xclave ".$xclave."<br>");


if ($iclave=="SI") { ?>


<div class="exteriorform">
  <div class="fondo_formulario">
      <div class="cabecera1">
        <img src="imagenes/cabecera_formulario.jpg"  class="iconos">
      </div>
      <form id="form1" name="form1" method="GET" onsubmit="return checkSubmit();" action="ingre.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
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
         <input type="hidden" name="xiclave" value="NO" />
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
<? } else {

$result=mysqli_query($connec,"select * from asociado_51 where id='$id_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

$usua_aso=$tabla['usua_aso'];
$pass_aso=$tabla['pass_aso'];
echo ("tabla usua_aso : ".$usua_aso);
echo ("tabla pass_aso : ".$pass_aso);

if ($usua_aso==$xusuario AND  $pass_aso==$xclave) { ?>
      </div>
      <form id="form0" name="form0" method="post" onsubmit="return checkSubmit();" action="formingre3_view.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
         <input type="hidden" name="xid" value=<? echo $id_aso; ?> >
         <div class="campo_botonin">
              <button class="boton_form"> ¡TENGA CUIDADO AL REALIZAR MODIFICACIONES!</button>
         </div>
    </form>
  </div>

<? } else { ?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="buscar_pormizona.php">CUIDADO !! Tenemos registrado su IP !! - NO ESTA UD. REGISTRADO</a></div>
    </th>
  </tr>
</table>
<?
} 
}?>
</body>
</html>
