<?php
/*
Plugin Name: Bacciotti Social Media Icon
description: Exibe ícones das redes sociais do autor abaixo do post
Version: 1.0.0
Author: Lucas Bacciotti Moreira
URI: http://bacciotti.com
*/

//=================================================
// Security: Abort if this file is called directly
//=================================================
if ( !defined('ABSPATH') ) {
    die;
//    exit("Acesso negado.");
}

//=================================================
// Constante de caminho abslouto
//=================================================
define('SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN', plugin_dir_path(__FILE__));

//=================================================
// Includes
//=================================================
require_once (SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN . 'includes/templates/social-media-icon-son-conteudo.php');
require_once (SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN . 'includes/templates/social-media-icon-opcoes.php');
?>