<?php

$nome = "Wilson";

// O que se deve colocar no "config.php"

// 1º O diretório base
// 2º Onde estão as views
// 3º Acesso ao banco de dados

//Define a constante do diterório base
define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/VIEW');

$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '@293;1950W&';
$_ENV['db']['sdatabase'] = 'biblioteca';
