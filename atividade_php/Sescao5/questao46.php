<!DOCTYPE html>
<html lang="pt-BR">
<h1>Questão 46</h1>
<h2>Resposta:</h2>
<?php
echo "No Include, se acontecer algum erro, o script continua executando as outras linhas de codigo e emite um Warning."."<br>". "Porém com o require, o script não continua executando as outras linhas de codigo, se o require der algum erro e é emitido um Fatal Error.";
echo "<h2>Teste com include</h2>";
echo "<p>Antes do include.</p>";
include 'config.php';
echo "<p>Depois do include.</p>";
echo "<h2>Teste com require</h2>";
echo "<p>Antes do require.</p>";
require 'config.php'; 
echo "<p>Depois do require.</p>";
?>