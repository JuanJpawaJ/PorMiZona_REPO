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


$codevento_mev=$_POST['xcodevento'];
$nomevento_mev=$_POST['xnomevento'];
$descri_mev=$_POST['xdescri'];
$finicio_mev=$_POST['xfinicio'];
$c_ingreso_mev=$_POST['xc_ingreso'];
$anunciante_mev=$_POST['xanunciante'];
$telf_mev=$_POST['xtelf'];
$email_mev=$_POST['xemail'];
$img_mev=$_POST['ximg'];
$view01_mev=$_POST['xview01'];
$view02_mev=$_POST['xview02'];
$mspublico_mev=$_POST['xmspublico'];
$obsinterno_mev=$_POST['xobsinterno'];
$latitud_mev=$_POST['xlatitud'];
$longitud_mev=$_POST['xlongitud'];
$fhoy_mev=date('Y-m-d');




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

$rs = mysqli_query($connec, "SELECT MAX(id) AS id FROM mievento_51");
if ($row = mysqli_fetch_row($rs)) {
    $idid = trim($row[0]);
}
$codigo_mev=substr($idid+1000001,-6);	
echo "codigo : ".$codigo_mev."<br>";
echo "codigo2 : ".$codigo_mev."<br>";

echo "codigo3 : ".$codigo_mev."<br>";

/*$cod_p_pass=substr($idid+10001,-4);
$cod_pass_1=substr($cod_p_pass,0,2);
$cod_pass_2=substr($apellido_alu,0,1);
$cod_pass_3=substr($nombre_alu,0,1);
$cod_pass_4=substr($cod_p_pass,-2);
$password_alu=$cod_pass_1.$cod_pass_2.$cod_pass_3.$cod_pass_4."00"; */
	
//$result_bqd=mysqli_query($connec,"select * from mievento_51 where email_mev='$email_mev'");
//$total_bqd=mysqli_num_rows($result_bqd);
//$tabla_bqd = mysqli_fetch_array( $result_bqd );
//if ($total_bqd>0) {
//	$idid=$tabla_bqd["id"];
//}
	
//if(strlen($rsocial_aso)==0 OR strlen($documento_aso)==0  OR strlen($email_aso)==0 OR $total_bqd>0) {
if(strlen($nomevento_mev)==0 OR strlen($descri_mev)==0 ) {
   echo "Nombre evento :".$nomevento_mev."<br>";
   echo "Descripción   :".$descri_mev."<br>";
   echo "** ¡¡¡ CUIDADO: NO, SE HA GUARDADO ESTE REGISTRO !!! - Probablemente No ha ingresado algún dato.. **"."<BR>";
   echo "** o  NO HAY DATOS - VERIFIQUE **";
}else{
	$result_nom=mysqli_query($connec,"select * from mievento_51 where (nomevento_mev='$nomevento_mev') AND (anunciante_mev='$anunciante_mev')");
	$total_nom=mysqli_num_rows($result_nom);
    if 	($total_nom==0) {  // VUENE DE FORMULARIO Y NO HAY DUPLICIDAD *****************+
       	$sql="INSERT INTO mievento_51 (codigo_mev,	codevento_mev,	nomevento_mev,	descri_mev,	finicio_mev,	c_ingreso_mev,	anunciante_mev,	telf_mev,	email_mev,	img_mev,	view01_mev,	view02_mev,	msjpublico_mev,	obsinterno_mev,	latitud_mev,	longitud_mev,	fhoy_mev) VALUES ('$codigo_mev',	'$codevento_mev',	'$nomevento_mev',	'$descri_mev',	'$finicio_mev',	'$c_ingreso_mev',	'$anunciante_mev',	'$telf_mev',	'$email_mev',	'$img_mev',	'$view01_mev',	'$view02_mev',	'$msjpublico_mev',	'$obsinterno_mev',	'$latitud_mev',	'$longitud_mev',	'$fhoy_mev')";
	

   		$result=mysqli_query($connec,$sql);
   		if($result)  {
			$retorna="OK";
      		echo ("<span style='background-color: #006600'>Ok. ---DATOS -- Ok.</span>");
   		}else{
			$retorna="ERROR";
	  		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   		}
		


	$rs = mysqli_query($connec, "SELECT MAX(id) AS id FROM mievento_51");
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
    <th scope="col" class="semi-titulosform"><div align="center"><a href="a_lis_mievento.php?xcod=<?php  echo($cod_aso); ?>">CONTINUAR CON EL PASO 3</a></div></th>
<? } ?>
  </tr>
</table>


</body>
</html>