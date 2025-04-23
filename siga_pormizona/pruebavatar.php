<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

// ==============================
// CONFIGURACIONES INICIALES
// ==============================
$nombre = "JUNA VALDIVIA";  // Puedes obtenerlo de tu base de datos
$letras = strtoupper(substr(trim($nombre), 0, 2));  // Dos primeras letras

// Ruta a la fuente TTF (debe estar en el mismo directorio que este archivo PHP)
$fontFile = __DIR__ . '/arial.ttf';  // Asegúrate que arial.ttf esté aquí o usa otra fuente

// Verificación de la fuente
if (!file_exists($fontFile)) {
    die("No se encontró el archivo de fuente: $fontFile");
}

// Tamaño de la imagen
$ancho = 255;
$alto = 255;

// ==============================
// CREAR IMAGEN EN BLANCO Y HACER TRANSPARENTE
// ==============================
$imagen = imagecreatetruecolor($ancho, $alto);
imagesavealpha($imagen, true);
$transparente = imagecolorallocatealpha($imagen, 0, 0, 0, 127);
imagefill($imagen, 0, 0, $transparente);

// ==============================
// COLORES
// ==============================
$plomo = imagecolorallocate($imagen, 192, 192, 192);  // Color plomo
$blanco = imagecolorallocate($imagen, 255, 255, 255);

// ==============================
// DIBUJAR CÍRCULO
// ==============================
imagefilledellipse($imagen, $ancho / 2, $alto / 2, $ancho - 10, $alto - 10, $plomo);

// ==============================
// AGREGAR TEXTO GRANDE
// ==============================
$fontSize = 100;  // Tamaño grande de la letra

// Calcular posición para centrar el texto
$box = imagettfbbox($fontSize, 0, $fontFile, $letras);
$textWidth = $box[2] - $box[0];
$textHeight = $box[1] - $box[7];
$x = ($ancho - $textWidth) / 2;
$y = ($alto + $textHeight) / 2 - 10;  // Ligeramente ajustado hacia arriba

// Escribir el texto en color blanco
imagettftext($imagen, $fontSize, 0, $x, $y, $blanco, $fontFile, $letras);

// ==============================
// CONVERTIR LA IMAGEN EN BASE64 PARA MOSTRARLA DIRECTAMENTE EN HTML
// ==============================
ob_start();
imagepng($imagen);
$imagenBase64 = base64_encode(ob_get_clean());
imagedestroy($imagen);

// Crear el string base64 que puedes incrustar en el src de tu <img>
$imagenBase64Src = 'data:image/png;base64,' . $imagenBase64;
?>

<table width="250" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td><img src="<?php echo $imagenBase64Src; ?>" width="100" height="100" alt="Avatar con Letras"></td>
  </tr>
  <tr>
    <td>gg</td>
  </tr>
</table>
</body>
</html>