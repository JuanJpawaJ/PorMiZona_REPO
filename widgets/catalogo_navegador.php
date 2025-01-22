<link rel="stylesheet" href="<?php echo $agregado_en_cab?>assets/css/estilos_navegador.css">

<div class="navegador">

<?      if (strlen(trim($logo_aso))==0) { 

         echo "<span class='razonsocial_blanco'>$rsocial_aso</span>"; ?>

   <? } else { ?>

        <img src="../img_asociados/<? echo $logo_aso; ?>" alt="" class="logo_principal">

   <? } ?>
        <button class="boton_nav" id="boton_hamburguesa" onclick="desplegarBotonHamburguesa()">
            <span class="material-symbols-outlined">
                menu
            </span>
        </button>

        <div class="cont_lista_elementos" id="cont_elementos_navegador">
          <ul>
      <!-- <li><a href="<?php echo $agregado_en_cab?>#jpawaj"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/logo_JPAWAJ_blanco.png" alt=""></a></li>
           <li><a href="<?php echo $agregado_en_cab?>#syscomputer"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/logo_syscomputer_blanco.png" alt=""></a></li>
           <li><a href="http://mujerbonita.com.pe"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/logo_mujer_bonita_blanco.png"alt=""></a></li>
           <li><a href="https://www.pormizona.com.pe"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/logo_pormizona_blanco.png" alt=""></a></li>
           <li><a href="<?php echo $agregado_en_cab?>#interclass"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/logo_interclass_blanco.png" alt=""></a></li>
       -->   
           <li><a href="<?php echo $agregado_en_cab?>#syscomputer"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/bot_inicio_blanco.png" alt=""></a></li>
           <li><a href="http://mujerbonita.com.pe"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/bot_productos_blanco.png"alt=""></a></li>
           <li><a href="http://mujerbonita.com.pe"><img src="<?php echo $agregado_en_cab?>assets/img/imagenes_index/bot_ubicacion_blanco.png"alt=""></a></li>

       
       
          </ul>
        </div>
 </div>

<div class="navegador_espaciado"></div>


<script src="<?php echo $agregado_en_cab?>assets/js/navegador.js"></script>