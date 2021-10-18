<?php
//=================================================
// Pegando as opções salvas no banco
// Nota: smis_op_icons é o BLOCO (existem GRUPOS e BLOCOS de opções)
//=================================================
$smis_opcoes = get_option('smis_op_icons');
?>

<!--=================================================-->
<!--Frontend com HTML básico -->
<!--=================================================-->
<div class="wrap">
    <h1>Opções Plugin Barciole Social Media Icons </h1>
    <form action="options.php" method="post">
        <?php settings_fields('smis_op'); ?>


        <label>Facebook: </label><br>
        <input type="url" name="smis_op_icons[fb-perfil]" id="smis_op_icons[fb-perfil]"
               value="<?php echo $smis_opcoes['fb-perfil'] ?>"><br>
        Exibir?
        <input type='checkbox' name='smis_op_icons[fb-view]' id='smis_op_icons[fb-view]' value="1" <?php checked(1, isset($smis_opcoes['fb-view']) ? 1 : 0); ?>><br>


        <label>Twitter: </label><br>
        <input type="url" name="smis_op_icons[tw-perfil]" id="smis_op_icons[tw-perfil]"
               value="<?php echo $smis_opcoes['tw-perfil'] ?>"><br>
        Exibir? <input type="checkbox" name="smis_op_icons[tw-view]" id="smis_op_icons[tw-view]"
                       value="1" <?php checked(1, isset($smis_opcoes['tw-view']) ? 1 : 0); ?>><br>
        <label>Yourube: </label><br>
        <input type="url" name="smis_op_icons[yt-perfil]" id="smis_op_icons[yt-perfil]"
               value="<?php echo $smis_opcoes['yt-perfil'] ?>"><br>
        Exibir? <input type="checkbox" name="smis_op_icons[yt-view]" id="smis_op_icons[yt-view]"
                       value="1" <?php checked(1, isset($smis_opcoes['yt-view']) ? 1 : 0); ?>><br>
        <input type="submit" name="submit" value="Salvar">
    </form>
</div>