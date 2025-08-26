<?php
// Configurações básicas do site
define('SITE_NAME', 'Manuais de Montagem - Grupo JSilvino');
define('SITE_DESCRIPTION', 'Manuais de montagem da linha J.A e J.Confort - Grupo JSilvino');
define('SITE_URL', 'https://seusite.com');
define('SITE_LOGO', 'assets/images/logo.png');

// Configurações de banco de dados (se necessário)
define('DB_HOST', 'localhost');
define('DB_NAME', 'nome_banco');
define('DB_USER', 'usuario');
define('DB_PASS', 'senha');

// Inicia a sessão
session_start();

// Outras configurações globais
date_default_timezone_set('America/Sao_Paulo');
?>