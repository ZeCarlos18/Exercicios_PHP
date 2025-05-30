<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 48</h1>
    <h2>Resposta:</h2>
    <?php
        echo "Usando o require_once mais de uma vez o script simplesmente é ignorado, mas a execução do resto do codigo continua."."<br>"."Porém, ao tentear usar o require, seja o require_once, ou o require normal, se qualquer um dlees tenha sido usado antes, o sript ignora qualquer outra linha de codigo e emite um Fatal Error."."<br>";
        echo "Testando Require_once"."<br>";
        require_once '../Html/helpers.php';
        boasVindas();
        echo "<br>".'Primeiro teste bem suscedido'."<br>";
        require_once '../Html/helpers.php';
        boasVindas();
        echo "<br>".'Segundo teste bem suscedido'."<br>";
        echo "Testando o Require"."<br>";
        require '../Html/helpers.php';
        boasVindas();
        echo "<br>".'Primeiro Teste Bem suscedido.';
        require '../Html/helpers.php';
        echo 'Segundo teste Bem suscedida';
    ?>
