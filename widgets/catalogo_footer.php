<?php
include ("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");
?>


<link rel="stylesheet" href="<?php echo $agregado_en?>assets/css/estilos_footer.css">

<div class="footer">
    <div>
        <h4>Tienda exhibición:</h4>
        <p>Av. Porongoche 323 (1/2 cuadra del Mall Aventura Plaza - Porongoche)</p>

        <h4>Almacen:</h4>
        <p>Calle Sena 105 - Coop 58 (1/2 cuadra del Mall Aventura Porongoche)</p>
    </div>

    <div>
        <h4>Teléfonos:</h4>
        <ul>
            <li>959956000</li>
            <li>959956060</li>
        </ul>

        <h4>Correo electrónico:</h4>
        <ul>
            <li>jpawasac@gmail.com</li>
            <li>jpawasac@gmail.com</li>
        </ul>
    </div>
    <div>
        <ul class="lista_de_redes_sociales">
            <li>
                <a href="#">
                    <img src="<?php echo $agregado_en?>assets/img/imagenes_index/logo_facebook_blanco.png" alt="">
                    <p>instagram/jpawaj</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo $agregado_en?>assets/img/imagenes_index/logo_facebook_blanco.png" alt="">
                    <p>instagram/jpawaj</p>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="<?php echo $agregado_en?>assets/img/imagenes_index/logo_instagram_blanco.png" alt="">
                    <p>instagram/jpawaj</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo $agregado_en?>assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                    <p>instagram/jpawaj</p>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="<?php echo $agregado_en?>assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                    <p>instagram/jpawaj</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="contenedor_final_footer">
        <img src="<?php echo $agregado_en?>assets/img/imagenes_index/logo_JPAWAJ_blanco.png" alt="">
        <p>Arequipa - Peru - 2024</p>
    </div>
    
</div>

<div class="m_p">
    Desarrollador: Juan Diego Valdivia Mendoza
</div>