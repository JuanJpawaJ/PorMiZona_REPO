<!-- http://ProgramarEnPHP.wordpress.com -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>:: Importar documentos con CODIGO** ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Asegúrate de que tus páginas sean responsivas */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .custom-file-input {
            display: block;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
        }

        .custom-submit-button {
            display: block;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50; /* Verde */
            color: white;
            border: none;
            cursor: pointer;
            margin: 10px 0;
        }

        .custom-submit-button:hover {
            background-color: #45a049; /* Verde oscuro */
        }.semi-titulosform{
    font-size:1.3rem;
    margin-bottom:0.3rem;
    color:var(--color-principal);
        }

    .semi-titsubir {
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
        font-size: 24px; /* Puedes ajustar este tamaño según tus preferencias */
        color:  #03C; /* Puedes ajustar el color según tus preferencias */
    }
    h1.semi-titsubir {
        font-size: 24px; /* Tamaño específico para los <h1> */
    }
    h2.semi-titsubir{
        font-size: 12px; /* Tamaño específico para los <h2> */
    }
		
    </style>
</head>

<body>



<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

	$xtip=$_GET['xtip'];


$id_img = $_GET['id_img'];
$cod_aso = $_GET['xcod'];
$usuario = $_GET['xusername'];
$password = $_GET['xpassword'];
?>

<h1 class="semi-titsubir"> <?php echo "SUBIR IMÁGENES A MIS PRODUCTOS"; ?></h1>

<h2 class="semi-titsubir"> <?php echo "IMPORTANTE!"; ?></h2>
<h2 class="semi-titsubir"> <?php echo " - Si usted va cambiar el nombre a su documento, verifique que NO contenga carácteres extraños (# . $ ?), ni más de 60 caracteres "; ?></h2>


<?php echo "      "."<br>"; ?>

<form name="importa" method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data">
    <input type="file" name="documento" class="custom-file-input" />
    <input type="hidden" value="upload" name="action" />
    <input type='submit' name='enviar' value="Importar imagen" class="custom-submit-button" /> 
</form>



<!-- Agrega un canvas escondido para procesar la imagen -->
<canvas id="canvas" style="display:none;"></canvas>

<script>
document.querySelector('input[type="file"]').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        const img = new Image();
        img.onload = function() {
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');

            // Tamaño máximo permitido
            const MAX_WIDTH = 800;
            const MAX_HEIGHT = 800;
            let width = img.width;
            let height = img.height;

            // Redimensionar manteniendo la proporción
            if (width > height) {
                if (width > MAX_WIDTH) {
                    height *= MAX_WIDTH / width;
                    width = MAX_WIDTH;
                }
            } else {
                if (height > MAX_HEIGHT) {
                    width *= MAX_HEIGHT / height;
                    height = MAX_HEIGHT;
                }
            }

            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(img, 0, 0, width, height);

            // Convertir a JPEG con compresión al 80%
            canvas.toBlob(function(blob) {
                const newFile = new File([blob], file.name.replace(/\.\w+$/, '.jpg'), { type: 'image/jpeg' });
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(newFile);

                // Reemplaza el archivo original con la imagen comprimida
                event.target.files = dataTransfer.files;
				
            }, file.type);				
				
           // }, 'image/jpeg', 0.8); // Calidad 80%
        };
        img.src = e.target.result;
    };
    reader.readAsDataURL(file);
});

</script>


ññññ

<?php
extract($_POST);
$codigox = $_POST['codigox'];
$qregx = $_POST['qregx'];
echo ($codigox);

if ($action == "upload") {
    $archivo = $_FILES['documento']['name'];
    $tipo = $_FILES['documento']['type'];

    $numero = $cod_aso;  // Número a añadir
    $destino = $numero . pathinfo($archivo, PATHINFO_FILENAME) . "." . pathinfo($archivo, PATHINFO_EXTENSION);

    if (copy($_FILES['documento']['tmp_name'], $destino)) {
        echo "IMAGEN Cargada Con Éxito "."<br>"."<br>";
        echo "ARCHIVO a guardar : ".$destino."<br>";
       // $sql = "UPDATE catalogo_productos SET img_it='$destino' WHERE id='$id_img'";
		
		if ($xtip=="01") {
				$sql="UPDATE asociado_51 SET favicon_aso='$destino'  WHERE cod_aso='$cod_aso'";
		} elseif ($xtip=="02") {
				$sql="UPDATE asociado_51 SET img1_aso='$destino'  WHERE cod_aso='$cod_aso'";
				
		} else {
				$sql="UPDATE asociado_51 SET logo_aso='$destino'  WHERE cod_aso='$cod_aso'";
			
		}
				
	
        $result = mysqli_query($connec, $sql);
        if ($result) {
            echo("IMAGEN - REGISTRADA ");
        } else {
            echo("ERROR AL REGISTRAR..?");
        }
    } else {
        echo "Error Al Cargar el Archivo";
    }
?>
    <table width="363" border="0">
        <tr bgcolor="#F8DA94">
            <th scope="col"><div align="center"><a href="https://www.pormizona.com.pe/siga_pormizona/a_list_asociados_admin.php">RETORNAR </a></div></th> 
            
 
            
            
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
 
