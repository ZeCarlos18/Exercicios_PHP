<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 36</h1>
    <h2>Resposta:</h2>
    <?php
    include_once '../Html/helpers.php';
        $idade1 = 18;
        $idade2 = 14;
        $idade3 = "henrique";
        echo "$idade1: ".maiorIdade($idade1)."<br>";
        echo "$idade2: ".maiorIdade($idade2)."<br>";
        echo "$idade3: ".maiorIdade($idade3)."<br>";
        
    ?>