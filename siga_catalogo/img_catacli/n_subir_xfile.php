<!-- http://ProgramarEnPHP.wordpress.com -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>:: 21:46 Importar documentos con CODIGO** ::</title>
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

		
    </style>
</head>

<body>



<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$id_img = $_GET['id_img'];
$cod_aso = $_GET['xcod'];
$usuario = $_GET['xusername'];
$password = $_GET['xpassword'];
?>

<h2 class="semi-titulosform"> <?php echo "SUBIR IMÁGENES A MIS PRODUCTOS"; ?></h2>

<h1 class="semi-titulosform"> <?php echo "IMPORTANTE! - Verifique 1.- Que el nombre de su documento no contenga carácteres extraños (# . $ ?)"; ?></h1>
<h1 class="semi-titulosform"> <?php echo "IMPORTANTE! - Verifique 2.- Que el nombre de su documento no tenga más de 60 caracteres"; ?></h1>

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

            // Ajusta estos valores para redimensionar la imagen
            const MAX_WIDTH = 800;
            const MAX_HEIGHT = 800;
            let width = img.width;
            let height = img.height;

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

            canvas.toBlob(function(blob) {
                const newFile = new File([blob], file.name, { type: file.type });
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(newFile);

                // Reemplaza el archivo original con la imagen redimensionada
                event.target.files = dataTransfer.files;
            }, file.type);
        };
        img.src = e.target.result;
    };
    reader.readAsDataURL(file);
});
</script>




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
        $sql = "UPDATE catalogo_productos SET img_it='$destino' WHERE id='$id_img'";
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
            <th scope="col"><div align="center"><a href="../catalogo_list_items_admin.php?xusername=<?php echo($usuario); ?>&xpassword=<?php echo($password); ?>">RETORNAR 09pm </a></div></th> 
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
    
