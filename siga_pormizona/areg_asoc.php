<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserta Asociado1</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


$latitud_aso=$_POST['xlatitud'];
$longitud_aso=$_POST['xlongitud'];	
$rsocial_aso=$_POST['xrsocial'];
$direccion_aso=$_POST['xdireccion'];
$gironeg_aso=$_POST['xgironeg'];
$departamento_aso=$_POST['xdepartamento'];
$email_aso=$_POST['xemail'];
$pass_aso=$_POST['xpass'];
$date_aso=date("Y/m/d");	
$datehoy_aso=date("Y/m/d");
$pais_aso=$_POST['xpais'];

$provincia_aso="";
$distrito_aso="";
$referencia_aso="";
$telf1_aso="";
$telf2_aso="";
$productos_aso="";
$categoria_aso="";
$publicidad_aso="N";
$favicon_aso="";
$grupolista_aso="1";
$img1_aso="";
$img2_aso="";
$logo_aso="";
$view01_aso="";
$view02_aso="";
$view03_aso="";
$view04_aso="";
$link01_aso="";
$link02_aso="";
$msjpublico_aso="";
$usua_aso="";
$obsinterno_aso="";


$rs = mysqli_query($connec, "SELECT MAX(id) AS id FROM asociado_51");
if ($row = mysqli_fetch_row($rs)) {
    $idid = trim($row[0]);
}
$cod_aso=substr($idid+10000001,-7);	
echo "codigo : ".$cod_aso."<br>";
	
$result_bqd=mysqli_query($connec,"select * from asociado_51 where email_aso='$email_aso'");
$total_bqd=mysqli_num_rows($result_bqd);
$tabla_bqd = mysqli_fetch_array( $result_bqd );
if ($total_bqd>0) {
	$idid=$tabla_bqd["id"];
}
	
//if(strlen($rsocial_aso)==0 OR strlen($documento_aso)==0  OR strlen($email_aso)==0 OR $total_bqd>0) {
if(strlen($rsocial_aso)==0 OR strlen($direccion_aso)==0 ) {
   echo "R.Social :".$rsocial_aso."<br>";
   echo "Email    :".$direccion_aso."<br>";
   echo "** ¡¡¡ CUIDADO: NO, SE HA GUARDADO ESTE REGISTRO !!! - Probablemente No ha ingresado algún dato.. **"."<BR>";
   echo "** o  NO HAY DATOS - VERIFIQUE **";
}else{
	$result_nom=mysqli_query($connec,"select * from asociado_51 where (rsocial_aso='$rsocial_aso') AND (direccion_aso='$direccion_aso')");
	$total_nom=mysqli_num_rows($result_nom);
    if 	($total_nom==0) {  // VUENE DE FORMULARIO Y NO HAY DUPLICIDAD *****************+
       	$sql="INSERT INTO asociado_51 (cod_aso,  grupolista_aso, img1_aso, img2_aso, logo_aso, view01_aso, view02_aso, view03_aso, view04_aso, link01_aso, link02_aso, msjpublico_aso, obsinterno_aso, pais_aso,     rsocial_aso,    direccion_aso,    distrito_aso,    provincia_aso,  departamento_aso, referencia_aso, gironeg_aso, telf1_aso, telf2_aso, usua_aso, pass_aso, email_aso, categoria_aso, productos_aso, latitud_aso,   longitud_aso, date_aso, datehoy_aso, favicon_aso, publicidad_aso)  VALUES ('$cod_aso', '$grupolista_aso', '$img1_aso', '$img2_aso', '$logo_aso', '$view01_aso', '$view02_aso', '$view03_aso', '$view04_aso', '$link01_aso', '$link02_aso', '$msjpublico_aso', '$obsinterno_aso', '$pais_aso', '$rsocial_aso', '$direccion_aso', '$distrito_aso', '$provincia_aso',  '$departamento_aso',   '$referencia_aso', '$gironeg_aso', '$telf1_aso',   '$telf2_aso', '$usua_aso', '$pass_aso', '$email_aso', '$categoria_aso', '$productos_aso', '$latitud_aso', '$longitud_aso',   '$date_aso', '$datehoy_aso', '$favicon_aso', '$publicidad_aso')";

   		$result=mysqli_query($connec,$sql);
   		if($result)  {
			$retorna="OK";
      		echo ("<span style='background-color: #006600'>Ok. ---DATOS -- Ok.</span>");
   		}else{
			$retorna="ERROR";
	  		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   		}
		


	$rs = mysqli_query($connec, "SELECT MAX(id) AS id FROM asociado_51");
	if ($row = mysqli_fetch_row($rs)) {
			$idid = trim($row[0]);
	}
   }else{
       echo "ASOCIADO REPETIDO... SI TIENE PROBLEMAS, comuniquese con Cel. 959956000"."<br>";	
   }
}
mysqli_close($connec);
?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
<? if ($retorna=="ERROR") {  ?>
    <th scope="col"><div align="center"><a href="formingre1.php?id=<?php  echo($idid); ?>">ERROR RETORNAR</a></div></th>
<? } else { ?>
    <!--- <th scope="col" class="semi-titulosform"><div align="center"><a href="formingre2.php?xcod=<?php  //echo($cod_aso); ?>">CONTINUAR CON EL PASO 3</a></div></th> -->
    <script type="text/javascript">
       window.location.href = "formingre2.php?xcod=<?php echo $cod_aso; ?>";
    </script>
    
<? } ?>
  </tr>
</table>


</body>
</html>