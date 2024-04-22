<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$xmod=$_GET['xmod'];
$id = $_GET['idx'];
$idx= $_GET['idx'];
$retornar_ax="a_viewmodi_espacios.php";

//$xview=$_GET['xview'];   // ADMIN  o xxxxxx
// tipo de formulario 1 o 2
echo ("XMOD: ".$xmod."<BR>");


if ($xmod=="P") {   // CARACTERISTICAS  11111 admin
$p1=$_GET['xp1'];
$pp1=$_GET['xpp1'];
$p2=$_GET['xp2'];
$pp2=$_GET['xpp2'];
$p3=$_GET['xp3'];
$pp3=$_GET['xpp3'];
$p4=$_GET['xp4'];
$pp4=$_GET['xpp4'];
$p5=$_GET['xp5'];
$pp5=$_GET['xpp5'];
	
    $sql="UPDATE a_espa_catalogo SET p1_ctg='$p1',pp1_ctg='$pp1',p2_ctg='$p2',pp2_ctg='$pp2',p3_ctg='$p3',pp3_ctg='$pp3',p4_ctg='$p4',pp4_ctg='$pp4',p5_ctg='$p5',pp5_ctg='$pp5' WHERE id=$id";
    $result=mysqli_query($connec,$sql);
	if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
	}else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
	}	
}elseif ($xmod=="T"){    // COSTOS,PRECIOS 22222
$t1=$_GET['xt1'];
$pt1=$_GET['xpt1'];
$t2=$_GET['xt2'];
$pt2=$_GET['xpt2'];
$t3=$_GET['xt3'];
$pt3=$_GET['xpt3'];
$t4=$_GET['xt4'];
$pt4=$_GET['xpt4'];
$t5=$_GET['xt5'];
$pt5=$_GET['xpt5'];

	$sql="UPDATE a_espa_catalogo SET t1_ctg='$t1',pt1_ctg='$pt1',t2_ctg='$t2',pt2_ctg='$pt2',t3_ctg='$t3',pt3_ctg='$pt3',t4_ctg='$t4',pt4_ctg='$pt4',t5_ctg='$t5',pt5_ctg='$pt5' WHERE id=$id";

	$result2=mysqli_query($connec,$sql);
	if($result2){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}

}elseif ($xmod=="C"){    // PRECIO DE VENTA 01 Y 02
$c1=$_GET['xc1'];
$pc1=$_GET['xpc1'];
$c2=$_GET['xc2'];
$pc2=$_GET['xpc2'];
$c3=$_GET['xc3'];
$pc3=$_GET['xpc3'];
$c4=$_GET['xc4'];
$pc4=$_GET['xpc4'];
$c5=$_GET['xc5'];
$pc5=$_GET['xpc5'];
$c6=$_GET['xc6'];
$pc6=$_GET['xpc6'];
$c7=$_GET['xc7'];
$pc7=$_GET['xpc7'];
$c8=$_GET['xc8'];
$pc8=$_GET['xpc8'];
$c9=$_GET['xc9'];
$pc9=$_GET['xpc9'];
$c10=$_GET['xc10'];
$pc10=$_GET['xpc10'];

	
	$sql="UPDATE a_espa_catalogo SET c1_ctg='$c1',pc1_ctg='$pc1',c2_ctg='$c2',pc2_ctg='$pc2',c3_ctg='$c3',pc3_ctg='$pc3',c4_ctg='$c4',pc4_ctg='$pc4',c5_ctg='$c5',pc5_ctg='$pc5',	c6_ctg='$c6',pc6_ctg='$pc6',c7_ctg='$c7',pc7_ctg='$pc7',c8_ctg='$c8',pc8_ctg='$pc8',c9_ctg='$c9',pc9_ctg='$pc9',c10_ctg='$c10',pc10_ctg='$pc10' WHERE id=$id";

	
	$result3=mysqli_query($connec,$sql);
	if($result3){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}

}elseif ($xmod=="A"){    // AADMINISTRACION
$ciudad=$_GET['xciudad'];
$zona=$_GET['xzona'];
$nrocatalogo=$_GET['xnrocatalogo'];
$codcatalogo=$_GET['xcodcatalogo'];
$namezona=$_GET['xnamezona'];
$campana=$_GET['xcampana'];
$fechaini=$_GET['xfechaini'];
$fechafin=$_GET['xfechafin'];
$obs1=$_GET['xobs1'];
$obs2=$_GET['xobs2'];
$view01=$_GET['xview01'];
$msjpublico=$_GET['xmsjpublico'];

	$sql="UPDATE a_espa_catalogo SET ciudad_ctg='$ciudad',zona_ctg='$zona',nrocatalogo_ctg='$nrocatalogo',codcatalogo_ctg='$codcatalogo', namezona_ctg='$namezona',campana_ctg='$campana',fechaini_ctg='$fechaini',fechafin_ctg='$fechafin',obs1_ctg='$obs1',obs2_ctg='$obs2',view01_ctg='$view01',msjpublico_ctg='$msjpublico' WHERE id=$id";

	$result4=mysqli_query($connec,$sql);
	if($result4){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}

}
 

?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="a_viewmodi_espacios.php?idx=<?php  echo($idx); ?>&xview=<?php  echo("ADMIN"); ?>&xareg=NNOOO&xmodi=NOOOOO&xdelreg=NOOOOO">RETORNAR</a></div>
    
    </th>
  </tr>
</table>

