<?php
//=================================================
// Fazendo uso de template e chamando com require
// Adicionando o filtro do conteúdo
//=================================================
function smis_plugin_registrando_conteudo($post)
{
    echo $post;
    require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN . 'includes/templates/conteudo.php');
}

add_filter('the_content', 'smis_plugin_registrando_conteudo');