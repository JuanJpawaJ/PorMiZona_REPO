<!-- http://ProgramarEnPHP.wordpress.com -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>:: Importar documentos al servidor ::</title>
</head>

<body>
   <?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

   
    $cod_aso=$_GET['xcod'];
	$xtip=$_GET['xtip'];
	
	echo "cod aso 000 :".$cod_aso."<br>";

	echo "IMPORTANTE! - Verifique 1.- Que el nombre de su documento no contenga carácteres extraños (# . $ ?)"."<br>";	
	echo "IMPORTANTE! - Verifique 2.- Que el nombre de su documento no tenga más de 60 caracteres"."<br>";	
	echo "Cod aso : ".$cod_aso. "<br>";
	echo "      "."<br>";
	?>
    <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
 
    <form name="importa" method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data" >
        <input type="file" name="documento" />
        <input type="hidden" value="upload" name="action" />
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
        //cargamos el archivo al servidor con el mismo nombre
        //solo le agregue el sufijo bak_ 
        $archivo = $_FILES['documento']['name'];
        $tipo = $_FILES['documento']['type'];
       // $destino ="bak_".$archivo;
	   
        $numero = $cod_aso;  // Número a añadir
        //$destino =$archivo;
        $destino = $numero.pathinfo($archivo, PATHINFO_FILENAME) . "." . pathinfo($archivo, PATHINFO_EXTENSION);
          //echo "ARCHIVO INCIO :".$archivo."<br>";
          //echo "ARCHIVO FINAL :".$destino."<br>";
		
        if (copy($_FILES['documento']['tmp_name'], $destino)){
            echo "Archivo Cargado Con Éxito "."<br>";
			echo "VOY A GUARDAR EN TABLA ASOCIADO IMAGENES "."<br>";
			


			echo "ARCHIVO a guardar : ".$destino."<br>";
			echo "id a    a guardar : ".$id_md."<br>";	
			if ($xtip=="01") {
				$sql="UPDATE asociado_51 SET favicon_aso='$destino'  WHERE cod_aso='$cod_aso'";
			} elseif ($xtip=="02") {
				$sql="UPDATE asociado_51 SET img1_aso='$destino'  WHERE cod_aso='$cod_aso'";
				
			} else {
				$sql="UPDATE asociado_51 SET logo_aso='$destino'  WHERE cod_aso='$cod_aso'";
			
			}
				
			$result=mysqli_query($connec,$sql);
			if($result)  {
				echo ("<span style='background-color: #006600'>Ok. ---DATOS -- Ok.</span>");
			}else{
				echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
			}

        }else{
            echo "Error Al Cargar el Archivo";
        }
       // if (file_exists("bak_" . $archivo)) {
    //    if (file_exists($archivo)) {
            /** Clases necesarias */
            require_once('Classes/PHPExcel.php');
            require_once('Classes/PHPExcel/Reader/Excel2007.php');
            // Cargando la hoja de cálculo
            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load("bak_" . $archivo);
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(0);
            //conectamos con la base de datos 


//*********************************************************************
            //$cn = mysql_connect("localhost", "colegio", "abc123aqp") or die("ERROR EN LA CONEXION");
            //$db = mysql_select_db("colegio_notas", $cn) or die("ERROR AL CONECTAR A LA BD");

            $cn = mysqli_connect("localhost", "dencuent_juan", "zadUeFbfniP") or die("ERROR EN LA CONEXION");
            $db = mysql_select_db("dencuent_dencuentro", $cn) or die("ERROR AL CONECTAR A LA BD");





//************************************************************************
//mysql_query("SET NAMES 'utf8'");
            // Llenamos el arreglo con los datos  del archivo xlsx
			
		
      //  }else {   //si por algo no cargo el archivo bak_ 
        
            echo " Ok ";
      //  }
        $errores = 0;
        //recorremos el arreglo multidimensional 
        //para ir recuperando los datos obtenidos
        //del excel e ir insertandolos en la BD
        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
        unlink($destino);
		?>
		    <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="n_list_regnot.php?secc=<?php echo($seccx) ; ?>&asig=<?php echo($asigx) ; ?>&doce=<?php echo($docex) ; ?>">RETORNAR </a></div></th>
  </tr>
</table>
 <?php
     }
    ?>

</body>
</html>