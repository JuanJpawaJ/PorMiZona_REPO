<?php

include("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$cod_aso=$_GET['xcod_aso'];






$result=mysqli_query($connec,"select * from asociado_51 where cod_aso='$cod_aso'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );
  
  $xid=$tabla["id"];
$cod_aso=$tabla["cod_aso"];

$pais_aso=$tabla['pais_aso'];
$rsocial_aso=$tabla['rsocial_aso'];
$direccion_aso=$tabla['direccion_aso'];
$distrito_aso=$tabla['distrito_aso'];
$provincia_aso=$tabla['provincia_aso'];
$departamento_aso=$tabla['departamento_aso'];

    $resultaso=mysqli_query($connec,"SELECT * FROM estado_51   where cod_est='$departamento_aso'");
	$tablaaso =mysqli_fetch_array( $resultaso );
	$departamentotxt_aso=$tablaaso["estado_est"];


$referencia_aso=$tabla['referencia_aso'];
$gironeg_aso=$tabla["gironeg_aso"];
$telf1_aso=$tabla['telf1_aso'];
$telf2_aso=$tabla['telf2_aso'];
$email_aso=$tabla['email_aso'];
$categoria_aso=$tabla['categoria_aso'];
$productos_aso=$tabla['productos_aso'];
$latitud_aso=$tabla['latitud_aso'];
$longitud_aso=$tabla['longitud_aso'];	
$favicon_aso=$tabla["favicon_aso"];
 if(strlen($favicon_aso)==0) {
	$favicon_aso="f_pmz_bl.png";
 }
$date_aso=$tabla["date_aso"];	
$publicidad_aso=$tabla["publicidad_aso"];	
$grupolista_aso=$tabla["grupolista_aso"];
$img1_aso=$tabla["img1_aso"];
$img2_aso=$tabla["img2_aso"];
$logo_aso=$tabla["logo_aso"];
$view01_aso=$tabla["view01_aso"];
$view02_aso=$tabla["view02_aso"];
$view03_aso=$tabla["view03_aso"];
$view04_aso=$tabla["view04_aso"]; // cabecera S - N
$link01_aso=$tabla["link01_aso"];
$link02_aso=$tabla["link02_aso"];
$msjpublico_aso=$tabla["msjpublico_aso"];
$obsinterno_aso=$tabla["obsinterno_aso"];




$id = $_GET['idx'];

$result = mysqli_query($connec, "select * from catalogo_productos where id=$id");
$tabla = mysqli_fetch_array($result);

$idmodi = $tabla["id"];
$codigo_it = $tabla["codigo_it"];
$codfabrica_it = $tabla["codfabrica_it"];
$producto_it = $tabla["producto_it"];


$id = $tabla["id"];
$codigo_it = $tabla["codigo_it"];
$codfabrica_it = $tabla["codfabrica_it"];
$img_it = $tabla["img_it"];
$grupolista_it = $tabla["grupolista_it"];
$producto_it = $tabla["producto_it"];
$marka_it = $tabla["marka_it"];
$fabricante_it = $tabla["fabricante_it"];
$precom_it = $tabla["precom_it"];
$pv01_it = $tabla["pv01_it"];
$pv02_it = $tabla["pv02_it"];
$pv03_it = $tabla["pv03_it"];
$view01_it = $tabla["view01_it"];

$msjpublico_it = $tabla["msjpublico_it"];
$vinculo1_it = $tabla["vinculo1_it"];
$vinculo2_it = $tabla["vicnulo2_it"];
$simbolo_mone = "S/  ";


if (strlen($img_it) == 0) {
  $img_it = "no_disponible.jpg";
}

?>


<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../assets/css/estilos_generales.css">
  <link rel="stylesheet" href="../assets/css/estilos_productos.css">
  <title>
    <?php echo ($producto_it); ?>
  </title>
  <link rel="icon" href="../assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head>

<body>
  <?php
  $agregado_en_cab = "../";
  include '../widgets/catalogo_navegador.php';
  ?>


  <div class="container_t">
    <div class="contenedor_imagen_m">
      <div class="img">
        <img src="<? echo "img_catacli/" . $img_it ?>" alt="">
      </div>
      <p>La imagen es referencial*</p>
    </div>
    <div class="separador"></div>
    <p class="marca">
      <?php echo ($marka_it); ?>
    </p>
    <h1>
      <?php echo ($producto_it); ?>
    </h1>
    <p class="descripcion">
      <?php echo ($msjpublico_it); ?>
    </p>

    <?php if (strlen($codigo_it) <> 0) { ?>
      <p class="codigo">CODIGO:
        <?php echo ($codigo_it); ?>
      </p>
    <?php } ?>

    <?php if ($pv03_it > 0) { ?>

      <div class="cont_precio">
        <div class="oferta">
          <p class="texto_oferta">OFERTA</p>
          <p class="precio_actual">
            <?php echo ($simbolo_mone . money_format('%n', ($pv03_it))) ?>
          </p>
        </div>
        <p class="antes">Antes <span><?php echo ($simbolo_mone . money_format('%n', ($pv01_it))) ?></span></p>
      </div>
      
      <?php } else { ?>

      <div class="cont_precio">
        <div class="oferta">
          <p class="precio_actual">
            <?php echo ($simbolo_mone . money_format('%n', ($pv01_it))) ?>
          </p>
        </div>
      </div>

      <?php }?>

      <?php $precio = ($pv03_it > 0) ? $pv03_it : $pv01_it;?>
<div class="cont_botones_producto">
<?php
 if(strlen($vinculo1_it)<>0) { ?>
  <a href="<?php echo $vinculo1_it; ?>" target="_blank" class="boton_comprar">
  <p>+ Datos / Ficha Técnica</p>
  <img src="../assets/img/imagenes_index/icono_enlace_blanco.png" alt="">
</a>      
<?php } ?>


      <a href="https://wa.me/<? echo '51'.$telf1_aso ?>?text=Hola%20deseo%20información%20de:%20<?php echo ($producto_it); ?>" target="_blank" class="boton_comprar">
        <p>Deseo información - Whatsapp</p>
        <img src="../assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
      </a>
</div>
  </div>




  <?php
  
  
  $agregado_en = "../";
  include '../widgets/catalogo_footer.php';
  ?>


</body>

</html>