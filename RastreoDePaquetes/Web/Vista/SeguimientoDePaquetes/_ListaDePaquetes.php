<table class="Lista">
    <tr>
        <th class="nombreTabla" colspan="14">Paquetes que se van a cargar</th>
    </tr>
    <tr>
        <th>Num.</th>
        <th>Guia</th>
        <th>Fecha Ingreso</th>
        <th>Estado</th>
        <th>Fecha modificacion</th>
        <th>Piezas</th>
        <th>Peso (kg)</th>
        <th>Tipo envio</th>
        <th>Codigo Tienda</th>
        <th>Tienda</th>
        <th>Casillero</th>
        <th>Descripcion</th>
        <th>Tipo mercancia</th>
        <?php if (isset($Modo) && $Modo == 'Edit') {?>
        <th align="center">
            <input type="checkbox" id="ch_todos" name="ch_todos"/>
        </th>
        <?php } ?>
    </tr>
     <?php for( $i=0; $i<5; $i++ ) { ?>
    <tr>
        <td><?php echo $i ?></td>
        <td>Guia<?php echo $i ?></td>
        <td>2012-11-<?php echo $i ?></td>
        <td>E_<?php echo $i ?></td>
        <td>Fecha modificacion<?php echo $i ?></td>
        <td>Piezas<?php echo $i ?></td>
        <td><?php echo $i * 15 ?>(kg)</td>
        <td>T_E_<?php echo $i ?></td>
        <td>Tienda<?php echo $i ?></td>
        <td>Tienda<?php echo $i ?></td>
        <td>Casillero<?php echo $i ?></td>
        <td>Producto importado numero <?php echo $i ?></td>
        <td>Tipo mercancia<?php echo $i ?></td>
        <?php if (isset($Modo) && $Modo == 'Edit') {?>
        <td align="center">
            <input type="checkbox" name="ch_Numero_<?php echo $i ?>"/>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
    <tr>
        <th class="lineaFin" colspan="14"></th>
    </tr>
</table>