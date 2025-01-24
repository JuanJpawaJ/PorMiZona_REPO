<!-- http://ProgramarEnPHP.wordpress.com -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>:: 21:09 Importar documentos con CODIGO** ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--  <link rel="stylesheet" href="../estilos_cat/normalize.css">
    <link rel="stylesheet" href="../estilos_cat/fuentes.css">
    <link rel="stylesheet" href="../estilos_cat/estilos.css">
    <link rel="stylesheet" href="../estilos_cat/estilos-footer.css">
   <!-- <link rel="icon" href="imagenes/dencuentro.ico" />   -->
</head>

<body>
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


$id_img=$_GET['id_img'];
$cod_aso=$_GET['xcod'];
$usuario=$_GET['xusername'];
$password=$_GET['xpassword']; ?>


     <h2 class="semi-titulosform"> <? echo "IMPORTANTE! - Verifique 1.- Que el nombre de su documento no contenga carácteres extraños (# . $ ?)"; ?></h2>
     <h2 class="semi-titulosform"> <? echo "IMPORTANTE! - Verifique 2.- Que el nombre de su documento no tenga más de 60 caracteres"; ?></h2>

<?
echo "      "."<br>"; ?>

<form name="importa" method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data" >
     <input type="file"  name="documento" />
     <input type="hidden" value="upload" name="action" />
     <input type='submit' name='enviar'  value="Importar"  /> 
</form> 


<!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->
<?

extract($_POST);
$codigox=$_POST['codigox'];
$qregx=$_POST['qregx'];
echo ($codigox);

if ($action == "upload") {
   $archivo = $_FILES['documento']['name'];
   $tipo = $_FILES['documento']['type'];

   $numero = $cod_aso;  // Número a añadir
   $destino = $numero.pathinfo($archivo, PATHINFO_FILENAME) . "." . pathinfo($archivo, PATHINFO_EXTENSION);

   if (copy($_FILES['documento']['tmp_name'], $destino)){
      echo "IMAGEN Cargado Con Éxito "."<br>"."<br>";
      echo "GUARDAR EN : ----- TABLA ITEMS "."<br>";
      echo "ARCHIVO a guardar : ".$destino."<br>";
      echo "id a    a guardar : ".$id_img."<br>";	
	  $sql="UPDATE catalogo_productos SET img_it='$destino'  WHERE id='$id_img'";
	  $result=mysqli_query($connec,$sql);
      if($result) {
		echo("DATOS - IMAGEN - REGISTRADOS -- FIN ");
	  }else{
		echo("ERROR AL REGISTRARSE - POSIBLE...?");
	  }
   }else{
      echo "Error Al Cargar el Archivo";
   } ?>
    <table width="363" border="0">
       <tr bgcolor="#F8DA94">
          <th scope="col"><div align="center"><a href="../catalogo_list_items_admin.php?xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>">RETORNAR 09pm </a></div>  </th> 
      </tr>
    </table>
   <? 
  require_once('Classes/PHPExcel.php');
  require_once('Classes/PHPExcel/Reader/Excel2007.php');
   unlink($destino);
     }
    ?>



</body>
</html>