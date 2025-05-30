<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 38</h1>
    <h2>Resposta:</h2>
    <?php
    include_once '../Html/helpers.php';
        $salario1 = 12345;
        $salario2 = 3256;
        $salario3 = "Alex";
        echo "$salario1: ".ajustarSalario($salario1)."<br>";
        echo "$salario2: ".ajustarSalario($salario2)."<br>";
        echo "$salario3: ".ajustarSalario($salario3)."<br>";
        
    ?>