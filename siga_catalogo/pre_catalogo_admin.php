<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRE CATALOGO ADMIN</title>
  <!-- Incluir FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Contenedor principal */
    .container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px; /* Aumenté el ancho para acomodar dos botones por línea */
      width: 100%;
    }

    /* Logo */
    .logo {
      width: 100px;
      height: auto;
      margin-bottom: 10px;
    }

    /* Título */
    .title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    /* Contenedor de botones */
    .button-group {
      display: flex;
      flex-wrap: wrap;
      gap: 10px; /* Espacio entre botones */
      margin-bottom: 20px;
    }

    /* Botones */
    .button {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1 1 calc(50% - 10px); /* Dos botones por línea con espacio entre ellos */
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
    }

    .button:hover {
      background-color: #0056b3;
    }

    /* Botones de ancho completo */
    .button.full-width {
      flex: 1 1 100%; /* Ocupa el 100% del ancho */
    }

    /* Íconos */
    .button i {
      margin-right: 10px;
    }

    /* Subtítulos para grupos de botones */
    .subtitle {
      font-size: 18px;
      font-weight: bold;
      color: #555;
      margin-bottom: 10px;
      text-align: left;
    }
  </style>
</head>
<body>

<?
$usuario  = trim($_POST['xusername']); // el usuario es el email_aso
$password = trim($_POST['xpassword']);
if (strlen($usuario)==0){
   $usuario  = trim($_GET['xusername']); // el usuario es el email_aso
   $password = trim($_GET['xpassword']);
}

$celular1 = $_GET['xtelf1'];
$celular2 = $_GET['xtelf2'];
$rsocial_aso= $_GET['xrsocial'];
$link_catalogo="https://www.pormizona.com.pe/idxcatalogo.php?xcod=0000046&xrsocial=CATALOGO%20DIGITAL";


?>

  <div class="container">
    <!-- Logo -->
    <img src="iconos/logo_catalogo_digital.png" alt="Logo PAWAJ SAC" class="logo">
    <div class="subtitle">  <? echo $rsocial_aso; ?> </div>

    <!-- Título -->
    <div class="title">PRE CATALOGO ADMIN</div>

    <!-- Grupo 1: Aplicación 1 -->
    <div class="subtitle">Catálogo</div>
    <div class="button-group">
      <a href="catalogo_list_items_admin.php?xusername=<?php  echo($usuario); ?>&xpassword=<?php echo($password); ?>" class="button">
        <i class="fa-solid fa-newspaper"></i> CATALOGO SOCIO ADMIN</a>
      
  <!-- <a href="https://app1.com" class="button" target="_blank">Aplicación 1</a>  -->  
  
    </div>

    <!-- Grupo 2: Aplicación 2 -->
    <div class="subtitle">Bienvenida</div>
    <div class="button-group">
<?php

$mensaje = "AMIGO EPRESARIO: ".$rsocial_aso.  
"\n ¡Bienvenido a PorMiZona! Desde ahora, tu negocio será más visible para tus clientes. Te enviamos tu clave de acceso para que puedas ingresar y modificar tus datos según lo necesites.\n
En el apartado -Relación de Productos y Servicios-, asegúrate de ingresar aquellos productos clave que tus clientes buscarán.
Aquí tienes tu clave de acceso:

USUARIO: ". $usuario.
"\n CLAVE: ". $password.

"\n \n ¡Gracias por elegirnos!
www.PorMiZona.com.pe  
Tu conexión con la comunidad local

Además, si aún no tienes un CATÁLOGO VIRTUAL, aprovecha nuestra promoción exclusiva a un precio súper accesible.\n ¡Una página web con catalogo, te hace una empresa más seria!.
Saludos.";


$urlWhatsApp1 = "https://wa.me/$celular1?text=" . urlencode($mensaje);
$urlWhatsApp2 = "https://wa.me/$celular2?text=" . urlencode($mensaje);

?>

<a href="<?php echo $urlWhatsApp1; ?>" class="button">
  <i class="fab fa-whatsapp"></i> Enviar1 BIENVENIDA y ACCESOS <? echo $celular1; ?> </a>      
       
        
 <a href="<?php echo $urlWhatsApp2; ?>" class="button">
  <i class="fab fa-whatsapp"></i> Enviar2 BIENVENIDA y ACCESOS <? echo $celular2; ?> </a>      
        


    </div>

    <!-- Grupo 3: Aplicación 3 -->
    <div class="subtitle">Otros</div>
    <div class="button-group">
      <a href="https://app4.com" class="button">
        <i class="fas fa-link"></i> Opción 4
      </a>
      <a href="https://app5.com" class="button">
        <i class="fas fa-mobile-alt"></i> Opción 5
      </a>
    </div>
  </div>
</body>
</html>
