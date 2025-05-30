<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 37</h1>
    <h2>Resposta:</h2>
    <?php
        include_once '../Html/helpers.php';
        $nome1 = "Henrique";
        $nome2 = "Pedro";
        $nome3 = 43;
        echo "$nome1: " .saudacao($nome1)."<br>";
        echo "$nome2: " .saudacao($nome2)."<br>";
        echo "$nome3: " .saudacao($nome3)."<br>";
    ?>