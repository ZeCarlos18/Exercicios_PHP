<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 47</h1>
    <h2>Resposta:</h2>
<?php
if (!defined('DB_CONFIG_LOADED')) {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'usuario_seguro');
    define('DB_PASS', 'senha_complexa_123');
    define('DB_NAME', 'meu_banco');
    define('DB_CHARSET', 'utf8mb4');
    define('DB_CONFIG_LOADED', true);
    echo 'Conexão Feita com Sucesso.';
}
else {
    echo 'Conexão Deu erro ou o Banco ja está conectado';
}
?> 