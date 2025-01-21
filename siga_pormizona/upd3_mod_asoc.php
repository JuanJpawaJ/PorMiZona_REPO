<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modifica Asociado1</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


$form=$_POST['xform'];
$cod=$_POST['xcod'];
$datehoy_aso=date("Y/m/d");

if      ($form=="TODO01") {
    $rsocial_aso=$_POST['xrsocial'];
    $direccion_aso=$_POST['xdireccion'];
    $categoria_aso=$_POST['xcategoria'];
	$gironeg_aso=$_POST['xgironeg'];
    $departamento_aso=$_POST['xdepartamento'];
    $email_aso=$_POST['xemail'];
    $pass_aso=$_POST['xpass'];


    //$pais_aso=$_POST['xpais'];
    $provincia_aso=$_POST['xprovincia'];
    $distrito_aso=$_POST['xdistrito'];
    $referencia_aso=$_POST['xreferencia'];
    $telf1_aso=$_POST['xtelf1'];
    $telf2_aso=$_POST['xtelf2'];
    $productos_aso=$_POST['xproductos'];

	
    $sql="UPDATE asociado_51 SET rsocial_aso='$rsocial_aso', direccion_aso='$direccion_aso', categoria_aso='$categoria_aso', email_aso='$email_aso',pass_aso='$pass_aso', departamento_aso='$departamento_aso', provincia_aso='$provincia_aso',distrito_aso='$distrito_aso', referencia_aso='$referencia_aso', gironeg_aso='$gironeg_aso', telf1_aso='$telf1_aso', telf2_aso='$telf2_aso', productos_aso='$productos_aso', datehoy_aso='$datehoy_aso'  WHERE cod_aso=$cod";
    $result=mysqli_query($connec,$sql);
	if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok TODO.</span>");
	}else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  TODO.</span>");
	}	

} elseif ($form=="TODO02") {	
    $favicon_aso=$_POST['xfavicon'];	   
    $grupolista_aso=$_POST['xgrupolista'];
    $publicidad_aso=$_POST['xpublicidad'];
    $img1_aso=$_POST['ximg1'];
    $img2_aso=$_POST['ximg2'];
    $logo_aso=$_POST['xlogo'];
    $view01_aso=$_POST['xview1'];
    $view02_aso=$_POST['xview2'];
    $view03_aso=$_POST['xview3'];
    $view04_aso=$_POST['xview4'];
    $link01_aso=$_POST['xlink1'];
    $link02_aso=$_POST['xlink2'];
    $msjpublico_aso=$_POST['xmsjpublico'];
    $usua_aso=$_POST['xusuario'];
    $obsinterno_aso=$_POST['xobsinterno'];
    $grupolista_aso=$_POST['xgrupolista'];
    $msjpublico_aso=$_POST['xmsjpublico'];

// echo "COD_ASO: ".$cod;
// echo "DATEHOY_ASO: ".$datehoy_aso;

//     echo "favicon_aso: ".$favicon_aso."<br>";	   
//     echo "grupolista_aso: ".$grupolista_aso."<br>";
//     echo "publicidad_aso: ".$publicidad_aso."<br>";
//     echo "img1_aso: ".$img1_aso."<br>";
//     echo "img2_aso: ".$img2_aso."<br>";
//     echo "logo_aso: ".$logo_aso."<br>";
//     echo "view01_aso: ".$view01_aso."<br>";
//     echo "view02_aso: ".$view02_aso."<br>";
//     echo "view03_aso: ".$view03_aso."<br>";
//     echo "view04_aso: ".$view04_aso."<br>";
//     echo "link01_aso: ".$link01_aso."<br>";
//     echo "link02_aso: ".$link02_aso."<br>";
//     echo "msjpublico_aso: ".$msjpublico_aso."<br>";
//     echo "obsinterno_aso: ".$obsinterno_aso."<br>";

// echo "VOY A SQL UPDATE";

// sleep(6);
	
    $sql="UPDATE asociado_51 SET favicon_aso='$favicon_aso', grupolista_aso='$grupolista_aso', 	 publicidad_aso='$publicidad_aso', img1_aso='$img1_aso', img2_aso='$img2_aso', logo_aso='$logo_aso', view01_aso='$view01_aso', view02_aso='$view02_aso', view03_aso='$view03_aso', view04_aso='$view04_aso', link01_aso='$link01_aso', link02_aso='$link02_aso', msjpublico_aso='$msjpublico_aso', usua_aso='$usua_aso', obsinterno_aso='$obsinterno_aso', datehoy_aso='$datehoy_aso'  WHERE cod_aso=$cod";
    $result=mysqli_query($connec,$sql);
	if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok TODO.</span>");
	}else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  TODO 02.</span>");
	}	

} elseif ($form=="00") {
   $latitud_aso=$_POST['xlatitud'];
   $longitud_aso=$_POST['xlongitud'];	
   
   echo ("form :").$form;
   echo ("cod :").$cod;
   echo ("lati :").$latitud_aso;
   echo ("long :").$longitud_aso;
   
   $sql="UPDATE asociado_51 SET latitud_aso='$latitud_aso',longitud_aso='$longitud_aso, datehoy_aso='$datehoy_aso'' WHERE cod_aso=$cod";
   $result=mysqli_query($connec,$sql);
   if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
   }else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   }	

	
} elseif ($form=="01") {
    $rsocial_aso=$_POST['xrsocial'];
    $direccion_aso=$_POST['xdireccion'];
    $departamento_aso=$_POST['xdepartamento'];
	$gironeg_aso=$_POST['xgironeg'];
    $email_aso=$_POST['xemail'];
    $pass_aso=$_POST['xpass'];

    $sql="UPDATE asociado_51 SET rsocial_aso='$rsocial_aso',direccion_aso='$direccion_aso', departamento_aso='$departamento_aso', gironeg_aso='$gironeg_aso',email_aso='$email_aso', pass_aso='$pass_aso', datehoy_aso='$datehoy_aso' WHERE cod_aso=$cod";
    $result=mysqli_query($connec,$sql);
	if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
	}else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
	}	

	
} elseif ($form=="02") {
    $provincia_aso=$_POST['xprovincia'];
    $distrito_aso=$_POST['xdistrito'];
    $referencia_aso=$_POST['xreferencia'];
    $telf1_aso=$_POST['xtelf1'];
    $telf2_aso=$_POST['xtelf2'];
    $productos_aso=$_POST['xproductos'];

    $grupolista_aso=$_POST['xgrupolista'];
    $msjpublico_aso=$_POST['xmsjpublico'];
	
	
	
	
    $sql="UPDATE asociado_51 SET 
provincia_aso='$provincia_aso',distrito_aso='$distrito_aso',referencia_aso='$referencia_aso', telf1_aso='$telf1_aso', telf2_aso='$telf2_aso', productos_aso='$productos_aso', datehoy_aso='$datehoy_aso', grupolista_aso='$grupolista_aso', msjpublico_aso='$msjpublico_aso'   WHERE cod_aso=$cod";
    $result=mysqli_query($connec,$sql);
	if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
	}else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
	}	


} elseif ($form=="03") {    // PARECE QUE NO ES USADO POR NINGUNA OPCION
    $favicon_aso=$_POST['xfavicon'];	   
    $grupolista_aso=$_POST['xgrupolista'];

    $publicidad_aso=$_POST['xpublicidad'];
    $img1_aso=$_POST['ximg1'];
    $img2_aso=$_POST['ximg2'];
    $logo_aso=$_POST['xlogo'];
    $view01_aso=$_POST['xview1'];
    $view02_aso=$_POST['xview2'];
    $view03_aso=$_POST['xview3'];
    $view04_aso=$_POST['xview4'];
    $msjpublico_aso=$_POST['xmsjpublico'];
    $obsinterno_aso=$_POST['xobsinterno'];
    $sql="UPDATE asociado_51 SET favicon_aso='$favicon_aso', grupolista_aso='$grupolista_aso',  publicidad_aso='$publicidad_aso', img1_aso='$img1_aso', img2_aso='$img2_aso', logo_aso='$logo_aso', view01_aso='$view01_aso', view02_aso='$view02_aso', view03_aso='$view03_aso', view04_aso='$view04_aso', msjpublico_aso='$msjpublico_aso', 
obsinterno_aso='$obsinterno_aso, datehoy_aso='$datehoy_aso'  WHERE cod_aso=$cod";
		
}



	
//if(strlen($rsocial_aso)==0 OR strlen($documento_aso)==0  OR strlen($email_aso)==0 OR $total_bqd>0) {
mysqli_close($connec);
?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
<? if ($retorna=="ERROR") {  ?>
    <th scope="col"><div align="center"><a href="viewasociado.php?xcod=<?php  echo($cod); ?>">ERROR RETORNAR</a></div></th>
<? } else { ?>
    <th scope="col" class="semi-titulosform"><div align="center"><a href="viewasociado.php?xcod=<?php  echo($cod); ?>">SUS DATOS SE REGISTRARON </a></div></th>
<? } ?>
  </tr>
</table>


</body>
</html>