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


$pais_aso=$_POST['xpais'];
$rsocial_aso=$_POST['xrsocial'];
$direccion_aso=$_POST['xdireccion'];
$distrito_aso=$_POST['xdistrito'];
$provincia_aso=$_POST['xprovincia'];
$departamento_aso=$_POST['xdepartamento'];
//$departamento_aso="08";

$referencia_aso=$_POST['xreferencia'];
$gironeg_aso=$_POST['xgironeg'];
$telf1_aso=$_POST['xtelf1'];
$telf2_aso=$_POST['xtelf2'];
$usua_aso=$_POST['xusuario'];
$pass_aso=$_POST['xpass'];
$email_aso=$_POST['xemail'];
$categoria_aso=$_POST['xcategoria'];
if ($categoria_aso=="CATEGORIA") {
	$categoria_aso="";
}
$productos_aso=$_POST['xproductos'];
$latitud_aso=$_POST['xlatitud'];
$longitud_aso=$_POST['xlongitud'];	
$date_aso=date("Y/m/d");	
$datehoy_aso=date("Y/m/d");
$favicon_aso=$_POST['xfavicon'];	   
$publicidad_aso="N";	

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
$obsinterno_aso="";
   






/*$fecnac_alu=$_POST['xfecnac'];
$xdia=$_POST['xdia'];
$xmes=$_POST['xmes'];
$xano=$_POST['xano'];
$fecnac_alu=$xano."-".$xmes."-".$xdia;
$taller_alu="";*/



//$xformulario=$_POST['xformulario']; // si es "S"= Viene de Formulario de matrículas (solo en cambios de año) si es " " es de ingreso normal
/*	
$result0=mysqli_query($connec,"select * from n_sistema  where id=1"); //**********+CONSULTA SISTEMA **********
$tabla0 = mysqli_fetch_array( $result0 );
$cpensii_sis=$tabla0["cpensii_sis"];
$cpensip_sis=$tabla0["cpensip_sis"];
$cpensis_sis=$tabla0["cpensis_sis"];
$perprovi_alu=$tabla0["ano_matri_sis"];	 //********** FFFFFIIIIINNNNNN  CONSULTA SISTEMA **********
if (substr($grado_alu,0,1)=="I"){
 $cmatri_alu=$cpensii_sis;
 $cpensi_alu=$cpensii_sis;	
}elseif (substr($grado_alu,0,1)=="P")  {
 $cmatri_alu=$cpensip_sis;
 $cpensi_alu=$cpensip_sis;
}elseif (substr($grado_alu,0,1)=="S")  {
 $cmatri_alu=$cpensis_sis;
 $cpensi_alu=$cpensis_sis;
}
$periodo_alu="";  

$cta_nombre_alu = quitar_tildes($nombre_alu);
$cta_apellido_alu = quitar_tildes($apellido_alu);
//echo ("S/Tildes nom: ".$cta_nombre_alu . "<br>");
//echo ("S/Tildes ape: ".$cta_apellido_alu . "<br>");*/

/*$ctasuite_alu=substr($cta_nombre_alu,0,3).".".substr($cta_apellido_alu,0,strpos($cta_apellido_alu," ")).substr($cta_apellido_alu,strpos($cta_apellido_alu," ")+1,1)."@colegiopanamericano.edu.pe";
$ctacaja_alu=""; */

$rs = mysqli_query($connec, "SELECT MAX(id) AS id FROM asociado_51");
if ($row = mysqli_fetch_row($rs)) {
    $idid = trim($row[0]);
}
$cod_aso=substr($idid+10000001,-7);	
echo "codigo : ".$cod_aso."<br>";
/*$cod_p_pass=substr($idid+10001,-4);
$cod_pass_1=substr($cod_p_pass,0,2);
$cod_pass_2=substr($apellido_alu,0,1);
$cod_pass_3=substr($nombre_alu,0,1);
$cod_pass_4=substr($cod_p_pass,-2);
$password_alu=$cod_pass_1.$cod_pass_2.$cod_pass_3.$cod_pass_4."00"; */
	
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
   <? 
    // Redirección automática a la siguiente página
     header("Location: formingre2.php?xcod=$cod_aso");
	 exit(); // Asegúrate de llamar a exit después de la redirección
    
 } ?>
  </tr>
</table>


</body>
</html>