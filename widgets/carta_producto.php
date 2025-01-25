<!-- <link rel="stylesheet" href="../assets/css/estilos_carta_producto.css"> -->
<?php
    
    if ($pv03_it > 0) {
        $clase_oferta = 'carta_producto_oferta';
        $texto_oferta = "<p>OFERTA</p>";
        $precio_antiguo = "<p class='precio_antiguo'>{$precio}</p>";
        $precio = $precio_oferta;
        echo "<script>console.log('SI');</script>";
        
    } else {
        $clase_oferta = '';
        $texto_oferta = "";
        $precio_antiguo = "";
        echo "<script>console.log('NO');</script>";
    }
    
?>

<div class="carta_producto <?php echo $clase_oferta;?>">
    <div class="contenedor_imagen"><img src="<?php echo $imagen;?>" /></div>
    <h3>
        <?php echo $nombre_producto;?>
    </h3>
    <div class="precios">
        <?php echo $precio_antiguo;?>
        <p class="precio_oferta">
            <?php echo $precio;?>
        </p>
    </div>
    <a href="<?php echo $enlace;?>">
        Ver producto
    </a>
    <?php echo $texto_oferta;?>
</div>