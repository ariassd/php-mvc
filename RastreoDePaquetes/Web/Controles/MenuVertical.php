<?php 
if(isset($menuVertical) && is_array($menuVertical) ) { ?>
<div id="menuVertical">
    <div>Opciones de idiomas</div>
    <ul>
        <?php foreach ($menuVertical as $key => $value) { ?>
        <li><a href="<?php echo $value;?>" title="<?php echo $key; ?>"><?php echo $key; ?></a></li>
        <?php } ?>
    </ul>
</div>
<?php } ?>