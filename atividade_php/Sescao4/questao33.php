<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 33</h1>
    <h2>Resposta:</h2>
    <?php
    include_once '../Html/helpers.php';
        $estoques = [
            ["quantidade" => 5, "preço" => 10],
            ["quantidade" => 8, "preço" => 30],
            ["quantidade" => 3, "preço" => 25],
            ["quantidade" => 7, "preço" => 5],
        ];    
        calculoEstoqueMercadoria($estoques);
        $controle = 1;
        $valorEstoque = calculoEstoqueMercadoria($estoques);
        for ($i = 0; $i < 4; $i++) {
            echo "O custo total do ".$controle."* estoque é: ".$valorEstoque[$i]."<br>";
            $controle ++;
        }
    ?>