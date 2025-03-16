<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MODIFICA Item</title>

<style type="text/css">
.TITULO_NARANJA {
	color: #FC0;
	font-weight: bold;
}
.diez {	font-size: 9px;
}
.texto_tablas11 {	font-size: 11px;
}
.tabla10 {
	font-size: 10px;
	font-family: Tahoma, Geneva, sans-serif;
}
.TITULO {
	font-size: 12px;
	color: #000;
}
.tit_menu_sup {
	color: #000;
}
.tit_menu_sup td .tablaingrenuevo tr td {
	font-size: 10px;
}
.viewtexto {
	font-family: "Comic Sans MS", cursive;
	font-size: 14px;
	font-weight: bold;
}
.cplomo { background-color:#CCC; }
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <?php
$id=$_GET['idx']; 
$cod_aso=$_GET['xcod'];
$xview=$_GET['xview'];   // ADMIN  o xxxxxx

//$xretornar=$_GET['xretornar'];
$retornar="catalogo_list_items_admin.php           ";
echo ($xview."<br>");
//echo ($retornar."<br>");
?>
  </p>
  <table width="1170" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="51" colspan="3" bgcolor="#000066" class="tit_menu_sup">
    <table width="1100" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="265" height="32" align="center" valign="middle" class="TITULO_NARANJA">ADMIN -&gt;  TRI  -VIEW</td>
        <td width="279" align="center" valign="middle" bgcolor="#FFFFFF"><a href="catalogo_list_items_admin.php">LISTA de PRODUCTOS</a></td>
        <td width="249" align="center" valign="middle" bgcolor="#FFFFFF"><a href="../index.php"><img src="../imagenes_idx/bot_ofertasemana.png" width="195" height="20"  style="border:0;" onmouseover="this.style.border='solid 3px #c2bdb8';" onmouseout="this.style.border=0;" /></a></td>
        <td width="79" align="center" valign="middle">&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr class="tit_menu_sup">
    <td width="400" align="center" valign="top" bgcolor="#FFFFCC">
      
  <!-- 11111111 ↓↓↓↓↓↓↓↓↓↓↓    *********************************  INICIO DE DATOS GENERALES    ***************   -->
      <table width="768" border="1" align="center" class="tablaingrenuevo">
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


$result0=mysqli_query($connec,"select * from a_sistema  where id=1");
$tabla0 = mysqli_fetch_array( $result0 ); 
$tc_sis=$tabla0["tc_sis"]; // tipo cambio


$result=mysqli_query($connec,"select * from catalogo_productos where (id=$id) AND (cod_aso_it=$cod_aso)");

$tabla = mysqli_fetch_array( $result ); 

		$id=$tabla["id"];
		$codigo_it=$tabla["codigo_it"];
		$codfabrica_it=$tabla["codfabrica_it"];
		$producto_it=$tabla["producto_it"];
		$grupolista_it=$tabla["grupolista_it"];
		$marka_it=$tabla["marka_it"];
		$fabricante_it=$tabla["fabricante_it"];
		$precom_it=$tabla["precom_it"];
		$monelista_it=$tabla["monelista_it"];
		$pv01_it=$tabla["pv01_it"];
		$pv02_it=$tabla["pv02_it"];
		$pv03_it=$tabla["pv03_it"];
		$img_it=$tabla["img_it"];
        if (strlen($img_it)==0) {
		  $img_it="no_disponible.jpg";
        }
		$stockmin_it=$tabla["stockmin_it"];		
		$lugar_al_it=$tabla["lugar_al_it"];	
		$view01_it=$tabla["view01_it"];
		$view02_it=$tabla["view02_it"];
		$view03_it=$tabla["view03_it"];
		$view04_it=$tabla["view04_it"];
		$time_entrega_it=$tabla["time_entrega_it"];
		$msjpublico_it=$tabla["msjpublico_it"];
		$obscompra_it=$tabla["obscompra_it"];
		$vinculo1_it=$tabla["vinculo1_it"];
		
?>
        
  <form id="form1" name="form1" method="get" action="catalogo_regmod_items.php">
      <tr>
        <td width="86" height="40" bgcolor="#E3E3E1" >CODIGO : </td>
        <td width="215" bgcolor="#E3E3E1" class="viewtexto"><?php echo($codigo_it); ?> </td>
        <td colspan="2" rowspan="8" align="center" valign="top" bgcolor="#E3E3E1"><p><img src=" <?php echo "img_catacli/".$img_it ?> " width="421" height="%" /></p>
          <p>&nbsp;</p>
          <p>NOTA: La imagen es referencial.</p></td>
      </tr>
    <tr>
      <td height="99" bgcolor="#E3E3E1">PRODUCTO  </td>    
      <td bgcolor="#E3E3E1"> <textarea name="xproducto" id="xproducto" cols="30" rows="5"><?php echo($producto_it); ?></textarea> </td>
    </tr>
    <tr>
      <td height="37" bgcolor="#E3E3E1">COD. MODELO</td>
      <td bgcolor="#E3E3E1"><input class="cplomo" name="xcodfabrica" type="text" id="xcodfabrica" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($codfabrica_it); ?>"/></td>
    </tr>
    <tr>
      <td height="37" bgcolor="#E3E3E1">MARCA </td>
      <td bgcolor="#E3E3E1"><input class="cplomo" name="xmarka" type="text" id="xmarka" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($marka_it); ?>"/></td>
    </tr>
    <tr>
      <td height="37" bgcolor="#E3E3E1">FABRICA</td>
      <td bgcolor="#E3E3E1">  <input class="cplomo" name="xfabricante" type="text" id="xfabricante" size="25"  onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($fabricante_it); ?>"/></td>
    </tr>
    <tr>
      <td height="129" bgcolor="#E3E3E1"><p>CARACTERÍSTICAS DEL PRODUCTO </p></td>   
      <td bgcolor="#E3E3E1"><textarea name="xmsjpub" id="xmsjpub" cols="30" rows="7"><?php echo($msjpublico_it); ?></textarea></td>
    </tr>
    <tr>
      <td height="68" bgcolor="#E3E3E1">Link 1 <br />
         DATOS O<br />
          FICHA TÉCNICA</td> 
      <td bgcolor="#E3E3E1"><textarea name="xvinculo1" id="xvinculo1" cols="30" rows="7"><?php echo($vinculo1_it); ?></textarea></td> 
    </tr>
    <tr>
      <td height="74" bgcolor="#E3E3E1">ll</td> 
      <td bgcolor="#E3E3E1">      </td> 
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><a href="img_items/n_subir_xfile.php?id_img=<?php  echo($id); ?>">Imagen</a></td>
      
    </tr>
    <tr>
      <input type="hidden" name="idx" value=<?php echo($id); ?> />
      <input type="hidden" name="xmod" value="1"/>     
      <input type="hidden" name="xview" value=<?php echo($xview);  ?> />     
      <input type="hidden" name="xcod" value=<?php echo($cod_aso);  ?> />     

      <td colspan="2" align="center" bgcolor="#000066">
        
        
       <? if  (trim($xview) == 'ADMIN' ) {   ?>
       <input name="Submit1" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-"  />
       <? }  ?>  
        
        
        </td>
      <td width="221"><a href="ilbupweiv.php?idx=<?php  echo($id); ?>">ver: VIEW CLIENTE</a></td>
      <td width="222"><a href=<?php echo ($retornar);?>><img src="iconos/bot_retornar.png" width="75" height="25" /></a></td>
      </tr>
    </form>
      </table>
      
 <!--     <table width="200" border="1">
        <tr>
          <td>  
       <? if  (trim($xview) == 'ADMIN' ) { 
	   
	   //FORM 2  ?>
     <form enctype="multipart/form-data" action="subirjpg.php" method="POST">
         <input name="uploadedfile" type="file" />
         <input type="hidden" name="idx" value=<?php echo($id); ?> />
         <input type="submit" value="Subir archivo" />
     </form>
       <? }  ?>        
      </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>  -->
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      
      <!-- 11111111 ↑↑↑↑↑↑↑↑↑↑  FIN GENERALES  **************************  DE DATOS GENERALES    ***************   -->
      
    </td>
    <td width="400" align="center" valign="top" bgcolor="#FFFFCC">&nbsp;</td>
    <td width="364" valign="top" bgcolor="#FFFFCC">
      <?php   
if (trim($xview)=="ADMIN") { // solo si es ADMIN    
?>
  <!-- 2222222222  ↓↓↓↓↓↓↓↓↓↓↓  INICIO ADMIN  *******************  DE LA TABLA DE DATOS SOLO ADMINISTRADOR ***************** -->
  <table width="329" border="1" align="center" class="tablaingrenuevo">
  <form id="form3" name="form3" method="get" action="catalogo_regmod_items.php">
    <tr>
      <td colspan="3" bgcolor="#FFCC66"><div align="center" class="tablaingrenuevo"><strong>DATOS</strong> (Uso: solo Admin)</div></td>
    </tr>
    <tr>
      <td width="95" bgcolor="#E3E3E1">PREC. COMP. DOCU. Inc. IGV</td>
      <td width="101" align="right" bgcolor="#E3E3E1"><span class="viewtexto"><?php echo($precom_it);?></span></td>
      <td width="111" align="center" bgcolor="#E3E3E1"><span class="viewtexto"><?php echo($monelista_it);?></span></td>
    </tr>
    <tr>
      <td bgcolor="#E3E3E1">T/C en este Item</td>
      <td colspan="2" align="center" bgcolor="#E3E3E1"><span class="viewtexto"><?php echo($tc_sis);?></span></td>
      </tr>
    <tr>
      <td align="center" bgcolor="#E3E3E1">PREC. COMP  LISTA<BR />Inc. IGV</td>
      <td bgcolor="#E3E3E1"><input class="cplomo" name="xprecom" type="text" id="xprecom" size="10" maxlength="10" value="<?php echo($precom_it); ?>" style="text-align:right"/></td>
      <td align="center" bgcolor="#E3E3E1">S/D: 
        <input name="xmonelista" type="text" id="xmonelista" size="1" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($monelista_it); ?>"/></td>
    </tr>
    <tr>
      <td colspan="3" align="center" bgcolor="#000066">
      
          
        <input type="hidden" name="idx" value="<?php echo($id); ?>" />
        <input type="hidden" name="xmod" value="3" />
        <input type="hidden" name="xview" value=<?php echo($xview);  ?> />     
        <input type="hidden" name="xcod" value=<?php echo($cod_aso);  ?> />     
        
        <input name="Submit2" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" />
    

      </td>
    </tr>
     </form>

    <tr>
    

    
      <td colspan="3" align="center" bgcolor="#E3E3E1">
      <table width="364" border="1" cellpadding="1" cellspacing="1">
        <tr>
          <td width="47" align="center">5%</td>
          <td width="47" align="center">10%</td>
          <td width="47" align="center">20%</td>
          <td width="42" align="center">30%</td>
          <td width="48" align="center">50%</td>
          <td width="45" align="center">70%</td>
          <td width="50" align="center">100%</td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFF99"><?php echo money_format('%n',($precom_it*1.05)); ?></td>
          <td align="center" bgcolor="#FFFF99"><?php echo money_format('%n',($precom_it*1.10)); ?></td>
          <td align="center" bgcolor="#FFFF99"><?php echo money_format('%n',($precom_it*1.20)); ?></td>
          <td align="center" bgcolor="#FFFF99"><?php echo money_format('%n',($precom_it*1.30)); ?></td>
          <td align="center" bgcolor="#FFFF66"><?php echo money_format('%n',($precom_it*1.50)); ?></td>
          <td align="center" bgcolor="#FFFF66"><?php echo money_format('%n',($precom_it*1.70)); ?></td>
          <td align="center" bgcolor="#FFFF66"><?php echo money_format('%n',($precom_it*2)); ?></td>
        </tr>
        <tr>
          <td align="center"><?php echo($precom_it*1.05-$precom_it); ?></td>
          <td align="center"><?php echo($precom_it*1.10-$precom_it); ?></td>
          <td align="center"><?php echo($precom_it*1.20-$precom_it); ?></td>
          <td align="center"><?php echo($precom_it*1.30-$precom_it); ?></td>
          <td align="center"><?php echo($precom_it*1.50-$precom_it); ?></td>
          <td align="center"><?php echo($precom_it*1.70-$precom_it); ?></td>
          <td align="center"><?php echo($precom_it*2-$precom_it); ?></td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td colspan="3" align="center" bgcolor="#E3E3E1">
      
      <table width="453" height="149" border="1">
     <form id="form4" name="form4" method="get" action="catalogo_regmod_items.php">      
        <tr>
          <td width="149" align="center" bgcolor="#FFFF00">01 = PV PUBLICO</td>
          <td width="141" align="center" bgcolor="#66FF00">02 = PV DISTRIBUIDOR </td>
          <td width="141" align="center" bgcolor="#CC6633">03 = PV OFERTA </td>
        </tr>
        <tr>
          <td align="center"><input name="xpv01" type="text" id="xpv01" size="10" maxlength="10" value="<?php echo($pv01_it); ?>" style="text-align:right"/></td>
          <td align="center"><input class="cplomo" name="xpv02" type="text" id="xpv02" size="10" maxlength="10" value="<?php echo($pv02_it); ?>" style="text-align:right"/></td>
          <td align="center"><input name="xpv03" type="text" id="xpv03" size="10" maxlength="10" value="<?php echo($pv03_it); ?>" style="text-align:right"/></td>
        </tr>
        <tr>
          <td align="center"><?php echo($pv01_it-$precom_it); ?></td>
          <td align="center"><?php echo($pv02_it-$precom_it); ?></td>
          <td align="center"><?php echo($pv03_it-$precom_it); ?></td>
        </tr>
        <tr>
          <td align="center"><?php echo(round($pv01_it*100/$precom_it-100,2))."%"; ?></td>
          <td align="center"><?php echo(round($pv02_it*100/$precom_it-100,2))."%"; ?></td>
          <td align="center"><?php echo(round($pv03_it*100/$precom_it-100,2))."%"; ?></td>
        </tr>
        <tr>
          <td colspan="3" align="center" bgcolor="#000066">        <input type="hidden" name="idx" value="<?php echo($id); ?>" />
        <input type="hidden" name="idx" value="<?php echo($id); ?>" />
        <input type="hidden" name="xmod" value="4" />
      <input type="hidden" name="xcod" value=<?php echo($cod_aso);  ?> />     
     
        <input name="Submit2" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" />
</td>
          </tr>
  </form>
      </table>
</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#E3E3E1">
      <table width="442" border="1">
       <form id="form5" name="form5" method="get" action="catalogo_regmod_items.php">      

        <tr>
          <td width="89">GRUPO LISTA</td>
          <td width="156"><?php echo($grupolista_it);
		  

$resultx=mysqli_query($connec,"select * from a_grupo where cod_gr=$grupolista_it");	
$tablax = mysqli_fetch_array( $resultx ); 

		$decri=$tablax["descri_gr"];

echo(": ".$decri);

		  
		  
		  
		   ?></td>
          <td width="175">
              <label>   <?php
                include("connec_sql_new.php");
                mysqli_set_charset($connec,'utf8'); 
                $sql=mysqli_query($connec,"SELECT * FROM a_grupo order by cod_gr");
                         ?>
                <select name="xgrupolista">
                      **************************************************+   <option value="">GRUPO</option>
                         <?php
                           while($rosvi=mysqli_fetch_array($sql))
                                 echo "<option  value='".$rosvi["cod_gr"]."'>".$rosvi["descri_gr"]."</option>"; 
                          ?>
                </select>
              </label>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">&nbsp;</td>
          <td align="center"><span class="tabla10">Syscom, M.Bonita, Regalos, Perfume</span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><span class="tabla10">S SR  M MR PR SMRP</span></td>
          <td align="center"><input name="xgrupolista" type="text" id="xgrupolista" size="4" maxlength="4" onKeyUp="this.value=this.value.toUpperCase();" value="<?php echo($grupolista_it); ?>"/></td>
        </tr>
        <tr>
          <td colspan="3" align="center" bgcolor="#000066">
          <input type="hidden" name="idx" value="<?php echo($id); ?>" />
          <input type="hidden" name="xmod" value="5" />
      <input type="hidden" name="xcod" value=<?php echo($cod_aso);  ?> />     
          
        <input name="Submit2" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" />
</td>
          </tr>
        </form>
      </table></td>
      </tr>
    <tr>
      <td colspan="3" bgcolor="#E3E3E1">
        
        <table width="449" border="1">
          <form id="form6" name="form6" method="get" action="catalogo_regmod_items.php">      
            
            
            <tr>
              <td width="139">STOCK MÍNIMO</td>
              <td width="151"><input class="cplomo" name="xstockmin" type="text" id="xstockmin" size="10" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($stockmin_it); ?>"/></td>
              <td width="137">&nbsp;</td>
              </tr>
            <tr>
              <td>LUGAR EN EL ALMACEN</td>
              <td><input class="cplomo" name="xlugar_al" type="text" id="xlugar_al" size="30" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($lugar_al_it); ?>"/></td>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>TIEMPO DE ENTREGA</td>
              <td><input class="cplomo" name="xtime_entrega" type="text" id="xtime_entrega" size="30" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($time_entrega_it); ?>"/></td>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>VIEW 01</td>
              <td><input name="xview01" type="text" id="xview01" size="1" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($view01_it); ?>"/></td>
              <td>S - N</td>
              </tr>
            <tr>
              <td>VIEW 02</td>
              <td><input name="xview02" type="text" id="xview02" size="1" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($view02_it); ?>"/></td>
              <td>S - N</td>
              </tr>
            <tr>
              <td>VIEW 03</td>
              <td> <input name="xview03" type="text" id="xview03" size="1" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($view03_it); ?>"/> </td>
              <td>S - N</td>
              </tr>
            <tr>
              <td>VIEW 04</td>
              <td><input name="xview04" type="text" id="xview04" size="1" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo($view04_it); ?>"/></td>
              <td>S - N</td>
              </tr>
            <tr>
              <td>IMAGEN</td>
              <td colspan="2"><input name="ximg" type="text" id="ximg" size="30" maxlength="50" value="<?php echo($img_it); ?>"/></td>
              </tr>
            <tr>
              <td>Observaciones<br />
                administrador</td>
              <td colspan="2"><textarea class="cplomo"  name="xobscompra" id="xobscompra" cols="30" rows="5"><?php echo($obscompra_it); ?></textarea></td>
              </tr>
            <tr>
              <td colspan="3" align="center" bgcolor="#000066">
                
                <input type="hidden" name="idx" value="<?php echo($id); ?>" />
                <input type="hidden" name="xmod" value="6" />
                <input type="hidden" name="xcod" value=<?php echo($cod_aso);  ?> />     
                
                <input name="Submit2" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" />
                
                
                </td>
              </tr>
            
            
            </form>
          </table></td>
    </tr>
    <tr>
      <td bgcolor="#E3E3E1">&nbsp;</td>
      <td bgcolor="#E3E3E1">&nbsp;</td>
      <td bgcolor="#E3E3E1">&nbsp;</td>
    </tr>
  </table>
      <!-- 2222222222 ↑↑↑↑↑↑↑↑↑↑  FIN ADMIN GENERALES  *************************SOLO DATOS ASMINISTRADOR    ***************   -->
      
  <?php
}
mysqli_close($connec);

?>  
    </td>
    </tr>

</table>

<p>&nbsp;</p>
</body>
</html>
