<!-- http://ProgramarEnPHP.wordpress.com -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>:: Importar documentos con CODIGO** ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../estilos_cat/normalize.css">
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
// echo "IMPORTANTE! - Verifique 1.- Que el nombre de su documento no contenga carácteres extraños (# . $ ?)"."<br>";	
//echo "IMPORTANTE! - Verifique 2.- Que el nombre de su documento no tenga más de 60 caracteres"."<br>";	
echo "      "."<br>"; ?>
<!--============
     <form enctype="multipart/form-data" action="subirjpg.php" method="POST">
         <input name="uploadedfile" type="file" />
         <input type="hidden" name="idx" value=<?php echo($id); ?> />
         <input type="submit" value="Subir archivo" />
         
     <div class="campo_botonin">
                     <button class="boton_form">VERIFICAR</button>
     </div>
         
         
     </form>

============  -->
<form name="importa" method="post" class="campo_textoin" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data" >
     <input type="file" class="campo_textoin" name="documento" />
     <input type="hidden" value="upload" class="campo_textoin" name="action" />
     
     <div class="campo_botonin">
                     <button class="boton_form">VERIFICAR jr</button>
     </div>
      <input type='submit' name='enviar'  value="Importar"  /> 
</form>
<!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->
<?
// Importa de prueba reg_prueba.xlsx (D:Registros) desde la 3ear línea y solo las columnas indicadas.
extract($_POST);
$codigox=$_POST['codigox'];
$qregx=$_POST['qregx'];
echo ($codigox);

if ($action == "upload") {
   $archivo = $_FILES['documento']['name'];
   $tipo = $_FILES['documento']['type'];

   $numero = $cod_aso;  // Número a añadir
   $destino = $numero.pathinfo($archivo, PATHINFO_FILENAME) . "." . pathinfo($archivo, PATHINFO_EXTENSION);

   //echo "IMAGEN INICIO :".$archivo."<br>";
   //echo "IMAGEN FINAL  :".$destino."<br>";
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
   }
?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="../catalogo_list_items_admin.php?xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>">RETORNAR </a></div></th>

  </tr>
</table>
 <?php 
 
//   if (file_exists($archivo)) {
      /** Clases necesarias */
// require_once('Classes/PHPExcel.php');
// require_once('Classes/PHPExcel/Reader/Excel2007.php');
      // Cargando la hoja de cálculo
// $objReader = new PHPExcel_Reader_Excel2007();
// $objPHPExcel = $objReader->load("bak_" . $archivo);
// $objFecha = new PHPExcel_Shared_Date();
      // Asignar hoja de excel activa
// $objPHPExcel->setActiveSheetIndex(0);
      //conectamos con la base de datos 
//      $cn = mysql_connect("localhost", "pawacorp_juan","C?}azwJt^%!d") or die("ERROR EN LA CONEXION");
//      $db = mysql_select_db("pawacorp_siga", $cn) or die("ERROR AL CONECTAR A LA BD");
      //mysql_query("SET NAMES 'utf8'");
      // Llenamos el arreglo con los datos  del archivo xlsx
//   }else {   //si por algo no cargo el archivo bak_ 
      echo " Ok ";
//   }
   $errores = 0;
   //recorremos el arreglo multidimensional 
   //para ir recuperando los datos obtenidos
   //del excel e ir insertandolos en la BD
   //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
   unlink($destino);
     }
    ?>



</body>
</html>