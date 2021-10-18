<?php $smis_opcoes = get_option('smis_op_icons'); ?>

<?php if (isset($smis_opcoes['fb-view']) || isset($smis_opcoes['tw-view']) || isset($smis_opcoes['yt-view'])): ?>
    <style>
        .smis-conteudo .smis-icones img {
            width: 40px;
            height: auto;
            padding: 8px;
        }
    </style>
    <div class="smis-conteudo">
        Me encontre nas redes sociais:
        <hr>
        <div class="smis-icones">
            <?php if (isset($smis_opcoes['fb-view'])): ?>
                <a href="<?php echo $smis_opcoes['fb-perfil'] ?>"><img
                            src="<?php echo plugin_dir_url(__FILE__) . 'img/facebook.png' ?>"></a>
            <?php endif; ?>
            <?php if (isset($smis_opcoes['tw-view'])): ?>
                <a href="<?php echo $smis_opcoes['fb-perfil'] ?>"><img
                            src="<?php echo plugin_dir_url(__FILE__) . 'img/twitter.jpg' ?>"></a>
            <?php endif; ?>
            <?php if (isset($smis_opcoes['yt-view'])): ?>
                <a href="<?php echo $smis_opcoes['fb-perfil'] ?>"><img
                            src="<?php echo plugin_dir_url(__FILE__) . 'img/youtube.png' ?>"></a>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>