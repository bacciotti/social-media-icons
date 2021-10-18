<?php
//=================================================
// Fazendo uso de template e chamando com require
//=================================================
function smis_pagina_opcoes_frontend()
{
    require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN . 'includes/templates/op.php');
}

//=================================================
// Adicionando a página no menu da Dashboard
//=================================================
function smis_pagina_opcoes_registro()
{
    add_options_page('SMIS Opções', 'SMIS Opções', 'manage_options', 'smis', 'smis_pagina_opcoes_frontend');
}

add_action('admin_menu', 'smis_pagina_opcoes_registro');

//=================================================
// Importante: criando e registrando a API Setting
// Nota: API 'setting' e 'options' são similares e devem ser usadas em conjunto
//=================================================
function smis_carregando_settings_api()
{
    register_setting('smis_op', 'smis_op_icons');
}

add_action('admin_init', 'smis_carregando_settings_api');