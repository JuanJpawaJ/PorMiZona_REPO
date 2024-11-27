<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserta Alumno</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso=$_POST['xcod'];
$distrito_aso=$_POST['xdistrito'];
$provincia_aso=$_POST['xprovincia'];
$referencia_aso=$_POST['xreferencia'];
$telf1_aso=$_POST['xtelf1'];
$telf2_aso=$_POST['xtelf2'];
$productos_aso=$_POST['xproductos'];
$longitud=$_POST['longitud'];
$latitud=$_POST['latitud'];
$rsocial_aso=$_POST['xrsocial'];


//$favicon_aso=$_POST['xfavicon'];
//$favicon_aso="xxx";


// echo "pais :".$pais_aso."<br>";
// echo "rsoc :".$rsocial_aso."<br>";
// echo "dire :".$direccion_aso."<br>";
// echo "dist :".$distrito_aso."<br>";
// echo "prov :".$provincia_aso."<br>";
// echo "esta :".$estado_aso."<br>";
// echo "refe :".$referencia_aso."<br>";
// echo "tel1 :".$telf1_aso."<br>";
// echo "tel2 :".$telf2_aso."<br>";
// echo "pass :".$pass_aso."<br>";
// echo "emai :".$email_aso."<br>";
// echo "cate :".$categoria_aso."<br>";
// echo "pod  :".$productos_aso."<br>";
// echo "lati :".$latitud."<br>";
// echo "long :".$longitud."<br>";
// echo "texto :".$rsocial_aso."<br>";
// echo "favi :".$favicon_aso."<br>";
// echo "publi :".$publicidad_aso."<br>";



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

	
//if(strlen($rsocial_aso)==0 OR strlen($documento_aso)==0  OR strlen($email_aso)==0 OR $total_bqd>0) {
if(strlen($productos_aso)==0 OR strlen($telf1_aso)==0 ) {
   echo "Productos :".$rsocial_aso."<br>";
   echo "Telf1     :".$telf1_aso."<br>";
   echo "** ¡¡¡ CUIDADO: NO, SE HA GUARDADO ESTE REGISTRO !!! - Probablemente No ha ingresado algún dato.. **"."<BR>";
   echo "** o  NO HAY DATOS - VERIFIQUE **";
}else{

  $sql="UPDATE asociado_51 SET distrito_aso='$distrito_aso',provincia_aso='$provincia_aso', referencia_aso='$referencia_aso',telf1_aso='$telf1_aso',telf2_aso='$telf2_aso', productos_aso='$productos_aso' WHERE cod_aso='$cod_aso'";
		
   		$result=mysqli_query($connec,$sql);
   		if($result)  {
      		echo ("<span style='background-color: #006600'>Ok. ---DATOS -- Ok.</span>");
   		}else{
	  		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   		}
}
mysqli_close($connec);
?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
<? if ($xformulario=="S") { // si es formulario retorna a view formulario ?>
    <th scope="col"><div align="center"><a href="../matriculas/view_xfxoxrxmxuxlxaxrxixo.php?id=<?php  echo($idid); ?>">RETORNAR</a></div></th>
<? } else { ?>
    <th scope="col" class="semi-titulosform"><div align="center"><a href="buscar_pormizona.php?longitud=<?php  echo($longitud); ?>&latitud=<?php  echo($latitud); ?>&texto=<?php  echo($rsocial_aso); ?>">RETORNAR</a></div></th>
<? } ?>
  </tr>
</table>


</body>
</html>