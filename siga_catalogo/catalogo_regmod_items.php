<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$xview=$_GET['xview'];   // ADMIN  o xxxxxx
$id = $_GET['idx'];
//$retornar_ax=$_GET['xretornar_ax'];   
$cod_aso=$_GET['xcod'];
$retornar_ax="catalogo_list_items.php";	
$xmod=$_GET['xmod'];  // tipo de formulario 1 o 2
echo ("XMOD: ".$xmod."<BR>");

if ($xmod=="1") {   // CARACTERISTICAS  11111 admin
	$codfabrica = $_GET['xcodfabrica'];
	$producto = $_GET['xproducto'];
	$marka = $_GET['xmarka'];
	$fabricante = $_GET['xfabricante'];
	$msjpub = $_GET['xmsjpub'];
	
    $sql="UPDATE catalogo_productos SET codfabrica_it='$codfabrica',producto_it='$producto',marka_it='$marka',fabricante_it='$fabricante',msjpublico_it='$msjpub' WHERE id=$id";
    $result=mysqli_query($connec,$sql);
	if($result){
		echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
	}else{
		echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
	}	
}elseif ($xmod=="3"){    // COSTOS,PRECIOS 22222
	$precom = $_GET['xprecom'];
	$monelista = $_GET['xmonelista'];
	//$obscompra = $_GET['xobscompra'];
	$sql="UPDATE catalogo_productos SET precom_it='$precom',monelista_it='$monelista' WHERE id=$id";
	$result2=mysqli_query($connec,$sql);
	if($result2){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}

}elseif ($xmod=="4"){    // PRECIO DE VENTA 01 Y 02
	$pv01 = $_GET['xpv01'];
	$pv02 = $_GET['xpv02'];
	$pv03 = $_GET['xpv03'];
	
	$sql="UPDATE catalogo_productos SET pv01_it='$pv01',pv02_it='$pv02',pv03_it='$pv03' WHERE id=$id";
	$result2=mysqli_query($connec,$sql);
	if($result2){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}

}elseif ($xmod=="5"){    // PRECIO DE VENTA 01 Y 02
	$grupolista = $_GET['xgrupolista'];
	
	$sql="UPDATE catalogo_productos SET grupolista_it='$grupolista' WHERE id=$id";
	$result2=mysqli_query($connec,$sql);
	if($result2){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}



}elseif ($xmod=="6"){    // COSTOS,PRECIOS 333333
	//$precom = $_GET['xprecom'];
	$stockmin = $_GET['xstockmin'];
	$lugar_al = $_GET['xlugar_al'];
	$view01 = $_GET['xview01'];
	$view02 = $_GET['xview02'];
	$view03 = $_GET['xview03'];
	$view04 = $_GET['xview04'];
	$time_entrega = $_GET['xtime_entrega'];
	$img = $_GET['ximg'];
	$obscompra = $_GET['xobscompra'];

	$sql="UPDATE catalogo_productos SET stockmin_it='$stockmin',lugar_al_it='$lugar_al',view01_it='$view01', view02_it='$view02', view03_it='$view03', view04_it='$view04', time_entrega_it='$time_entrega', img_it='$img',obscompra_it='$obscompra' WHERE id=$id";
	$result2=mysqli_query($connec,$sql);
	if($result2){
	  echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO 222222  Ok.</span>");
	}else{
	  echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR 2222222  XX.</span>");
	}
}
 

?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="catalogo_edit_items.php?idx=<?php  echo($id); ?>&xview=<?php  echo("ADMIN"); ?>&xcod=<?php  echo ($cod_aso); ?>&xareg=NNOOO&xmodi=NOOOOO&xdelreg=NOOOOO">RETORNAR</a></div>
    
    </th>
  </tr>
</table>

