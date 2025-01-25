<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Productos</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../assets/css/estilos_generales.css">
  <link rel="stylesheet"
    href="../assets/css/estilos_index/estilos_bloques_marcas/estilos_contenedor_ofertas_semana.css">
  <link rel="stylesheet" href="../assets/css/estilos_carta_producto.css">
  <link rel="stylesheet" href="../assets/css/estilos_buscador_productos.css">

  <link rel="stylesheet" href="../assets/css/estilos_carta_producto.css">
  <link rel="icon" href="../assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head>

<body>
  <?php
  include ("connec_sql_new.php");
  mysqli_set_charset($connec, 'utf8');
  date_default_timezone_set("America/Lima");
  setlocale(LC_ALL, "sp");

  $bxproducto = $_GET['bxproducto'];
  $xgl = $_GET['xgl'];
  $pagina = $_GET['pagina'];
  $cod_aso = $_GET['xcod'];
  $rsocial_aso = $_GET['xrsocial'];
  $logo_aso = $_GET['xlogo'];

  $agregado_en_cab = "../";
  include '../widgets/catalogo_navegador.php';



  ?>

  <!-- <a href="a_lisgeneral.php?xgl=S">tec</a>
  <a href="a_lisgeneral.php?xgl=M">bou</a>
  <a href="a_lisgeneral.php?xgl=R">rega</a>
  <a href="a_lisgeneral.php?xgl=P">perf</a> -->

  <form id="form0" name="form0" method="get" action="a_lisgeneral.php">
    <div class="buscador">
      <!-- <img src="../assets/img/imagenes_index/logo_syscomputer.png" alt=""> -->
      <div class="contenedor_buscador">
        <input type="text" placeholder="¿Qué producto deseas buscar?" name="bxproducto" id="bxproducto">
        <button type="submit" name="Submit3">
          <span class="material-symbols-outlined">search</span>
        </button>
      </div>
    </div>
  </form>

  <?php

  $max_registros = 40; // Número máximo de registros por página
  $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Página actual (inicialmente 1 si no se especifica)
  $indice_inicio = ($pagina_actual - 1) * $max_registros; // Calcular el índice de inicio para la consulta LIMIT

  if (strlen($bxproducto) == 0) {
    //$query = "SELECT * FROM catalogo_productos WHERE view01_it='S' AND grupolista_it LIKE '%$xgl%' ORDER BY producto_it LIMIT $indice_inicio, $max_registros";
    $query = "SELECT * FROM catalogo_productos where cod_aso_it=$cod_aso AND view01_it='S' order by producto_it LIMIT $indice_inicio, $max_registros";

  } else {
    $bxproducto1 = trim($bxproducto);
    //$query = "SELECT * FROM catalogo_productos WHERE producto_it LIKE '%$bxproducto1%' ORDER BY producto_it LIMIT $indice_inicio, $max_registros";
    $query = "SELECT * FROM catalogo_productos WHERE view01_it='S' AND cod_aso_it=$cod_aso AND producto_it LIKE '%$bxproducto1%' ORDER BY producto_it LIMIT $indice_inicio, $max_registros";

  }

  $result = mysqli_query($connec, $query);
  $total = mysqli_num_rows($result);

  $query_total = "SELECT COUNT(*) AS total_registros FROM catalogo_productos WHERE view01_it='S' AND grupolista_it LIKE '%$xgl%'";
  $result_total = mysqli_query($connec, $query_total);
  $row_total = mysqli_fetch_assoc($result_total);
  $total_registros_t = $row_total['total_registros'];

  ?>
  <div class="grid_lista_productos">
    <?php
    while ($tabla = mysqli_fetch_array($result)) {

      $id = $tabla["id"];
      $img_it = $tabla["img_it"];
      $producto_it = $tabla["producto_it"];
      $pv01_it = $tabla["pv01_it"];
      $pv03_it = $tabla["pv03_it"];
      $simbolo_mone = "S/  ";


      $imagen = "img_catacli/" . $img_it;
      $nombre_producto = $producto_it;
      $precio = $simbolo_mone . money_format('%n', ($pv01_it));
      $precio_oferta = $simbolo_mone . money_format('%n', ($pv03_it));
      //$enlace = "ilbupweiv.php?idx=".$id;

      //$enlace = "ilbupweiv.php?idx=".$id."&xcod=".$cod_aso."&xrsocial=".$rsocial_aso."&xlogo=".$logo_aso;
      $enlace = "ilbupweiv.php?idx=".$id."&xcod=".$cod_aso;

      $view03 = $tabla["view03_it"];


      include '../widgets/carta_producto.php';
    }
    ?>
  </div>

  <div class="paginacion">
    <?php

    $total_paginas = ceil($total_registros_t / $max_registros);

    if ($pagina_actual > 1) { // Mostrar enlaces de página previa si no estamos en la primera página
      echo '<a href="a_lisgeneral.php?xgl=' . $xgl . '&bxproducto=' . $bxproducto . '&pagina=' . ($pagina_actual - 1) . '">Anterior</a>';
    }
    for ($i = 1; $i <= $total_paginas; $i++) {  // Mostrar números de página
      echo '<a class="numeracion_paginas"href="a_lisgeneral.php?xgl=' . $xgl . '&bxproducto=' . $bxproducto . '&pagina=' . $i . '">' . $i . '</a>';
    }
    if ($pagina_actual < $total_paginas) { // Mostrar enlaces de página siguiente si no estamos en la última página
      echo '<a href="a_lisgeneral.php?xgl=' . $xgl . '&bxproducto=' . $bxproducto . '&pagina=' . ($pagina_actual + 1) . '">Siguiente</a>';
    }

    
    ?>
  </div>

  <?php
    $agregado_en = "../";
    include '../widgets/catalogo_footer.php';
  ?>
  <script>
    lista_numeros_paginas = document.getElementsByClassName("numeracion_paginas");
    numero_pagina_actual = parseInt(<?php echo $pagina_actual?>)
    lista_numeros_paginas[numero_pagina_actual-1].style.backgroundColor = "gray";
  </script>
</body>
</html>